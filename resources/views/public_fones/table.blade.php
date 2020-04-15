<div class="table-responsive">
    <table class="table" id="publicFones-table">
        <thead>
            <tr>
                <th>@lang('models/publicfones10.fields.pbt_telefone')</th>
        <th>@lang('models/publicfones10.fields.pbt_data_ligar')</th>
        <th>@lang('models/publicfones10.fields.pbt_hora_ligar')</th>
        <th>@lang('models/publicfones10.fields.pbt_data_ligou')</th>
        <th>@lang('models/publicfones10.fields.pbt_hora_ligou')</th>
        <th>@lang('models/publicfones10.fields.pbt_tempo_ouviu')</th>
        <th>@lang('models/publicfones10.fields.pbt_obs')</th>
        <th>@lang('models/publicfones10.fields.pbt_terminacao_id')</th>
        <th>@lang('models/publicfones10.fields.pbt_criouarq')</th>
        <th>@lang('models/publicfones10.fields.pbt_reinclusao')</th>
        <th>@lang('models/publicfones10.fields.pbt_cpf')</th>
        <th>@lang('models/publicfones10.fields.pbt_satisfacao')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($publicFones as $publicFone)
            <tr>
                <td>{{ $publicFone->pbt_telefone }}</td>
            <td>{{ $publicFone->pbt_data_ligar }}</td>
            <td>{{ $publicFone->pbt_hora_ligar }}</td>
            <td>{{ $publicFone->pbt_data_ligou }}</td>
            <td>{{ $publicFone->pbt_hora_ligou }}</td>
            <td>{{ $publicFone->pbt_tempo_ouviu }}</td>
            <td>{{ $publicFone->pbt_obs }}</td>
            <td>{{ $publicFone->pbt_terminacao_id }}</td>
            <td>{{ $publicFone->pbt_criouarq }}</td>
            <td>{{ $publicFone->pbt_reinclusao }}</td>
            <td>{{ $publicFone->pbt_cpf }}</td>
            <td>{{ $publicFone->pbt_satisfacao }}</td>
                <td>
                    {!! Form::open(['route' => ['publicFones.destroy', $publicFone->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('publicFones.show', [$publicFone->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('publicFones.edit', [$publicFone->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
