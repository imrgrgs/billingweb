@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/contaCorrentes.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($contaCorrente, ['route' => ['contaCorrentes.update', $contaCorrente->id], 'method' => 'patch']) !!}

                        @include('conta_correntes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
