<?php $page="shortlist-candidates";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Shortlist Candidates @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Shortlist Candidates @endslot
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
                                <table class="table table-striped custom-table mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Job Title</th>
                                            <th>Department</th>
                                            <th class="text-center">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">John Doe <span>Web Designer</span></a>
                                                </h2>
                                            </td>
                                            <td><a href="{{url('job-details')}}">Web Developer</a></td>
                                            <td>Development</td>
                                            <td class="text-center">
                                                <div class="action-label">
                                                    <a class="role-info role-bg-one" href="#">
                                                        <i class="fa fa-dot-circle-o text-danger"></i> Offered
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">Richard Miles <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            <td><a href="{{url('job-details')}}">Web Designer</a></td>
                                            <td>Designing</td>
                                            <td class="text-center">
                                                <div class="action-label">
                                                    <a class="role-info role-bg-one" href="#">
                                                        <i class="fa fa-dot-circle-o text-danger"></i> Offered
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">John Smith <span>Android Developer</span></a>
                                                </h2>
                                            </td>
                                            <td><a href="{{url('job-details')}}">Android Developer</a></td>
                                            <td>Android</td>
                                            <td class="text-center">
                                                <div class="action-label">
                                                    <a class="role-info role-bg-one" href="#">
                                                        <i class="fa fa-dot-circle-o text-danger"></i> Offered
                                                    </a>
                                                </div>
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