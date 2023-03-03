<?php $page="training";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Training @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Training @endslot
@endcomponent 
@component('components.search-filder') 
    @slot('title') Add New @endslot
@endcomponent   
@section('css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/select2/select2.min.css')}}">
    <!-- Datepicker CSS -->
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
                                            <th>Training Type</th>
                                            <th>Trainer</th>
                                            <th>Employee</th>
                                            <th>Time Duration</th>
                                            <th>Description </th>
                                            <th>Cost </th>
                                            <th>Status </th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Git Training</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">John Doe </a>
                                                </h2>
                                            </td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" title="Bernardo Galaviz" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}"></a>
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
                                            </td>
                                            <td>7 May 2019 - 10 May 2019</td>
                                            <td>Lorem ipsum dollar</td>
                                            <td>$400</td>
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
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_training"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_training"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Swift Training</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">Richard Miles</a>
                                                </h2>
                                            </td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" title="John Doe" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}"></a>
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
                                            </td>
                                            <td>7 May 2019 - 10 May 2019</td>
                                            <td>Lorem ipsum dollar</td>
                                            <td>$800</td>
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
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_training"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_training"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Node Training</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">John Doe </a>
                                                </h2>
                                            </td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" title="Bernardo Galaviz" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}"></a>
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
                                            </td>
                                            <td>7 May 2019 - 10 May 2019</td>
                                            <td>Lorem ipsum dollar</td>
                                            <td>$400</td>
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
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_training"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_training"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Angular Training</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">Mike Litorus </a>
                                                </h2>
                                            </td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" title="Bernardo Galaviz" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}"></a>
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
                                            </td>
                                            <td>7 May 2019 - 10 May 2019</td>
                                            <td>Lorem ipsum dollar</td>
                                            <td>$400</td>
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
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_training"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_training"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Git Training</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-11.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">Wilmer Deluna </a>
                                                </h2>
                                            </td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" title="Bernardo Galaviz" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}"></a>
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
                                            </td>
                                            <td>7 May 2019 - 10 May 2019</td>
                                            <td>Lorem ipsum dollar</td>
                                            <td>$400</td>
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
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_training"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_training"><i class="far fa-trash-alt"></i></a>
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