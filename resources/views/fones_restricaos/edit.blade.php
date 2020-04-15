@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/fonesRestricaos.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($fonesRestricao, ['route' => ['fonesRestricaos.update', $fonesRestricao->id], 'method' => 'patch']) !!}

                        @include('fones_restricaos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
