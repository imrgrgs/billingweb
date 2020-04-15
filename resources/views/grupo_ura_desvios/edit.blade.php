@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/grupoUraDesvios.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($grupoUraDesvio, ['route' => ['grupoUraDesvios.update', $grupoUraDesvio->id], 'method' => 'patch']) !!}

                        @include('grupo_ura_desvios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
