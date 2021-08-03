@extends('layouts.default',['title'=>'About'])

@section('content')
    <div class="container">
        <div class="blockDef">
            <h3>What is Laracarte ?</h3>
            <p>Laracarte is a clone app of <a href="http://laramap.com" target="blank">Laramap.com</a>
        
            <p>
                Feel free to help to improve the <a href="https://github.com/jozph0251/laracarte-YK" target="_blank">source code</a>
            </p>
            <div class="warning">
                <p class="alert alert-warning" >
                    <strong>This app has built by <a href="https://twitter.com/etsmo" target="_blank">@etsmo</a></strong>
                </p>
            </div>
        </div>
        <hr>
        <div class="block-laramap">
            <h3>What is Laramap ?</h3>
            <p>Laramap is the website by which Laracarte was inspired ;)</p>
            <p>More info <a href="http://laramap.com/p/about">here</a>
            
        </div>
        <hr>
        <div class="block-service-used" >
            <h3>Which tools and services are used in laracarte ?</h3>
            <p>
                Basically it's built in laravel and bootstrap. But's ther's a bunch of services are used for 
                email and other section.
            </p>
            <ul>
                <li>Laravel</li>
                <li>Bootstrap</li>
                <li>Amazon S3</li>
                <li>Mandrill</li>
                <li>Google Map</li>
                <li>Gravatar</li>
                <li>Antony Martin's Geolocation Package</li>
                <li>Michel Fortin's Markdown Parser Package</li>
                <li>Heroku</li>
            </ul> 
            
        </div>
        <hr>
    </div>
@stop