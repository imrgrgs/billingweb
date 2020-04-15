@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/extensionTables.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($extensionTable, ['route' => ['extensionTables.update', $extensionTable->id], 'method' => 'patch']) !!}

                        @include('extension_tables.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
