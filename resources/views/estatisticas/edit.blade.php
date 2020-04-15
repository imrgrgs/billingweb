@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/estatisticas.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($estatistica, ['route' => ['estatisticas.update', $estatistica->id], 'method' => 'patch']) !!}

                        @include('estatisticas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
