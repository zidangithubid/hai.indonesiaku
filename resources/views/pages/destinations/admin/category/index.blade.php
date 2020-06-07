@extends('layouts.app')

@section('content')
    <div class="w-100 py-7 position-absolute bg-gradient-primary"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card shadow mt-8">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Categories of Destinations</h3>
                            </div>
                            <div class="col text-right">
                                <a href="{{ route('category.create') }}" class="btn btn-sm btn-primary"><i class="ni ni-fat-add"></i> Create new category</a>
                                <a href="{{ route('destinations.index') }}" class="btn btn-sm btn-primary">Destinations</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <a role="button" href='{{ url("admin/destinations/categories/edit/$category->id") }}' class="btn btn-success btn-sm">Edit</a>
                                            <a role="button" onclick="return confirm('Yakin dihapus ?')" href='{{ url("admin/destinations/categories/destroy/$category->id") }}' class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            {{ $categories->links() }}
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush

