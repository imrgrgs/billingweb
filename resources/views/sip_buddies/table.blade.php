<div class="table-responsive">
    <table class="table" id="sipBuddies-table">
        <thead>
            <tr>
                <th>@lang('models/sip_buddies.fields.name')</th>
        <th>@lang('models/sip_buddies.fields.accountcode')</th>
        <th>@lang('models/sip_buddies.fields.amaflags')</th>
        <th>@lang('models/sip_buddies.fields.callgroup')</th>
        <th>@lang('models/sip_buddies.fields.callerid')</th>
        <th>@lang('models/sip_buddies.fields.canreinvite')</th>
        <th>@lang('models/sip_buddies.fields.context')</th>
        <th>@lang('models/sip_buddies.fields.defaultip')</th>
        <th>@lang('models/sip_buddies.fields.dtmfmode')</th>
        <th>@lang('models/sip_buddies.fields.fromuser')</th>
        <th>@lang('models/sip_buddies.fields.fromdomain')</th>
        <th>@lang('models/sip_buddies.fields.host')</th>
        <th>@lang('models/sip_buddies.fields.insecure')</th>
        <th>@lang('models/sip_buddies.fields.language')</th>
        <th>@lang('models/sip_buddies.fields.mailbox')</th>
        <th>@lang('models/sip_buddies.fields.md5secret')</th>
        <th>@lang('models/sip_buddies.fields.nat')</th>
        <th>@lang('models/sip_buddies.fields.deny')</th>
        <th>@lang('models/sip_buddies.fields.permit')</th>
        <th>@lang('models/sip_buddies.fields.mask')</th>
        <th>@lang('models/sip_buddies.fields.pickupgroup')</th>
        <th>@lang('models/sip_buddies.fields.port')</th>
        <th>@lang('models/sip_buddies.fields.qualify')</th>
        <th>@lang('models/sip_buddies.fields.restrictcid')</th>
        <th>@lang('models/sip_buddies.fields.rtptimeout')</th>
        <th>@lang('models/sip_buddies.fields.rtpholdtimeout')</th>
        <th>@lang('models/sip_buddies.fields.secret')</th>
        <th>@lang('models/sip_buddies.fields.type')</th>
        <th>@lang('models/sip_buddies.fields.username')</th>
        <th>@lang('models/sip_buddies.fields.disallow')</th>
        <th>@lang('models/sip_buddies.fields.allow')</th>
        <th>@lang('models/sip_buddies.fields.musiconhold')</th>
        <th>@lang('models/sip_buddies.fields.regseconds')</th>
        <th>@lang('models/sip_buddies.fields.ipaddr')</th>
        <th>@lang('models/sip_buddies.fields.regexten')</th>
        <th>@lang('models/sip_buddies.fields.cancallforward')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sipBuddies as $sipBuddie)
            <tr>
                <td>{{ $sipBuddie->name }}</td>
            <td>{{ $sipBuddie->accountcode }}</td>
            <td>{{ $sipBuddie->amaflags }}</td>
            <td>{{ $sipBuddie->callgroup }}</td>
            <td>{{ $sipBuddie->callerid }}</td>
            <td>{{ $sipBuddie->canreinvite }}</td>
            <td>{{ $sipBuddie->context }}</td>
            <td>{{ $sipBuddie->defaultip }}</td>
            <td>{{ $sipBuddie->dtmfmode }}</td>
            <td>{{ $sipBuddie->fromuser }}</td>
            <td>{{ $sipBuddie->fromdomain }}</td>
            <td>{{ $sipBuddie->host }}</td>
            <td>{{ $sipBuddie->insecure }}</td>
            <td>{{ $sipBuddie->language }}</td>
            <td>{{ $sipBuddie->mailbox }}</td>
            <td>{{ $sipBuddie->md5secret }}</td>
            <td>{{ $sipBuddie->nat }}</td>
            <td>{{ $sipBuddie->deny }}</td>
            <td>{{ $sipBuddie->permit }}</td>
            <td>{{ $sipBuddie->mask }}</td>
            <td>{{ $sipBuddie->pickupgroup }}</td>
            <td>{{ $sipBuddie->port }}</td>
            <td>{{ $sipBuddie->qualify }}</td>
            <td>{{ $sipBuddie->restrictcid }}</td>
            <td>{{ $sipBuddie->rtptimeout }}</td>
            <td>{{ $sipBuddie->rtpholdtimeout }}</td>
            <td>{{ $sipBuddie->secret }}</td>
            <td>{{ $sipBuddie->type }}</td>
            <td>{{ $sipBuddie->username }}</td>
            <td>{{ $sipBuddie->disallow }}</td>
            <td>{{ $sipBuddie->allow }}</td>
            <td>{{ $sipBuddie->musiconhold }}</td>
            <td>{{ $sipBuddie->regseconds }}</td>
            <td>{{ $sipBuddie->ipaddr }}</td>
            <td>{{ $sipBuddie->regexten }}</td>
            <td>{{ $sipBuddie->cancallforward }}</td>
                <td>
                    {!! Form::open(['route' => ['sipBuddies.destroy', $sipBuddie->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sipBuddies.show', [$sipBuddie->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('sipBuddies.edit', [$sipBuddie->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
