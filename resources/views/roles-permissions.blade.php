<?php $page="roles-permissions";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Roles & Permissions @endslot
    @slot('li_1') Settings @endslot
    @slot('li_2') Roles & Permissions @endslot
@endcomponent 


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
                                                <li class="active"> 
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
                                                <li> 
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
                                        <div class="row">
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-3">
                                                <a href="#" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#add_role"><i class="fa fa-plus"></i> Add Roles</a>
                                                <div class="roles-menu">
                                                    <ul>
                                                        <li class="active">
                                                            <a href="javascript:void(0);">Administrator
                                                                <span class="role-action">
                                                                    <span class="action-circle large" data-bs-toggle="modal" data-bs-target="#edit_role">
                                                                        <i class="material-icons">edit</i>
                                                                    </span>
                                                                    <span class="action-circle large delete-btn" data-bs-toggle="modal" data-bs-target="#delete_role">
                                                                        <i class="material-icons">delete</i>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">CEO
                                                                <span class="role-action">
                                                                    <span class="action-circle large" data-bs-toggle="modal" data-bs-target="#edit_role">
                                                                        <i class="material-icons">edit</i>
                                                                    </span>
                                                                    <span class="action-circle large delete-btn" data-bs-toggle="modal" data-bs-target="#delete_role">
                                                                        <i class="material-icons">delete</i>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">Manager
                                                                <span class="role-action">
                                                                    <span class="action-circle large" data-bs-toggle="modal" data-bs-target="#edit_role">
                                                                        <i class="material-icons">edit</i>
                                                                    </span>
                                                                    <span class="action-circle large delete-btn" data-bs-toggle="modal" data-bs-target="#delete_role">
                                                                        <i class="material-icons">delete</i>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">Team Leader
                                                                <span class="role-action">
                                                                    <span class="action-circle large" data-bs-toggle="modal" data-bs-target="#edit_role">
                                                                        <i class="material-icons">edit</i>
                                                                    </span>
                                                                    <span class="action-circle large delete-btn" data-bs-toggle="modal" data-bs-target="#delete_role">
                                                                        <i class="material-icons">delete</i>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">Accountant
                                                                <span class="role-action">
                                                                    <span class="action-circle large" data-bs-toggle="modal" data-bs-target="#edit_role">
                                                                        <i class="material-icons">edit</i>
                                                                    </span>
                                                                    <span class="action-circle large delete-btn" data-bs-toggle="modal" data-bs-target="#delete_role">
                                                                        <i class="material-icons">delete</i>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">Web Developer
                                                                <span class="role-action">
                                                                    <span class="action-circle large" data-bs-toggle="modal" data-bs-target="#edit_role">
                                                                        <i class="material-icons">edit</i>
                                                                    </span>
                                                                    <span class="action-circle large delete-btn" data-bs-toggle="modal" data-bs-target="#delete_role">
                                                                        <i class="material-icons">delete</i>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">Web Designer
                                                                <span class="role-action">
                                                                    <span class="action-circle large" data-bs-toggle="modal" data-bs-target="#edit_role">
                                                                        <i class="material-icons">edit</i>
                                                                    </span>
                                                                    <span class="action-circle large delete-btn" data-bs-toggle="modal" data-bs-target="#delete_role">
                                                                        <i class="material-icons">delete</i>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">HR
                                                                <span class="role-action">
                                                                    <span class="action-circle large" data-bs-toggle="modal" data-bs-target="#edit_role">
                                                                        <i class="material-icons">edit</i>
                                                                    </span>
                                                                    <span class="action-circle large delete-btn" data-bs-toggle="modal" data-bs-target="#delete_role">
                                                                        <i class="material-icons">delete</i>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">UI/UX Developer
                                                                <span class="role-action">
                                                                    <span class="action-circle large" data-bs-toggle="modal" data-bs-target="#edit_role">
                                                                        <i class="material-icons">edit</i>
                                                                    </span>
                                                                    <span class="action-circle large delete-btn" data-bs-toggle="modal" data-bs-target="#delete_role">
                                                                        <i class="material-icons">delete</i>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">SEO Analyst
                                                                <span class="role-action">
                                                                    <span class="action-circle large" data-bs-toggle="modal" data-bs-target="#edit_role">
                                                                        <i class="material-icons">edit</i>
                                                                    </span>
                                                                    <span class="action-circle large delete-btn" data-bs-toggle="modal" data-bs-target="#delete_role">
                                                                        <i class="material-icons">delete</i>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 col-md-8 col-lg-8 col-xl-9">
                                                <h6 class="card-title m-b-20">Module Access</h6>
                                                <div class="m-b-30">
                                                    <ul class="list-group notification-list">
                                                        <li class="list-group-item">
                                                            Employee
                                                            <div class="status-toggle">
                                                                <input type="checkbox" id="staff_module" class="check">
                                                                <label for="staff_module" class="checktoggle">checkbox</label>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            Holidays
                                                            <div class="status-toggle">
                                                                <input type="checkbox" id="holidays_module" class="check" checked>
                                                                <label for="holidays_module" class="checktoggle">checkbox</label>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            Leaves
                                                            <div class="status-toggle">
                                                                <input type="checkbox" id="leave_module" class="check" checked>
                                                                <label for="leave_module" class="checktoggle">checkbox</label>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            Events
                                                            <div class="status-toggle">
                                                                <input type="checkbox" id="events_module" class="check" checked>
                                                                <label for="events_module" class="checktoggle">checkbox</label>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            Chat
                                                            <div class="status-toggle">
                                                                <input type="checkbox" id="chat_module" class="check" checked>
                                                                <label for="chat_module" class="checktoggle">checkbox</label>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            Jobs
                                                            <div class="status-toggle">
                                                                <input type="checkbox" id="job_module" class="check">
                                                                <label for="job_module" class="checktoggle">checkbox</label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>          
                                                <div class="table-responsive">
                                                    <table class="table table-striped custom-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Module Permission</th>
                                                                <th class="text-center">Read</th>
                                                                <th class="text-center">Write</th>
                                                                <th class="text-center">Create</th>
                                                                <th class="text-center">Delete</th>
                                                                <th class="text-center">Import</th>
                                                                <th class="text-center">Export</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Employee</td>
                                                                <td class="text-center">
                                                                    <input type="checkbox" checked="">
                                                                </td>
                                                                <td class="text-center">
                                                                    <input type="checkbox" checked="">
                                                                </td>
                                                                <td class="text-center">
                                                                    <input type="checkbox" checked="">
                                                                </td>
                                                                <td class="text-center">
                                                                    <input type="checkbox" checked="">
                                                                </td>
                                                                <td class="text-center">
                                                                    <input type="checkbox" checked="">
                                                                </td>
                                                                <td class="text-center">
                                                                    <input type="checkbox" checked="">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Holidays</td>
                                                                <td class="text-center">
                                                                    <input type="checkbox" checked="">
                                                                </td>
                                                                <td class="text-center">
                                                                    <input type="checkbox" checked="">
                                                                </td>
                                                                <td class="text-center">
                                                                    <input type="checkbox" checked="">
                                                                </td>
                                                                <td class="text-center">
                                                                    <input type="checkbox" checked="">
                                                                </td>
                                                                <td class="text-center">
                                                                    <input type="checkbox" checked="">
                                                                </td>
                                                                <td class="text-center">
                                                                    <input type="checkbox" checked="">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Leaves</td>
                                                                <td class="text-center">
                                                                    <input type="checkbox" checked="">
                                                                </td>
                                                                <td class="text-center">
                                                                    <input type="checkbox" checked="">
                                                                </td>
                                                                <td class="text-center">
                                                                    <input type="checkbox" checked="">
                                                                </td>
                                                                <td class="text-center">
                                                                    <input type="checkbox" checked="">
                                                                </td>
                                                                <td class="text-center">
                                                                    <input type="checkbox" checked="">
                                                                </td>
                                                                <td class="text-center">
                                                                    <input type="checkbox" checked="">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Events</td>
                                                                <td class="text-center">
                                                                    <input type="checkbox" checked="">
                                                                </td>
                                                                <td class="text-center">
                                                                    <input type="checkbox" checked="">
                                                                </td>
                                                                <td class="text-center">
                                                                    <input type="checkbox" checked="">
                                                                </td>
                                                                <td class="text-center">
                                                                    <input type="checkbox" checked="">
                                                                </td>
                                                                <td class="text-center">
                                                                    <input type="checkbox" checked="">
                                                                </td>
                                                                <td class="text-center">
                                                                    <input type="checkbox" checked="">
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
                        </div>
                    </div>

                
@component('components.model-popup') 
@endcomponent 
@endsection