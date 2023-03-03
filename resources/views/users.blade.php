<?php $page="users";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Users @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Users @endslot
@endcomponent 
@component('components.search-filder') 
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
                                <table class="table table-striped custom-table datatable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Company</th>
                                            <th>Created Date</th>
                                            <th>Role</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img src="{{ URL::asset('/assets/img/profiles/avatar-21.jpg')}}" alt=""></a>
                                                    <a href="{{url('profile')}}">Daniel Porter <span>Admin</span></a>
                                                </h2>
                                            </td>
                                            <td>danielporter@example.com</td>
                                            <td>Dreamguy's Technologies</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <span class="role-info role-bg-one">Admin</span>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_user"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_user"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">John Doe <span>Web Designer</span></a>
                                                </h2>
                                            </td>
                                            <td>johndoe@example.com</td>
                                            <td>Dreamguy's Technologies</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <span class="role-info role-bg-two">Employee</span>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_user"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_user"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">Richard Miles <span>Admin</span></a>
                                                </h2>
                                            </td>
                                            <td>richardmiles@example.com</td>
                                            <td>Dreamguy's Technologies</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <span class="role-info role-bg-two">Employee</span>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_user"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_user"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">John Smith <span>Android Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>johnsmith@example.com</td>
                                            <td>Dreamguy's Technologies</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <span class="role-info role-bg-two">Employee</span>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_user"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_user"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">Mike Litorus <span>IOS Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>mikelitorus@example.com</td>
                                            <td>Dreamguy's Technologies</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <span class="role-info role-bg-two">Employee</span>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_user"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_user"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-11.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">Wilmer Deluna <span>Team Leader</span></a>
                                                </h2>
                                            </td>
                                            <td>wilmerdeluna@example.com</td>
                                            <td>Dreamguy's Technologies</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <span class="role-info role-bg-two">Employee</span>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_user"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_user"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img src="{{ URL::asset('/assets/img/profiles/avatar-19.jpg')}}" alt=""></a>
                                                    <a href="{{url('profile')}}">Barry Cuda <span>Global Technologies</span></a>
                                                </h2>
                                            </td>
                                            <td>barrycuda@example.com</td>
                                            <td>Global Technologies</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <span class="role-info role-bg-three">Client</span>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_user"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_user"><i class="far fa-trash-alt"></i></a>
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