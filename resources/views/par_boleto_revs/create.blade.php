@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/parBoletoRevs.singular')
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'parBoletoRevs.store']) !!}

                        @include('par_boleto_revs.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
