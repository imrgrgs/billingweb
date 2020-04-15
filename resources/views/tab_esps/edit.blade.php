@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/tabEsps.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tabEsp, ['route' => ['tabEsps.update', $tabEsp->id], 'method' => 'patch']) !!}

                        @include('tab_esps.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
