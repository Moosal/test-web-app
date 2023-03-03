<?php $page="salary";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Employee Salary @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Employee Salary @endslot
@endcomponent 
@component('components.search-filder') 
    @slot('li_1') Employee Name @endslot
    @slot('li_2') Employee @endslot
    @slot('li_3') Manager @endslot
    @slot('li_4') Role @endslot
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
                                            <th>Employee</th>
                                            <th>Employee ID</th>
                                            <th>Email</th>
                                            <th>Join Date</th>
                                            <th>Role</th>
                                            <th>Salary</th>
                                            <th>Payslip</th>
                                            <th class="text-end">Action</th>
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
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="" class="role-info role-bg-one dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Web Designer </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Software Engineer</a>
                                                        <a class="dropdown-item" href="#">Software Tester</a>
                                                        <a class="dropdown-item" href="#">Frontend Developer</a>
                                                        <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$59698</td>
                                            <td><a class="role-info role-bg-two" href="{{url('salary-view')}}">Generate Slip</a></td>
                                            <td class="text-end ico-sec">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_salary"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_salary"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}" alt=""></a>
                                                    <a href="{{url('profile')}}">Richard Miles <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>FT-0002</td>
                                            <td>richardmiles@example.com</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="" class="role-info role-bg-one dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Web Developer </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Software Engineer</a>
                                                        <a class="dropdown-item" href="#">Software Tester</a>
                                                        <a class="dropdown-item" href="#">Frontend Developer</a>
                                                        <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$72000</td>
                                            <td><a class="role-info role-bg-two" href="{{url('salary-view')}}">Generate Slip</a></td>
                                            <td class="text-end ico-sec">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_salary"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_salary"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}" alt=""></a>
                                                    <a href="{{url('profile')}}">John Smith <span>Android Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>FT-0003</td>
                                            <td>johnsmith@example.com</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="" class="role-info role-bg-one dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Android Developer </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Software Engineer</a>
                                                        <a class="dropdown-item" href="#">Software Tester</a>
                                                        <a class="dropdown-item" href="#">Frontend Developer</a>
                                                        <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$48200</td>
                                            <td><a class="role-info role-bg-two" href="{{url('salary-view')}}">Generate Slip</a></td>
                                            <td class="text-end ico-sec">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_salary"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_salary"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}" alt=""></a>
                                                    <a href="{{url('profile')}}">Mike Litorus <span>IOS Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>FT-0004</td>
                                            <td>mikelitorus@example.com</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="" class="role-info role-bg-one dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">IOS Developer </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Software Engineer</a>
                                                        <a class="dropdown-item" href="#">Software Tester</a>
                                                        <a class="dropdown-item" href="#">Frontend Developer</a>
                                                        <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$59698</td>
                                            <td><a class="role-info role-bg-two" href="{{url('salary-view')}}">Generate Slip</a></td>
                                            <td class="text-end ico-sec">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_salary"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_salary"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img src="{{ URL::asset('/assets/img/profiles/avatar-11.jpg')}}" alt=""></a>
                                                    <a href="{{url('profile')}}">Wilmer Deluna <span>Team Leader</span></a>
                                                </h2>
                                            </td>
                                            <td>FT-0005</td>
                                            <td>wilmerdeluna@example.com</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="" class="role-info role-bg-one dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Team Leader </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Software Engineer</a>
                                                        <a class="dropdown-item" href="#">Software Tester</a>
                                                        <a class="dropdown-item" href="#">Frontend Developer</a>
                                                        <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$43000</td>
                                            <td><a class="role-info role-bg-two" href="{{url('salary-view')}}">Generate Slip</a></td>
                                            <td class="text-end ico-sec">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_salary"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_salary"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img src="{{ URL::asset('/assets/img/profiles/avatar-12.jpg')}}" alt=""></a>
                                                    <a href="{{url('profile')}}">Jeffrey Warden <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>FT-0006</td>
                                            <td>jeffreywarden@example.com</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="" class="role-info role-bg-one dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Web Developer</a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Software Engineer</a>
                                                        <a class="dropdown-item" href="#">Software Tester</a>
                                                        <a class="dropdown-item" href="#">Frontend Developer</a>
                                                        <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$45000</td>
                                            <td><a class="role-info role-bg-two" href="{{url('salary-view')}}">Generate Slip</a></td>
                                            <td class="text-end ico-sec">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_salary"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_salary"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img src="{{ URL::asset('/assets/img/profiles/avatar-13.jpg')}}" alt=""></a>
                                                    <a href="{{url('profile')}}">Bernardo Galaviz <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>FT-0007</td>
                                            <td>bernardogalaviz@example.com</td>
                                            <td>1 Jan 2014</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="" class="role-info role-bg-one dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Web Developer </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Software Engineer</a>
                                                        <a class="dropdown-item" href="#">Software Tester</a>
                                                        <a class="dropdown-item" href="#">Frontend Developer</a>
                                                        <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$38400</td>
                                            <td><a class="role-info role-bg-two" href="{{url('salary-view')}}">Generate Slip</a></td>
                                            <td class="text-end ico-sec">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_salary"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_salary"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg')}}" alt=""></a>
                                                    <a href="{{url('profile')}}">Lesley Grauer <span>Team Leader</span></a>
                                                </h2>
                                            </td>
                                            <td>FT-0008</td>
                                            <td>lesleygrauer@example.com</td>
                                            <td>1 Jun 2015</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="" class="role-info role-bg-one dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Team Leader </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Software Engineer</a>
                                                        <a class="dropdown-item" href="#">Software Tester</a>
                                                        <a class="dropdown-item" href="#">Frontend Developer</a>
                                                        <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$75500</td>
                                            <td><a class="role-info role-bg-two" href="{{url('salary-view')}}">Generate Slip</a></td>
                                            <td class="text-end ico-sec">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_salary"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_salary"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}" alt=""></a>
                                                    <a href="{{url('profile')}}">Jeffery Lalor <span>Team Leader</span></a>
                                                </h2>
                                            </td>
                                            <td>FT-0009</td>
                                            <td>jefferylalor@example.com</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="" class="role-info role-bg-one dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Team Leader </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Software Engineer</a>
                                                        <a class="dropdown-item" href="#">Software Tester</a>
                                                        <a class="dropdown-item" href="#">Frontend Developer</a>
                                                        <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$73550</td>
                                            <td><a class="role-info role-bg-two" href="{{url('salary-view')}}">Generate Slip</a></td>
                                            <td class="text-end ico-sec">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_salary"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_salary"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img src="{{ URL::asset('/assets/img/profiles/avatar-04.jpg')}}" alt=""></a>
                                                    <a href="{{url('profile')}}">Loren Gatlin <span>Android Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>FT-0010</td>
                                            <td>lorengatlin@example.com</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="" class="role-info role-bg-one dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Android Developer </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Software Engineer</a>
                                                        <a class="dropdown-item" href="#">Software Tester</a>
                                                        <a class="dropdown-item" href="#">Frontend Developer</a>
                                                        <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$55000</td>
                                            <td><a class="role-info role-bg-two" href="{{url('salary-view')}}">Generate Slip</a></td>
                                            <td class="text-end ico-sec">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_salary"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_salary"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('profile')}}" class="avatar"><img src="{{ URL::asset('/assets/img/profiles/avatar-03.jpg')}}" alt=""></a>
                                                    <a href="{{url('profile')}}">Tarah Shropshire <span>Android Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>FT-0011</td>
                                            <td>tarahshropshire@example.com</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="" class="role-info role-bg-one dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Android Developer </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Software Engineer</a>
                                                        <a class="dropdown-item" href="#">Software Tester</a>
                                                        <a class="dropdown-item" href="#">Frontend Developer</a>
                                                        <a class="dropdown-item" href="#">UI/UX Developer</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$92400</td>
                                            <td><a class="role-info role-bg-two" href="{{url('salary-view')}}">Generate Slip</a></td>
                                            <td class="text-end ico-sec">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_salary"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_salary"><i class="far fa-trash-alt"></i></a>
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