@extends('students.layout')


@section('content')


<h1>Detail Student</h1>

<p>{{$student->id}}</p>
<p>{{$student->nom}}</p>
<p>{{$student->prenom}}</p>
<p>{{$student->email}}</p>
<p>{{$student->motdepass}}</p>

<div class="pull-right">
    <a class="btn btn-primary" href="{{route('students.index')}}">Back</a>
</div>

@endsection
