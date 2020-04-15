@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/crecMasters.singular')
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('crec_masters.show_fields')
                    <a href="{{ route('crecMasters.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
