@extends('phases.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Product</h2>
                
        </div>
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
 <form action="{{route('phases.update',$phase->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name</strong>
                <input type="text" name="nom" value="{{$phase->nom }}" class="form-control" placeholder="nom">
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>DESCRIPTION</strong>
                <input type="text" name="description" value="{{$phase->description }}" class="form-control" placeholder="nom">
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>date debut</strong>
                <input type="date" name="nom" value="{{$phase->dateD }}" class="form-control" placeholder="nom">
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>date fin</strong>
                <input type="date" name="nom" value="{{$phase->dateF }}" class="form-control" placeholder="nom">
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>

        </div>
    </div>
 </form>
@endsection
