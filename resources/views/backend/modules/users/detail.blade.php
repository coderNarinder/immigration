@extends('backend.layouts.layoutNew')
@section('content')

<style>
.box {
    padding: 20px 15px;
    display: block;
    background: var(--theme-color);
    text-align:center;
    color: #fff;
    margin-bottom: 30px;
}
</style>
<div class="m-c-heading">
  <h2>{{$user->name}}</h2>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li> 
      <li class="breadcrumb-item active" aria-current="page">Detail</li>
    </ol>
  </nav>
 
</div> 
<div class="wrapper-shadow-inset"> 

    <div class="row">
         <div class="col-4">
              <a href="{{route('admin.user.pools',$user->id)}}" class="box">
                  <p><strong>{{$user->pool_participations_count}}</strong></p>
                  <h6>Total Pool Participations</h6> 
              </a>
         </div>
         <div class="col-4">
              <a href="{{route('admin.user.pools',$user->id)}}" class="box">
                  <p><strong>{{$user->poolParticipations->sum('fee') }}</strong></p>
                  <h6>Total Spent Pool Participations</h6> 
              </a>
         </div>
         <div class="col-4">
              <a href="{{route('admin.user.referrals',$user->id)}}" class="box">
                  <p><strong>{{'RS.'.number_format($user->transactions->sum('amount'),2)}}</strong></p>
                  <h6>Referrals Bonus</h6> 
              </a>
         </div>
         <div class="col-4">
              <a href="{{route('admin.user.wallet',$user->id)}}"  class="box">
                  <p><strong>{{'RS.'.number_format($user->balance(),2)}}</strong></p>
                  <h6>Wallet Balance</h6> 
              </a>
         </div>
    </div>
</div> 
@endsection







@section('scripts')
<script type="text/javascript" src="{{url('/admin-vue/scripts/admin/croppie.js')}}"></script>
<script type="text/javascript" src="{{url('/admin-vue/scripts/admin/users.js')}}"></script>
 
@endsection

