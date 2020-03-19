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
                <li><a href="{{url("admin/board-members")}}">Board Member</a></li>
                <li><a href="{{url("admin/news-events")}}">News & Events</a></li>
                <li><a href="{{url("admin/media-gallery")}}">Media Gallery</a></li>
                <li><a href="{{url("admin/job-opportunities")}}">Jobs</a></li>
                <li class="btn-trial"><a href="{{url("logout")}}">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<!--/ Navigation bar-->
