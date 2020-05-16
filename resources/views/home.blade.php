@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if ( Auth::user()->isAdmin() )
                        <div class="alert alert-success" role="alert">
                            <a href="{{ route('users') }}">Users</a>
                        </div>
                    @endif

                    @foreach ($posts as $post)
                        <p>This is field1 {{ $post->field_1 }} and field2 {{ $post->field_2 }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
