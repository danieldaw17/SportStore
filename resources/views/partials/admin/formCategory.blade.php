@extends("layouts.noadmin.layout")

@section("styles")
<link rel="stylesheet" type="text/css" href="{{ url('css/admin/productManagement.css') }}">
@stop

@section("title")
{{-- Cambiar titulo en funcion del parametro de la url --}}
New categorie
@stop

@section("content")
<div id="formCategorie">
  {{-- Cambiar en funcion si recibe datos o no --}}
  <h1>New category</h1>
  {{-- pasar action --}}
  <form method="post" action="#" onsubmit="return validateFormCategory();">
    {{-- Name --}}
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
        </div>
        <input type="text" id="name" name="name" class="form-control" placeholder="Name">
      </div>
      <span id="errorNameCategory"></span>
    </div>
    {{-- Taxes --}}
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
        </div>
        <input type="text" id="taxes" name="taxes" class="form-control" placeholder="Taxes">
      </div>
      <span id="errorTaxes"></span>
    </div>
    <input type="submit" name="sendCategory" value="Create" class="btn btn-default waves-effect waves-light">
  </form>
</div>
@stop

@section("js")
<script type="text/javascript" src="{{ url('js/admin/productManagement.js') }}"></script>
@stop