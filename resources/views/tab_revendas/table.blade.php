<div class="table-responsive">
    <table class="table" id="tabRevendas-table">
        <thead>
            <tr>
                <th>@lang('models/tabrevendas1.fields.tab_codigo')</th>
        <th>@lang('models/tabrevendas1.fields.tab_descricao')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tabRevendas as $tabRevenda)
            <tr>
                <td>{{ $tabRevenda->tab_codigo }}</td>
            <td>{{ $tabRevenda->tab_descricao }}</td>
                <td>
                    {!! Form::open(['route' => ['tabRevendas.destroy', $tabRevenda->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tabRevendas.show', [$tabRevenda->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tabRevendas.edit', [$tabRevenda->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
