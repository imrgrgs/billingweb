@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/sipBuddies.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($sipBuddie, ['route' => ['sipBuddies.update', $sipBuddie->id], 'method' => 'patch']) !!}

                        @include('sip_buddies.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
