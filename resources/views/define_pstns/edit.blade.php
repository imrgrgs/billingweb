@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/definePstns.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($definePstn, ['route' => ['definePstns.update', $definePstn->id], 'method' => 'patch']) !!}

                        @include('define_pstns.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
