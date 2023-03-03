    <!-- Content Starts -->
    <div class="card">
        <div class="card-body">
            <!-- <h4 class="card-title">Solid justified</h4> -->
            <ul class="nav nav-tabs nav-tabs-solid nav-justified">
                @if(!Route::is(['user-dashboard']))
                <li class="nav-item"><a class="nav-link" href="{{url('user-dashboard')}}">Dashboard</a></li>
                @endif
                @if(Route::is(['user-dashboard']))
                <li class="nav-item"><a class="nav-link active" href="{{url('user-dashboard')}}">Dashboard</a></li>
                @endif
                @if(!Route::is(['user-all-jobs']))
                <li class="nav-item"><a class="nav-link" href="{{url('user-all-jobs')}}">All </a></li>
                @endif
                @if(Route::is(['user-all-jobs']))
                <li class="nav-item"><a class="nav-link active" href="{{url('user-all-jobs')}}">All </a></li>
                @endif
                @if(!Route::is(['saved-jobs']))
                <li class="nav-item"><a class="nav-link" href="{{url('saved-jobs')}}">Saved</a></li>
                @endif
                @if(Route::is(['saved-jobs']))
                <li class="nav-item"><a class="nav-link active" href="{{url('saved-jobs')}}">Saved</a></li>
                @endif
                @if(!Route::is(['applied-jobs']))
                <li class="nav-item"><a class="nav-link" href="{{url('applied-jobs')}}">Applied</a></li>
                @endif
                @if(Route::is(['applied-jobs']))
                <li class="nav-item"><a class="nav-link active" href="{{url('applied-jobs')}}">Applied</a></li>
                @endif
                @if(!Route::is(['interviewing','job-aptitute','questions']))
                <li class="nav-item"><a class="nav-link" href="{{url('interviewing')}}">Interviewing</a></li>
                @endif
                @if(Route::is(['interviewing','job-aptitute','questions']))
                <li class="nav-item"><a class="nav-link active" href="{{url('interviewing')}}">Interviewing</a></li>
                @endif
                @if(!Route::is(['offered-jobs']))
                <li class="nav-item"><a class="nav-link" href="{{url('offered-jobs')}}">Offered</a></li>
                @endif
                @if(Route::is(['offered-jobs']))
                <li class="nav-item"><a class="nav-link active" href="{{url('offered-jobs')}}">Offered</a></li>
                @endif
                @if(!Route::is(['visited-jobs']))
                <li class="nav-item"><a class="nav-link" href="{{url('visited-jobs')}}">Visitied </a></li>
                @endif
                @if(Route::is(['visited-jobs']))
                <li class="nav-item"><a class="nav-link active" href="{{url('visited-jobs')}}">Visitied </a></li>
                @endif
                @if(!Route::is(['archived-jobs']))
                <li class="nav-item"><a class="nav-link" href="{{url('archived-jobs')}}">Archived </a></li>
                @endif
                @if(Route::is(['archived-jobs']))
                <li class="nav-item"><a class="nav-link active" href="{{url('archived-jobs')}}">Archived </a></li>
                @endif
            </ul>
        </div>
    </div>  
    <!-- /Content End -->