@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Travel Wishlist</h1>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <!-- Form untuk menambahkan wishlist -->
    <form method="POST" action="{{ route('wishlist.store') }}">
        @csrf
        <div class="mb-3">
            <label for="destination_name" class="form-label">Destination Name:</label>
            <input type="text" class="form-control" id="destination_name" name="destination_name" required>
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Location:</label>
            <input type="text" class="form-control" id="location" name="location" required>
        </div>
        <div class="mb-3">
            <label for="reason" class="form-label">Reason:</label>
            <textarea class="form-control" id="reason" name="reason"></textarea>
        </div>
        <div class="mb-3">
            <label for="planned_date" class="form-label">Planned Date:</label>
            <input type="date" class="form-control" id="planned_date" name="planned_date">
        </div>
        <button type="submit" class="btn btn-primary">Add to Wishlist</button>
    </form>

    <!-- Daftar Wishlist -->
    <h2 class="mt-5">Your Wishlist</h2>
    <div class="row">
        @foreach ($wishlists as $wishlist)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $wishlist->destination_name }}</h5>
                        <p class="card-text">{{ Str::limit($wishlist->reason, 100) }}</p>
                        <p class="card-text"><strong>Location:</strong> {{ $wishlist->location }}</p>
                        <p class="card-text"><strong>Planned Date:</strong> {{ $wishlist->planned_date }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
