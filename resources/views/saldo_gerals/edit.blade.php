@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/saldoGerals.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($saldoGeral, ['route' => ['saldoGerals.update', $saldoGeral->id], 'method' => 'patch']) !!}

                        @include('saldo_gerals.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
