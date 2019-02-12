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
  @if (isset($category))
    <h1>Edit category</h1>
    {{-- pasar action --}}
    <form method="post" action="{{ url('user/'.$userId.'/Categories/'.$category->id.'/edit') }}" onsubmit="return validateFormCategory();" enctype="multipart/form-data">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      {{-- Name --}}
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
          </div>
          <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="{{$category->name}}">
        </div>
        <span id="errorNameCategory"></span>
      </div>
      {{-- Image --}}
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
          </div>
          <input type="file" id="imagePath" name="imagePath" class="form-control">
        </div>
        <span id="errorImageCategory"></span>
      </div>
      {{-- Taxes --}}
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
          </div>
          <input type="text" id="taxes" name="taxes" class="form-control" placeholder="Taxes" value="{{$category->taxes}}">
        </div>
        <span id="errorTaxes"></span>
      </div>
      <span id="errors">
        @if (!empty($errors) && count($errors)>0)
              <ul>
                  @foreach ($errors as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
        @endif
      </span>
      <input type="submit" name="sendCategory" value="Modify" class="btn btn-default waves-effect waves-light">
    </form>
  @else
    <h1>New category</h1>
    <form method="post" action="{{ url('user/'.$userId.'/Categories/create') }}" onsubmit="return validateFormCategory();"  enctype="multipart/form-data">
      {{ csrf_field() }}
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
      {{-- Image --}}
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
          </div>
          <input type="file" id="imagePath" name="imagePath" class="form-control">
        </div>
        <span id="errorImageCategory"></span>
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
      <span id="errors">
        @if (!empty($errors) && count($errors)>0)
              <ul>
                  @foreach ($errors as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
        @endif
      </span>
      <input type="submit" name="sendCategory" value="Create" class="btn btn-default waves-effect waves-light">
    </form>
  @endif
</div>
@stop

@section("js")
<script type="text/javascript" src="{{ url('js/admin/productManagement.js') }}"></script>
@stop