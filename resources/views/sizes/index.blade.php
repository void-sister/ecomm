@extends('layout')

@section('header')
<h1> Sizes Index Page</h1>
@endsection

@section('content')
<table>
<tr>
    <th>Id</th>
    <th>Category Id</th>
    <th>Size</th>
</tr>

@foreach ($sizes as $size)
<tr>
    <td> {{$size->id}} </td>
    <td> 1 </td>
    <td> {{$size->size}} </td>
    <td>
        <a href="{{ URL::to('sizes/' . $size->id . '/edit') }}">Edit</a>
    </td>
</tr>
@endforeach
</table>

<br>
<a href="{{ URL::to('sizes/create') }}">Add</a>
@endsection 

