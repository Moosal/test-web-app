<?php $page="saved-jobs";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Saved Jobs @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Saved Jobs @endslot
@endcomponent 
@component('components.nav-content') 
@endcomponent
@component('components.search-filder') 
@endcomponent
@section('css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/select2/select2.min.css')}}">
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
                                            <th>Job Title</th>
                                            <th>Department</th>
                                            <th>Start Date</th>
                                            <th>Expire Date</th>
                                            <th class="text-center">Job Type</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Actions</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="{{url('job-details')}}">Web Developer</a></td>
                                            <td>Development</td>
                                            <td>3 Mar 2019</td>
                                            <td>31 May 2019</td>
                                            <td class="text-center">
                                                <div class="action-label">
                                                    <a class="role-info role-bg-two" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-danger"></i> Full Time
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="action-label">
                                                    <a class="role-info role-bg-one" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-danger"></i> Open
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_employee"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><a href="{{url('job-details')}}">Web Designer</a></td>
                                            <td>Designing</td>
                                            <td>3 Mar 2019</td>
                                            <td>31 May 2019</td>
                                            <td class="text-center">
                                                <div class="action-label">
                                                    <a class="role-info role-bg-two" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-success"></i> Part Time
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="action-label">
                                                    <a class="role-info role-bg-one" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-success"></i> Closed
                                                    </a>
                                                    
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_employee"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><a href="{{url('job-details')}}">Android Developer</a></td>
                                            <td>Android</td>
                                            <td>3 Mar 2019</td>
                                            <td>31 May 2019</td>
                                            <td class="text-center">
                                                <div class="action-label">
                                                    <a class="role-info role-bg-two" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-danger"></i> Internship
                                                    </a>
                                                    
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="action-label">
                                                    <a class="role-info role-bg-one" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-danger"></i> Cancelled
                                                    </a>
                                                    
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_employee"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@section('script')        
    <!-- Select2 JS -->
    <script src="{{ URL::asset('/assets/libs/select2/select2.min.js')}}"></script>   
    <script src="{{ URL::asset('/assets/js/pages/select2.init.js')}}"></script>
    <!-- Datatable JS -->
    <script src="{{ URL::asset('/assets/js/jquery.dataTables.min.js')}}"></script> 
    <script src="{{ URL::asset('/assets/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/pages/datatable.init.js')}}"></script>
@endsection             
                

@endsection