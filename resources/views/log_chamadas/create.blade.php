@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/logChamadas.singular')
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'logChamadas.store']) !!}

                        @include('log_chamadas.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
