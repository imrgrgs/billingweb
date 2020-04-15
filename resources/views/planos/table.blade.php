<div class="table-responsive">
    <table class="table" id="planos-table">
        <thead>
            <tr>
                <th>@lang('models/planos.fields.pln_descricao')</th>
        <th>@lang('models/planos.fields.pln_adesao')</th>
        <th>@lang('models/planos.fields.pln_mensalidade')</th>
        <th>@lang('models/planos.fields.pln_limite_fixo')</th>
        <th>@lang('models/planos.fields.pln_limite_celular')</th>
        <th>@lang('models/planos.fields.pln_status')</th>
        <th>@lang('models/planos.fields.pln_detalhes')</th>
        <th>@lang('models/planos.fields.pln_geral')</th>
        <th>@lang('models/planos.fields.pln_imagem1')</th>
        <th>@lang('models/planos.fields.pln_imagem2')</th>
        <th>@lang('models/planos.fields.pln_imagem3')</th>
        <th>@lang('models/planos.fields.pln_extensao1')</th>
        <th>@lang('models/planos.fields.pln_extensao2')</th>
        <th>@lang('models/planos.fields.pln_extensao3')</th>
        <th>@lang('models/planos.fields.pln_vlrfixo_excedente')</th>
        <th>@lang('models/planos.fields.pln_vlrcel_excedente')</th>
        <th>@lang('models/planos.fields.pln_representante_id')</th>
        <th>@lang('models/planos.fields.pln_sem_limites')</th>
        <th>@lang('models/planos.fields.pln_bloquear_atingiu_franquia')</th>
        <th>@lang('models/planos.fields.pln_tabespecial_id')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($planos as $plano)
            <tr>
                <td>{{ $plano->pln_descricao }}</td>
            <td>{{ $plano->pln_adesao }}</td>
            <td>{{ $plano->pln_mensalidade }}</td>
            <td>{{ $plano->pln_limite_fixo }}</td>
            <td>{{ $plano->pln_limite_celular }}</td>
            <td>{{ $plano->pln_status }}</td>
            <td>{{ $plano->pln_detalhes }}</td>
            <td>{{ $plano->pln_geral }}</td>
            <td>{{ $plano->pln_imagem1 }}</td>
            <td>{{ $plano->pln_imagem2 }}</td>
            <td>{{ $plano->pln_imagem3 }}</td>
            <td>{{ $plano->pln_extensao1 }}</td>
            <td>{{ $plano->pln_extensao2 }}</td>
            <td>{{ $plano->pln_extensao3 }}</td>
            <td>{{ $plano->pln_vlrfixo_excedente }}</td>
            <td>{{ $plano->pln_vlrcel_excedente }}</td>
            <td>{{ $plano->pln_representante_id }}</td>
            <td>{{ $plano->pln_sem_limites }}</td>
            <td>{{ $plano->pln_bloquear_atingiu_franquia }}</td>
            <td>{{ $plano->pln_tabespecial_id }}</td>
                <td>
                    {!! Form::open(['route' => ['planos.destroy', $plano->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('planos.show', [$plano->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('planos.edit', [$plano->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
