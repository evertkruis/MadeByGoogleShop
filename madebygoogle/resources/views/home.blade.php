@extends('layouts.layout')

@section('content')
    <div class="container">
    <div class="jumbotron">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/1004px-Google_%22G%22_Logo.svg.png" width="10%">
        <br><br>
        <h1 class="display-4">WELCOME TO THE GOOGLE SHOP!</h1>
        <p class="lead">Find information on the products of the #MadeByGoogle-events</p>
        <a class="btn btn-primary" href="{{ url('/users/pdf') }}">Shopping Cart</a>
    </div>

    <main role="main">
        <div class="album py-5 bg-light">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="https://pocketnow.com/files/2019/10/Google-Pixel-4.jpg" width="84%">
                            <div class="card-body">
                                <h1 class="card-text">Google Pixel 4</h1>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">Google Pixel</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="https://bsimg.nl/images/2/base_google-home-mini-wit_1.jpg" width="83%">
                            <div class="card-body">
                                <h1 class="card-text">Google Home Mini</h1>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">Google Home | Google Nest</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="https://media.spokesman.com/photos/2019/06/06/Google_Streaming_Games.JPG.jpg" width="100%">
                            <div class="card-body">
                                <h1 class="card-text">Google Stadia</h1>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">Google Stadia</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="https://prodbccmultimediaweu.blob.core.windows.net/productimages/products/243561/PI_636896705813358953_zoom.jpg" width="100%">
                            <div class="card-body">
                                <h1 class="card-text">Google WiFi</h1>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">Google WiFi | Google Nest</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="https://static.bhphoto.com/images/images2500x2500/1565631585_1499418.jpg" width="100%">
                            <div class="card-body">
                                <h1 class="card-text">Google Nest Hub</h1>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">Google Nest</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="https://lh3.googleusercontent.com/Kd4RAtnCkHY38dAoSlGkLO2id7V8yi6tNk1YrzTzb8NCn8j11IoPxcyVSFQQNacCX1oy=rw" width="100%">
                            <div class="card-body">
                                <h1 class="card-text">Google Nest Hello</h1>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">Google Nest</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    </div>
@endsection
