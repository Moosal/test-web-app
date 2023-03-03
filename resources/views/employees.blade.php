<?php $page="employees";?>
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
@endsection
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card">
                                <div class="user-img-sec">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="User Image">
                                    <h4>Martin Huges</h4>
                                    <h5>Web Designer</h5>
                                    <h6 class="bg-1">UI/UX</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_employee">Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_employee">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <h4>Employee ID <span>FT-0001</span></h4>
                                    <h4>Date of Join <span>1st Jan 2013</span></h4>
                                </div>
                                <div class="card-footer">
                                    <a href="{{url('profile')}}">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card">
                                <div class="user-img-sec">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="User Image">
                                    <h4>Martin Huges</h4>
                                    <h5>Web Designer</h5>
                                    <h6 class="bg-1">Frontend Develpment</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_employee">Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_employee">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <h4>Employee ID <span>FT-0001</span></h4>
                                    <h4>Date of Join <span>1st Jan 2013</span></h4>
                                </div>
                                <div class="card-footer">
                                    <a href="{{url('profile')}}">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card">
                                <div class="user-img-sec">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="User Image">
                                    <h4>Martin Huges</h4>
                                    <h5>Web Designer</h5>
                                    <h6 class="bg-1">IOS</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_employee">Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_employee">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <h4>Employee ID <span>FT-0001</span></h4>
                                    <h4>Date of Join <span>1st Jan 2013</span></h4>
                                </div>
                                <div class="card-footer">
                                    <a href="{{url('profile')}}">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card">
                                <div class="user-img-sec">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="User Image">
                                    <h4>Martin Huges</h4>
                                    <h5>Web Designer</h5>
                                    <h6 class="bg-1">UI/UX</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_employee">Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_employee">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <h4>Employee ID <span>FT-0001</span></h4>
                                    <h4>Date of Join <span>1st Jan 2013</span></h4>
                                </div>
                                <div class="card-footer">
                                    <a href="{{url('profile')}}">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card">
                                <div class="user-img-sec">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="User Image">
                                    <h4>Martin Huges</h4>
                                    <h5>Web Designer</h5>
                                    <h6 class="bg-1">UI/UX</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_employee">Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_employee">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <h4>Employee ID <span>FT-0001</span></h4>
                                    <h4>Date of Join <span>1st Jan 2013</span></h4>
                                </div>
                                <div class="card-footer">
                                    <a href="{{url('profile')}}">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card">
                                <div class="user-img-sec">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="User Image">
                                    <h4>Martin Huges</h4>
                                    <h5>Web Designer</h5>
                                    <h6 class="bg-1">Frontend Develpment</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_employee">Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_employee">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <h4>Employee ID <span>FT-0001</span></h4>
                                    <h4>Date of Join <span>1st Jan 2013</span></h4>
                                </div>
                                <div class="card-footer">
                                    <a href="{{url('profile')}}">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card">
                                <div class="user-img-sec">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="User Image">
                                    <h4>Martin Huges</h4>
                                    <h5>Web Designer</h5>
                                    <h6 class="bg-1">IOS</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_employee">Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_employee">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <h4>Employee ID <span>FT-0001</span></h4>
                                    <h4>Date of Join <span>1st Jan 2013</span></h4>
                                </div>
                                <div class="card-footer">
                                    <a href="{{url('profile')}}">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card">
                                <div class="user-img-sec">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="User Image">
                                    <h4>Martin Huges</h4>
                                    <h5>Web Designer</h5>
                                    <h6 class="bg-1">UI/UX</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_employee">Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_employee">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <h4>Employee ID <span>FT-0001</span></h4>
                                    <h4>Date of Join <span>1st Jan 2013</span></h4>
                                </div>
                                <div class="card-footer">
                                    <a href="{{url('profile')}}">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card">
                                <div class="user-img-sec">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="User Image">
                                    <h4>Martin Huges</h4>
                                    <h5>Web Designer</h5>
                                    <h6 class="bg-1">UI/UX</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton8" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_employee">Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_employee">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <h4>Employee ID <span>FT-0001</span></h4>
                                    <h4>Date of Join <span>1st Jan 2013</span></h4>
                                </div>
                                <div class="card-footer">
                                    <a href="{{url('profile')}}">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card">
                                <div class="user-img-sec">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="User Image">
                                    <h4>Martin Huges</h4>
                                    <h5>Web Designer</h5>
                                    <h6 class="bg-1">Frontend Develpment</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton9" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_employee">Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_employee">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <h4>Employee ID <span>FT-0001</span></h4>
                                    <h4>Date of Join <span>1st Jan 2013</span></h4>
                                </div>
                                <div class="card-footer">
                                    <a href="{{url('profile')}}">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card">
                                <div class="user-img-sec">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="User Image">
                                    <h4>Martin Huges</h4>
                                    <h5>Web Designer</h5>
                                    <h6 class="bg-1">IOS</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_employee">Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_employee">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <h4>Employee ID <span>FT-0001</span></h4>
                                    <h4>Date of Join <span>1st Jan 2013</span></h4>
                                </div>
                                <div class="card-footer">
                                    <a href="{{url('profile')}}">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card">
                                <div class="user-img-sec">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="User Image">
                                    <h4>Martin Huges</h4>
                                    <h5>Web Designer</h5>
                                    <h6 class="bg-1">UI/UX</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton11" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_employee">Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_employee">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <h4>Employee ID <span>FT-0001</span></h4>
                                    <h4>Date of Join <span>1st Jan 2013</span></h4>
                                </div>
                                <div class="card-footer">
                                    <a href="{{url('profile')}}">View Profile</a>
                                </div>
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
@endsection
@endsection