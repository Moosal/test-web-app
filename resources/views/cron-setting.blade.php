<?php $page="cron-setting";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Cron Setting @endslot
    @slot('li_1') Settings @endslot
    @slot('li_2') Cron Settings @endslot
@endcomponent 
@section('css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/select2/select2.min.css')}}">
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
                                        <li> 
                                            <a href="{{url('leave-type')}}"><i class="la la-cogs"></i> <span>Leave Type</span></a>
                                        </li>
                                        <li> 
                                            <a href="{{url('toxbox-setting')}}"><i class="la la-comment"></i> <span>ToxBox Settings</span></a>
                                        </li>
                                        <li class="active"> 
                                            <a href="{{url('cron-setting')}}"><i class="la la-rocket"></i> <span>Cron Settings</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8 col-lg-9 settings-cont">
                            <div class="card p-4">
                                <form>
                                    <div class="form-group">
                                        <label>Cron Key <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Auto Backup Database <span class="text-danger">*</span></label><br>
                                        <label class="switch">
                                            <input type="hidden" value="off" name="auto_backup_db">
                                            <input type="checkbox" checked="checked" name="auto_backup_db">
                                            <span></span>
                                        </label>
                                    </div>
                                    
                                    <div class="submit-section">
                                        <button class="btn btn-primary submit-btn">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
@section('script')        
    <!-- Select2 JS -->
    <script src="{{ URL::asset('/assets/libs/select2/select2.min.js')}}"></script>   
    <script src="{{ URL::asset('/assets/js/pages/select2.init.js')}}"></script>
@endsection 
@endsection