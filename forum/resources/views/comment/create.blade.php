@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/comment" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Create a New Comment</h1>
                    <p>Fill and submit this form to create a comment</p>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            @if (app('request')->input('parent_id'))
                                <div class="control-group col-12">
                                    <label for="parent_id">Answer to</label>
                                    <textarea id="parent_id" class="form-control" name="parent_id" placeholder="Enter Parent ID" rows="1" required>{{ app('request')->input('parent_id') }}</textarea>
                                </div>
                            @else
                                <div class="control-group col-12">
                                    <label for="parent_id">Answer to</label>
                                    <textarea id="parent_id" class="form-control" name="parent_id" placeholder="Enter Parent ID" rows="1" required>0</textarea>
                                </div>
                            @endif
                            <div class="control-group col-12 mt-2">
                                <label for="message">Message</label>
                                <textarea id="message" class="form-control" name="message" placeholder="Enter Message" rows="" required></textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Create Comment
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
