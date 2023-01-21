@extends('students.layout')


@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Student</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('students.index')}}">Back</a>
        </div>
    </div>
</div>
@if($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input. <br><br>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{route('students.update', $student->id)}}" method="post">
    @csrf

    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom</strong>
                <input type="text" name="nom" value="{{$student->nom}}" class="form-control" placeholder="Entrez votre nom">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prenom</strong>
                <input type="text" name="prenom" value="{{$student->prenom}}" class="form-control" placeholder="Entrez votre prenom">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email</strong>
                <input type="email" name="email" value="{{$student->email}}" class="form-control" placeholder="Entrez votre email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prenom</strong>
                <input type="password" name="motdepass" value="{{$student->motdepass}}" class="form-control" placeholder="Entrez votre mot de passe">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">submit</button>
        </div>
    </div>

</form>

@endsection
