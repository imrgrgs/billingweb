<div class="table-responsive">
    <table class="table" id="posPagos-table">
        <thead>
            <tr>
                <th>@lang('models/pospagos.fields.pos_plano_id')</th>
        <th>@lang('models/pospagos.fields.pos_data_contrato')</th>
        <th>@lang('models/pospagos.fields.pos_utilizado_fixo')</th>
        <th>@lang('models/pospagos.fields.pos_utilizado_celular')</th>
        <th>@lang('models/pospagos.fields.pos_dia_zerar')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($posPagos as $posPago)
            <tr>
                <td>{{ $posPago->pos_plano_id }}</td>
            <td>{{ $posPago->pos_data_contrato }}</td>
            <td>{{ $posPago->pos_utilizado_fixo }}</td>
            <td>{{ $posPago->pos_utilizado_celular }}</td>
            <td>{{ $posPago->pos_dia_zerar }}</td>
                <td>
                    {!! Form::open(['route' => ['posPagos.destroy', $posPago->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('posPagos.show', [$posPago->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('posPagos.edit', [$posPago->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
