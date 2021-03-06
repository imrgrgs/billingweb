@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/publicidadeParams.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($publicidadeParam, ['route' => ['publicidadeParams.update', $publicidadeParam->id], 'method' => 'patch']) !!}

                        @include('publicidade_params.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
