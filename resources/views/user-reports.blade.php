<?php $page="user-reports";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') User Reports @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') User Reports @endslot
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
                                            <th>Name</th>
                                            <th>Company</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Designation</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img src="{{ URL::asset('/assets/img/profiles/avatar-19.jpg')}}" alt=""></a>
                                                    <a href="{{url('profile')}}">Barry Cuda <span>Global Technologies</span></a>
                                                </h2>
                                            </td>
                                            <td>Global Technologies</td>
                                            <td>barrycuda@example.com</td>
                                            <td>
                                                <span class="role-info role-bg-one">Client</span>
                                            </td>
                                            <td>CEO</td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="#" class="role-info role-bg-two"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img src="{{ URL::asset('/assets/img/profiles/avatar-21.jpg')}}" alt=""></a>
                                                    <a href="{{url('profile')}}">Daniel Porter <span>Admin</span></a>
                                                </h2>
                                            </td>
                                            <td>Focus Technologies</td>
                                            <td>danielporter@example.com</td>
                                            <td>
                                                <span class="role-info role-bg-one">Admin</span>
                                            </td>
                                            <td>Admin Manager</td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="#" class="role-info role-bg-two"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
                                                </div>
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