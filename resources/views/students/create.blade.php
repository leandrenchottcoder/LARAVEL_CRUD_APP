@extends('students.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add new students</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('students.index')}}">Back</a>
        </div>
    </div>
</div>

  @if($errors->any())

  <div class="alert alert-danger">
        <strong>whoops!</strong> There were problems with input. <br><br>
        <ul>
            @foreach($errors->all() as $error)
               <li>{{$error}}</li>
            @endforeach
        </ul>
  </div>

  @endif
  <form action="{{route('students.store')}}" method="post">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom</strong>
                <input type="text" name="nom" value="" class="form-control" placeholder="Entrez votre nom">

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prénom</strong>
                <input type="text" name="prenom" value="" class="form-control" placeholder="Entrez votre prenom">

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email</strong>
                <input type="email" name="email" value="" class="form-control" placeholder="Entrez votre email">

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mot de passe</strong>
                <input type="password" name="motdepass" value="" class="form-control" placeholder="Entrez votre mot de passe">

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">submit</button>
        </div>
    </div>

  </form>

@endsection
