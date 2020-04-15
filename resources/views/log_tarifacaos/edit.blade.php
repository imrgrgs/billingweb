@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/logTarifacaos.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($logTarifacao, ['route' => ['logTarifacaos.update', $logTarifacao->id], 'method' => 'patch']) !!}

                        @include('log_tarifacaos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
