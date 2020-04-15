@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/voipToVoips.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($voipToVoip, ['route' => ['voipToVoips.update', $voipToVoip->id], 'method' => 'patch']) !!}

                        @include('voip_to_voips.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
