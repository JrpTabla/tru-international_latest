@extends('header.header')



@section('content')

    <link rel="stylesheet" href="{{ asset ('assets/css/RPP/index.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/UG/landing-section.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/UG/second-section.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/UG/third-section.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/UG/fourth-section.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/UG/fifth-section.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/UG/sixth-section.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/UG/seventh-section.css') }}">

<div class="main">
    <!-- Fourth Section Start -->
    <section id="ug-landing-section" class="ug-landing-section">
        <div class="ug-landing-section-container row mx-auto">
        <div class="ug-landing-section-first-div row">
            <div
            class="ug-landing-section-first-content d-flex col-12 col-xl-6"
            >
            <div class="m-auto">
                <div class="ug-landing-section-first-content-title">
                UnityGains
                </div>
                <div class="ug-landing-section-first-content-description">
                    Let's earn and grow — TRUgether
                </div>
                <div class="ug-landing-section-Btn-div">
                    <a class="Be-a-TRU-btn">Be a TRU member</a>
                </div>
                
            </div>
            </div>
            <div
            class="ug-landing-section-second-content d-flex col-12 col-xl-6"
            >
            <div class="mx-auto mt-auto">
                <div class="ug-landing-section-first-content-img">
                <img
                    src="{{ asset ('assets/images/UG-images/landing-img.png') }}"
                    alt=""
                    style="width: 100%"
                />
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    
    <section id="ug-second-section" class="ug-second-section">
        <div class="ug-second-section-container row mx-auto">
            <div class="ug-second-section-first-div row">
                <div class="ug-second-section-container-title order-1 order-lg-1">UnityGains for members</div>
                <div class="ug-second-section-container-sub-title order-2 order-lg-2">392,312.88 USD</div>
                <div class="ug-second-section-container-description-div mx-auto order-4 order-md-3">
                    <div class="ug-second-section-container-description-title">This is profit-sharing, remagined</div>
                    <div class="ug-second-section-container-description-description">We value our members’ trust and we show that through a collaborative and mutually beneficial UnityGains program. TRU uses a systematic mechanism to ensure an accurate and fair distribution of the program’s benefits among all our valued members.</div>
                </div>

                <svg class="ug-second-section-graph order-3 order-md-4" xmlns="http://www.w3.org/2000/svg" width="1920" height="648" viewBox="0 0 1920 648" fill="none" class="ug-second-section-container-graph">
                    <path d="M142.505 374.43L51.3114 401.501L-2.66046 374.43L-61.2851 432.104L-112 647.5H1938V0L1761.66 112.407L1610.91 150.092L1470.17 124.309L1362.92 195.52L1193.17 222.592L1033.49 344.415L958.031 296.745L829.024 374.43H787.157L742.37 401.501L616.283 344.415L444.934 401.501H291.574L226.827 432.104L142.505 374.43Z" fill="url(#paint0_linear_1287_7626)" fill-opacity="0.56"/>
                    <defs>
                    <linearGradient id="paint0_linear_1287_7626" x1="-151.423" y1="335.041" x2="1938" y2="335.041" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#E7AA2D"/>
                    <stop offset="1" stop-color="#1681C2"/>
                    </linearGradient>
                    </defs>
                </svg>
            </div>
        </div>
    </section>

    <section id="ug-third-section" class="ug-third-section">
        <div class="ug-third-section-container row mx-auto">
            <div class="ug-third-section-first-div row">
            <div class="ug-third-section-first-content d-flex col-12 col-xl-6">
                <div class="m-auto">
                <div class="ug-third-section-first-content-title">
                    See TRU’s net profit forecast & <span>how much you stand to gain!</span>
                </div>
                </div>
            </div>
            <div class="ug-third-section-second-content d-flex col-12 col-xl-6">
                <div class="mx-auto">
                <div class="ug-third-section-first-content-img">
                    <img
                    src="{{ asset ('assets/images/UG-images/third-section/circle-graph.png') }}"
                    alt=""
                    style="width: 100%"
                    />
                </div>
                </div>
            </div>
            <div class="ug-third-section-third-content d-flex col-12 row">
                <div class="col-12 col-md-6 col-xl-3" style="display: flex; align-content: center;margin: auto;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="my-auto">
                        <circle cx="10" cy="10" r="10" fill="#1681C2"/>
                    </svg>
                    <div class="ug-third-section-third-content-description-member">Membership: $200,000</div>
                </div>
                <div class="col-12 col-md-6 col-xl-3" style="display: flex; align-content: center;margin: auto;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="my-auto">
                        <circle cx="10" cy="10" r="10" fill="#569E4C"/>
                    </svg>
                    <div class="ug-third-section-third-content-description-affiliates" class="my-auto">Affiliates: $160,000</div>
                </div>
                <div class="col-12 col-md-6 col-xl-3" style="display: flex; align-content: center;margin: auto;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="my-auto">
                        <circle cx="10" cy="10" r="10" fill="#F27927"/>
                    </svg>
                    <div class="ug-third-section-third-content-description-others">Others: $80,000</div>
                </div>
                <div class="col-12 col-md-6 col-xl-3" style="display: flex; align-content: center;margin: auto;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="my-auto">
                        <circle cx="10" cy="10" r="10" fill="#B17B0D"/>
                    </svg>
                    <div class="ug-third-section-third-content-description-advertising" >Advertising: $560,000</div>
                </div>
            </div>
        </div>
    </section>

    <section id="ug-fourth-section" class="ug-fourth-section">
        <div class="ug-fourth-section-container row mx-auto">
            <div class="ug-fourth-section-first-div row">
            <div class="ug-fourth-section-first-content d-flex col-12 col-xl-6">
                <div class="m-auto">
                <div class="ug-fourth-section-first-content-title">
                    TRU makes sure to reward your contribution.
                </div>
                <div class="ug-fourth-section-first-content-description">
                    UnityGains is a more comprehensive, transparent, and member-oriented approach to the profit-sharing system. It is a TRU initiative that dedicates 35% of its profit, rewarding members for their active participation in the community throughout the year. It is simple – as the organization prospers, TRU members earn. 
                </div>

                <div class="rpp-landing-section-Btn-div">
                    <a class="Be-a-TRU-btn">Earn By Engaging Now!</a>
                </div>
                </div>
            </div>
            <div class="ug-fourth-section-second-content d-flex col-12 col-xl-6">
                <div class="mx-auto">
                <div class="ug-fourth-section-first-content-img">
                    <img
                    src="{{ asset ('assets/images/UG-images/fourth-section/fourth-section-img.png') }}"
                    alt=""
                    style="width: 100%"
                    />
                </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ug-fifth-section" class="ug-fifth-section">
        <div class="ug-fifth-section-container row mx-auto">
            <div class="ug-fifth-section-first-div row">
                <div class="ug-fifth-section-first-content-title order-1 order-xl-1">
                    UnityGains Countdown
                </div>
                <div class="row ug-fifth-section-first-content-timer-div mx-auto  order-2 order-xl-2">
                    <div class="col-3 row">
                        <div class="col-10 my-auto">
                            <div class="ug-fifth-section-first-content-number">
                                115
                            </div>
                            <div class="ug-fifth-section-first-content-description m-auto">
                                Days
                            </div>
                        </div>
                        <div class="ug-fifth-section-first-content-divider m-auto col-2">
                            :
                        </div>
                    </div>
                    <div class="col-3 row">
                        <div class="col-10 my-auto">
                            <div class="ug-fifth-section-first-content-number">
                                17
                            </div>
                            <div class="ug-fifth-section-first-content-description m-auto">
                                Hours
                            </div>
                        </div>
                        <div class="ug-fifth-section-first-content-divider m-auto col-2">
                            :
                        </div>
                    </div>
                    <div class="col-3 row">
                        <div class="col-10  my-auto">
                            <div class="ug-fifth-section-first-content-number">
                                59
                            </div>
                            <div class="ug-fifth-section-first-content-description m-auto">
                                Minutes
                            </div>
                        </div>
                        <div class="ug-fifth-section-first-content-divider m-auto col-2">
                            :
                        </div>
                    </div>
                    <div class="col-3 row">
                        <div class="col-10  my-auto">
                            <div class="ug-fifth-section-first-content-number">
                                56
                            </div>
                            <div class="ug-fifth-section-first-content-description m-auto">
                                Seconds
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="ug-fifth-section-second-content col-12 col-xl-8  order-4 order-xl-3">
                    
                    <div class="ug-fifth-section-second-content-title">
                    Time is running, your gains are waiting
                    </div>
                    <div class="ug-fifth-section-second-content-description">
                    UnityGains recognizes the active participation of TRU member
throughout the year. The sooner you become a member, the bigger
is your potential benefits from UnityGains. 
                    </div>

                </div>

                <div class="ug-fifth-section-third-content col-12 col-xl-4 order-3 order-xl-4">
                    <div class="ug-fifth-section-third-content-title">
                        Your Potential Share %
                        </div>
                    <div class="ug-fifth-section-second-content-percent">
                        93% 
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <section id="ct-sixth-section" class="ct-sixth-section">
        <div class="ct-sixth-section-title text-center mx-auto">
        You may also be asking…
        </div>
        <div class="ct-section-container row mx-auto">
        <div class="ct-section-first-div">

            <div class="accordion accordion-flush mx-auto" id="accordionFlushExample">

                <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-1"aria-expanded="false" aria-controls="flush-1">
                        <img src="{{ asset ('assets/images/RPP-images/sixth-section/Vector.png') }}" alt=""/>
                        <div class="faq-send">
                            <div class="faq-name">
                                <span>Zara Al-Farsi</span>, United States
                            </div>
                            <div class="faq-comment">
                                Just wondering, is TRU giving away money? What’s the
                                reason for RPP?
                            </div>
                        </div>
                    </button>
                    <div id="flush-1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="faq-response faq-response-lg" style="">
                                <div class="faq-response-name"> 
                                    <span>Traders United</span>
                                </div>
                                <div class="faq-respponse-comment">
                                    No, you only have to pay for the membership fee. All TRU members can access our services and programs, including the CommuniTrade, without additional financial commitments.
                                </div>
                            </div>
                            <img class="faq-response-img" src="{{ asset ('assets/images/RPP-images/sixth-section/logo.png') }}" alt="" style="height: 60px; width: 60px"/>

                            <div class="faq-response faq-response-sm">
                                <div class="faq-response-name"> 
                                    <span>Traders United</span>
                                </div>
                                <div class="faq-respponse-comment">
                                    No, you only have to pay for the membership fee. All TRU members can access our services and programs, including the CommuniTrade, without additional financial commitments.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ct-sixth-section-show-more text-center mx-auto">
            Show more
        </div>
        </div>
    </section>




        <section id="ug-seventh-section" class="ug-seventh-section">
        <div class="ug-seventh-section-container row mx-auto">
            <div class="ug-seventh-section-first-div row">
            <div
                class="ug-seventh-section-first-content col-12 col-xl-6"
            >

                <div class="ug-seventh-section-first-content-title">
                    More than being valued, be rewarded.
                </div>
                <div class="ug-section-Btn-div">
                    <a class="Be-a-TRU-btn">Be a TRU member</a>
                </div>
                
                </div>

            <div
                class="ug-seventh-section-second-content col-12 col-xl-6"
            >

                <div class="ug-seventh-section-first-content-img mx-auto">
                    <img
                    src="{{ asset ('assets/images/UG-images/seventh-section/seventh-section-img.png') }}"
                    alt=""
                    style="width: 100%"
                    />
                </div>

            </div>
            </div>
        </div>
    </section> 

</div>

@endsection