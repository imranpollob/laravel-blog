@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-body">

            <table class="table table-hover">

                <thead>
                <tr>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>

                @if(count($categories))
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>
                                <a href="{{ route('category.edit', ['id'=>$category->id]) }}" class="btn btn-xs btn-primary">
                                    Edit
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('category.destroy', ['id'=>$category->id]) }}" class="btn btn-xs btn-danger">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                @endif
            </table>

        </div>
    </div>

@stop
