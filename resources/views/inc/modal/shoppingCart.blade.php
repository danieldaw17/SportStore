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
                        	<td><img src="{{ url('img/product.png') }}" alt="Product image" title="title product"></td> {{-- title sql title product --}}
                        	<td>L</td>
                        	<td>10,90€</td>
                        	<td>1</td>
                        	<td>10,90€</td>
                        </tr>
                    </table>
                </div>
			</div>				
			<div class="modal-footer text-center">
				<input type="submit" name="sendBuy" value="Confirm buy" class="btn btn-default waves-effect waves-light">
			</div>
		</div>
	</div>
</div>