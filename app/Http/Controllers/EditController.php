@extends('layout.mainlayout')
@section('title', 'edit')
@section('content')
<div class='form-body'>
    <div class='row'>
        <div class='form-holder'>
            <div class='form-content'>
                <div class='form-items'>
                    <h3>Edit {{ $student['First_Name'] }} {{$student['Last_Name'] }}</h3>
                    <form action="/Home/" method="POST">
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

                    <div class="col-md-12">
                        <p>Status:<br>
                        <select class="form-select mt-3" name="isnewstudent" id="isnewstudent">
                            <option value="New Student">New Student</option>
                            <option value="Old Student">Old Student</option>
                        </select></p>
                    </div>

                    <div class="form-button mt-3">
                        <button id="submit" type="submit" value="edit" class="btn btn-primary">Add Student</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 