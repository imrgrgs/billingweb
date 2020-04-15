<div class="table-responsive">
    <table class="table" id="pins-table">
        <thead>
            <tr>
                <th>@lang('models/pins.fields.pin_number')</th>
        <th>@lang('models/pins.fields.pin_plataforma')</th>
        <th>@lang('models/pins.fields.pin_user_id')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pins as $pin)
            <tr>
                <td>{{ $pin->pin_number }}</td>
            <td>{{ $pin->pin_plataforma }}</td>
            <td>{{ $pin->pin_user_id }}</td>
                <td>
                    {!! Form::open(['route' => ['pins.destroy', $pin->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pins.show', [$pin->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('pins.edit', [$pin->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
