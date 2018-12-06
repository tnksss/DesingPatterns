@extends('layouts.app')
@section('content')

<div class="container">
        <a href="{{ route('students.create') }}" class="btn btn-primary"> <strong>Add Aluno</strong></a>
    <br></br>    
    <table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>Foto</th>
            <th>Código</th>            
            <th>Nome</th>
            {{-- <th>Idade</th> --}}
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td><img style="border-radius: 50px;"height="100px" width="100px" 
                src="{{url('https://s3-sa-east-1.amazonaws.com/prevclass-images/students/'.$student->avatar)}}"
                alt="Student Image">
            </td> 
            <td>{{$student->code}}</td>
            <td>{{$student->name}}</td>
            {{-- <td>{{$student->age}}</td> --}}
        </tr>
        @endforeach
    </table>
</div>
@stop

