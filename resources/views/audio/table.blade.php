<div class="table-responsive">
    <table class="table" id="audio-table">
        <thead>
            <tr>
                <th>@lang('models/audios.fields.aud_data')</th>
        <th>@lang('models/audios.fields.aud_hora')</th>
        <th>@lang('models/audios.fields.aud_assinante')</th>
        <th>@lang('models/audios.fields.aud_destino')</th>
        <th>@lang('models/audios.fields.aud_tempo')</th>
        <th>@lang('models/audios.fields.aud_arquivo')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($audio as $audio)
            <tr>
                <td>{{ $audio->aud_data }}</td>
            <td>{{ $audio->aud_hora }}</td>
            <td>{{ $audio->aud_assinante }}</td>
            <td>{{ $audio->aud_destino }}</td>
            <td>{{ $audio->aud_tempo }}</td>
            <td>{{ $audio->aud_arquivo }}</td>
                <td>
                    {!! Form::open(['route' => ['audio.destroy', $audio->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('audio.show', [$audio->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('audio.edit', [$audio->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
