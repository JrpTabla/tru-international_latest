@extends('header.header')

@section('content')

<link rel="stylesheet" href="{{ asset ('assets/css/Homepage/index.css') }}">
<link rel="stylesheet" href="{{ asset ('assets/css/Homepage/landing-section.css') }}">
<link rel="stylesheet" href="{{ asset ('assets/css/Homepage/second-section.css') }}">
<link rel="stylesheet" href="{{ asset ('assets/css/Homepage/third-section.css') }}">
<link rel="stylesheet" href="{{ asset ('assets/css/Homepage/fourth-section.css') }}">
<link rel="stylesheet" href="{{ asset ('assets/css/Homepage/fifth-section.css') }}">
<link rel="stylesheet" href="{{ asset ('assets/css/Homepage/sixth-section.css') }}">
<link rel="stylesheet" href="{{ asset ('assets/css/Homepage/seventh-section.css') }}">
<link rel="stylesheet" href="{{ asset ('assets/css/Homepage/eigth-section.css') }}">

<div class="preloader" id="preloader">
    <div class="preloader-content m-auto">
        <img src="{{ asset ('assets/images/pre-loader-logo.png') }}" alt="" class="m-auto"/>
        <div class="preloader-content-text m-auto"></div>
    </div>
</div>

<div class="main">

    <!-- <div class="cursor-btn">Be a TRU Member</div> -->
    <!-- Section for Landing  Page Start -->
    <section id="landing-section" class="landing-section">
        <!-- Background  Images -->
        <div class="landing-img-background m-auto" >
            <img src="{{ asset ('assets/images/Home-images/hero_image_left.png') }}" alt="" class=" background-img-left" data-aos="fade-right" data-aos-offset="500" data-aos-easing="ease-in-sine" data-aos-duration="1000"/>
            <img src="{{ asset ('assets/images/Home-images/hero_image_right.png') }}" alt="" class="background-img-right" data-aos="fade-left" data-aos-offset="500"data-aos-easing="ease-in-sine" data-aos-duration="1000"/>
        </div>

        <!-- Landing Text Division -->
        <div class="lading-section-text-div mx-auto d-flex" data-aos="zoom-in-up" data-aos-duration="500">
            <div class="h4 landing-title text-center">
                The <span>world’s first</span> independent community-based organization for traders
            </div>
            <div class="h7 landing-sub-title text-center">
                Solidified network of 
                <span>
                    <span class="landing-section-random-text">undeceivable</span> traders.
                </span>
            </div>
            <button type="button" class="btn btn-get-started text-center mx-auto" data-aos="zoom-in" data-aos-duration="1000">
                Be a TRU member
            </button>
        </div>

        <div class="lading-section-card-div mx-auto d-flex container-fluid">
            <div class="h6 landing-card-title text-center text-white"data-aos="zoom-in-up" data-aos-duration="500">
                Experience unbiased resources in the Financial Markets
            </div>

            <div class="card-div row" >
                <div class="col-4 px-3" data-aos="flip-right" data-aos-duration="1000">
                    <div class="landing-card landing-card-CommuniTrade">
                        <div class="m-auto">
                            <div class="landing-card-title text-white text-center mx-auto my-5">CommuniTrade</div>
                            <div class="landing-card-description text-white text-center">
                                Follow successful traders, share your insights and experiences, and receive advice on CommuniTrade, your dedicated channel for collaborative growth in the trading community.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-4 px-3" data-aos="flip-up" data-aos-duration="1000">
                    <div class="landing-card landing-card-RPP">
                        <div class="m-auto">
                            <div class="landing-card-title text-white text-center mx-auto my-5">Risk Protection Program</div>
                            <div class="landing-card-description text-white">Get up to 100% coverage of your trading losses through the Risk Protection Plan. Reassure to experience fair trading practices and have a guarantee to navigate your trading career confidently.</div>
                        </div>
                    </div>
                </div>

                <div class="col-4 px-3" data-aos="flip-left" data-aos-duration="1000">
                    <div class="landing-card landing-card-PSP">
                        <div class="m-auto">
                            <div class="landing-card-title text-white text-center mx-auto my-4">Profit-Sharing Program</div>
                            <div class="landing-card-description text-white text-center">Receive a share in the annual profit of the organization through UnityGains, a TRU commitment to reward your contributions in a transparent and mutually enriching environment.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="second-section" class="second-section">
        <!-- Second Section Container -->
        <div  class="second-section-content-container container-fluid" >
            <!-- Second Section Division -->
            <div class="row second-section-div px-3">
                <!-- First Content-->
                <div class="section-section-content col-2 px-2" data-aos="fade-down" data-aos-duration="3000">
                    <!-- <div class="second-section-title text-center">80M+</div> -->
                    <div class="second-section-title text-center" data-count="80000000">0</div>
                    <div class="second-section-description text-center">Traders <br> Worldwide</div> 
                </div>
                <!-- Second Content-->
                <div class="section-section-content col-2 px-2" data-aos="fade-down" data-aos-delay="200" data-aos-duration="3000">
                    <!-- <div class="second-section-title text-center">60k+</div> -->
                    <div class="second-section-title text-center" data-count="60000">0</div>
                    <div class="second-section-description text-center">Online <br> Brokers</div>
                </div>
                <!-- Third Content-->
                <div class="section-section-content col-2 px-2" data-aos="fade-down" data-aos-delay="400" data-aos-duration="3000">
                    <!-- <div class="second-section-title text-center">170</div> -->
                    <div class="second-section-title text-center" data-count="170">0</div>
                    <div class="second-section-description text-center">Countries</div>
                </div>
                <!-- Forth Content-->
                <div class="section-section-content col-2 px-2" data-aos="fade-down" data-aos-delay="600" data-aos-duration="3000">
                    <!-- <div class="second-section-title text-center">5</div> -->
                    <div class="second-section-title text-center" data-count="5">0</div>
                    <div class="second-section-description text-center">Continents</div>
                </div>
                <!-- Fifth Content-->
                <div class="section-section-content col-2 px-2" data-aos="fade-down" data-aos-delay="800" data-aos-duration="3000">
                    <!-- <div class="second-section-title text-center">1</div> -->
                    <div class="second-section-title text-center" data-count="1">0</div>
                    <div class="second-section-description text-center">Traders United</div>
                </div>
            </div>
        </div>
        <!-- Second Section Ads Division -->
        <div class="second-section-advertisment-container container-fluid mx-auto" data-aos="fade-up" data-aos-duration="500"></div>
    </section>
    <!-- Second Section End -->     

    <!-- Third Section Start -->
    <section id="third-section" class="third-section">

        <div class="second-img-background">
            <div class="third-section-ads-1" data-aos="fade-right" data-aos-duration="500"></div>
            <div class="third-section-ads-2" data-aos="fade-left" data-aos-duration="500"></div>
        </div>

        <div class="container-fluid mx-auto">

            <div class="third-section-container row mx-auto">
                <div class="padding-gap col-12">
                    <div class="third-section-first-div row" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
                        <div class="third-section-first-content col-12 col-lg-6" data-aos="fade-down" data-aos-duration="500">
                            <div class="third-section-first-content-title">
                                <span>Safeguard</span> <br> your trading <br> account.
                            </div>
                            <div class="third-section-first-content-description">
                                Elevate your account's security with the Risk Protection Plan. TRU empowers members to prosper from calculated risk by providing a unique safety net from investment losses.  
                            </div>
                        </div>
                        <div class="third-section-second-content col-12 col-lg-6"  data-aos="fade-down" data-aos-duration="500">
                            <div class="m-auto">  
                                <div class="third-section-first-content-img">
                                    <img src="{{ asset ('assets/images/Home-images/Third-section/card-1.png') }}" alt="" style="width: 100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="padding-gap col-12 col-xl-6">
                    <div class="third-section-second-div row " data-aos="fade-up-right" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
                        <div class="third-section-second-content d-flex col-12">
                            <div class="m-auto">  
                                <div class="third-section-first-content-img">
                                    <img src="{{ asset ('assets/images/Home-images/Third-section/card-2.png') }}" alt="" style="width: 100%;" data-aos="flip-up" data-aos-duration="500">
                                </div>
                            </div>
                        </div>
                        <div class="third-section-first-content d-flex col-12">
                            <div class="m-auto">  
                                <div class="third-section-first-content-title-2" data-aos="flip-left" data-aos-duration="500">
                                    <span>Engage</span> <br> to succeed.
                                </div>
                                <div class="third-section-first-content-description-2" data-aos="flip-down" data-aos-duration="500">
                                    Stimulate thought-provoking exchanges with TRU Forum and General Discussion Board. On CommuniTrade, you're not simply engaging; you're gaining reliable and valuable information for your trading needs. 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="padding-gap col-12 col-xl-6">
                    <div class="third-section-third-div-3 row " data-aos="fade-up-left" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
                        <div class="third-section-first-content d-flex col-12">
                            <div class="m-auto">  
                                <div class="third-section-first-content-title-3"  data-aos="flip-right" data-aos-duration="500">
                                    <span>Earn while</span>  <br> you’re at it.
                                </div>
            
                                <div class="third-section-first-content-description-3"  data-aos="flip-up" data-aos-duration="500">
                                    Actively engage with the organization and be rewarded with monetary incentives through UnityGains. This visionary initiative guarantees that you - our valuable asset, are enjoying constant financial growth.. 
                                </div>
                            </div>
                        </div>
                        <div class="third-section-second-content d-flex col-12">
                            <div class="m-auto">  
                                <div class="third-section-first-content-img">
                                    <img src="{{ asset ('assets/images/Home-images/Third-section/card-3.png') }}" alt="" style="width: 100%;" data-aos="flip-down" data-aos-duration="500">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Third Section End -->
                        
    <!-- Fourth Section Start -->
    <section id="fourth-section" class="fourth-section" data-color="#FFCA5D" >
        <div class="container-fluid">
            <div class="fourth-section-container row mx-auto">
                <div class="padding-gap col-12">
                    <div class="fourth-section-first-div row" data-aos="zoom-in" data-aos-duration="500" data-aos-anchor-placement="top-bottom">
                        <div class="fourth-section-first-content d-flex col-12 col-xl-6" data-aos="flip-down" data-aos-duration="1000">
                            <div class="m-auto">  
                                <div class="fourth-section-first-content-title">
                                    <!-- The first <br> community <span>- <br> Traders United</span> -->
                                    The world’s first <br> community-<span>driven traders organization</span>
                                </div>
                                <div class="fourth-section-first-content-description">
                                    At TRU, you can access valuable insights and impartial broker ratings. More importantly, you can tap into the collective knowledge of online traders worldwide. All in one place. 
                                </div>
                            </div>
                        </div>
                        <div class="fourth-section-second-content d-flex col-12 col-xl-6" data-aos="flip-down" data-aos-duration="1000"> 
                            <div class="m-auto">  
                                <div class="fourth-section-first-content-img">
                                    <img src="{{ asset ('assets/images/Home-images/fourth-section/card-1.png') }}" alt="" style="width: 100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="padding-gap col-12 col-xl-6">
                    <div class="fourth-section-second-div row" data-aos="fade-left" data-aos-duration="500" data-aos-anchor-placement="top-bottom" data-aos-offset="26">
                        <div class="fourth-section-second-content d-flex col-12" data-aos="fade-down" data-aos-duration="1000">
                            <div class="m-auto">  
                                <div class="fourth-section-first-content-img">
                                    <img src="{{ asset ('assets/images/Home-images/fourth-section/card-2.png') }}" alt="" style="width: 100%;">
                                </div>
                            </div>
                        </div>
                        <div class="fourth-section-first-content d-flex col-12">
                            <div class="m-auto">  
                                <div class="fourth-section-first-content-title-2">
                                    <span>About</span> <br> our community
                                </div>
                                <div class="fourth-section-first-content-description-2">
                                    This is not just a community; it is a movement paving the way for a better environment 	for online traders everywhere.   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="padding-gap col-12 col-xl-6">
                    <div class="fourth-section-third-div-3 row" data-aos="fade-right" data-aos-duration="500" data-aos-anchor-placement="top-bottom" data-aos-offset="26">
                        <div class="fourth-section-first-content d-flex col-12">
                            <div class="">  
                                <div class="fourth-section-first-content-title-3">
                                    <span>You</span> are <span-2>TRU</span-2>
                                </div>
            
                                <div class="fourth-section-first-content-description-3">
                                Our services and initiatives are designed to bolster security and instill confidence in your 	trading journey.  
                                <br>
                                <br>
                                TRU revolutionizes the online trading world, empowering every member and spurring 	them to success. 
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset ('assets/images/Home-images/fourth-section/card-3.png') }}" class="fourth-section-first-content-description-3-img" alt="" data-aos="fade-up" data-aos-duration="1000">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fourth Section End -->

    <!-- Fifth Section Start -->
    <section id="fifth-section" class="fifth-section" data-color="#fff">
        <div class="container-fluid">
            <div class="fifth-section-container row mx-auto" >
                <div class="padding-gap col-12">
                    <div class="fifth-section-first-div row col-12" data-aos="zoom-in" data-aos-duration="500" data-aos-anchor-placement="top-bottom">
                        <div class="fifth-section-first-content d-flex col-12 col-xl-6">
                            <div class="m-auto">  
                                <div class="fifth-section-first-content-title" data-aos="zoom-in-right" data-aos-duration="1000">
                                    <span>Engage and learn from people </span> with the same goals as you — to earn and succeed!
                                </div>
                                <div class="fifth-section-first-content-description" data-aos="zoom-in-left" data-aos-duration="1000"> 
                                    CommuniTrade evolved the concept of social media into an indispensable reservoir of shared and collaborative wisdom. 
                                </div>
                                <a class="fifth-section-first-content-button" data-aos="zoom-in" data-aos-duration="1000">Be part of the CommUNITRADE</a>
                            </div>
                        </div>
                        <div class="fifth-section-second-content d-flex col-12 col-xl-6">

                            <img class="circle-1" src="{{ asset ('assets/images/Home-images/fifth-section/circle-1.png') }}" data-aos="zoom-in" data-aos-duration="1000">
                            <img class="circle-2" src="{{ asset ('assets/images/Home-images/fifth-section/circle-1.png') }}" data-aos="zoom-in" data-aos-duration="1000">
                            <img class="circle-3" src="{{ asset ('assets/images/Home-images/fifth-section/circle-1.png') }}" data-aos="zoom-in" data-aos-duration="1000">
                            <img class="circle-4" src="{{ asset ('assets/images/Home-images/fifth-section/circle-1.png') }}" data-aos="zoom-in" data-aos-duration="1000">

                            <img class="image-1" src="{{ asset ('assets/images/Home-images/fifth-section/ava1.png') }}" data-aos="zoom-out" data-aos-duration="1000">
                            <img class="image-2" src="{{ asset ('assets/images/Home-images/fifth-section/ava2.png ') }}"  data-aos="zoom-out" data-aos-duration="1000">
                            <img class="image-3" src="{{ asset ('assets/images/Home-images/fifth-section/Vector.png ') }}"  data-aos="zoom-out" data-aos-duration="1000">
                            <img class="image-4" src="{{ asset ('assets/images/Home-images/fifth-section/ava4.png ') }}" data-aos="zoom-out" data-aos-duration="1000">
                            <img class="image-5" src="{{ asset ('assets/images/Home-images/fifth-section/ava5.png ') }}" data-aos="zoom-out" data-aos-duration="1000">
                            <img class="image-6" src="{{ asset ('assets/images/Home-images/fifth-section/ava6.png ') }}"  data-aos="zoom-out" data-aos-duration="1000">

                            <div class="fifth-section-second-content-comment d-flex m-auto" data-aos="flip-down" data-aos-duration="1000" >
                                <div class="fifth-section-second-content-profile">
                                    <img src="{{ asset ('assets/images/Home-images/fifth-section/profile.png ') }}">
                                </div>
                                <div class="fifth-section-second-content-info">
                                    <div class="fifth-section-second-content-username">@Gulam Ambiya</div>
                                    <div class="fifth-section-second-content-platform">comment in Telegram</div>

                                    <div class="fifth-section-second-content-comments">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="fifth-section-third-content-button-2 mx-auto">Be part of the CommUNITRADE</a>
                    </div>
                </div> 
            </div>
        </div>
    </section>
    <!-- Fifth Section End -->

    <!-- Sixth Section Start -->
    <section id="sixth-section" class="sixth-section">
        <div class="container-fluid">
            <div class="sixth-section-container row mx-auto">
                <div class="padding-gap col-12">
                    <div class="sixth-section-first-div row" data-aos="zoom-in-up" data-aos-duration="500" data-aos-anchor-placement="top-bottom">
                        <div class="sixth-section-first-content d-flex col-12 col-xl-6" data-aos="flip-down" data-aos-duration="1000">
                            <div class="m-auto">  
                                <div class="sixth-section-first-content-title">
                                    <!-- Let’s Forge <span>a <br>better trading <br>world -->
                                    Let’s BUILD a <span>better trading world, TOGETHER.</span>
                                </div>
                                <div class="sixth-section-first-content-description">
                                    One trader can only do so much. But an entire community? The possibilities are endless. 
                                </div>
                            </div>
                        </div>
                        <div class="sixth-section-second-content d-flex col-12 col-xl-6" data-aos="flip-down" data-aos-duration="1000">
                            <div class="m-auto">  
                                <div class="sixth-section-first-content-img">
                                    <img src="{{ asset ('assets/images/Home-images/sixth-section/card-1.png ') }}" alt="" style="width: 100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="padding-gap col-12 col-xl-6">
                    <div class="sixth-section-second-div row" data-aos="zoom-out-right" data-aos-duration="500">
                        <div class="sixth-section-second-content d-flex col-12">
                            <div class="m-auto">  
                                <div class="sixth-section-first-content-img">
                                    <img src="{{ asset ('assets/images/Home-images/sixth-section/card-2.png ') }}" alt="" style="width: 100%;" data-aos="fade-left" data-aos-duration="1000">
                                </div>
                            </div>
                        </div>
                        <div class="sixth-section-first-content d-flex col-12" data-aos="zoom-in-left" data-aos-duration="1000">
                            <div class="m-auto">  
                                <div class="sixth-section-first-content-title-2">
                                    <!-- Trade, <br> Protected -->
                                    Tread Safely. <span>Trade Securely.</span>
                                </div>
                                <div class="sixth-section-first-content-description-2">
                                    70% of forex traders incur losses quarterly. With TRU’s Risk Protection Plan, you need 	not worry about becoming part of these statistics. 
                                    <br>
                                    <br>
                                    We guarantee to have your back, so 	you can trade without holding back. 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="padding-gap col-12 col-xl-6">
                    <div class="sixth-section-third-div-3 row justify-content-center" data-aos="zoom-out-left" data-aos-duration="500">
                        <div class="sixth-section-first-content d-flex col-12" data-aos="zoom-in-right" data-aos-duration="1000">
                            <div class="">  
                                <div class="sixth-section-first-content-title-3">
                                    Growth <span>in Transparency</span>
                                </div>
            
                                <div class="sixth-section-first-content-description-3">
                                    With an increasing number of TRU members, additional revenue streams come in – and you will always be in the loop of the progress. TRU is one of the few certainties in trading. <br> <br>TRU is neither operated by any brokerage company nor created to extort money from brokerage companies to keep positive ratings and branding.
                                </div>
                            </div>
                        </div>
                        <img class="sixth-section-first-content-phone" src="{{ asset ('assets/images/Home-images/sixth-section/card-3.png ') }}" alt="" data-aos="fade-right" data-aos-duration="1000">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sixth Section End -->

            
    <!-- Seventh Section Start -->
    <section id="seventh-section" class="seventh-section" data-color="#E6E7E7">
        <div class="container-fluid">
            <div class="seventh-section-container row mx-auto">
                <div class="padding-gap col-12">
                    <div class="seventh-section-first-div row" data-aos="zoom-in" data-aos-duration="500" data-aos-anchor-placement="top-bottom">
                        <div class="seventh-section-first-content d-flex col-12 col-xl-5">
                            <div class="me-auto my-auto">  
                                <div class="seventh-section-first-content-title" data-aos="zoom-in-right" data-aos-duration="1000">
                                    <!-- What do <br> you need <br> to know -->
                                    Not just <br> real-time data. Verified. Relevant. <br>TRUe
                                </div>
                                <div class="seventh-section-first-content-description" data-aos="zoom-in-left" data-aos-duration="1000">
                                    Stay updated, learn from the experts.
                                </div>
                                <a class="seventh-section-first-content-button" data-aos="zoom-in" data-aos-duration="1000">More news</a>
                            </div>
                        </div>
                        <div class="seventh-section-second-content d-flex col-12 col-xl-7 row" data-aos="flip-up"
    data-aos-easing="ease-out-cubic"
    data-aos-duration="500">
                            <div class="seventh-section-second-card-div-1 col-6 p-2">
                                <div class="seventh-section-second-card-1">
                                    <img class="seventh-section-second-card-main-img" src="{{ asset ('assets/images/Home-images/seventh-section/card-1.png ') }}">
                                    <div class="seventh-section-second-title">Tag title</div>
                                    <div class="seventh-section-second-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</div>
                                    <div class="seventh-section-second-time">
                                        <img src="{{ asset ('assets/images/Home-images/seventh-section/lets-icons_time-light.png  ') }}" alt="">
                                        <div class="seventh-section-second-date">November 29, 2023</div>
                                    </div>
                                </div>
                                <div class="seventh-section-second-card-1">
                                    <img class="seventh-section-second-card-main-img" src="{{ asset ('assets/images/Home-images/seventh-section/card-2.png  ') }}">
                                    <div class="seventh-section-second-title">Tag title</div>
                                    <div class="seventh-section-second-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</div>
                                    <div class="seventh-section-second-time">
                                        <img src="{{ asset ('assets/images/Home-images/seventh-section/lets-icons_time-light.png  ') }}" alt="">
                                        <div class="seventh-section-second-date">November 29, 2023</div>
                                    </div>
                                </div>
                                <div class="seventh-section-second-card-1">
                                    <img class="seventh-section-second-card-main-img" src="{{ asset ('assets/images/Home-images/seventh-section/card-1.png  ') }}">
                                    <div class="seventh-section-second-title">Tag title</div>
                                    <div class="seventh-section-second-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</div>
                                    <div class="seventh-section-second-time">
                                        <img src="{{ asset ('assets/images/Home-images/seventh-section/lets-icons_time-light.png  ') }}" alt="">
                                        <div class="seventh-section-second-date">November 29, 2023</div>
                                    </div>
                                </div>
                                <div class="seventh-section-second-card-1">
                                    <img class="seventh-section-second-card-main-img" src="{{ asset ('assets/images/Home-images/seventh-section/card-2.png  ') }}">
                                    <div class="seventh-section-second-title">Tag title</div>
                                    <div class="seventh-section-second-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</div>
                                    <div class="seventh-section-second-time">
                                        <img src="{{ asset ('assets/images/Home-images/seventh-section/lets-icons_time-light.png  ') }}" alt="">
                                        <div class="seventh-section-second-date">November 29, 2023</div>
                                    </div>
                                </div>
                                <div class="seventh-section-second-card-1" >
                                    <img class="seventh-section-second-card-main-img" src="{{ asset ('assets/images/Home-images/seventh-section/card-1.png  ') }}">
                                    <div class="seventh-section-second-title">Tag title</div>
                                    <div class="seventh-section-second-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</div>
                                    <div class="seventh-section-second-time">
                                        <img src="{{ asset ('assets/images/Home-images/seventh-section/lets-icons_time-light.png  ') }}" alt="">
                                        <div class="seventh-section-second-date">November 29, 2023</div>
                                    </div>
                                </div>
                                <div class="seventh-section-second-card-1" >
                                    <img class="seventh-section-second-card-main-img" src="{{ asset ('assets/images/Home-images/seventh-section/card-2.png  ') }}">
                                    <div class="seventh-section-second-title">Tag title</div>
                                    <div class="seventh-section-second-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</div>
                                    <div class="seventh-section-second-time">
                                        <img src="{{ asset ('assets/images/Home-images/seventh-section/lets-icons_time-light.png  ') }}" alt="">
                                        <div class="seventh-section-second-date">November 29, 2023</div>
                                    </div>
                                </div>
                            </div>

                            <div class="seventh-section-second-card-div-2 col-6 p-2" data-aos="fade-left" data-aos-duration="1000">
                                <div class="seventh-section-second-card-2">
                                    <img class="seventh-section-second-card-main-img" src="{{ asset ('assets/images/Home-images/seventh-section/card-3.png  ') }}">
                                    <div class="seventh-section-second-title">Tag title</div>
                                    <div class="seventh-section-second-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</div>
                                    <div class="seventh-section-second-time">
                                        <img src="{{ asset ('assets/images/Home-images/seventh-section/lets-icons_time-light.png  ') }}" alt="">
                                        <div class="seventh-section-second-date">November 29, 2023</div>
                                    </div>
                                </div>
                                <div class="seventh-section-second-card-2">
                                    <img class="seventh-section-second-card-main-img" src="{{ asset ('assets/images/Home-images/seventh-section/card-4.png  ') }}">
                                    <div class="seventh-section-second-title">Tag title</div>
                                    <div class="seventh-section-second-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</div>
                                    <div class="seventh-section-second-time">
                                        <img src="{{ asset ('assets/images/Home-images/seventh-section/lets-icons_time-light.png  ') }}" alt="">
                                        <div class="seventh-section-second-date">November 29, 2023</div>
                                    </div>
                                </div>
                                <div class="seventh-section-second-card-2">
                                    <img class="seventh-section-second-card-main-img" src="{{ asset ('assets/images/Home-images/seventh-section/card-3.png  ') }}">
                                    <div class="seventh-section-second-title">Tag title</div>
                                    <div class="seventh-section-second-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</div>
                                    <div class="seventh-section-second-time">
                                        <img src="{{ asset ('assets/images/Home-images/seventh-section/lets-icons_time-light.png  ') }}" alt="">
                                        <div class="seventh-section-second-date">November 29, 2023</div>
                                    </div>
                                </div>
                                <div class="seventh-section-second-card-2">
                                    <img class="seventh-section-second-card-main-img" src="{{ asset ('assets/images/Home-images/seventh-section/card-4.png  ') }}">
                                    <div class="seventh-section-second-title">Tag title</div>
                                    <div class="seventh-section-second-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</div>
                                    <div class="seventh-section-second-time">
                                        <img src="{{ asset ('assets/images/Home-images/seventh-section/lets-icons_time-light.png  ') }}" alt="">
                                        <div class="seventh-section-second-date">November 29, 2023</div>
                                    </div>
                                </div>
                                <div class="seventh-section-second-card-2">
                                    <img class="seventh-section-second-card-main-img" src="{{ asset ('assets/images/Home-images/seventh-section/card-3.png  ') }}">
                                    <div class="seventh-section-second-title">Tag title</div>
                                    <div class="seventh-section-second-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</div>
                                    <div class="seventh-section-second-time">
                                        <img src="{{ asset ('assets/images/Home-images/seventh-section/lets-icons_time-light.png  ') }}" alt="">
                                        <div class="seventh-section-second-date">November 29, 2023</div>
                                    </div>
                                </div>
                                <div class="seventh-section-second-card-2">
                                    <img class="seventh-section-second-card-main-img" src="{{ asset ('assets/images/Home-images/seventh-section/card-4.png  ') }}">
                                    <div class="seventh-section-second-title">Tag title</div>
                                    <div class="seventh-section-second-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</div>    
                                    <div class="seventh-section-second-time">
                                        <img src="{{ asset ('assets/images/Home-images/seventh-section/lets-icons_time-light.png  ') }}" alt="">
                                        <div class="seventh-section-second-date">November 29, 2023</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a class="seventh-section-first-content-button-2" data-aos="zoom-in" data-aos-duration="1000">More news</a>
                    </div>
                </div>  
            </div>
        </div>
    </section>
    <!-- Seventh Section End -->



    <!-- Eigth Section Start -->
    <section id="eigth-section" class="eigth-section">
        <div class="container-fluid">
            <div class="eigth-section-container row mx-auto">
                <div class="padding-gap col-12">
                    <div class="eigth-section-first-div row" data-aos="zoom-in" data-aos-duration="500" data-aos-anchor-placement="top-bottom">
                        <div class="eigth-section-first-content d-flex col-12 col-xl-7" data-aos="fade-right" data-aos-duration="1000">
                            <div class="me-auto ">  
                                <div class="eigth-section-first-content-title">
                                    Achieve <br> the TRU triumph <br> and share <br> experiences
                                    <a class="eigth-section-first-content-button"  data-aos="zoom-in" data-aos-duration="1000">Be a TRU member</a>
                                </div>
                            </div>
                        </div>
                        <div class="eigth-section-second-content d-flex col-12 col-xl-5">
                            <img src="{{ asset ('assets/images/Home-images/eigth-section/card-1.png  ') }}" alt="" class="eigth-section-second-content-img-1" data-aos="flip-up" data-aos-duration="1000" data-aos-delay="500">
                            <img src="{{ asset ('assets/images/Home-images/eigth-section/card-2.png  ') }}" alt="" class="eigth-section-second-content-img-2" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="1000">
                            <img src="{{ asset ('assets/images/Home-images/eigth-section/card-3.png  ') }}" alt="" class="eigth-section-second-content-img-3" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="1500">
                        </div>
                        <!-- <div class="eigth-section-third-content d-flex col-12 col-xl-7">
                            <a class="eigth-section-first-content-button">Be a TRU member</a>
                        </div> -->

                        <div class="eigth-section-third-content col-12 col-xl-7">
                            <div class="m-auto">  
                                <a class="eigth-section-third-content-button"  data-aos="zoom-in" data-aos-duration="1000">Be a TRU member</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="eigth-section-scroll-section">
            
            <div class="eigth-section-fourth-content-button">Be a TRU member</div>
            
            
            <div class="eigth-section-scroll-div">
                <div class="d-flex">
                    <div class="eigth-moving-text">
                        <svg class="eigth-Vector mx-5" xmlns="http://www.w3.org/2000/svg" width="42" height="77" viewBox="0 0 42 77" fill="none">
                            <path d="M0 38.5C10.6962 34.9584 19.0689 19.6101 21.002 0C22.9311 19.6101 31.3038 34.9584 42 38.5C31.3038 42.0416 22.9311 57.3899 21.002 77C19.0494 57.3899 10.6962 42.0416 0 38.5Z" fill="white"/>
                        </svg>
                    </div>
                    <div class="eigth-moving-text">Join the movement.</div>
                </div>
        
                <div class="d-flex">
                    <div class="eigth-moving-text">
                        <svg class="eigth-Vector mx-5" xmlns="http://www.w3.org/2000/svg" width="42" height="77" viewBox="0 0 42 77" fill="none">
                            <path d="M0 38.5C10.6962 34.9584 19.0689 19.6101 21.002 0C22.9311 19.6101 31.3038 34.9584 42 38.5C31.3038 42.0416 22.9311 57.3899 21.002 77C19.0494 57.3899 10.6962 42.0416 0 38.5Z" fill="white"/>
                        </svg>
                    </div>
                    <div class="eigth-moving-text">Join the movement.</div>
                </div>
                <div class="d-flex">
                    <div class="eigth-moving-text">
                        <svg class="eigth-Vector mx-5" xmlns="http://www.w3.org/2000/svg" width="42" height="77" viewBox="0 0 42 77" fill="none">
                            <path d="M0 38.5C10.6962 34.9584 19.0689 19.6101 21.002 0C22.9311 19.6101 31.3038 34.9584 42 38.5C31.3038 42.0416 22.9311 57.3899 21.002 77C19.0494 57.3899 10.6962 42.0416 0 38.5Z" fill="white"/>
                        </svg>
                    </div>
                    <div class="eigth-moving-text">Join the movement.</div>
                </div>
            </div>
        </div>
    </section>
        <!-- Eigth Section End -->
    </div>
</div>

<script src="{{ asset ('assets/js/Homepage-script.js') }}"></script>

<script type="text/javascript">

    const container = document.querySelector('.eigth-section-scroll-section');
    const Eigth_button = document.querySelector('.eigth-section-fourth-content-button');

    document.addEventListener('mousemove', (e) => {
        // let x = e.clientX;
        // let y = e.clientY;

        // Eigth_button.style.left = `${x}px`;
        // Eigth_button.style.top = `${y}px`;

        let x = e.clientX;
        let y = e.clientY;

        Eigth_button.style.top = y + "px";
        Eigth_button.style.left = x + "px";
    });

    const textElements = document.getElementsByClassName("landing-section-random-text");
    const texts = ['undeceivable', 'decisive', 'foolproof', 'smart', 'guarded'];
    let index = 0;

    function changeText() {
        textElements[0].textContent = texts[index];
        index = (index + 1) % texts.length;
        setTimeout(changeText, 2000); // Change every 3 seconds
    }

    // Start the loop
    changeText();

</script>


@endsection