@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/publicidadeAudios.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($publicidadeAudio, ['route' => ['publicidadeAudios.update', $publicidadeAudio->id], 'method' => 'patch']) !!}

                        @include('publicidade_audios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
