@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/ataques.singular')
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('ataques.show_fields')
                    <a href="{{ route('ataques.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
