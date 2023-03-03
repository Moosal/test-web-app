<?php $page="task-reports";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Task Reports @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Task Reports @endslot
@endcomponent 
@section('css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/select2/select2.min.css')}}">
@endsection      
                        <!-- Content Starts -->
                        <!-- Search Filter -->
                    <div class="row filter-row">
                        
                        <div class="col-sm-6 col-md-4">  
                            <div class="form-group form-focus mb-0">
                                
                                    <select class="form-control floating select">
                                        <option>
                                            Name1
                                        </option>
                                        <option>
                                            Name2
                                        </option>
                                    </select>
                                
                                <label class="focus-label">Project Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">  
                            <div class="form-group form-focus mb-0">
                                
                                    <select class="form-control floating select">
                                        <option>
                                            All
                                        </option>
                                        <option>
                                            Pending
                                        </option>
                                        <option>
                                            Completed
                                        </option>
                                    </select>
                                
                                <label class="focus-label">Status</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">  
                            <a href="#" class="btn btn-success btn-search"><i class="fas fa-search me-2"></i> Search </a>  
                        </div>     
                    </div>
                    <!-- /Search Filter -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Task Name</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Status</th>
                                            <th>Assigned To</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Hospital Administration</td>
                                            <td>26 Mar 2019</td>
                                            <td>26 Apr 2021</td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="#" class="role-info role-bg-two"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
                                                    
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" data-bs-toggle="tooltip" title="" data-original-title="Jeffery Lalor"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}"></a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Hospital Administration</td>
                                            <td>26 Mar 2019</td>
                                            <td>26 Apr 2021</td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="#" class="role-info role-bg-two"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" data-bs-toggle="tooltip" title="" data-original-title="Jeffery Lalor"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}"></a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                
                    <!-- /Content End -->
@section('script')        
    <!-- Select2 JS -->
    <script src="{{ URL::asset('/assets/libs/select2/select2.min.js')}}"></script>   
    <script src="{{ URL::asset('/assets/js/pages/select2.init.js')}}"></script>
@endsection               
@endsection