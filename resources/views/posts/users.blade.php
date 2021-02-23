@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @foreach ( $users as $user )
                    @foreach ($user->posts as $post)
                        <h2>{{ $post->title }}</h2>
                    @endforeach
                    <p>{{ $user->name }}</p>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
