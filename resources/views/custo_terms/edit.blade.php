@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/custoTerms.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($custoTerm, ['route' => ['custoTerms.update', $custoTerm->id], 'method' => 'patch']) !!}

                        @include('custo_terms.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
