@extends('layout.master')
@section('content')
    <!--Feature-->
    <section id="feature" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="header-section text-center">
                    <h2>Events</h2>
                    <hr class="bottom-line">
                </div>
                @if(!$events->isEmpty())
                    @foreach($events as $event)
                        <div class="col-md-6 col-sm-6 mart20">
                            <div class="service-box card">
                                <h3 class="card-header">{{$event->title}}</h3>
                                <div class="card-body">
                                    <p style="text-align: initial" class="card-text">{{substr($event->description, 0, 100)}}... <a href={{url("/event-details/".$event->id)}}>MORE DETAILS</a></p>
                                    <p class="card-subtitle mb-2 text-muted">Location:
                                        <strong>{{$event->location}}</strong></p>
                                    <p class="card-subtitle mb-2 text-muted">To: <strong>{{date("F j, Y, g:i a",strtotime($event->start_date))}}</strong>
                                    </p>
                                    <p class="card-subtitle mb-2 text-muted">From:
                                        <strong>{{date("F j, Y, g:i a",strtotime($event->end_date))}} </strong></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="alert alert-warning" role="alert">
                        No event found
                    </div>
                @endif
            </div>
            <div class="row text-center">{{$events->links()}}</div>
        </div>
    </section>
    <!--/ feature-->
@stop

