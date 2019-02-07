@extends("layouts.noadmin.layout")

@section("styles")
<link rel="stylesheet" type="text/css" href="{{ url('css/admin/userManagement.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/profile.css') }}">
@stop

@section("title")
User management
@stop

@section("content")
<div class="menuManagement" id="menuUserManagement">
    <ul>
        <li><a href="#newUser" onclick="showFormUser()">New user</a></li>
    </ul>
</div>
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
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <tr>
            <td>#</td>
            <td>vegetta</td>
            <td>adolf</td>
            <td>stalin musolini</td>
            <td>prueba@gmail.com</td>
            <td><a href="#viewShippingAddress" id="viewShippingAddress" onclick="showShippingAddress()">View</a>
            	<div class="addresses" id="shippingAddress">
            		- Road type: <br>
            		- Road name: <br>
            		- City: <br>
            		- Province: <br>
            		- Zip code: <br>
            		- Country: <br>
            		<div class="text-center">
            			<a href="#viewShippingAddress" id="hideShippingAddress" class="hideAddress" onclick="hideShippingAddress()">Hide</a>
        			</div>
            	</div>
            </td>
            <td><a href="#viewBillingAddress" id="viewBillingAddress" onclick="showBillingAddress()">View</a>
            	<div class="addresses" id="billingAddress">
            		- Road type: <br>
            		- Road name: <br>
            		- City: <br>
            		- Province: <br>
            		- Zip code: <br>
            		- Country: <br>
            		<div class="text-center">
            			<a href="#viewBillingAddress" id="hideBillingAddress" class="hideAddress" onclick="hideBillingAddress()">Hide</a>
            		</div>
            	</div>
            </td>
            <td><a href="#editUser" onclick="showFormUser()"><i class="far fa-edit"></i></a></td>
            <td><a href="#deleteUser" data-toggle="modal"><i class="far fa-trash-alt"></i></a></td>
        </tr>
    </table>
</div>
@include("inc/admin/optionsFormUser")
@include("inc/admin/modal/confirmDeleteUser")
@stop

@section("js")
<script type="text/javascript" src="{{ url('js/admin/userManagement.js') }}"></script>
<script src="{{ url('js/profile.js') }}"></script>
@stop