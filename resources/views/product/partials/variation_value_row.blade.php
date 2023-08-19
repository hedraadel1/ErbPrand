@php
    $variation_name = !empty($variation_name) ? $variation_name : null;
    $variation_value_id = !empty($variation_value_id) ? $variation_value_id : null;
    
    $name = empty($row_type) || $row_type == 'add' ? 'product_variation' : 'product_variation_edit';
    
    $readonly = !empty($variation_value_id) ? 'readonly' : '';
@endphp

@if (!session('business.enable_price_tax'))
    @php
        $default = 0;
        $class = 'hide';
    @endphp
@else
    @php
        $default = null;
        $class = '';
    @endphp
@endif

<tr>
    <td>
        {!! Form::text($name . '[' . $variation_index . '][variations][' . $value_index . '][sub_sku]', null, [
            'class' => 'form-control input-sm input_sub_sku',
        ]) !!}

        {!! Form::hidden(
            $name . '[' . $variation_index . '][variations][' . $value_index . '][variation_value_id]',
            $variation_value_id,
        ) !!}
    </td>
    <td>
        {!! Form::text($name . '[' . $variation_index . '][variations][' . $value_index . '][value]', $variation_name, [
            'class' => 'form-control input-sm variation_value_name',
            'required',
            $readonly,
        ]) !!}
    </td>
    <td colspan="2" class="{{ $class }} input-group">
        <div class="{{ $loop->first ? 'col-sm-10' : 'col-sm-12' }} " style="padding: 0px">
            {!! Form::text(
                $name . '[' . $variation_index . '][variations][' . $value_index . '][default_purchase_price]',
                $default,
                [
                    'class' => 'form-control prcwidth input-sm variable_dpp input_number',
                    'placeholder' => __('product.exc_of_tax'),
                    'required',
                ],
            ) !!}
        </div>
        @if ($loop->first)
            <div class="col-sm-2" style="padding: 0px">
                <button type="button" class="btn btn-default bg-white btn-flat apply-all btn-sm p-5-5"
                    data-toggle="tooltip" title="@lang('lang_v1.apply_all')" data-target-class=".variable_dpp_inc_tax"><i
                        class="fas fa-check-double"></i></button>
            </div>
        @endif
        <div style="display:none" class="">
            <div class="input-group">
                {!! Form::text($name . '[' . $variation_index . '][variations][' . $value_index . '][dpp_inc_tax]', $default, [
                    'class' => 'form-control input-sm variable_dpp_inc_tax input_number',
                    'placeholder' => __('product.inc_of_tax'),
                    'required',
                ]) !!}
                @if ($value_index == 0)
                    <span class="input-group-btn">
                    </span>
                @endif
            </div>
        </div>
    </td>
    <td class="{{ $class }}">
        <div class="input-group">
            {!! Form::text(
                $name . '[' . $variation_index . '][variations][' . $value_index . '][profit_percent]',
                $profit_percent,
                ['class' => 'form-control input-sm variable_profit_percent input_number', 'required'],
            ) !!}
            @if ($value_index == 0)
                <span class="input-group-btn">
                    <button type="button" class="btn btn-default bg-white btn-flat apply-all btn-sm p-5-5"
                        data-toggle="tooltip" title="@lang('lang_v1.apply_all')" data-target-class=".variable_profit_percent"><i
                            class="fas fa-check-double"></i></button>
                </span>
            @endif
        </div>
    </td>
    <td class="{{ $class }} input-group">
        <div class="col-sm-10" style="padding:0px">
            {!! Form::text(
                $name . '[' . $variation_index . '][variations][' . $value_index . '][default_sell_price]',
                $default,
                [
                    'class' => 'form-control prcwidth2 input-sm variable_dsp input_number',
                    'placeholder' => __('product.exc_of_tax'),
                    'required',
                ],
            ) !!}

            {!! Form::text(
                $name . '[' . $variation_index . '][variations][' . $value_index . '][sell_price_inc_tax]',
                $default,
                [
                    'class' => 'form-control prcwidth2 input-sm variable_dsp_inc_tax input_number',
                    'placeholder' => __('product.inc_of_tax'),
                    'required',
                ],
            ) !!}
        </div>
        @if ($loop->first)
            <div class="col-sm-2" style="padding: 0px">
                <button type="button" class="btn btn-default bg-white btn-flat apply-all btn-sm p-5-5"
                    data-toggle="tooltip" title="@lang('lang_v1.apply_all')" data-target-class=".variable_dsp"><i
                        class="fas fa-check-double"></i></button>
            </div>
        @endif
    </td>
    <td>{!! Form::file('variation_images_' . $variation_index . '_' . $value_index . '[]', [
        'class' => 'variation_images imgselect',
        'accept' => 'image/*',
        'multiple',
    ]) !!}</td>
    <td>
        <button type="button" class="btn btn-danger btn-xs remove_variation_value_row">-</button>
        <input type="hidden" class="variation_row_index" value="{{ $value_index }}">
    </td>
</tr>