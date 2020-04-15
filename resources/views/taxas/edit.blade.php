@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/taxas.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($taxa, ['route' => ['taxas.update', $taxa->id], 'method' => 'patch']) !!}

                        @include('taxas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
