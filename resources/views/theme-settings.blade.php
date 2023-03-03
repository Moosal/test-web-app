<?php $page="theme-settings";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Theme Settings @endslot
    @slot('li_1') Settings @endslot
    @slot('li_2') Theme Settings @endslot
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
                                                <li class="active"> 
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
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Website Name</label>
                                                <div class="col-lg-9">
                                                    <input name="website_name" class="form-control" value="Dreamguy's Technologies" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Light Logo</label>
                                                <div class="col-lg-7">
                                                    <input type="file" class="form-control">
                                                    <span class="form-text text-muted">Recommended image size is 40px x 40px</span>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="img-thumbnail float-end"><img src="{{ URL::asset('/assets/img/logo2.png')}}" alt="" width="40" height="40"></div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Favicon</label>
                                                <div class="col-lg-7">
                                                    <input type="file" class="form-control">
                                                    <span class="form-text text-muted">Recommended image size is 16px x 16px</span>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="settings-image img-thumbnail float-end"><img src="{{ URL::asset('/assets/img/logo2.png')}}" class="img-fluid" width="16" height="16" alt=""></div>
                                                </div>
                                            </div>
                                            <div class="submit-section">
                                                <button class="btn btn-primary submit-btn">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
              

@endsection