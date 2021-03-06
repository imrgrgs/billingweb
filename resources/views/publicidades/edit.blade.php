@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/publicidades.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($publicidade, ['route' => ['publicidades.update', $publicidade->id], 'method' => 'patch']) !!}

                        @include('publicidades.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
