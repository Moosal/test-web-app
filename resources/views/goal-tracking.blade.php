<?php $page="goal-tracking";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Goal Tracking @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Goal Tracking @endslot
@endcomponent 
@component('components.search-filder') 
    @slot('title') Add New @endslot
@endcomponent
@section('css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{url('assets/css/dataTables.bootstrap4.min.css')}}">
@endsection  
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th style="width: 30px;">#</th>
                                            <th>Goal Type</th>
                                            <th>Subject</th>
                                            <th>Target Achievement</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Description </th>
                                            <th>Status </th>
                                            <th>Progress </th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Event Goal</td>
                                            <td>Test Goal</td>
                                            <td>Lorem ipsum dollar</td>
                                            <td>
                                                7 May 2019
                                            </td>
                                            <td>10 May 2019</td>
                                            <td>Lorem ipsum dollar</td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-two dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-success"></i> Active
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="job-app">
                                                <div class="prog-div">
                                                    <div class="progress org"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                                        <div class="progress-value">73%</div>
                                                    </div>
                                                </div>
                                            </td>
                                            
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_goal"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_goal"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Invoice Goal</td>
                                            <td>Test Goal</td>
                                            <td>Lorem ipsum dollar</td>
                                            <td>
                                                7 May 2019
                                            </td>
                                            <td>10 May 2019</td>
                                            <td>Lorem ipsum dollar</td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-two dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-danger"></i> Inactive
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="job-app">
                                                <div class="prog-div">
                                                    <div class="progress org"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                                        <div class="progress-value">73%</div>
                                                    </div>
                                                </div>
                                            </td>
                                            
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_goal"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_goal"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Employee Goal</td>
                                            <td>Test Goal</td>
                                            <td>Lorem ipsum dollar</td>
                                            <td>
                                                7 May 2019
                                            </td>
                                            <td>10 May 2019</td>
                                            <td>Lorem ipsum dollar</td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-two dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-success"></i> Active
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="job-app">
                                                <div class="prog-div">
                                                    <div class="progress org"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                                        <div class="progress-value">73%</div>
                                                    </div>
                                                </div>
                                            </td>
                                            
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_goal"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_goal"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Invoice Goal</td>
                                            <td>Test Goal</td>
                                            <td>Lorem ipsum dollar</td>
                                            <td>
                                                7 May 2019
                                            </td>
                                            <td>10 May 2019</td>
                                            <td>Lorem ipsum dollar</td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-two dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-success"></i> Active
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="job-app">
                                                <div class="prog-div">
                                                    <div class="progress org"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                                        <div class="progress-value">73%</div>
                                                    </div>
                                                </div>
                                            </td>
                                            
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_goal"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_goal"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Project Goal</td>
                                            <td>Test Goal</td>
                                            <td>Lorem ipsum dollar</td>
                                            <td>
                                                7 May 2019
                                            </td>
                                            <td>10 May 2019</td>
                                            <td>Lorem ipsum dollar</td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-two dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-success"></i> Active
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="job-app">
                                                <div class="prog-div">
                                                    <div class="progress"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                                        <div class="progress-value">73%</div>
                                                    </div>
                                                </div>
                                            </td>
                                            
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_goal"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_goal"><i class="far fa-trash-alt"></i></a>
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