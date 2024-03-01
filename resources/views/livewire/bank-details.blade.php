<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="widget personal-info">
								<h4 class="widget-header user">Add Bank Details</h4>
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


                             

                               

                                @if($type == 1)

								<form wire:submit.prevent="sendMessage">
									<div class="form-group">
										<label for="account_holder_name">Account Holder Name</label> 
                                        <input type="text" 
                                            wire:model="account_holder_name" 
                                            id="account_holder_name" 
                                            class="form-control @error('account_holder_name') b-error @enderror">
                                            @error('account_holder_name') <span class="error text-danger">{{ $message.'*' }}</span> @enderror
                                    </div>  
                                    <div class="form-group">
										<label for="bank_name">Bank Name</label> 
                                        <input type="text" 
                                            wire:model="bank_name" 
                                            id="bank_name" 
                                            class="form-control @error('bank_name') b-error @enderror">
                                            @error('bank_name') <span class="error text-danger">{{ $message.'*' }}</span> @enderror
                                    </div>  
									<div class="form-group">
										<label for="account_number">Account Number</label> 
                                        <input type="text" 
                                            wire:model="account_number" 
                                            id="account_number" 
                                            class="form-control @error('account_number') b-error @enderror">
                                            @error('account_number') <span class="error text-danger">{{ $message.'*' }}</span> @enderror
                                    </div>
									<div class="form-group">
										<label for="confirm_account">Re-enter Account Number</label>
                                        <input type="text" 
                                            wire:model="confirm_account_number" 
                                            id="confirm_account_number" 
                                            class="form-control @error('confirm_account_number') b-error @enderror">
                                            @error('confirm_account_number') <span class="error text-danger">{{ $message.'*' }}</span> @enderror
                                    </div>
									
									<div class="form-group">
										<label for="branch">Branch</label>
                                        <input type="text" 
                                            wire:model="branch_name" 
                                            id="branch_name" 
                                            class="form-control @error('branch_name') b-error @enderror">
                                            @error('branch_name') <span class="error text-danger">{{ $message.'*' }}</span> @enderror
                                    </div>
								    <div class="form-group">
										<label for="ifsc">IFSC Code</label>
                                        <input type="text" 
                                            wire:model="ifsc" 
                                            id="ifsc" 
                                            class="form-control @error('ifsc') b-error @enderror">
                                            @error('ifsc') <span class="error text-danger">{{ $message.'*' }}</span> @enderror
                                    </div> 

                                    <button type="submit" class="btn btn-primary"
                                            wire:loading.attr="disabled"
                                            wire:target="sendMessage">
                                        <span wire:loading.remove wire:target="sendMessage">
                                           Save Bank Details
                                        </span>
                                        <span wire:loading wire:target="sendMessage">
                                            Processing...
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-success" wire:click="changeMode">Cancel</button>
								</form>
                                @else
                                <div class="card">
                                      <button wire:click="changeMode">Edit</button>
                                      <table>
                                          <tr>
                                              <th>Holder Name</th><td>{{auth()->user()->account_holder_name}}</td>
                                          </tr>
                                          <tr>
                                              <th>Bank Name</th><td>{{auth()->user()->bank_name}}</td>
                                          </tr>
                                          <tr>
                                              <th>Branch Name</th><td>{{auth()->user()->branch_name}}</td>
                                          </tr>
                                          <tr>
                                              <th>IFSC</th><td>{{auth()->user()->ifsc}}</td>
                                          </tr>
                                          <tr>
                                              <th>Account number</th><td>{{auth()->user()->account_number}}</td>
                                          </tr>
                                      </table>
                                 </div>

                                @endif
							</div>
						</div>
					</div>
