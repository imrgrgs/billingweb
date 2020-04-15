@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/credito0800Cartaos.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($credito0800Cartao, ['route' => ['credito0800Cartaos.update', $credito0800Cartao->id], 'method' => 'patch']) !!}

                        @include('credito0800_cartaos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
