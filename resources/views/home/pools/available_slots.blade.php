<div class="col-12">
    <form id="joinPoll" data-action="{{route('home.poll.pollSlots',$id)}}">
        @csrf
        <h4>Draw Slots:</h4>
        <ul class="gameUl row"> 
                @foreach($available_slots as $key => $slot)   
                    <li class="col-6">
                        <input type="radio" name="slot" <?=$key == 0 ? 'checked' :''?> value="{{$slot->id}}" id="chooseSlot{{$slot->id}}">
                        <label for="chooseSlot{{$slot->id}}"><b>{{$slot->from_time}}</b> To {{$slot->to_time}}</label>
                    </li> 
                @endforeach  
        </ul>

        <div class="col-lg-12 box-bg">
					<div class="game-heading">Lucky Lotto PICK 3</div>
					<p class="game-p">PICK 3 NUMBERS (one from each column) or select QUICK PLAY</p> 
                    <div class="game-p">
                        You Picked : 
                        <p id="selectedNumbers"></p> <input type="hidden" name="picked_number" id="picked_number" value="" required/>
                    </div>

                    <!-- <div id="numbers">
                        <button class="number" type="button">1</button>
                        <button class="number" type="button">2</button>
                        <button class="number" type="button">3</button>
                        <button class="number" type="button">4</button>
                        <button class="number" type="button">5</button>
                        <button class="number" type="button">6</button>
                        <button class="number" type="button">7</button>
                        <button class="number" type="button">8</button>
                        <button class="number" type="button">9</button>
                    </div> -->

                    <div id="numbers" >
                        <div class="column">
                            <button class="number" type="button">0</button>
                            <button class="number" type="button">1</button>
                            <button class="number" type="button">2</button>
                            <button class="number" type="button">3</button>
                            <button class="number" type="button">4</button>
                            <button class="number" type="button">5</button>
                            <button class="number" type="button">6</button>
                        </div>
                        <div class="column">
                        <button class="number " type="button">0</button>
                            <button class="number" type="button">1</button>
                            <button class="number" type="button">2</button>
                            <button class="number" type="button">3</button>
                            <button class="number" type="button">4</button>
                            <button class="number" type="button">5</button>
                            <button class="number" type="button">6</button>
                        </div>
                        <div class="column">
                            <button class="number" type="button">0</button>
                            <button class="number" type="button">1</button>
                            <button class="number" type="button">2</button>
                            <button class="number" type="button">3</button>
                            <button class="number" type="button">4</button>
                            <button class="number" type="button">5</button>
                            <button class="number" type="button">6</button>
                        </div>
                    </div>
					  <!-- <ul class="list-inline justify-content-center" id="numbers" style="width:276px;">
						<li> <button class="number" type="button">0</button> </li>
						<li> <button class="number" type="button">0</button> </li>
						<li> <button class="number" type="button">0</button> </li>
						<li> <button class="number" type="button">1</button> </li>
						<li> <button class="number" type="button">1</button> </li>
						<li> <button class="number" type="button">1</button> </li>
						<li> <button class="number" type="button">2</button> </li>
						<li> <button class="number" type="button">2</button> </li>
						<li> <button class="number" type="button">2</button> </li>
						<li> <button class="number" type="button">3</button> </li>
						<li> <button class="number" type="button">3</button> </li>
						<li> <button class="number" type="button">3</button> </li>
						<li> <button class="number" type="button">4</button> </li>
						<li> <button class="number" type="button">4</button> </li>
						<li> <button class="number" type="button">4</button> </li>
						<li> <button class="number" type="button">5</button> </li>
						<li> <button class="number" type="button">5</button> </li>
						<li> <button class="number" type="button">5</button> </li>
						<li> <button class="number" type="button">6</button> </li>
						<li> <button class="number" type="button">6</button> </li>
						<li> <button class="number" type="button">6</button> </li> 
					</ul>   -->
                   
                    <div class="text-center">
                        <!-- <a href="#" class="slider btn2 btn-primary">QUICK PLAY</a>
                    <a href="#" class="slider btn2 btn-primary">LOCK IN</a> -->
                    <button type="submit" class="btn btn-primary" >PLAY</button>
                   </div>

				</div>


       
    </form> 
</div>