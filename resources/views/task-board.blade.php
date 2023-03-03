<?php $page="task-board";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Task Board @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Task Board @endslot
@endcomponent 
@section('css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/select2/select2.min.css')}}">
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
@endsection 

                    <div class="row board-view-header">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-6 col-md-5">
                                    <div class="form-group form-focus select-focus mb-0">
                                        <select class="select floating"> 
                                            <option>Select Roll</option>
                                            <option>Web Developer</option>
                                            <option>Web Designer</option>
                                            <option>Android Developer</option>
                                            <option>Ios Developer</option>
                                        </select>
                                        <label class="focus-label">Designation</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-7">
                                    <div class="pro-progress">
                                        <div class="pro-progress-bar">
                                            <h4>
                                                <span>20%</span>
                                                Progress
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 20%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                          
                        </div>

                        <div class="col-md-6">
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <div class="pro-team-lead">
                                        <h4>Team Leader</h4>
                                        <div class="avatar-group">                                          
                                            <div class="avatar">
                                                <img class="avatar-img rounded-circle border border-white" alt="User Image" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}">
                                            </div>
                                            <div class="avatar">
                                                <a href="" class="avatar-title rounded-circle border border-white" data-bs-toggle="modal" data-bs-target="#assign_leader"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pro-team-lead">
                                        <h4>Team Leader</h4>
                                        <div class="avatar-group">                                          
                                            <div class="avatar">
                                                <img class="avatar-img rounded-circle border border-white" alt="User Image" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}">
                                            </div>
                                            <div class="avatar">
                                                <a href="" class="avatar-title rounded-circle border border-white" data-bs-toggle="modal" data-bs-target="#assign_leader"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1 text-end">
                                    <a href="#">
                                        <i class="far fa-eye"></i>
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <div class="add-emp-section">
                                        <a href="#" class="btn btn-success btn-add-emp" data-bs-toggle="modal" data-bs-target="#add_task_board">Create</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="kanban-board card mb-0">
                        <div class="card-body">
                            <div class="kanban-cont">
                                <div class="kanban-list kanban-danger">
                                    <div class="kanban-header">
                                        <span class="status-title">Pending</span>
                                        <div class="dropdown kanban-action">
                                            <a href="" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_task_board">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kanban-wrap">
                                        <div class="card panel">
                                            <div class="kanban-box">
                                                <div class="task-board-top">
                                                    <span><i class="fas fa-vector-square"></i> Design</span>
                                                    <span><i class="far fa-calendar"></i> 16 Mar 2021</span>
                                                </div>
                                                <div class="task-board-header">
                                                    <span class="status-title"><a href="{{url('task-view')}}">Simple Admin Dashboard Template Design</a></span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim a, senectus morbi orci at id morbi turpis. Scelerisque volutpat mauris</p>
                                                </div>
                                                <div class="task-board-body">
                                                    <div class="kanban-info">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="kanban-footer mt-4">
                                                        <span class="task-info-cont">
                                                            <span class="task-priority badge bg-inverse-primary"><i class="fas fa-circle"></i> Medium</span>
                                                        </span>
                                                        <div class="avatar-group">
                                                            <div class="avatar">
                                                                <img class="avatar-img rounded-circle border border-white" alt="User Image" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}">
                                                            </div>
                                                            <div class="avatar">
                                                                <a href="" class="avatar-title rounded-circle border border-white" data-bs-toggle="modal" data-bs-target="#assign_leader"><i class="fa fa-plus"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card panel">
                                            <div class="kanban-box">
                                                <div class="task-board-top">
                                                    <span><i class="fas fa-vector-square"></i> Design</span>
                                                    <span><i class="far fa-calendar"></i> 16 Mar 2021</span>
                                                </div>
                                                <div class="task-board-header">
                                                    <span class="status-title"><a href="{{url('task-view')}}">Simple Admin Dashboard Template Design</a></span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim a, senectus morbi orci at id morbi turpis. Scelerisque volutpat mauris</p>
                                                </div>
                                                <div class="task-board-body">
                                                    <div class="kanban-info">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="kanban-footer mt-4">
                                                        <span class="task-info-cont">
                                                            <span class="task-priority badge bg-inverse-primary"><i class="fas fa-circle"></i> Medium</span>
                                                        </span>
                                                        <div class="avatar-group">
                                                            <div class="avatar">
                                                                <img class="avatar-img rounded-circle border border-white" alt="User Image" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}">
                                                            </div>
                                                            <div class="avatar">
                                                                <a href="" class="avatar-title rounded-circle border border-white" data-bs-toggle="modal" data-bs-target="#assign_leader"><i class="fa fa-plus"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card panel">
                                            <div class="kanban-box">
                                                <div class="task-board-top">
                                                    <span><i class="fas fa-vector-square"></i> Design</span>
                                                    <span><i class="far fa-calendar"></i> 16 Mar 2021</span>
                                                </div>
                                                <div class="task-board-header">
                                                    <span class="status-title"><a href="{{url('task-view')}}">Simple Admin Dashboard Template Design</a></span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim a, senectus morbi orci at id morbi turpis. Scelerisque volutpat mauris</p>
                                                </div>
                                                <div class="task-board-body">
                                                    <div class="kanban-info">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="kanban-footer mt-4">
                                                        <span class="task-info-cont">
                                                            <span class="task-priority badge bg-inverse-primary"><i class="fas fa-circle"></i> Medium</span>
                                                        </span>
                                                        <div class="avatar-group">
                                                            <div class="avatar">
                                                                <img class="avatar-img rounded-circle border border-white" alt="User Image" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}">
                                                            </div>
                                                            <div class="avatar">
                                                                <a href="" class="avatar-title rounded-circle border border-white" data-bs-toggle="modal" data-bs-target="#assign_leader"><i class="fa fa-plus"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="add-new-task">
                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add_task_modal">Add New Task</a>
                                    </div>
                                </div>
                                <div class="kanban-list kanban-info">
                                    <div class="kanban-header">
                                        <span class="status-title">Progress</span>
                                        <div class="dropdown kanban-action">
                                            <a href="" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_task_board">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kanban-wrap">
                                        <div class="card panel">
                                            <div class="kanban-box">
                                                <div class="task-board-top">
                                                    <span><i class="fas fa-vector-square"></i> Design</span>
                                                    <span><i class="far fa-calendar"></i> 16 Mar 2021</span>
                                                </div>
                                                <div class="task-board-header">
                                                    <span class="status-title"><a href="{{url('task-view')}}">Simple Admin Dashboard Template Design</a></span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim a, senectus morbi orci at id morbi turpis. Scelerisque volutpat mauris</p>
                                                </div>
                                                <div class="task-board-body">
                                                    <div class="kanban-info">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="kanban-footer mt-4">
                                                        <span class="task-info-cont">
                                                            <span class="task-priority badge bg-inverse-primary"><i class="fas fa-circle"></i> Medium</span>
                                                        </span>
                                                        <div class="avatar-group">
                                                            <div class="avatar">
                                                                <img class="avatar-img rounded-circle border border-white" alt="User Image" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}">
                                                            </div>
                                                            <div class="avatar">
                                                                <a href="" class="avatar-title rounded-circle border border-white" data-bs-toggle="modal" data-bs-target="#assign_leader"><i class="fa fa-plus"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card panel">
                                            <div class="kanban-box">
                                                <div class="task-board-top">
                                                    <span><i class="fas fa-vector-square"></i> Design</span>
                                                    <span><i class="far fa-calendar"></i> 16 Mar 2021</span>
                                                </div>
                                                <div class="task-board-header">
                                                    <span class="status-title"><a href="{{url('task-view')}}">Simple Admin Dashboard Template Design</a></span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim a, senectus morbi orci at id morbi turpis. Scelerisque volutpat mauris</p>
                                                </div>
                                                <div class="task-board-body">
                                                    <div class="kanban-info">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="kanban-footer mt-4">
                                                        <span class="task-info-cont">
                                                            <span class="task-priority badge bg-inverse-primary"><i class="fas fa-circle"></i> Medium</span>
                                                        </span>
                                                        <div class="avatar-group">
                                                            <div class="avatar">
                                                                <img class="avatar-img rounded-circle border border-white" alt="User Image" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}">
                                                            </div>
                                                            <div class="avatar">
                                                                <a href="" class="avatar-title rounded-circle border border-white" data-bs-toggle="modal" data-bs-target="#assign_leader"><i class="fa fa-plus"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="add-new-task">
                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add_task_modal">Add New Task</a>
                                    </div>
                                </div>
                                <div class="kanban-list kanban-success">
                                    <div class="kanban-header">
                                        <span class="status-title">Completed</span>
                                        <div class="dropdown kanban-action">
                                            <a href="" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_task_board">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kanban-wrap ks-empty">
                                        <div class="card panel">
                                            <div class="kanban-box">
                                                <div class="task-board-top">
                                                    <span><i class="fas fa-vector-square"></i> Design</span>
                                                    <span><i class="far fa-calendar"></i> 16 Mar 2021</span>
                                                </div>
                                                <div class="task-board-header">
                                                    <span class="status-title"><a href="{{url('task-view')}}">Simple Admin Dashboard Template Design</a></span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim a, senectus morbi orci at id morbi turpis. Scelerisque volutpat mauris</p>
                                                </div>
                                                <div class="task-board-body">
                                                    <div class="kanban-info">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="kanban-footer mt-4">
                                                        <span class="task-info-cont">
                                                            <span class="task-priority badge bg-inverse-primary"><i class="fas fa-circle"></i> Medium</span>
                                                        </span>
                                                        <div class="avatar-group">
                                                            <div class="avatar">
                                                                <img class="avatar-img rounded-circle border border-white" alt="User Image" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}">
                                                            </div>
                                                            <div class="avatar">
                                                                <a href="" class="avatar-title rounded-circle border border-white" data-bs-toggle="modal" data-bs-target="#assign_leader"><i class="fa fa-plus"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="add-new-task">
                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add_task_modal">Add New Task</a>
                                    </div>
                                </div>
                                
                                <div class="kanban-list kanban-warning">
                                    <div class="kanban-header">
                                        <span class="status-title">Inprogress</span>
                                        <div class="dropdown kanban-action">
                                            <a href="" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kanban-wrap">
                                        <div class="card panel">
                                            <div class="kanban-box">
                                                <div class="task-board-top">
                                                    <span><i class="fas fa-vector-square"></i> Design</span>
                                                    <span><i class="far fa-calendar"></i> 16 Mar 2021</span>
                                                </div>
                                                <div class="task-board-header">
                                                    <span class="status-title"><a href="{{url('task-view')}}">Simple Admin Dashboard Template Design</a></span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim a, senectus morbi orci at id morbi turpis. Scelerisque volutpat mauris</p>
                                                </div>
                                                <div class="task-board-body">
                                                    <div class="kanban-info">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="kanban-footer mt-4">
                                                        <span class="task-info-cont">
                                                            <span class="task-priority badge bg-inverse-primary"><i class="fas fa-circle"></i> Medium</span>
                                                        </span>
                                                        <div class="avatar-group">
                                                            <div class="avatar">
                                                                <img class="avatar-img rounded-circle border border-white" alt="User Image" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}">
                                                            </div>
                                                            <div class="avatar">
                                                                <a href="" class="avatar-title rounded-circle border border-white" data-bs-toggle="modal" data-bs-target="#assign_leader"><i class="fa fa-plus"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="add-new-task">
                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add_task_modal">Add New Task</a>
                                    </div>
                                </div>
                                
                                <div class="kanban-list kanban-purple">
                                    <div class="kanban-header">
                                        <span class="status-title">On Hold</span>
                                        <div class="dropdown kanban-action">
                                            <a href="" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_task_board">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kanban-wrap">
                                        <div class="card panel">
                                            <div class="kanban-box">
                                                <div class="task-board-top">
                                                    <span><i class="fas fa-vector-square"></i> Design</span>
                                                    <span><i class="far fa-calendar"></i> 16 Mar 2021</span>
                                                </div>
                                                <div class="task-board-header">
                                                    <span class="status-title"><a href="{{url('task-view')}}">Simple Admin Dashboard Template Design</a></span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim a, senectus morbi orci at id morbi turpis. Scelerisque volutpat mauris</p>
                                                </div>
                                                <div class="task-board-body">
                                                    <div class="kanban-info">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="kanban-footer mt-4">
                                                        <span class="task-info-cont">
                                                            <span class="task-priority badge bg-inverse-primary"><i class="fas fa-circle"></i> Medium</span>
                                                        </span>
                                                        <div class="avatar-group">
                                                            <div class="avatar">
                                                                <img class="avatar-img rounded-circle border border-white" alt="User Image" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}">
                                                            </div>
                                                            <div class="avatar">
                                                                <a href="" class="avatar-title rounded-circle border border-white" data-bs-toggle="modal" data-bs-target="#assign_leader"><i class="fa fa-plus"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="add-new-task">
                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add_task_modal">Add New Task</a>
                                    </div>
                                </div>
                                
                                <div class="kanban-list kanban-primary">
                                    <div class="kanban-header">
                                        <span class="status-title">Review</span>
                                        <div class="dropdown kanban-action">
                                            <a href="" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_task_board">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kanban-wrap">
                                        <div class="card panel">
                                            <div class="kanban-box">
                                                <div class="task-board-top">
                                                    <span><i class="fas fa-vector-square"></i> Design</span>
                                                    <span><i class="far fa-calendar"></i> 16 Mar 2021</span>
                                                </div>
                                                <div class="task-board-header">
                                                    <span class="status-title"><a href="{{url('task-view')}}">Simple Admin Dashboard Template Design</a></span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim a, senectus morbi orci at id morbi turpis. Scelerisque volutpat mauris</p>
                                                </div>
                                                <div class="task-board-body">
                                                    <div class="kanban-info">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="kanban-footer mt-4">
                                                        <span class="task-info-cont">
                                                            <span class="task-priority badge bg-inverse-primary"><i class="fas fa-circle"></i> Medium</span>
                                                        </span>
                                                        <div class="avatar-group">
                                                            <div class="avatar">
                                                                <img class="avatar-img rounded-circle border border-white" alt="User Image" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}">
                                                            </div>
                                                            <div class="avatar">
                                                                <a href="" class="avatar-title rounded-circle border border-white" data-bs-toggle="modal" data-bs-target="#assign_leader"><i class="fa fa-plus"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="add-new-task">
                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add_task_modal">Add New Task</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                
            <div id="add_task_board" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add Task Board</h4>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label>Task Board Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group task-board-color">
                                    <label>Task Board Color</label>
                                    <div class="board-color-list">
                                        <label class="board-control board-primary">
                                            <input name="radio" type="radio" class="board-control-input" value="primary" checked="">
                                            <span class="board-indicator"></span>
                                        </label>
                                        <label class="board-control board-success">
                                            <input name="radio" type="radio" class="board-control-input" value="success">
                                            <span class="board-indicator"></span>
                                        </label>
                                        <label class="board-control board-info">
                                            <input name="radio" type="radio" class="board-control-input" value="info">
                                            <span class="board-indicator"></span>
                                        </label>
                                        <label class="board-control board-purple">
                                            <input name="radio" type="radio" class="board-control-input" value="purple">
                                            <span class="board-indicator"></span>
                                        </label>
                                        <label class="board-control board-warning">
                                            <input name="radio" type="radio" class="board-control-input" value="warning">
                                            <span class="board-indicator"></span>
                                        </label>
                                        <label class="board-control board-danger">
                                            <input name="radio" type="radio" class="board-control-input" value="danger">
                                            <span class="board-indicator"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="m-t-20 text-center">
                                    <button class="btn btn-primary btn-lg">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="edit_task_board" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Task Board</h4>
                            <button type="button" class="close" data-bs-dismiss="modal"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label>Task Board Name</label>
                                    <input type="text" class="form-control" value="Pending">
                                </div>
                                <div class="form-group task-board-color">
                                    <label>Task Board Color</label>
                                    <div class="board-color-list">
                                        <label class="board-control board-primary">
                                            <input name="radio" type="radio" class="board-control-input" value="primary" checked="">
                                            <span class="board-indicator"></span>
                                        </label>
                                        <label class="board-control board-success">
                                            <input name="radio" type="radio" class="board-control-input" value="success">
                                            <span class="board-indicator"></span>
                                        </label>
                                        <label class="board-control board-info">
                                            <input name="radio" type="radio" class="board-control-input" value="info">
                                            <span class="board-indicator"></span>
                                        </label>
                                        <label class="board-control board-purple">
                                            <input name="radio" type="radio" class="board-control-input" value="purple">
                                            <span class="board-indicator"></span>
                                        </label>
                                        <label class="board-control board-warning">
                                            <input name="radio" type="radio" class="board-control-input" value="warning">
                                            <span class="board-indicator"></span>
                                        </label>
                                        <label class="board-control board-danger">
                                            <input name="radio" type="radio" class="board-control-input" value="danger">
                                            <span class="board-indicator"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="m-t-20 text-center">
                                    <button class="btn btn-primary btn-lg">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="new_project" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Create New Project</h4>
                            <button type="button" class="close" data-bs-dismiss="modal"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label>Project Name</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Create Project</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@component('components.model-popup') 
@endcomponent           
@section('script')   
    <script src="{{ URL::asset('/assets/js/jquery-ui.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/jquery.ui.touch-punch.min.js')}}"></script>     
    <!-- Select2 JS -->
    <script src="{{ URL::asset('/assets/libs/select2/select2.min.js')}}"></script>   
    <script src="{{ URL::asset('/assets/js/pages/select2.init.js')}}"></script>
    <!-- Datepicker Core JS -->
    <script src="{{ URL::asset('/assets/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/pages/datetimepicker.init.js')}}"></script>
@endsection          
@endsection