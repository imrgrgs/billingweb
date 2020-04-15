@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/crecMasters.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($crecMaster, ['route' => ['crecMasters.update', $crecMaster->id], 'method' => 'patch']) !!}

                        @include('crec_masters.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
