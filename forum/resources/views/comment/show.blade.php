@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/comment" class="btn btn-outline-primary btn-sm">Go back</a>
                @if ($comment->parent_id != 0)
                    <h2>Answer for <a href="/comment/{{ $comment->parent_id }}">#{{ $comment->parent_id }}</a></h2>
                @else
                    <br><br>
                @endif
                <p>{!! $comment->message !!}</p>
                <hr>
                <a href="/comment/create/comment?parent_id={{ $comment->id }}" class="btn btn-outline-primary">Reply</a>
                <a href="/comment/{{ $comment->id }}/edit" class="btn btn-outline-primary">Edit Comment</a>
                <br><br>
                <form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete Comment</button>
                </form>
            </div>
        </div>
    </div>
@endsection
