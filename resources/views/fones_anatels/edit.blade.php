@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/fonesAnatels.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($fonesAnatel, ['route' => ['fonesAnatels.update', $fonesAnatel->id], 'method' => 'patch']) !!}

                        @include('fones_anatels.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
