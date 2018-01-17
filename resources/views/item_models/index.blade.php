@extends('layout')

@section('header')
<h1> Item Models Index Page</h1>
@endsection

@section('content')
<table>
<tr>
    <th>Id</th>
    <th>Item_Id</th>
    <th>Model</th>
    <th>Sex</th>
</tr>

@foreach ($item_models as $item_model)
<tr>
    <td> {{$item_model->id}} </td>
    <td> {{$item_model->item_id}} </td>
    <td> {{$item_model->model_name}} </td>
    <td> Male </td>
    <td>
        <a href="{{ URL::to('item_models/' . $item_model->id . '/edit') }}">Edit</a>
    </td>
</tr>
@endforeach
</table>

<br>
<a href="{{ URL::to('item_models/create') }}">Add</a>
@endsection 

