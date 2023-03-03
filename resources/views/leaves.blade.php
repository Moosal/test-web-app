<?php $page="leaves";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Leaves @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Leaves @endslot
@endcomponent 
@section('css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{url('assets/css/dataTables.bootstrap4.min.css')}}">
@endsection
                    
                    <!-- Leave Statistics -->
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <div class="stats-info">
                                <h4>12 / 60</h4>
                                <h6>Today Presents</h6>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="stats-info">
                                <h4>8</h4>
                                <h6>Planned Leaves</h6>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="stats-info">
                                <h4>0</h4>
                                <h6>Unplanned Leaves</h6>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="stats-info">
                                <h4>12</h4>
                                <h6>Pending Requests</h6>
                            </div>
                        </div>
                    </div>
                    <!-- /Leave Statistics -->
                    
                    <!-- Search Filter -->
                    <div class="row filter-row">
                       <!-- <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating">
                                <label class="focus-label">Employee Name</label>
                            </div>
                       </div> -->
                       <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
                            <div class="form-group form-focus select-focus mb-0">
                                <select class="select floating"> 
                                    <option> -- Select -- </option>
                                    <option>Casual Leave</option>
                                    <option>Medical Leave</option>
                                    <option>Loss of Pay</option>
                                </select>
                                <label class="focus-label">Leave Type</label>
                            </div>
                       </div>
                       <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12"> 
                            <div class="form-group form-focus select-focus mb-0">
                                <select class="select floating"> 
                                    <option> -- Select -- </option>
                                    <option> Pending </option>
                                    <option> Approved </option>
                                    <option> Rejected </option>
                                </select>
                                <label class="focus-label">Leave Status</label>
                            </div>
                       </div>
                       <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
                            <div class="form-group form-focus mb-0">
                                <div class="cal-icon">
                                    <input class="form-control floating datetimepicker" type="text">
                                </div>
                                <label class="focus-label">From</label>
                            </div>
                        </div>
                       <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
                            <div class="form-group form-focus mb-0">
                                <div class="cal-icon">
                                    <input class="form-control floating datetimepicker" type="text">
                                </div>
                                <label class="focus-label">To</label>
                            </div>
                        </div>
                       <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
                        <a href="#" class="btn btn-success btn-search"><i class="fas fa-search me-2"></i> Search </a>
                       </div>
                       <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
                            <div class="add-emp-section">
                                <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_leave"><i class="fas fa-plus"></i> Add Leave</a>
                            </div>
                        </div>  
                    </div>
                    <!-- /Search Filter -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th>Employee</th>
                                            <th>Leave Type</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>No of Days</th>
                                            <th>Reason</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}"></a>
                                                    <a href="#">Richard Miles <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>Casual Leave</td>
                                            <td>8 Mar 2019</td>
                                            <td>9 Mar 2019</td>
                                            <td>2 days</td>
                                            <td>Going to Hospital</td>
                                            <td class="text-center">
                                                <span class="role-info role-bg-three">New</span>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_leave"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                    <a> John Doe  <span>Web Designer</span></a>
                                                </h2>
                                            </td>
                                            <td>Medical Leave</td>
                                            <td>27 Feb 2019</td>
                                            <td>27 Feb 2019</td>
                                            <td>1 day</td>
                                            <td>Going to Hospital</td>
                                            <td class="text-center">
                                                <span class="role-info role-bg-two">Approved</span>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_leave"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}"></a>
                                                    <a>John Smith <span>Android Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>LOP</td>
                                            <td>24 Feb 2019</td>
                                            <td>25 Feb 2019</td>
                                            <td>2 days</td>
                                            <td>Personnal</td>
                                            <td class="text-center">
                                                <span class="role-info role-bg-two">Approved</span>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_leave"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}"></a>
                                                    <a>Mike Litorus  <span>IOS Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>Paternity Leave</td>
                                            <td>13 Feb 2019</td>
                                            <td>17 Feb 2019</td>
                                            <td>5 days</td>
                                            <td>Going to Hospital</td>
                                            <td class="text-center">
                                                <span class="role-info role-bg-one">Declined</span>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_leave"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-24.jpg')}}"></a>
                                                    <a>Richard Parker <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>Casual Leave</td>
                                            <td>30 Jan 2019</td>
                                            <td>31 Jan 2019</td>
                                            <td>2 days</td>
                                            <td>Going to Hospital</td>
                                            <td class="text-center">
                                                <span class="role-info role-bg-three">New</span>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_leave"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-08.jpg')}}"></a>
                                                    <a>Catherine Manseau <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>Maternity Leave</td>
                                            <td>5 Jan 2019</td>
                                            <td>15 Jan 2019</td>
                                            <td>10 days</td>
                                            <td>Going to Hospital</td>
                                            <td class="text-center">
                                                <span class="role-info role-bg-two">Approved</span>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_leave"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-15.jpg')}}"></a>
                                                    <a>Buster Wigton <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>Hospitalisation</td>
                                            <td>15 Jan 2019</td>
                                            <td>25 Jan 2019</td>
                                            <td>10 days</td>
                                            <td>Going to Hospital</td>
                                            <td class="text-center">
                                                <span class="role-info role-bg-two">Approved</span>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_leave"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-20.jpg')}}"></a>
                                                    <a>Melita Faucher <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>Casual Leave</td>
                                            <td>13 Jan 2019</td>
                                            <td>14 Jan 2019</td>
                                            <td>2 days</td>
                                            <td>Going to Hospital</td>
                                            <td class="text-center">
                                                <span class="role-info role-bg-one">Declined</span>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_leave"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-03.jpg')}}"></a>
                                                    <a>Tarah Shropshire <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>Casual Leave</td>
                                            <td>10 Jan 2019</td>
                                            <td>10 Jan 2019</td>
                                            <td>1 day</td>
                                            <td>Going to Hospital</td>
                                            <td class="text-center">
                                                <span class="role-info role-bg-three">New</span>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_leave"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-20.jpg')}}"></a>
                                                    <a>Domenic Houston <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>Casual Leave</td>
                                            <td>10 Jan 2019</td>
                                            <td>11 Jan 2019</td>
                                            <td>2 days</td>
                                            <td>Going to Hospital</td>
                                            <td class="text-center">
                                                <span class="role-info role-bg-two">Approved</span>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_leave"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                    <a>John Doe <span>Web Designer</span></a>
                                                </h2>
                                            </td>
                                            <td>Casual Leave</td>
                                            <td>9 Jan 2019</td>
                                            <td>10 Jan 2019</td>
                                            <td>2 days</td>
                                            <td>Going to Hospital</td>
                                            <td class="text-center">
                                                <span class="role-info role-bg-two">Approved</span>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_leave"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-25.jpg')}}"></a>
                                                    <a>Rolland Webber <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>Casual Leave</td>
                                            <td>7 Jan 2019</td>
                                            <td>8 Jan 2019</td>
                                            <td>2 days</td>
                                            <td>Going to Hospital</td>
                                            <td class="text-center">
                                                <span class="role-info role-bg-one">Declined</span>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_leave"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
    <!-- Datatable JS -->
    <script src="{{ URL::asset('/assets/js/jquery.dataTables.min.js')}}"></script> 
    <script src="{{ URL::asset('/assets/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/pages/datatable.init.js')}}"></script>
@endsection 
@endsection