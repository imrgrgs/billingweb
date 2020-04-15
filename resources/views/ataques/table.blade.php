<div class="table-responsive">
    <table class="table" id="ataques-table">
        <thead>
            <tr>
                <th>@lang('models/ataque.fields.ata_data')</th>
        <th>@lang('models/ataque.fields.ata_hora')</th>
        <th>@lang('models/ataque.fields.ata_login')</th>
        <th>@lang('models/ataque.fields.ata_ip')</th>
        <th>@lang('models/ataque.fields.ata_temp')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ataques as $ataque)
            <tr>
                <td>{{ $ataque->ata_data }}</td>
            <td>{{ $ataque->ata_hora }}</td>
            <td>{{ $ataque->ata_login }}</td>
            <td>{{ $ataque->ata_ip }}</td>
            <td>{{ $ataque->ata_temp }}</td>
                <td>
                    {!! Form::open(['route' => ['ataques.destroy', $ataque->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ataques.show', [$ataque->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('ataques.edit', [$ataque->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
