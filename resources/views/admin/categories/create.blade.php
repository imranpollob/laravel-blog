@extends('layouts.app')


@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title">Create New Category</h1>
        </div>

        <div class="panel-body">
            <form action="{{ route('category.store') }}" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-primary" type="submit">Store Category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



@stop