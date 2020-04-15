@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/grupoUras.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($grupoUra, ['route' => ['grupoUras.update', $grupoUra->id], 'method' => 'patch']) !!}

                        @include('grupo_uras.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
