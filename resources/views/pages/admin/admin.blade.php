@extends('layout.master')

@section('content')
    <!--Feature-->
    <section id="feature" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="login-box-body">
                        <p class="login-box-msg mart20">Administrator Login</p>
                        <div class="form-group">
                            <?php echo flashMessage(); ?>
                            <form name="login-form" method="post" action="{{url("verify_login")}}">
                                @csrf
                                <div class="form-group has-feedback">
                                    <!----- username -------------->
                                    <input class="form-control" placeholder="Username" id="loginid" type="text"
                                           autocomplete="off" name="email"/>
                                    <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;"
                                          id="span_loginid"></span>
                                    <!---Alredy exists  ! -->
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <!----- password -------------->
                                    <input class="form-control" placeholder="Password" id="loginpsw" type="password"
                                           autocomplete="off" name="password"/>
                                    <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;"
                                          id="span_loginpsw"></span>
                                    <!---Alredy exists  ! -->
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <button type="submit" class="btn btn-green btn-block btn-flat">Sign In
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ feature-->
@stop

