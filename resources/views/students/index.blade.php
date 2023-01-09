@extends('students.layout')

@section('content')
<div class="pull-left">
            <h2>GESTION DES PROJETS</h2>

         </div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('students.create')}}">Create a new projet</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>

        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>NOM</th>
            <th>Description</th>
            <th>Date DEBUT</th>
            <th>Date FIN</th>
            <th>Details</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{++$i}}</td>
            <td>{{ $student->nom}}</td>
            <td>{{ $student->description}}</td>
            <td>{{ $student->dateD}}</td>
            <td>{{ $student->dateF}}</td>

            <td>
                <form action="{{route('students.destroy',$student->id) }}" method="post">
                    <a class="btn btn-info" href="{{route('phases.show',$student->id) }}">Phases</a>
                    <a class="btn btn-primary" href="{{route('students.edit',$student->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>
            </td>
        </tr>
        @endforeach

    </table>
    
    