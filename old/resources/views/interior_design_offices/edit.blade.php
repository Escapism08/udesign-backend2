@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Interior Design Offices
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($interiorDesignOffices, ['route' => ['interiorDesignOffices.update', $interiorDesignOffices->id], 'method' => 'patch']) !!}

                        @include('interior_design_offices.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection