<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('name','Nome do Aluno')}}
            {{ Form::text('name',old('name') ?? $student->name ?? null, array_merge(['class' => 'form-control' , 'autofocus'])) }}
        </div>
        <div class="form-group">
            {{ Form::label('code', 'Código')}}
            {{ Form::text('code', old('code') ?? $student->code ?? null, array('class'=> 'form-control') )}}
        </div>
        {{-- <div class="form-group">
            {{ Form::label('age', 'Idade')}}
            {{ Form::text('age', old('age') ?? $student->age ?? null, array('class'=> 'form-control') )}} 
        </div> --}}
    </div>
    <div class="col-md-6">
    @if($student->avatar == null)                      
        <label id="avatar" for="avatar"><img src="{{url('student-default.png')}}" width="200px" height="200px"/></label>
    @else
        <label id="avatar" for="avatar"><img src="{{url('/img/students/'.$student->avatar)}}" width="200px" height="200px"/></label>
    @endif
        <input type="file" id="avatar" name="avatar" type="hidden" class="upload_file" />  
    </div>
</div>
