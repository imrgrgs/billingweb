<div class="table-responsive">
    <table class="table" id="definePstns-table">
        <thead>
            <tr>
                <th>@lang('models/definepstn.fields.def_fornecedor_id')</th>
        <th>@lang('models/definepstn.fields.def_representante_id')</th>
        <th>@lang('models/definepstn.fields.def_assinante_id')</th>
        <th>@lang('models/definepstn.fields.def_pais')</th>
        <th>@lang('models/definepstn.fields.def_tipo')</th>
        <th>@lang('models/definepstn.fields.def_ddiddd_ini')</th>
        <th>@lang('models/definepstn.fields.def_ddiddd_fim')</th>
        <th>@lang('models/definepstn.fields.def_terminacao1_id')</th>
        <th>@lang('models/definepstn.fields.def_terminacao2_id')</th>
        <th>@lang('models/definepstn.fields.def_terminacao3_id')</th>
        <th>@lang('models/definepstn.fields.def_terminacao4_id')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($definePstns as $definePstn)
            <tr>
                <td>{{ $definePstn->def_fornecedor_id }}</td>
            <td>{{ $definePstn->def_representante_id }}</td>
            <td>{{ $definePstn->def_assinante_id }}</td>
            <td>{{ $definePstn->def_pais }}</td>
            <td>{{ $definePstn->def_tipo }}</td>
            <td>{{ $definePstn->def_ddiddd_ini }}</td>
            <td>{{ $definePstn->def_ddiddd_fim }}</td>
            <td>{{ $definePstn->def_terminacao1_id }}</td>
            <td>{{ $definePstn->def_terminacao2_id }}</td>
            <td>{{ $definePstn->def_terminacao3_id }}</td>
            <td>{{ $definePstn->def_terminacao4_id }}</td>
                <td>
                    {!! Form::open(['route' => ['definePstns.destroy', $definePstn->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('definePstns.show', [$definePstn->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('definePstns.edit', [$definePstn->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
