@extends('layout')

@section('header')
<h1> Items Index Page</h1>
@endsection

@section('content')
<table>
<tr>
    <th>Id</th>
    <th>Item</th>
    <th>Price</th>
    <th>Category_Id</th>
    <th>Description</th>
    <th>Details</th>
</tr>

@foreach ($items as $item)
<tr>
    <td> {{$item->id}} </td>
    <td> {{$item->item_name}} </td>
    <td> {{$item->item_price}} </td>
    <td> {{$item->category_id}} </td>
    <td> {{$item->item_description}} </td>
    <td> {{$item->other_item_details}} </td>
    <td>
        <a href="{{ URL::to('items/' . $item->id . '/edit') }}">Edit</a>
    </td>
</tr>
@endforeach
</table>

<br>
<a href="{{ URL::to('items/create') }}">Add</a>
@endsection 

