@extends('layouts.app')

@section('title', __('user.add_employee'))

@section('content')

    <!-- Content Header (Page header) -->
    <section style="margin-top: -25px;" class="content-header">
        <div class="newbox blackline">
            <h3 style="margin-top: 10px;margin-bottom: 10px;">@lang('user.add_employee')</h3>
        </div>

    </section>


    <!-- Main content -->
    <section class="content">
        {!! Form::open(['url' => action('ManageUserController@store'), 'method' => 'post', 'id' => 'user_add_form']) !!}
        <div class="row">
            <div class="col-md-12">
                @component('components.widget')
                    <label style="display: none">
                        <input type="hidden" name="user_type" value="employee">
                        {!! Form::checkbox('is_employee', 'active', true, [
                            'class' => 'input-icheck status ',
                            'style' => 'display:none',
                        ]) !!} {{ __('lang_v1.status_for_user') }}

                    </label>
                    <div class="col-md-2">
                        <div class="form-group">
                            {!! Form::label('surname', __('business.prefix') . ':') !!}
                            {!! Form::text('surname', null, ['class' => 'form-control', 'placeholder' => __('business.prefix_placeholder')]) !!}
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            {!! Form::label('first_name', __('business.first_name') . ':*') !!}
                            {!! Form::text('first_name', null, [
                                'class' => 'form-control',
                                'required',
                                'placeholder' => __('business.first_name'),
                            ]) !!}
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            {!! Form::label('last_name', __('business.last_name') . ':') !!}
                            {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => __('business.last_name')]) !!}
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('email', __('business.email')) !!}
                            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => __('business.email')]) !!}
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="checkbox">
                                <br />
                                <label>
                                    {!! Form::checkbox('is_active', 'active', true, ['class' => 'input-icheck status']) !!} {{ __('lang_v1.status_for_user') }}
                                </label>
                                @show_tooltip(__('lang_v1.tooltip_enable_user_active'))
                            </div>
                        </div>
                    </div>
                @endcomponent
            </div>
            <div class="col-md-12">
                @component('components.widget', ['title' => __('lang_v1.roles_and_permissions')])
                    <div class="col-md-4" style="display: none">
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    {!! Form::checkbox('allow_login', 1, false, ['class' => 'input-icheck', 'id' => 'allow_login']) !!} {{ __('lang_v1.allow_login') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    {!! Form::checkbox('is_supervisor', 1, false, ['class' => 'input-icheck', 'id' => 'is_supervisor']) !!} {{ __('lang_v1.is_supervisor') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    {{-- <div class="user_auth_fields">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('username', __('business.username') . ':') !!}
                                @if (!empty($username_ext))
                                    <div class="input-group">
                                        {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => __('business.username')]) !!}
                                        <span class="input-group-addon">{{ $username_ext }}</span>
                                    </div>
                                    <p class="help-block" id="show_username"></p>
                                @else
                                    {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => __('business.username')]) !!}
                                @endif
                                <p class="help-block">@lang('lang_v1.username_help')</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('password', __('business.password') . ':*') !!}
                                {!! Form::password('password', [
                                    'class' => 'form-control',
                                    'required',
                                    'placeholder' => __('business.password'),
                                ]) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('confirm_password', __('business.confirm_password') . ':*') !!}
                                {!! Form::password('confirm_password', [
                                    'class' => 'form-control',
                                    'required',
                                    'placeholder' => __('business.confirm_password'),
                                ]) !!}
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="clearfix"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('role', __('user.role') . ':*') !!} @show_tooltip(__('lang_v1.admin_role_location_permission_help'))
                            {!! Form::select('role', $roles, null, ['class' => 'form-control select2']) !!}
                        </div>
                    </div> --}}
                    <div class="clearfix"></div>
                    <div class="col-md-3">
                        <h4>@lang('role.access_locations') @show_tooltip(__('tooltip.access_locations_permission'))</h4>
                    </div>
                    <div class="col-md-9">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label>
                                    {!! Form::checkbox('access_all_locations', 'access_all_locations', true, ['class' => 'input-icheck']) !!} {{ __('role.all_locations') }}
                                </label>
                                @show_tooltip(__('tooltip.all_location_permission'))
                            </div>
                        </div>
                        @foreach ($locations as $location)
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label>
                                        {!! Form::checkbox('location_permissions[]', 'location.' . $location->id, false, ['class' => 'input-icheck']) !!} {{ $location->name }} @if (!empty($location->location_id))
                                            ({{ $location->location_id }})
                                        @endif
                                    </label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endcomponent
            </div>

            <div class="col-md-12">
                @component('components.widget', ['title' => __('sale.sells')])
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('cmmsn_percent', __('lang_v1.cmmsn_percent') . ':') !!} @show_tooltip(__('lang_v1.commsn_percent_help'))
                            {!! Form::text('cmmsn_percent', null, [
                                'class' => 'form-control input_number',
                                'placeholder' => __('lang_v1.cmmsn_percent'),
                            ]) !!}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('cmmsn_percent2', __('lang_v1.cmmsn_percent') . ' 2 :') !!} @show_tooltip(__('lang_v1.commsn_percent_help'))
                            {!! Form::text('cmmsn_percent2', null, [
                                'class' => 'form-control input_number',
                                'placeholder' => __('lang_v1.cmmsn_percent') . ' 2 ',
                            ]) !!}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('max_sales_discount_percent', __('lang_v1.max_sales_discount_percent') . ':') !!} @show_tooltip(__('lang_v1.max_sales_discount_percent_help'))
                            {!! Form::text('max_sales_discount_percent', null, [
                                'class' => 'form-control input_number',
                                'placeholder' => __('lang_v1.max_sales_discount_percent'),
                            ]) !!}
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="checkbox">
                                <br />
                                <label>
                                    {!! Form::checkbox('selected_contacts', 1, false, ['class' => 'input-icheck', 'id' => 'selected_contacts']) !!} {{ __('lang_v1.allow_selected_contacts') }}
                                </label>
                                @show_tooltip(__('lang_v1.allow_selected_contacts_tooltip'))
                            </div>
                        </div>
                    </div>
                    {{-- <div class="clearfix"></div> --}}
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="checkbox">
                                <br>
                                <label>
                                    <input type="checkbox" name="is_agent" value="1" class="input-icheck "
                                        id="is_agent">{{ __('lang_v1.is_agent') }}

                                </label>
                                @show_tooltip(__('lang_v1.is_agent'))
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 hide selected_contacts_div">
                        <div class="form-group">
                            {!! Form::label('user_allowed_contacts', __('lang_v1.selected_contacts') . ':') !!}
                            <div class="form-group">
                                {!! Form::select('selected_contact_ids[]', [], null, [
                                    'class' => 'form-control select2',
                                    'multiple',
                                    'style' => 'width: 100%;',
                                    'id' => 'user_allowed_contacts',
                                ]) !!}
                            </div>
                        </div>
                    </div>
                @endcomponent
            </div>

        </div>
        @include('user.edit_profile_form_part')

        @if (!empty($form_partials))
            @foreach ($form_partials as $partial)
                {!! $partial !!}
            @endforeach
        @endif
        <div class="row">
            <div class="col-md-12 text-center">
                <button style="width:100%" type="submit" class="button-29"
                    id="submit_user_button">@lang('messages.save')</button>
            </div>
        </div>
        {!! Form::close() !!}
    @stop
    @section('javascript')
        <script type="text/javascript">
            __page_leave_confirmation('#user_add_form');
            $(document).ready(function() {
                $('#selected_contacts').on('ifChecked', function(event) {
                    $('div.selected_contacts_div').removeClass('hide');
                });
                $('#selected_contacts').on('ifUnchecked', function(event) {
                    $('div.selected_contacts_div').addClass('hide');
                });

                $('#allow_login').on('ifChecked', function(event) {
                    $('div.user_auth_fields').removeClass('hide');
                });
                $('#allow_login').on('ifUnchecked', function(event) {
                    $('div.user_auth_fields').addClass('hide');
                });

                $('#user_allowed_contacts').select2({
                    ajax: {
                        url: '/contacts/customers',
                        dataType: 'json',
                        delay: 250,
                        data: function(params) {
                            return {
                                q: params.term, // search term
                                page: params.page,
                                all_contact: true
                            };
                        },
                        processResults: function(data) {
                            return {
                                results: data,
                            };
                        },
                    },
                    templateResult: function(data) {
                        var template = '';
                        if (data.supplier_business_name) {
                            template += data.supplier_business_name + "<br>";
                        }
                        template += data.text + "<br>" + LANG.mobile + ": " + data.mobile;

                        return template;
                    },
                    minimumInputLength: 1,
                    escapeMarkup: function(markup) {
                        return markup;
                    },
                });
            });

            $('form#user_add_form').validate({
                rules: {
                    first_name: {
                        required: true,
                    },
                    email: {
                        email: true,
                        remote: {
                            url: "/business/register/check-email",
                            type: "post",
                            data: {
                                email: function() {
                                    return $("#email").val();
                                }
                            }
                        }
                    },
                    password: {
                        required: true,
                        minlength: 5
                    },
                    confirm_password: {
                        equalTo: "#password"
                    },
                    username: {
                        minlength: 5,
                        remote: {
                            url: "/business/register/check-username",
                            type: "post",
                            data: {
                                username: function() {
                                    return $("#username").val();
                                },
                                @if (!empty($username_ext))
                                    username_ext: "{{ $username_ext }}"
                                @endif
                            }
                        }
                    }
                },
                messages: {
                    password: {
                        minlength: 'Password should be minimum 5 characters',
                    },
                    confirm_password: {
                        equalTo: 'Should be same as password'
                    },
                    username: {
                        remote: 'Invalid username or User already exist'
                    },
                    email: {
                        remote: '{{ __('validation.unique', ['attribute' => __('business.email')]) }}'
                    }
                }
            });
            $('#username').change(function() {
                if ($('#show_username').length > 0) {
                    if ($(this).val().trim() != '') {
                        $('#show_username').html("{{ __('lang_v1.your_username_will_be') }}: <b>" + $(this).val() +
                            "{{ $username_ext }}</b>");
                    } else {
                        $('#show_username').html('');
                    }
                }
            });

            function calc_salary() {
                $('#error_msg').html('');
                var month_num = $('#month_num').val();
                var hour_num = $('#hour_num').val();
                var salary = $('#salary').val();
                if (month_num.length > 0 && hour_num.length > 0 && salary.length > 0) {
                    var salary = (salary / month_num) / hour_num;
                    $('#essentials_salary').val(salary.toFixed(2));
                } else {
                    $('#error_msg').html('يجب ادخال عدد ايام الشهر والساعات وقيمه المرتب');

                }
            }
        </script>
    @endsection
