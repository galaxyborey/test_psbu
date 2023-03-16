<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>{{$slug}}</h1>
            <ul class="breadcrumbs">
                <li><a href="{{url('')}}">Home</a></li>
                <li class="active">{{$slug}}</li>
            </ul>
        </div>
    </div>
</div>
<div class="contact-1 content-area-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                <!-- Contact form start -->
                <div class="contact-form">
					@if(Session::has('message'))
					<div class="breadLine" style="text-align: center;margin-top: 15px;">
					  <i class="fa fa-check" style="color:#078e57;"> </i> <span style="color:#078e57;">{!!Session::get('message')!!} </span>
					</div>
					@endif
                    <form id="contact_form" action="{{url('sendContactUs')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group fullname">
                                    <input type="text" name="full_name" class="input-text" placeholder="Full Name" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group enter-email">
                                    <input type="email" name="email" class="input-text" placeholder="Enter email" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group subject">
                                    <input type="text" name="subject" class="input-text" placeholder="Subject" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group number">
                                    <input type="text" name="phone" class="input-text" placeholder="Phone Number" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
                                <div class="form-group message">
                                    <textarea class="input-text" name="message" placeholder="Write message" required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                                <div class="send-btn mb-0">
                                    <button type="submit" class="btn-md btn-theme">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Contact form end -->
            </div>
            <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-6 col-xs-12">
                <!-- Contact details start -->
                <div class="contact-details">
                    <div class="main-title-2">
                        <h3>Our Address</h3>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="media-body">
                            <h4>Office Address</h4>
                            <p>{{\App\Http\Controllers\HomeController::getConfitData('address')}}</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h4>Phone Number</h4>
                            <p>
                                {{\App\Http\Controllers\HomeController::getConfitData('phone')}}
                            </p>
                        </div>
                    </div>
                    <div class="media mb-0">
                        <div class="media-left">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <h4>Email Address</h4>
                            <p>
                                {{\App\Http\Controllers\HomeController::getConfitData('email')}}
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Contact details end -->
            </div>
        </div>
    </div>
</div>
