@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/contratos.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($contrato, ['route' => ['contratos.update', $contrato->id], 'method' => 'patch']) !!}

                        @include('contratos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
