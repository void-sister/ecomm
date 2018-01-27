@extends('layout')

@section('header')
<h1> Categories Index Page</h1>
@endsection

@section('content')
<table>
<tr>
    <th>Id</th>
    <th>Category</th>
</tr>

@foreach ($categories as $category)
<tr>
    <td> {{$category->id}} </td>
    <td> {{$category->category_name}} </td>
    <td>
        <a href="{{ URL::to('categories/' . $category->id . '/edit') }}">Edit</a>
    </td>
    <td>
        {{ Form::open(['url' => 'categories/' . $category->id]) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete') }}
        {{ Form::close() }}        
    </td>
</tr>
@endforeach
</table>

<br>
<a href="{{ URL::to('categories/create') }}">Add</a>
@endsection 

