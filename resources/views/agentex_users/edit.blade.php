@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/agentexUsers.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($agentexUser, ['route' => ['agentexUsers.update', $agentexUser->id], 'method' => 'patch']) !!}

                        @include('agentex_users.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
