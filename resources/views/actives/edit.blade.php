@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/actives.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($active, ['route' => ['actives.update', $active->id], 'method' => 'patch']) !!}

                        @include('actives.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
