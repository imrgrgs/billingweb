@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/cprasTermins.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($cprasTermin, ['route' => ['cprasTermins.update', $cprasTermin->id], 'method' => 'patch']) !!}

                        @include('cpras_termins.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
