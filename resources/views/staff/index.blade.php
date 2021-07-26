@extends('layouts.app')

@section('content')
 
<div class="container">
    <div class="panel-body"> 
        <div class="col-sm-10">
            <a class="btn btn-primary" href="{{url('/staff/add')}}" role="button">Add</a>
            <table class="table">
                 <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Phone</th>
                      <th scope="col">School</th>
                      <th scope="col">Created</th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                    </tr>
                 </thead>
                 <tbody>
                    @if (count($stafers) === 0)
                        <tr><td>I don't have any records!</td></tr>
                    @else
                     @foreach ($stafers as $staff)
                            <tr>                                    
                                <th scope="row">{{$staff->id}}</th>
                                <td>{{$staff->first_name}} {{$staff->last_name}}</td>
                                <td>{{$staff->email}}</td>
                                <td>{{$staff->phone}}</td>
                                <td>{{App\School::SchoolName($staff->school_id)}}</td>
                                
                                 <td> {{$staff->created_at}} </td>

                                <td><a href="{{url('/staff/edit/'.$staff->id)}}">Edit</a></td>
                                <td><a href="{{url('/staff/delete/'.$staff->id)}}">Delete</a></td>
                            </tr>
                     @endforeach                      
                    @endif 
                 </tbody>
            </table>
        </div>
    </div>
</div>
@endsection