@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div  class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/employees/create" class="btn btn-primary">Create New Employee</a>
                    <h3>Your Employees</h3>
                 
                    @if (count($employees) > 0)

                            <table class="table table-striped">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Department</th>
                                    <th>Join date</th>
                                    <th>Salary</th>
                                    <th>Marital Status</th>
                                    <th>Added On</th>
                       
                           </tr>
                    @foreach ($employees as $employee)
                    
                       
                           <tr>
                               <td><a href="/employees/{{$employee->id}}">{{$employee->name}}</a></td>
                               <td>{{$employee->email}}</td>
                               <td>{{$employee->department}}</td>
                               <td>{{$employee->join_date}}</td>
                               <td>{{$employee->salary}}</td>
                               <td>{{$employee->marital_status}}</td>
                               <td>{{$employee->created_at}}</td>
                           </tr>
                    
                           
                            <br>
                            @endforeach
                    
                            {{-- {{$employees->links()}} --}}
                        </table>
                    @else
                    <h1>No employee Found</h1>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
