<?php $page="leave-type";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Leave Type @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Leave Type @endslot
@endcomponent 
@section('css')
    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{url('assets/css/dataTables.bootstrap4.min.css')}}">
@endsection 
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-lg-3">
                            <div class="card settings-menu">
                                <div class="sidebar-menu">
                                    <ul>
                                        <li class="menu-title">Settings</li>
                                        <li> 
                                            <a href="{{url('settings')}}"><i class="la la-building"></i> <span>Company Settings</span></a>
                                        </li>
                                        <li> 
                                            <a href="{{url('localization')}}"><i class="la la-clock-o"></i> <span>Localization</span></a>
                                        </li>
                                        <li> 
                                            <a href="{{url('theme-settings')}}"><i class="la la-photo"></i> <span>Theme Settings</span></a>
                                        </li>
                                        <li> 
                                            <a href="{{url('roles-permissions')}}"><i class="la la-key"></i> <span>Roles & Permissions</span></a>
                                        </li>
                                        <li> 
                                            <a href="{{url('email-settings')}}"><i class="la la-at"></i> <span>Email Settings</span></a>
                                        </li>
                                        <li> 
                                            <a href="{{url('performance-setting')}}"><i class="la la-chart-bar"></i> <span>Performance Settings</span></a>
                                        </li>
                                        <li> 
                                            <a href="{{url('approval-setting')}}"><i class="la la-thumbs-up"></i> <span>Approval Settings</span></a>
                                        </li>
                                        <li> 
                                            <a href="{{url('invoice-settings')}}"><i class="la la-pencil-square"></i> <span>Invoice Settings</span></a>
                                        </li>
                                        <li> 
                                            <a href="{{url('salary-settings')}}"><i class="la la-money"></i> <span>Salary Settings</span></a>
                                        </li>
                                        <li> 
                                            <a href="{{url('notifications-settings')}}"><i class="la la-globe"></i> <span>Notifications</span></a>
                                        </li>
                                        <li> 
                                            <a href="{{url('change-password')}}"><i class="la la-lock"></i> <span>Change Password</span></a>
                                        </li>
                                        <li class="active"> 
                                            <a href="{{url('leave-type')}}"><i class="la la-cogs"></i> <span>Leave Type</span></a>
                                        </li>
                                        <li> 
                                            <a href="{{url('toxbox-setting')}}"><i class="la la-comment"></i> <span>ToxBox Settings</span></a>
                                        </li>
                                        <li> 
                                            <a href="{{url('cron-setting')}}"><i class="la la-rocket"></i> <span>Cron Settings</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8 col-lg-9 settings-cont">
                            <div class="card p-4">
                                <div class="add-emp-section">
                                    <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_leavetype"><i class="fas fa-plus"></i> Add Leave Type</a>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-striped custom-table datatable mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Leave Type</th>
                                                        <th>Leave Days</th>
                                                        <th>Status</th>
                                                        <th class="text-end">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>Casual Leave</td>
                                                        <td>12 Days</td>
                                                        <td>
                                                            <div class="dropdown action-label">
                                                                <a class="role-info role-bg-two dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa fa-dot-circle-o text-success"></i> Active
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                                    <a href="#" class="dropdown-item"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end ico-sec">
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_leavetype"><i class="fas fa-pen"></i></a>
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#delete_leavetype"><i class="far fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            2
                                                        </td>
                                                        <td>Medical Leave</td>
                                                        <td>12 Days</td>
                                                        <td>
                                                            <div class="dropdown action-label">
                                                                <a class="role-info role-bg-two dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa fa-dot-circle-o text-danger"></i> Inactive
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end ico-sec">
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_leavetype"><i class="fas fa-pen"></i></a>
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#delete_leavetype"><i class="far fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            3
                                                        </td>
                                                        <td>Loss of Pay</td>
                                                        <td>-</td>
                                                        <td>
                                                            <div class="dropdown action-label">
                                                                <a class="role-info role-bg-two dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa fa-dot-circle-o text-success"></i> Active
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end ico-sec">
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_leavetype"><i class="fas fa-pen"></i></a>
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#delete_leavetype"><i class="far fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                  
@component('components.model-popup') 
@endcomponent 
@section('script')        
    <!-- Datatable JS -->
    <script src="{{ URL::asset('/assets/js/jquery.dataTables.min.js')}}"></script> 
    <script src="{{ URL::asset('/assets/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/pages/datatable.init.js')}}"></script>
@endsection
@endsection