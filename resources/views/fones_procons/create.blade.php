@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/fonesProcons.singular')
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'fonesProcons.store']) !!}

                        @include('fones_procons.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
