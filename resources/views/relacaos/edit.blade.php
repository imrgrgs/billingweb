@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/relacaos.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($relacao, ['route' => ['relacaos.update', $relacao->id], 'method' => 'patch']) !!}

                        @include('relacaos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
