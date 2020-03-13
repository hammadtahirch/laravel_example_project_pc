
@extends('layout.master')
@include("shared.top_nav")
@include("shared.banner")
@section('content')
    <!--Feature-->
    <section id="feature" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="header-section text-center">
                    <h2>About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
                    <hr class="bottom-line">
                </div>
                <div class="feature-info">
                    <div class="fea">
                        <div class="col-md-12">
                            <div class="heading pull-right">
                                <h4>Latest Technologies</h4>
                                <p>Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin metus non urna in eros tincidunt convallis id id nisi in interdum.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    @include("shared.footer")
    <!--/ feature-->
@stop

