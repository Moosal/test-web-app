<?php $page="employees-list";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Employee @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Employee @endslot
@endcomponent 
@component('components.search-filder')
    @slot('title') Add Employee @endslot 
    @slot('li_1') Employee ID @endslot
    @slot('li_2') Employee Name @endslot
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
                                <table class="table table-striped custom-table datatable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Employee ID</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th class="text-nowrap">Join Date</th>
                                            <th>Role</th>
                                            <th class="text-end no-sort">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">John Doe <span>Web Designer</span></a>
                                                </h2>
                                            </td>
                                            <td>FT-0001</td>
                                            <td>johndoe@example.com</td>
                                            <td>9876543210</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <span class="role-info role-bg-one">Front end Developer</span>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_employee"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_employee"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">Richard Miles <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>FT-0002</td>
                                            <td>richardmiles@example.com</td>
                                            <td>9876543210</td>
                                            <td>18 Mar 2014</td>
                                            <td>
                                                <span class="role-info role-bg-two">UI / UX Designer</span>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_employee"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_employee"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">John Smith <span>Android Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>FT-0003</td>
                                            <td>johnsmith@example.com</td>
                                            <td>9876543210</td>
                                            <td>1 Apr 2014</td>
                                            <td>
                                                <span class="role-info role-bg-two">UI / UX Designer</span>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_employee"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_employee"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">Mike Litorus <span>IOS Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>FT-0004</td>
                                            <td>mikelitorus@example.com</td>
                                            <td>9876543210</td>
                                            <td>1 Apr 2014</td>
                                            <td>
                                                <span class="role-info role-bg-three">Production Engineer</span>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_employee"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_employee"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-11.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">Wilmer Deluna <span>Team Leader</span></a>
                                                </h2>
                                            </td>
                                            <td>FT-0005</td>
                                            <td>wilmerdeluna@example.com</td>
                                            <td>9876543210</td>
                                            <td>22 May 2014</td>
                                            <td>
                                                <span class="role-info role-bg-three">Production Engineer</span>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_employee"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_employee"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-12.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">Jeffrey Warden <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>FT-0006</td>
                                            <td>jeffreywarden@example.com</td>
                                            <td>9876543210</td>
                                            <td>16 Jun 2013</td>
                                            <td>
                                                <span class="role-info role-bg-one">Front end Developer</span>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_employee"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_employee"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-13.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">Bernardo Galaviz <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>FT-0007</td>
                                            <td>bernardogalaviz@example.com</td>
                                            <td>9876543210</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <span class="role-info role-bg-two">UI/UX Designer</span>
                                            </td>
                                            <td class="text-end ico-sec">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit_employee"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_employee"><i class="far fa-trash-alt"></i></a>
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