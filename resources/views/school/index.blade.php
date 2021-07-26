@extends('layouts.app')

@section('content')
 
<div class="container">
    <div class="panel-body"> 
        <div class="col-sm-10">
            <a class="btn btn-primary" href="{{url('/school/add')}}" role="button">Add</a>
            <table class="table">
                 <theschool>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Website</th>
                      <th scope="col">Logo</th>
                      <th scope="col">Created</th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                    </tr>
                 </theschool>
                 <tbody>
                    @if (count($schools) === 0)
                        <tr><td>I don't have any records!</td></tr>
                    @else
                     @foreach ($schools as $school)
                            <tr>                                    
                                <th scope="row">{{$school->id}}</th>
                                <td>{{$school->name}}</td>
                                <td>{{$school->email}}</td>
                                <td> <a href="{{$school->website}}/" target="_blank">{{$school->website}}</a></td>
                                <td>
                                	<img src="{{asset($school->logo)}}" 
  										width="150px">
                                </td>
                                
                                 <td> {{$school->created_at}} </td>

                                <td><a href="{{url('/school/edit/'.$school->id)}}">Edit</a></td>
                                <td><a href="{{url('/school/delete/'.$school->id)}}">Delete</a></td>
                            </tr>
                     @endforeach                      
                    @endif 
                 </tbody>
            </table>
        </div>
    </div>
</div>
@endsection