@extends('components/main')

@section('content')

<body>
	@include('components.nav_sales')
	<div id="wrapper">
		<div id="content-wrapper">
			<div class="container-fluid">	
        			<div class="row">
            			<div class="col-md-12">
							<a href="/Billing" class="btn btn-danger btn-length float-right" role="button">Go Back</a>
							<a style="font-size:20px">Name:{{$billingposts->Name}}</a><br>
							<a style="font-size:20px">Address:{{$billingposts->Name}}</a><Br>
							<a style="font-size:20px">P.O Number: </a>
							<a class="parag1" style="font-size:20px">TIN No: </a>
							<a class="parag2" style="font-size:20px">Bus Style: </a><br>
							<a style="font-size:20px">OSCA/PWD ID No: </a>
							<a class="parag3" style="font-size:20px">OSCA/PWD Signature: </a><br>
							<a style="font-size:20px">Terms of Payment: </a>
							<a class="parag4" style="font-size:20px">D.R No: </a><br>
							<a style="font-size:20px">Total Bill:{{$billingposts->Bill}}</a>
							
							
					</div>	
                </div><br>
				<div class="card mb-3">
									<div class="card-body">
										<div class="row">
											<div class="col">
												<div class="table-responsive">
												<table class="table table-striped" id="itemlist" width="100%" cellspacing="0">
												<thead>
													<th width=15%>Quantity</th>
													<th width=15%>Unit</th>
													<th width=40%>Articles</th>
													<th width=15%>Unit Price</th>
													<th width=15%>Amount</th>
												</thead>
                                        		<tbody>
												
                                                        
                                                   
                                       			 </tbody>
												</table>	
											</div>
										</div>
									</div>
								</div>
							</div> 
			</div>
			@include('components.footer2')
		</div>
	</div>
</body>
@stop