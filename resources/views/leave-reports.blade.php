<?php $page="leave-reports";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Leave Reports @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Leave Reports @endslot
@endcomponent 
@component('components.search-filder')
 @slot('li_1') Department @endslot
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
                                            <th>Employee</th>
                                            <th>Date</th>
                                            <th>Department</th>
                                            <th>Leave Type</th>
                                            <th>No.of Days</th>
                                            <th>Remaining Leave</th>
                                            <th>Total Leaves</th>
                                            <th>Total Leave Taken</th>
                                            <th>Leave Carry Forward</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">John Doe <span>#0001</span></a>
                                                </h2>
                                            </td>
                                            <td>20 Dec 2020</td>
                                            <td>Design</td>
                                            <td class="text-center">
                                                <button class="btn btn-outline-info btn-sm">Sick Leave</button>
                                            </td>
                                            <td class="text-center"><span class="btn btn-danger btn-sm">05</span></td>
                                            <td class="text-center"><span class="btn btn-warning btn-sm"><b>08</b></span></td>
                                            <td class="text-center"><span class="btn btn-success btn-sm"><b>20</b></span></td>
                                            <td class="text-center">12</td>
                                            <td class="text-center">08</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">Richard Miles <span>#0002</span></a>
                                                </h2>
                                            </td>
                                            <td>21 Dec 2020</td>
                                            <td>Web Developer</td>
                                            <td class="text-center">
                                                <button class="btn btn-outline-warning btn-sm">Parenting Leave</button>
                                            </td>
                                            <td class="text-center"><span class="btn btn-danger btn-sm">03</span></td>
                                            <td class="text-center"><span class="btn btn-warning btn-sm"><b>08</b></span></td>
                                            <td class="text-center"><span class="btn btn-success btn-sm"><b>20</b></span></td>
                                            <td class="text-center">12</td>
                                            <td class="text-center">05</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">John Smith <span>#003</span></a>
                                                </h2>
                                            </td>
                                            <td>22 Dec 2020</td>
                                            <td>Android Developer</td>
                                            <td class="text-center">
                                                <button class="btn btn-outline-danger btn-sm">Emercency Leave</button>
                                            </td>
                                            <td class="text-center"><span class="btn btn-danger btn-sm">01</span></td>
                                            <td class="text-center"><span class="btn btn-warning btn-sm"><b>09</b></span></td>
                                            <td class="text-center"><span class="btn btn-success btn-sm"><b>20</b></span></td>
                                            <td class="text-center">17</td>
                                            <td class="text-center">03</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">Mike Litorus <span>#004</span></a>
                                                </h2>
                                            </td>
                                            <td>23 Dec 2020</td>
                                            <td>IOS Developer</td>
                                            <td class="text-center">
                                                <button class="btn btn-outline-info btn-sm">Sick Leave</button>
                                            </td>
                                            <td class="text-center"><span class="btn btn-danger btn-sm">15</span></td>
                                            <td class="text-center"><span class="btn btn-warning btn-sm"><b>05</b></span></td>
                                            <td class="text-center"><span class="btn btn-success btn-sm"><b>20</b></span></td>
                                            <td class="text-center">15</td>
                                            <td class="text-center">05</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-11.jpg')}}"></a>
                                                    <a href="{{url('profile')}}">Wilmer Deluna <span>#005</span></a>
                                                </h2>
                                            </td>
                                            <td>24 Dec 2020</td>
                                            <td>Team Leader</td>
                                            <td class="text-center">
                                                <button class="btn btn-outline-info btn-sm">Sick Leave</button>
                                            </td>
                                            <td class="text-center"><span class="btn btn-danger btn-sm">10</span></td>
                                            <td class="text-center"><span class="btn btn-warning btn-sm"><b>07</b></span></td>
                                            <td class="text-center"><span class="btn btn-success btn-sm"><b>20</b></span></td>
                                            <td class="text-center">18</td>
                                            <td class="text-center">2</td>
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
    <!-- Datepicker Core JS -->
    <script src="{{ URL::asset('/assets/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/pages/datetimepicker.init.js')}}"></script>
    <!-- Datatable JS -->
    <script src="{{ URL::asset('/assets/js/jquery.dataTables.min.js')}}"></script> 
    <script src="{{ URL::asset('/assets/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/pages/datatable.init.js')}}"></script>
@endsection 
@endsection