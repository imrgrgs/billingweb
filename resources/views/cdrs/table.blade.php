<div class="table-responsive">
    <table class="table" id="cdrs-table">
        <thead>
            <tr>
                <th>@lang('models/cdr.fields.calldate')</th>
        <th>@lang('models/cdr.fields.clid')</th>
        <th>@lang('models/cdr.fields.src')</th>
        <th>@lang('models/cdr.fields.dst')</th>
        <th>@lang('models/cdr.fields.dcontext')</th>
        <th>@lang('models/cdr.fields.channel')</th>
        <th>@lang('models/cdr.fields.dstchannel')</th>
        <th>@lang('models/cdr.fields.lastapp')</th>
        <th>@lang('models/cdr.fields.lastdata')</th>
        <th>@lang('models/cdr.fields.start')</th>
        <th>@lang('models/cdr.fields.answer')</th>
        <th>@lang('models/cdr.fields.end')</th>
        <th>@lang('models/cdr.fields.duration')</th>
        <th>@lang('models/cdr.fields.billsec')</th>
        <th>@lang('models/cdr.fields.disposition')</th>
        <th>@lang('models/cdr.fields.amaflags')</th>
        <th>@lang('models/cdr.fields.accountcode')</th>
        <th>@lang('models/cdr.fields.uniqueid')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cdrs as $cdr)
            <tr>
                <td>{{ $cdr->calldate }}</td>
            <td>{{ $cdr->clid }}</td>
            <td>{{ $cdr->src }}</td>
            <td>{{ $cdr->dst }}</td>
            <td>{{ $cdr->dcontext }}</td>
            <td>{{ $cdr->channel }}</td>
            <td>{{ $cdr->dstchannel }}</td>
            <td>{{ $cdr->lastapp }}</td>
            <td>{{ $cdr->lastdata }}</td>
            <td>{{ $cdr->start }}</td>
            <td>{{ $cdr->answer }}</td>
            <td>{{ $cdr->end }}</td>
            <td>{{ $cdr->duration }}</td>
            <td>{{ $cdr->billsec }}</td>
            <td>{{ $cdr->disposition }}</td>
            <td>{{ $cdr->amaflags }}</td>
            <td>{{ $cdr->accountcode }}</td>
            <td>{{ $cdr->uniqueid }}</td>
                <td>
                    {!! Form::open(['route' => ['cdrs.destroy', $cdr->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cdrs.show', [$cdr->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('cdrs.edit', [$cdr->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
