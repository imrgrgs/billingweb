@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/acessos.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($acesso, ['route' => ['acessos.update', $acesso->id], 'method' => 'patch']) !!}

                        @include('acessos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
