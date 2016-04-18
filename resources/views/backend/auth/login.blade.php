@extends('layouts.canvas')
@section('htmlschema')@endsection
@section('seo')@endsection
@section('jsonschema')@endsection
@section('title')@endsection
@section('goodrelations')@endsection
@section('ppstyle')@endsection
@section('scripts')@endsection
@section('pp_header_scripts')@endsection
@section('bodytag')@endsection
@section('bodyschema')@endsection

@section('submenu')

@endsection

@section('slider')
@endsection

@section('intro')@endsection

@section('page-title')
        <section id="page-title">

            <div class="container clearfix">
                <h1>Login & Register</h1>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Login</li>
                </ol>
            </div>

        </section><!-- #page-title end -->
@endsection

@section('pt-small')@endsection

@section('sidebar')@endsection

@section('widgets')@endsection

@section('content')
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <div class="accordion accordion-lg divcenter nobottommargin clearfix" style="max-width: 550px;">

                        <div class="acctitle"><i class="acc-closed icon-lock3"></i><i class="acc-open icon-unlock"></i>Login to your Account</div>
                        <div class="acc_content clearfix">
                         {!! Form::open(array('url' => 'login', 'id' => 'login-form', 'class' => 'nobottommargin')) !!}
                            {!! csrf_field() !!}
                                <div class="col_full form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="register-form-email">Email Address:</label>
                                    <input type="text" id="register-form-email" name="register-form-email" value="" class="form-control" />
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>

                                <div class="col_full form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="login-form-password">Password:</label>
                                    <input type="password" id="login-form-password" name="login-form-password" value="" class="form-control" />
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>

                                <div class="col_full nobottommargin">
                                    <button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
                                    <a href="#" class="fright">Forgot Password?</a>
                                </div>
                            {!! Form::close() !!}
                        </div>

                        <div class="acctitle"><i class="acc-closed icon-user4"></i><i class="acc-open icon-ok-sign"></i>New Signup? Register for an Account</div>
                        <div class="acc_content clearfix">

                         {!! Form::open(array('url' => '/register', 'id' => 'register-form', 'class' => 'form-register')) !!}
                         {!! csrf_field() !!}

                                <div class="col_full">
                                    <label for="register-form-name">Name:</label>
                                    <input type="text" id="register-form-name" name="register-form-name" value="" class="form-control" />
                                </div>

                                <div class="col_full form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="register-form-email">Email Address:</label>
                                    <input type="text" id="register-form-email" name="register-form-email" value="" class="form-control" />
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>

                                <div class="col_full form-group">
                                    <label for="register-form-username">Choose a Username:</label>
                                    <input type="text" id="register-form-username" name="register-form-username" value="" class="form-control" />
                                </div>

                                <div class="col_full form-group">
                                    <label for="register-form-phone">Phone:</label>
                                    <input type="text" id="register-form-phone" name="register-form-phone" value="" class="form-control" />
                                </div>

                                <div class="col_full form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="register-form-repassword">Password:</label>
                                    <input type="password" id="register-form-repassword" name="register-form-repassword" value="" class="form-control" />

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>

                                <div class="col_full nobottommargin form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <label class="register-form-repassword ">Re-enter Password:</label>
                                        <input type="password" class="form-control" name="password_confirmation">
                                        @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span>
                                        @endif
                                </div>
<br style="clear:both" />
                                <div class="col_full nobottommargin">
                                    <button class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" value="register">Register Now</button>
                                </div>
                            {!! Form::close() !!}
                        </div>

                    </div>

                </div>

            </div>

        </section><!-- #content end -->
@endsection

@section('after-content')@endsection
@section('footer_scripts')@endsection
@section('pp_footer_scripts')@endsection
@section('inlinejs')@endsection
@section('ppinline')@endsection