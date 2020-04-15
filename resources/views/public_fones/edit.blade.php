@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/publicFones.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($publicFone, ['route' => ['publicFones.update', $publicFone->id], 'method' => 'patch']) !!}

                        @include('public_fones.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
