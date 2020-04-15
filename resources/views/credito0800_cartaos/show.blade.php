@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/credito0800Cartaos.singular')
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('credito0800_cartaos.show_fields')
                    <a href="{{ route('credito0800Cartaos.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
