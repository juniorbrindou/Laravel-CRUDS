@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-5 offset-1">
            <h1 class="text-primary">Liste des Internautes</h1>
        </div>
        <div class="col-2 offset-2">
            <a href="{{ route('internaute.create') }}" data-toggle="tooltip" title="test tooltip" class="btn btn-primary">Creer Nouveau</a>
        </div>
  
    </div>

    <div class="row">
        <div class="col-10 offset-1">
          

        <table class="table table-hover ">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénoms</th>
                <th scope="col">Âge</th>
                <th scope="col">E-Mail</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
               @foreach($internautes as $internaute)
                <tr>
                <th>{{ $internaute->id }}</th>
                <td>{{ $internaute->name }}</td>
                <td>{{ $internaute->firstname }}</td>
                <td>{{ $internaute->age }}</td>
                <td>{{ $internaute->email }}</td>
                <td>
                    <form method="POST" action="{{ route('internaute.destroy',$internaute->id) }}" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-xs btn-danger" type="submit" value="🗑️ Supprimer">
                    </form>
                    <a class="btn btn-xs btn-info" href="{{ route('internaute.edit',$internaute->id) }}">🖊️ Editer</a>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table> 


        </div>
    </div>
    <div class="row">
        <div class="col-3">
            {{ $internautes->links() }}
        </div>
    </div>
@stop



