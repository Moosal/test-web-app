<?php $page="tickets";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Tickets @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Tickets @endslot
@endcomponent 
@section('css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/select2/select2.min.css')}}">
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{url('assets/css/dataTables.bootstrap4.min.css')}}">
@endsection  


                    <div class="row">
                        <div class="col-md-6 col-lg-3 d-flex">
                            <div class="card flex-fill tickets-card">
                                <div class="card-header">
                                    <div class="">
                                        <h2>New Tickets</h2>
                                        <h3 class="bl-text">112</h3>
                                    </div>
                                    <h6>+10%</h6>
                                </div>
                                <div class="" id="newTicketChart"></div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex">
                            <div class="card flex-fill tickets-card">
                                <div class="card-header">
                                    <div class="">
                                        <h2>Solved Tickets</h2>
                                        <h3 class="org-text">112</h3>
                                    </div>
                                    <h6>+10%</h6>
                                </div>
                                <div class="" id="solvedTicketChart"></div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex">
                            <div class="card flex-fill tickets-card">
                                <div class="card-header">
                                    <div class="">
                                        <h2>Open Tickets</h2>
                                        <h3 class="red-text">112</h3>
                                    </div>
                                    <h6>+10%</h6>
                                </div>
                                <div class="" id="openTicketChart"></div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex">
                            <div class="card flex-fill tickets-card">
                                <div class="card-header">
                                    <div class="">
                                        <h2>Pending Tickets</h2>
                                        <h3 class="grn-text">112</h3>
                                    </div>
                                    <h6>+10%</h6>
                                </div>
                                <div class="" id="pendingTicketChart"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Search Filter -->
                    <div class="row filter-row">
                        
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
                                <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_ticket"><i class="fas fa-plus"></i> Add Tickets</a>
                            </div>
                        </div> 
                    </div>
                    <!-- Search Filter -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Ticket Id</th>
                                            <th>Ticket Subject</th>
                                            <th>Assigned Staff</th>
                                            <th>Created Date</th>
                                            <th>Last Reply</th>
                                            <th>Priority</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="{{url('ticket-view')}}">#TKT-0001</a></td>
                                            <td>Laptop Issue</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a class="avatar avatar-xs" href="{{url('profile')}}"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}"></a>
                                                    <a href="#">John Smith</a>
                                                </h2>
                                            </td>
                                            <td>5 Jan 2019 07:21 AM</td>
                                            <td>5 Jan 2019 11.12 AM</td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-two dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-one dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-danger"></i> New 
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Open</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Reopened</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> On Hold</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Closed</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> In Progress</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Cancelled</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_ticket"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_ticket"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><a href="{{url('ticket-view')}}">#TKT-0001</a></td>
                                            <td>Internet Issue</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a class="avatar avatar-xs" href="{{url('profile')}}"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-08.jpg')}}"></a>
                                                    <a href="#">Catherine Manseau</a>
                                                </h2>
                                            </td>
                                            <td>5 Jan 2019 07:21 AM</td>
                                            <td>5 Jan 2019 11.12 AM</td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-two dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-warning"></i> Medium </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-one dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-info"></i> Reopened 
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Open</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Reopened</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> On Hold</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Closed</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> In Progress</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Cancelled</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_ticket"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_ticket"><i class="far fa-trash-alt"></i></a>
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
    <!-- Apexchart JS -->
    <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js')}}"></script> 
    <script src="{{ URL::asset('/assets/js/pages/apex-chart.init.js')}}"></script>

@endsection              
@endsection