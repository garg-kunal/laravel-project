@extends('layouts.main')

@section('title')
<title>Welcome Page</title>
@endsection

@section('content')
<div class="container">
    <br />
    <h3 class="text-center">Data</h3>
    <br />
    @if (session('sucessMsg'))


    <div class="alert alert-success" role="alert">
        {{session('sucessMsg')}}
    </div>

    @endif


    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile Number</th>
                <th scope="col">Action</th>
                <!-- <th scope="col">Delete</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <th scope="row">{{$student->id}}</th>
                <td>{{$student->first_name}}</td>
                <td>{{$student->last_name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->mobile_number}}</td>
                <td>Action</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection