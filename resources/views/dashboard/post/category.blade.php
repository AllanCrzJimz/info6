@extends('layouts.master')

@section('content') 
<h1>Post</h1>
<a href="{{ route('category.create') }}" class="btn btn-success">
  Create
</a>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Categorias</th>
      <th scope="col" colspan="2">Options</th>
    </tr>
  </thead>
</table>

@endsection