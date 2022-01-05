@extends('layouts.app')

@section('content')
@if (Auth::user())
    
<a href="/employees/create" class="btn btn-primary btn-lg">Create New Employee</a>
@endif
    <h3>EMPLOYEES</h3>

@if (count($employees) > 0)

<div class="well">
        <table class="table table-striped">
            <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Department</th>
   
       </tr>
@foreach ($employees as $employee)

   
       <tr>
           <td><a href="/employees/{{$employee->id}}">{{$employee->name}}</a></td>
           <td>{{$employee->email}}</td>
           <td>{{$employee->department}}</td>
          
           {{-- <td><a href="/employees/{{$employee->id}}/edit" class="btn btn-default">Edit</a></td>
           <td>    {!! Form::open(['action' => ["App\Http\Controllers\employeesController@destroy", $employee->id], 'method' => 'employee', 'class' => 'pull-right']) !!}
               {{Form::hidden('_method', "DELETE")}}
               {{form::submit('Delete', ['class' =>'btn btn-danger ' ])}}
               {!! Form::close() !!}</td> --}}
       </tr>

       
        <br>
        @endforeach

        {{-- {{$employees->links()}} --}}
    </table>
</div>
@else
<h1>No employee Found</h1>
@endif
@endsection
