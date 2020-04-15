<div class="table-responsive">
    <table class="table" id="saldoGerals-table">
        <thead>
            <tr>
                <th>@lang('models/saldosgerais.fields.sdg_data')</th>
        <th>@lang('models/saldosgerais.fields.sdg_hora')</th>
        <th>@lang('models/saldosgerais.fields.sdg_tipo')</th>
        <th>@lang('models/saldosgerais.fields.sdg_valor')</th>
        <th>@lang('models/saldosgerais.fields.sdg_codigo')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($saldoGerals as $saldoGeral)
            <tr>
                <td>{{ $saldoGeral->sdg_data }}</td>
            <td>{{ $saldoGeral->sdg_hora }}</td>
            <td>{{ $saldoGeral->sdg_tipo }}</td>
            <td>{{ $saldoGeral->sdg_valor }}</td>
            <td>{{ $saldoGeral->sdg_codigo }}</td>
                <td>
                    {!! Form::open(['route' => ['saldoGerals.destroy', $saldoGeral->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('saldoGerals.show', [$saldoGeral->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('saldoGerals.edit', [$saldoGeral->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
