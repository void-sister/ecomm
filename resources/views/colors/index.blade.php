@extends('layout')

@section('header')
<h1> Colors Index Page</h1>
@endsection

@section('content')
<table>
<tr>
    <th>Id</th>
    <th>Color</th>
</tr>

@foreach ($colors as $color)
<tr>
    <td> {{$color->id}} </td>
    <td> {{$color->color}} </td>
    <td>
        <a href="{{ URL::to('colors/' . $color->id . '/edit') }}">Edit</a>
    </td>
    <td>
        {{ Form::open(['url' => 'colors/' . $color->id]) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete') }}
        {{ Form::close() }}        
    </td>
</tr>
@endforeach
</table>

<br>
<a href="{{ URL::to('colors/create') }}">Add</a>
@endsection 

