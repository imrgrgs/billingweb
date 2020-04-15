@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/celularSms.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($celularSms, ['route' => ['celularSms.update', $celularSms->id], 'method' => 'patch']) !!}

                        @include('celular_sms.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
