<?php $page="project-list";?>
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
    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{url('assets/css/dataTables.bootstrap4.min.css')}}">
    <!-- Summernote CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/summernote/dist/summernote-bs4.css')}}">
@endsection
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table datatable">
                                    <thead>
                                        <tr>
                                            <th>Project</th>
                                            <th>Project Id</th>
                                            <th>Leader</th>
                                            <th>Team</th>
                                            <th>Deadline</th>
                                            <th>Priority</th>
                                            <th>Status</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="{{url('project-view')}}">Office Management</a>
                                            </td>
                                            <td>PRO-0001</td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}"></a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="team-members text-nowrap">
                                                    <li>
                                                        <a href="#" title="John Doe" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="John Smith" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Mike Litorus" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}"></a>
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
                                                                <a class="avatar avatar-xs" href="#">')}}
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
                                            </td>
                                            <td>17 Apr 2019 </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-two dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-three dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_project"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="{{url('project-view')}}">Project Management</a>
                                            </td>
                                            <td>PRO-0002</td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}"></a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" title="John Doe" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="John Smith" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Mike Litorus" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="all-users">+15</a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>17 Apr 2019 </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-two dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-warning"></i> Medium </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-three dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> Inactive </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_project"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="{{url('project-view')}}">Video Calling App</a>
                                            </td>
                                            <td>PRO-0003</td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}"></a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" title="John Doe" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="John Smith" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Mike Litorus" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="all-users">+15</a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>17 Apr 2019 </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-two dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Low </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-three dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_project"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="{{url('project-view')}}">Hospital Administration</a>
                                            </td>
                                            <td>PRO-0004</td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}"></a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" title="John Doe" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="John Smith" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Mike Litorus" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="all-users">+15</a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>17 Apr 2019 </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-two dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-three dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_project"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="{{url('project-view')}}">Office Management</a>
                                            </td>
                                            <td>PRO-0005</td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}"></a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" title="John Doe" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="John Smith" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Mike Litorus" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="all-users">+15</a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>17 Apr 2019 </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-two dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-three dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_project"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="{{url('project-view')}}">Project Management</a>
                                            </td>
                                            <td>PRO-0006</td>')}}
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}"></a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" title="John Doe" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="John Smith" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Mike Litorus" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="all-users">+15</a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>17 Apr 2019 </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-two dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-three dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_project"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="{{url('project-view')}}">Video Calling App</a>
                                            </td>
                                            <td>PRO-0007</td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}"></a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" title="John Doe" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="John Smith" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Mike Litorus" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="all-users">+15</a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>17 Apr 2019 </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-two dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-three dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_project"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="{{url('project-view')}}">Hospital Administration</a>
                                            </td>
                                            <td>PRO-0008</td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}"></a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" title="John Doe" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="John Smith" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Mike Litorus" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="all-users">+15</a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>17 Apr 2019 </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-two dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-three dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_project"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="{{url('project-view')}}">Office Management</a>
                                            </td>
                                            <td>PRO-0009</td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}"></a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" title="John Doe" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="John Smith" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Mike Litorus" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="all-users">+15</a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>17 Apr 2019 </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-two dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-three dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_project"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="{{url('project-view')}}">Project Management</a>
                                            </td>
                                            <td>PRO-0010</td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}"></a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" title="John Doe" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="John Smith" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Mike Litorus" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="all-users">+15</a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>17 Apr 2019 </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-two dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-three dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_project"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="{{url('project-view')}}">Video Calling App</a>
                                            </td>
                                            <td>PRO-0011</td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}"></a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" title="John Doe" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="John Smith" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Mike Litorus" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="all-users">+15</a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>17 Apr 2019 </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-two dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-three dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_project"><i class="far fa-trash-alt"></i></a>
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
    <!-- Summernote Core JS -->
    <script src="{{ URL::asset('/assets/libs/summernote/dist/summernote-bs4.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/pages/summernote.init.js')}}"></script>
@endsection  
@endsection