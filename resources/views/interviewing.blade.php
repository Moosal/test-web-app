<?php $page="interviewing";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Interviewing @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Interviewing @endslot
@endcomponent 
@component('components.nav-content') 
@endcomponent
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card nav-vert">
                                <div class="card-body">
                                <ul class="nav nav-tabs nav-tabs-solid nav-justified flex-column">
                                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="{{url('#home')}}">Apptitude</a></li>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="{{url('#menu1')}}">Schedule Interview</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div id="home" class="tab-pane show active">
                                        <div class="card-box">
                                            <div class="table-responsive">
                                                <table class="table table-striped custom-table mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Job Title</th>
                                                            <th>Department</th>
                                                            <th class="text-center">Job Type</th>
                                                            <th class="text-center">Aptitude Test</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td><a href="#">Web Developer</a></td>
                                                            <td>Development</td>
                                                            <td class="text-center">
                                                                <div class="action-label">
                                                                    <a class="role-info role-bg-one" href="#">
                                                                    <i class="fa fa-dot-circle-o text-danger"></i> Full Time
                                                                    </a>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="{{url('job-aptitude')}}" class="role-info role-bg-two aptitude-btn"><span>Click Here</span></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td><a href="#">Web Developer</a></td>
                                                            <td>Development</td>
                                                            <td class="text-center">
                                                                <div class="action-label">
                                                                    <a class="role-info role-bg-one" href="#">
                                                                    <i class="fa fa-dot-circle-o text-warning"></i> Part Time
                                                                    </a>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="{{url('job-aptitude')}}" class="role-info role-bg-two aptitude-btn"><span>Click Here</span></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td><a href="#">Web Designing</a></td>
                                                            <td>Development</td>
                                                            <td class="text-center">
                                                                <div class="action-label">
                                                                    <a class="role-info role-bg-one" href="#">
                                                                    <i class="fa fa-dot-circle-o text-warning"></i> Part Time
                                                                    </a>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="{{url('job-aptitude')}}" class="role-info role-bg-two aptitude-btn"><span>Click Here</span></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="menu1" class="tab-pane fade">
                                        <div class="card-box">
                                            <div class="table-responsive">
                                                <table class="table table-striped custom-table mb-0 datatable">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Job Title</th>
                                                            <th>Department</th>
                                                            <th class="text-center">Job Type</th>
                                                            <th class="text-center">Aptitude Test</th>
                                                            <th class="text-center">Schedule Interview</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td><a href="#">Web Developer</a></td>
                                                            <td>Development</td>
                                                            <td class="text-center">
                                                                <div class="action-label">
                                                                    <a class="role-info role-bg-one" href="#">
                                                                    <i class="fa fa-dot-circle-o text-danger"></i> Full Time
                                                                    </a>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="javascript:void(0);" class="role-info role-bg-two disabled"><span>Selected</span></a>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="javascript:void(0);" class="role-info role-bg-three aptitude-btn" data-bs-toggle="modal" data-bs-target="#selectMyTime"><span>Select Your Time Here</span></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td><a href="#">Web Designing</a></td>
                                                            <td>Development</td>
                                                            <td class="text-center">
                                                                <div class="action-label">
                                                                    <a class="role-info role-bg-one" href="#">
                                                                    <i class="fa fa-dot-circle-o text-warning"></i> Part Time
                                                                    </a>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="javascript:void(0);" class="role-info role-bg-two disabled"><span>Selected</span></a>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="javascript:void(0);" class="role-info role-bg-three aptitude-btn" data-bs-toggle="modal" data-bs-target="#selectMyTime"><span>Select Your Time Here</span></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td><a href="#">Web Developer</a></td>
                                                            <td>Development</td>
                                                            <td class="text-center">
                                                                <div class="action-label">
                                                                    <a class="role-info role-bg-one" href="#">
                                                                    <i class="fa fa-dot-circle-o text-warning"></i> Part Time
                                                                    </a>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="javascript:void(0);" class="role-info role-bg-two disabled"><span>Selected</span></a>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="javascript:void(0);" class="role-info role-bg-three aptitude-btn" data-bs-toggle="modal" data-bs-target="#selectMyTime"><span>Select Your Time Here</span></a>
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
                    <!-- /Content End -->
               
@endsection