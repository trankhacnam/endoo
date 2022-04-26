@extends('user.layouts.master')
@section('content')
    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h6>ENDO QA</h6>
                                        <h2>We put your mind at ease throughout the production of your goods</h2>
                                       {{--  <p>This template is brought to you by TemplateMo website. Feel free to use this for a commercial purpose. You are not allowed to redistribute the template ZIP file on any other template website. Thank you.</p> --}}
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="border-first-button scroll-to-section">
                                            <a href="#contact">Free Quote</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="{{ asset('image/1.png') }}" alt="" style="border-radius: 40px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="about" class="about section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="about-left-image    wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="{{ asset('image/2.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center    wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="about-right-content">
                                <div class="section-heading">
                                    <h6>About Us</h6>
                                    <h4>Who is ENDO <em>QA</em></h4>
                                    <div class="line-dec"></div>
                                </div>
                                <p> * ENDO WAS ESTABLISHED IN VIET NAM SINCE 1993。<br>
                                    * WE ARE MAINTAINING A LONG LASTING PARTNERSHIP WITH SEVERAL FACTORIES IN THE NORTH OF VIETNAM。<br>
                                    * WE ARE FULLY DEDICATED TEAM PERFORMING WITH INTEGRITY。<br>
                                    * WE ARE ANINTERNATIONAL TEAM（CANADIAN-VIETNAMESE-FILIPINO）。</p>
                                <div class="row">
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="skill-item first-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                                            <div class="progress" data-percentage="90">
                                                <span class="progress-left">
                                                    <span class="progress-bar"></span>
                                                </span>
                                                <span class="progress-right">
                                                    <span class="progress-bar"></span>
                                                </span>
                                                <div class="progress-value">
                                                    <div>
                                                        40 years<br>
                                                        <span>Experience</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="skill-item second-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                                            <div class="progress" data-percentage="80">
                                                <span class="progress-left">
                                                    <span class="progress-bar"></span>
                                                </span>
                                                <span class="progress-right">
                                                    <span class="progress-bar"></span>
                                                </span>
                                                <div class="progress-value">
                                                    <div>
                                                        15<br>
                                                        <span>Factory</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="skill-item third-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                                            <div class="progress" data-percentage="80">
                                                <span class="progress-left">
                                                    <span class="progress-bar"></span>
                                                </span>
                                                <span class="progress-right">
                                                    <span class="progress-bar"></span>
                                                </span>
                                                <div class="progress-value">
                                                    <div>
                                                        16000<br>
                                                        <span>Workers</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="services" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading    wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h6>Our Services</h6>
                        <h4>What ENDO QA <em>Provides</em></h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="naccs">
                        <div class="grid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="menu">
                                        <div class="first-thumb active">
                                            <div class="thumb">
                                                <span class="icon"><img src="{{ asset('image/icon_factory.png') }}" alt=""></span>
                                                Our Factory
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img src="{{ asset('image/icon_team.png') }}" alt=""></span>
                                                Our Team
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img src="{{ asset('bower_components/demo-bower/assets/images/service-icon-03.png') }}" alt=""></span>
                                                Endo Do
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img src="{{ asset('image/icon_help.png') }}" alt=""></span>
                                                Endo Help
                                            </div>
                                        </div>
                                        <div class="last-thumb">
                                            <div class="thumb">
                                                <span class="icon"><img src="{{ asset('image/icon_why_me.png') }}" alt=""></span>
                                                Why Endo
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <ul class="nacc">
                                        <li class="active">
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Why our Factory?</h4>
                                                                <p><span><i class="fa fa-check"></i> More than 40 years of experience in manufacturing, trading and exporting wide variety of apparel products such jackets, coats, trousers, shorts, shirts, etc.</span></p>
                                                                <p><span><i class="fa fa-check"></i> Capacity to handle high-volume projects in a timely manner with 15 sewing factories, several auxiliary facilities and 16,000 workers.</span></p>
                                                                <p><span><i class="fa fa-check"></i> Competitive advantages: Workforce expertise, high -quality standards, flexible and competitive price, punctuality work.</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <p ><span><i class="fa fa-check"></i>Ability to satisfy even the most demanding markets like USA, EU, Canada and Japan has been proved.</span></p>
                                                                <p ><span><i class="fa fa-check"></i>Customers: Columbia, Calvin Klein, Zara, Mango, Uniqlo, Nike, Puma, Decathlon, Adidas, etc.</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4>WORKING AS A TEAM</h4>
                                                                <p><span><i class="fa fa-check"></i> T-E-A-MMMMMMMMMM : Together Each Achieves More. This is more true than ever.</span></p>
                                                                <p><span><i class="fa fa-check"></i> It is important that we embrace opportunities through this period of uncertainty.</span></p>
                                                                <p><span><i class="fa fa-check"></i> We all need to survive, and cooperation is a key to our mutual survival and growth.</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <p><span><i class="fa fa-arrow-right" aria-hidden="true"></i> We are always ready to fully support you</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4>WHAT CAN ENDO DO FOR YOU?</h4>
                                                                <p><span><i class="fa fa-check"></i> Ensure on time, defect-free shipments and risk-elimination in shipping final garments.</span></p>
                                                                <p><span><i class="fa fa-check"></i> Identify problems at the early stages of production, save your money, time, effort and most importantly, put your mind at ease.</span></p>
                                                                <p><span><i class="fa fa-check"></i> Provide fixed pricing. ENDO QA charges per daily visit, not by 1 man-day.</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <h4>HOW CAN WE DO THAT?</h4>
                                                                <p><span><i class="fa fa-check"></i> ENDO has maintained a sustainable partnership with factories thanks to their credibility and excellent services.</span></p>
                                                                <p><span><i class="fa fa-check"></i> ENDO team is right next to factories allows us to closely follow production process, take . immediate action if needed and report to you. Our QA employees are determined to be your eyes, ears and voice in the factories.</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-12 align-self-center">
                                                            <div class="left-text">
                                                                <h4>WHY ENDO?</h4>
                                                                <p><span><i class="fa fa-check"></i> The fall 2022 collection is extra special, hitting stores in a post-pandemic buying spree. The pressure is on to deliver top- notch quality on time and within budget.</span></p>
                                                                <p><span><i class="fa fa-arrow-right"></i> ENDO IS HERE TO HELP </span></p>
                                                                <p><span><i class="fa fa-check"></i> Travelling remains unpredictable. You want trustworthy eyes on the ground available 24/7.</span></p>
                                                                <p><span><i class="fa fa-arrow-right"></i> ENDO IS HERE TO HELP </span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-12 align-self-center">
                                                            <div class="left-text">
                                                                <h4>ARE YOU IN?</h4>
                                                                <h4>ENDO IS HERE TO DELIVER, WITH EXPERIENCE AND INTEGRITY</h4>
                                                                <p><span><i class="fa fa-check"></i> We commit to bring you the best service you can ask for. Simply send us your tech pack and leave the rest for us to do</span></p>
                                                                <p><span><i class="fa fa-check"></i> It's our tremendous honor to work with you. </span></p>
                                                                <p><span><i class="fa fa-check"></i> Best regards, ENDO team</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="free-quote" class="free-quote">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="section-heading    wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h6>Get Your Free Quote</h6>
                        <h4>Grow With Us Now</h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-2    wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                    <form id="search" action="#" method="GET">
                        <div class="row">
                            <div class="col-lg-4 col-sm-4">
                                <fieldset>
                                    <input type="web" name="web" class="website" placeholder="Your website URL..." autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <fieldset>
                                    <input type="address" name="address" class="email" placeholder="Email Address..." autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <fieldset>
                                    <button type="submit" class="main-button">Get Quote Now</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div id="portfolio" class="our-portfolio section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h6>About us</h6>
                        <h4>More infomation about Endo</em></h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
            <div class="row">
                <div class="col-lg-12">
                    <div class="loop owl-carousel">
                        <div class="item">
                            <a >
                                <div class="portfolio-item">
                                <div class="thumb down-content">
                                    <p><span><i class="fa fa-check"></i> ENDO WAS ESTABLISHED IN VIET NAM SINCE 1993.</span></p>
                                    <p><span><i class="fa fa-check"></i> WE ARE MAINTAINING A LONG LASTING PARTNERSHIP WITH SEVERAL FACTORIES IN THE NORTH OF VIETNAM </span></p>
                                    <p><span><i class="fa fa-check"></i> WE ARE FULLY DEDICATED TEAM PERFORMING WITH INTEGRITY</span></p>
                                    <p><span><i class="fa fa-check"></i> WE ARE AN INTERNATIONAL TEAM (CANADIAN - VIETNAMESE - FILIPINO).</span></p>
                                </div>
                                <div class="down-content">
                                    <h4>About </h4>
                                    <span>US</span>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="item">
                            <a>
                                <div class="portfolio-item">
                                <div class="thumb down-content">
                                    <h4 >Quality assurance is a part of our DNA. We are focus on quality management solutions that ensure the safety, quality and conformity of our customers' products.</h4>
                                    <p><span><i class="fa fa-check"></i> ACHIEVE ZERO DEFECTS</span></p>
                                    <p><span><i class="fa fa-check"></i> CUSTOMER'S SATISFACTION </span></p>
                                    <p><span><i class="fa fa-check"></i> GUARANTEED QUALITY ASSURANCE</span></p>
                                </div>
                                <div class="down-content">
                                    <h4>OUR</h4>
                                    <span>GOALS</span>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <div class="portfolio-item">
                                <div class="thumb down-content">
                                    <p><span><i class="fa fa-check"></i> I.PRODUCT INSPECTION (Soft lines and Hard lines)</span></p>
                                    <p><span><i class="fa fa-check"></i> II.AUDIT (Social Compliance Audit) </span></p>
                                    <p><span><i class="fa fa-check"></i> III.MERCHANDISING IV</span></p>
                                    <p><span><i class="fa fa-check"></i> IV. LOGISTIC</span></p>
                                    <p><span><i class="fa fa-check"></i> V. 3RD PARTY QUALITY ASSESSMENT SERVICES</span></p>
                                    <p><span><i class="fa fa-check"></i> VI. 100% INSPECTION</span></p>
                                </div>
                                <div class="down-content">
                                    <h4>OUR</h4>
                                    <span>PROCESS</span>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <div class="portfolio-item">
                                <div class="thumb down-content">
                                    <p><span><i class="fa fa-check"></i> COMPOSED OF FULLY QUALIFIED, TRUSTWORTHY QUALITY ASSURANCE TEAMS</span></p>
                                    <p><span><i class="fa fa-check"></i> OUR TEAMS ARE REGULARLY TRAINED TO UPDATE TECHNICAL KNOWLEDGE </span></p>
                                    <p><span><i class="fa fa-check"></i> REPORT ALL ISSUES WITHIN 24 HOURS INSPECTION RESULT</span></p>
                                    <p><span><i class="fa fa-check"></i> ENDO TEAMS ARE AVAILABLE 24/7.</span></p>
                                </div>
                                <div class="down-content">
                                    <h4>QUALITY ASSURANCE</h4>
                                    <span>TEAM</span>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="blog" class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4    wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="section-heading">
                        <h6>Recent News</h6>
                        <h4>Check Our Blog <em>Posts</em></h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
                <div class="col-lg-6 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-toggle="modal" data-target="#show-up-modal">
                    <div class="blog-post">
                        <div class="thumb">
                            <a><img src="{{ asset('storage/images') . '/' . $blogs[0]->image }}" alt=""></a>
                        </div>
                        <div class="down-content">
                            <span class="category">{{ $blogs[0]->category }}</span>
                            <span class="date">{{ $blogs[0]->created_at }}</span>
                            <a href="#"><h4>{{ $blogs[0]->title }}</h4></a>
                            <p>{{ $blogs[0]->summary }}</p>
                            <span class="author"><img src="{{ asset('bower_components/demo-bower/assets/images/author-post.jpg') }}" alt="">By: Endo.vn</span>
                            <div class="border-first-button" data-toggle="modal" data-target="#show-up-modal"><a>Read More</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="blog-posts">
                        <div class="row">
                            @foreach ($blogs as $key => $blog)
                                @if ($key > 0)
                                    <div class="col-lg-12" data-toggle="modal" data-target="#show-up-modal-{{ $key }}">
                                        <div class="post-item">
                                            <div class="thumb image-blog">
                                                <a><img src="{{ asset('storage/images') . '/' . $blog->image }}" alt="" style="max-width: 230px"></a>
                                            </div>
                                            <div class="right-content">
                                                <span class="category">{{ $blog->category }}</span>
                                                <span class="date">{{ $blog->created_at }}</span>
                                                <a><h4>{{ $blog->title }}</h4></a>
                                                <p>{{ $blog->summary }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div>{!! $blogs->links() !!}</div>
            </div>
        </div>
    </div>
    <div id="contact" class="contact-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h6>Contact Us</h6>
                        <h4>Get In Touch With Us <em>Now</em></h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="contact-dec">
                                    <img src="assets/images/contact-dec-v2.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div id="map">
                                    <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="fill-form">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="info-post">
                                                <div class="icon">
                                                    <img src="assets/images/phone-icon.png" alt="">
                                                    <a href="#">010-020-0340</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="info-post">
                                                <div class="icon">
                                                    <img src="assets/images/email-icon.png" alt="">
                                                    <a href="#">our@email.com</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="info-post">
                                                <div class="icon">
                                                    <img src="assets/images/location-icon.png" alt="">
                                                    <a href="#">123 Rio de Janeiro</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                                            </fieldset>
                                            <fieldset>
                                                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                                            </fieldset>
                                            <fieldset>
                                                <input type="subject" name="subject" id="subject" placeholder="Subject" autocomplete="on">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <button type="submit" id="form-submit" class="main-button ">Send Message Now</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="show-up-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-md  modal-dialog-centered" role="document" style="max-width: 1350px">
            <div class="modal-content rounded-0">
                <div class="modal-body py-0">
                    <div class="d-block main-content">
                        <img src="{{ asset('storage/images') . '/' . $blogs[0]->image }}" alt="Image" class="img-fluid" style="background-color: #b2fcff; max-height: 500px;">
                        <div class="content-text p-4" >
                            <h3 class="mb-4">{{ $blogs[0]->title }}</h3>
                            <div class="mb-4 blog-content">{{!! $blogs[0]->content !!}</div>
                        </div>
                        <div class="d-flex">
                            <div class="ml-auto">
                                <a href="#" class="btn btn-primary px-4" data-dismiss="modal" style="margin-bottom: 20px; margin-right: 20px;">Close</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach ($blogs as $key => $blog)
        @if ($key > 0)
            <div class="modal fade" id="show-up-modal-{{ $key }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-md  modal-dialog-centered" role="document" style="max-width: 1350px;">
                    <div class="modal-content rounded-0">
                        <div class="modal-body py-0">
                            <div class="d-block main-content">
                                <img src="{{ asset('storage/images') . '/' . $blog->image }}" alt="Image" class="img-fluid" style="background-color: #b2fcff; max-height: 500px;" >
                                <div class="content-text p-4">
                                    <h3 class="mb-4">{{ $blog->title }}</h3>
                                    <div class="mb-4 blog-content">{!! $blog->content !!}</div>
                                </div>
                                <div class="d-flex">
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-primary px-4" data-dismiss="modal" style="margin-bottom: 20px; margin-right: 20px;">Close</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
@stop

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/custom_home.css') }}">
@endsection
