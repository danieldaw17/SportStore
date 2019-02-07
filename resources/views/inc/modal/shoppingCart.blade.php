<div class="modal fade" id="shoppingCart">
	<div class="modal-dialog">
	    <div class="modal-content autoWidth">
			<div class="modal-header">
				<h3 class="text-center default-text py-3"><i class="fas fa-shopping-cart"></i> Shopping cart:</h3>
			</div>
			<div class="modal-body">
				{{-- tabla --}}
				<div class="datos">
                    <table>
                        <tr>
                            <th>#</th>
                            <th>Product</th>{{-- short description sql --}}
                            <th>Image</th>
                            <th>Size</th>
                            <th>Price</th>{{-- price unitary --}}
                            <th>Quantity</th>
                            <th>Total</th>{{-- quantity * price --}}
                        </tr>
                        <tr>
                        	<td>1</td>
                        	<td>Camiseta termica</td>
                        	<td><img src="{{ url('img/product.png') }}" alt="Product image" title="title product" class="imgCartModal"></td> {{-- title sql title product --}}
                        	<td>
                                <select>
                                    <option>XXL</option>
                                    <option>XL</option>
                                    <option>L</option>
                                    <option>M</option>
                                    <option>S</option>
                                    <option>XS</option>
                                </select>   
                            </td>
                        	<td>
                                <span id="unitPriceModal">10</span>
                            </td>
                        	<td>
                                <select id="quantityModal" onchange="totalModal()">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </td>
                        	<td>
                                <span id="totalModal">0€</span>
                            </td>
                        </tr>
                    </table>
                </div>
			</div>				
			<div class="modal-footer text-center">
				<a href="{{ url('user/{id}/mycart') }}"><input type="submit" name="sendBuy" value="Confirm buy" class="btn btn-default waves-effect waves-light"></a>
			</div>
		</div>
	</div>
</div>