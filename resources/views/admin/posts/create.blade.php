@extends('layouts.app')


@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title">Create New Post</h1>
        </div>

        <div class="panel-body">
            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="featured">Featured Image</label>
                    <input type="file" name="featured" id="featured" class="form-control">
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



@stop