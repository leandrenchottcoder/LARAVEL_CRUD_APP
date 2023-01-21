@extends('students.layout')

@section('content')

<div class="pull-left">
    <h2>Students crud step by step</h2>
</div>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('students.create')}}">Create a new student</a>
            <a class="btn btn-warning" href="{{route('students.datatable')}}">Aller vers la datatable</a>
        </div>
    </div>
</div>

@if($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>N°</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Mot de passe</th>
        <th>Date de créer</th>
        <th width="280px">Action</th>
    </tr>
    @foreach($students as $student)
    <tr>
        <td>{{++$i}}</td>
        <td>{{$student->nom}}</td>
        <td>{{$student->prenom}}</td>
        <td>{{$student->email}}</td>
        <td>{{$student->motdepass}}</td>
        <td>{{$student->created_at->format('d m Y à H:i')}}</td>
        <td>
            <form action="{{route('students.destroy', $student->id)}}" method="post">
                <a class="btn btn-info" href="{{route('students.show', $student->id)}}">Show</a>
                <a class="btn btn-info" href="{{route('students.edit', $student->id)}}">Editer</a>
                <a class="" href="{{route('students.destroy', $student->id)}}">
                    @csrf

                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </a>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection
