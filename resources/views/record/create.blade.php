@extends('layout.mainlayout')
@section('title', 'create')
@section('content')
<div class='form-body'>
    <div class='row'>
        <div class='form-holder'>
            <div class='form-content'>
                <div class='form-items'>
                    <h3>Create New Student Record</h3>"
                    <form action="/record/" method="POST">
                    @csrf
                    <div class="col-md-12">
                        <input class="form-control" type="text" name="Last_Name" id="Last_Name" placeholder="Last Name">
                    </div>
                    <div class="col-md-12">
                        <input class="form-control" type="text" name="First_Name" id="First_Name" placeholder="First Name">
                    </div>
                    <div class="col-md-12">
                        <input class="form-control" type="text" name="Birthday" id="Birthday" placeholder="Birthday">
                    </div>

                    <div class="form-button mt-3">
                        <button id="submit" type="submit" value="add" class="btn btn-primary">Add Student</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection