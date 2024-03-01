<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="widget personal-info">
            <h4 class="widget-header user">Change password</h4>
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
            <form wire:submit.prevent="sendMessage">
                <div class="form-group">
                    <label for="old_password">Old Password</label> 
                    <input type="password" 
                    wire:model="old_password" 
                    id="old_password" 
                    class="form-control @error('old_password') b-error @enderror" placeholder="*******">
                    @error('old_password') <span class="error text-danger">{{ $message.'*' }}</span> @enderror
                </div> 
                <div class="form-group">
                    <label for="new_password">New Password</label>
                    <input type="password" 
                    wire:model="password" 
                    id="password" 
                    class="form-control @error('password') b-error @enderror" placeholder="*******">
                    @error('password') <span class="error text-danger">{{ $message.'*' }}</span> @enderror
                </div> 
                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>  
                    <input type="password" 
                    wire:model="confirm_password" 
                    id="confirm_password" 
                    class="form-control @error('confirm_password') b-error @enderror" placeholder="*******">
                    @error('confirm_password') <span class="error text-danger">{{ $message.'*' }}</span> @enderror
                </div>
              
               <button type="submit" class="btn btn-primary "
                              wire:loading.attr="disabled"
                              wire:target="sendMessage">
                        <span wire:loading.remove wire:target="sendMessage">
                        Change Password
                        </span>
                        <span wire:loading wire:target="sendMessage">
                            Processing...
                        </span>
                  </button>
            </form>
        </div>
    </div>
</div>