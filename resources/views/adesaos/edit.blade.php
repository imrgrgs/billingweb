@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/adesaos.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($adesao, ['route' => ['adesaos.update', $adesao->id], 'method' => 'patch']) !!}

                        @include('adesaos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
