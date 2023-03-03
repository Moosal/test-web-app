<?php $page="salary-settings";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Salary Settings @endslot
    @slot('li_1') Settings @endslot
    @slot('li_2') Salary Settings @endslot
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
                                                <li class="active"> 
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
                                
                                            <!-- DA and HRA Settings -->
                                            <div class="settings-widget">
                                                <div class="h3 card-title with-switch">
                                                    DA and HRA                                          
                                                    <div class="onoffswitch">
                                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_hra" checked>
                                                        <label class="onoffswitch-label" for="switch_hra">
                                                            <span class="onoffswitch-inner"></span>
                                                            <span class="onoffswitch-switch"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>DA (%)</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>HRA (%)</label>
                                                            <input class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /DA and HRA Settings -->
                                            
                                            <!-- Provident Fund Settings -->
                                            <div class="settings-widget">
                                                <div class="h3 card-title with-switch">
                                                    Provident Fund Settings                                             
                                                    <div class="onoffswitch">
                                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_pf" checked>
                                                        <label class="onoffswitch-label" for="switch_pf">
                                                            <span class="onoffswitch-inner"></span>
                                                            <span class="onoffswitch-switch"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Employee Share (%)</label>
                                                            <input class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Organization Share (%)</label>
                                                            <input class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Provident Fund Settings -->
                                            
                                            <!-- ESI Settings -->
                                            <div class="settings-widget">
                                                <div class="h3 card-title with-switch">
                                                    ESI Settings                                            
                                                    <div class="onoffswitch">
                                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_esi">
                                                        <label class="onoffswitch-label" for="switch_esi">
                                                            <span class="onoffswitch-inner"></span>
                                                            <span class="onoffswitch-switch"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Employee Share (%)</label>
                                                            <input class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Organization Share (%)</label>
                                                            <input class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /ESI Settings -->
                                            
                                            <!-- TDS Settings -->
                                            <div class="settings-widget">
                                                <div class="h3 card-title with-switch">
                                                    TDS&nbsp; <small class="form-text text-muted">Annual Salary</small>
                                                    <div class="onoffswitch">
                                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_tds">
                                                        <label class="onoffswitch-label" for="switch_tds">
                                                            <span class="onoffswitch-inner"></span>
                                                            <span class="onoffswitch-switch"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row row-sm">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label>Salary From</label>
                                                            <input class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label>Salary To</label>
                                                            <input class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <label>%</label>
                                                            <input class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <label class="d-none d-sm-block">&nbsp;</label>
                                                            <button class="btn btn-danger w-100 set-btn" type="button"><i class="far fa-trash-alt"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row row-sm">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label>Salary From</label>
                                                            <input class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label>Salary To</label>
                                                            <input class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <label>%</label>
                                                            <input class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <label class="d-none d-sm-block">&nbsp;</label>
                                                            <button class="btn btn-danger w-100 set-btn" type="button"><i class="far fa-trash-alt"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row row-sm">
                                                    <div class="col-sm-2 ms-auto">
                                                        <div class="form-group">
                                                            <button class="btn btn-primary w-100" type="button"><i class="fa fa-plus"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /TDS Settings -->
                                            
                                            <!-- Submit Button -->
                                            <div class="submit-section">
                                                <button class="btn btn-primary submit-btn" type="submit">Save</button>
                                            </div>
                                            <!-- /Submit Button -->
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection