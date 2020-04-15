@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/tabelaReps.singular')
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'tabelaReps.store']) !!}

                        @include('tabela_reps.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
