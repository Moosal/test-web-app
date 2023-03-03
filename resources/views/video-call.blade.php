<?php $page="video-call";?>
@extends('layout.mainlayout')
@section('content')

            
                <!-- Main Row -->
                <div class="chat-main-row">
                    <div class="chat-main-wrapper">
                        <div class="col-lg-9 message-view task-view">
                            <div class="chat-window">
                                <div class="fixed-header">
                                    <div class="navbar">
                                        <div class="user-details">
                                            <div class="float-start user-img">
                                                <a class="avatar" href="{{url('profile')}}" title="Mike Litorus">
                                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}" alt="" class="rounded-circle">
                                                    <span class="status online"></span>
                                                </a>
                                            </div>
                                            <div class="user-info float-start">
                                                <a href="{{url('profile')}}"><span>Mike Litorus</span></a>
                                                <span class="last-seen">Online</span>
                                            </div>
                                        </div>
                                        <ul class="nav float-end custom-menu">
                                            <li class="nav-item">
                                                <a href="{{url('#task_window')}}" id="task_chat" class="task-chat profile-rightbar float-end"><i class="fa fa-comments"></i></a>
                                            </li>
                                            <li class="nav-item dropdown dropdown-action">
                                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-cog"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item">Settings</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="chat-contents">
                                    <div class="chat-content-wrap">
                                        <div class="user-video">
                                            <img src="{{ URL::asset('/assets/img/video-call.jpg')}}" alt="">
                                        </div>
                                        <div class="my-video">
                                            <ul>
                                                <li>
                                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg')}}" class="img-fluid" alt="">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-footer">
                                    <div class="call-icons">
                                        <span class="call-duration">00:59</span>
                                        <ul class="call-items">
                                            <li class="call-item">
                                                <a href="" title="Enable Video" data-placement="top" data-bs-toggle="tooltip">
                                                    <i class="fas fa-video"></i>
                                                </a>
                                            </li>
                                            <li class="call-item">
                                                <a href="" title="Mute Audio" data-placement="top" data-bs-toggle="tooltip">
                                                    <i class="fa fa-microphone microphone"></i>
                                                </a>
                                            </li>
                                            <li class="call-item">
                                                <a href="" title="Add User" data-placement="top" data-bs-toggle="tooltip">
                                                    <i class="fa fa-user-plus"></i>
                                                </a>
                                            </li>
                                            <li class="call-item">
                                                <a href="" title="Full Screen" data-placement="top" data-bs-toggle="tooltip">
                                                    <i class="fas fa-arrows-alt-v full-screen"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="end-call">
                                            <a href="javascript:void(0);">
                                                <i class="material-icons">call_end</i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 message-view chat-profile-view chat-sidebar" id="task_window">
                            <div class="chat-window video-window">
                                <div class="fixed-header">
                                    <ul class="nav nav-tabs nav-tabs-bottom">
                                        <li class="nav-item"><a class="nav-link active" href="{{url('#calls_tab')}}" data-bs-toggle="tab">Calls</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{url('#chats_tab')}}" data-bs-toggle="tab">Chats</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{url('#profile_tab')}}" data-bs-toggle="tab">Profile</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content chat-contents">
                                    <div class="content-full tab-pane show active" id="calls_tab">
                                        <div class="chat-wrap-inner">
                                            <div class="chat-box">
                                                <div class="chats">
                                                    <div class="chat chat-left">
                                                        <div class="chat-avatar">
                                                            <a href="{{url('profile')}}" class="avatar">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}">
                                                            </a>
                                                        </div>
                                                        <div class="chat-body">
                                                            <div class="chat-bubble">
                                                                <div class="chat-content">
                                                                    <span class="task-chat-user">You</span> <span class="chat-time">8:35 am</span>
                                                                    <div class="call-details">
                                                                        <i class="material-icons">phone_missed</i>
                                                                        <div class="call-info">
                                                                            <div class="call-user-details">
                                                                                <span class="call-description">Jeffrey Warden missed the call</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-avatar">
                                                            <a href="{{url('profile')}}" class="avatar">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}">
                                                            </a>
                                                        </div>
                                                        <div class="chat-body">
                                                            <div class="chat-bubble">
                                                                <div class="chat-content">
                                                                    <span class="task-chat-user">John Doe</span> <span class="chat-time">8:35 am</span>
                                                                    <div class="call-details">
                                                                        <i class="material-icons">call_end</i>
                                                                        <div class="call-info">
                                                                            <div class="call-user-details"><span class="call-description">This call has ended</span></div>
                                                                            <div class="call-timing">Duration: <strong>5 min 57 sec</strong></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-line">
                                                        <span class="chat-date">January 29th, 2019</span>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-avatar">
                                                            <a href="{{url('profile')}}" class="avatar">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}" class="img-fluid rounded-circle">
                                                            </a>
                                                        </div>
                                                        <div class="chat-body">
                                                            <div class="chat-bubble">
                                                                <div class="chat-content">
                                                                    <span class="task-chat-user">Richard Miles</span> <span class="chat-time">8:35 am</span>
                                                                    <div class="call-details">
                                                                        <i class="material-icons">phone_missed</i>
                                                                        <div class="call-info">
                                                                            <div class="call-user-details">
                                                                                <span class="call-description">You missed the call</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-avatar">
                                                            <a href="{{url('profile')}}" class="avatar">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}">
                                                            </a>
                                                        </div>
                                                        <div class="chat-body">
                                                            <div class="chat-bubble">
                                                                <div class="chat-content">
                                                                    <span class="task-chat-user">You</span> <span class="chat-time">8:35 am</span>
                                                                    <div class="call-details">
                                                                        <i class="material-icons">ring_volume</i>
                                                                        <div class="call-info">
                                                                            <div class="call-user-details">
                                                                                <a href="#" class="call-description call-description--linked" data-qa="call_attachment_link">Calling John Smith ...</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-full tab-pane" id="chats_tab">
                                        <div class="chat-window">
                                            <div class="chat-contents">
                                                <div class="chat-content-wrap">
                                                    <div class="chat-wrap-inner">
                                                        <div class="chat-box">
                                                            <div class="chats">
                                                                <div class="chat chat-left">
                                                                    <div class="chat-avatar">
                                                                        <a href="{{url('profile')}}" class="avatar">
                                                                            <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}">
                                                                        </a>
                                                                    </div>
                                                                    <div class="chat-body">
                                                                        <div class="chat-bubble">
                                                                            <div class="chat-content">
                                                                                <span class="task-chat-user">John Doe</span> <span class="chat-time">8:35 am</span>
                                                                                <p>I'm just looking around.</p>
                                                                                <p>Will you tell me something about yourself? </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="chat chat-left">
                                                                    <div class="chat-avatar">
                                                                        <a href="{{url('profile')}}" class="avatar">
                                                                            <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}">
                                                                        </a>
                                                                    </div>
                                                                    <div class="chat-body">
                                                                        <div class="chat-bubble">
                                                                            <div class="chat-content">
                                                                                <span class="task-chat-user">John Doe</span> <span class="file-attached">attached 3 files <i class="fa fa-paperclip"></i></span> <span class="chat-time">Feb 17, 2019 at 4:32am</span>
                                                                                <ul class="attach-list">
                                                                                    <li><i class="fa fa-file"></i> <a href="#">project_document.avi</a></li>
                                                                                    <li><i class="fa fa-file"></i> <a href="#">video_conferencing.psd</a></li>
                                                                                    <li><i class="fa fa-file"></i> <a href="#">landing_page.psd</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="chat-line">
                                                                    <span class="chat-date">January 29th, 2019</span>
                                                                </div>
                                                                <div class="chat chat-left">
                                                                    <div class="chat-avatar">
                                                                        <a href="{{url('profile')}}" class="avatar">
                                                                            <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}">
                                                                        </a>
                                                                    </div>
                                                                    <div class="chat-body">
                                                                        <div class="chat-bubble">
                                                                            <div class="chat-content">
                                                                                <span class="task-chat-user">Jeffery Lalor</span> <span class="file-attached">attached file <i class="fa fa-paperclip"></i></span> <span class="chat-time">Yesterday at 9:16pm</span>
                                                                                <ul class="attach-list">
                                                                                    <li class="pdf-file"><i class="far fa-file-pdf"></i> <a href="#">Document_2016.pdf</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="chat chat-left">
                                                                    <div class="chat-avatar">
                                                                        <a href="{{url('profile')}}" class="avatar">
                                                                            <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}">
                                                                        </a>
                                                                    </div>
                                                                    <div class="chat-body">
                                                                        <div class="chat-bubble">
                                                                            <div class="chat-content">
                                                                                <span class="task-chat-user">Jeffery Lalor</span> <span class="file-attached">attached file <i class="fa fa-paperclip"></i></span> <span class="chat-time">Today at 12:42pm</span>
                                                                                <ul class="attach-list">
                                                                                    <li class="img-file">
                                                                                        <div class="attach-img-download"><a href="#">avatar-1.jpg</a></div>
                                                                                        <div class="task-attach-img"><img src="{{ URL::asset('/assets/img/user.jpg')}}" alt=""></div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-footer">
                                                <div class="message-bar">
                                                    <div class="message-inner">
                                                        <a class="link attach-icon" href="#" data-bs-toggle="modal" data-bs-target="#drag_files"><img src="{{ URL::asset('/assets/img/attachment.png')}}" alt=""></a>
                                                        <div class="message-area">
                                                            <div class="input-group">
                                                                <textarea class="form-control" placeholder="Type message..."></textarea>
                                                                    <button class="btn btn-primary" type="button"><i class="fas fa-paper-plane"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-full tab-pane" id="profile_tab">
                                        <div class="display-table">
                                            <div class="table-row">
                                                <div class="table-body">
                                                    <div class="table-content">
                                                        <div class="chat-profile-img">
                                                            <div class="edit-profile-img">
                                                                <img src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}" alt="">
                                                                <span class="change-img">Change Image</span>
                                                            </div>
                                                            <h3 class="user-name m-t-10 mb-0">John Doe</h3>
                                                            <small class="text-muted">Web Designer</small>
                                                            <a href="javascript:void(0);" class="btn btn-primary edit-btn"><i class="fas fa-pencil-alt"></i></a>
                                                        </div>
                                                        <div class="chat-profile-info">
                                                            <ul class="user-det-list">
                                                                <li>
                                                                    <span>Username:</span>
                                                                    <span class="float-end text-muted">johndoe</span>
                                                                </li>
                                                                <li>
                                                                    <span>DOB:</span>
                                                                    <span class="float-end text-muted">24 July</span>
                                                                </li>
                                                                <li>
                                                                    <span>Email:</span>
                                                                    <span class="float-end text-muted">johndoe@example.com</span>
                                                                </li>
                                                                <li>
                                                                    <span>Phone:</span>
                                                                    <span class="float-end text-muted">9876543210</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div>
                                                            <ul class="nav nav-tabs nav-tabs-solid nav-justified mb-0">
                                                                <li class="nav-item"><a class="nav-link active" href="{{url('#all_files')}}" data-bs-toggle="tab">All Files</a></li>
                                                                <li class="nav-item"><a class="nav-link" href="{{url('#my_files')}}" data-bs-toggle="tab">My Files</a></li>
                                                            </ul>
                                                            <div class="tab-content">
                                                                <div class="tab-pane show active" id="all_files">
                                                                    <ul class="files-list">
                                                                        <li>
                                                                            <div class="files-cont">
                                                                                <div class="file-type">
                                                                                    <span class="files-icon"><i class="far fa-file-pdf"></i></span>
                                                                                </div>
                                                                                <div class="files-info">
                                                                                    <span class="file-name text-ellipsis">AHA Selfcare Mobile Application Test-Cases.xls</span>
                                                                                    <span class="file-author"><a href="#">Loren Gatlin</a></span> <span class="file-date">May 31st at 6:53 PM</span>
                                                                                </div>
                                                                                <ul class="files-action">
                                                                                    <li class="dropdown dropdown-action">
                                                                                        <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_horiz</i></a>
                                                                                        <div class="dropdown-menu">
                                                                                            <a class="dropdown-item" href="javascript:void(0)">Download</a>
                                                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#share_files">Share</a>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tab-pane" id="my_files">
                                                                    <ul class="files-list">
                                                                        <li>
                                                                            <div class="files-cont">
                                                                                <div class="file-type">
                                                                                    <span class="files-icon"><i class="far fa-file-pdf"></i></span>
                                                                                </div>
                                                                                <div class="files-info">
                                                                                    <span class="file-name text-ellipsis">AHA Selfcare Mobile Application Test-Cases.xls</span>
                                                                                    <span class="file-author"><a href="#">John Doe</a></span> <span class="file-date">May 31st at 6:53 PM</span>
                                                                                </div>
                                                                                <ul class="files-action">
                                                                                    <li class="dropdown dropdown-action">
                                                                                        <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_horiz</i></a>
                                                                                        <div class="dropdown-menu">
                                                                                            <a class="dropdown-item" href="javascript:void(0)">Download</a>
                                                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#share_files">Share</a>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Main Row -->
                
@component('components.model-popup') 
@endcomponent                 


@endsection