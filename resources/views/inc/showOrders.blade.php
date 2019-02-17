<div class="textHeader">
	<br> <br>
	<h1>Orders</h1>
</div>
	@foreach ($invoices as $invoice)
		<div class="col-md-3 probootstrap-animate" data-animate-effect="fadeIn">
				<div class="service hover_service text-center">
					<h3 class="titleProduct">{{$invoice->created_at}}</h3>
					{{--<h3 class="titleProduct">{{$date->year}}-{{$date->month}}-{{$date->day}}</h3>--}}
					<h5 class="titleProduct">{{$invoice->totalPrice}} €</h5>

					<div class="optionsED">
						<a href="{{ url('/MyOrders/'.$invoice->invoiceId) }}"><button type="button" class="btn btn-success">See details</button></a>
					</div>
				</div>
		</div>
	@endforeach