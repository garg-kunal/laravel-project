@extends('layouts.main')

@section('title')
<title>Add Record</title>
@endsection
@section('content')

<div class="container" style="height:auto">

    @if($errors->any())
    @foreach($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
        {{$error}}
    </div>
    @endforeach
    @endif

    <br /><br>
    <h3 class="text-center">Add Student</h3>
    <br />
    <form action={{route('store')}} method="POST">
        {{ csrf_field() }}
        <div class="form-row">
            <div class="col">
                <input type="text" class="form-control" name="first" placeholder="First name">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="last" placeholder="Last name">
            </div>
            <br />
            <div class="form-group col-md-12">
                <br />
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
            <br />
            <div class="form-group col-md-12">
                <input type="text" class="form-control" name="phn" id="phn" placeholder="Mobile Number">
            </div>
        </div>
        <button type="submit" style="width:100%" class="btn pull-right btn-primary">Save</button>
    </form>
</div>
<br/>
<br/>
<br/>
<br/>




@endsection