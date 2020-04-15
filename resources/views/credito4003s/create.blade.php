@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/credito4003s.singular')
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'credito4003s.store']) !!}

                        @include('credito4003s.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
