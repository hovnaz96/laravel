@extends('layout/site')
@section('content')

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 breadcrumbf">
                <a href="#">Login</a> 
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- POST -->
                <div class="post">
                    <form class="form newtopic"  role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <div class="postinfotop">
                            <h2>Login</h2>
                        </div>

                        <!-- acc section -->
                        <div class="accsection">
                            <div class="acccap">
                                <div class="userinfo pull-left">&nbsp;</div>
                                <div class="posttext pull-left"><h3>Required Fields</h3></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="topwrap">
                                <div class="userinfo pull-left">
                              
                                </div>
                                <div class="posttext pull-left">
                                    
                                    
                                
                                   
                                    
                                 <div class="row">
                                        <div class="col-lg-6 col-md-6 {{ $errors->has('email') ? ' has-error' : '' }}">
                                            <input type="text" placeholder="Email" name="email"  value="{{ old('email') }}" class="form-control" />
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-lg-6 col-md-6 {{ $errors->has('password') ? ' has-error' : '' }}">
                                            <input type="password" placeholder="Password" name="password" class="form-control"  />
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                    

                                </div>
                                <div class="clearfix"></div>
                            </div>  
                        </div><!-- acc section END -->



                 




                   





                        <div class="postinfobot">

                            <div class="notechbox pull-left">
                                <input type="checkbox" name="note" id="note" class="form-control" />
                            </div>

                            <div class="pull-left lblfch">
                                <label for="note"> I agree with the Terms and Conditions of this site</label>
                            </div>

                            <div class="pull-right postreply">
                                <div class="pull-left smile"><a href="#"><i class="fa fa-smile-o"></i></a></div>
                                <div class="pull-left"><button type="submit" class="btn btn-primary">Sign Up</button></div>
                                <div class="clearfix"></div>
                            </div>


                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div><!-- POST -->
                @endsection