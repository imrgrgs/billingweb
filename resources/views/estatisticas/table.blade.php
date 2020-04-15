<div class="table-responsive">
    <table class="table" id="estatisticas-table">
        <thead>
            <tr>
                <th>@lang('models/estatisticas.fields.est_destino')</th>
        <th>@lang('models/estatisticas.fields.est_fornecedor_id')</th>
        <th>@lang('models/estatisticas.fields.est_representante_id')</th>
        <th>@lang('models/estatisticas.fields.est_status')</th>
        <th>@lang('models/estatisticas.fields.est_tempo_ate_atender')</th>
        <th>@lang('models/estatisticas.fields.est_tempo_conversa')</th>
        <th>@lang('models/estatisticas.fields.est_terminacao_id')</th>
        <th>@lang('models/estatisticas.fields.est_assinante')</th>
        <th>@lang('models/estatisticas.fields.est_data_inicio')</th>
        <th>@lang('models/estatisticas.fields.est_data_final')</th>
        <th>@lang('models/estatisticas.fields.est_tentativa')</th>
        <th>@lang('models/estatisticas.fields.est_uniqueid')</th>
        <th>@lang('models/estatisticas.fields.est_causahangup')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($estatisticas as $estatistica)
            <tr>
                <td>{{ $estatistica->est_destino }}</td>
            <td>{{ $estatistica->est_fornecedor_id }}</td>
            <td>{{ $estatistica->est_representante_id }}</td>
            <td>{{ $estatistica->est_status }}</td>
            <td>{{ $estatistica->est_tempo_ate_atender }}</td>
            <td>{{ $estatistica->est_tempo_conversa }}</td>
            <td>{{ $estatistica->est_terminacao_id }}</td>
            <td>{{ $estatistica->est_assinante }}</td>
            <td>{{ $estatistica->est_data_inicio }}</td>
            <td>{{ $estatistica->est_data_final }}</td>
            <td>{{ $estatistica->est_tentativa }}</td>
            <td>{{ $estatistica->est_uniqueid }}</td>
            <td>{{ $estatistica->est_causahangup }}</td>
                <td>
                    {!! Form::open(['route' => ['estatisticas.destroy', $estatistica->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('estatisticas.show', [$estatistica->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('estatisticas.edit', [$estatistica->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
