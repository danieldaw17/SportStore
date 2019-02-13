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
  @if(isset($product))
    <h1>Edit product</h1>
    <form method="post" action="{{ url('user/'.Auth::user()->id.'/Categories/'.$categoryId.'/Sub_categories/'.$subCategoryId.'/Products/'.$product->id.'/edit') }}" enctype="multipart/form-data" onchange="showFields()" onsubmit="return validateFormProduct();">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      {{-- Name --}}
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
          </div>
          <input type="text" id="name" name="name" class="form-control" value="{{$product->name}}">
        </div>
        <span id="errorNameProduct"></span>
      </div>
      {{-- Short description --}}
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
          </div>
          <textarea id="shortDescription" name="shortDescription" class="form-control">{{$product->shortDescription}}</textarea>
        </div>
        <span id="errorShortDescription"></span>
      </div>
      {{-- Description --}}
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
          </div>
          <textarea id="description" name="description" class="form-control">{{$product->description}}</textarea>
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
			  @if ($product->gender=="men")
			  	<option selected value="man">Man</option>
				<option value="woman">Woman</option>
	            <option value="unisex">Unisex</option>

			  @elseif ($product->gender=="woman")
				  <option value="man">Man</option>
				  <option selected value="woman">Woman</option>
				  <option value="unisex">Unisex</option>
			  @else
				<option value="man">Man</option>
				<option value="woman">Woman</option>
				<option selected value="unisex">Unisex</option>
			  @endif
          </select>
        </div>
        <span id="errorGender"></span>
      </div>
      {{-- Sport --}}
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="list-group-item"><i class="fa fa-futbol prefix grey-text fa-1g" aria-hidden="true"></i></span>
          </div>
          <select name="sportId" id="sportId" class="form-control">
              <option value="0">Select sport</option>
            @foreach($sports as $sport)
              {{-- OJO CON EL VALOR DE LA CATEGORIA BIKE, CAMBIAR TAMBIEN EN EL JS (PARA MOSTRAR SHIFTS) --}}
              <option value="{{$sport->id}}">{{$sport->name}}</option>
            @endforeach
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
          <input type="text" id="basePrice" name="basePrice" class="form-control" value="{{$product->basePrice}}">
        </div>
        <span id="errorPrice"></span>
      </div>
      {{-- Brand --}}
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
          </div>
          <select name="brandId" id="brandId" class="form-control">
              <option value="0">Select brand</option>
            @foreach($brands as $brand)
              <option value="{{$brand->id}}">{{$brand->name}}</option>
            @endforeach
          </select>
        </div>
        <span id="errorBrand"></span>
      </div>
      {{-- Type suplement --}}
      <div class="form-group" id="suplementGroup">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
          </div>
          <input type="text" id="typeSuplement" name="typeSuplement" class="form-control" value="{{$product->typeSupplement}}">
        </div>
        <span id="errorTypeSuplement"></span>
      </div>
      {{-- Volume --}}
      <div class="form-group" id="volumeGroup">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
          </div>
          <input type="text" id="volume" name="volume" class="form-control" value="{{$product->volume}}">
        </div>
        <span id="errorVolume"></span>
      </div>
      {{-- Shifts --}}
      <div class="form-group" id="shiftGroup">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
          </div>
          <input type="text" id="shifts" name="shifts" class="form-control" value="{{$product->shifts}}">
        </div>
        <span id="errorShifts"></span>
      </div>
      {{-- Wheels amount --}}
      <div class="form-group" id="wheelsGroup">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
          </div>
          <input type="text" id="wheelsAmount" name="wheelsAmount" class="form-control" value="{{$product->wheelsAmount}}">
        </div>
        <span id="errorWheelsAmount"></span>
      </div>
      {{-- Weight --}}
      <div class="form-group" id="weightGroup">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
          </div>
          <input type="text" id="weight" name="weight" class="form-control" value="{{$product->weight}}">
        </div>
        <span id="errorWeight"></span>
      </div>
      {{-- Stock --}}
      <div class="space">
        <div class="col-xs-12 ">
          <nav>
            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#stockXXS" role="tab" aria-controls="nav-home" aria-selected="true">Stock XXS</a>
              <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#stockXS" role="tab" aria-controls="nav-home" aria-selected="true">Stock XS</a>
              <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#stockS" role="tab" aria-controls="nav-home" aria-selected="true">Stock S</a>
              <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#stockM" role="tab" aria-controls="nav-home" aria-selected="true">Stock M</a>
              <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#stockL" role="tab" aria-controls="nav-home" aria-selected="true">Stock L</a>
              <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#stockXL" role="tab" aria-controls="nav-home" aria-selected="true">Stock XL</a>
              <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#stockXXL" role="tab" aria-controls="nav-home" aria-selected="true">Stock XXL</a>
            </div>
          </nav>
          <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
            {{-- XXS --}}
            <div class="tab-pane fade show active info" id="stockXXS" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
                  </div>
                  <input type="text" id="XXS" name="XXS" class="form-control" placeholder="XXS">
                </div>
                <span id="errorXXS"></span>
              </div>
            </div>
            {{-- XS --}}
            <div class="tab-pane fade show info" id="stockXS" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
                  </div>
                  <input type="text" id="XS" name="XS" class="form-control" placeholder="XS">
                </div>
                <span id="errorXS"></span>
              </div>
            </div>
            {{-- S --}}
            <div class="tab-pane fade show info" id="stockS" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
                  </div>
                  <input type="text" id="S" name="S" class="form-control" placeholder="S">
                </div>
                <span id="errorS"></span>
              </div>
            </div>
            {{-- M --}}
            <div class="tab-pane fade show info" id="stockM" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
                  </div>
                  <input type="text" id="M" name="M" class="form-control" placeholder="m">
                </div>
                <span id="errorM"></span>
              </div>
            </div>
            {{-- L --}}
            <div class="tab-pane fade show info" id="stockL" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
                  </div>
                  <input type="text" id="L" name="L" class="form-control" placeholder="L">
                </div>
                <span id="errorL"></span>
              </div>
            </div>
            {{-- XL --}}
            <div class="tab-pane fade show info" id="stockXL" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
                  </div>
                  <input type="text" id="XL" name="XL" class="form-control" placeholder="XL">
                </div>
                <span id="errorXL"></span>
              </div>
            </div>
            {{-- XXL --}}
            <div class="tab-pane fade show info" id="stockXXL" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
                  </div>
                  <input type="text" id="XXL" name="XXL" class="form-control" placeholder="XXL">
                </div>
                <span id="errorXXL"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <input type="submit" name="sendProduct" value="Update" class="btn btn-default waves-effect waves-light">
    </form>
  @else
    <h1>New product</h1>
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
      {{-- Sport --}}
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="list-group-item"><i class="fa fa-futbol prefix grey-text fa-1g" aria-hidden="true"></i></span>
          </div>
          <select name="sportId" id="sportId" class="form-control">
              <option value="0">Select sport</option>
            @foreach($sports as $sport)
              {{-- OJO CON EL VALOR DE LA CATEGORIA BIKE, CAMBIAR TAMBIEN EN EL JS (PARA MOSTRAR SHIFTS) --}}
              <option value="{{$sport->id}}">{{$sport->name}}</option>
            @endforeach
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
          <select name="brandId" id="brandId" class="form-control">
              <option value="0">Select brand</option>
            @foreach($brands as $brand)
              <option value="{{$brand->id}}">{{$brand->name}}</option>
            @endforeach
          </select>
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
      {{-- Stock --}}
      <div class="space">
        <div class="col-xs-12 ">
          <nav>
            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#stockXXS" role="tab" aria-controls="nav-home" aria-selected="true">Stock XXS</a>
              <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#stockXS" role="tab" aria-controls="nav-home" aria-selected="true">Stock XS</a>
              <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#stockS" role="tab" aria-controls="nav-home" aria-selected="true">Stock S</a>
              <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#stockM" role="tab" aria-controls="nav-home" aria-selected="true">Stock M</a>
              <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#stockL" role="tab" aria-controls="nav-home" aria-selected="true">Stock L</a>
              <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#stockXL" role="tab" aria-controls="nav-home" aria-selected="true">Stock XL</a>
              <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#stockXXL" role="tab" aria-controls="nav-home" aria-selected="true">Stock XXL</a>
            </div>
          </nav>
          <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
            {{-- XXS --}}
            <div class="tab-pane fade show active info" id="stockXXS" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
                  </div>
                  <input type="text" id="XXS" name="XXS" class="form-control" placeholder="Stock XXS">
                </div>
                <span id="errorXXS"></span>
              </div>
            </div>
            {{-- XS --}}
            <div class="tab-pane fade show info" id="stockXS" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
                  </div>
                  <input type="text" id="XS" name="XS" class="form-control" placeholder="Stock XS">
                </div>
                <span id="errorXS"></span>
              </div>
            </div>
            {{-- S --}}
            <div class="tab-pane fade show info" id="stockS" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
                  </div>
                  <input type="text" id="S" name="S" class="form-control" placeholder="Stock S">
                </div>
                <span id="errorS"></span>
              </div>
            </div>
            {{-- M --}}
            <div class="tab-pane fade show info" id="stockM" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
                  </div>
                  <input type="text" id="M" name="M" class="form-control" placeholder="Stock M">
                </div>
                <span id="errorM"></span>
              </div>
            </div>
            {{-- L --}}
            <div class="tab-pane fade show info" id="stockL" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
                  </div>
                  <input type="text" id="L" name="L" class="form-control" placeholder="Stock L">
                </div>
                <span id="errorL"></span>
              </div>
            </div>
            {{-- XL --}}
            <div class="tab-pane fade show info" id="stockXL" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
                  </div>
                  <input type="text" id="XL" name="XL" class="form-control" placeholder="Stock XL">
                </div>
                <span id="errorXL"></span>
              </div>
            </div>
            {{-- XXL --}}
            <div class="tab-pane fade show info" id="stockXXL" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="list-group-item"><i class="fa fa-edit prefix grey-text fa-1g" aria-hidden="true"></i></span>
                  </div>
                  <input type="text" id="XXL" name="XXL" class="form-control" placeholder="Stock XXL">
                </div>
                <span id="errorXXL"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <input type="submit" name="sendProduct" value="Create" class="btn btn-default waves-effect waves-light">
    </form>
  @endif
</div>

@stop

@section("js")
<script type="text/javascript" src="{{ url('js/admin/productManagement.js') }}"></script>
@stop
