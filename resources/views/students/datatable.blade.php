@extends('students.layout')

@section('content')

<div class="pull-left">
    <h2>Students crud step by step</h2>
</div>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('students.create')}}">Create a new student</a>
        </div>
    </div>
</div>

@if($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif


{{-- data table --}}

<table id="students" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
        <th>N°</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Mot de passe</th>
        <th>Date de créer</th>
        <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
    @foreach($students as $student)
    <tr>
        <td>{{$student->id}}</td>
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
        </tbody>

        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>


    <script type="text/javascript">
    	$(document).ready(function () {
    $('#students').DataTable();
});
    </script>

@endsection
