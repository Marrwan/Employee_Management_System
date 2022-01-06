@extends('layouts.app')

@section('content')
    {{-- {!! Form::open(['action' => "App\Http\Controllers\EmployeesController"  'method' => 'Employee'])!!} --}}
 {!! Form::open(['action' => "App\Http\Controllers\EmployeesController@store", 'method' => 'post', 'enctype'=> 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Employee Name'])}}
    </div>
    <div class="form-group">
        {{Form::label('email', 'Email')}}
        {{Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Employee Email'])}}
    </div>
    <div class="form-group">
        {{Form::label('salary', 'Salary')}}
        {{Form::number('salary', '',  ['min'=>100 ,'class' => 'form-control', 'placeholder' => 'Employee Salary'])}}
    </div>
    <div class="form-group">
        {{Form::label('join_date', 'Join Date')}}
        {{Form::date('join_date', '', ['class' => 'form-control', 'placeholder' => 'Employee Join Date'])}}
    </div>
    <div class="form-group">
        {{Form::label('marital_status', 'Marital Status')}}
        {{Form::select('marital_status', ['Single' => 'Single','Married' => 'Married'], ' ', ['class' => 'form-control', 'placeholder' => 'Employee Marital Status'])}}
    </div>
    <div class="form-group">
        {{Form::label('department', 'Marital Status')}}
        {{Form::select('department', ['Web Development' => 'Web Development','Graphics Designing' => 'Graphics Designing', 'Mobile Development'  => 'Mobile Development', 'Data Science' => 'Data Science', ], 'Department', ['class' => 'form-control','placeholder' => 'Employee Department'])}}
    </div>
    


    {{form::submit('Submit', ['class' =>'btn btn-success' ])}}
    {!! Form::close() !!}
@endsection