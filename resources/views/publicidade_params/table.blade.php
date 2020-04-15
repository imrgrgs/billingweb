<div class="table-responsive">
    <table class="table" id="publicidadeParams-table">
        <thead>
            <tr>
                <th>@lang('models/publicidadeparam.fields.ppm_id')</th>
        <th>@lang('models/publicidadeparam.fields.ppm_qtd_simult_noite')</th>
        <th>@lang('models/publicidadeparam.fields.ppm_qtd_simult_dia')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($publicidadeParams as $publicidadeParam)
            <tr>
                <td>{{ $publicidadeParam->ppm_id }}</td>
            <td>{{ $publicidadeParam->ppm_qtd_simult_noite }}</td>
            <td>{{ $publicidadeParam->ppm_qtd_simult_dia }}</td>
                <td>
                    {!! Form::open(['route' => ['publicidadeParams.destroy', $publicidadeParam->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('publicidadeParams.show', [$publicidadeParam->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('publicidadeParams.edit', [$publicidadeParam->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
