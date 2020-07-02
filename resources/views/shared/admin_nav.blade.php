<!--Navigation bar-->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url("home")}}">LOGO</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li class="<?php if (Request::segment(2) === "board-members" || Request::segment(2) === "board-member") echo "btn-trial"?> ">
                    <a
                            href="<?=url("admin/board-members")?>">Board Member</a></li>
                <li class="<?php if (Request::segment(2) === "news-events" || Request::segment(2) === "news-event") echo "btn-trial"?>">
                    <a
                            href="{{url("admin/news-events")}}">Events</a></li>
                <li class="<?php if (Request::segment(2) === "galleries" || Request::segment(2) === "gallery" || Request::segment(2) === "gallery-image") echo "btn-trial"?>">
                    <a
                            href="{{url("admin/galleries")}}">Media Gallery</a></li>
                <li class="<?php if (Request::segment(2) === "jobs" || Request::segment(2) === "job") echo "btn-trial"?>">
                    <a
                            href="{{url("admin/jobs")}}">Jobs</a></li>
                <li class="btn-trial"><a href="{{url("logout")}}">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<!--/ Navigation bar-->
