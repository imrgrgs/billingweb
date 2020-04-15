@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/cacs.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($cac, ['route' => ['cacs.update', $cac->id], 'method' => 'patch']) !!}

                        @include('cacs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
