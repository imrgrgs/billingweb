<div class="table-responsive">
    <table class="table" id="fonesProcons-table">
        <thead>
            <tr>
                <th>@lang('models/fonesprocon.fields.fpro_ddd')</th>
        <th>@lang('models/fonesprocon.fields.fpro_fone')</th>
        <th>@lang('models/fonesprocon.fields.fpro_dddfone')</th>
        <th>@lang('models/fonesprocon.fields.fpro_cadastro')</th>
        <th>@lang('models/fonesprocon.fields.fpro_evento')</th>
        <th>@lang('models/fonesprocon.fields.fpro_data_evento')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($fonesProcons as $fonesProcon)
            <tr>
                <td>{{ $fonesProcon->fpro_ddd }}</td>
            <td>{{ $fonesProcon->fpro_fone }}</td>
            <td>{{ $fonesProcon->fpro_dddfone }}</td>
            <td>{{ $fonesProcon->fpro_cadastro }}</td>
            <td>{{ $fonesProcon->fpro_evento }}</td>
            <td>{{ $fonesProcon->fpro_data_evento }}</td>
                <td>
                    {!! Form::open(['route' => ['fonesProcons.destroy', $fonesProcon->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('fonesProcons.show', [$fonesProcon->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('fonesProcons.edit', [$fonesProcon->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
