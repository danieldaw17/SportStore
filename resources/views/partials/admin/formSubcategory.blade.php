@extends("layouts.noadmin.layout")

@section("styles")
<link rel="stylesheet" type="text/css" href="{{ url('css/admin/productManagement.css') }}">
@stop

@section("title")
{{-- Cambiar titulo en funcion del parametro de la url --}}
New subcategorie
@stop

@section("content")
@foreach ($errors as $error)
	{{$error}}
@endforeach
<div id="formCategorie">
  @if (isset($sub_category))
    <h1>Edit subcategory</h1>
    {{-- pasar action --}}
    <form method="post" action="{{ url('user/'.$userId.'/Categories/'.$categoryId.'/Sub_categories/' .$sub_category->id.'/edit') }}" onsubmit="return validateFormCategory();">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      {{-- Name --}}
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
          </div>
          <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="{{$sub_category->name}}">
        </div>
        <span id="errorNameSubcategory"></span>
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
      <input type="submit" name="sendSubcategory" value="Modify" class="btn btn-default waves-effect waves-light">
    </form>
  @else
    <h1>New subcategory</h1>
    <form method="post" action="{{ url('user/'.$userId.'/Categories/'.$categoryId.'/Sub_categories/create') }}" onsubmit="return validateFormCategory();">
      {{ csrf_field() }}
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
  @endif
</div>
@stop

@section("js")
<script type="text/javascript" src="{{ url('js/admin/productManagement.js') }}"></script>
@stop
