<div class="table-responsive">
    <table class="table" id="adesaos-table">
        <thead>
            <tr>
                <th>@lang('models/adesao.fields.ads_assinante_id')</th>
        <th>@lang('models/adesao.fields.ads_plano_id')</th>
        <th>@lang('models/adesao.fields.ads_data_contrato')</th>
        <th>@lang('models/adesao.fields.ads_franquia')</th>
        <th>@lang('models/adesao.fields.ads_data_teto')</th>
        <th>@lang('models/adesao.fields.ads_minutos_utilizadas')</th>
        <th>@lang('models/adesao.fields.ads_status')</th>
        <th>@lang('models/adesao.fields.ads_nossonumero')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($adesaos as $adesao)
            <tr>
                <td>{{ $adesao->ads_assinante_id }}</td>
            <td>{{ $adesao->ads_plano_id }}</td>
            <td>{{ $adesao->ads_data_contrato }}</td>
            <td>{{ $adesao->ads_franquia }}</td>
            <td>{{ $adesao->ads_data_teto }}</td>
            <td>{{ $adesao->ads_minutos_utilizadas }}</td>
            <td>{{ $adesao->ads_status }}</td>
            <td>{{ $adesao->ads_nossonumero }}</td>
                <td>
                    {!! Form::open(['route' => ['adesaos.destroy', $adesao->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('adesaos.show', [$adesao->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('adesaos.edit', [$adesao->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
