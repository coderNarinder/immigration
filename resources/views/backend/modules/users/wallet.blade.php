@extends('backend.layouts.layoutNew')
@section('stylesheets') 
@endsection
@section('content')
        <div class="m-c-heading">
            <h2>Wallet Transactions</h2>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$user->name}}</li>
              </ol>
            </nav>
            
          </div>

          <div class="wrapper-shadow-inset">

          <div class="col-4">
               <h6>Balance : <strong>{{'RS.'.number_format($user->balance(),2)}}</strong></h6> 
           </div>
             <div class="table-wrapper">
               <!-- /.card-header --> 
              <table class="dTable table-user-listing" id="example2" data-action="<?= route('admin.user.ajax') ?>">
             
                     <tr>
                        <th>Tranx ID</th>
                        <th>Amount</th>
                        <th>Credit / Debit</th>
                        <th>Method</th>
                         
                     </tr>
                     @foreach($transactions as $p)
                         <tr>
                            <td>{{$p->r_payment_id}}
                                <h6 class="text-primary">{{$p->created_at}}</h6>
                            </td>
                            <td>Rs.{{$p->amount}}</td>
                            <td>{{$p->type}}</td>
                            <td>{{$p->method}}</td>
                         </tr>
                     @endforeach
                 </table>
                 {{$transactions->links()}}
            </div>
     </div>
        
 
@endsection      
@section('scripts') 
@endsection

 