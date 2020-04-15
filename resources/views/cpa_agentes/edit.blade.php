@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/cpaAgentes.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($cpaAgente, ['route' => ['cpaAgentes.update', $cpaAgente->id], 'method' => 'patch']) !!}

                        @include('cpa_agentes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
