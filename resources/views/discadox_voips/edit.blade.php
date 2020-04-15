@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/discadoxVoips.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($discadoxVoip, ['route' => ['discadoxVoips.update', $discadoxVoip->id], 'method' => 'patch']) !!}

                        @include('discadox_voips.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
