@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/bvaudios.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($bvaudio, ['route' => ['bvaudios.update', $bvaudio->id], 'method' => 'patch']) !!}

                        @include('bvaudios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
