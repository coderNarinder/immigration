<?php require 'header.php'; ?>
   


 <div class="row px-4 pt-3 profile dash mb-4" style="padding-top: 60px;"><h2 class=" mb-2">Dashboard</h2></div>
       <div class="row px-4 pt-2">
           <div class="col-lg-4 col-12 mb-3">
               <div class="shadow p-4 ht">
                   <div class="row">
                       <div class="col-lg-9 col-8"><small>MY APPOINTMENTS</small></div>
                       <div class="col-lg-3 col-4">
                           <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                   data-bs-target="#exampleModal">+ ADD
                           </button>
                       </div>
                   </div>
                   <div class="row">
                       <p class="p-5 text-center">All Clear! No appointments.</p>


                   </div>
               </div>
           </div>
           <div class="col-lg-4 col-12 mb-3">
               <div class="shadow p-4 ht">
                   <div class="row">
                       <div class="col-lg-9 col-8"><small>MY TASKS FOR TODAY</small></div>
                       <div class="col-lg-3 col-4">
                           <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                   data-bs-target="#exampleModal1">+ ADD
                           </button>
                       </div>
                   </div>
                   <div class="row">
                       <p class="p-5 text-center">No tasks at the moment.</p>
                   </div>
               </div>
           </div>
           <div class="col-lg-4 col-12">
               <div class="shadow p-4 ht">
                   <small class="">APPLICATION REMINDERS</small>
                   <div class="row br mt-3">
                       <div class="col-3">
<span class="reminder"><h6>18</h6>
<small>Thu</small></span></div>
                       <div class="col-8 add_span">
                           <h6 class="pt-3">Diego Demo Roberto</h6>
                           <p><span class="text">End</span> - Bachelors in Informa...</p>
                           <small style="font-weight:normal">Jan 2024</small></div>

                   </div>
               </div>
           </div>
       </div>

   <div class="row pt-4 px-4 profile">
        <div class="col-lg-4 ">
            <div class="lead p-3">
                <h4>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-clipboard-data" viewBox="0 0 16 16">
                        <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0z"/>
                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z"/>
                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z"/>
                    </svg>
                    Total Enquiries
                </h4>
                <hr/>
                <div class="d-flex justify-content-between">
                    <div class="d-flex"><span class="rect">3</span><h5>Current Month</h5></div>
                    <h6>Total 3</h6></div>
            </div>
        </div>

        <div class="col-lg-4 mb-2">
            <div class="lead p-3">
                <h4>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-clipboard2-check" viewBox="0 0 16 16">
                        <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5z"/>
                        <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5z"/>
                        <path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3Z"/>
                    </svg>
                    Registered Enquiries
                </h4>
                <hr/>
                <div class="d-flex justify-content-between">
                    <div class="d-flex"><span class="rect1">2</span><h5>Current Month</h5></div>
                    <h6>Total 2</h6></div>
            </div>
        </div>
        <div class="col-lg-4 mb-2">
            <div class="lead p-3">
                <h4>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-clipboard-minus" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M5.5 9.5A.5.5 0 0 1 6 9h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5"/>
                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z"/>
                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z"/>
                    </svg>
                    Open Enquiries
                </h4>
                <hr/>
                <div class="d-flex justify-content-between">
                    <div class="d-flex"><span class="rect2">0</span><h5>Current Month</h5></div>
                    <h6>Total 0</h6></div>
            </div>
        </div>

    </div>
    <div class="row pt-4 px-4 profile">
        <div class="col-lg-4 mb-2">
            <div class="lead p-3">
                <h4>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-clipboard-data" viewBox="0 0 16 16">
                        <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0z"/>
                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z"/>
                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z"/>
                    </svg>
                    Total Leads
                </h4>
                <hr/>
                <div class="d-flex justify-content-between">
                    <div class="d-flex"><span class="rect3">3</span><h5>Current Month</h5></div>
                    <h6>Total 3</h6></div>
            </div>
        </div>

        <div class="col-lg-4 mb-2">
            <div class="lead p-3">
                <h4>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-clipboard2-check" viewBox="0 0 16 16">
                        <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5z"/>
                        <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5z"/>
                        <path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3Z"/>
                    </svg>
                    Registered Leads
                </h4>
                <hr/>
                <div class="d-flex justify-content-between">
                    <div class="d-flex"><span class="rect4">2</span><h5>Current Month</h5></div>
                    <h6>Total 2</h6></div>
            </div>
        </div>
        <div class="col-lg-4 mb-2">
            <div class="lead p-3">
                <h4>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-clipboard-minus" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M5.5 9.5A.5.5 0 0 1 6 9h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5"/>
                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z"/>
                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z"/>
                    </svg>
                    Open Leads
                </h4>
                <hr/>
                <div class="d-flex justify-content-between">
                    <div class="d-flex"><span class="rect5">0</span><h5>Current Month</h5></div>
                    <h6>Total 0</h6></div>
            </div>
        </div>

    </div>

    <div class="row pt-4 px-4 profile">
        <div class="col-lg-4 mb-4">
            <div class="lead p-3">
                <h4>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-clipboard-data" viewBox="0 0 16 16">
                        <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0z"/>
                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z"/>
                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z"/>
                    </svg>
                    Total Applications
                </h4>
                <hr/>
                <div class="d-flex justify-content-between">
                    <div class="d-flex"><span class="rect6">3</span><h5>Current Month</h5></div>
                    <h6>Total 3</h6></div>
            </div>
        </div>

        <div class="col-lg-4 mb-4">
            <div class="lead p-3">
                <h4>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-clipboard2-check" viewBox="0 0 16 16">
                        <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5z"/>
                        <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5z"/>
                        <path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3Z"/>
                    </svg>
                    Active Applications
                </h4>
                <hr/>
                <div class="d-flex justify-content-between">
                    <div class="d-flex"><span class="rect7">2</span><h5>Current Month</h5></div>
                    <h6>Total 2</h6></div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="lead p-3">
                <h4>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-clipboard-minus" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M5.5 9.5A.5.5 0 0 1 6 9h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5"/>
                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z"/>
                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z"/>
                    </svg>
                    Closed Applications
                </h4>
                <hr/>
                <div class="d-flex justify-content-between">
                    <div class="d-flex"><span class="rect8">0</span><h5>Current Month</h5></div>
                    <h6>Total 0</h6></div>
            </div>
        </div>

    </div>


    <div class=" px-4 row my-2 ">
        <div class="col-md-6 py-1">
            <div class="card">
                <div class="card-body">
                    <canvas id="chLine"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6 py-1 mb-3">
            <div class="card">
                <div class="card-body">
                    <canvas id="chBar"></canvas>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Appointment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6 add_span"><strong>Related to:</strong>
                            <p class="pb-3"><input type="radio"/> <span class="add_span">Client</span> <span
                                        class="add_span"><input type="radio"/> Parnter</span></p>
                        </div>
                        <div class="col-6 add_span"><strong>Added by:</strong>
                            <p class="pb-3"><span class="add_span">Aman</span></p>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">

                            <select class="form-control">
                                <option>Client Name</option>
                            </select>

                        </div>

                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <select class="form-select">
                                <option>Enter Timezone</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-7">

                            <input type="date" class="form-control" placeholder="Date of Birth"/>
                        </div>
                        <div class="col-5">
                            <select class="form-select">
                                <option>Time</option>
                            </select>


                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-12">
                            <input type="text" placeholder="Title" class="form-control"/>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-12">
                            <textarea rows="4" class="form-control" placeholder="Description"></textarea>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-12">
                            <select class="form-select">
                                <option>Invitees Name</option>
                            </select>


                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Save</button>
                    <button type="button" class="btn btn-primary">Cancel</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Create New Task</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-4">
                        <div class="col-12"><input type="text" class="form-control" placeholder="Title"/></div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <select class="form-select">
                                <option>Choose Category</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                       <div class="col-12">
                            <select class="form-select">
                                <option>Assignee</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <select class="form-select">
                                <option>Choose Priority</option>
                            </select>
                        </div>
                    </div>


                    <div class="row">
                    <div class="col-6 add_span"><strong>Related to:</strong>
                    <p class="pt-2"><input type="radio"/> <span class="add_span">Client</span> <span class="add_span"><input type="radio"/> Parnter</span></p>
                    </div><div class="col-6 add_span"><strong>Added by:</strong>
                    <p class="pt-2"><span class="add_span">Aman</span></p>
                    </div>
                    </div>


                    <div class="row mb-4">
                        <div class="col-7">

                            <input type="date" class="form-control" placeholder="Due Date"/>
                        </div>
                        <div class="col-5">
                            <select class="form-select">
                                <option>Due Time</option>
                            </select>


                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <textarea rows="4" class="form-control" placeholder="Description"></textarea>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-12 add_span">
                            <p><strong>Related To</strong></p>

                            <input type="radio"/> <span class="me-2">Contact</span> <input type="radio"/> <span
                                    class="me-2">Partner</span> <input type="radio"/> <span
                                    class="me-2">Application</span> <input type="radio"/> <span
                                    class="me-2">Internal</span>
                        </div>
                    </div>


                    <div class="row mb-4">
                        <div class="col-12">
                            <select class="form-select">
                                <option>Choose Followers</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 add_span">Attachments: <span class="text"> <a href="">+ Add files</a></span>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Create</button>
                </div>
            </div>
        </div>
    </div>
<!---->
<?php require 'footer.php'; ?>