@extends('layouts.adminloginrightside')

@section('content')
	<div id="page-wrapper">
        <div><a class="sr-only sr-only-focusable" href="#maincontent">Skip to main content</a></div>
        <div id="page" class="container-fluid mt-0">
            <div id="page-content" class="row">
                <div id="region-main-box" class="col-12">
                    <section id="region-main" class="col-12" aria-label="Content">
                        <span class="notifications" id="user-notifications"></span>
                        <div role="main"><span id="maincontent"></span>
                            <div class="row justify-content-center">
                                <div class="page-brand-info"></div>
                                <div class="p-0 loginform">
                                    <div class="card">
                                        <div class="card-block p-5">
                                                    <h2 class="card-header text-center bg-transparent mb-3 p-4" ><img src="{{ asset('themes/webfront/images/psbu_logo_web_72.png')}}" class="img-fluid" title="PSBU Content" alt="PSBU Content"/></h2>
                                            <div class="card-body">
                                                <div class="row justify-content-md-center">
                                                    <div class="col-md-12">
                                                        <h3 class="mb-4">Log In</h3>
                                                        <form class="my-3" action="{{ route('login') }}" method="POST" id="login">
                                                        	{{ csrf_field() }}
                                                          

                                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                                <label for="username" class="sr-only">
                                                                        E-mail/Username
                                                                </label>
                                                                <input type="email" name="email"
                                                                    class="form-control"
                                                                    value="{{ old('email') }}"
                                                                    placeholder="E-mail/Username"
                                                                    required autofocus>
                                                                @if ($errors->has('email'))
								                                    <span class="help-block">
								                                        <strong>{{ $errors->first('email') }}</strong>
								                                    </span>
								                                @endif
                                                            </div>

                                                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                                <label for="password" class="sr-only fa fa-unlock">Password</label>
                                                                <input type="password" name="password"
                                                                    class="form-control"
                                                                    placeholder="Password"
                                                                    required>
                                                                @if ($errors->has('password'))
								                                    <span class="help-block">
								                                        <strong>{{ $errors->first('password') }}</strong>
								                                    </span>
								                                @endif
                                                            </div>
                                                                <div class="rememberpass mt-3 checkbox-custom">
                                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                                    <label for="rememberme">Remember me</label>
                                                                    <a class="float-right" href="{{ URL('/')}}/login/forgot_password.php">Forgot Password?</a> 
                                                                </div>

                                                            <button type="submit" class="btn btn-primary btn-block mt-4" id="loginbtn">Log in</button>
                                                        </form>
                                                    </div>

                                                    <div class="col-md-12">


                                                        <footer class="page-copyright py-4">
                                                            @if (session('info'))
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-md-offset-2">
                                                                            <div class="alert alert-success">
                                                                                {{ session('info') }}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif

                                                            @if(count($errors))
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-md-12 ">
                                                                            <div class="alert alert-danger">
                                                                                <ul>
                                                                                    @foreach($errors->all() as $error)
                                                                                    <li>{{ $error }}</li>
                                                                                    @endforeach
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        </footer>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                    </section>
                </div>
            </div>
        </div>
        <footer id="page-footer" class="py-3 ">
            <div class="container">
                <div id="course-footer"></div>
                <div class="logininfo">You are not logged in.</div>
                <div class="homelink"><a href="{{ URL('/')}}" target="_blank">Home</a></div>
            </div>
        </footer>
    </div>
@endsection
