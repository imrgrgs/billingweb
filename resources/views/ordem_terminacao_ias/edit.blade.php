@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/ordemTerminacaoIas.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ordemTerminacaoIa, ['route' => ['ordemTerminacaoIas.update', $ordemTerminacaoIa->id], 'method' => 'patch']) !!}

                        @include('ordem_terminacao_ias.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
