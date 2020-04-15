@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/contratacaos.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($contratacao, ['route' => ['contratacaos.update', $contratacao->id], 'method' => 'patch']) !!}

                        @include('contratacaos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
