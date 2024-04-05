@extends('header.subpage')



@section('content')

    <meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Main Content -->
    <link rel="stylesheet" href="{{ asset ('assets/css/RPP/index.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/about/landing-section.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/about/second-section.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/about/third-section.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/about/fourth-section.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/about/fifth-section.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/about/sixth-section.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/about/seven-section.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/about/nineth-section.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/CT/sixth-section.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/about/eleventh-section.css') }}">
    
    <link rel="stylesheet" href="{{ asset ('assets/css/about/eight-section.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@20.0.5/build/css/intlTelInput.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<div class="main">
    <section id="about-landing-section" class="about-landing-section" data-aos="fade-down" data-aos-duration="2000">
        <div class="about-landing-section-container row mx-auto">
        <div class="about-landing-section-first-div row">
            <div class="about-landing-section-first-content d-flex col-12 col-xl-6" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="1000">
                <div class="m-auto">
                    <div class="about-landing-section-first-content-title">
                        Traders United
                    </div>
                    <div class="about-landing-section-first-content-description">
                        For Traders, By Traders.
                    </div>
                    <div class="about-landing-section-Btn-div">
                        <a class="Be-a-TRU-btn">Be a TRU member</a>
                    </div>
                </div>
            </div>
            <div class="about-landing-section-second-content d-flex col-12 col-xl-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="2000">
                <div class="mx-auto mt-auto">
                    <div class="about-landing-section-first-content-img">
                        <img src="{{ asset ('assets/images/about-images/landing-img.png') }}" alt="" style="width: 100%"/>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section id="about-second-section" class="about-second-section">
        <div class="about-second-section-container row mx-auto">
            <div class="about-second-section-first-div row" data-aos="zoom-in-up" data-aos-duration="2000">
                <div class="about-second-section-second-content d-flex col-12 col-xl-6" data-aos="fade-right" data-aos-duration="3000">
                    <div class="mx-auto">
                        <div class="about-second-section-first-content-img">
                            <img src="{{ asset ('assets/images/about-images/second-section/you-are-tru.png') }}" alt="" style="width: 100%"/>
                        </div>
                    </div>
                </div>
                <div class="about-second-section-first-content d-flex col-12 col-xl-6" data-aos="fade-left" data-aos-duration="3000">
                    <div class="m-auto">
                        <div class="about-second-section-first-content-title">
                            Be part of the TRU movement
                        </div>
                        <div class="about-second-section-first-content-description">
                        Traders United is a community-led organization that paves a better trading environment for all traders everywhere. <br><br> Fortify trading experience with TRU's unbiased resources and enjoy success in the high-stakes world of the Financial Market. Access reliable knowledge and information, hear from your peers through ratings, and foster shared growth and success with the whole community.
                        </div>
                        <div class="rpp-landing-section-Btn-div">
                            <a class="Be-a-TRU-btn">Earn By Engaging Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="about-third-section" class="about-third-section">
        <div class="about-section-container row mx-auto">
            <div class="col-12 col-lg-6 about-section-card" data-aos="fade-up" data-aos-duration="1000">
                <div class="about-section-card-1">
                    <div class="about-section-card-content">
                        <img src="{{ asset ('assets/images/about-images/third-section/card-1-img.png') }}" alt="">
                    </div>
                    <div class="about-section-card-title">
                        Our <span>Vision</span>
                    </div>
                    <div class="about-section-card-description">
                        TRU shall become the leading community in the financial industry, aiming to safeguard the interests of every online trader. We strive to transform the traditional online trading landscape into a secure and enriched environment by advocating a safer online space and providing invaluable resources through community-led discussions, quality educational content, and objective reviews. Our commitment to transparency, innovation, and accountability will create a better and more inclusive experience for online traders.   
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 about-section-card" data-aos="fade-up" data-aos-duration="1000">
                <div class="about-section-card-2">
                    <div class="about-section-card-content">
                    <img src="{{ asset ('assets/images/about-images/third-section/card-2-img.png') }}" alt="">
                    </div>
                    <div class="about-section-card-title">
                        Our <span class="mission-title-span">Mission</span>
                    </div>
                    <div class="about-section-card-description">
                        TRU takes a proactive approach to reestablishing online traders’ trust in the financial market by providing a healthy and reliable community, comprehensive reviews, and dispute resolution program. We are committed to delivering excellence, accountability, and integrity in all our endeavors. Our focus on establishing a community-led organization enhances the traditional financial landscape, resulting in a safer, more informed online trading experience. 
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about-fourth-section" class="about-fourth-section">
        <div class="about-fourth-section-container row mx-auto">
            <div class="about-fourth-section-first-content-title" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="2000">
                TRU Holistic <br>Approach
            </div>
            <div class="about-fourth-section-first-div row">
                <!-- Swiper -->
                <div class="swiper swiper-container">
                    <div class="swiper-wrapper">
                        <!-- No.1 Card -->
                        <div class="swiper-slide">
                            <div class="swiper-slide-no">
                                01
                            </div>
                            <div class="swiper-slide-title">
                                Member-Centric Growth
                            </div>
                            <div class="swiper-slide-description">
                                Our members are invaluable assets and integral to the organization's success. By providing, improving, and expanding services and benefits, our organization ensures the members grow together with TRU.  
                            </div>
                        </div>
                        <!-- No.2 Card -->
                        <div class="swiper-slide">
                            <div class="swiper-slide-no ms-auto">
                                02
                            </div>
                            <div class="swiper-slide-title">
                                Organization's Credibility
                            </div>
                            <div class="swiper-slide-description">
                                We facilitate and encourage a smooth flow of valuable and unbiased information, empowering members to make informed and sound financial decisions. With the introduction of TRU's quality education program, CommuniTrade, and Rating Board, we establish our credibility as a reliable source of trading knowledge. 
                            </div>
                        </div>
                        <!-- No.3 Card -->
                        <div class="swiper-slide">
                            <div class="swiper-slide-no ms-auto">
                                03
                            </div>
                            <div class="swiper-slide-title">
                                Community Engagement
                            </div>
                            <div class="swiper-slide-description">
                                We acknowledge the power of first-hand experiences and unique perspectives in fostering the growth of online traders. At TRU, we cultivate a dynamic and interactive community where traders can initiate discussions, learn, and collaborate on various aspects of online trading.  
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-slide-no ms-auto">
                                04
                            </div>
                            <div class="swiper-slide-title">
                                Protection and Advocacy 
                            </div>
                            <div class="swiper-slide-description">
                                Our organization actively safeguards traders from any possible trading risks by advocating trading education. Moreover, TRU implements a robust support framework to help traders settle disputes and allot funds to protect members from potential losses due to unethical practices of some brokers.
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-slide-no ms-auto">
                                05
                            </div>
                            <div class="swiper-slide-title">
                                Educational Outreach
                            </div>
                            <div class="swiper-slide-description">
                                TRU actively empowers all its members and the whole online trading community to make informed and sound financial decisions. We organize events, webinars, and seminars to promote an interactive and productive learning environment. Moreover, the organization is filled with learning resources to educate the community about best trading practices, platform selection, and risk management.
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-slide-no ms-auto">
                                06
                            </div>
                            <div class="swiper-slide-title">
                                Innovation and Adaptability 
                            </div>
                            <div class="swiper-slide-description">
                                The members and whole online trading community is the core of TRU. Thus, their satisfaction is among our top priorities. TRU continuously enhances the organization, its services, and member benefits based on feedback, financial market trends, and technological advancements to ensure members can always access the best tools and information. 
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-slide-no ms-auto">
                                07
                            </div>
                            <div class="swiper-slide-title">
                                Transparency and Accountability
                            </div>
                            <div class="swiper-slide-description">
                                Restoring the customer's trust in the Financial Market is the core mission of TRU. To establish credibility, we establish an accessible framework wherein all organizational actions, decisions, and recommendations are comprehensively presented to the members. This practice ensures TRU remains faithful to its core values, maintains integrity in the organization's operations, and upholds accountability and responsible leadership.
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="about-fifth-section" class="about-fifth-section">
        <div class="about-fifth-section-title text-center mx-auto" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="2000">
            Traders United. <br><span>Leaving a positive mark for tomorrow.</span>
        </div>
        <div class="about-section-container row mx-auto">
            <div class="col-12 col-lg-4 about-section-card-fifth" data-aos="fade-right" data-aos-duration="1000">
                <div class="about-section-card-fifth-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="ModalContent1()">
                    <div class="about-section-card-fifth-title">
                        Environmental
                    </div>
                    <div class="about-section-card-fifth-description">
                        We consider our planet an invaluable stakeholder. Thus, TRU ensures to uphold and advocate green corporate practices aimed at keeping an ecofriendly work environment and encouraging its members to embrace environmentally sustainable lifestyles.
                    </div>
                    <div class="about-section-card-fifth-content mx-auto mt-auto mb-3">
                        <img src="{{ asset ('assets/images/about-images/fifth-section/card-1-img.png') }}" alt="" >
                    </div>
                    <img src="{{ asset ('assets/images/CT-images/fifth-section/view-btn.png') }}" alt="" class="ms-auto">
                </div>
            </div>

            <div class="col-12 col-lg-4 about-section-card-fifth" data-aos="fade-left" data-aos-duration="1000">
                <div class="about-section-card-fifth-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="ModalContent2()">
                    <div class="about-section-card-fifth-title">
                        Social
                    </div>
                    <div class="about-section-card-fifth-description">
                        TRU provides equitable access to opportunities and knowledge for the society. By championing fair practices, diversity, inclusion, and community engagement, the organization empowers its valued stakeholders.
                    </div>
                    <div class="about-section-card-fifth-content mx-auto mt-auto mb-3">
                        <img src="{{ asset ('assets/images/about-images/fifth-section/card-2-img.png') }}" alt="" >
                    </div>
                    <img src="{{ asset ('assets/images/CT-images/fifth-section/view-btn.png') }}" alt="" class="ms-auto">
                </div>
            </div>
            <div class="col-12 col-lg-4 about-section-card-fifth" data-aos="fade-right" data-aos-duration="1000">
                <div class="about-section-card-fifth-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="ModalContent3()">
                    <div class="about-section-card-fifth-title">
                        Governance
                    </div>
                    <div class="about-section-card-fifth-description">
                        Upholding the highest standards of transparency, ethics, and accountability to build trust and drive sustainable growth within the organization.
                    </div>
                    <div class="about-section-card-fifth-content mx-auto mt-auto mb-3">
                        <img src="{{ asset ('assets/images/about-images/fifth-section/card-3-img.png') }}" alt="" >
                    </div>
                    <img src="{{ asset ('assets/images/CT-images/fifth-section/view-btn.png') }}" alt="" class="ms-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered card-modal">
            <div class="modal-content">
                <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">

                    <div class="d-flex">
                        <div class="content-title-no">1</div>
                        <div class="about-section-card-fifth-title modal-title-1"></div>
                    </div>
                    
                    
                    <div class="about-section-card-fifth-description modal-description-1"></div>

                    <div class="d-flex">
                        <div class="content-title-no">2</div>
                        <div class="about-section-card-fifth-title modal-title-2"></div>
                    </div>
                    <div class="about-section-card-fifth-description modal-description-2"></div>

                    <div class="d-flex">
                        <div class="content-title-no">3</div>
                        <div class="about-section-card-fifth-title modal-title-3"></div>
                    </div>
                    <div class="about-section-card-fifth-description modal-description-3"></div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .content-title-no {
            /* color:  #36607A; */
            /* font-family: Bahnschrift; */
            font-size: 24px;
            font-style: normal;
            font-weight: 700;
            line-height: 32px;
            width: 32px;
            min-width: 32px;
            max-height: 32px;
            text-align: center;
            border-radius: 50%;
        }
    </style>

    <section id="about-sixth-section" class="about-sixth-section">
        <div class="about-sixth-section-container row mx-auto">
            <div class="about-sixth-section-first-div row" data-aos="zoom-in-up" data-aos-duration="2000">
                <div class="about-sixth-section-first-content d-flex col-12 col-xl-6" data-aos="fade-left" data-aos-duration="3000">
                    <div class="m-auto">
                        <div class="about-sixth-section-first-content-img">
                            <img src="{{ asset ('assets/images/about-images/sixth-section/quote.png') }}" alt=""/>
                        </div>
                        <div class="about-sixth-section-first-content-title">
                            Until now, traders have always been left one on one with brokers. <br><br> But now, for the <i>first time in the history of this market, we traders are no longer alone.</i>
                        </div>
                    </div>
                </div>
                <div class="about-sixth-section-second-content d-flex col-12 col-xl-6" data-aos="fade-right" data-aos-duration="3000">
                    <div class="mx-auto">
                        <div class="about-sixth-section-first-content-img">
                            <img src="{{ asset ('assets/images/about-images/sixth-section/sixth-section-img.png') }}" alt="" style="width: 100%"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about-seven-section" class="about-seven-section">
        <div class="about-seven-section-title text-center mx-auto" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="2000">
            <span>Market Insights</span> that matter
        </div>
        <div class="about-section-container row mx-auto">
            <div class="col-12 col-lg-4 about-section-cards-seven" data-aos="fade-right" data-aos-duration="1000">
                <div class="about-section-card-seven">
                    <div class="about-section-card-seven-content">
                        <img src="{{ asset ('assets/images/about-images/seven-section/seven-img-1.png') }}" alt="" width="100%">
                    </div>
                    <div class="about-section-card-seven-date d-flex gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.89474 9C1.89474 5.07587 5.07587 1.89474 9 1.89474C12.9241 1.89474 16.1053 5.07587 16.1053 9C16.1053 12.9241 12.9241 16.1053 9 16.1053C5.07587 16.1053 1.89474 12.9241 1.89474 9ZM9 0C4.02944 0 0 4.02944 0 9C0 13.9706 4.02944 18 9 18C13.9706 18 18 13.9706 18 9C18 4.02944 13.9706 0 9 0ZM9.47368 6.63157C9.47368 6.10836 9.04953 5.6842 8.52632 5.6842C8.0031 5.6842 7.57895 6.10836 7.57895 6.63157V9.71052C7.57895 10.0246 7.70371 10.3258 7.92579 10.5479C8.14788 10.77 8.44909 10.8947 8.76316 10.8947H12.7895C13.3127 10.8947 13.7368 10.4706 13.7368 9.94736C13.7368 9.42414 13.3127 8.99999 12.7895 8.99999H9.47368V6.63157Z" fill="#414141"/>
                        </svg>
                        <div class="about-section-card-seven-date-text">
                            2024/01/29. 11:13PM 
                        </div>
                    </div>
                    <div class="about-section-card-seven-title">
                        Stop-Loss and Take Profit in FX: The Definition and How to Use 
                    </div>
                    <div class="about-section-card-seven-description">
                        At TRU, positive changes comes from within. By promoting a communal and sustainable eco-frienfly activities, TRU foster shared knowledge and appreciation of the environment.
                    </div>
                    <a href="" class="about-section-card-seven-btn">Show more</a>
                </div>
            </div>

            <div class="col-12 col-lg-4 about-section-cards-seven" data-aos="fade-left" data-aos-duration="1000">
                <div class="about-section-card-seven">
                <div class="about-section-card-seven-content">
                    <img src="{{ asset ('assets/images/about-images/seven-section/seven-img-2.png') }}" alt="" width="100%">
                    </div>
                    <div class="about-section-card-seven-date d-flex gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.89474 9C1.89474 5.07587 5.07587 1.89474 9 1.89474C12.9241 1.89474 16.1053 5.07587 16.1053 9C16.1053 12.9241 12.9241 16.1053 9 16.1053C5.07587 16.1053 1.89474 12.9241 1.89474 9ZM9 0C4.02944 0 0 4.02944 0 9C0 13.9706 4.02944 18 9 18C13.9706 18 18 13.9706 18 9C18 4.02944 13.9706 0 9 0ZM9.47368 6.63157C9.47368 6.10836 9.04953 5.6842 8.52632 5.6842C8.0031 5.6842 7.57895 6.10836 7.57895 6.63157V9.71052C7.57895 10.0246 7.70371 10.3258 7.92579 10.5479C8.14788 10.77 8.44909 10.8947 8.76316 10.8947H12.7895C13.3127 10.8947 13.7368 10.4706 13.7368 9.94736C13.7368 9.42414 13.3127 8.99999 12.7895 8.99999H9.47368V6.63157Z" fill="#414141"/>
                        </svg>
                        <div class="about-section-card-seven-date-text">
                            2024/01/30. 11:13PM 
                        </div>
                    </div>
                    <div class="about-section-card-seven-title">
                        What is Forex Trading: A Comprehensive Guide
                    </div>
                    <div class="about-section-card-seven-description">
                        CommuniTrade is more than just a place for learning, it gives you opportunities to share your knowledge, insights, and expertise to foster shared growth among the community.
                    </div>

                    <a href="" class="about-section-card-seven-btn">Show more</a>
                </div>
            </div>
            <div class="col-12 col-lg-4 about-section-cards-seven" data-aos="fade-right" data-aos-duration="1000">
                <div class="about-section-card-seven">
                <div class="about-section-card-seven-content">
                    <img src="{{ asset ('assets/images/about-images/seven-section/seven-img-3.png') }}" alt="" width="100%">
                    </div>
                    <div class="about-section-card-seven-date d-flex gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.89474 9C1.89474 5.07587 5.07587 1.89474 9 1.89474C12.9241 1.89474 16.1053 5.07587 16.1053 9C16.1053 12.9241 12.9241 16.1053 9 16.1053C5.07587 16.1053 1.89474 12.9241 1.89474 9ZM9 0C4.02944 0 0 4.02944 0 9C0 13.9706 4.02944 18 9 18C13.9706 18 18 13.9706 18 9C18 4.02944 13.9706 0 9 0ZM9.47368 6.63157C9.47368 6.10836 9.04953 5.6842 8.52632 5.6842C8.0031 5.6842 7.57895 6.10836 7.57895 6.63157V9.71052C7.57895 10.0246 7.70371 10.3258 7.92579 10.5479C8.14788 10.77 8.44909 10.8947 8.76316 10.8947H12.7895C13.3127 10.8947 13.7368 10.4706 13.7368 9.94736C13.7368 9.42414 13.3127 8.99999 12.7895 8.99999H9.47368V6.63157Z" fill="#414141"/>
                        </svg>
                        <div class="about-section-card-seven-date-text">
                            2024/01/31. 11:13PM 
                        </div>
                    </div>
                    <div class="about-section-card-seven-title">
                        Portfolio Diversification: Strategies and Why You Need It
                    </div>
                    <div class="about-section-card-seven-description">
                    CommuniTrade is more than just a place for learning, it gives you opportunities to share your knowledge, insights, and expertise to foster shared growth among the community.
                    </div>

                    <a href="" class="about-section-card-seven-btn">Show more</a>
                </div>
            </div>
        </div>
    </section>  

    <section id="about-eight-section" class="about-eight-section">
        <div class="about-eight-section-container row mx-auto" data-aos="zoom-in-up" data-aos-duration="2000">
            <div class="about-eight-section-first-div row">
                <div class="about-eight-section-second-content col-12 col-xl-6">
                    <div class="about-eight-section-first-content-img mx-auto">
                        <img src="{{ asset ('assets/images/about-images/eight-section/eight-section-img.png') }}" alt="" style="width: 100%"/>
                    </div>
                </div>
                <div class="about-eight-section-first-content col-12 col-xl-6 d-flex">
                    <div class="my-auto">
                        <div class="about-eight-section-first-content-title">
                        Want to download the Media Kit?
                        </div>
                        <div class="about-section-Btn-div">
                            <a class="Be-a-TRU-btn" onclick="submit()">Be a TRU member</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section> 

    <!-- <section id="about-nineth-section" class="about-nineth-section">
        <div class="about-nineth-section-container row mx-auto" data-aos="zoom-in-up" data-aos-duration="2000">
            <div class="about-nineth-section-first-div row">
                <div class="about-nineth-section-first-content col-12 d-flex">
                    <div class="my-auto w-100">
                        <div class="about-nineth-section-first-content-title text-center">Contact us</div>
                        <form id="contactForm" class="row mx-auto">
                            <div class="col-6 mb-3">
                                <label for="First_name" class="form-label">First name</label>
                                <input type="text" class="form-control contact-us" id="First_name" placeholder="First Name">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="Last_name" class="form-label">Last name</label>
                                <input type="text" class="form-control contact-us" id="Last_name" placeholder="Last Name">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="Email_address" class="form-label">Email</label>
                                <input type="email" class="form-control contact-us" id="Email_address" aria-describedby="emailHelp" placeholder="john_doe@mail.com">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="tel" class="form-control contact-us" id="phone">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="message" class="form-label">Your message</label>
                                <textarea class="form-control contact-us" placeholder="Leave a Message here" id="message"></textarea>
                            </div>
                        
                            <div class="about-section-Btn-div col-12 d-flex">
                                <a class="Be-a-TRU-btn mx-auto" onclick="submitForm()">Send it now</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section id="about-eleventh-section" class="about-eleventh-section">
        <div class="about-eleventh-section-container row mx-auto" data-aos="zoom-in-up" data-aos-duration="2000">
            <div class="about-eleventh-section-first-div row">
                <div class="about-eleventh-section-first-content col-12 col-xl-6">
                    <div class="about-eleventh-section-first-content-title">
                        Engage. Collaborate. Succeed.
                    </div>
                    <div class="about-section-Btn-div">
                        <a class="Be-a-TRU-btn">Be a TRU member</a>
                    </div>
                </div>
                <div class="about-eleventh-section-second-content col-12 col-xl-6">
                    <div class="about-eleventh-section-first-content-img mx-auto">
                        <img src="{{ asset ('assets/images/about-images/eleventh-section/eleventh-section-img.png') }}" alt="" style="width: 100%"/>
                    </div>
                </div>
            </div>
        </div>
    </section> 
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  AOS.init();

  var swiper = new Swiper(".swiper-container", {
        slidesPerView: 3,
        spaceBetween: 24,
        loop: true,
        grabCursor: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        on: {
            click(event) {
                console.log('event.target',this.clickedIndex);
                mySwiper.slideTo(this.clickedIndex);	
            },
        },
    });

    function ModalContent1() {
        // Selecting elements within the modal body
        var title1 = document.querySelector('.modal-title-1');
        var description1 = document.querySelector('.modal-description-1');
        var title2 = document.querySelector('.modal-title-2');
        var description2 = document.querySelector('.modal-description-2');
        var title3 = document.querySelector('.modal-title-3');
        var description3 = document.querySelector('.modal-description-3');

        // Updating innerHTML with the new content
        title1.innerHTML = 'Paperless Work Systems';
        description1.innerHTML = 'TRU is together with the environmental giants in battling deforestation and pollution. We implement a paperless work environment with the workplace to lessen, if not eliminate, paper usage in the operations. The organization develops and utilizes state-of-the-art technologies to minimize unnecessary paper waste. TRU promotes the utilization of digital documents, online data storage, and streamline workflows through digital software to support and sustain this innitiative.';
        title2.innerHTML = 'Promoting Energy and Water Conservation';
        description2.innerHTML = 'Among TRU\'s main environmental initiatives is promoting the best practices to combat the issue of climate change. The organization values essential knowledge regarding energy and water conversation, thus, actively raising awareness about the issue to the general public. TRU dedicated its resources to develop energy-efficient technologies and promotes water-saving practices to all its stakeholders. We ensure a plethora of quality and informed educational content to encourage energy and water conversation to partake in the movement.';
        title3.innerHTML = 'Initiation of Go-Green Activities';
        description3.innerHTML = 'TRU believes that collective efforts can bring about positive changes. The organization actively encourages all the stakeholders to participates in its Go-Green initiatives, such as tree planting, recycling, and engaging in environmental seminars. These communal activities fosters a shared understanding of and appreciation for the environment. As an integral part of our commitment to sustainability, TRU organizes and facilitates eco-friendly programs to educate its members on these essential conservation practices.';
    
        // Applying additional styles to modal content
        var modalContent = document.querySelector('.modal-content');
        modalContent.style.fill = 'var(--light-blue, #9AD9FF)';
        modalContent.style.filter = 'drop-shadow(0px 12px 24px rgba(154, 217, 255, 0.48))';
        modalContent.style.backgroundColor = '#9AD9FF';

        // var contentTitleNo = document.querySelectorAll('.content-title-no');
        // contentTitleNo.style.backgroundColor = '#58ADE0';

        var contentTitleNo = document.querySelectorAll('.content-title-no');
        contentTitleNo.forEach(function(title) {
            title.style.backgroundColor = '#58ADE0';
            title.style.color = '#36607A';
        });
    }

    function ModalContent2() {
        // Selecting elements within the modal body
        var title1 = document.querySelector('.modal-title-1');
        var description1 = document.querySelector('.modal-description-1');
        var title2 = document.querySelector('.modal-title-2');
        var description2 = document.querySelector('.modal-description-2');
        var title3 = document.querySelector('.modal-title-3');
        var description3 = document.querySelector('.modal-description-3');

        // Updating innerHTML with the new content
        title1.innerHTML = 'Promote workplace diversity, equity, and inclusion by hiring, training, and retaining employees from different backgrounds, cultures, and perspectives.';
        description1.innerHTML = 'The organization continuously allot resources to create rich, constructive working scenes that actively contribute to executive decisions and production. The Boards of Directors are hands-on in hiring, training, and retaining employees despite varying backgrounds. We value every mind and perspective in creating and enriching TRU to ensure a worthy and satisfying experiences for the customers.';
        title2.innerHTML = 'Support social causes through programs aimed to help communities, and donating, volunteering, and partnering with non-profit organizations, charities, and local groups.';
        description2.innerHTML = 'TRU positions itself together with the society and whole community of traders. Our company brings back the opportunities, support, and trust given to the organization by society and the community. With that, TRU will initiate programs and campaigns to reach communities that need education, support, and recovery from social issues. ';
        title3.innerHTML = 'Enhance customer satisfaction and loyalty by offering quality products and services, engaging in ethical marketing, and addressing customer feedback and complaints.';
        description3.innerHTML = 'At TRU, our utmost priority is to provide the best services and benefits to all its members. Our promise is manifested by continuously enriching the quality of our products, services, and content. Through the stakeholders\' continuous feedback, TRU aims to be on a constant growth and meet our primary goal of being a community-centric organization. ';
    
        // Applying additional styles to modal content
        var modalContent = document.querySelector('.modal-content');
        modalContent.style.fill = 'var(--light-gold, #FFCA5D)';
        modalContent.style.filter = 'drop-shadow(0px 12px 24px rgba(255, 202, 93, 0.48))';
        modalContent.style.backgroundColor = '#FFCA5D';

        // var contentTitleNo = document.querySelectorAll('.content-title-no');
        // contentTitleNo.style.backgroundColor = '#E7AA2D';
        var contentTitleNo = document.querySelectorAll('.content-title-no');
        contentTitleNo.forEach(function(title) {
            title.style.backgroundColor = '#E7AA2D';
            title.style.color = '#7D5E20';
            
        });
    }

    function ModalContent3() {
        // Selecting elements within the modal body
        var title1 = document.querySelector('.modal-title-1');
        var description1 = document.querySelector('.modal-description-1');
        var title2 = document.querySelector('.modal-title-2');
        var description2 = document.querySelector('.modal-description-2');
        var title3 = document.querySelector('.modal-title-3');
        var description3 = document.querySelector('.modal-description-3');

        // Updating innerHTML with the new content
        title1.innerHTML = 'Adopt a robust corporate governance structure that ensures accountability, oversight, and compliance of the board of directors, management, and employees.';
        description1.innerHTML = 'TRU takes pride on every systematic approaches implemented on all of its operations, decisions, and changes. Organization has developed and documented a comprehensive framework, rules, practices, and processes that ensure smooth product, service, and content decision-making.';
        title2.innerHTML = 'Engage in constructive dialogue and collaboration with shareholders, regulators, and other stakeholders on ESG issues and opportunities.';
        description2.innerHTML = 'At TRU, we place immense value on the voices of every individual that makes TRU what it is now. We provide a platform for everyone to contribute towards our organization\'s ESG success. The ideas manifested and created in a collective space will lead to a more dependable and trustworthy approach to initiating programs and activities for ESG issues.';
        title3.innerHTML = 'Disclose ESG performance and progress through regular and reliable reporting, auditing, and verification.';
        description3.innerHTML = 'TRU upholds its core value; transparency and accountability. The organization aims to build trust-oriented relationships with the members and the whole online trading community. To achieve this level of trust, TRU is committed to providing timely updates, reports, and audits that authenticates all the activities and resources used in the organization ESG initiatives.';
    
        // Applying additional styles to modal content
        var modalContent = document.querySelector('.modal-content');
        modalContent.style.fill = 'var(--light-green, #8ECB86)';
        modalContent.style.filter = 'drop-shadow(0px 12px 24px rgba(142, 203, 134, 0.48))';
        modalContent.style.backgroundColor = '#8ECB86';

        // var contentTitleNo = document.querySelectorAll('.content-title-no');
        // contentTitleNo.style.backgroundColor = '#6CB063';

        var contentTitleNo = document.querySelectorAll('.content-title-no');
        contentTitleNo.forEach(function(title) {
            title.style.backgroundColor = '#6CB063';
            title.style.color = '#40623B';

        });
    }

</script>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@20.0.5/build/js/intlTelInput.min.js"></script>

<script>
  const phoneInput = document.querySelector("#phone");
  window.intlTelInput(phoneInput, {
    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@20.0.5/build/js/utils.js",
    initialCountry: "UA", // Set the initial country to Philippines
    formatAsYouType: true
  });

  phoneInput.addEventListener("input", function(event) {
    // Remove any non-numeric characters
    phoneInput.value = phoneInput.value.replace(/\D/g, "");
  });
</script>


<script>
    function submitForm() {
        var firstName = document.getElementById('First_name').value;
        var lastName = document.getElementById('Last_name').value;
        var email = document.getElementById('Email_address').value;
        var phone = document.getElementById('phone').value;
        var message = document.getElementById('message').value;


        fetch('/submit-form', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    first_name: firstName,
                    last_name: lastName,
                    email: email,
                    phone: phone,
                    message: message
                })
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                // console.log(data);

                if (data == 0) {
                    // Hide line-1 and email-div
                    document.querySelector('.line-1').style.display = 'none';
                    document.querySelector('.email-div').style.display = 'none';
                    
                    // Show all elements with class line-2
                    var line2Elements = document.querySelectorAll('.line-2');
                    line2Elements.forEach(element => {
                        element.style.display = 'block';
                    });
                } else {
                    // Re-enable the button if data is not 0
                    notifyButton.disabled = false;
                }
            })
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
                alert('Failed to send this Request, Kindly try it again later.');
                // Re-enable the button if an error occurs
                notifyButton.disabled = false;
            });
    }
</script>

@endsection