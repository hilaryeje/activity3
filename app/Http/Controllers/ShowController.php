@extends('layout.mainlayout')
@section('title','show')
@section('content')
 
        <h1>{{$student['Last_Name']}}</h1>
        <hr>
       <p>{{ $student['First_Name']}}</p>
        <br/>
        <p>{{ $student['Birthday']}}</p>
        <br/>
    @if ($student['isnewstudent'])
        <span>This is a new student </span>
    @endif
    <span>This is a old student </span>
 
@endsection