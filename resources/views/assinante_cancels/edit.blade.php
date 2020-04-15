@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/assinanteCancels.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($assinanteCancel, ['route' => ['assinanteCancels.update', $assinanteCancel->id], 'method' => 'patch']) !!}

                        @include('assinante_cancels.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
