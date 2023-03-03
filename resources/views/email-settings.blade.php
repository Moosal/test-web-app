<?php $page="email-settings";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Email Settings @endslot
    @slot('li_1') Settings @endslot
    @slot('li_2') Email Settings @endslot
@endcomponent 
@section('css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/select2/select2.min.css')}}">
@endsection  
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
                                                <li class="active"> 
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
                                        <form>
                                            <div class="form-group">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="mailoption" id="phpmail" value="option1">
                                                    <label class="form-check-label" for="phpmail">PHP Mail</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="mailoption" id="smtpmail" value="option2">
                                                    <label class="form-check-label" for="smtpmail">SMTP</label>
                                                </div>
                                            </div>
                                            <h4 class="page-title">PHP Email Settings</h4>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Email From Address</label>
                                                        <input class="form-control" type="email">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Emails From Name</label>
                                                        <input class="form-control" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <h4 class="page-title m-t-30">SMTP Email Settings</h4>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>SMTP HOST</label>
                                                        <input class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>SMTP USER</label>
                                                        <input class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>SMTP PASSWORD</label>
                                                        <input class="form-control" type="password">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>SMTP PORT</label>
                                                        <input class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>SMTP Security</label>
                                                        <select class="select">
                                                            <option>None</option>
                                                            <option>SSL</option>
                                                            <option>TLS</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>SMTP Authentication Domain</label>
                                                        <input class="form-control" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="submit-section">
                                                <button class="btn btn-primary submit-btn">Save &amp; update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                    </div>
@section('script')        
    <!-- Select2 JS -->
    <script src="{{ URL::asset('/assets/libs/select2/select2.min.js')}}"></script>   
    <script src="{{ URL::asset('/assets/js/pages/select2.init.js')}}"></script>
@endsection               

@endsection