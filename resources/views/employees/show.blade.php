@extends('layouts.app')

@section('content')
@if ($employee)
    

        <table class="table table-striped">
            <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Department</th>
        <th>Join date</th>
        <th>Salary</th>
        <th>Marital Status</th>
        @if (Auth::user())
            
        <th></th>
        <th></th>
        @endif
    </tr>


   
       <tr>
           <td>{{$employee->name}}</td>
           <td>{{$employee->email}}</td>
           <td>{{$employee->department}}</td>
           <td>{{$employee->join_date}}</td>
           <td>{{$employee->salary}}</td>
           <td>{{$employee->marital_status}}</td>
           @if (Auth::user())
               
           <td><a href="/employees/{{$employee->id}}/edit" class="btn btn-default">Edit</a></td>
           <td>    {!! Form::open(['action' => ["App\Http\Controllers\EmployeesController@destroy", $employee->id], 'method' => 'post', 'class' => 'pull-right']) !!}
            {{Form::hidden('_method', "DELETE")}}
            {{form::submit('Delete', ['class' =>'btn btn-danger ' ])}}
            {!! Form::close() !!}</td>
            @endif
       </tr>

       
    </table>
</div>
@else
<h1>No Employee Found</h1>
@endif
@endsection
