@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/tabEsps.singular')
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('tab_esps.show_fields')
                    <a href="{{ route('tabEsps.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
