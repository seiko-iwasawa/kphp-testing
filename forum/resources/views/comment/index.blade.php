@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">Our Forum!</h1>
                        <p>See the latest comments:</p>
                    </div>
                    <div class="col-4">
                        <p>Create new Comment</p>
                        <a href="/comment/create/comment" class="btn btn-primary btn-sm">Add Comment</a>
                    </div>
                </div>
                @forelse($comments as $comment)
                    <ul style="list-style: none;">
                        <li><a href="./comment/{{ $comment->id }}">{{ $comment->message }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No Comments available</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
