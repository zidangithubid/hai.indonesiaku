@extends('layouts.frontend')

@section('festivals', 'active-nav')

@section('content')

    <div class="container-fluid">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-md-10 d-block position-relative overflow-hidden offset-md-1">
                    <a href="{{ URL::previous() }}" class="btn btn-sm btn-danger shadow-sm mb-3"><i class="fas fa-arrow-left"></i> Kembali</a>
                    <h2 class="mb-1">{{ $festival->name }} <span class="badge badge-warning">{{ $festival->criteria->name }}</span></h2>
                    <p class="my-0 d-inline" style="font-size: .75rem">
                        <i class="fas fa-map-marker-alt"></i> {{ $festival->province->name }}, {{ $festival->city->name }}, {{ $festival->district->name }}
                        <span class="mx-3">|</span>
                    </p>
                    <p class="my-0 d-inline" style="font-size: .75rem">
                        <i class="fas fa-clock"></i> {{ $festival->date }}
                    </p>

                    <div class="text-center my-3">
                        <img src='{{ asset("img/festivals/$festival->picture") }}' class="w-75" alt="">
                    </div>

                    {!! html_entity_decode($festival->description) !!}

                </div>
            </div>
        </div>
    </div>

@endsection
