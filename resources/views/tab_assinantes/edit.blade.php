@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/tabAssinantes.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tabAssinante, ['route' => ['tabAssinantes.update', $tabAssinante->id], 'method' => 'patch']) !!}

                        @include('tab_assinantes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
