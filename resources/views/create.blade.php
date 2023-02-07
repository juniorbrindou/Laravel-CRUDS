@extends('layouts.app')

@section('content')
@if($errors->has('msg'))
    <div class="row" id="msg">
        <div class="col-3 offset-4">
            <div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{$errors->first()}}</strong></a>.
            </div>
        </div>
    </div>
@endif

    <div class="row">
        <div class="col-8 offset-2">
          
<form action="{{ route('internaute.store') }}" method="POST">
    @csrf
    <fieldset>
        <legend>Information de Nouvelutilisateur</legend>

        <!-- name -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nom</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <p class="text-danger">{{ $errors->first('name') }}</p>
                @endif
            </div>
        </div>

        <!-- firstname -->
        <div class="form-group row">
            <label class="form-label col-md-2">Prénoms</label>
            <div class="col-md-10">
                <input type="text" name="firstname" class="form-control" value="{{ old('firstname') }}">
                @if ($errors->has('firstname'))
                    <p class="text-danger">{{ $errors->first('firstname') }}</p>
                @endif
            </div>
        </div>

        <!-- email -->
        <div class="form-group row">
            <label class="col-md-2 col-form-label">Email</label>
            <div class="col-md-10">
                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                @if($errors->has('email'))
                    <P  class="text-danger">{{ $errors->first('email') }}</P>
                @endif
            </div>
        </div>

        <!-- age -->
        <div class="form-group row">
            <label class="form-label col-md-2">Âge</label>
            <div class="col-md-2">
                <input type="number" class="form-control" min="0" name="age" value="{{ old('age') }}">
                @if($errors->has('age'))
                    <P class="text-danger">{{ $errors->first('age') }}</P>
                @endif
            </div>
            <!-- check -->
            <label for="check"class="offset-5 col-md-2">Ajouter Encore</label>
            <div class="col-md-1">
                <input type="checkbox" name="check" id="check">
            </div>
        </div>

        <button type="submit" class="btn btn-block btn-danger">Submit</button>

    </fieldset>
</form>



        </div>
    </div>
@stop
