@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @foreach ( $addresses as $address )
                    <h2>{{ $address->name }}</h2>
                    <p>{{ $user->address->country }}</p>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
