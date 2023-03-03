<?php $page="chat";?>
@extends('layout.mainlayout')
@section('content')

                <!-- Chat Main Row -->
                <div class="chat-main-row">
                
                    <!-- Chat Main Wrapper -->
                    <div class="chat-main-wrapper">
                    
                        <!-- Chats View -->
                        <div class="col-lg-9 message-view task-view">
                            <div class="chat-window">
                                <div class="fixed-header">
                                    <div class="navbar">
                                        <div class="user-details me-auto">
                                            <div class="float-start user-img">
                                                <a class="avatar" href="{{url('profile')}}" title="Mike Litorus">
                                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}" alt="" class="rounded-circle">
                                                    <span class="status online"></span>
                                                </a>
                                            </div>
                                            <div class="user-info float-start">
                                                <a href="{{url('profile')}}" title="Mike Litorus"><span>Mike Litorus</span> <i class="typing-text">Typing...</i></a>
                                                <span class="last-seen">Last seen today at 7:50 AM</span>
                                            </div>
                                        </div>
                                        <div class="search-box">
                                            <div class="input-group input-group-sm">
                                                <input type="text" placeholder="Search" class="form-control">
                                                    <button type="button" class="btn"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                        <ul class="nav custom-menu">
                                            <li class="nav-item">
                                                <a class="nav-link task-chat profile-rightbar float-end" id="task_chat" href="{{url('#task_window')}}"><i class="fa fa-user"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{url('voice-call')}}" class="nav-link"><i class="fas fa-phone-alt"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{url('video-call')}}" class="nav-link"><i class="fas fa-video"></i></a>
                                            </li>
                                            <li class="nav-item dropdown dropdown-action">
                                                <a aria-expanded="false" data-bs-toggle="dropdown" class="nav-link dropdown-toggle" href=""><i class="fa fa-cog"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item">Delete Conversations</a>
                                                    <a href="javascript:void(0)" class="dropdown-item">Settings</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="chat-contents">
                                    <div class="chat-content-wrap">
                                        <div class="chat-wrap-inner">
                                            <div class="chat-box">
                                                <div class="chats">
                                                    <div class="chat chat-right">
                                                        <div class="chat-body">
                                                            <div class="chat-bubble">
                                                                <div class="chat-content">
                                                                    <p>Hello. What can I do for you?</p>
                                                                    <span class="chat-time">8:30 am</span>
                                                                </div>
                                                                <div class="chat-action-btns">
                                                                    <ul>
                                                                        <li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
                                                                        <li><a href="#" class="edit-msg"><i class="fas fa-pencil-alt"></i></a></li>
                                                                        <li><a href="#" class="del-msg"><i class="far fa-trash-alt"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-line">
                                                        <span class="chat-date">October 8th, 2018</span>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-avatar">
                                                            <a href="{{url('profile')}}" class="avatar">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}">
                                                            </a>
                                                        </div>
                                                        <div class="chat-body">
                                                            <div class="chat-bubble">
                                                                <div class="chat-content">
                                                                    <p>I'm just looking around.</p>
                                                                    <p>Will you tell me something about yourself? </p>
                                                                    <span class="chat-time">8:35 am</span>
                                                                </div>
                                                                <div class="chat-action-btns">
                                                                    <ul>
                                                                        <li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
                                                                        <li><a href="#" class="edit-msg"><i class="fas fa-pencil-alt"></i></a></li>
                                                                        <li><a href="#" class="del-msg"><i class="far fa-trash-alt"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="chat-bubble">
                                                                <div class="chat-content">
                                                                    <p>Are you there? That time!</p>
                                                                    <span class="chat-time">8:40 am</span>
                                                                </div>
                                                                <div class="chat-action-btns">
                                                                    <ul>
                                                                        <li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
                                                                        <li><a href="#" class="edit-msg"><i class="fas fa-pencil-alt"></i></a></li>
                                                                        <li><a href="#" class="del-msg"><i class="far fa-trash-alt"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-right">
                                                        <div class="chat-body">
                                                            <div class="chat-bubble">
                                                                <div class="chat-content">
                                                                    <p>Where?</p>
                                                                    <span class="chat-time">8:35 am</span>
                                                                </div>
                                                                <div class="chat-action-btns">
                                                                    <ul>
                                                                        <li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
                                                                        <li><a href="#" class="edit-msg"><i class="fas fa-pencil-alt"></i></a></li>
                                                                        <li><a href="#" class="del-msg"><i class="far fa-trash-alt"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="chat-bubble">
                                                                <div class="chat-content">
                                                                    <p>OK, my name is Limingqiang. I like singing, playing basketballand so on.</p>
                                                                    <span class="chat-time">8:42 am</span>
                                                                </div>
                                                                <div class="chat-action-btns">
                                                                    <ul>
                                                                        <li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
                                                                        <li><a href="#" class="edit-msg"><i class="fas fa-pencil-alt"></i></a></li>
                                                                        <li><a href="#" class="del-msg"><i class="far fa-trash-alt"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-avatar">
                                                            <a href="{{url('profile')}}" class="avatar">
                                                            <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}">
                                                            </a>
                                                        </div>
                                                        <div class="chat-body">
                                                            <div class="chat-bubble">
                                                                <div class="chat-content">
                                                                    <p>You wait for notice.</p>
                                                                    <span class="chat-time">8:30 am</span>
                                                                </div>
                                                                <div class="chat-action-btns">
                                                                    <ul>
                                                                        <li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
                                                                        <li><a href="#" class="edit-msg"><i class="fas fa-pencil-alt"></i></a></li>
                                                                        <li><a href="#" class="del-msg"><i class="far fa-trash-alt"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="chat-bubble">
                                                                <div class="chat-content">
                                                                    <p>Consectetuorem ipsum dolor sit?</p>
                                                                    <span class="chat-time">8:50 am</span>
                                                                </div>
                                                                <div class="chat-action-btns">
                                                                    <ul>
                                                                        <li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
                                                                        <li><a href="#" class="edit-msg"><i class="fas fa-pencil-alt"></i></a></li>
                                                                        <li><a href="#" class="del-msg"><i class="far fa-trash-alt"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="chat-bubble">
                                                                <div class="chat-content">
                                                                    <p>OK?</p>
                                                                    <span class="chat-time">8:55 am</span>
                                                                </div>
                                                                <div class="chat-action-btns">
                                                                    <ul>
                                                                        <li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
                                                                        <li><a href="#" class="edit-msg"><i class="fas fa-pencil-alt"></i></a></li>
                                                                        <li><a href="#" class="del-msg"><i class="far fa-trash-alt"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="chat-bubble">
                                                                <div class="chat-content img-content">
                                                                    <div class="chat-img-group clearfix">
                                                                        <p>Uploaded 3 Images</p>
                                                                        <a class="chat-img-attach" href="#">
                                                                            <img width="182" height="137" alt="" src="{{ URL::asset('/assets/img/placeholder.jpg')}}">
                                                                            <div class="chat-placeholder">
                                                                                <div class="chat-img-name">placeholder.jpg</div>
                                                                                <div class="chat-file-desc">842 KB</div>
                                                                            </div>
                                                                        </a>
                                                                        <a class="chat-img-attach" href="#">
                                                                            <img width="182" height="137" alt="" src="{{ URL::asset('/assets/img/placeholder.jpg')}}">
                                                                            <div class="chat-placeholder">
                                                                                <div class="chat-img-name">842 KB</div>
                                                                            </div>
                                                                        </a>
                                                                        <a class="chat-img-attach" href="#">
                                                                            <img width="182" height="137" alt="" src="{{ URL::asset('/assets/img/placeholder.jpg')}}">
                                                                            <div class="chat-placeholder">
                                                                                <div class="chat-img-name">placeholder.jpg</div>
                                                                                <div class="chat-file-desc">842 KB</div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <span class="chat-time">9:00 am</span>
                                                                </div>
                                                                <div class="chat-action-btns">
                                                                    <ul>
                                                                        <li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
                                                                        <li><a href="#" class="edit-msg"><i class="fas fa-pencil-alt"></i></a></li>
                                                                        <li><a href="#" class="del-msg"><i class="far fa-trash-alt"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-right">
                                                        <div class="chat-body">
                                                            <div class="chat-bubble">
                                                                <div class="chat-content">
                                                                    <p>OK!</p>
                                                                    <span class="chat-time">9:00 am</span>
                                                                </div>
                                                                <div class="chat-action-btns">
                                                                    <ul>
                                                                        <li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
                                                                        <li><a href="#" class="edit-msg"><i class="fas fa-pencil-alt"></i></a></li>
                                                                        <li><a href="#" class="del-msg"><i class="far fa-trash-alt"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-avatar">
                                                            <a href="{{url('profile')}}" class="avatar">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}">
                                                            </a>
                                                        </div>
                                                        <div class="chat-body">
                                                            <div class="chat-bubble">
                                                                <div class="chat-content">
                                                                    <p>Uploaded 3 files</p>
                                                                    <ul class="attach-list">
                                                                        <li><i class="fa fa-file"></i> <a href="#">example.avi</a></li>
                                                                        <li><i class="fa fa-file"></i> <a href="#">activity.psd</a></li>
                                                                        <li><i class="fa fa-file"></i> <a href="#">example.psd</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="chat-action-btns">
                                                                    <ul>
                                                                        <li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
                                                                        <li><a href="#" class="edit-msg"><i class="fas fa-pencil-alt"></i></a></li>
                                                                        <li><a href="#" class="del-msg"><i class="far fa-trash-alt"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="chat-bubble">
                                                                <div class="chat-content">
                                                                    <p>Consectetuorem ipsum dolor sit?</p>
                                                                    <span class="chat-time">8:50 am</span>
                                                                </div>
                                                                <div class="chat-action-btns">
                                                                    <ul>
                                                                        <li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
                                                                        <li><a href="#" class="edit-msg"><i class="fas fa-pencil-alt"></i></a></li>
                                                                        <li><a href="#" class="del-msg"><i class="far fa-trash-alt"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="chat-bubble">
                                                                <div class="chat-content">
                                                                    <p>OK?</p>
                                                                    <span class="chat-time">8:55 am</span>
                                                                </div>
                                                                <div class="chat-action-btns">
                                                                    <ul>
                                                                        <li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
                                                                        <li><a href="#" class="edit-msg"><i class="fas fa-pencil-alt"></i></a></li>
                                                                        <li><a href="#" class="del-msg"><i class="far fa-trash-alt"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-right">
                                                        <div class="chat-body">
                                                            <div class="chat-bubble">
                                                                <div class="chat-content img-content">
                                                                    <div class="chat-img-group clearfix">
                                                                        <p>Uploaded 6 Images</p>
                                                                        <a class="chat-img-attach" href="#">
                                                                            <img width="182" height="137" alt="" src="{{ URL::asset('/assets/img/placeholder.jpg')}}">
                                                                            <div class="chat-placeholder">
                                                                                <div class="chat-img-name">placeholder.jpg</div>
                                                                                <div class="chat-file-desc">842 KB</div>
                                                                            </div>
                                                                        </a>
                                                                        <a class="chat-img-attach" href="#">
                                                                            <img width="182" height="137" alt="" src="{{ URL::asset('/assets/img/placeholder.jpg')}}">
                                                                            <div class="chat-placeholder">
                                                                                <div class="chat-img-name">842 KB</div>
                                                                            </div>
                                                                        </a>
                                                                        <a class="chat-img-attach" href="#">
                                                                            <img width="182" height="137" alt="" src="{{ URL::asset('/assets/img/placeholder.jpg')}}">
                                                                            <div class="chat-placeholder">
                                                                                <div class="chat-img-name">placeholder.jpg</div>
                                                                                <div class="chat-file-desc">842 KB</div>
                                                                            </div>
                                                                        </a>
                                                                        <a class="chat-img-attach" href="#">
                                                                            <img width="182" height="137" alt="" src="{{ URL::asset('/assets/img/placeholder.jpg')}}">
                                                                            <div class="chat-placeholder">
                                                                                <div class="chat-img-name">placeholder.jpg</div>
                                                                                <div class="chat-file-desc">842 KB</div>
                                                                            </div>
                                                                        </a>
                                                                        <a class="chat-img-attach" href="#">
                                                                            <img width="182" height="137" alt="" src="{{ URL::asset('/assets/img/placeholder.jpg')}}">
                                                                            <div class="chat-placeholder">
                                                                                <div class="chat-img-name">placeholder.jpg</div>
                                                                                <div class="chat-file-desc">842 KB</div>
                                                                            </div>
                                                                        </a>
                                                                        <a class="chat-img-attach" href="#">
                                                                            <img width="182" height="137" alt="" src="{{ URL::asset('/assets/img/placeholder.jpg')}}">
                                                                            <div class="chat-placeholder">
                                                                                <div class="chat-img-name">placeholder.jpg</div>
                                                                                <div class="chat-file-desc">842 KB</div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <span class="chat-time">9:00 am</span>
                                                                </div>
                                                                <div class="chat-action-btns">
                                                                    <ul>
                                                                        <li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
                                                                        <li><a href="#" class="edit-msg"><i class="fas fa-pencil-alt"></i></a></li>
                                                                        <li><a href="#" class="del-msg"><i class="far fa-trash-alt"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-avatar">
                                                            <a href="{{url('profile')}}" class="avatar">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}">
                                                            </a>
                                                        </div>
                                                        <div class="chat-body">
                                                            <div class="chat-bubble">
                                                                <div class="chat-content">
                                                                    <ul class="attach-list">
                                                                        <li class="pdf-file"><i class="far fa-file-pdf"></i> <a href="#">Document_2016.pdf</a></li>
                                                                    </ul>
                                                                    <span class="chat-time">9:00 am</span>
                                                                </div>
                                                                <div class="chat-action-btns">
                                                                    <ul>
                                                                        <li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
                                                                        <li><a href="#" class="edit-msg"><i class="fas fa-pencil-alt"></i></a></li>
                                                                        <li><a href="#" class="del-msg"><i class="far fa-trash-alt"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                    <div class="chat chat-right">
                                                        <div class="chat-body">
                                                            <div class="chat-bubble">
                                                                <div class="chat-content">
                                                                    <ul class="attach-list">
                                                                        <li class="pdf-file"><i class="far fa-file-pdf"></i> <a href="#">Document_2016.pdf</a></li>
                                                                    </ul>
                                                                    <span class="chat-time">9:00 am</span>
                                                                </div>
                                                                <div class="chat-action-btns">
                                                                    <ul>
                                                                        <li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
                                                                        <li><a href="#" class="edit-msg"><i class="fas fa-pencil-alt"></i></a></li>
                                                                        <li><a href="#" class="del-msg"><i class="far fa-trash-alt"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-avatar">
                                                            <a href="{{url('profile')}}" class="avatar">
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}">
                                                            </a>
                                                        </div>
                                                        <div class="chat-body">
                                                            <div class="chat-bubble">
                                                                <div class="chat-content">
                                                                    <p>Typing ...</p>
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
                                                        <button class="btn btn-custom" type="button"><i class="fas fa-paper-plane"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Chats View -->
                        
                        <!-- Chat Right Sidebar -->
                        <div class="col-lg-3 message-view chat-profile-view chat-sidebar" id="task_window">
                            <div class="chat-window video-window">
                                <div class="fixed-header">
                                    <ul class="nav nav-tabs nav-tabs-bottom">
                                        <li class="nav-item"><a class="nav-link" href="{{url('#calls_tab')}}" data-bs-toggle="tab">Calls</a></li>
                                        <li class="nav-item"><a class="nav-link active" href="{{url('#profile_tab')}}" data-bs-toggle="tab">Profile</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content chat-contents">
                                    <div class="content-full tab-pane" id="calls_tab">
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
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}">
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
                                                                <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}">
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
                                    <div class="content-full tab-pane show active" id="profile_tab">
                                        <div class="display-table">
                                            <div class="table-row">
                                                <div class="table-body">
                                                    <div class="table-content">
                                                        <div class="chat-profile-img">
                                                            <div class="edit-profile-img">
                                                                <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="">
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
                                                        <div class="transfer-files">
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
                        <!-- /Chat Right Sidebar -->
                        
                    </div>
                    <!-- /Chat Main Wrapper -->
                    
                </div>
                <!-- /Chat Main Row -->
@component('components.model-popup') 
@endcomponent 
           
@section('script')        
    <!-- Dropfiles JS -->
   <script src="{{ URL::asset('/assets/js/pages/dropfiles.init.js')}}"></script> 
 
 @endsection 

@endsection