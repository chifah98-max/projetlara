@extends('phases.layout')
@section('content')

<div class="row">
<div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('phases.index')}}">Back</a>
            </div>
        </div>
</div>
@if($errors->any())
 <div class="alert alert-danger">
    <strong>HEEEE</strong>There were some problems with your input <br><br>

    <ul>
       @foreach($errors->all() as $error) 
        <li>{{$error}}</li>
       @endforeach
       
    </ul>

 </div>
@endif
 <form action="{{route('phases.store')}}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name</strong>
                <input type="text" name="nom" class="form-control" placeholder="nom">
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Duree</strong>
                <input type="integer" name="duree" class="form-control" placeholder="description">
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>priorite</strong>
                <input type="text" name="dateD" class="form-control">
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>

        </div>
    </div>

 </form>
 @endsection
