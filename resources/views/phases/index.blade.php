@extends('phases.layout')

@section('content')
<div class="pull-left">
            <h2>GESTION DES PROJETS</h2>

         </div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('phases.create')}}">Create a new projet</a>
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
            <th>Duree</th>
            <th>priorite</th>
            <th>Details</th>
        </tr>
        @foreach($phases as $phase)
        <tr>
            <td>{{++$i}}</td>
            <td>{{ $phase->nom}}</td>
            <td>{{ $phase->duree}}</td>
            <td>{{ $phase->priorite}}</td>

            <td>
                <form action="{{route('phases.destroy',$phase->id) }}" method="post">
                    <a class="btn btn-info" href="{{route('phases.show',$phase->id) }}">Phases</a>
                    <a class="btn btn-primary" href="{{route('phases.edit',$phase->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>
            </td>
        </tr>
        @endforeach

    </table>
    
    