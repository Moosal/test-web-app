<?php $page="clients";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Clients @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Clients @endslot
@endcomponent 
@component('components.search-filder')                
    @slot('title') Add Client @endslot
@endcomponent
@section('css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/select2/select2.min.css')}}">
@endsection

                    
                    <div class="row staff-grid-row">

                        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card clnt-card">
                                <div class="user-img-sec">
                                    <img src="{{ URL::asset('/assets/img/client-img.png')}}" alt="User Image">
                                    <h4>Global Technologies</h4>
                                    <h5>Barry Cuda</h5>
                                    <h6 class="bg-1">CEO</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_client">Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_client">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <ul class="client-img-li">
                                    <li>
                                        <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="..." />
                                    </li>
                                    <li>
                                        <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="..." />
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="..." />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="..." />
                                        </a>
                                    </li>
                                </ul>
                                <div class="card-footer">
                                    <a href="{{url('client-profile')}}">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card clnt-card">
                                <div class="user-img-sec">
                                    <img src="{{ URL::asset('/assets/img/client-img.png')}}" alt="User Image">
                                    <h4>Delta Infotech</h4>
                                    <h5>Barry Cuda</h5>
                                    <h6 class="bg-1">CEO</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_client">Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_client">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <ul class="client-img-li">
                                    <li>
                                        <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="..." />
                                    </li>
                                    <li>
                                        <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="..." />
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="..." />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="..." />
                                        </a>
                                    </li>
                                </ul>
                                <div class="card-footer">
                                    <a href="{{url('client-profile')}}">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card clnt-card">
                                <div class="user-img-sec">
                                    <img src="{{ URL::asset('/assets/img/client-img.png')}}" alt="User Image">
                                    <h4>Cream Inc</h4>
                                    <h5>Barry Cuda</h5>
                                    <h6 class="bg-1">CEO</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_client">Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_client">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <ul class="client-img-li">
                                    <li>
                                        <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="..." />
                                    </li>
                                    <li>
                                        <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="..." />
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="..." />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="..." />
                                        </a>
                                    </li>
                                </ul>
                                <div class="card-footer">
                                    <a href="{{url('client-profile')}}">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card clnt-card">
                                <div class="user-img-sec">
                                    <img src="{{ URL::asset('/assets/img/client-img.png')}}" alt="User Image">
                                    <h4>Wellware Company</h4>
                                    <h5>Barry Cuda</h5>
                                    <h6 class="bg-1">CEO</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_client">Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_client">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <ul class="client-img-li">
                                    <li>
                                        <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="..." />
                                    </li>
                                    <li>
                                        <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="..." />
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="..." />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="..." />
                                        </a>
                                    </li>
                                </ul>
                                <div class="card-footer">
                                    <a href="{{url('client-profile')}}">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card clnt-card">
                                <div class="user-img-sec">
                                    <img src="{{ URL::asset('/assets/img/client-img.png')}}" alt="User Image">
                                    <h4>Mustang Technologi...</h4>
                                    <h5>Barry Cuda</h5>
                                    <h6 class="bg-1">CEO</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_client">Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_client">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <ul class="client-img-li">
                                    <li>
                                        <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="..." />
                                    </li>
                                    <li>
                                        <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="..." />
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="..." />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="..." />
                                        </a>
                                    </li>
                                </ul>
                                <div class="card-footer">
                                    <a href="{{url('client-profile')}}">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card clnt-card">
                                <div class="user-img-sec">
                                    <img src="{{ URL::asset('/assets/img/client-img.png')}}" alt="User Image">
                                    <h4>International Software...</h4>
                                    <h5>Barry Cuda</h5>
                                    <h6 class="bg-1">CEO</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_client">Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_client">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <ul class="client-img-li">
                                    <li>
                                        <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="..." />
                                    </li>
                                    <li>
                                        <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="..." />
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="..." />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="..." />
                                        </a>
                                    </li>
                                </ul>
                                <div class="card-footer">
                                    <a href="{{url('client-profile')}}">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card clnt-card">
                                <div class="user-img-sec">
                                    <img src="{{ URL::asset('/assets/img/client-img.png')}}" alt="User Image">
                                    <h4>Mercury Software Inc...</h4>
                                    <h5>Barry Cuda</h5>
                                    <h6 class="bg-1">CEO</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_client">Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_client">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <ul class="client-img-li">
                                    <li>
                                        <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="..." />
                                    </li>
                                    <li>
                                        <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="..." />
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="..." />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="..." />
                                        </a>
                                    </li>
                                </ul>
                                <div class="card-footer">
                                    <a href="{{url('client-profile')}}">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card clnt-card">
                                <div class="user-img-sec">
                                    <img src="{{ URL::asset('/assets/img/client-img.png')}}" alt="User Image">
                                    <h4>Carlson Tech</h4>
                                    <h5>Barry Cuda</h5>
                                    <h6 class="bg-1">CEO</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_client">Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_client">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <ul class="client-img-li">
                                    <li>
                                        <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="..." />
                                    </li>
                                    <li>
                                        <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="..." />
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ URL::asset('/assets/img/client-small.png')}}" alt="..." />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ URL::asset('assets/img/client-small.png')}}" alt="..." />
                                        </a>
                                    </li>
                                </ul>
                                <div class="card-footer">
                                    <a href="{{url('client-profile')}}">View Profile</a>
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
   
 @endsection          

@endsection