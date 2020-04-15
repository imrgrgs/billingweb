@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/fonesUsers.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($fonesUser, ['route' => ['fonesUsers.update', $fonesUser->id], 'method' => 'patch']) !!}

                        @include('fones_users.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
