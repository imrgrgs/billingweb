<div class="table-responsive">
    <table class="table" id="smsCampanhaFones-table">
        <thead>
            <tr>
                <th>@lang('models/smscampanhafone1.fields.smscf_telefone')</th>
        <th>@lang('models/smscampanhafone1.fields.smscf_nome')</th>
        <th>@lang('models/smscampanhafone1.fields.smscf_data_ligar')</th>
        <th>@lang('models/smscampanhafone1.fields.smscf_hora_ligar')</th>
        <th>@lang('models/smscampanhafone1.fields.smscf_data_ligou')</th>
        <th>@lang('models/smscampanhafone1.fields.smscf_hora_ligou')</th>
        <th>@lang('models/smscampanhafone1.fields.smscf_terminacao_id')</th>
        <th>@lang('models/smscampanhafone1.fields.smscf_criouarq')</th>
        <th>@lang('models/smscampanhafone1.fields.smscf_reinclusao')</th>
        <th>@lang('models/smscampanhafone1.fields.smscf_status')</th>
        <th>@lang('models/smscampanhafone1.fields.smscf_message')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($smsCampanhaFones as $smsCampanhaFone)
            <tr>
                <td>{{ $smsCampanhaFone->smscf_telefone }}</td>
            <td>{{ $smsCampanhaFone->smscf_nome }}</td>
            <td>{{ $smsCampanhaFone->smscf_data_ligar }}</td>
            <td>{{ $smsCampanhaFone->smscf_hora_ligar }}</td>
            <td>{{ $smsCampanhaFone->smscf_data_ligou }}</td>
            <td>{{ $smsCampanhaFone->smscf_hora_ligou }}</td>
            <td>{{ $smsCampanhaFone->smscf_terminacao_id }}</td>
            <td>{{ $smsCampanhaFone->smscf_criouarq }}</td>
            <td>{{ $smsCampanhaFone->smscf_reinclusao }}</td>
            <td>{{ $smsCampanhaFone->smscf_status }}</td>
            <td>{{ $smsCampanhaFone->smscf_message }}</td>
                <td>
                    {!! Form::open(['route' => ['smsCampanhaFones.destroy', $smsCampanhaFone->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('smsCampanhaFones.show', [$smsCampanhaFone->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('smsCampanhaFones.edit', [$smsCampanhaFone->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
