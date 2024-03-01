@extends('home.users.layout')
@section('styles')

<style>
.gameUl {

}
.gameUl li.active {
    position: relative;
	isolation: isolate;
	-moz-box-orient: horizontal;
}
.gameUl li.active:before{
	height:100%;
	transition: height 0.9s linear;
}
.gameUl li:before {
	content: '';
    position: absolute;
    background: red;
    bottom: 0; 
	width:100%;
    left: 0;
    height:0; 
    color: #fff !important;
    z-index: -1;
}
.gameUl li.active a {
	position: relative; 
    color: #fff !important; 
    width: 100%;
    height: 100%;
    display: flex;
}
li.disabled a {
    opacity: 0.7;
    click-event: unset;
    cursor: not-allowed;
}

.numbers {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-bottom: 30px;
}
.numbers li {
    padding: 10px 10px;
    width: calc(14.2857142857% - 10px);
    background-image: -moz-linear-gradient(86deg, rgb(236, 3, 139) 0%, rgb(251, 100, 104) 44%, rgb(251, 185, 54) 100%);
    background-image: -webkit-linear-gradient(86deg, rgb(236, 3, 139) 0%, rgb(251, 100, 104) 44%, rgb(251, 185, 54) 100%);
    background-image: -ms-linear-gradient(86deg, rgb(236, 3, 139) 0%, rgb(251, 100, 104) 44%, rgb(251, 185, 54) 100%);
    box-shadow: 0px 17px 40px 0px rgba(243, 42, 126, 0.35);
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
    font-size: 38px;
    color: #ffffff;
    line-height: 1;
}

.widget ul li {
    line-height: 35px;
    border-bottom: 1px dashed #dee2e6;
    display: inline;
}

div#numbers {
    width: 180px;
    display: flex;
	margin: auto;
    margin-bottom: 20px;
}

div#numbers .column button {
    width: 50px;
    height: 50px;
    border-radius: 100%;
    background: #ddd;
    border: 1px solid #ddd;
    margin: 5px;
    font-weight: 700;
}

div#numbers .column button.selected {
    background: #007bff;
    color: #fff;
}
#selectedNumbers span{
	display: inline-block;
    background: #007bff;
    height: 30px;
    width: 30px;
    border-radius: 100%;
    line-height: 30px;
    color: #fff;
}
</style>

@livewireStyles @endsection
@section('userContent')
<?php $pending = $pool->no_participate - $pool->members_count; ?>
                        <h3 class="widget-header">Pool Information:</h3>
						<div class="row">
							<div class="col-md-4 col-sm-6">
								<div><img src="/{{$pool->image}}" alt="" class="img-fluid"></div>
							</div>
							<div class="col-md-4 col-sm-6">
								<ul class="store-list">
									<li><b>Pool Type: </b>{{$pool->type?->name}}</a></li>
									<li><b>Pool Name: </b>{{$pool->name}}</a></li>	
                                    <li><b>Entry Fee</b>Rs.{{$pool->discounted_price}} <del>Rs.{{$pool->price}}</del></li>			
									<li><b>Pool Prize: </b>Rs.{{$pool->prize}}</a></li>
									<li><b>No. of Prizes: </b>{{$pool->prizes_count}}</a></li>
									<li><b>Total Slots: </b>{{$pool->slots_count}}</a></li>
									<li><b>Available Slots: </b>{{$available_slots->count()}}</a></li>
								</ul>

							 
									@if(auth()->user()->balance() > $pool->discounted_price ) 
										<div class="pt-10">
											<!-- <a href="{{route('home.poll.join',$pool->id)}}" class="btn btn-main-sm">JOIN</a> -->
											<button type="button" class="btn btn-main-sm" data-toggle="modal" data-target="#exampleModal">
											Choose Slot
											</button>
										</div>
									@else
										<h3>Insufficient funds</h3> 
									@endif 
							</div>
							<div class="col-md-4 col-sm-6">
								<ul class="store-list">
								   <h4>Top Pool Prizes:</h4>
										@foreach($pool->prizes as $k => $prize)  
											<li><b>#{{$k + 1}}: </b>Rs.{{$prize->prize}}</a></li>
										@endforeach 
                                </ul>
							</div>
							<div class="col-12">
							<livewire:countdown-timer :pool="$pool"/>
                            </div>
						</div>	

 
 <!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="loadSlot">

		</div>
      </div>
       
    </div>
  </div>
</div>
@endsection
@section('js')  '

@livewireScripts 
<script>
	$(document).ready(function(){
          function loadSlots(){
			 $.ajax({
				url:"{{route('home.poll.pollSlots',$pool->id)}}", 
				success:function(result){ 
				   $("#loadSlot").html(result.html);
				}
				 
             });
		  }

	 let selectedNumbers =[];
	 $("body").on('click','.numbersss',function(e){
		$form = $(this).closest('#joinPoll');
        var number = $(this).text();
        if($(this).hasClass("selected")) {
            $(this).removeClass("selected");
            selectedNumbers = selectedNumbers.filter(item => item !== number);
        } else {
            if(selectedNumbers.length < 3) {
                $(this).addClass("selected");
                selectedNumbers.push(number);
            } else {
                alert("You can only pick three numbers!");
            }
        }
		console.log(selectedNumbers);
		displaySelectedNumbers($form);
    });

	function displaySelectedNumbersss($form) {
        $("#selectedNumbers").empty();
		$number ='';
        for(var i = 0; i < selectedNumbers.length; i++) {
            $("body").find("#selectedNumbers").append("<span>" + selectedNumbers[i] + "</span>");
			$number +=`${selectedNumbers[i]}`;
        } 
		$form.find('#picked_number').val($number);
    }

	$("body").on('click', '.number', function(e) {
    var $column = $(this).closest('.column');
    var selectedNumbers = $column.data('selectedNumbers') || [];
    var number = $(this).text();
	$form = $(this).closest('#joinPoll');

    if ($(this).hasClass("selected")) {
        $(this).removeClass("selected");
        selectedNumbers = selectedNumbers.filter(item => item !== number);
    } else {
        // Deselect other numbers in the same column
        $column.find('.number.selected').removeClass('selected');
        $(this).addClass("selected");
        selectedNumbers = [number]; // Select only the current number
    }

    $column.data('selectedNumbers', selectedNumbers);
    console.log(selectedNumbers);
    // Display selected numbers
    displaySelectedNumbers($form);
});

function displaySelectedNumbers($form) {
    var selectedNumbers = [];
	$number ='';
	$("#selectedNumbers").empty();
    $('.column').each(function() {
        var $column = $(this);
        var selectedNumber = $column.data('selectedNumbers');
        if (selectedNumber) {
            selectedNumbers.push(selectedNumber[0]); // Push the selected number from each column
			$number +=selectedNumber[0];
			$("body").find("#selectedNumbers").append("<span>" + selectedNumber[0] + "</span>");
        }
    });
        // $("#selectedNumbers").text(selectedNumbers.join(', '));
	    $form.find('#picked_number').val($number);
}


		$("body").on('click','.pickingNumber',function(e){
			e.preventDefault();
			$form = $(this).closest('#joinPoll');
            $picked_number = $form.find('#picked_number').val();
			$chosenNumber = $("body").find('#chosenNumber');
			if($(this).hasClass('active')){
				$numberString = $picked_number.toString();
				var digitsArray = $numberString.toString().split('').map(Number); 
				$(this).removeClass('active');
				 $no ='';
                  $.each(digitsArray,function(n,v){
					if($(this).data('no') != v){
						$no +=`${v}`;
					}
					
				  });
				  $form.find('#picked_number').val($no);
				  $chosenNumber.text($no);
			}else{
				
				if($picked_number.length < 4){
					$(this).addClass('active');
				   $form.find('#picked_number').val($picked_number+''+$(this).data('no'));
			    }
			}
			

			// $form.find('#picked_number')
		});

		 $('#exampleModal').on('shown.bs.modal', function (e) {
			loadSlots();
		 });

		 $("body").on('submit','#joinPoll', function (e) {
			e.preventDefault();
			$this = $(this);
			$picked_number = $this.find('#picked_number').val();
			if($picked_number.length == 3){
			$loader = $('.loader');
			$.ajax({
				url:$this.data('action'), 
				method:"POST",
                data:$this.serialize(),
                dataType:'JSON',
				beforeSend: function() {
                    $loader.show();
				},
				success:function(result){  
					$loader.hide();
					alert(result.message);
                   if(result.status == 1){
					  window.location.reload();
				   } 
				} 
             });
			}else{
				alert('PICK 3 NUMBERS');
			}
		 }); 
	}); 
</script>
@endsection