<div class="table-responsive">
    <table class="table" id="bvaudios-table">
        <thead>
            <tr>
                <th>@lang('models/bvaudio.fields.originalName')</th>
        <th>@lang('models/bvaudio.fields.size')</th>
        <th>@lang('models/bvaudio.fields.time')</th>
        <th>@lang('models/bvaudio.fields.generatedName')</th>
        <th>@lang('models/bvaudio.fields.generatedPath')</th>
        <th>@lang('models/bvaudio.fields.gsmName')</th>
        <th>@lang('models/bvaudio.fields.gsmPath')</th>
        <th>@lang('models/bvaudio.fields.forId')</th>
        <th>@lang('models/bvaudio.fields.repId')</th>
        <th>@lang('models/bvaudio.fields.usrId')</th>
        <th>@lang('models/bvaudio.fields.dateCreated')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($bvaudios as $bvaudio)
            <tr>
                <td>{{ $bvaudio->originalName }}</td>
            <td>{{ $bvaudio->size }}</td>
            <td>{{ $bvaudio->time }}</td>
            <td>{{ $bvaudio->generatedName }}</td>
            <td>{{ $bvaudio->generatedPath }}</td>
            <td>{{ $bvaudio->gsmName }}</td>
            <td>{{ $bvaudio->gsmPath }}</td>
            <td>{{ $bvaudio->forId }}</td>
            <td>{{ $bvaudio->repId }}</td>
            <td>{{ $bvaudio->usrId }}</td>
            <td>{{ $bvaudio->dateCreated }}</td>
                <td>
                    {!! Form::open(['route' => ['bvaudios.destroy', $bvaudio->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('bvaudios.show', [$bvaudio->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('bvaudios.edit', [$bvaudio->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
