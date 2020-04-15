@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/terminacaos.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($terminacao, ['route' => ['terminacaos.update', $terminacao->id], 'method' => 'patch']) !!}

                        @include('terminacaos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
