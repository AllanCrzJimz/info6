@extends('layouts.master')

@section('content') 
        <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">Well never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

<form action="" method="post">
    <div class="form-group">
        <label for="tittle">Titulo</label>
        <input type="text" class="form-control" name="tittle" id="tittle">
    </div>

    <div class="form-group">
        <label for="url_clean">Url Limpia</label>
        <input type="text" class="form-control" name="url_clean">
    </div>

    <div class="form-group">
        <label for="content">Contenido</label>
        <textarea name="form-control" id="content" name="content" rows="3"></textarea>
    </div>

<input type="submmit" value="Enviar" class="btn btn-primary">

</form>



@endsection

