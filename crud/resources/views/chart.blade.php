@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-5" style="height: 300px;">

            {!! $chart->container() !!}
      
        </div>

        <div class="col-5" style="height: 300px;">
        
            {!! $chart2->container() !!}
        
        </div>
    </div>
   
@stop



