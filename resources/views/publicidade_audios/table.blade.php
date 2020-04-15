<div class="table-responsive">
    <table class="table" id="publicidadeAudios-table">
        <thead>
            <tr>
                <th>@lang('models/publicidadeaudios.fields.pub_id')</th>
        <th>@lang('models/publicidadeaudios.fields.pbaud_seq')</th>
        <th>@lang('models/publicidadeaudios.fields.pbaud_descricao')</th>
        <th>@lang('models/publicidadeaudios.fields.pbaud_status')</th>
        <th>@lang('models/publicidadeaudios.fields.pbaud_gingle_wav')</th>
        <th>@lang('models/publicidadeaudios.fields.pbaud_tempo_gingle')</th>
        <th>@lang('models/publicidadeaudios.fields.pbaud_checar_satisfacao')</th>
        <th>@lang('models/publicidadeaudios.fields.pbaud_desvio_tipo')</th>
        <th>@lang('models/publicidadeaudios.fields.pbaud_desvio_chamar')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($publicidadeAudios as $publicidadeAudio)
            <tr>
                <td>{{ $publicidadeAudio->pub_id }}</td>
            <td>{{ $publicidadeAudio->pbaud_seq }}</td>
            <td>{{ $publicidadeAudio->pbaud_descricao }}</td>
            <td>{{ $publicidadeAudio->pbaud_status }}</td>
            <td>{{ $publicidadeAudio->pbaud_gingle_wav }}</td>
            <td>{{ $publicidadeAudio->pbaud_tempo_gingle }}</td>
            <td>{{ $publicidadeAudio->pbaud_checar_satisfacao }}</td>
            <td>{{ $publicidadeAudio->pbaud_desvio_tipo }}</td>
            <td>{{ $publicidadeAudio->pbaud_desvio_chamar }}</td>
                <td>
                    {!! Form::open(['route' => ['publicidadeAudios.destroy', $publicidadeAudio->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('publicidadeAudios.show', [$publicidadeAudio->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('publicidadeAudios.edit', [$publicidadeAudio->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
