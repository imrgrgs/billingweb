@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/audio.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($audio, ['route' => ['audio.update', $audio->id], 'method' => 'patch']) !!}

                        @include('audio.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
