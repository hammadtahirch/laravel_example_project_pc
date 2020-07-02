@extends('layout.master')

@section('content')
    <!--Feature-->
    <section id="feature" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="header-section text-center">
                    <h2>Meet Our Member</h2>
                    <hr class="bottom-line">
                </div>
                @if(!$board_members->isEmpty())
                    @foreach($board_members as $boardMember)
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="pm-staff-profile-container">
                                <div class="pm-staff-profile-image-wrapper text-center">
                                    <div class="pm-staff-profile-image">
                                        <img src="{{asset("images/".$boardMember->picture_url)}}" alt=""
                                             class="img-thumbnail img-circle"/>
                                    </div>
                                </div>
                                <div class="pm-staff-profile-details text-center">
                                    <p class="pm-staff-profile-name ">{{$boardMember->name}}</p>
                                    <p class="pm-staff-profile-title"  style="font-size: 14px;font-weight: bold;">
                                        <a href="mailto:{{$boardMember->email}}"
                                           class="pm-staff-profile-title">
                                            Chapter `{{$boardMember->chapter_designation}}`, `{{$boardMember->post}}`
                                            AT `{{$boardMember->organization_name}}`</a>
                                    </p>
                                    <p class="pm-staff-profile-bio">{{$boardMember->description}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="alert alert-warning" role="alert">
                        No member found.
                    </div>
                @endif

            </div>
            <div class="row text-center">{{$board_members->links()}}</div>
        </div>
    </section>

    <!--/ feature-->
@stop

