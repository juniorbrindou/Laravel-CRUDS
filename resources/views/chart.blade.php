@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-6" style="height: 450px;">

            {!! $chart->container() !!}
      
        </div>

        <div class="col-6" style="height: 450px;">
        
            {!! $chart2->container() !!}
        
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
{!! $chart->script() !!}
{!! $chart2->script() !!}
@stop
