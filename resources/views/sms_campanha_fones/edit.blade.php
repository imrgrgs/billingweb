@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/smsCampanhaFones.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($smsCampanhaFone, ['route' => ['smsCampanhaFones.update', $smsCampanhaFone->id], 'method' => 'patch']) !!}

                        @include('sms_campanha_fones.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
