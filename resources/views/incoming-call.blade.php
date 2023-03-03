<?php $page="incoming-call";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Incoming Call @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Incoming Call @endslot
@endcomponent 

                    <div class="row">
                        <div class="col-md-4 col-lg-3">
                            <div class="card settings-menu">
                                <div class="sidebar-menu">
                                    <ul>
                                        <li class="menu-title"><span>Chat Groups</span> <a href="#"><i class="fa fa-plus"></i></a></li>
                                        <li> 
                                            <a href="{{url('chat')}}">
                                                <span class="chat-avatar-sm user-img">
                                                    <img class="rounded-circle" alt="" src="{{ URL::asset('/assets/img/user.jpg')}}">
                                                </span> 
                                                <span class="chat-user">#General</span>
                                            </a>
                                        </li>
                                        <li> 
                                            <a href="{{url('chat')}}">
                                                <span class="chat-avatar-sm user-img">
                                                    <img class="rounded-circle" alt="" src="{{ URL::asset('/assets/img/user.jpg')}}">
                                                </span> 
                                                <span class="chat-user">#Video Responsive Survey</span>
                                            </a>
                                        </li>
                                        <li> 
                                            <a href="{{url('chat')}}">
                                                <span class="chat-avatar-sm user-img">
                                                    <img class="rounded-circle" alt="" src="{{ URL::asset('/assets/img/user.jpg')}}">
                                                </span> 
                                                <span class="chat-user">#500rs</span>
                                            </a>
                                        </li>
                                        <li> 
                                            <a href="{{url('chat')}}">
                                                <span class="chat-avatar-sm user-img">
                                                    <img class="rounded-circle" alt="" src="{{ URL::asset('/assets/img/user.jpg')}}">
                                                </span> 
                                                <span class="chat-user">#warehouse</span>
                                            </a>
                                        </li>
                                        <li class="menu-title">Direct Chats <a href="#"><i class="fa fa-plus"></i></a></li>
                                        <li>
                                            <a href="{{url('chat')}}">
                                                <span class="chat-avatar-sm user-img">
                                                    <img class="rounded-circle" alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"><span class="status online"></span>
                                                </span> 
                                                <span class="chat-user">John Doe</span> <span class="badge rounded-pill bg-danger">1</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('chat')}}">
                                                <span class="chat-avatar-sm user-img">
                                                    <img class="rounded-circle" alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}"><span class="status offline"></span>
                                                </span> 
                                                <span class="chat-user">Richard Miles</span> <span class="badge rounded-pill bg-danger">7</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('chat')}}">
                                                <span class="chat-avatar-sm user-img">
                                                    <img class="rounded-circle" alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}"><span class="status away"></span>
                                                </span> 
                                                <span class="chat-user">John Smith</span>
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="{{url('chat')}}">
                                                <span class="chat-avatar-sm user-img">
                                                    <img class="rounded-circle" alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}"><span class="status online"></span>
                                                </span> 
                                                <span class="chat-user">Mike Litorus</span> <span class="badge rounded-pill bg-danger">2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8 col-lg-9 settings-cont">
                            <div class="card p-0">
                                <div class="card-body p-0">
                                    <!-- Incoming Call -->
                                    <div class="call-box incoming-box">
                                        <div class="call-wrapper">
                                            <div class="call-inner">
                                                <div class="call-user">
                                                    <img class="call-avatar" src="{{ URL::asset('/assets/img/profiles/avatar-11.jpg')}}" alt="">
                                                    <h4>Wilmer Deluna</h4>
                                                    <span>Calling ...</span>
                                                </div>                          
                                                <div class="call-items">
                                                    <a href="{{url('chat')}}" class="btn call-item call-end"><i class="material-icons">call_end</i></a>
                                                    <a href="{{url('video-call')}}" class="btn call-item call-start"><i class="material-icons">call</i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Incoming Call -->
                                </div>
                            </div>
                        </div>
                    </div>

@endsection