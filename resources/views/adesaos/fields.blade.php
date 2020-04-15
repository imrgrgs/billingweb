<!-- Ads Assinante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ads_assinante_id', __('models/adesao.fields.ads_assinante_id').':') !!}
    {!! Form::number('ads_assinante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Ads Plano Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ads_plano_id', __('models/adesao.fields.ads_plano_id').':') !!}
    {!! Form::number('ads_plano_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Ads Data Contrato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ads_data_contrato', __('models/adesao.fields.ads_data_contrato').':') !!}
    {!! Form::text('ads_data_contrato', null, ['class' => 'form-control','id'=>'ads_data_contrato']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#ads_data_contrato').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Ads Franquia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ads_franquia', __('models/adesao.fields.ads_franquia').':') !!}
    {!! Form::number('ads_franquia', null, ['class' => 'form-control']) !!}
</div>

<!-- Ads Data Teto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ads_data_teto', __('models/adesao.fields.ads_data_teto').':') !!}
    {!! Form::text('ads_data_teto', null, ['class' => 'form-control','id'=>'ads_data_teto']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#ads_data_teto').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Ads Minutos Utilizadas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ads_minutos_utilizadas', __('models/adesao.fields.ads_minutos_utilizadas').':') !!}
    {!! Form::number('ads_minutos_utilizadas', null, ['class' => 'form-control']) !!}
</div>

<!-- Ads Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ads_status', __('models/adesao.fields.ads_status').':') !!}
    {!! Form::text('ads_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Ads Nossonumero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ads_nossonumero', __('models/adesao.fields.ads_nossonumero').':') !!}
    {!! Form::text('ads_nossonumero', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('adesaos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
