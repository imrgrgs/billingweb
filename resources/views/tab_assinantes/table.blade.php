<div class="table-responsive">
    <table class="table" id="tabAssinantes-table">
        <thead>
            <tr>
                <th>@lang('models/tabassinante18.fields.tab_codigo')</th>
        <th>@lang('models/tabassinante18.fields.tab_descricao')</th>
        <th>@lang('models/tabassinante18.fields.tab_agente_id')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tabAssinantes as $tabAssinante)
            <tr>
                <td>{{ $tabAssinante->tab_codigo }}</td>
            <td>{{ $tabAssinante->tab_descricao }}</td>
            <td>{{ $tabAssinante->tab_agente_id }}</td>
                <td>
                    {!! Form::open(['route' => ['tabAssinantes.destroy', $tabAssinante->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tabAssinantes.show', [$tabAssinante->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tabAssinantes.edit', [$tabAssinante->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
