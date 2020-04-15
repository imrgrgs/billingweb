<div class="table-responsive">
    <table class="table" id="fonesAnatels-table">
        <thead>
            <tr>
                <th>@lang('models/fonesanatel.fields.anal_sigla_uf')</th>
        <th>@lang('models/fonesanatel.fields.anal_sigla_cnl')</th>
        <th>@lang('models/fonesanatel.fields.anal_codigo_cnl')</th>
        <th>@lang('models/fonesanatel.fields.anal_localidade')</th>
        <th>@lang('models/fonesanatel.fields.anal_municipio')</th>
        <th>@lang('models/fonesanatel.fields.anal_codigo_area')</th>
        <th>@lang('models/fonesanatel.fields.anal_prefixo')</th>
        <th>@lang('models/fonesanatel.fields.anal_prestadora')</th>
        <th>@lang('models/fonesanatel.fields.anal_faixa_ini')</th>
        <th>@lang('models/fonesanatel.fields.anal_faixa_fim')</th>
        <th>@lang('models/fonesanatel.fields.anal_latitude')</th>
        <th>@lang('models/fonesanatel.fields.anal_hemisferio')</th>
        <th>@lang('models/fonesanatel.fields.anal_longitude')</th>
        <th>@lang('models/fonesanatel.fields.anal_sigla_cnl_local')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($fonesAnatels as $fonesAnatel)
            <tr>
                <td>{{ $fonesAnatel->anal_sigla_uf }}</td>
            <td>{{ $fonesAnatel->anal_sigla_cnl }}</td>
            <td>{{ $fonesAnatel->anal_codigo_cnl }}</td>
            <td>{{ $fonesAnatel->anal_localidade }}</td>
            <td>{{ $fonesAnatel->anal_municipio }}</td>
            <td>{{ $fonesAnatel->anal_codigo_area }}</td>
            <td>{{ $fonesAnatel->anal_prefixo }}</td>
            <td>{{ $fonesAnatel->anal_prestadora }}</td>
            <td>{{ $fonesAnatel->anal_faixa_ini }}</td>
            <td>{{ $fonesAnatel->anal_faixa_fim }}</td>
            <td>{{ $fonesAnatel->anal_latitude }}</td>
            <td>{{ $fonesAnatel->anal_hemisferio }}</td>
            <td>{{ $fonesAnatel->anal_longitude }}</td>
            <td>{{ $fonesAnatel->anal_sigla_cnl_local }}</td>
                <td>
                    {!! Form::open(['route' => ['fonesAnatels.destroy', $fonesAnatel->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('fonesAnatels.show', [$fonesAnatel->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('fonesAnatels.edit', [$fonesAnatel->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
