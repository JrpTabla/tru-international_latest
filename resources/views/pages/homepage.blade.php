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

    <div class="eigth-section-fourth-content-button" onclick="Be_a_TRU()">Be a TRU member</div>

    <section id="landing-section" class="landing-section">
        <div class="landing-img-background m-auto" >
            <img src="{{ asset ('assets/images/Home-images/hero_image_left.png') }}" alt="" class=" background-img-left" data-aos="fade-right" data-aos-offset="500" data-aos-easing="ease-in-sine" data-aos-duration="1000" data-aos-delay="1000"/>
            <img src="{{ asset ('assets/images/Home-images/hero_image_right.png') }}" alt="" class="background-img-right" data-aos="fade-left" data-aos-offset="500"data-aos-easing="ease-in-sine" data-aos-duration="1000" data-aos-delay="1000"/>
        </div>
        <div class="lading-section-text-div mx-auto d-flex" data-aos="zoom-in-up" data-aos-duration="500">
            <div class="h4 landing-title text-center">
                The <span>world’s first</span> independent community-based organization for traders
            </div>
            <div class="h7 landing-sub-title d-flex mx-auto">
                Solidified network of
                <span class="d-flex mx-2">  
                    <span class="landing-section-random-text"></span>
                    <div class="caret my-auto"></div>
                </span>
                traders.
            </div>
            <button type="button" class="btn btn-get-started text-center mx-auto" data-aos="zoom-in" data-aos-duration="1000" onclick="Be_a_TRU()">Be a TRU member</button>
        </div>

        <div class="lading-section-card-div mx-auto d-flex container-fluid">
            <div class="h6 landing-card-title text-center text-white" data-aos="zoom-in-up" data-aos-duration="500" data-aos-anchor-placement="top-bottom">
                Experience unbiased resources in the Financial Markets
            </div>

            <div class="card-div row justify-content-center">
                <div class="padding-gap col-12 col-lg-6 col-xl-4 padding-gap-first-div mb-3">
                    <div class="landing-section-first-div-1 row" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
                        <div class="third-section-first-content col-12 mb-5">
                            <div class="landing-section-first-content-title text-center">Communitrade</div>
                        </div>
                        <div class="third-section-second-content col-12 d-flex mb-2">
                            <div class="mt-auto">  
                                <div class="third-section-first-content-img">
                                    <img src="{{ asset ('assets/images/CT-images/landing-section/picture.png') }}" alt="" style="width: 100%;" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
                                </div>
                            </div>
                        </div>
                        <div class="card-data">Follow successful traders, share your insights and experiences, and receive advice on CommuniTrade, your dedicated channel for collaborative growth in the trading community.</div>
                    </div>
                </div>

                <div class="padding-gap col-12 col-lg-6 col-xl-4 padding-gap-first-div mb-3">
                    <div class="landing-section-first-div-3 row" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
                        <div class="third-section-first-content col-12 mb-5">
                            <div class="landing-section-first-content-title text-center">Dispute Resolution</div>
                        </div>
                        <div class="third-section-second-content col-12 d-flex">
                            <div class="mt-auto">  
                                <div class="third-section-first-content-img">
                                    <img src="{{ asset ('assets/images/RPP-images/landing-section/landing-page-img.png') }}" alt="" style="width: 100%;" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
                                </div>
                            </div>
                        </div>
                        <div class="card-data-3">Have your back covered when escalating and resolving trading issues with TRU’s Dispute Resolution Support, a trader-oriented service for swift, effective, and equitable resolution of broker disputes.</div>
                    </div>
                </div>

                <div class="padding-gap col-12 col-lg-6 col-xl-4 padding-gap-first-div mb-3">
                    <div class="landing-section-first-div-2 row" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
                        <div class="third-section-first-content col-12">
                            <div class="landing-section-first-content-title text-center">UnityGains</div>
                        </div>
                        <div class="third-section-second-content col-12 d-flex">
                            <div class="mt-auto">  
                                <div class="third-section-first-content-img">
                                    <img src="{{ asset ('assets/images/UG-images/landing-img.png') }}" alt="" style="width: 100%;" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
                                </div>
                            </div>
                        </div>
                        <div class="card-data-2">Receive a share in the annual profit of the organization 	through UnityGains, a TRU commitment to reward your contributions in a transparent and mutually enriching environment.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="second-section" class="second-section">
        <div  class="second-section-content-container container-fluid" >
            <div class="row second-section-div px-3">
                <div class="section-section-content col-2 px-2" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="0">
                    <div class="second-section-title text-center" data-count="80000000">0</div>
                    <div class="second-section-description text-center">Traders <br> Worldwide</div> 
                </div>
                <div class="section-section-content col-2 px-2" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="1000">
                    <div class="second-section-title text-center" data-count="60000">0</div>
                    <div class="second-section-description text-center">Online <br> Brokers</div>
                </div>
                <div class="section-section-content col-2 px-2" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="2000">
                    <div class="second-section-title text-center" data-count="170">0</div>
                    <div class="second-section-description text-center">Countries</div>
                </div>
                <div class="section-section-content col-2 px-2" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="3000">
                    <div class="second-section-title text-center" data-count="5">0</div>
                    <div class="second-section-description text-center">Continents</div>
                </div>
                <div class="section-section-content col-2 px-2" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="4000">
                    <div class="second-section-title text-center" data-count="1">0</div>
                    <div class="second-section-description text-center">Traders United</div>
                </div>
            </div>
        </div>
    </section>

    <section id="third-section" class="third-section">
        <div class="second-img-background">
            <div class="third-section-ads-1" data-aos="fade-up-right" data-aos-duration="2000"></div>
            <div class="third-section-ads-2" data-aos="fade-up-left" data-aos-duration="2000"></div>
        </div>
        <div class="second-section-advertisment-container container-fluid mx-auto" data-aos="fade-up" data-aos-duration="500"></div>
        <div class="container-fluid mx-auto">
            <div class="third-section-container row mx-auto">
                <div class="padding-gap col-12 padding-gap-first-div">
                    <div class="third-section-first-div row" data-aos="fade-up" data-aos-duration="3000" data-aos-anchor-placement="center-bottom">
                        <div class="third-section-first-content col-12 col-xl-6" data-aos="fade-down" data-aos-duration="500">
                            <div class="third-section-first-content-title"></div>
                            <div class="third-section-first-content-description"></div>
                        </div>
                        <div class="third-section-second-content col-12 col-xl-6 d-flex"  data-aos="fade-down" data-aos-duration="500">
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
                                <div class="third-section-first-content-title-2" data-aos="flip-left" data-aos-duration="500"></div>
                                <div class="third-section-first-content-description-2" data-aos="flip-down" data-aos-duration="500"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="padding-gap col-12 col-xl-6">
                    <div class="third-section-third-div-3 row " data-aos="fade-up-left" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
                        <div class="third-section-first-content d-flex col-12">
                            <div class="m-auto">  
                                <div class="third-section-first-content-title-3"  data-aos="flip-right" data-aos-duration="500"></div>
                                <div class="third-section-first-content-description-3"  data-aos="flip-up" data-aos-duration="500"></div>
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

    <section id="fourth-section" class="fourth-section" data-color="#FFCA5D" >
        <div class="container-fluid">
            <div class="fourth-section-container row mx-auto">
                <div class="padding-gap col-12">
                    <div class="fourth-section-first-div row" data-aos="zoom-in" data-aos-duration="3000" data-aos-anchor-placement="center-bottom">
                        <div class="fourth-section-first-content d-flex col-12 col-xl-6" data-aos="flip-down" data-aos-duration="1000">
                            <div class="m-auto">  
                                <div class="fourth-section-first-content-title"></div>
                                <div class="fourth-section-first-content-description"></div>
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
                                <div class="fourth-section-first-content-title-2"></div>
                                <div class="fourth-section-first-content-description-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="padding-gap col-12 col-xl-6">
                    <div class="fourth-section-third-div-3 row" data-aos="fade-right" data-aos-duration="500" data-aos-anchor-placement="top-bottom" data-aos-offset="26">
                        <div class="fourth-section-first-content d-flex col-12">
                            <div class="">  
                                <div class="fourth-section-first-content-title-3"></div>
                                <div class="fourth-section-first-content-description-3"></div>
                            </div>
                        </div>
                        <img src="{{ asset ('assets/images/Home-images/fourth-section/card-3.png') }}" class="fourth-section-first-content-description-3-img" alt="" data-aos="fade-up" data-aos-duration="1000">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="fifth-section" class="fifth-section" data-color="#fff">
        <div class="container-fluid">
            <div class="fifth-section-container row mx-auto" >
                <div class="padding-gap col-12">
                    <div class="fifth-section-first-div row col-12  " data-aos="zoom-in" data-aos-duration="3000" data-aos-anchor-placement="top-bottom">
                        <div class="fifth-section-first-content d-flex col-12 col-xl-6">
                            <div class="m-auto">  
                                <div class="fifth-section-first-content-title" data-aos="zoom-in-right" data-aos-duration="1000"> </div>
                                <div class="fifth-section-first-content-description" data-aos="zoom-in-left" data-aos-duration="1000"></div>
                                <a class="fifth-section-first-content-button" data-aos="zoom-in" data-aos-duration="1000" onclick="Be_a_Communitrade()">Be part of the CommuniTrade</a>
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
                                    <img id="profile-image" src="{{ asset ('assets/images/Home-images/fifth-section/profile.png ') }}">
                                </div>
                                <div class="fifth-section-second-content-info">
                                    <div class="fifth-section-second-content-username">@Mario Kern</div>
                                    <div class="fifth-section-second-content-platform">comment in Community Forum</div>

                                    <div class="fifth-section-second-content-comments">Saw another post from FB that gives an easy step by step guide on how to build your investment plan.</div>
                                </div>
                            </div>
                        </div>
                        <a class="fifth-section-third-content-button-2 mx-auto">Be part of the CommuniTrade</a>
                    </div>
                </div> 
            </div>
        </div>
    </section>

    <section id="sixth-section" class="sixth-section">
        <div class="container-fluid">
            <div class="sixth-section-container row mx-auto">
                <div class="padding-gap col-12">
                    <div class="sixth-section-first-div row" data-aos="zoom-in-up" data-aos-duration="3000" data-aos-anchor-placement="top-bottom">
                        <div class="sixth-section-first-content d-flex col-12 col-xl-6" data-aos="flip-down" data-aos-duration="1000">
                            <div class="m-auto">  
                                <div class="sixth-section-first-content-title"></div>
                                <div class="sixth-section-first-content-description"></div>
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
                                <div class="sixth-section-first-content-title-2"></div>
                                <div class="sixth-section-first-content-description-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="padding-gap col-12 col-xl-6">
                    <div class="sixth-section-third-div-3 row justify-content-center" data-aos="zoom-out-left" data-aos-duration="500">
                        <div class="sixth-section-first-content d-flex col-12" data-aos="zoom-in-right" data-aos-duration="1000">
                            <div class="">  
                                <div class="sixth-section-first-content-title-3"></div>
                                <div class="sixth-section-first-content-description-3"></div>
                            </div>
                        </div>
                        <img class="sixth-section-first-content-phone" src="{{ asset ('assets/images/Home-images/sixth-section/card-3.png ') }}" alt="" data-aos="fade-right" data-aos-duration="1000">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="seventh-section" class="seventh-section" data-color="#E6E7E7">
        <div class="container-fluid">
            <div class="seventh-section-container row mx-auto">
                <div class="padding-gap col-12">
                    <div class="seventh-section-first-div row" data-aos="zoom-in" data-aos-duration="3000" data-aos-anchor-placement="top-bottom">
                        <div class="seventh-section-first-content d-flex col-12 col-xl-5">
                            <div class="me-auto my-auto">  
                                <div class="seventh-section-first-content-title" data-aos="zoom-in-right" data-aos-duration="1000"></div>
                                <div class="seventh-section-first-content-description" data-aos="zoom-in-left" data-aos-duration="1000"></div>
                                <a class="seventh-section-first-content-button" data-aos="zoom-in" data-aos-duration="1000" onclick="Be_a_TRU()">More TRU Insights</a>
                            </div>
                        </div>
                        <div class="seventh-section-second-content d-flex col-12 col-xl-7 row" data-aos="flip-up" data-aos-easing="ease-out-cubic" data-aos-duration="500">
                            <div class="seventh-section-second-card-div-1 col-6 p-2">
                                <div class="seventh-section-second-card-1">
                                    <img class="seventh-section-second-card-main-img" src="{{ asset ('assets/images/Home-images/seventh-section/card-1.png ') }}">
                                    <div class="seventh-section-second-description">Decrypted: A Closer Look at Cryptocurrencies</div>
                                    <div class="seventh-section-second-tag">
                                        <svg class="mb-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7.0498 7.0498H7.0598M10.5118 3H7.8C6.11984 3 5.27976 3 4.63803 3.32698C4.07354 3.6146 3.6146 4.07354 3.32698 4.63803C3 5.27976 3 6.11984 3 7.8V10.5118C3 11.2455 3 11.6124 3.08289 11.9577C3.15638 12.2638 3.27759 12.5564 3.44208 12.8249C3.6276 13.1276 3.88703 13.387 4.40589 13.9059L9.10589 18.6059C10.2939 19.7939 10.888 20.388 11.5729 20.6105C12.1755 20.8063 12.8245 20.8063 13.4271 20.6105C14.112 20.388 14.7061 19.7939 15.8941 18.6059L18.6059 15.8941C19.7939 14.7061 20.388 14.112 20.6105 13.4271C20.8063 12.8245 20.8063 12.1755 20.6105 11.5729C20.388 10.888 19.7939 10.2939 18.6059 9.10589L13.9059 4.40589C13.387 3.88703 13.1276 3.6276 12.8249 3.44208C12.5564 3.27759 12.2638 3.15638 11.9577 3.08289C11.6124 3 11.2455 3 10.5118 3ZM7.5498 7.0498C7.5498 7.32595 7.32595 7.5498 7.0498 7.5498C6.77366 7.5498 6.5498 7.32595 6.5498 7.0498C6.5498 6.77366 6.77366 6.5498 7.0498 6.5498C7.32595 6.5498 7.5498 6.77366 7.5498 7.0498Z" stroke="#1681C2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        <div class="seventh-section-second-title">Cryptocurrency, Beginner Guide</div>
                                    </div>
                                    <div class="seventh-section-second-time mt-auto">
                                        <img src="{{ asset ('assets/images/Home-images/seventh-section/lets-icons_time-light.png  ') }}" alt="">
                                        <div class="seventh-section-second-date">January 31, 2024 </div>
                                    </div>
                                </div>
                                <div class="seventh-section-second-card-1">
                                    <img class="seventh-section-second-card-main-img" src="{{ asset ('assets/images/Home-images/seventh-section/card-2.png  ') }}">
                                    <div class="seventh-section-second-description">What is Forex Trading: A Comprehensive Guide</div>
                                    <div class="seventh-section-second-tag">
                                        <svg class="mb-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7.0498 7.0498H7.0598M10.5118 3H7.8C6.11984 3 5.27976 3 4.63803 3.32698C4.07354 3.6146 3.6146 4.07354 3.32698 4.63803C3 5.27976 3 6.11984 3 7.8V10.5118C3 11.2455 3 11.6124 3.08289 11.9577C3.15638 12.2638 3.27759 12.5564 3.44208 12.8249C3.6276 13.1276 3.88703 13.387 4.40589 13.9059L9.10589 18.6059C10.2939 19.7939 10.888 20.388 11.5729 20.6105C12.1755 20.8063 12.8245 20.8063 13.4271 20.6105C14.112 20.388 14.7061 19.7939 15.8941 18.6059L18.6059 15.8941C19.7939 14.7061 20.388 14.112 20.6105 13.4271C20.8063 12.8245 20.8063 12.1755 20.6105 11.5729C20.388 10.888 19.7939 10.2939 18.6059 9.10589L13.9059 4.40589C13.387 3.88703 13.1276 3.6276 12.8249 3.44208C12.5564 3.27759 12.2638 3.15638 11.9577 3.08289C11.6124 3 11.2455 3 10.5118 3ZM7.5498 7.0498C7.5498 7.32595 7.32595 7.5498 7.0498 7.5498C6.77366 7.5498 6.5498 7.32595 6.5498 7.0498C6.5498 6.77366 6.77366 6.5498 7.0498 6.5498C7.32595 6.5498 7.5498 6.77366 7.5498 7.0498Z" stroke="#1681C2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        <div class="seventh-section-second-title">Forex Trading, Beginner Guide</div>
                                    </div>
                                    <div class="seventh-section-second-time mt-auto">
                                        <img src="{{ asset ('assets/images/Home-images/seventh-section/lets-icons_time-light.png  ') }}" alt="">
                                        <div class="seventh-section-second-date">January 30, 2024</div>
                                    </div>
                                </div>
                                <div class="seventh-section-second-card-1">
                                    <img class="seventh-section-second-card-main-img" src="{{ asset ('assets/images/Home-images/seventh-section/card-1.png  ') }}">
                                    <div class="seventh-section-second-description">Technical, Fundamental, or Sentimental Analysis: Which Is Best for You?</div>
                                    <div class="seventh-section-second-tag">
                                        <svg class="mb-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7.0498 7.0498H7.0598M10.5118 3H7.8C6.11984 3 5.27976 3 4.63803 3.32698C4.07354 3.6146 3.6146 4.07354 3.32698 4.63803C3 5.27976 3 6.11984 3 7.8V10.5118C3 11.2455 3 11.6124 3.08289 11.9577C3.15638 12.2638 3.27759 12.5564 3.44208 12.8249C3.6276 13.1276 3.88703 13.387 4.40589 13.9059L9.10589 18.6059C10.2939 19.7939 10.888 20.388 11.5729 20.6105C12.1755 20.8063 12.8245 20.8063 13.4271 20.6105C14.112 20.388 14.7061 19.7939 15.8941 18.6059L18.6059 15.8941C19.7939 14.7061 20.388 14.112 20.6105 13.4271C20.8063 12.8245 20.8063 12.1755 20.6105 11.5729C20.388 10.888 19.7939 10.2939 18.6059 9.10589L13.9059 4.40589C13.387 3.88703 13.1276 3.6276 12.8249 3.44208C12.5564 3.27759 12.2638 3.15638 11.9577 3.08289C11.6124 3 11.2455 3 10.5118 3ZM7.5498 7.0498C7.5498 7.32595 7.32595 7.5498 7.0498 7.5498C6.77366 7.5498 6.5498 7.32595 6.5498 7.0498C6.5498 6.77366 6.77366 6.5498 7.0498 6.5498C7.32595 6.5498 7.5498 6.77366 7.5498 7.0498Z" stroke="#1681C2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        <div class="seventh-section-second-title">Market Analysis, Trading Strategy</div>
                                    </div>
                                    <div class="seventh-section-second-time mt-auto">
                                        <img src="{{ asset ('assets/images/Home-images/seventh-section/lets-icons_time-light.png  ') }}" alt="">
                                        <div class="seventh-section-second-date">January 29, 2024</div>
                                    </div>
                                </div>
                                <div class="seventh-section-second-card-1">
                                    <img class="seventh-section-second-card-main-img" src="{{ asset ('assets/images/Home-images/seventh-section/card-1.png ') }}">
                                    <div class="seventh-section-second-description">Decrypted: A Closer Look at Cryptocurrencies</div>
                                    <div class="seventh-section-second-tag">
                                        <svg class="mb-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7.0498 7.0498H7.0598M10.5118 3H7.8C6.11984 3 5.27976 3 4.63803 3.32698C4.07354 3.6146 3.6146 4.07354 3.32698 4.63803C3 5.27976 3 6.11984 3 7.8V10.5118C3 11.2455 3 11.6124 3.08289 11.9577C3.15638 12.2638 3.27759 12.5564 3.44208 12.8249C3.6276 13.1276 3.88703 13.387 4.40589 13.9059L9.10589 18.6059C10.2939 19.7939 10.888 20.388 11.5729 20.6105C12.1755 20.8063 12.8245 20.8063 13.4271 20.6105C14.112 20.388 14.7061 19.7939 15.8941 18.6059L18.6059 15.8941C19.7939 14.7061 20.388 14.112 20.6105 13.4271C20.8063 12.8245 20.8063 12.1755 20.6105 11.5729C20.388 10.888 19.7939 10.2939 18.6059 9.10589L13.9059 4.40589C13.387 3.88703 13.1276 3.6276 12.8249 3.44208C12.5564 3.27759 12.2638 3.15638 11.9577 3.08289C11.6124 3 11.2455 3 10.5118 3ZM7.5498 7.0498C7.5498 7.32595 7.32595 7.5498 7.0498 7.5498C6.77366 7.5498 6.5498 7.32595 6.5498 7.0498C6.5498 6.77366 6.77366 6.5498 7.0498 6.5498C7.32595 6.5498 7.5498 6.77366 7.5498 7.0498Z" stroke="#1681C2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        <div class="seventh-section-second-title">Cryptocurrency, Beginner Guide</div>
                                    </div>
                                    <div class="seventh-section-second-time mt-auto">
                                        <img src="{{ asset ('assets/images/Home-images/seventh-section/lets-icons_time-light.png  ') }}" alt="">
                                        <div class="seventh-section-second-date">January 31, 2024 </div>
                                    </div>
                                </div>
                                <div class="seventh-section-second-card-1">
                                    <img class="seventh-section-second-card-main-img" src="{{ asset ('assets/images/Home-images/seventh-section/card-2.png  ') }}">
                                    <div class="seventh-section-second-description">What is Forex Trading: A Comprehensive Guide</div>
                                    <div class="seventh-section-second-tag">
                                        <svg class="mb-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7.0498 7.0498H7.0598M10.5118 3H7.8C6.11984 3 5.27976 3 4.63803 3.32698C4.07354 3.6146 3.6146 4.07354 3.32698 4.63803C3 5.27976 3 6.11984 3 7.8V10.5118C3 11.2455 3 11.6124 3.08289 11.9577C3.15638 12.2638 3.27759 12.5564 3.44208 12.8249C3.6276 13.1276 3.88703 13.387 4.40589 13.9059L9.10589 18.6059C10.2939 19.7939 10.888 20.388 11.5729 20.6105C12.1755 20.8063 12.8245 20.8063 13.4271 20.6105C14.112 20.388 14.7061 19.7939 15.8941 18.6059L18.6059 15.8941C19.7939 14.7061 20.388 14.112 20.6105 13.4271C20.8063 12.8245 20.8063 12.1755 20.6105 11.5729C20.388 10.888 19.7939 10.2939 18.6059 9.10589L13.9059 4.40589C13.387 3.88703 13.1276 3.6276 12.8249 3.44208C12.5564 3.27759 12.2638 3.15638 11.9577 3.08289C11.6124 3 11.2455 3 10.5118 3ZM7.5498 7.0498C7.5498 7.32595 7.32595 7.5498 7.0498 7.5498C6.77366 7.5498 6.5498 7.32595 6.5498 7.0498C6.5498 6.77366 6.77366 6.5498 7.0498 6.5498C7.32595 6.5498 7.5498 6.77366 7.5498 7.0498Z" stroke="#1681C2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        <div class="seventh-section-second-title">Forex Trading, Beginner Guide</div>
                                    </div>
                                    <div class="seventh-section-second-time mt-auto">
                                        <img src="{{ asset ('assets/images/Home-images/seventh-section/lets-icons_time-light.png  ') }}" alt="">
                                        <div class="seventh-section-second-date">January 30, 2024</div>
                                    </div>
                                </div>
                                <div class="seventh-section-second-card-1">
                                    <img class="seventh-section-second-card-main-img" src="{{ asset ('assets/images/Home-images/seventh-section/card-1.png  ') }}">
                                    <div class="seventh-section-second-description">Technical, Fundamental, or Sentimental Analysis: Which Is Best for You?</div>
                                    <div class="seventh-section-second-tag">
                                        <svg class="mb-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7.0498 7.0498H7.0598M10.5118 3H7.8C6.11984 3 5.27976 3 4.63803 3.32698C4.07354 3.6146 3.6146 4.07354 3.32698 4.63803C3 5.27976 3 6.11984 3 7.8V10.5118C3 11.2455 3 11.6124 3.08289 11.9577C3.15638 12.2638 3.27759 12.5564 3.44208 12.8249C3.6276 13.1276 3.88703 13.387 4.40589 13.9059L9.10589 18.6059C10.2939 19.7939 10.888 20.388 11.5729 20.6105C12.1755 20.8063 12.8245 20.8063 13.4271 20.6105C14.112 20.388 14.7061 19.7939 15.8941 18.6059L18.6059 15.8941C19.7939 14.7061 20.388 14.112 20.6105 13.4271C20.8063 12.8245 20.8063 12.1755 20.6105 11.5729C20.388 10.888 19.7939 10.2939 18.6059 9.10589L13.9059 4.40589C13.387 3.88703 13.1276 3.6276 12.8249 3.44208C12.5564 3.27759 12.2638 3.15638 11.9577 3.08289C11.6124 3 11.2455 3 10.5118 3ZM7.5498 7.0498C7.5498 7.32595 7.32595 7.5498 7.0498 7.5498C6.77366 7.5498 6.5498 7.32595 6.5498 7.0498C6.5498 6.77366 6.77366 6.5498 7.0498 6.5498C7.32595 6.5498 7.5498 6.77366 7.5498 7.0498Z" stroke="#1681C2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        <div class="seventh-section-second-title">Market Analysis, Trading Strategy</div>
                                    </div>
                                    <div class="seventh-section-second-time mt-auto">
                                        <img src="{{ asset ('assets/images/Home-images/seventh-section/lets-icons_time-light.png  ') }}" alt="">
                                        <div class="seventh-section-second-date">January 29, 2024</div>
                                    </div>
                                </div>
                            </div>
                            <div class="seventh-section-second-card-div-2 col-6 p-2" data-aos="fade-left" data-aos-duration="1000">
                                <div class="seventh-section-second-card-2">
                                    <img class="seventh-section-second-card-main-img" src="{{ asset ('assets/images/Home-images/seventh-section/card-3.png  ') }}">
                                    <div class="seventh-section-second-description">Index Indecision: How to Choose the Right Indices to Invest In</div>
                                    <div class="seventh-section-second-tag">
                                        <svg class="mb-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7.0498 7.0498H7.0598M10.5118 3H7.8C6.11984 3 5.27976 3 4.63803 3.32698C4.07354 3.6146 3.6146 4.07354 3.32698 4.63803C3 5.27976 3 6.11984 3 7.8V10.5118C3 11.2455 3 11.6124 3.08289 11.9577C3.15638 12.2638 3.27759 12.5564 3.44208 12.8249C3.6276 13.1276 3.88703 13.387 4.40589 13.9059L9.10589 18.6059C10.2939 19.7939 10.888 20.388 11.5729 20.6105C12.1755 20.8063 12.8245 20.8063 13.4271 20.6105C14.112 20.388 14.7061 19.7939 15.8941 18.6059L18.6059 15.8941C19.7939 14.7061 20.388 14.112 20.6105 13.4271C20.8063 12.8245 20.8063 12.1755 20.6105 11.5729C20.388 10.888 19.7939 10.2939 18.6059 9.10589L13.9059 4.40589C13.387 3.88703 13.1276 3.6276 12.8249 3.44208C12.5564 3.27759 12.2638 3.15638 11.9577 3.08289C11.6124 3 11.2455 3 10.5118 3ZM7.5498 7.0498C7.5498 7.32595 7.32595 7.5498 7.0498 7.5498C6.77366 7.5498 6.5498 7.32595 6.5498 7.0498C6.5498 6.77366 6.77366 6.5498 7.0498 6.5498C7.32595 6.5498 7.5498 6.77366 7.5498 7.0498Z" stroke="#1681C2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        <div class="seventh-section-second-title">Indices, Investing</div>
                                    </div>
                                    <div class="seventh-section-second-time mt-auto">
                                        <img src="{{ asset ('assets/images/Home-images/seventh-section/lets-icons_time-light.png  ') }}" alt="">
                                        <div class="seventh-section-second-date">January 28, 2024</div>
                                    </div>
                                </div>
                                <div class="seventh-section-second-card-2">
                                    <img class="seventh-section-second-card-main-img" src="{{ asset ('assets/images/Home-images/seventh-section/card-4.png  ') }}">
                                    <div class="seventh-section-second-description">Quick Guide on Avoiding Trading Pitfalls and Common Trading Mistakes</div>
                                    <div class="seventh-section-second-tag">
                                        <svg class="mb-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7.0498 7.0498H7.0598M10.5118 3H7.8C6.11984 3 5.27976 3 4.63803 3.32698C4.07354 3.6146 3.6146 4.07354 3.32698 4.63803C3 5.27976 3 6.11984 3 7.8V10.5118C3 11.2455 3 11.6124 3.08289 11.9577C3.15638 12.2638 3.27759 12.5564 3.44208 12.8249C3.6276 13.1276 3.88703 13.387 4.40589 13.9059L9.10589 18.6059C10.2939 19.7939 10.888 20.388 11.5729 20.6105C12.1755 20.8063 12.8245 20.8063 13.4271 20.6105C14.112 20.388 14.7061 19.7939 15.8941 18.6059L18.6059 15.8941C19.7939 14.7061 20.388 14.112 20.6105 13.4271C20.8063 12.8245 20.8063 12.1755 20.6105 11.5729C20.388 10.888 19.7939 10.2939 18.6059 9.10589L13.9059 4.40589C13.387 3.88703 13.1276 3.6276 12.8249 3.44208C12.5564 3.27759 12.2638 3.15638 11.9577 3.08289C11.6124 3 11.2455 3 10.5118 3ZM7.5498 7.0498C7.5498 7.32595 7.32595 7.5498 7.0498 7.5498C6.77366 7.5498 6.5498 7.32595 6.5498 7.0498C6.5498 6.77366 6.77366 6.5498 7.0498 6.5498C7.32595 6.5498 7.5498 6.77366 7.5498 7.0498Z" stroke="#1681C2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        <div class="seventh-section-second-title">Trading Practices, Market Safety</div>
                                    </div>
                                    <div class="seventh-section-second-time mt-auto">
                                        <img src="{{ asset ('assets/images/Home-images/seventh-section/lets-icons_time-light.png  ') }}" alt="">
                                        <div class="seventh-section-second-date">January 27, 2024</div>
                                    </div>
                                </div>
                                <div class="seventh-section-second-card-2">
                                    <img class="seventh-section-second-card-main-img" src="{{ asset ('assets/images/Home-images/seventh-section/card-3.png  ') }}">
                                    <div class="seventh-section-second-description">Trading on Eggshells: Tell-tale Signs of Scam Brokers</div>
                                    <div class="seventh-section-second-tag">
                                        <svg class="mb-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7.0498 7.0498H7.0598M10.5118 3H7.8C6.11984 3 5.27976 3 4.63803 3.32698C4.07354 3.6146 3.6146 4.07354 3.32698 4.63803C3 5.27976 3 6.11984 3 7.8V10.5118C3 11.2455 3 11.6124 3.08289 11.9577C3.15638 12.2638 3.27759 12.5564 3.44208 12.8249C3.6276 13.1276 3.88703 13.387 4.40589 13.9059L9.10589 18.6059C10.2939 19.7939 10.888 20.388 11.5729 20.6105C12.1755 20.8063 12.8245 20.8063 13.4271 20.6105C14.112 20.388 14.7061 19.7939 15.8941 18.6059L18.6059 15.8941C19.7939 14.7061 20.388 14.112 20.6105 13.4271C20.8063 12.8245 20.8063 12.1755 20.6105 11.5729C20.388 10.888 19.7939 10.2939 18.6059 9.10589L13.9059 4.40589C13.387 3.88703 13.1276 3.6276 12.8249 3.44208C12.5564 3.27759 12.2638 3.15638 11.9577 3.08289C11.6124 3 11.2455 3 10.5118 3ZM7.5498 7.0498C7.5498 7.32595 7.32595 7.5498 7.0498 7.5498C6.77366 7.5498 6.5498 7.32595 6.5498 7.0498C6.5498 6.77366 6.77366 6.5498 7.0498 6.5498C7.32595 6.5498 7.5498 6.77366 7.5498 7.0498Z" stroke="#1681C2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        <div class="seventh-section-second-title">Trading Scams, Scam Brokers</div>
                                    </div>
                                    <div class="seventh-section-second-time mt-auto">
                                        <img src="{{ asset ('assets/images/Home-images/seventh-section/lets-icons_time-light.png  ') }}" alt="">
                                        <div class="seventh-section-second-date">January 26, 2024</div>
                                    </div>
                                </div>
                                <div class="seventh-section-second-card-2">
                                    <img class="seventh-section-second-card-main-img" src="{{ asset ('assets/images/Home-images/seventh-section/card-3.png  ') }}">
                                    <div class="seventh-section-second-description">Index Indecision: How to Choose the Right Indices to Invest In</div>
                                    <div class="seventh-section-second-tag">
                                        <svg class="mb-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7.0498 7.0498H7.0598M10.5118 3H7.8C6.11984 3 5.27976 3 4.63803 3.32698C4.07354 3.6146 3.6146 4.07354 3.32698 4.63803C3 5.27976 3 6.11984 3 7.8V10.5118C3 11.2455 3 11.6124 3.08289 11.9577C3.15638 12.2638 3.27759 12.5564 3.44208 12.8249C3.6276 13.1276 3.88703 13.387 4.40589 13.9059L9.10589 18.6059C10.2939 19.7939 10.888 20.388 11.5729 20.6105C12.1755 20.8063 12.8245 20.8063 13.4271 20.6105C14.112 20.388 14.7061 19.7939 15.8941 18.6059L18.6059 15.8941C19.7939 14.7061 20.388 14.112 20.6105 13.4271C20.8063 12.8245 20.8063 12.1755 20.6105 11.5729C20.388 10.888 19.7939 10.2939 18.6059 9.10589L13.9059 4.40589C13.387 3.88703 13.1276 3.6276 12.8249 3.44208C12.5564 3.27759 12.2638 3.15638 11.9577 3.08289C11.6124 3 11.2455 3 10.5118 3ZM7.5498 7.0498C7.5498 7.32595 7.32595 7.5498 7.0498 7.5498C6.77366 7.5498 6.5498 7.32595 6.5498 7.0498C6.5498 6.77366 6.77366 6.5498 7.0498 6.5498C7.32595 6.5498 7.5498 6.77366 7.5498 7.0498Z" stroke="#1681C2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        <div class="seventh-section-second-title">Indices, Investing</div>
                                    </div>
                                    <div class="seventh-section-second-time mt-auto">
                                        <img src="{{ asset ('assets/images/Home-images/seventh-section/lets-icons_time-light.png  ') }}" alt="">
                                        <div class="seventh-section-second-date">January 28, 2024</div>
                                    </div>
                                </div>
                                <div class="seventh-section-second-card-2">
                                    <img class="seventh-section-second-card-main-img" src="{{ asset ('assets/images/Home-images/seventh-section/card-4.png  ') }}">
                                    <div class="seventh-section-second-description">Quick Guide on Avoiding Trading Pitfalls and Common Trading Mistakes</div>
                                    <div class="seventh-section-second-tag">
                                        <svg class="mb-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7.0498 7.0498H7.0598M10.5118 3H7.8C6.11984 3 5.27976 3 4.63803 3.32698C4.07354 3.6146 3.6146 4.07354 3.32698 4.63803C3 5.27976 3 6.11984 3 7.8V10.5118C3 11.2455 3 11.6124 3.08289 11.9577C3.15638 12.2638 3.27759 12.5564 3.44208 12.8249C3.6276 13.1276 3.88703 13.387 4.40589 13.9059L9.10589 18.6059C10.2939 19.7939 10.888 20.388 11.5729 20.6105C12.1755 20.8063 12.8245 20.8063 13.4271 20.6105C14.112 20.388 14.7061 19.7939 15.8941 18.6059L18.6059 15.8941C19.7939 14.7061 20.388 14.112 20.6105 13.4271C20.8063 12.8245 20.8063 12.1755 20.6105 11.5729C20.388 10.888 19.7939 10.2939 18.6059 9.10589L13.9059 4.40589C13.387 3.88703 13.1276 3.6276 12.8249 3.44208C12.5564 3.27759 12.2638 3.15638 11.9577 3.08289C11.6124 3 11.2455 3 10.5118 3ZM7.5498 7.0498C7.5498 7.32595 7.32595 7.5498 7.0498 7.5498C6.77366 7.5498 6.5498 7.32595 6.5498 7.0498C6.5498 6.77366 6.77366 6.5498 7.0498 6.5498C7.32595 6.5498 7.5498 6.77366 7.5498 7.0498Z" stroke="#1681C2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        <div class="seventh-section-second-title">Trading Practices, Market Safety</div>
                                    </div>
                                    <div class="seventh-section-second-time mt-auto">
                                        <img src="{{ asset ('assets/images/Home-images/seventh-section/lets-icons_time-light.png  ') }}" alt="">
                                        <div class="seventh-section-second-date">January 27, 2024</div>
                                    </div>
                                </div>
                                <div class="seventh-section-second-card-2">
                                    <img class="seventh-section-second-card-main-img" src="{{ asset ('assets/images/Home-images/seventh-section/card-3.png  ') }}">
                                    <div class="seventh-section-second-description">Trading on Eggshells: Tell-tale Signs of Scam Brokers</div>
                                    <div class="seventh-section-second-tag">
                                        <svg class="mb-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7.0498 7.0498H7.0598M10.5118 3H7.8C6.11984 3 5.27976 3 4.63803 3.32698C4.07354 3.6146 3.6146 4.07354 3.32698 4.63803C3 5.27976 3 6.11984 3 7.8V10.5118C3 11.2455 3 11.6124 3.08289 11.9577C3.15638 12.2638 3.27759 12.5564 3.44208 12.8249C3.6276 13.1276 3.88703 13.387 4.40589 13.9059L9.10589 18.6059C10.2939 19.7939 10.888 20.388 11.5729 20.6105C12.1755 20.8063 12.8245 20.8063 13.4271 20.6105C14.112 20.388 14.7061 19.7939 15.8941 18.6059L18.6059 15.8941C19.7939 14.7061 20.388 14.112 20.6105 13.4271C20.8063 12.8245 20.8063 12.1755 20.6105 11.5729C20.388 10.888 19.7939 10.2939 18.6059 9.10589L13.9059 4.40589C13.387 3.88703 13.1276 3.6276 12.8249 3.44208C12.5564 3.27759 12.2638 3.15638 11.9577 3.08289C11.6124 3 11.2455 3 10.5118 3ZM7.5498 7.0498C7.5498 7.32595 7.32595 7.5498 7.0498 7.5498C6.77366 7.5498 6.5498 7.32595 6.5498 7.0498C6.5498 6.77366 6.77366 6.5498 7.0498 6.5498C7.32595 6.5498 7.5498 6.77366 7.5498 7.0498Z" stroke="#1681C2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        <div class="seventh-section-second-title">Trading Scams, Scam Brokers</div>
                                    </div>
                                    <div class="seventh-section-second-time mt-auto">
                                        <img src="{{ asset ('assets/images/Home-images/seventh-section/lets-icons_time-light.png  ') }}" alt="">
                                        <div class="seventh-section-second-date">January 26, 2024</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="seventh-section-first-content-button-2" data-aos="zoom-in" data-aos-duration="1000">More TRU Insights</a>
                    </div>
                </div>  
            </div>
        </div>
    </section>

    <section id="eigth-section" class="eigth-section">
        <div class="container-fluid">
            <div class="eigth-section-container row mx-auto">
                <div class="padding-gap col-12">
                    <div class="eigth-section-first-div row" data-aos="zoom-in" data-aos-duration="3000" data-aos-anchor-placement="top-bottom">
                        <div class="eigth-section-first-content col-12" data-aos="fade-right" data-aos-duration="1000">
                            <div class="eigth-section-first-content-title"></div>
                            <div class="eigth-section-first-content-description" data-aos="zoom-in-left" data-aos-duration="1000">See how TRU helped members become better and more successful traders!</div>
                        </div>
                        <div class="eigth-section-second-content d-flex col-12">
                            <!-- <img src="{{ asset ('assets/images/Home-images/eigth-section/card-1.png  ') }}" alt="" class="eigth-section-second-content-img-1" data-aos="zoom-in" data-aos-delay="" data-aos-duration="500">
                            <img src="{{ asset ('assets/images/Home-images/eigth-section/card-2.png  ') }}" alt="" class="eigth-section-second-content-img-2" data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1000">
                            <img src="{{ asset ('assets/images/Home-images/eigth-section/card-3.png  ') }}" alt="" class="eigth-section-second-content-img-3" data-aos="zoom-in" data-aos-delay="2000" data-aos-duration="1500"> -->
                            <div id="carouselExampleCaptions" class="carousel slide" style="width:100%;border-radius: 50px">
                                <div class="carousel-indicators">
                                    <img type="button" src="{{ asset ('assets/images/Home-images/eigth-section/card-1.png') }}" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                                    <img type="button" src="{{ asset ('assets/images/Home-images/eigth-section/card-2.png') }}"  data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2">
                                    <img type="button" src="{{ asset ('assets/images/Home-images/eigth-section/card-3.png') }}" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3">
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <!-- <video src="{{ asset ('assets/images/Home-images/eigth-section/example_video.mp4') }}" class="d-block w-100" alt="..." autoplay muted controls> -->
                                        <img class="d-block w-100" src="{{ asset ('assets/images/Home-images/eigth-section/card-1.png') }}" alt="">
                                        <div class="carousel-caption d-none d-md-block">
                                            <p class="eight-section-carousel-caption-paragraph">TRU's Dispute Resolution Support really sealed the deal for me! Knowing that TRU has my back has made me more confident about trading with any broker.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <!-- <video src="{{ asset ('assets/images/Home-images/eigth-section/example_video.mp4') }}" class="d-block w-100" alt="..." autoplay muted controls> -->
                                        <img class="d-block w-100" src="{{ asset ('assets/images/Home-images/eigth-section/card-2.png') }}" alt="">
                                        <div class="carousel-caption d-none d-md-block">
                                            <p class="eight-section-carousel-caption-paragraph">TRU's Dispute Resolution Support really sealed the deal for me! Knowing that TRU has my back has made me more confident about trading with any broker.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <!-- <video src="{{ asset ('assets/images/Home-images/eigth-section/example_video.mp4') }}" class="d-block w-100" alt="..." autoplay muted controls> -->
                                        <img class="d-block w-100" src="{{ asset ('assets/images/Home-images/eigth-section/card-3.png') }}" alt="">
                                        <div class="carousel-caption d-none d-md-block">
                                            <p class="eight-section-carousel-caption-paragraph">TRU's Dispute Resolution Support really sealed the deal for me! Knowing that TRU has my back has made me more confident about trading with any broker.</p>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="eigth-section-scroll-section" onclick="Be_a_TRU()">
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
</div>

<script src="{{ asset ('assets/js/Homepage-script.js') }}"></script>

<script type="text/javascript">

    document.addEventListener("DOMContentLoaded", () => {
        handle_3rd_Contents();
        handle_4th_Contents();
        handle_5th_Contents();
        handle_6th_Contents();
        handle_7th_Contents();
        handle_8th_Contents();
    })

    function handle_3rd_Contents() {
        fetch(`/api/content/Homepage-section-3`)
        .then(response => response.json())
        .then(data => {

            const contentTitle = data[0].content_title;
            const contentTitleColored = data[0].content_title_colored;
            const contentDescription = data[0].content_description;

            const contentTitle_2 = data[1].content_title;
            const contentTitleColored_2 = data[1].content_title_colored;
            const contentDescription_2 = data[1].content_description;

            const contentTitle_3 = data[2].content_title;
            const contentTitleColored_3 = data[2].content_title_colored;
            const contentDescription_3 = data[2].content_description;

            const titleElement = document.querySelector('.third-section-first-content-title');
            titleElement.innerHTML = `<span>${contentTitleColored}</span> <br> ${contentTitle}`;

            const descriptionElement = document.querySelector('.third-section-first-content-description');
            descriptionElement.textContent = contentDescription;

            const titleElement_2 = document.querySelector('.third-section-first-content-title-2');
            titleElement_2.innerHTML = `<span>${contentTitleColored_2}</span> <br> ${contentTitle_2}`;

            const descriptionElement_2 = document.querySelector('.third-section-first-content-description-2');
            descriptionElement_2.textContent = contentDescription_2;

            const titleElement_3 = document.querySelector('.third-section-first-content-title-3');
            titleElement_3.innerHTML = `<span>${contentTitleColored_3}</span> <br> ${contentTitle_3}`;

            const descriptionElement_3 = document.querySelector('.third-section-first-content-description-3');
            descriptionElement_3.textContent = contentDescription_3;
           
        })
        .catch(error => console.error('Error fetching Page Content 3rd Section:', error));
    }


    function handle_4th_Contents() {
        fetch(`/api/content/Homepage-section-4`)
        .then(response => response.json())
        .then(data => {
            const contentTitle = data[0].content_title;
            const contentTitleColored = data[0].content_title_colored;
            const contentDescription = data[0].content_description;

            const contentTitle_2 = data[1].content_title;
            const contentTitleColored_2 = data[1].content_title_colored;
            const contentDescription_2 = data[1].content_description;

            const contentTitle_3 = data[2].content_title;
            const contentTitle_3_2 = data[2].content_title_2;
            const contentTitleColored_3 = data[2].content_title_colored;
            const contentDescription_3 = data[2].content_description;
            const contentDescription_3_2 = data[2].content_description_2;
        
            const titleElement = document.querySelector('.fourth-section-first-content-title');
            titleElement.innerHTML = `${contentTitle}  <br> <span>${contentTitleColored}</span>`;

            const descriptionElement = document.querySelector('.fourth-section-first-content-description');
            descriptionElement.textContent = contentDescription;

            const titleElement_2 = document.querySelector('.fourth-section-first-content-title-2');
            titleElement_2.innerHTML = `<span>${contentTitleColored_2}</span> <br> ${contentTitle_2}`;

            const descriptionElement_2 = document.querySelector('.fourth-section-first-content-description-2');
            descriptionElement_2.textContent = contentDescription_2;

            const titleElement_3 = document.querySelector('.fourth-section-first-content-title-3');
            titleElement_3.innerHTML = `<span>${contentTitleColored_3}</span> ${contentTitle_3} <span-2>${contentTitle_3_2}</span-2>`;

            const descriptionElement_3 = document.querySelector('.fourth-section-first-content-description-3');
            descriptionElement_3.innerHTML = `${contentDescription_3}<br><br>${contentDescription_3_2}`;

        })
        .catch(error => console.error('Error fetching Page Content 4th Section:', error));
    }


    function handle_5th_Contents() {
        fetch(`/api/content/Homepage-section-5`)
        .then(response => response.json())
        .then(data => {

            const contentTitle = data[0].content_title;
            const contentTitleColored = data[0].content_title_colored;
            const contentDescription = data[0].content_description;

            const titleElement = document.querySelector('.fifth-section-first-content-title');
            titleElement.innerHTML = `<span>${contentTitleColored}</span> ${contentTitle}`;

            const descriptionElement = document.querySelector('.fifth-section-first-content-description');
            descriptionElement.textContent = contentDescription;

        })
        .catch(error => console.error('Error fetching Page Content 4th Section:', error));
    }

    function handle_6th_Contents() {
        fetch(`/api/content/Homepage-section-6`)
        .then(response => response.json())
        .then(data => {

            const contentTitle = data[0].content_title;
            const contentTitleColored = data[0].content_title_colored;
            const contentDescription = data[0].content_description;


            const contentTitle_2 = data[1].content_title;
            const contentTitleColored_2 = data[1].content_title_colored;
            const contentDescription_2 = data[1].content_description;
            const contentDescription_2_2 = data[1].content_description_2;

            const contentTitle_3 = data[2].content_title;
            const contentTitleColored_3 = data[2].content_title_colored;
            const contentDescription_3 = data[2].content_description;
            const contentDescription_3_2 = data[2].content_description_2;

            const titleElement = document.querySelector('.sixth-section-first-content-title');
            titleElement.innerHTML = `${contentTitle} <span>${contentTitleColored}</span>`;

            const descriptionElement = document.querySelector('.sixth-section-first-content-description');
            descriptionElement.textContent = contentDescription;

            const titleElement_2 = document.querySelector('.sixth-section-first-content-title-2');
            titleElement_2.innerHTML = `${contentTitle_2} <span>${contentTitleColored_2}</span>`;

            const descriptionElement_2 = document.querySelector('.sixth-section-first-content-description-2');
            descriptionElement_2.innerHTML = `${contentDescription_2}<br><br>${contentDescription_2_2}`;

            const titleElement_3 = document.querySelector('.sixth-section-first-content-title-3');
            titleElement_3.innerHTML = `${contentTitle_3} <span>${contentTitleColored_3}</span>`;

            const descriptionElement_3 = document.querySelector('.sixth-section-first-content-description-3');
            descriptionElement_3.innerHTML = `${contentDescription_3}<br><br>${contentDescription_3_2}`;

        })
        .catch(error => console.error('Error fetching Page Content 4th Section:', error));
    }

    function handle_7th_Contents() {
        fetch(`/api/content/Homepage-section-7`)
        .then(response => response.json())
        .then(data => {

            const contentTitle = data[0].content_title;
            const contentTitleColored = data[0].content_title_colored;
            const contentDescription = data[0].content_description;

            const titleElement = document.querySelector('.seventh-section-first-content-title');
            titleElement.innerHTML = `${contentTitle}`;

            const descriptionElement = document.querySelector('.seventh-section-first-content-description');
            descriptionElement.textContent = contentDescription;
           
        })
        .catch(error => console.error('Error fetching Page Content 4th Section:', error));
    }

    function handle_8th_Contents() {
        fetch(`/api/content/Homepage-section-8`)
        .then(response => response.json())
        .then(data => {

            const contentTitle = data[0].content_title;
            const contentDescription = data[0].content_description;

            const titleElement = document.querySelector('.eigth-section-first-content-title');
            titleElement.innerHTML = `${contentTitle}`;
           
        })
        .catch(error => console.error('Error fetching Page Content 4th Section:', error));
    }

</script>


@endsection