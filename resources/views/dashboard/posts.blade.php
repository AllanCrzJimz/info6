@extends('layouts.master')

@section('content') 
@include('fragments.validation-errors')
<h1>Post</h1>
<form method="post" action="{{route("post.store")}}" >
    @csrf
    <div class="form-group">
        <label for="tittle">Titulo</label>
        <input type="text" class="form-control" name="tittle" id="tittle">
    </div>

    <div class="form-group">
        <label for="url_clean">URL</label>
        <input type="text" class="form-control" name="url_clean">
    </div>

    <div class="form-group">
        <label for="content">Contenido</label>
        <textarea name="form-control" id="content" name="content" rows="3"></textarea>
    </div>

<button type="submmit" value="Enviar" class="btn btn-primary">Submit</button>

</form>




@endsection

