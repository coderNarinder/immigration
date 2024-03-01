<div  wire:poll.1000ms="startTimer" class="row">

	<div class="col-12">
		<h5>Upcomming Draw</h5> 
		 
	</div>
	<div class="col-12">
         
			<h4>Draw Slots:</h4>
			<ul class="gameUl row">
		            	<li class="col-12">
							 <a href="#" class="row">
							    <div class="col-6">
								  Slots
								</div>
								<div class="col-6">
								 Status
								</div> 
							</a>
						</li> 
				@if(!empty($pool->slots))
				  @php $listSlot = 0; @endphp
					@foreach($pool->slots as $slot) 
					   @if($slot->id >= $cSlot && $listSlot < 2)  
							<li data-item="{{$listSlot++}}" class="col-12 {{$slot->id < $cSlot ? 'disabled' : ''}} {{$slot->id == $cSlot ? 'active' : ''}}">
								<a href="#" class="row">
									<div class="col-6">
									  <b>{{$slot->from_time}}</b> To {{$slot->to_time}}
									</div>
									<div class="col-6">
									@if($slot->id == $cSlot)
									<ol class="numbers"><?= $timmer ?></ol>
									@endif
									@if($slot->id > $cSlot)
									<span class="text-success">Upcomming</span>
									@endif
									</div> 
								</a>
							</li> 
						@endif
					@endforeach 
				@endif
			</ul>
	 
    </div>
</div>