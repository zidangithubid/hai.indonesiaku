@extends('layouts.frontend')

@section('header-class', 'd-none')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 py-5">
                <div class="w-100 shadow-sm border my-5 rounded bg-white p-4">
                    <div class="text-center">
                        <img src="{{ asset('img/static/favicon.png') }}" class="position-relative" style="top: -4px" width="55px" alt="">
                        <h3 class="d-inline text-danger">Login</h3>
                    </div>
                    <form method="POST">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="example@domain.com" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="input-group">
                                <input type="password" name="password" id="password" class="form-control">
                                <div class="input-group-prepend rounded bg-dark">
                                    <span class="input-group-text"><i class="fas fa-eye"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember">Ingat saya</label>
                        </div>
                        <button class="btn btn-warning shadow-warning w-100 mb-3">Login</button>
                        <hr>
                        <a href="{{ url('register') }}" role="button" class="btn btn-light border w-100">Register</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
