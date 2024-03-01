<div class="col-md-12">
    <span class="section-title-border"></span>
        <p class="subtitle">Get In Touch</p>
       <h3 class="section-title">Contact Us</h3>
     <form wire:submit.prevent="sendMessage" class="row">
        <div class="col-12">
          @if (session()->has('message'))
              <div class="alert alert-success">
                  {{ session('message') }}
              </div>
          @endif
          @if (session()->has('error'))
              <div class="alert alert-warning">
                  {{ session('error') }}
              </div>
          @endif
        </div> 
          <div class="col-md-6">
            <input type="text" wire:model="name" id="name" class="form-control  mb-2 mt-3 py-3 px-4 @error('name') b-error @enderror" placeholder="Name">
              @error('name') <span class="error text-danger">{{ $message.'*' }}</span> @enderror
          </div>
          <div class="col-md-6">
            <input type="email" wire:model="email" id="mail" class="form-control  mb-2 mt-3 py-3 px-4 @error('email') b-error @enderror" placeholder="Email">
             @error('email') <span class="error text-danger">{{ $message.'*' }}</span> @enderror
          </div>
          <div class="col-md-6">
            <input type="text" wire:model="phone_number" id="phone" class="form-control  mb-2 mt-3 py-3 px-4 @error('phone_number') b-error @enderror" placeholder="Phone">
             @error('phone_number') <span class="error text-danger">{{ $message.'*' }}</span> @enderror
          </div>
          <div class="col-md-6">
            <input type="text" wire:model="subject" id="subject" class="form-control  mb-2 mt-3 py-3 px-4 @error('subject') b-error @enderror" placeholder="Subject">
             @error('subject') <span class="error text-danger">{{ $message.'*' }}</span> @enderror
          </div>
          <div class="col-12">
            <textarea wire:model="message" id="message" class="form-control mb-2 mt-3 py-3 px-4 @error('message') b-error @enderror" placeholder="Your Message"></textarea>
             @error('message') <span class="error text-danger">{{ $message.'*' }}</span> @enderror
          </div>
             
            <div class="col-12">     
                  <button type="submit" class="btn btn-primary mt-3 hover-ripple"
                              wire:loading.attr="disabled"
                              wire:target="sendMessage">
                        <span wire:loading.remove wire:target="sendMessage">
                            Submit
                        </span>
                        <span wire:loading wire:target="sendMessage">
                            Processing...
                        </span>
                  </button>
              </div>  
             
     </form>
 
</div>
