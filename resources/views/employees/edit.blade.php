@extends('layouts.app')

@section('content')
    {{-- {!! Form::open(['action' => "App\Http\Controllers\EmployeesController"  'method' => 'Employee'])!!} --}}

    <h1>Edit {{$employee->name}}</h1>
 {!! Form::open(['action' => ["App\Http\Controllers\EmployeesController@update", $employee->id], 'method' => 'post', 'enctype'=> 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', $employee->name, ['class' => 'form-control', 'placeholder' => 'Employee Name'])}}
    </div>
    <div class="form-group">
        {{Form::label('email', 'Email')}}
        {{Form::email('email', $employee->email, ['class' => 'form-control', 'placeholder' => 'Employee Email'])}}
    </div>
    <div class="form-group">
        {{Form::label('salary', 'Salary')}}
        {{Form::number('salary', $employee->salary,  ['min'=>100 ,'class' => 'form-control', 'placeholder' => 'Employee Salary'])}}
    </div>
    <div class="form-group">
        {{Form::label('join_date', 'Join Date')}}
        {{Form::date('join_date', $employee->join_date, ['class' => 'form-control', 'placeholder' => 'Employee Join Date'])}}
    </div>
    <div class="form-group">
        {{Form::label('marital_status', 'Marital Status')}}
        {{Form::select('marital_status', ['Single' => 'Single','Married' => 'Married'], $employee->marital_status, ['class' => 'form-control', 'placeholder' => 'Employee Marital Status'])}}
    </div>
    <div class="form-group">
        {{Form::label('department', 'Marital Status')}}
        {{Form::select('department', ['Web Development' => 'Web Development','Graphics Designing' => 'Graphics Designing', 'Mobile Development'  => 'Mobile Development', 'Data Science' => 'Data Science', ], $employee->department, ['class' => 'form-control','placeholder' => 'Employee Department'])}}
    </div>
    
  
{{Form::hidden('_method', 'PUT')}}
    {{form::submit('Submit', ['class' =>'btn btn-success' ])}}
    {!! Form::close() !!}
@endsection