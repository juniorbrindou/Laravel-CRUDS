@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-8 offset-2">
         
<form action="{{ route('internaute.update',$internaute->id) }}" method="POST">
    @csrf
    @method('PUT')
    <fieldset>
<legend>Modiffication : {{$internaute->name}} {{$internaute->firstname}}</legend>

        <!-- name -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nom</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" value="{{$internaute->name}}">
                @if ($errors->has('name'))
                    <p class="text-danger">{{ $errors->first('name') }}</p>
                @endif
            </div>
        </div>

        <!-- firstname -->
        <div class="form-group row">
            <label class="form-label col-md-2">Prénoms</label>
            <div class="col-md-10">
                <input type="text" name="firstname" class="form-control" value="{{$internaute->firstname}}">
                @if ($errors->has('firstname'))
                    <p class="text-danger">{{ $errors->first('firstname') }}</p>
                @endif
            </div>
        </div>

        <!-- email -->
        <div class="form-group row">
            <label class="col-md-2 col-form-label">Email</label>
            <div class="col-md-10">
                <input type="email" name="email" class="form-control" value="{{$internaute->email}}">
                @if($errors->has('email'))
                    <P  class="text-danger">{{ $errors->first('email') }}</P>
                @endif
            </div>
        </div>

        <!-- age -->
        <div class="form-group row">
            <label class="form-label col-md-2">Âge</label>
            <div class="col-md-2">
                <input type="number" class="form-control" min="0" name="age" value="{{$internaute->age}}">
                @if($errors->has('age'))
                    <P class="text-danger">{{ $errors->first('age') }}</P>
                @endif
            </div>
        </div>

        <button type="submit" class="btn btn-block btn-danger">Submit</button>

    </fieldset>
</form>



        </div>
    </div>
@stop
