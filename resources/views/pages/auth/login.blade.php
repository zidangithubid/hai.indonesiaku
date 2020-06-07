@extends('layouts.frontend')

@section('header-class', 'd-none')

@section('content')
    <div class="container-fluid auth-page position-relative">
        <div class="position-absolute w-100 bg-danger back-opacity"></div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-6 offset-md-3 my-4 py-5">
                    <div class="w-100 shadow-sm border my-5 rounded bg-white p-4">
                        <div class="text-center">
                            <img src="{{ asset('img/static/favicon.png') }}" class="position-relative" style="top: -4px" width="55px" alt="">
                            <h3 class="d-inline text-danger">Login</h3>
                        </div>
                        <form id="login_form" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control" placeholder="example@domain.com" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="input-group">
                                    <input type="password" name="password" id="password" class="form-control">
                                    <div class="input-group-prepend rounded bg-dark" id="show-pas1">
                                        <span class="input-group-text"><i class="fas fa-eye icon1"></i></span>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="form-group">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember">Ingat saya</label>
                            </div> --}}
                            <button class="btn btn-warning shadow-warning w-100 mb-3">Login</button>
                            <hr>
                            <a href="{{ url('register') }}" role="button" class="btn btn-light border w-100">Register</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#show-pas1').click(function() {
            var input = document.getElementById("password");
            if(input.type === "password") {
                input.type = "text";
                $('.icon1').addClass('text-primary');
            } else {
                input.type = "password";
                $('.icon1').removeClass('text-primary');
            }
        });
        $(document).ready(function() {
            $('#login_form').off().submit(function(e) {
                e.preventDefault()
                let token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{ url('login/auth') }}",
                    type: "POST",
                    data: new FormData(this),
                    processData: false,
                    cache: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': token,
                    },
                    success: function(data) {
                        if(data.success === true) {
                            alert('Berhasil');
                            window.location.href = "{{ url('/home') }}"
                        } else {
                            alert('Gagal');
                        }
                    }
                })
            });
        })
    </script>
@endsection
