@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/ligOnlines.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ligOnline, ['route' => ['ligOnlines.update', $ligOnline->id], 'method' => 'patch']) !!}

                        @include('lig_onlines.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
