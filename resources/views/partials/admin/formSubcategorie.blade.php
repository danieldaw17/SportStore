@extends("layouts.noadmin.layout")

@section("styles")
<link rel="stylesheet" type="text/css" href="{{ url('css/admin/productManagement.css') }}">
@stop

@section("title")
{{-- Cambiar titulo en funcion del parametro de la url --}}
New subcategorie
@stop

@section("content")
<div id="formCategorie">
  {{-- Cambiar en funcion si recibe datos o no --}}
  <h1>New subcategory</h1>
  {{-- pasar action --}}
  <form method="post" action="#" enctype="multipart/form-data" onsubmit="return validateFormSubcategory();">
    {{-- Name --}}
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
        </div>
        <input type="text" id="name" name="name" class="form-control" placeholder="Name">
      </div>
      <span id="errorNameSubcategory"></span>
    </div>
    {{-- Category --}}
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
        </div>
        <select name="categoryId" id="categoryId" class="form-control">
          <option value="0">Select category</option>
          <option value="1">Clothes</option>
          <option value="2">Vehicles</option>
          <option value="3">Accesories</option>
          <option value="4">Suplements</option>
        </select>
      </div>
      <span id="errorCategory"></span>
    </div>
    {{-- Image --}}
    <div class="form-group">
      <div class="input-group" id="inputFile">
        <div class="input-group-prepend">
          <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
        </div>
        <input type="file" name="imagePath" id="imagePath" class="form-control">
      </div>
      <span id="errorImage"></span>
    </div>
    <input type="submit" name="sendSubcategory" value="Create" class="btn btn-default waves-effect waves-light">
  </form>
</div>
@stop

@section("js")
<script type="text/javascript" src="{{ url('js/admin/productManagement.js') }}"></script>
@stop