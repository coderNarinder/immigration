@extends('home.users.layout')
@section('userContent')

<h3 class="widget-header">My Wallet</h3>
                        <center>
                            <form action="{{ route('home.make.payment') }}" method="POST" >
                                @csrf 
                                <script src="https://checkout.razorpay.com/v1/checkout.js"
                                        data-key="{{ env('RAZORPAY_API_KEY') }}"
                                        data-amount="100000"
                                        data-buttontext="Pay 1000 INR"
                                        data-name="Laravelia"
                                        data-description="A demo razorpay payment"
                                        data-image="https://www.laravelia.com/storage/logo.png"
                                        data-prefill.name="Mahedi Hasan"
                                        data-prefill.email="mahedy150101@gmail.com"
                                        data-theme.color="#ff7529">
                                </script>
                            </form>
                        </center>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th scope="col">Tranaction ID</th>
									<th scope="col">Amount</th>
									<th scope="col">Credit / Debit</th>
									<th scope="col">Method</th>
								</tr>
							</thead>
							<tbody>
                            @foreach($payments as $p)
                         <tr>
                            <td>{{$p->r_payment_id}}</td>
                            <td>{{$p->amount}}</td>
                            <td>{{$p->type}}</td>
                            <td>{{$p->method}}</td>
                         </tr>
                     @endforeach
                  
               
							</tbody>
						</table>
                        {{$payments->links()}} 
 
@endsection