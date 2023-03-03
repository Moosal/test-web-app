<?php $page="user-dashboard";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') User Job Dashboard @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') User Job Dashboard @endslot
@endcomponent 
@component('components.nav-content') 
@endcomponent

                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                            <div class="card flex-fill tickets-card">
                                <div class="card-header">
                                    <div class="text-center w-100 p-3">
                                        <h3 class="bl-text mb-1">112</h3>
                                        <h2>Offered</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                            <div class="card flex-fill tickets-card">
                                <div class="card-header">
                                    <div class="text-center w-100 p-3">
                                        <h3 class="bl-text mb-1">0</h3>
                                        <h2>Applied</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                            <div class="card flex-fill tickets-card">
                                <div class="card-header">
                                    <div class="text-center w-100 p-3">
                                        <h3 class="bl-text mb-1">0</h3>
                                        <h2>Visited</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                            <div class="card flex-fill tickets-card">
                                <div class="card-header">
                                    <div class="text-center w-100 p-3">
                                        <h3 class="bl-text mb-1">12</h3>
                                        <h2>Saved</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                
                    <div class="row">
                        <div class="col-md-12 jb-dashboard">
                            <div class="row">
                                <div class="col-md-7 text-center d-flex">
                                    <div class="card flex-fill">
                                        <div class="card-header">
                                            <h3 class="card-title">Profiles Overview</h3>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Last 6 months
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Last 6 months</a>
                                                    <a class="dropdown-item" href="#">Last 3 months</a>
                                                    <a class="dropdown-item" href="#">Last 1 months</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">                         
                                            <div id="chart22"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 d-flex">
                                    <div class="card flex-fill">
                                        <div class="card-header">
                                            <h3 class="card-title">Latest Jobs</h3>
                                        </div>

                                        <div class="card-body">
                                            <ul class="jb-info">
                                                <li class="row">
                                                    <div class="col-md-8">
                                                        <div class="jb-li-content">
                                                            <h3>UI Developer</h3>
                                                            <h5>Experience</h5>
                                                        </div>
                                                        <div class="jb-li-content mt-1">
                                                            <h6>1 hour Ago</h6>
                                                            <h2>9 years</h2>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 text-end">
                                                        <button class="btn btn-primary">Apply Now</button>
                                                    </div>
                                                </li>
                                                <li class="row">
                                                    <div class="col-md-8">
                                                        <div class="jb-li-content">
                                                            <h3>UI Developer</h3>
                                                            <h5>Experience</h5>
                                                        </div>
                                                        <div class="jb-li-content mt-1">
                                                            <h6>1 hour Ago</h6>
                                                            <h2>9 years</h2>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 text-end">
                                                        <button class="btn btn-primary">Apply Now</button>
                                                    </div>
                                                </li>
                                                <li class="row">
                                                    <div class="col-md-8">
                                                        <div class="jb-li-content">
                                                            <h3>UI Developer</h3>
                                                            <h5>Experience</h5>
                                                        </div>
                                                        <div class="jb-li-content mt-1">
                                                            <h6>1 hour Ago</h6>
                                                            <h2>9 years</h2>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 text-end">
                                                        <button class="btn btn-primary">Apply Now</button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                        
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-table">
                                <div class="card-header">
                                    <h3 class="card-title mb-0">Offered Jobs</h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-nowrap custom-table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Job Title</th>
                                                    <th>Department</th>
                                                    <th class="text-center">Job Type</th>
                                                    <th class="text-center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td><a href="{{url('job-details')}}">Web Developer</a></td>
                                                    <td>Development</td>
                                                    <td class="text-center">
                                                        <div class="action-label">
                                                            <a class="role-info role-bg-two" href="#">
                                                                <i class="fa fa-dot-circle-o text-danger"></i> Full Time
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="#" class="role-info role-bg-three download-offer"><span><i class="fa fa-download me-1"></i> Download Offer</span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td><a href="{{url('job-details')}}">Web Designer</a></td>
                                                    <td>Designing</td>
                                                    <td class="text-center">
                                                        <div class="action-label">
                                                            <a class="role-info role-bg-two" href="#">
                                                                <i class="fa fa-dot-circle-o text-success"></i> Part Time
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="#" class="role-info role-bg-three download-offer"><span><i class="fa fa-download me-1"></i> Download Offer</span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td><a href="{{url('job-details')}}">Android Developer</a></td>
                                                    <td>Android</td>
                                                    <td class="text-center">
                                                        <div class="action-label">
                                                            <a class="role-info role-bg-two" href="#">
                                                                <i class="fa fa-dot-circle-o text-danger"></i> Internship
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="#" class="role-info role-bg-three download-offer"><span><i class="fa fa-download me-1"></i> Download Offer</span></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
                                                
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-table mb-0">
                                <div class="card-header">
                                    <h3 class="card-title mb-0">Applied Jobs</h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-nowrap custom-table mb-0">
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
                                                            <a class="role-info role-bg-two" href="#">
                                                                <i class="fa fa-dot-circle-o text-danger"></i> Full Time
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="action-label">
                                                            <a class="role-info role-bg-one" href="#">
                                                                <i class="fa fa-dot-circle-o text-danger"></i> Open
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="text-end ico-sec">
                                                        <a href="#"><i class="fas fa-pen"></i></a>
                                                        <a href="#" ><i class="far fa-trash-alt"></i></a>
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
                                                            <a class="role-info role-bg-two" href="#">
                                                                <i class="fa fa-dot-circle-o text-success"></i> Part Time
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="action-label">
                                                            <a class="role-info role-bg-one" href="#">
                                                                <i class="fa fa-dot-circle-o text-success"></i> Closed
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="text-end ico-sec">
                                                        <a href="#"><i class="fas fa-pen"></i></a>
                                                        <a href="#"><i class="far fa-trash-alt"></i></a>
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
                                                            <a class="role-info role-bg-two" href="#">
                                                                <i class="fa fa-dot-circle-o text-danger"></i> Internship
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="action-label">
                                                            <a class="role-info role-bg-one" href="#">
                                                                <i class="fa fa-dot-circle-o text-danger"></i> Cancelled
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="text-end ico-sec">
                                                        <a href="#"><i class="fas fa-pen"></i></a>
                                                        <a href="#"><i class="far fa-trash-alt"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@section('script')  
    <!-- Apexchart JS -->
    <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js')}}"></script> 
    <script src="{{ URL::asset('/assets/js/pages/apex-chart.init.js')}}"></script>

@endsection                     

@endsection