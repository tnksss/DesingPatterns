@extends('layouts.app')
@section('content')
<div class="container">
	
    <h3 class="box-title">Formulário de Cadastro</h3>
    
	
	{!! Form::open(['route' => 'students.store', 'enctype' => 'multipart/form-data']) !!} 
    @include('student.form')				
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Salvar">
        {!! Form::close() !!} 
        <a href="{{ route('students.index' )}}"class="btn btn-danger">Voltar</a>
    </div>
    
</div>
@stop

