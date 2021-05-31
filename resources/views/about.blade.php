@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-8 offset-2">
        <div class="card mb-3">
            <h3 class="card-header">Brindou Junior</h3>
            <div class="card-body">
                <h5 class="card-title">Web Front-End Developper</h5>
                <h6 class="card-subtitle text-muted">Student</h6>
            </div>
            <img style="height: 300px; width: 100%; display: block;" src=" {{asset('img/img.jpeg')}} " alt="picture of the developper">
            <div class="card-body">
                <p class="card-text">Skills and Knowlages</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">HTML & CSS
                    <div class="progress ">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 80%"></div>
                    </div>
                </li>
                <li class="list-group-item">JavaScript & Jquery
                    <div class="progress "> 
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 60%"></div>
                    </div>
                </li>
                <li class="list-group-item">PHP & Framework(LARAVEL)
                    <div class="progress ">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 70%"></div>
                    </div>
                </li>
            </ul>
            <div class="card-footer text-muted">
               Made with 💕 by 225juniorbrindou@gmail.com
               <div class="card-links text-right">
                   <a href="mailto:225juniorbrindou@gmail.com" class="card-link"> 📧 225juniorbrindou@gmail.com </a>
                   <a href="tel:+225 79843757" class="card-link"> 📳 +225 79843757</a>
               </div>
            </div>
        </div>
    </div>
</div>



@stop
