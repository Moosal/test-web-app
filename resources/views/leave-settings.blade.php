<?php $page="leave-settings";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Leave Settings @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Leaves Settings @endslot
@endcomponent
@section('css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">

@endsection  
                    <div class="row">
                        <div class="col-md-12 col-lg-3">
                            <div class="nav flex-column nav-pills" id="pills-sub-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-leave-tab" data-bs-toggle="pill" href="{{url('#v-pills-leave')}}" role="tab" aria-controls="v-pills-leave" aria-selected="true"><i class="fas fa-angle-right"></i> Annual Leave</a>
                                <a class="nav-link" id="v-pills-sick-tab" data-bs-toggle="pill" href="{{url('#v-pills-sick')}}" role="tab" aria-controls="v-pills-sick" aria-selected="false"><i class="fas fa-angle-right"></i> Sick</a>
                                <a class="nav-link" id="v-pills-hsp-tab" data-bs-toggle="pill" href="{{url('#v-pills-hsp')}}" role="tab" aria-controls="v-pills-hsp" aria-selected="false"><i class="fas fa-angle-right"></i> Hospitalisation</a>
                                <a class="nav-link" id="v-pills-maternity-tab" data-bs-toggle="pill" href="{{url('#v-pills-maternity')}}" role="tab" aria-controls="v-pills-maternity" aria-selected="false"><i class="fas fa-angle-right')}}"></i> Maternity</a>
                                <a class="nav-link" id="v-pills-paternity-tab" data-bs-toggle="pill" href="{{url('#v-pills-paternity')}}" role="tab" aria-controls="v-pills-paternity" aria-selected="false"><i class="fas fa-angle-right"></i> Paternity</a>
                                <a class="nav-link" id="v-pills-lop-tab" data-bs-toggle="pill" href="{{url('#v-pills-lop')}}" role="tab" aria-controls="v-pills-lop" aria-selected="false"><i class="fas fa-angle-right"></i> LOP</a>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-9">
                            <div class="tab-content pt-0" id="pills-sub-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-leave" role="tabpanel" aria-labelledby="v-pills-leave-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Annual</h4>
                                            <div class="onoffswitch">
                                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_annual1" checked>
                                                <label class="onoffswitch-label">
                                                    <span class="onoffswitch-inner"></span>
                                                    <span class="onoffswitch-switch"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="leave-item">
                                                        <!-- Annual Days Leave -->
                                                        <div class="leave-row">
                                                            <div class="leave-left">
                                                                <div class="input-box">
                                                                    <div class="form-group">
                                                                        <label>From <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="leave-right">
                                                                <button class="leave-edit-btn">Edit</button>
                                                            </div>
                                                        </div>
                                                        <!-- /Annual Days Leave -->

                                                        <!-- Carry Forward -->
                                                        <div class="leave-row">
                                                            <div class="leave-left">
                                                                <div class="input-box">
                                                                    <label class="d-block">Carry forward <span class="text-danger">*</span></label>
                                                                    <div class="leave-inline-form">
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="carry_no" value="option1" disabled>
                                                                            <label class="form-check-label" for="carry_no">No</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="carry_yes" value="option2" disabled>
                                                                            <label class="form-check-label" for="carry_yes">Yes</label>
                                                                        </div>                          
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="leave-row">
                                                            <div class="leave-left">
                                                                <div class="input-box">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="leave-right mt-0">
                                                                <button class="leave-edit-btn">Edit</button>
                                                            </div>
                                                        </div>
                                                        <!-- /Carry Forward -->

                                                        <!-- Earned Leave -->
                                                        <div class="leave-row">
                                                            <div class="leave-left">
                                                                <div class="input-box">
                                                                    <label class="d-block">Earned leave <span class="text-danger">*</span></label>
                                                                    <div class="leave-inline-form">
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="earned_no" value="option1" disabled>
                                                                            <label class="form-check-label" for="earned_no">No</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="earned_yes" value="option2" disabled>
                                                                            <label class="form-check-label" for="earned_yes">Yes</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="leave-right">
                                                                <button class="leave-edit-btn">
                                                                    Edit
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <!-- /Earned Leave -->
                                                    </div>                                          
                                                </div>

                                                <div class="col-md-6">
                                                    <!-- Custom Policy -->
                                                    <div class="custom-policy">
                                                        <div class="leave-header">
                                                            <div class="title">Custom policy</div>
                                                            <div class="leave-action">
                                                                <button class="btn btn-sm btn-primary btn-add-emp" type="button" data-bs-toggle="modal" data-bs-target="#add_custom_policy"><i class="fa fa-plus"></i> Add custom policy</button>
                                                            </div>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <table class="table table-hover table-nowrap leave-table mb-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="l-name">Policy Name</th>
                                                                        <th class="l-days">Days</th>
                                                                        <th class="l-assignee">Assignee</th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>5 Year Service </td>
                                                                        <td>5</td>
                                                                        <td>
                                                                            <a href="#" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                                            <a href="#">John Doe</a>
                                                                        </td>
                                                                        <td class="text-end ico-sec">
                                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_custom_policy"><i class="fas fa-pen"></i></a>
                                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#delete_custom_policy"><i class="far fa-trash-alt"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>5 Year Service </td>
                                                                        <td>5</td>
                                                                        <td>
                                                                            <a href="#" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                                            <a href="#">John Doe</a>
                                                                        </td>
                                                                        <td class="text-end ico-sec">
                                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_custom_policy"><i class="fas fa-pen"></i></a>
                                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#delete_custom_policy"><i class="far fa-trash-alt"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>5 Year Service </td>
                                                                        <td>5</td>
                                                                        <td>
                                                                            <a href="#" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                                            <a href="#">John Doe</a>
                                                                        </td>
                                                                        <td class="text-end ico-sec">
                                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_custom_policy"><i class="fas fa-pen"></i></a>
                                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#delete_custom_policy"><i class="far fa-trash-alt"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!-- /Custom Policy -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Sick Leave -->
                                    <div class="card leave-box" id="leave_sick">
                                        <div class="card-body">
                                            <div class="h3 card-title with-switch">
                                                Sick                                            
                                                <div class="onoffswitch">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_sick" checked>
                                                    <label class="onoffswitch-label" for="switch_sick">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="leave-item">
                                                <div class="leave-row">
                                                    <div class="leave-left">
                                                        <div class="input-box">
                                                            <div class="form-group">
                                                                <label>Days</label>
                                                                <input type="text" class="form-control" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="leave-right">
                                                        <button class="leave-edit-btn">
                                                            Edit
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Sick Leave -->

                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Hospitalisation</h4>
                                            <div class="onoffswitch">
                                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_annual2" checked>
                                                <label class="onoffswitch-label">
                                                    <span class="onoffswitch-inner"></span>
                                                    <span class="onoffswitch-switch"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="leave-item">
                                                        <!-- Hospitalisation -->
                                                        <div class="leave-row">
                                                            <div class="leave-left">
                                                                <div class="input-box">
                                                                    <div class="form-group">
                                                                        <label>Days <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="leave-right">
                                                                <button class="leave-edit-btn">Edit</button>
                                                            </div>
                                                        </div>
                                                        <!-- /Hospitalisation -->
                                                    </div>                                          
                                                </div>

                                                <div class="col-md-6">
                                                    <!-- Custom Policy -->
                                                    <div class="custom-policy">
                                                        <div class="leave-header">
                                                            <div class="title">Custom policy</div>
                                                            <div class="leave-action">
                                                                <button class="btn btn-sm btn-primary btn-add-emp" type="button" data-bs-toggle="modal" data-bs-target="#add_custom_policy"><i class="fa fa-plus"></i> Add policy</button>
                                                            </div>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <table class="table table-hover table-nowrap leave-table mb-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="l-name">Policy Name</th>
                                                                        <th class="l-days">Days</th>
                                                                        <th class="l-assignee">Assignee</th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>5 Year Service </td>
                                                                        <td>5</td>
                                                                        <td>
                                                                            <a href="#" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                                            <a href="#">John Doe</a>
                                                                        </td>
                                                                        <td class="text-end ico-sec">
                                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_custom_policy"><i class="fas fa-pen"></i></a>
                                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#delete_custom_policy"><i class="far fa-trash-alt"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!-- /Custom Policy -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Maternity Leave -->
                                    <div class="card leave-box" id="leave_maternity">
                                        <div class="card-body">
                                            <div class="h3 card-title with-switch">
                                                Maternity  <span class="subtitle">Assigned to female only</span>
                                                <div class="onoffswitch">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_maternity" checked>
                                                    <label class="onoffswitch-label" for="switch_maternity">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="leave-item">
                                                <div class="leave-row">
                                                    <div class="leave-left">
                                                        <div class="input-box">
                                                            <div class="form-group">
                                                                <label>Days</label>
                                                                <input type="text" class="form-control" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="leave-right">
                                                        <button class="leave-edit-btn">
                                                            Edit
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Maternity Leave -->

                                    <!-- Paternity Leave -->
                                    <div class="card leave-box" id="leave_paternity">
                                        <div class="card-body">
                                            <div class="h3 card-title with-switch">
                                                Paternity  <span class="subtitle">Assigned to male only</span>
                                                <div class="onoffswitch">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_paternity">
                                                    <label class="onoffswitch-label" for="switch_paternity">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="leave-item">
                                                <div class="leave-row">
                                                    <div class="leave-left">
                                                        <div class="input-box">
                                                            <div class="form-group">
                                                                <label>Days</label>
                                                                <input type="text" class="form-control" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="leave-right">
                                                        <button class="leave-edit-btn">
                                                            Edit
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Paternity Leave -->

                                    <!-- Custom Create Leave -->
                                    <div class="card mb-0">
                                        <div class="card-header">
                                            <h4>LOP</h4>
                                            <div class="onoffswitch">
                                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_annual3" checked>
                                                <label class="onoffswitch-label">
                                                    <span class="onoffswitch-inner"></span>
                                                    <span class="onoffswitch-switch"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="leave-item">
                                                        <!-- Annual Days Leave -->
                                                        <div class="leave-row">
                                                            <div class="leave-left">
                                                                <div class="input-box">
                                                                    <div class="form-group">
                                                                        <label>Days</label>
                                                                        <input type="text" class="form-control" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="leave-right">
                                                                <button class="leave-edit-btn">Edit</button>
                                                            </div>
                                                        </div>
                                                        <!-- /Annual Days Leave -->

                                                        <!-- Carry Forward -->
                                                        <div class="leave-row">
                                                            <div class="leave-left">
                                                                <div class="input-box">
                                                                    <label class="d-block">Carry forward <span class="text-danger">*</span></label>
                                                                    <div class="leave-inline-form">
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="carry_no1" value="option1" disabled>
                                                                            <label class="form-check-label" for="carry_no">No</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="carry_yes1" value="option2" disabled>
                                                                            <label class="form-check-label" for="carry_yes">Yes</label>
                                                                        </div>                          
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="leave-row">
                                                            <div class="leave-left">
                                                                <div class="input-box">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="leave-right mt-0">
                                                                <button class="leave-edit-btn">Edit</button>
                                                            </div>
                                                        </div>
                                                        <!-- /Carry Forward -->

                                                        <!-- Earned Leave -->
                                                        <div class="leave-row">
                                                            <div class="leave-left">
                                                                <div class="input-box">
                                                                    <label class="d-block">Earned leave <span class="text-danger">*</span></label>
                                                                    <div class="leave-inline-form">
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="earned_no1" value="option1" disabled>
                                                                            <label class="form-check-label" for="earned_no">No</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="earned_yes1" value="option2" disabled>
                                                                            <label class="form-check-label" for="earned_yes">Yes</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="leave-right">
                                                                <button class="leave-edit-btn">
                                                                    Edit
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <!-- /Earned Leave -->
                                                    </div>                                          
                                                </div>

                                                <div class="col-md-6">
                                                    <!-- Custom Policy -->
                                                    <div class="custom-policy">
                                                        <div class="leave-header">
                                                            <div class="title">Custom policy</div>
                                                            <div class="leave-action">
                                                                <button class="btn btn-sm btn-primary btn-add-emp" type="button" data-bs-toggle="modal" data-bs-target="#add_custom_policy"><i class="fa fa-plus"></i> Add custom policy</button>
                                                            </div>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <table class="table table-hover table-nowrap leave-table mb-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="l-name">Policy Name</th>
                                                                        <th class="l-days">Days</th>
                                                                        <th class="l-assignee">Assignee</th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>5 Year Service </td>
                                                                        <td>5</td>
                                                                        <td>
                                                                            <a href="#" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                                            <a href="#">John Doe</a>
                                                                        </td>
                                                                        <td class="text-end ico-sec">
                                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_custom_policy"><i class="fas fa-pen"></i></a>
                                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#delete_custom_policy"><i class="far fa-trash-alt"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>5 Year Service </td>
                                                                        <td>5</td>
                                                                        <td>
                                                                            <a href="#" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                                            <a href="#">John Doe</a>
                                                                        </td>
                                                                        <td class="text-end ico-sec">
                                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_custom_policy"><i class="fas fa-pen"></i></a>
                                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#delete_custom_policy"><i class="far fa-trash-alt"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>5 Year Service </td>
                                                                        <td>5</td>
                                                                        <td>
                                                                            <a href="#" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                                            <a href="#">John Doe</a>
                                                                        </td>
                                                                        <td class="text-end ico-sec">
                                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_custom_policy"><i class="fas fa-pen"></i></a>
                                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#delete_custom_policy"><i class="far fa-trash-alt"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!-- /Custom Policy -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Custom Create Leave -->
                                    
                                </div>
                                <div class="tab-pane fade" id="v-pills-sick" role="tabpanel" aria-labelledby="v-pills-sick-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Sick Tab</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-hsp" role="tabpanel" aria-labelledby="v-pills-hsp-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Hospitalisation Tab</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-maternity" role="tabpanel" aria-labelledby="v-pills-maternity-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Maternity Tab</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-paternity" role="tabpanel" aria-labelledby="v-pills-paternity-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Paternity Tab</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-lop" role="tabpanel" aria-labelledby="v-pills-lop-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>LOP Tab</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@component('components.model-popup') 
@endcomponent 
@section('script')        
    <!-- Select2 JS -->
    <script src="{{ URL::asset('/assets/libs/select2/select2.min.js')}}"></script>   
    <script src="{{ URL::asset('/assets/js/pages/select2.init.js')}}"></script>
    <!-- Datepicker Core JS -->
    <script src="{{ URL::asset('/assets/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/pages/datetimepicker.init.js')}}"></script>
    <!-- Multiselect JS -->
    <script src="{{ URL::asset('/assets/js/multiselect.min.js')}}"></script>
@endsection
@endsection