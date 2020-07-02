<!--Navigation bar-->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url("home")}}">
                <img style="width: 200px; height: 61px;" src="{{secure_asset("/assets/images-logo.jpeg")}}"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">

            <ul class="nav navbar-nav navbar-right" style="margin-top: 20px;">
                <li class="<?php if (Request::segment(1) === null || Request::segment(1) === "home") echo "btn-trial" ?>">
                    <a href="{{ url("home") }}">Home</a>
                </li>
                <li class="<?php if (Request::segment(1) === "news-events") echo "btn-trial" ?>">
                    <a href="{{url("news-events")}}">Events</a>
                </li>
                <li class="<?php if (Request::segment(1) === "media-gallery") echo "btn-trial" ?>">
                    <a href="{{url("media-gallery")}}">Media Gallery</a>
                </li>
                <li class="<?php if (Request::segment(1) === "board-members") echo "btn-trial" ?>">
                    <a href="{{url("board-members")}}">Board Member</a>
                </li>
                <li class="<?php if (Request::segment(1) === "contact-us") echo "btn-trial" ?>">
                    <a href="{{url("contact-us")}}">Contact Us</a>
                </li>
                <li class="btn-trial"><a href="{{url("job-opportunities")}}">Jobs</a></li>
            </ul>
        </div>
    </div>
</nav>
<!--/ Navigation bar-->
