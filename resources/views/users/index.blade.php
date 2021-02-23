@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @foreach ( $users as $user )
                    <h2>{{ $user->name }}</h2>
                    @foreach ($user->addresses as $address)
                        <p>{{ $address->country }}</p>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
