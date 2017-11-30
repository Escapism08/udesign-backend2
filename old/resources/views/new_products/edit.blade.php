@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            New Product
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($newProduct, ['route' => ['newProducts.update', $newProduct->id], 'method' => 'patch']) !!}

                        @include('new_products.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection