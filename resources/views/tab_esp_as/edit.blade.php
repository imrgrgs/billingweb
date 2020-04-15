@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/tabEspAs.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tabEspA, ['route' => ['tabEspAs.update', $tabEspA->id], 'method' => 'patch']) !!}

                        @include('tab_esp_as.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
