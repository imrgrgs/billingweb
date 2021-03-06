@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/faxVirtualParams.singular')
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'faxVirtualParams.store']) !!}

                        @include('fax_virtual_params.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
