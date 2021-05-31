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
        <div class="col-12">
            <div class="jumbotron">
                <h1 class="display-3">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: center;"> Internaute Viewver </font>
                    </font>
                </h1>
                <p class="lead">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">
                            Est une application Permetant de Faire des 
                            Crud(create read update delete) d informations des internautes
                        </font>
                    </font>
                </p>
                <hr class="my-4">
                <p>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;"> Vous pouvez utiliser les options ci-dessous pour visualiser,
                             insérer, modifier ou supprimer des ressources.
                        </font>
                    </font>
                </p>
                <p class="lead">
                    <a class="btn btn-success btn-lg" href="{{ route('internaute.index') }}" role="button">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">> visualiser 👁️</font>
                        </font>
                    </a>
                    <a class="btn btn-warning btn-lg" href="{{ route('internaute.create') }}" role="button">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">> Ajouter </font>
                        </font>
                    </a>
                </p>
            </div>
        </div>
    </div>
@stop
