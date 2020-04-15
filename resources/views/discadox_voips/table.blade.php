<div class="table-responsive">
    <table class="table" id="discadoxVoips-table">
        <thead>
            <tr>
                <th>@lang('models/discadoxvoip.fields.dis_numerodiscado')</th>
        <th>@lang('models/discadoxvoip.fields.dis_login_voip')</th>
        <th>@lang('models/discadoxvoip.fields.dis_representante_id')</th>
        <th>@lang('models/discadoxvoip.fields.dis_fornecedor_id')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($discadoxVoips as $discadoxVoip)
            <tr>
                <td>{{ $discadoxVoip->dis_numerodiscado }}</td>
            <td>{{ $discadoxVoip->dis_login_voip }}</td>
            <td>{{ $discadoxVoip->dis_representante_id }}</td>
            <td>{{ $discadoxVoip->dis_fornecedor_id }}</td>
                <td>
                    {!! Form::open(['route' => ['discadoxVoips.destroy', $discadoxVoip->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('discadoxVoips.show', [$discadoxVoip->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('discadoxVoips.edit', [$discadoxVoip->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
