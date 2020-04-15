@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/cpaMasters.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($cpaMaster, ['route' => ['cpaMasters.update', $cpaMaster->id], 'method' => 'patch']) !!}

                        @include('cpa_masters.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
