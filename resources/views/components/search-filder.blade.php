  @if(!Route::is(['archived-jobs','applied-jobs','assets1','attendance-reports','attendance','daily-reports','employee-reports','estimates','expense-reports','expenses','interview-questions','invoice-reports','invoices','leave-reports','offered-jobs','payments-reports','project-view','salary','saved-jobs','shift-list','user-all-jobs','user-reports','users','visited-jobs','shift-scheduling']))
<!-- Search Filter -->
<div class="row filter-row">
    @if(!Route::is(['experience-level']))
    <div class="col-md-8">
    @endif
    @if(Route::is(['experience-level']))
    <div class="col-md-8 col-lg-9">
    @endif
     @if(Route::is(['clients-list','clients']))
        <div class="row">
            <div class="col-sm-6 col-md-3">  
                <div class="form-group form-focus mb-0">
                    <input type="text" class="form-control floating">
                    <label class="focus-label">Client ID</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">  
                <div class="form-group form-focus mb-0">
                    <input type="text" class="form-control floating">
                    <label class="focus-label">Client Name</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3"> 
                <div class="form-group form-focus select-focus mb-0">
                    <select class="select floating"> 
                        <option>Select Company</option>
                        <option>Global Technologies</option>
                        <option>Delta Infotech</option>
                    </select>
                    <label class="focus-label">Company</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">  
                <a href="#" class="btn btn-success btn-search"><i class="fas fa-search me-2"></i> Search </a>
            </div>
        </div>
        @endif
         @if(Route::is(['employees-list','employees','project-list','projects']))
          <div class="row">
            <div class="col-sm-6 col-md-3">  
                <div class="form-group form-focus mb-0">
                    <input type="text" class="form-control floating">
                    <label class="focus-label">{{ $li_1 }}</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">  
                <div class="form-group form-focus mb-0">
                    <input type="text" class="form-control floating">
                    <label class="focus-label">{{ $li_2 }}</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3"> 
                <div class="form-group form-focus select-focus mb-0">
                    <select class="select floating"> 
                        <option>Select Designation</option>
                        <option>Web Developer</option>
                        <option>Web Designer</option>
                        <option>Android Developer</option>
                        <option>Ios Developer</option>
                    </select>
                    <label class="focus-label">Designation</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">  
                <a href="#" class="btn btn-success btn-search"><i class="fas fa-search me-2"></i> Search </a>
            </div>
        </div>
        @endif
    </div>
    @if(!Route::is(['experience-level']))
    <div class="col-md-4">
    @endif
    @if(Route::is(['experience-level']))
    <div class="col-md-4 col-lg-3">
    @endif
        <div class="add-emp-section">
            @if(Route::is(['clients-list','employees-list','project-list']))
            <a href="{{url('clients')}}" class="grid-icon"><i class="fas fa-th"></i></a>
            <a href="{{url('clients-list')}}" class="list-icon active"><i class="fas fa-bars"></i></a>
            @endif
            @if(Route::is(['clients','employees','projects']))
            <a href="{{url('clients')}}" class="grid-icon active"><i class="fas fa-th"></i></a>
            <a href="{{url('clients-list')}}" class="list-icon"><i class="fas fa-bars"></i></a>
            @endif
            @if(!Route::is(['experience-level','performance-appraisal','performance-indicator','','policies','project-list','projects','provident-fund','Add Promotion','resignation','sub-category','subscriptions','taxes','termination','timesheet','trainers','training-type','training','budget-expenses','budget-revenues','budgets','calender','categories','candidates','departments','designations','employees-list','employees','goal-tracking','goal-type','holidays','jobs','promotion']))
            <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_client"><i class="fas fa-plus"></i> {{ $title }}</a>
            @endif
             @if(Route::is(['experience-level']))
            <a href="#" class="btn btn-success btn-add-emp w-100" data-bs-toggle="modal" data-bs-target="#add_employee"><i class="fas fa-plus"></i> {{ $title }}</a>
            @endif
            @if(Route::is(['candidates','employees-list','employees']))
            <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_employee"><i class="fas fa-plus"></i> {{ $title }}</a>
            @endif
            @if(Route::is(['calender']))
            <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_event"><i class="fas fa-plus"></i> {{ $title }}</a>
            @endif
            @if(Route::is(['departments']))
            <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_department" style="width: auto;"><i class="fas fa-plus"></i> {{ $title }}</a>
            @endif
            @if(Route::is(['designations']))
            <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_designation" style="width: auto;"><i class="fas fa-plus"></i> {{ $title }}</a>
            @endif
             @if(Route::is(['promotion']))
            <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_promotion"><i class="fas fa-plus"></i> {{ $title }}</a>
            @endif
            @if(Route::is(['goal-tracking']))
            <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_goal"><i class="fas fa-plus"></i> {{ $title }}</a>
            @endif
            @if(Route::is(['goal-type']))
            <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_type"><i class="fas fa-plus"></i> {{ $title }}</a>
            @endif
             @if(Route::is(['holidays']))
            <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_holiday"><i class="fas fa-plus"></i> {{ $title }}</a>
            @endif
            @if(Route::is(['performance-appraisal']))
             <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_appraisal"><i class="fas fa-plus"></i> {{ $title }}</a>
            @endif
            @if(Route::is(['performance-indicator']))
            <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_indicator"><i class="fas fa-plus"></i> {{ $title }}</a>
            @endif
            @if(Route::is(['policies']))
            <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_policy"><i class="fas fa-plus"></i> {{ $title }}</a>
            @endif
            @if(Route::is(['project-list','projects']))
            <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#create_project"><i class="fas fa-plus"></i> {{ $title }}</a>
            @endif
           
            @if(Route::is(['provident-fund']))
            <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_pf"><i class="fas fa-plus"></i> {{ $title }}</a>
            @endif
            @if(Route::is(['resignation']))
            <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_resignation"><i class="fas fa-plus"></i> {{ $title }}</a>
            @endif
            @if(Route::is(['budget-expenses','budget-revenues','budgets','sub-category','categories']))
            <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_categories"><i class="fas fa-plus"></i> {{ $title }}</a>
            @endif
            @if(Route::is(['subscriptions']))
            <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_plan"><i class="fas fa-plus"></i> {{ $title }}</a>
            @endif
            @if(Route::is(['taxes']))
            <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_tax"><i class="fas fa-plus"></i> {{ $title }}</a>
            @endif
             @if(Route::is(['jobs']))
            <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_job"><i class="fas fa-plus"></i> {{ $title }}</a>
            @endif
            @if(Route::is(['termination']))
            <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_termination"><i class="fas fa-plus"></i> {{ $title }}</a>
            @endif
            @if(Route::is(['timesheet']))
            <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_todaywork" style="width: auto;"><i class="fas fa-plus"></i> {{ $title }}</a>
            @endif
            @if(Route::is(['trainers']))
            <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_trainer"><i class="fas fa-plus"></i> {{ $title }}</a>
            @endif
            @if(Route::is(['training-type']))
            <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_type"><i class="fas fa-plus"></i> {{ $title }}</a>
            @endif
            @if(Route::is(['training']))
            <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_training"><i class="fas fa-plus"></i> {{ $title }}</a>
            @endif
        </div>
    </div>
</div>
<!-- /Search Filter -->
  @endif
  @if(Route::is(['archived-jobs','applied-jobs','assets1','attendance-reports','attendance','daily-reports','employee-reports','estimates','expense-reports','expenses','interview-questions','invoice-reports','invoices','leave-reports','offered-jobs','payments-reports','project-view','salary','saved-jobs','shift-list','user-all-jobs','user-reports','users','visited-jobs','shift-scheduling']))
    <!-- Search Filter -->
    <div class="row filter-row">
        @if(!Route::is(['assets1','attendance-reports','attendance','daily-reports','employee-reports','estimates','expense-reports','expenses','interview-questions','invoice-reports','invoices','leave-reports','payments-reports','project-view','salary','shift-list','user-reports','users','shift-scheduling']))
        <div class="col-sm-6 col-md-3">  
            <div class="form-group form-focus select-focus">
                <select class="select floating"> 
                    <option>Select</option>
                    <option>Development</option>
                    <option>Designing</option>
                    <option>Android</option>
                </select>
                <label class="focus-label">Department</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">  
            <div class="form-group form-focus select-focus">
                <select class="select floating"> 
                    <option>Select</option>
                    <option>Full Time</option>
                    <option>Part Time</option>
                    <option>Internship</option>
                </select>
                <label class="focus-label">Job Type</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3"> 
            <div class="form-group form-focus select-focus">
                <select class="select floating"> 
                    <option>Select Designation</option>
                    <option>Web Developer</option>
                    <option>Web Designer</option>
                    <option>Android Developer</option>
                    <option>Ios Developer</option>
                </select>
                <label class="focus-label">Designation</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">  
            <a href="#" class="btn btn-success btn-search"><i class="fas fa-search me-2"></i> Search </a>
        </div>
        @endif
         @if(Route::is(['assets1']))
            <div class="col-sm-6 col-md-3"> 
                <div class="form-group form-focus select-focus mb-0">
                    <select class="select floating"> 
                        <option value=""> -- Select -- </option>
                        <option value="0"> Pending </option>
                        <option value="1"> Approved </option>
                        <option value="2"> Returned </option>
                    </select>
                    <label class="focus-label">Status</label>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">  
               <div class="row">  
                   <div class="col-md-6 col-sm-6">  
                        <div class="form-group form-focus mb-0">
                            <div class="cal-icon">
                                <input class="form-control floating datetimepicker" type="text">
                            </div>
                            <label class="focus-label">From</label>
                        </div>
                    </div>
                   <div class="col-md-6 col-sm-6">  
                        <div class="form-group form-focus mb-0">
                            <div class="cal-icon">
                                <input class="form-control floating datetimepicker" type="text">
                            </div>
                            <label class="focus-label">To</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-2">  
                <a href="#" class="btn btn-success btn-search"><i class="fas fa-search me-2"></i> Search </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="add-emp-section">
                    <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_asset"><i class="fas fa-plus"></i> Add Asset</a>
                </div>
            </div>  
            @endif
            @if(Route::is(['attendance-reports','employee-reports','invoice-reports','leave-reports','expense-reports']))
             <div class="col-sm-6 col-md-3"> 
                <div class="form-group form-focus select-focus mb-0">
                    <select class="select floating">
                        @if(!Route::is(['expense-reports','invoice-reports'])) 
                        <option>Select Department</option>
                        <option>Designing</option>
                        <option>Development</option>
                        <option>Finance</option>
                        <option>Hr & Finance</option>
                        @endif
                        @if(Route::is(['expense-reports']))
                        <option>Select buyer</option>
                        <option>Loren Gatlin</option>
                        <option>Tarah Shropshire</option>
                        @endif
                        @if(Route::is(['invoice-reports']))
                        <option>Select Client</option>
                        <option>Global Technologies</option>
                        <option>Delta Infotech</option>
                        @endif
                    </select>
                    <label class="focus-label">{{ $li_1 }}</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">  
                <div class="form-group form-focus mb-0">
                    <div class="cal-icon">
                        <input class="form-control floating datetimepicker" type="text">
                    </div>
                    <label class="focus-label">From</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">  
                <div class="form-group form-focus mb-0">
                    <div class="cal-icon">
                        <input class="form-control floating datetimepicker" type="text">
                    </div>
                    <label class="focus-label">To</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">  
                <a href="#" class="btn btn-success btn-search"><i class="fas fa-search me-2"></i> Search </a>
            </div>     
            @endif
            @if(Route::is(['attendance']))
            <div class="col-sm-6 col-md-3">  
                <div class="form-group form-focus mb-0">
                    <input type="text" class="form-control floating">
                    <label class="focus-label">Employee Name</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3"> 
                <div class="form-group form-focus select-focus mb-0">
                    <select class="select floating"> 
                        <option>-</option>
                        <option>Jan</option>
                        <option>Feb</option>
                        <option>Mar</option>
                        <option>Apr</option>
                        <option>May</option>
                        <option>Jun</option>
                        <option>Jul</option>
                        <option>Aug</option>
                        <option>Sep</option>
                        <option>Oct</option>
                        <option>Nov</option>
                        <option>Dec</option>
                    </select>
                    <label class="focus-label">Select Month</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3"> 
                <div class="form-group form-focus select-focus mb-0">
                    <select class="select floating"> 
                        <option>-</option>
                        <option>2019</option>
                        <option>2018</option>
                        <option>2017</option>
                        <option>2016</option>
                        <option>2015</option>
                    </select>
                    <label class="focus-label">Select Year</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">  
                <a href="#" class="btn btn-success btn-search"> Search </a>  
            </div> 
            @endif 
            @if(Route::is(['daily-reports']))
            <div class="col-md-10"></div>
            <div class="col-md-2">
                <div class="add-emp-section">
                    <a href="#" class="btn btn-success btn-add-emp"> PDF</a>
                </div>
            </div>
            @endif 
             @if(Route::is(['estimates','invoices']))
            <div class="col-sm-6 col-md-3">  
                <div class="form-group form-focus focused">
                    <div class="cal-icon">
                        <input class="form-control floating datetimepicker" type="text">
                    </div>
                    <label class="focus-label">From</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">  
                <div class="form-group form-focus focused">
                    <div class="cal-icon">
                        <input class="form-control floating datetimepicker" type="text">
                    </div>
                    <label class="focus-label">To</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <a href="#" class="btn btn-success btn-search"><i class="fas fa-search me-2"></i> Search </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="add-emp-section">
                    <a href="{{url('add-estimate')}}" class="btn btn-success btn-add-emp"><i class="fas fa-plus"></i> {{ $li_1 }}</a>
                </div>
            </div> 
            @endif 
            @if(Route::is(['expenses','salary']))
            <div class="col-sm-6 col-md-2">
                <div class="form-group form-focus">
                    <input type="text" class="form-control floating">
                    <label class="focus-label">{{ $li_1 }}</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-2"> 
                <div class="form-group form-focus select-focus">
                    <select class="select floating"> 
                        <option> -- Select -- </option>
                        <option>{{ $li_2 }}</option>
                        <option>{{ $li_3 }}</option>
                    </select>
                    <label class="focus-label">{{ $li_4 }}</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-2">  
                <div class="form-group form-focus focused">
                    <div class="cal-icon">
                        <input class="form-control floating datetimepicker" type="text">
                    </div>
                    <label class="focus-label">From</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-2">  
                <div class="form-group form-focus focused">
                    <div class="cal-icon">
                        <input class="form-control floating datetimepicker" type="text">
                    </div>
                    <label class="focus-label">To</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-2">
                <a href="#" class="btn btn-success btn-search"><i class="fas fa-search me-2"></i> Search </a>
            </div>
            <div class="col-sm-6 col-md-2">
                 @if(!Route::is(['salary']))
                <a href="#" class="btn btn-success btn-add-emp w-100" data-bs-toggle="modal" data-bs-target="#add_expense">Add Expense</a>
                @endif
                 @if(Route::is(['salary']))
                 <a href="#" class="btn btn-success btn-add-emp w-100" data-bs-toggle="modal" data-bs-target="#add_salary">Add Salary</a>
                 @endif
            </div>
            @endif
            @if(Route::is(['interview-questions','project-view']))
                <div class="col-md-6"></div>
                <div class="col-md-6 text-end">
                    <div class="add-emp-section">
                        @if(!Route::is(['project-view']))
                        <a href="#" class="btn btn-success btn-add-emp me-3" data-bs-toggle="modal" data-bs-target="#add_question"><i class="fas fa-plus"></i> {{ $li_1 }}</a>
                        <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_category"><i class="fas fa-plus"></i> {{ $li_2 }}</a>
                        @endif
                        @if(Route::is(['project-view']))
                        <a href="task-board" class="btn btn-success btn-add-emp btn-view-task me-3"><i class="fas fa-tasks"></i> {{ $li_1 }}</a>
                        <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="fas fa-plus"></i> {{ $li_2 }}</a>
                        @endif
                    </div>
                </div>
            @endif
            @if(Route::is(['payments-reports']))
            <div class="col-sm-6 col-md-4">  
                <div class="form-group form-focus mb-0">
                    <div class="cal-icon">
                        <input class="form-control floating datetimepicker" type="text">
                    </div>
                    <label class="focus-label">From</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">  
                <div class="form-group form-focus mb-0">
                    <div class="cal-icon">
                        <input class="form-control floating datetimepicker" type="text">
                    </div>
                    <label class="focus-label">To</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">  
                <a href="#" class="btn btn-success btn-search"><i class="fas fa-search me-2"></i> Search </a>
            </div>
            @endif  
            @if(Route::is(['shift-list','shift-scheduling']))
            <div class="col-sm-6 col-md-2"> 
                <div class="form-group form-focus select-focus">
                    <select class="select floating"> 
                        <option>All Department</option>
                        <option value="1">Finance</option>
                        <option value="2">Finance and Management</option>
                        <option value="3">Hr & Finance</option>
                        <option value="4">ITech</option>
                    </select>
                    <label class="focus-label">Department</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-2">  
                <div class="form-group form-focus focused">
                    <div class="cal-icon">
                        <input class="form-control floating datetimepicker" type="text">
                    </div>
                    <label class="focus-label">From</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-2">  
                <div class="form-group form-focus focused">
                    <div class="cal-icon">
                        <input class="form-control floating datetimepicker" type="text">
                    </div>
                    <label class="focus-label">To</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-2">
                <a href="#" class="btn btn-success btn-search"><i class="fas fa-search me-2"></i> Search </a>
            </div>
            <div class="col-sm-6 col-md-2">
                <a href="#" class="btn btn-success btn-add-emp w-100" data-bs-toggle="modal" data-bs-target="#add_schedule"> Assign Shifts</a>
            </div>
            @if(!Route::is(['shift-scheduling']))
            <div class="col-sm-6 col-md-2">
                <a href="#" class="btn btn-success btn-add-emp w-100" data-bs-toggle="modal" data-bs-target="#add_shift">Add Shifts</a>
            </div>
            @endif 
            @if(Route::is(['shift-scheduling']))
            <div class="col-sm-6 col-md-2">
                <a href="{{url('shift-list')}}" class="btn btn-success btn-add-emp w-100">Shifts</a>
            </div> 
            @endif
            @endif 
            @if(Route::is(['user-reports']))
            <div class="col-sm-6 col-md-3">  
                <div class="form-group form-focus mb-0">
                    
                        <select class="form-control floating select">
                            <option>
                                Name1
                            </option>
                            <option>
                                Name2
                            </option>
                        </select>
                    
                    <label class="focus-label">User Role</label>
                </div>
            </div>
        
            <div class="col-sm-6 col-md-3">  
                <a href="#" class="btn btn-success btn-search"><i class="fas fa-search me-2"></i> Search </a>
            </div>     
            @endif
            @if(Route::is(['users']))
            <div class="col-sm-6 col-md-3">  
                <div class="form-group form-focus select-focus mb-0">
                    <select class="select floating"> 
                        <option>Select Company</option>
                        <option>Global Technologies</option>
                        <option>Delta Infotech</option>
                    </select>
                    <label class="focus-label">Company</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">  
                <div class="form-group form-focus select-focus mb-0">
                    <select class="select floating"> 
                        <option>Select Roll</option>
                        <option>Web Developer</option>
                        <option>Web Designer</option>
                        <option>Android Developer</option>
                        <option>Ios Developer</option>
                    </select>
                    <label class="focus-label">Role</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <a href="#" class="btn btn-success btn-search"><i class="fas fa-search me-2"></i> Search </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="add-emp-section">
                    <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_user"><i class="fas fa-plus"></i> Add User</a>
                </div>
            </div> 
           @endif     
    </div>
    <!-- Search Filter -->
     @endif