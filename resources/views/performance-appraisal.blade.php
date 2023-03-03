<?php $page="performance-appraisal";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Performance Appraisal @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Performance Appraisal @endslot
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
                                            <th>Employee</th>
                                            <th>Designation</th>
                                            <th>Department</th>
                                            <th>Appraisal Date</th>
                                            <th>Status</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">John Doe </a>
                                                </h2>
                                            </td>
                                            <td>Web Designer </td>
                                            <td>Designing</td>
                                            <td>
                                                7 May 2019
                                            </td>
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
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_appraisal"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_appraisal"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">Mike Litorus </a>
                                                </h2>
                                            </td>
                                            <td>IOS Developer </td>
                                            <td>IOS</td>
                                            <td>
                                                7 May 2019
                                            </td>
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
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_appraisal"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_appraisal"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-13.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">Bernardo Galaviz </a>
                                                </h2>
                                            </td>
                                            <td>Web Developer </td>
                                            <td>Designing</td>
                                            <td>
                                                7 May 2019
                                            </td>
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
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_appraisal"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_appraisal"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-12.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">Jeffrey Warden </a>
                                                </h2>
                                            </td>
                                            <td>Web Developer </td>
                                            <td>Designing</td>
                                            <td>
                                                7 May 2019
                                            </td>
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
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_appraisal"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_appraisal"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-11.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">Wilmer Deluna </a>
                                                </h2>
                                            </td>
                                            <td>Team Leader </td>
                                            <td>IOS</td>
                                            <td>
                                                7 May 2019
                                            </td>
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
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_appraisal"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_appraisal"><i class="far fa-trash-alt"></i></a>
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