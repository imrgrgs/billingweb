<!-- Cac Representante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cac_representante_id', __('models/cacsrevenda.fields.cac_representante_id').':') !!}
    {!! Form::number('cac_representante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Cac Data Abertura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cac_data_abertura', __('models/cacsrevenda.fields.cac_data_abertura').':') !!}
    {!! Form::text('cac_data_abertura', null, ['class' => 'form-control','id'=>'cac_data_abertura']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#cac_data_abertura').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Cac Hora Abertura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cac_hora_abertura', __('models/cacsrevenda.fields.cac_hora_abertura').':') !!}
    {!! Form::text('cac_hora_abertura', null, ['class' => 'form-control']) !!}
</div>

<!-- Cac Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cac_tipo', __('models/cacsrevenda.fields.cac_tipo').':') !!}
    {!! Form::text('cac_tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Cac Descricao Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('cac_descricao', __('models/cacsrevenda.fields.cac_descricao').':') !!}
    {!! Form::textarea('cac_descricao', null, ['class' => 'form-control']) !!}
</div>
@push('scripts')
    <script type="text/javascript">
        CKEDITOR.replace('cac_descricao', {
          language: '{{ strtolower(config('app.locale')) }}',
          height: '150px',
        })
    </script>
@endpush


<!-- Cac Solucao Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('cac_solucao', __('models/cacsrevenda.fields.cac_solucao').':') !!}
    {!! Form::textarea('cac_solucao', null, ['class' => 'form-control']) !!}
</div>
@push('scripts')
    <script type="text/javascript">
        CKEDITOR.replace('cac_solucao', {
          language: '{{ strtolower(config('app.locale')) }}',
          height: '150px',
        })
    </script>
@endpush


<!-- Cac Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cac_status', __('models/cacsrevenda.fields.cac_status').':') !!}
    {!! Form::text('cac_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Cac Nomecontato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cac_nomecontato', __('models/cacsrevenda.fields.cac_nomecontato').':') !!}
    {!! Form::text('cac_nomecontato', null, ['class' => 'form-control']) !!}
</div>

<!-- Cac Data Solucao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cac_data_solucao', __('models/cacsrevenda.fields.cac_data_solucao').':') !!}
    {!! Form::text('cac_data_solucao', null, ['class' => 'form-control','id'=>'cac_data_solucao']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#cac_data_solucao').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Cac Hora Solucao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cac_hora_solucao', __('models/cacsrevenda.fields.cac_hora_solucao').':') !!}
    {!! Form::text('cac_hora_solucao', null, ['class' => 'form-control']) !!}
</div>

<!-- Cac Login Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cac_login', __('models/cacsrevenda.fields.cac_login').':') !!}
    {!! Form::text('cac_login', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('cacRevendas.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
