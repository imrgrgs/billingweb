@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/operadoras.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($operadora, ['route' => ['operadoras.update', $operadora->id], 'method' => 'patch']) !!}

                        @include('operadoras.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
