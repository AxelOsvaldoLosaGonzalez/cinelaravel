@extends('layouts.app')
@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                        <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
                        "http://www.w3.org/TR/html4/loose.dtd">

                        <html>
                        <head>
                            <meta http-equiv="Content-Type" content="text/html charset=UTF-8">

                        </head>

                        <body class="bg-secondary">

                        <form action="buscapeliculas.jsp">

                            <ul id=”menu_modulos”>
                                <div>
    
                                    <button>
                                        <a href="{{url('peliculas')}}" class="nav-link">Peliculas</a>
                                    </button>
                                </div>
                                <div class="div">
                                    <img src="{!! asset('imagenes/rimuru.png') !!}">
                                </div>
                                <div class="div">
                                    <img src="{!! asset('imagenes/slime.png') !!}">
                                </div>
                                <div>
                                    <button>
                                        <a href="{{url('cines')}}" class="nav-link">Cines</a>
                                    </button>
                                </div>

                            </ul>
                        </form>

                        <p></p>
                        <p><i></i>
                            <tt></tt> <i></i> <tt></tt> <i></i>
                            <tt></tt></p>
                        </body>
                        <footer>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-md-6">
                                        <div>
                                            <h3>Logo</h3>
                                            <p class="mb-30 footer-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad soluta facilis
                                                eos quia optio iusto odit atque eum tempore, quisquam officiis vero veniam hic,</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 offset-xl-1 col-lg-2 col-md-6">
                                        <div class="">
                                            <h4>Quick Link</h4>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#" class="text-decoration-none">Home</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="text-decoration-none">About Us</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="text-decoration-none">Service</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="text-decoration-none">Contact</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6">
                                        <div>
                                            <h4>Service</h4>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#" class="text-decoration-none">Marketing</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="text-decoration-none">Branding</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="text-decoration-none">Web Design</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="text-decoration-none">Graphics Design</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6">
                                        <div>
                                            <h4>Address</h4>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <p>+017367234</p>
                                                </li>
                                                <li>
                                                    <p><a href="#">MICINEISC@gmail.com</a>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>New York
                                                        City in New York State
                                                        New York City comprises 5 boroughs sitting where the Hudson River meets th</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">

                                    <div class="copyright">
                                        <p>Developed and maintained by <a href="#" target="_blank">company</a></p>
                                    </div>
                                </div>
                            </div>
                        </footer>
                        </html>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
