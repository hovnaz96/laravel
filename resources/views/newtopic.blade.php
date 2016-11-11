@extends("layout/site")

@section('content')
 
 @if ($errors->has('reply'))                               
         <strong>{{ $errors->first('reply') }}</strong>
@endif


@if(Session::has('error'))

    {{ Session::get('error') }}

@endif
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 breadcrumbf">
                <a href="#">New Topic</a> 
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- POST -->
               <!-- POST -->
                            <div class="post">
                                <form action="/sendreply" class="form" method="post" >
                                    {{ csrf_field() }}
                                    <div class="topwrap">
                                        <div class="userinfo pull-left">
                                            <div class="avatar">
                                                <img src="images/avatar4.jpg" alt="" />
                                                <div class="status red">&nbsp;</div>
                                            </div>

                                            <div class="icons">
                                                <img src="images/icon3.jpg" alt="" /><img src="images/icon4.jpg" alt="" /><img src="images/icon5.jpg" alt="" /><img src="images/icon6.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div class="posttext pull-left">
                                            <div class="textwraper">
                                                <div class="postreply">Post a Reply</div>
                                                <textarea name="reply" id="reply" placeholder="Type your message here"></textarea>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>                              
                                    <div class="postinfobot">

                                        <div class="notechbox pull-left">
                                            <input type="checkbox" name="note" id="note" class="form-control" />
                                        </div>

                                        <div class="pull-left">
                                            <label for="note"> Email me when some one post a reply</label>
                                        </div>

                                        <div class="pull-right postreply">
                                            <div class="pull-left smile"><a href="#"><i class="fa fa-smile-o"></i></a></div>
                                            <div class="pull-left"><button type="submit" class="btn btn-primary">Post Reply</button></div>
                                            <div class="clearfix"></div>
                                        </div>


                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div><!-- POST -->
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div><!-- POST -->
                @endsection

            
