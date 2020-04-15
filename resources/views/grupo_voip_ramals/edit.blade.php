@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/grupoVoipRamals.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($grupoVoipRamal, ['route' => ['grupoVoipRamals.update', $grupoVoipRamal->id], 'method' => 'patch']) !!}

                        @include('grupo_voip_ramals.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
