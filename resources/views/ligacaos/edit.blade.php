@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/ligacaos.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ligacao, ['route' => ['ligacaos.update', $ligacao->id], 'method' => 'patch']) !!}

                        @include('ligacaos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
