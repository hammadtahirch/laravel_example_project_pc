@extends('layout.master')
@section('content')
    <!--Feature-->
    <section id="feature" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="header-section text-center">
                    <h2>Details</h2>
                    <hr class="bottom-line">
                </div>
                <div class="col-md-12 col-sm-12 mart20">
                    <div class="service-box card">
                        <h3 class="card-header">{{$job->title}}</h3>
                        <div class="card-body">
                            <p style="text-align: initial" class="card-text">{{$job->description}}</p>
                            <p class="card-subtitle mb-2 text-muted">Organization:
                                <strong>{{$job->organization_name}}</strong></p>
                            <p class="card-subtitle mb-2 text-muted">Start:
                                <strong>{{date(strtotime("F j, Y, g:i a",$job->start_app_date))}}</strong>
                            </p>
                            <p class="card-subtitle mb-2 text-muted">End:
                                <strong>{{date("F j, Y, g:i a",strtotime($job->last_app_date))}} </strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ feature-->
@stop

