@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/comments" class="btn btn-outline-primary btn-sm">Go back</a>
                <br><br>
                <p>{!! $comment->message !!}</p> 
                <hr>
                <a href="/comments/{{ $comment->id }}/edit" class="btn btn-outline-primary">Edit Message</a>
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
