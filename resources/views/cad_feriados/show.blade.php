@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/cadFeriados.singular')
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('cad_feriados.show_fields')
                    <a href="{{ route('cadFeriados.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
