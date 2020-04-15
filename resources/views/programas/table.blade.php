<div class="table-responsive">
    <table class="table" id="programas-table">
        <thead>
            <tr>
                <th>@lang('models/programas.fields.prg_codigo')</th>
        <th>@lang('models/programas.fields.prg_descricao')</th>
        <th>@lang('models/programas.fields.prg_menu')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($programas as $programa)
            <tr>
                <td>{{ $programa->prg_codigo }}</td>
            <td>{{ $programa->prg_descricao }}</td>
            <td>{{ $programa->prg_menu }}</td>
                <td>
                    {!! Form::open(['route' => ['programas.destroy', $programa->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('programas.show', [$programa->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('programas.edit', [$programa->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
