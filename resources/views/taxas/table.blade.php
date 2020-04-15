<div class="table-responsive">
    <table class="table" id="taxas-table">
        <thead>
            <tr>
                <th>@lang('models/taxas.fields.tax_pais_id')</th>
        <th>@lang('models/taxas.fields.tax_plano_id')</th>
        <th>@lang('models/taxas.fields.tax_tipo')</th>
        <th>@lang('models/taxas.fields.tax_valor')</th>
        <th>@lang('models/taxas.fields.tax_valorfora')</th>
        <th>@lang('models/taxas.fields.tax_vlrfornecedor')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($taxas as $taxa)
            <tr>
                <td>{{ $taxa->tax_pais_id }}</td>
            <td>{{ $taxa->tax_plano_id }}</td>
            <td>{{ $taxa->tax_tipo }}</td>
            <td>{{ $taxa->tax_valor }}</td>
            <td>{{ $taxa->tax_valorfora }}</td>
            <td>{{ $taxa->tax_vlrfornecedor }}</td>
                <td>
                    {!! Form::open(['route' => ['taxas.destroy', $taxa->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('taxas.show', [$taxa->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('taxas.edit', [$taxa->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
