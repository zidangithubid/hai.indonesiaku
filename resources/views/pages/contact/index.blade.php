@extends('layouts.frontend')

@section('contact', 'active-nav')

@section('content')
<div class="container-fluid bg-danger py-5 mt-5 position-relative overflow-hidden">
    <img src="{{ asset('img/static/wall1.jpg') }}" class="position-absolute bg-back-contact" alt="bg-wall">
    <div class="container text-white py-4 position-relative">
        <h3><i class="fas fa-id-card-alt"></i> Give us your feedback</h3>
        <div class="row">
            <div class="col-md-6">
                {{-- <button class="btn btn-warning shadow"><i class="far fa-envelope"></i> Send to Email</button>
                <button class="btn btn-white bg-white"><i class="fab fa-instagram"></i> Send to Instagram</button> --}}
                <div class="form-group my-2">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control border-0" placeholder="Your Awesome Name Here..." aria-describedby="helpId">
                </div>
                <div class="form-group my-2">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control border-0" placeholder="example@domain.com" aria-describedby="helpId">
                </div>
                <div class="form-group my-2">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" id="subject" class="form-control border-0" placeholder="Your Subject Here..." aria-describedby="helpId">
                </div>
                <div class="form-group my-2">
                    <label for="subject">Subject</label>
                    <textarea name="description" id="description" cols="30" class="form-control border-0" rows="4" placeholder="Your suggestion critism Here..."></textarea>
                </div>
                <div class="text-right">
                    <button class="btn btn-warning shadow px-5"><i class="fas fa-paper-plane"></i> Send</button>
                </div>
            </div>
            <div class="col-md-6 py-5">
                <div class="position-absolute add-contact shadow">
                    <div class="bg-white rounded myfont-arciform px-5 text-warning py-2">
                        <h4 class="my-0 d-inline">@Hai.Indonesiaku</h4>
                    </div>
                </div>
                <div class="position-absolute logo-img-parent">
                    <img src="{{ asset('img/static/favicon.png') }}" class="w-50 logo-img-contact" alt="">
                </div>
                <div class="text-center">
                    <img src="{{ asset('img/static/ig.png') }}" class="w-50 rounded shadow ig-img-contact" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
