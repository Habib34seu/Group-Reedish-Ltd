<link href="{{asset('frontend/css/management.css')}}" rel="stylesheet" type="text/css"/>
@extends('index_about')
@section('content')
<section class="section1">
    	<div class="container clearfix">
			<div class="content col-lg-12 col-md-12 col-sm-12 clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6">
                <h4 class="title">Contact Form</h4>
                <div id="message"></div>
                
                
                <form  name="save_user" method="post" >
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <input type="text" name="fullname" id="name" required="1" class="form-control" placeholder="Type your name"> 
                        <input type="text" name="email" required="1" id="email" class="form-control" placeholder="Enter your email address"> 
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <input type="text" name="phone" required="1"  id="phone" class="form-control" placeholder="Enter your contact number">
                        <input type="text" name="subject" required="1" id="subject" class="form-control" placeholder="Type your subject"> 
                    </div>
                    <div class="clearfix"></div>                   
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <textarea class="form-control" name="message" id="comments" rows="3" placeholder="Type your message / query / complain / requirements"></textarea>
                    </div>   
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                       
                        
                            <input type="submit" name="submit" value="Send" class="btn btn-sm btn-danger">
                        
                    </div>
                </form>
                
                
                
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 contactus">

                <h4 class="title">Contact Details</h4>

                <p>Feel free to drop us a mail at our inbox, a representative from the concerned department shall get back to you at earliest.</p>

                   <div class="widget col-lg-6 col-md-5 col-sm-12">

                    

                   <ul class="contact_details">

                        <li><i class="fa fa-home"></i> <strong>Group Reedisha</strong></li>

                        <li>36, Shahid Tajuddin Ahmed Sarani, Tejgaon Industrial Area, Dhaka-1208, Bangladesh</li>

                        <li><i class="fa fa-phone-square"><strong> Phone:</strong> </i> +88-02-8891219 , +88-02-8891572</li>

                        <li><i class="fa fa-phone-square"><strong> PABX:</strong> </i> +88-02-8891267-70</li>

                        <li><i class="fa fa-phone-square"><strong> Fax:</strong> </i> +88-02-8891523</li>

                    </ul><!-- contact_details -->

                </div><!-- end widget -->  

                <div class="widget col-lg-6 col-md-5 col-sm-12">

                     

                    <ul class="contact_details">

                       <!-- <li><i class="fa fa-phone-square"></i><strong> Hot line : </strong>(+88) 9666308</li>-->



                        <li><i class="fa fa-envelope-o"><strong> Email:</strong> </i> info@groupreedisha-bd.com  </li>

                          <!--<li><i class="fa fa-envelope-o"><strong> Webmail:</strong> </i> info@reedisha-bd.com</li>-->

                        <li><i class="fa fa-globe"><strong> Web:</strong></i> <a href="http://www.groupreedisha-bd.com">www.groupreedisha-bd.com</a></li>

                        <br><li><strong>Let's Connect with</strong></li>

                        <li> <div class="social_buttons">
                            <a href="https://facebook.com" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.google.com" data-toggle="tooltip" data-placement="bottom" title="Google+"><i class="fa fa-google-plus"></i></a>
                            <a target="blank" style="line-height: 20px; background: rgb(145,37,48);
background: -moz-linear-gradient(top, rgba(145,37,48,1) 0%, rgba(185,45,57,1) 20%, rgba(145,37,48,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(145,37,48,1)), color-stop(20%,rgba(185,45,57,1)), color-stop(100%,rgba(145,37,48,1)));
background: -webkit-linear-gradient(top, rgba(145,37,48,1) 0%,rgba(185,45,57,1) 20%,rgba(145,37,48,1) 100%);
background: -o-linear-gradient(top, rgba(145,37,48,1) 0%,rgba(185,45,57,1) 20%,rgba(145,37,48,1) 100%);
background: -ms-linear-gradient(top, rgba(145,37,48,1) 0%,rgba(185,45,57,1) 20%,rgba(145,37,48,1) 100%);
background: linear-gradient(to bottom, rgba(145,37,48,1) 0%,rgba(185,45,57,1) 20%,rgba(145,37,48,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#912530', endColorstr='#912530',GradientType=0 ); padding:2px; width: auto; font-weight: bold; font-size: 13px; color: white; border: 1px solid #666;" href="http://mail.groupreedisha-bd.com/" data-toggle="tooltip" data-placement="bottom" title="Webmail">Webmail</a>

                        </div>
                        </li>

                    </ul><!-- contact_details -->

                     

                </div><!-- end widget -->  

                </div>

    

                <div class="clearfix"></div>

                <div class="divider"></div>

                

              

            </div><!-- end content -->

        </div><!-- end container -->

	</section><!-- end section -->
@endsection