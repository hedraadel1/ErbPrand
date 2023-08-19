@extends('layouts.app')
@section('title', __('category.category') . '3')

@section('content')

    <!-- Content Header (Page header) -->
    <section style="margin-top: -25px;" class="content-header">
        <div class="newbox blackline">
            <h3 style="margin-top: 10px;margin-bottom: 10px;">
                @lang('category.category') 3
            </h3>
        </div>

    </section>


    <!-- Main content -->
    <section class="content">
        @component('components.widget', ['class' => 'box-primary', 'title' => __('category.all_your_category') . '3'])
            @can('category.create')
                @slot('tool')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-tools">
                                <button type="button" class="btn btn-block button-add btn-modal"
                                    data-href="{{ action('Category3Controller@create') }}" data-container=".category3_modal">
                                    <i class="fa fa-plus"></i> @lang('messages.add')</button>
                            </div>
                        </div>
                    </div>
                @endslot
            @endcan
            @can('category.view')
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="category3_table">
                        <thead>
                            <tr>
                                <th>@lang('category.category_name')</th>
                                <th>@lang('lang_v1.description')</th>
                                <th>@lang('messages.action')</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            @endcan
        @endcomponent

        <div class="modal fade category3_modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
        </div>

    </section>
    <!-- /.content -->

@endsection
