@extends("layouts.noadmin.layout")

@section("styles")
<link rel="stylesheet" type="text/css" href="{{ url('css/admin/userManagement.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/profile.css') }}">
@stop

@section("title")
User management
@stop

@section("content")
<h1>USER LIST</h1>
<div class="datos" id="tableUsers">
    <table>
        <tr>
            <th>#</th>
            <th>Nickname</th>
            <th>Name</th>
            <th>Surnames</th>
            <th>Email</th>
            <th>Shipping address</th>
            <th>Billing address</th>
        </tr>
        @php
        $contador=1;
        @endphp
        @foreach($users as $user)
        <tr>
            <td>
                {{$contador}}
            </td>
            <td>{{$user->nick}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->lastName}}</td>
            <td>{{$user->email}}</td>
            <td><a href="#viewShippingAddress{{$contador}}" id="viewShippingAddress{{$contador}}" onclick="showShippingAddress({{$contador}})">View</a>
                <div class="addresses" id="shippingAddress{{$contador}}">
                    @foreach($addresses as $address)
                    @if($address->userId==$user->id && $address->typeAddress=='shipping')
                    - Road type: {{$address->roadType}}<br>
                    - Road name: {{$address->roadName}}<br>
                    - City: {{$address->City}}<br>
                    - Province: {{$address->province}}<br>
                    - Zip code: {{$address->zipCode}}<br>
                    - Country: {{$address->country}}<br>
                    @endif
                    @endforeach
                    <div class="text-center">
                        <a href="#viewShippingAddress{{$contador}}" id="hideShippingAddress{{$contador}}" class="hideAddress" onclick="hideShippingAddress({{$contador}})">Hide</a>
                    </div>
                </div>
            </td>
            <td><a href="#viewBillingAddress{{$contador}}" id="viewBillingAddress{{$contador}}" onclick="showBillingAddress({{$contador}})">View</a>
                <div class="addresses" id="billingAddress{{$contador}}">
                    @foreach($addresses as $address)
                    @if($address->userId==$user->id && $address->typeAddress=='billing')
                    - Road type: {{$address->roadType}}<br>
                    - Road name: {{$address->roadName}}<br>
                    - City: {{$address->City}}<br>
                    - Province: {{$address->province}}<br>
                    - Zip code: {{$address->zipCode}}<br>
                    - Country: {{$address->country}}<br>
                    @endif
                    @endforeach
                    <div class="text-center">
                        <a href="#viewBillingAddress{{$contador}}" id="hideBillingAddress{{$contador}}" class="hideAddress" onclick="hideBillingAddress({{$contador}})">Hide</a>
                    </div>
                </div>
            </td>
        </tr>
        @php
        $contador++;
        @endphp
        @endforeach

    </table>
</div>
@include("inc/admin/optionsFormUser")
@include("inc/admin/modal/confirmDeleteUser")
@stop

@section("js")
<script type="text/javascript" src="{{ url('js/admin/userManagement.js') }}"></script>
<script src="{{ url('js/profile.js') }}"></script>
@stop