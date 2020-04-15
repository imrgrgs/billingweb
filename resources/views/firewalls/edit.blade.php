@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/firewalls.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($firewall, ['route' => ['firewalls.update', $firewall->id], 'method' => 'patch']) !!}

                        @include('firewalls.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
