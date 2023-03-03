@if(!Route::is(['approval-setting','change-password','cron-setting','email-settings','invoice-settings','leave-type','localization','mail-view','notifications-settings','performance-setting','roles-permissions','salary-settings','settings','theme-settings','toxbox-setting']))
<!-- Page Header -->
<div class="row">
    <div class="col-md-12">
        <div class="page-head-box">
            <h3>{{ $title }}</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('index')}}">{{ $li_1 }}</a></li>
                    @if(Route::is(['job-aptitute','questions']))
                    <li class="breadcrumb-item ">{{ $li_3 }}</li>
                    <li class="breadcrumb-item">{{ $li_4 }}</li>
                    @endif
                    <li class="breadcrumb-item active" aria-current="page">{{ $li_2 }}</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- /Page Header -->
@endif 
@if(Route::is(['approval-setting','change-password','cron-setting','email-settings','invoice-settings','leave-type','localization','mail-view','notifications-settings','performance-setting','roles-permissions','salary-settings','settings','theme-settings','toxbox-setting']))
<div class="row">
    <div class="col-md-12">        

        <!-- Page Header -->
        <div class="row">
            <div class="col-md-12">
                <div class="page-head-box">
                    <h3>{{ $title }}</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            @if(Route::is(['mail-view','leave-type']))
                            <li class="breadcrumb-item"><a href="{{url('index')}}">{{ $li_1 }}</a></li>
                             @endif 
                             @if(!Route::is(['mail-view','leave-type']))
                            <li class="breadcrumb-item"><a href="{{url('settings')}}">{{ $li_1 }}</a></li>
                            @endif
                            <li class="breadcrumb-item active" aria-current="page">{{ $li_2 }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    <!-- /Page Header -->
  @endif 