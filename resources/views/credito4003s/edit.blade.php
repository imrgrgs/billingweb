@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/credito4003s.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($credito4003, ['route' => ['credito4003s.update', $credito4003->id], 'method' => 'patch']) !!}

                        @include('credito4003s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
