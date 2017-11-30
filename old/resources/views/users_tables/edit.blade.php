@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Users Table
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($usersTable, ['route' => ['usersTables.update', $usersTable->id], 'method' => 'patch']) !!}

                        @include('users_tables.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection