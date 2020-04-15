@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/cacRevendas.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($cacRevenda, ['route' => ['cacRevendas.update', $cacRevenda->id], 'method' => 'patch']) !!}

                        @include('cac_revendas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
