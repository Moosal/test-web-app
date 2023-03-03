<?php $page="projects";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Projects @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Projects @endslot
@endcomponent
@component('components.search-filder') 
    @slot('title') Create Project @endslot
    @slot('li_1') Project Name @endslot
    @slot('li_2') Employee Name @endslot
@endcomponent
@section('css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
    <!-- Summernote CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/summernote/dist/summernote-bs4.css')}}">
@endsection
                    
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 col-md-3">
                            <div class="card project-card-det">
                                <div class="card-header">
                                    <div class="dropdown dropdown-action profile-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="media d-flex">
                                        <span class="avatar flex-shrink-0">
                                            <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="...">
                                        </span>
                                        <div class="media-body flex-grow-1">
                                            <h4 class="project-title"><a href="{{url('project-view')}}">Video Calling App</a></h4>
                                            <h6 class="project-text">3 open tasks, 3 tasks completed</h6>
                                        </div>
                                    </div>
                                    <p class="project-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled it...</p>
                                    <ul class="cost-li">
                                        <li>
                                            <h5>Cost</h5>
                                            <h6>$1200</h6>
                                        </li>
                                        <li>
                                            <h5>Deadline</h5>
                                            <h6>29 Jun, 2020</h6>
                                        </li>
                                    </ul>
                                    <ul class="team-li">
                                        <li>
                                            <h5>Project Leader</h5>
                                            <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}"></a>
                                        </li>
                                        <li>
                                            <h5>Team</h5>
                                            <ul class="team-members">
                                                <li>
                                                    <a href="#" data-bs-toggle="tooltip" title="John Doe"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                </li>
                                                <li>
                                                    <a href="#" data-bs-toggle="tooltip" title="Mike Litorus"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}"></a>
                                                </li>
                                                <li class="dropdown avatar-dropdown">
                                                    <a href="#" class="all-users dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">+15</a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <div class="avatar-group">
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-11.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-12.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-13.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-pagination">
                                                            <ul class="pagination">
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Previous">
                                                                        <span aria-hidden="true">«</span>
                                                                        <span class="visually-hidden">Previous</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Next">
                                                                        <span aria-hidden="true">»</span>
                                                                    <span class="visually-hidden">Next</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>

                                    <p class="m-b-5 mt-4">Progress <span class="text-blue float-end">40%</span></p>
                                    <div class="progress progress-sm mb-0">
                                        <div class="progress-bar bg-blue" role="progressbar" data-bs-toggle="tooltip" title="40%" style="width: 40%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-sm-6 col-md-3">
                            <div class="card project-card-det">
                                <div class="card-header">
                                    <div class="dropdown dropdown-action profile-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="media d-flex">
                                        <span class="avatar flex-shrink-0">
                                            <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="...">
                                        </span>
                                        <div class="media-body flex-grow-1">
                                            <h4 class="project-title"><a href="{{url('project-view')}}">Video Calling App</a></h4>
                                            <h6 class="project-text">3 open tasks, 3 tasks completed</h6>
                                        </div>
                                    </div>
                                    <p class="project-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled it...</p>
                                    <ul class="cost-li">
                                        <li>
                                            <h5>Cost</h5>
                                            <h6>$1200</h6>
                                        </li>
                                        <li>
                                            <h5>Deadline</h5>
                                            <h6>29 Jun, 2020</h6>
                                        </li>
                                    </ul>
                                    <ul class="team-li">
                                        <li>
                                            <h5>Project Leader</h5>
                                            <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}"></a>
                                        </li>
                                        <li>
                                            <h5>Team</h5>
                                            <ul class="team-members">
                                                <li>
                                                    <a href="#" data-bs-toggle="tooltip" title="John Doe"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                </li>
                                                <li>
                                                    <a href="#" data-bs-toggle="tooltip" title="Mike Litorus"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}"></a>
                                                </li>
                                                <li class="dropdown avatar-dropdown">
                                                    <a href="#" class="all-users dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">+15</a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <div class="avatar-group">
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-11.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-12.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-13.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-pagination">
                                                            <ul class="pagination">
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Previous">
                                                                        <span aria-hidden="true">«</span>
                                                                        <span class="visually-hidden">Previous</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Next">
                                                                        <span aria-hidden="true">»</span>
                                                                    <span class="visually-hidden">Next</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>

                                    <p class="m-b-5 mt-4">Progress <span class="text-blue float-end">40%</span></p>
                                    <div class="progress progress-sm mb-0">
                                        <div class="progress-bar bg-blue" role="progressbar" data-bs-toggle="tooltip" title="40%" style="width: 40%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 col-md-3">
                            <div class="card project-card-det">
                                <div class="card-header">
                                    <div class="dropdown dropdown-action profile-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="media d-flex">
                                        <span class="avatar flex-shrink-0">
                                            <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="...">
                                        </span>
                                        <div class="media-body flex-grow-1">
                                            <h4 class="project-title"><a href="{{url('project-view')}}">Video Calling App</a></h4>
                                            <h6 class="project-text">3 open tasks, 3 tasks completed</h6>
                                        </div>
                                    </div>
                                    <p class="project-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled it...</p>
                                    <ul class="cost-li">
                                        <li>
                                            <h5>Cost</h5>
                                            <h6>$1200</h6>
                                        </li>
                                        <li>
                                            <h5>Deadline</h5>
                                            <h6>29 Jun, 2020</h6>
                                        </li>
                                    </ul>
                                    <ul class="team-li">
                                        <li>
                                            <h5>Project Leader</h5>
                                            <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}"></a>
                                        </li>
                                        <li>
                                            <h5>Team</h5>
                                            <ul class="team-members">
                                                <li>
                                                    <a href="#" data-bs-toggle="tooltip" title="John Doe"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                </li>
                                                <li>
                                                    <a href="#" data-bs-toggle="tooltip" title="Mike Litorus"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}"></a>
                                                </li>
                                                <li class="dropdown avatar-dropdown">
                                                    <a href="#" class="all-users dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">+15</a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <div class="avatar-group">
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-11.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-12.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-13.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-pagination">
                                                            <ul class="pagination">
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Previous">
                                                                        <span aria-hidden="true">«</span>
                                                                        <span class="visually-hidden">Previous</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Next">
                                                                        <span aria-hidden="true">»</span>
                                                                    <span class="visually-hidden">Next</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>

                                    <p class="m-b-5 mt-4">Progress <span class="text-blue float-end">40%</span></p>
                                    <div class="progress progress-sm mb-0">
                                        <div class="progress-bar bg-blue" role="progressbar" data-bs-toggle="tooltip" title="40%" style="width: 40%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 col-md-3">
                            <div class="card project-card-det">
                                <div class="card-header">
                                    <div class="dropdown dropdown-action profile-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="media d-flex">
                                        <span class="avatar flex-shrink-0">
                                            <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="...">
                                        </span>
                                        <div class="media-body flex-grow-1">
                                            <h4 class="project-title"><a href="{{url('project-view')}}">Video Calling App</a></h4>
                                            <h6 class="project-text">3 open tasks, 3 tasks completed</h6>
                                        </div>
                                    </div>
                                    <p class="project-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled it...</p>
                                    <ul class="cost-li">
                                        <li>
                                            <h5>Cost</h5>
                                            <h6>$1200</h6>
                                        </li>
                                        <li>
                                            <h5>Deadline</h5>
                                            <h6>29 Jun, 2020</h6>
                                        </li>
                                    </ul>
                                    <ul class="team-li">
                                        <li>
                                            <h5>Project Leader</h5>
                                            <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}"></a>
                                        </li>
                                        <li>
                                            <h5>Team</h5>
                                            <ul class="team-members">
                                                <li>
                                                    <a href="#" data-bs-toggle="tooltip" title="John Doe"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                </li>
                                                <li>
                                                    <a href="#" data-bs-toggle="tooltip" title="Mike Litorus"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}"></a>
                                                </li>
                                                <li class="dropdown avatar-dropdown">
                                                    <a href="#" class="all-users dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">+15</a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <div class="avatar-group">
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-11.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-12.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-13.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-pagination">
                                                            <ul class="pagination">
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Previous">
                                                                        <span aria-hidden="true">«</span>
                                                                        <span class="visually-hidden">Previous</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Next">
                                                                        <span aria-hidden="true">»</span>
                                                                    <span class="visually-hidden">Next</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>

                                    <p class="m-b-5 mt-4">Progress <span class="text-blue float-end">40%</span></p>
                                    <div class="progress progress-sm mb-0">
                                        <div class="progress-bar bg-blue" role="progressbar" data-bs-toggle="tooltip" title="40%" style="width: 40%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 col-md-3">
                            <div class="card project-card-det">
                                <div class="card-header">
                                    <div class="dropdown dropdown-action profile-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="media d-flex">
                                        <span class="avatar flex-shrink-0">
                                            <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="...">
                                        </span>
                                        <div class="media-body flex-grow-1">
                                            <h4 class="project-title"><a href="{{url('project-view')}}">Video Calling App</a></h4>
                                            <h6 class="project-text">3 open tasks, 3 tasks completed</h6>
                                        </div>
                                    </div>
                                    <p class="project-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled it...</p>
                                    <ul class="cost-li">
                                        <li>
                                            <h5>Cost</h5>
                                            <h6>$1200</h6>
                                        </li>
                                        <li>
                                            <h5>Deadline</h5>
                                            <h6>29 Jun, 2020</h6>
                                        </li>
                                    </ul>
                                    <ul class="team-li">
                                        <li>
                                            <h5>Project Leader</h5>
                                            <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}"></a>
                                        </li>
                                        <li>
                                            <h5>Team</h5>
                                            <ul class="team-members">
                                                <li>
                                                    <a href="#" data-bs-toggle="tooltip" title="John Doe"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                </li>
                                                <li>
                                                    <a href="#" data-bs-toggle="tooltip" title="Mike Litorus"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}"></a>
                                                </li>
                                                <li class="dropdown avatar-dropdown">
                                                    <a href="#" class="all-users dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">+15</a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <div class="avatar-group">
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-11.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-12.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-13.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-pagination">
                                                            <ul class="pagination">
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Previous">
                                                                        <span aria-hidden="true">«</span>
                                                                        <span class="visually-hidden">Previous</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Next">
                                                                        <span aria-hidden="true">»</span>
                                                                    <span class="visually-hidden">Next</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>

                                    <p class="m-b-5 mt-4">Progress <span class="text-blue float-end">40%</span></p>
                                    <div class="progress progress-sm mb-0">
                                        <div class="progress-bar bg-blue" role="progressbar" data-bs-toggle="tooltip" title="40%" style="width: 40%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 col-md-3">
                            <div class="card project-card-det">
                                <div class="card-header">
                                    <div class="dropdown dropdown-action profile-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="media d-flex">
                                        <span class="avatar flex-shrink-0">
                                            <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="...">
                                        </span>
                                        <div class="media-body flex-grow-1">
                                            <h4 class="project-title"><a href="{{url('project-view')}}">Video Calling App</a></h4>
                                            <h6 class="project-text">3 open tasks, 3 tasks completed</h6>
                                        </div>
                                    </div>
                                    <p class="project-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled it...</p>
                                    <ul class="cost-li">
                                        <li>
                                            <h5>Cost</h5>
                                            <h6>$1200</h6>
                                        </li>
                                        <li>
                                            <h5>Deadline</h5>
                                            <h6>29 Jun, 2020</h6>
                                        </li>
                                    </ul>
                                    <ul class="team-li">
                                        <li>
                                            <h5>Project Leader</h5>
                                            <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}"></a>
                                        </li>
                                        <li>
                                            <h5>Team</h5>
                                            <ul class="team-members">
                                                <li>
                                                    <a href="#" data-bs-toggle="tooltip" title="John Doe"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                </li>
                                                <li>
                                                    <a href="#" data-bs-toggle="tooltip" title="Mike Litorus"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}"></a>
                                                </li>
                                                <li class="dropdown avatar-dropdown">
                                                    <a href="#" class="all-users dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">+15</a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <div class="avatar-group">
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-11.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-12.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-13.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg')}}">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-pagination">
                                                            <ul class="pagination">
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Previous">
                                                                        <span aria-hidden="true">«</span>
                                                                        <span class="visually-hidden">Previous</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Next">
                                                                        <span aria-hidden="true">»</span>
                                                                    <span class="visually-hidden">Next</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>

                                    <p class="m-b-5 mt-4">Progress <span class="text-blue float-end">40%</span></p>
                                    <div class="progress progress-sm mb-0">
                                        <div class="progress-bar bg-blue" role="progressbar" data-bs-toggle="tooltip" title="40%" style="width: 40%"></div>
                                    </div>
                                </div>
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
    <!-- Summernote Core JS -->
    <script src="{{ URL::asset('/assets/libs/summernote/dist/summernote-bs4.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/pages/summernote.init.js')}}"></script>
@endsection         
@endsection