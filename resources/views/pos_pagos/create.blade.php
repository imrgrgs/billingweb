@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/posPagos.singular')
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'posPagos.store']) !!}

                        @include('pos_pagos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
