@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/fornecedores.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($fornecedor, ['route' => ['fornecedores.update', $fornecedor->for_id], 'method' => 'patch']) !!}

                        @include('fornecedores.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
