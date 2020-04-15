@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/popsReveAssis.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($popsReveAssi, ['route' => ['popsReveAssis.update', $popsReveAssi->id], 'method' => 'patch']) !!}

                        @include('pops_reve_assis.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
