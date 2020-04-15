<div class="table-responsive">
    <table class="table" id="faxVirtualParams-table">
        <thead>
            <tr>
                <th>@lang('models/faxvirtualparam.fields.pfv_id')</th>
        <th>@lang('models/faxvirtualparam.fields.pfv_qtd_simult_noite')</th>
        <th>@lang('models/faxvirtualparam.fields.pfv_qtd_simult_dia')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($faxVirtualParams as $faxVirtualParam)
            <tr>
                <td>{{ $faxVirtualParam->pfv_id }}</td>
            <td>{{ $faxVirtualParam->pfv_qtd_simult_noite }}</td>
            <td>{{ $faxVirtualParam->pfv_qtd_simult_dia }}</td>
                <td>
                    {!! Form::open(['route' => ['faxVirtualParams.destroy', $faxVirtualParam->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('faxVirtualParams.show', [$faxVirtualParam->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('faxVirtualParams.edit', [$faxVirtualParam->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
