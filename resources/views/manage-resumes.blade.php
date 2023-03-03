<?php $page="manage-resumes";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Manage Resumes @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Manage Resumes @endslot
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
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Job Title</th>
                                            <th>Department</th>
                                            <th>Start Date</th>
                                            <th>Expire Date</th>
                                            <th class="text-center">Job Type</th>
                                            <th class="text-center">Status</th>
                                            <th>Resume</th>
                                            <th class="text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">John Doe <span>Web Designer</span></a>
                                                </h2>
                                            </td>
                                            <td><a href="{{url('job-details')}}">Web Developer</a></td>
                                            <td>Development</td>
                                            <td>3 Mar 2019</td>
                                            <td>31 May 2019</td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-one dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-danger"></i> Full Time
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Full Time</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Part Time</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Internship</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Temporary</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Other</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-two dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-danger"></i> Open
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Open</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Closed</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Cancelled</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><a href="javascript:void(0);" class="role-info role-bg-three"><i class="fa fa-download me-1"></i> Download</a></td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_job"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">Richard Miles <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            <td><a href="{{url('job-details')}}">Web Designer</a></td>
                                            <td>Designing</td>
                                            <td>3 Mar 2019</td>
                                            <td>31 May 2019</td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-one dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-success"></i> Part Time
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Full Time</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Part Time</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Internship</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Temporary</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Other</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-two dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-success"></i> Closed
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Open</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Closed</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Cancelled</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><a href="javascript:void(0);" class="role-info role-bg-three"><i class="fa fa-download me-1"></i> Download</a></td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_job"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">John Smith <span>Android Developer</span></a>
                                                </h2>
                                            </td>
                                            <td><a href="{{url('job-details')}}">Android Developer</a></td>
                                            <td>Android</td>
                                            <td>3 Mar 2019</td>
                                            <td>31 May 2019</td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-one dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-danger"></i> Internship
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Full Time</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Part Time</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Internship</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Temporary</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Other</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-two dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-danger"></i> Cancelled
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Open</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Closed</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Cancelled</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><a href="javascript:void(0);" class="role-info role-bg-three"><i class="fa fa-download me-1"></i> Download</a></td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_job"><i class="far fa-trash-alt"></i></a>
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