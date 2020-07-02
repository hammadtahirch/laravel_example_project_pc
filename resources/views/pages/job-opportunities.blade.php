@extends('layout.master')
@section('content')
    <!--Feature-->
    <section id="feature" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="header-section text-center">
                    <h2>Jobs</h2>
                    <hr class="bottom-line">
                </div>
                @if(!$jobs->isEmpty())
                    @foreach($jobs as $job)
                        <div class="col-md-6 col-sm-6 mart20">
                            <div class="service-box card">
                                <h3 class="card-header">{{$job->title}}</h3>
                                <div class="card-body">
                                    <p style="text-align: initial" class="card-text">{{substr($job->description, 0, 100)}}... <a href={{url("/job-details/".$job->id)}}>MORE DETAILS</a></p>
                                    <p class="card-subtitle mb-2 text-muted">Organization:
                                        <strong>{{$job->organization_name}}</strong></p>
                                    <p class="card-subtitle mb-2 text-muted">Start:
                                        <strong>{{date("F j, Y, g:i a",strtotime($job->start_app_date))}}</strong>
                                    </p>
                                    <p class="card-subtitle mb-2 text-muted">End:
                                        <strong>{{date("F j, Y, g:i a",strtotime($job->last_app_date))}} </strong></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="alert alert-warning" role="alert">
                        No job found.
                    </div>
                @endif
            </div>
            <div class="row text-center">{{$jobs->links()}}</div>
        </div>
    </section>
    <!--/ feature-->
@stop

