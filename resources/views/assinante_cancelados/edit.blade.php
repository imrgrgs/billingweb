@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/assinanteCancelados.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($assinanteCancelado, ['route' => ['assinanteCancelados.update', $assinanteCancelado->id], 'method' => 'patch']) !!}

                        @include('assinante_cancelados.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
