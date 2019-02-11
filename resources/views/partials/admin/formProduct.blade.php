@extends("layouts.noadmin.layout")

@section("styles")
<link rel="stylesheet" type="text/css" href="{{ url('css/admin/productManagement.css') }}">
@stop

@section("title")
{{-- Cambiar titulo en funcion del parametro de la url --}}
New product
@stop

@section("content")
<div id="formProduct">
  {{-- Cambiar en funcion si recibe datos o no --}}
  <h1>New product</h1>
  {{-- pasar action --}}
  <form method="post" action="{{ url('user/'.Auth::user()->id.'/Products/create') }}" enctype="multipart/form-data" onchange="showFields()" onsubmit="return validateFormProduct();">
    {{-- Name --}}
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
        </div>
        <input type="text" id="name" name="name" class="form-control" placeholder="Name">
      </div>
      <span id="errorNameProduct"></span>
    </div>
    {{-- Short description --}}
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
        </div>
        <textarea id="shortDescription" name="shortDescription" placeholder="Short description" class="form-control"></textarea>
      </div>
      <span id="errorShortDescription"></span>
    </div>
    {{-- Description --}}
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
        </div>
        <textarea id="description" name="description" placeholder="Description" class="form-control"></textarea>
      </div>
      <span id="errorDescription"></span>
    </div>
    {{-- Image --}}
    <div class="form-group">
      <div class="input-group" id="inputFile">
        <div class="input-group-prepend">
          <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
        </div>
        <input type="file" name="nameImg[]" id="nameImg" multiple class="form-control">
      </div>
      <span id="errorImage"></span>
    </div>
    {{-- Gender --}}
    <div class="form-group" id="genderGroup">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="list-group-item"><i class="fa fa-male prefix grey-text fa-1g" aria-hidden="true"></i></span>
        </div>
        <select name="gender" id="gender" class="form-control">
          <option value="0">Select gender</option>
          <option value="1">Men</option>
          <option value="2">Female</option>
          <option value="3">Unisex</option>
        </select>
      </div>
      <span id="errorGender"></span>
    </div>
    {{-- Size --}}
    <div class="form-group" id="sizeGroup">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
        </div>
        <select name="size" id="size" class="form-control">
          <option value="0">Select size</option>
          <option value="1">XXL</option>
          <option value="2">XL</option>
          <option value="3">L</option>
          <option value="4">M</option>
          <option value="5">S</option>
          <option value="6">XS</option>
        </select>
      </div>
      <span id="errorSize"></span>
    </div>
    {{-- Sport --}}
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="list-group-item"><i class="fa fa-futbol prefix grey-text fa-1g" aria-hidden="true"></i></span>
        </div>
        <select name="sportId" id="sportId" class="form-control">
          {{-- OJO CON EL VALOR DE LA CATEGORIA BIKE, CAMBIAR TAMBIEN EN EL JS (PARA MOSTRAR SHIFTS) --}}
          <option value="0">Select sport</option>
          <option value="1">Football</option>
          <option value="2">Basketball</option>
          <option value="3">Bike</option>
        </select>
      </div>
      <span id="errorSport"></span>
    </div>
    {{-- Price --}}
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="list-group-item"><i class="fa fa-euro-sign prefix grey-text fa-1g" aria-hidden="true"></i></span>
        </div>
        <input type="text" id="basePrice" name="basePrice" class="form-control" placeholder="Price">
      </div>
      <span id="errorPrice"></span>
    </div>
    {{-- Brand --}}
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
        </div>
        <input type="text" id="brandId" name="brandId" class="form-control" placeholder="Brand">
      </div>
      <span id="errorBrand"></span>
    </div>
    {{-- Type suplement --}}
    <div class="form-group" id="suplementGroup">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
        </div>
        <input type="text" id="typeSuplement" name="typeSuplement" class="form-control" placeholder="Type suplement">
      </div>
      <span id="errorTypeSuplement"></span>
    </div>
    {{-- Volume --}}
    <div class="form-group" id="volumeGroup">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
        </div>
        <input type="text" id="volume" name="volume" class="form-control" placeholder="Volume">
      </div>
      <span id="errorVolume"></span>
    </div>
    {{-- Shifts --}}
    <div class="form-group" id="shiftGroup">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
        </div>
        <input type="text" id="shifts" name="shifts" class="form-control" placeholder="Shifts">
      </div>
      <span id="errorShifts"></span>
    </div>
    {{-- Wheels amount --}}
    <div class="form-group" id="wheelsGroup">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
        </div>
        <input type="text" id="wheelsAmount" name="wheelsAmount" class="form-control" placeholder="Wheels amounts">
      </div>
      <span id="errorWheelsAmount"></span>
    </div>
    {{-- Weight --}}
    <div class="form-group" id="weightGroup">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
        </div>
        <input type="text" id="weight" name="weight" class="form-control" placeholder="Weight">
      </div>
      <span id="errorWeight"></span>
    </div>
    <input type="submit" name="sendProduct" value="Create" class="btn btn-default waves-effect waves-light">
  </form>
</div>
@stop

@section("js")
<script type="text/javascript" src="{{ url('js/admin/productManagement.js') }}"></script>
@stop