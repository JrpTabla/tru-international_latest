<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset ('assets/css/bootstrap.css')); ?>">

    <link rel="shortcut icon" href="<?php echo e(asset ('assets/images/favicon.ico')); ?>" type="image/x-icon"/>

    
    <link rel="stylesheet" href="<?php echo e(asset ('assets/css/Homepage/navbar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset ('assets/css/Homepage/footer.css')); ?>">


    

</head>
<body>
    
    <nav class="navbar navbar-expand-lg fixed-top">
        <!-- Navigation Bar LOGO -->
        <a class="navbar-brand" href="/">
            <svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 0 191 40" fill="none">
                <path d="M33.9415 0H6.0585C2.71248 0 0 2.71248 0 6.0585V33.9415C0 37.2875 2.71248 40 6.0585 40H33.9415C37.2875 40 40 37.2875 40 33.9415V6.0585C40 2.71248 37.2875 0 33.9415 0Z" fill="#414141"/>
                <path d="M4.34863 14.5328H11.3052V17.3707H4.34863V14.5328ZM6.74284 27.7469C6.16343 27.1182 5.87372 26.1883 5.87372 24.9572V10.4346H9.28073V24.5098C9.28073 24.8544 9.35218 25.119 9.49507 25.3036C9.56643 25.3968 9.66115 25.4714 9.77059 25.5208C9.88002 25.5701 10.0007 25.5926 10.1216 25.5862H11.3052V28.6954H9.48094C8.23496 28.6925 7.32226 28.3763 6.74284 27.7469Z" fill="#E6E7E7"/>
                <path d="M13.0444 14.9732H16.3344V28.6958H13.0444V14.9732ZM19.9015 17.985C19.559 17.8602 19.1963 17.7999 18.8318 17.807C18.0393 17.807 17.4248 18.0429 16.9882 18.5146C16.5516 18.9864 16.3333 19.6416 16.3333 20.4803L16.056 17.3746C16.4022 16.6157 16.9365 15.9578 17.6082 15.4635C18.2208 15.0186 18.959 14.7803 19.716 14.7831C20.2696 14.7756 20.82 14.8673 21.3413 15.054C21.8155 15.2283 22.2477 15.5006 22.6097 15.8533L20.6809 18.5114C20.4655 18.2778 20.1986 18.0976 19.9015 17.985Z" fill="#E6E7E7"/>
                <path d="M26.6677 23.1205C26.6677 23.9318 26.885 24.5594 27.3197 25.0033C27.7544 25.4472 28.3668 25.6695 29.157 25.6702C29.9465 25.6702 30.5542 25.461 30.9801 25.0426C31.4059 24.6242 31.6178 24.0232 31.6156 23.2395L31.8025 26.1723C31.5379 26.8839 31.0763 27.507 30.471 27.9699C29.8494 28.4545 29.0907 28.6965 28.1949 28.6958C26.6952 28.6958 25.5348 28.2159 24.7138 27.2561C23.8928 26.2963 23.4812 24.94 23.479 23.1871V14.7827H26.6677V23.1205ZM31.6156 14.7827H34.7834V28.4982H31.6156V14.7827Z" fill="#1681C2"/>
                <path d="M20.4352 28.6956C21.1556 28.6956 21.7396 28.1116 21.7396 27.3913C21.7396 26.6709 21.1556 26.0869 20.4352 26.0869C19.7148 26.0869 19.1309 26.6709 19.1309 27.3913C19.1309 28.1116 19.7148 28.6956 20.4352 28.6956Z" fill="#E7AA2D"/>
                <path d="M115.553 18.865C115.124 17.601 114.063 17.0819 112.529 17.0819C110.745 17.0819 109.752 17.917 109.752 19.023C109.752 20.0388 110.384 20.5805 111.896 20.9416L113.77 21.3705C115.959 21.8896 117.291 22.3636 117.291 24.4628C117.291 26.878 115.057 27.826 112.641 27.826C110.091 27.826 108.127 26.7425 107.811 24.2822H109.323C109.684 25.9977 111.061 26.562 112.641 26.562C114.289 26.562 115.689 25.9074 115.689 24.4628C115.689 23.1988 114.853 22.8828 113.499 22.5668L111.4 22.0702C109.323 21.5736 108.24 20.6256 108.24 19.0005C108.24 17.0142 109.955 15.8179 112.529 15.8179C114.876 15.8179 116.546 16.8562 117.02 18.865H115.553Z" fill="#1681C2"/>
                <path d="M106.022 15.8179C106.27 15.8179 106.518 15.8179 106.812 15.863V17.3076C106.518 17.285 106.293 17.285 106.135 17.285C103.719 17.285 102.32 18.5942 101.914 20.7159V27.668H100.311V15.9307H101.914V18.8876C102.252 17.285 103.674 15.8179 106.022 15.8179Z" fill="#1681C2"/>
                <path d="M98.2532 21.8445C98.2532 22.0251 98.2532 22.2056 98.2306 22.4088H89.2245C89.4051 25.3205 90.9626 26.562 93.1971 26.562C94.6643 26.562 95.5897 26.2008 96.3346 25.1399H97.8469C96.8763 27.036 95.3866 27.826 93.1069 27.826C90.1726 27.826 87.6445 25.8848 87.6445 21.8219C87.6445 17.7139 90.2854 15.8179 93.0617 15.8179C95.8832 15.8179 98.2532 17.7139 98.2532 21.8445ZM89.2245 21.2802H96.7183C96.6732 18.5039 95.1835 17.0819 93.0617 17.0819C91.0303 17.0819 89.4051 18.4136 89.2245 21.2802Z" fill="#1681C2"/>
                <path d="M79.92 15.8181C81.7031 15.8181 83.2154 16.6984 83.9829 18.2107V11.7327H85.5855V27.6682H83.9829V25.2079C83.3057 26.7202 81.9063 27.8262 79.9651 27.8262C77.3694 27.8262 74.7285 25.9754 74.7285 21.7996C74.7285 17.669 77.392 15.8181 79.92 15.8181ZM80.1908 26.4719C82.1997 26.4719 84.0506 24.9596 84.0506 21.7996C84.0506 18.5493 82.1997 17.1724 80.1908 17.1724C78.1368 17.1724 76.286 18.5944 76.286 21.7996C76.286 25.0273 78.1368 26.4719 80.1908 26.4719Z" fill="#1681C2"/>
                <path d="M72.6659 25.7945C72.6659 26.404 72.8917 26.6522 73.5462 26.6297V27.6454C73.3205 27.7357 73.1399 27.7583 72.8691 27.7583C71.8082 27.7583 71.1988 27.352 71.1988 26.1105V25.1851C70.8828 25.8622 69.5285 27.826 66.6393 27.826C64.4499 27.826 62.8247 26.6297 62.8247 24.3499C62.8247 22.3411 64.1339 21.3253 66.9327 20.9191C68.3548 20.6933 70.2282 20.4676 71.0633 20.0162V19.8356C71.0633 17.7365 70.0702 17.0593 68.0839 17.0593C66.1879 17.0593 65.285 17.7365 65.1044 18.865H63.5696C63.8179 16.8336 65.4656 15.8179 68.1065 15.8179C71.1536 15.8179 72.6659 16.9916 72.6659 20.2193V25.7945ZM71.0633 23.9211V21.0771C70.4313 21.4382 68.761 21.7091 67.1359 21.9574C65.0819 22.2959 64.4273 23.0182 64.4273 24.3048C64.4273 25.7042 65.3753 26.6071 66.9779 26.6071C69.5285 26.6071 70.7699 24.5531 71.0633 23.9211Z" fill="#1681C2"/>
                <path d="M61.319 15.8179C61.5673 15.8179 61.8156 15.8179 62.109 15.863V17.3076C61.8156 17.285 61.5899 17.285 61.4319 17.285C59.0167 17.285 57.6173 18.5942 57.211 20.7159V27.668H55.6084V15.9307H57.211V18.8876C57.5496 17.285 58.9716 15.8179 61.319 15.8179Z" fill="#1681C2"/>
                <path d="M55.2275 11.8677V13.3574H50.194V27.6678H48.5237V13.3574H43.4902V11.8677H55.2275Z" fill="#1681C2"/>
                <path d="M184.138 16.147C185.735 16.147 186.872 17.0471 187.243 17.7056V12.1736H190.436V27.6721H187.243V25.9378C187.243 26.2013 186.391 27.8258 184.204 27.8258C182.083 27.8258 179.131 26.2452 179.131 21.9644C179.131 17.7715 182.061 16.147 184.138 16.147ZM184.838 25.2354C186.238 25.2354 187.375 24.1816 187.375 21.9644C187.375 19.7692 186.238 18.7374 184.838 18.7374C183.373 18.7374 182.214 19.7033 182.214 21.9644C182.214 24.2475 183.373 25.2354 184.838 25.2354Z" fill="white"/>
                <path d="M177.393 22.5564C177.393 22.7689 177.393 22.9389 177.37 23.1301H169.245C169.491 24.83 170.409 25.5312 171.998 25.5312C173.229 25.5312 173.901 25.1487 174.236 24.5113H177.079C176.408 26.7424 174.639 27.8261 171.819 27.8261C169.177 27.8261 166.088 26.2749 166.088 22.2164C166.088 18.0941 169.155 16.5217 171.841 16.5217C174.729 16.5217 177.393 18.0941 177.393 22.5564ZM169.267 21.2177H174.281C174.236 19.7728 173.386 18.8166 171.841 18.8166C170.409 18.8166 169.513 19.6028 169.267 21.2177Z" fill="white"/>
                <path d="M163.983 25.2799C164.326 25.2799 164.715 25.2348 165.219 25.1222V27.4883C164.715 27.6911 163.937 27.8263 163.045 27.8263C160.985 27.8263 159.361 27.2629 159.361 24.4461V18.5421H157.393V15.9732H159.361V13.0437H162.702V15.9732H165.104V18.5421H162.702V24.0856C162.702 24.8067 163.022 25.2799 163.983 25.2799Z" fill="white"/>
                <path d="M152.175 16.5217H155.654V27.8261H152.175V16.5217Z" fill="white"/>
                <path d="M146.236 16.5217C148.665 16.5217 150.436 17.6845 150.436 21.0865V27.8261H147.122V21.2588C147.122 19.7085 146.191 19.1271 145.011 19.1271C143.353 19.1271 142.559 20.5052 142.445 21.2157V27.8261H139.131V16.6294H142.445V18.8472C142.786 18.072 144.057 16.5217 146.236 16.5217Z" fill="white"/>
                <path d="M136.523 21.6444C136.523 25.6181 133.856 27.8258 130.013 27.8258C126.124 27.8258 123.479 25.6181 123.479 21.6444V12.1736H126.938V21.5119C126.938 23.8079 128.091 24.9117 130.013 24.9117C131.934 24.9117 133.064 23.8079 133.064 21.5119V12.1736H136.523V21.6444Z" fill="white"/>
                <path d="M153.914 14.7825C154.875 14.7825 155.654 14.0038 155.654 13.0433C155.654 12.0828 154.875 11.3042 153.914 11.3042C152.954 11.3042 152.175 12.0828 152.175 13.0433C152.175 14.0038 152.954 14.7825 153.914 14.7825Z" fill="#E7AA2D"/>
              </svg>
        </a>

        <div class="nav-menu">   
            <div class="search-div" >
                <img src="<?php echo e(asset ('assets/images/circum_search.png')); ?>" alt="" width="24px" height="24px">
                <input type="text" class="form-control nav-search" id="nav-search" aria-describedby="emailHelp" placeholder="Search on TradersUnited">
            </div>
    
            <div class="nav-search-btn">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                    <path d="M20.0308 20.7901C20.4908 21.2501 21.2008 20.5401 20.7408 20.0901L16.9908 16.3301C18.3063 14.8746 19.0334 12.9819 19.0308 11.0201C19.0308 6.63006 15.4608 3.06006 11.0708 3.06006C6.68084 3.06006 3.11084 6.63006 3.11084 11.0201C3.11084 15.4101 6.68084 18.9801 11.0708 18.9801C13.0508 18.9801 14.8808 18.2501 16.2808 17.0401L20.0308 20.7901ZM4.10984 11.0201C4.10984 7.18006 7.23984 4.06006 11.0698 4.06006C14.9098 4.06006 18.0298 7.18006 18.0298 11.0201C18.0298 14.8601 14.9098 17.9801 11.0698 17.9801C7.23984 17.9801 4.10984 14.8601 4.10984 11.0201Z" fill="white" stroke="white"/>
                </svg>
            </div>

            <div class="nav-humburger-btn">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 18" fill="none">
                    <g clip-path="url(#clip0_34_508)">
                        <path d="M25.4888 9C25.4888 9.26522 25.3834 9.51957 25.1959 9.70711C25.0083 9.89464 24.754 10 24.4888 10H2.48877C2.22355 10 1.9692 9.89464 1.78166 9.70711C1.59413 9.51957 1.48877 9.26522 1.48877 9C1.48877 8.73478 1.59413 8.48043 1.78166 8.29289C1.9692 8.10536 2.22355 8 2.48877 8H24.4888C24.754 8 25.0083 8.10536 25.1959 8.29289C25.3834 8.48043 25.4888 8.73478 25.4888 9ZM2.48877 2H24.4888C24.754 2 25.0083 1.89464 25.1959 1.70711C25.3834 1.51957 25.4888 1.26522 25.4888 1C25.4888 0.734783 25.3834 0.48043 25.1959 0.292893C25.0083 0.105357 24.754 0 24.4888 0H2.48877C2.22355 0 1.9692 0.105357 1.78166 0.292893C1.59413 0.48043 1.48877 0.734783 1.48877 1C1.48877 1.26522 1.59413 1.51957 1.78166 1.70711C1.9692 1.89464 2.22355 2 2.48877 2ZM24.4888 16H2.48877C2.22355 16 1.9692 16.1054 1.78166 16.2929C1.59413 16.4804 1.48877 16.7348 1.48877 17C1.48877 17.2652 1.59413 17.5196 1.78166 17.7071C1.9692 17.8946 2.22355 18 2.48877 18H24.4888C24.754 18 25.0083 17.8946 25.1959 17.7071C25.3834 17.5196 25.4888 17.2652 25.4888 17C25.4888 16.7348 25.3834 16.4804 25.1959 16.2929C25.0083 16.1054 24.754 16 24.4888 16Z" fill="white"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_34_508">
                        <rect width="25" height="18" fill="white" transform="translate(0.5)"/>
                        </clipPath>
                    </defs>
                </svg>
            </div>
        </div>

        <div class="navbar-div">
            <ul class="navbar-nav d-flex navbar-link ms-auto">
                <li class="nav-item">
                    <a class="nav-h11" href="/risk-protection-program">Rating</a>
                </li>
                <li class="nav-item">
                    <a class="nav-h11" href="/unity-gains">CommuniTrade</a>
                </li>
                <li class="nav-item">
                    <a class="nav-h11" href="#">Resources</a>
                </li>
                <li class="nav-item">
                    <a class="nav-h11" href="#">Advantages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-h11" href="#">TechHub</a>
                </li>
                <li class="nav-item">
                    <a class="nav-h11" href="#">Organization</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-login ms-auto">
                <a class="nav-signUp" href="#">SignUp</a>
            </ul>
            <div class="border-line"></div>
            <button type="button" class="btn btn-login">Login</button>
        </div>
        
    </nav>
    
    <?php echo $__env->yieldContent('content'); ?>
    
    <!-- Footer Start -->
    <footer id="footer-section" class="footer-section">
        <div class="footer-section-container row">
            <div class="col-12 footer-nav row">
                <div class=" col-12 col-xl-4">
                    <div class="footer-logo">
                        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="42" viewBox="0 0 200 42" fill="none">
                            <path d="M35.6386 0H6.36142C2.84811 0 0 2.84811 0 6.36142V35.6386C0 39.1519 2.84811 42 6.36142 42H35.6386C39.1519 42 42 39.1519 42 35.6386V6.36142C42 2.84811 39.1519 0 35.6386 0Z" fill="#414141"/>
                            <path d="M4.56592 15.2597H11.8703V18.2395H4.56592V15.2597ZM7.07984 29.1344C6.47145 28.4744 6.16726 27.498 6.16726 26.2053V10.9565H9.74462V25.7355C9.74462 26.0973 9.81964 26.3752 9.96968 26.569C10.0446 26.6668 10.1441 26.7452 10.259 26.7971C10.3739 26.8489 10.5006 26.8725 10.6275 26.8657H11.8703V30.1305H9.95484C8.64656 30.1273 7.68823 29.7953 7.07984 29.1344Z" fill="#E6E7E7"/>
                            <path d="M13.6963 15.7219H17.1507V30.1307H13.6963V15.7219ZM20.8962 18.8844C20.5366 18.7533 20.1558 18.69 19.773 18.6975C18.9409 18.6975 18.2957 18.9452 17.8372 19.4405C17.3788 19.9359 17.1496 20.6238 17.1496 21.5045L16.8584 18.2434C17.222 17.4466 17.783 16.7558 18.4882 16.2368C19.1314 15.7696 19.9066 15.5194 20.7014 15.5224C21.2827 15.5145 21.8607 15.6108 22.408 15.8068C22.9059 15.9898 23.3598 16.2758 23.7398 16.6461L21.7146 19.4371C21.4884 19.1918 21.2082 19.0026 20.8962 18.8844Z" fill="#E6E7E7"/>
                            <path d="M28.0009 24.2766C28.0009 25.1285 28.2291 25.7875 28.6856 26.2536C29.142 26.7196 29.785 26.9531 30.6147 26.9538C31.4437 26.9538 32.0817 26.7342 32.5289 26.2948C32.9761 25.8555 33.1986 25.2244 33.1962 24.4016L33.3925 27.481C33.1146 28.2282 32.63 28.8824 31.9944 29.3685C31.3417 29.8774 30.5451 30.1314 29.6045 30.1307C28.0298 30.1307 26.8114 29.6268 25.9494 28.619C25.0873 27.6113 24.6551 26.1871 24.6528 24.3466V15.522H28.0009V24.2766ZM33.1962 15.522H36.5224V29.9232H33.1962V15.522Z" fill="#1681C2"/>
                            <path d="M21.4575 30.1302C22.2138 30.1302 22.827 29.5171 22.827 28.7607C22.827 28.0043 22.2138 27.3911 21.4575 27.3911C20.7011 27.3911 20.0879 28.0043 20.0879 28.7607C20.0879 29.5171 20.7011 30.1302 21.4575 30.1302Z" fill="#E7AA2D"/>
                            <path d="M121.33 19.8079C120.88 18.4807 119.766 17.9356 118.155 17.9356C116.282 17.9356 115.239 18.8125 115.239 19.9738C115.239 21.0403 115.903 21.6091 117.491 21.9883L119.458 22.4386C121.757 22.9838 123.155 23.4815 123.155 25.6856C123.155 28.2215 120.809 29.2169 118.273 29.2169C115.595 29.2169 113.533 28.0793 113.201 25.496H114.789C115.168 27.2972 116.614 27.8897 118.273 27.8897C120.003 27.8897 121.473 27.2024 121.473 25.6856C121.473 24.3584 120.596 24.0266 119.174 23.6948L116.97 23.1734C114.789 22.6519 113.651 21.6565 113.651 19.9501C113.651 17.8645 115.453 16.6084 118.155 16.6084C120.619 16.6084 122.373 17.6986 122.871 19.8079H121.33Z" fill="#1681C2"/>
                            <path d="M111.322 16.6084C111.583 16.6084 111.844 16.6084 112.152 16.6558V18.1726C111.844 18.1489 111.607 18.1489 111.441 18.1489C108.905 18.1489 107.435 19.5235 107.009 21.7513V29.051H105.326V16.7269H107.009V19.8316C107.364 18.1489 108.858 16.6084 111.322 16.6084Z" fill="#1681C2"/>
                            <path d="M103.165 22.9364C103.165 23.126 103.165 23.3156 103.142 23.5289H93.6854C93.875 26.5862 95.5103 27.8897 97.8566 27.8897C99.3971 27.8897 100.369 27.5105 101.151 26.3966H102.739C101.72 28.3874 100.156 29.2169 97.7618 29.2169C94.6808 29.2169 92.0264 27.1787 92.0264 22.9127C92.0264 18.5992 94.7993 16.6084 97.7144 16.6084C100.677 16.6084 103.165 18.5992 103.165 22.9364ZM93.6854 22.3438H101.554C101.506 19.4287 99.9422 17.9356 97.7144 17.9356C95.5814 17.9356 93.875 19.3339 93.6854 22.3438Z" fill="#1681C2"/>
                            <path d="M83.9154 16.6086C85.7877 16.6086 87.3756 17.5329 88.1814 19.1208V12.3188H89.8642V29.0512H88.1814V26.4679C87.4704 28.0558 86.001 29.2171 83.9628 29.2171C81.2373 29.2171 78.4644 27.2737 78.4644 22.8891C78.4644 18.552 81.261 16.6086 83.9154 16.6086ZM84.1998 27.7951C86.3091 27.7951 88.2525 26.2072 88.2525 22.8891C88.2525 19.4763 86.3091 18.0306 84.1998 18.0306C82.0431 18.0306 80.0997 19.5237 80.0997 22.8891C80.0997 26.2783 82.0431 27.7951 84.1998 27.7951Z" fill="#1681C2"/>
                            <path d="M76.2986 27.0839C76.2986 27.7238 76.5356 27.9845 77.2229 27.9608V29.0273C76.9859 29.1221 76.7963 29.1458 76.5119 29.1458C75.398 29.1458 74.7581 28.7192 74.7581 27.4157V26.444C74.4263 27.155 73.0043 29.2169 69.9707 29.2169C67.6717 29.2169 65.9653 27.9608 65.9653 25.5671C65.9653 23.4578 67.3399 22.3912 70.2788 21.9646C71.7719 21.7276 73.739 21.4906 74.6159 21.0166V20.827C74.6159 18.6229 73.5731 17.9119 71.4875 17.9119C69.4967 17.9119 68.5487 18.6229 68.3591 19.8079H66.7474C67.0081 17.6749 68.7383 16.6084 71.5112 16.6084C74.7107 16.6084 76.2986 17.8408 76.2986 21.2299V27.0839ZM74.6159 25.1168V22.1305C73.9523 22.5097 72.1985 22.7942 70.4921 23.0549C68.3354 23.4104 67.648 24.1688 67.648 25.5197C67.648 26.9891 68.6435 27.9371 70.3262 27.9371C73.0043 27.9371 74.3078 25.7804 74.6159 25.1168Z" fill="#1681C2"/>
                            <path d="M64.3843 16.6084C64.645 16.6084 64.9057 16.6084 65.2138 16.6558V18.1726C64.9057 18.1489 64.6687 18.1489 64.5028 18.1489C61.9669 18.1489 60.4975 19.5235 60.0709 21.7513V29.051H58.3882V16.7269H60.0709V19.8316C60.4264 18.1489 61.9195 16.6084 64.3843 16.6084Z" fill="#1681C2"/>
                            <path d="M57.9887 12.4609V14.0252H52.7035V29.0511H50.9497V14.0252H45.6646V12.4609H57.9887Z" fill="#1681C2"/>
                            <path d="M193.345 16.9548C195.021 16.9548 196.215 17.8999 196.606 18.5914V12.7827H199.957V29.0561H196.606V27.2352C196.606 27.5118 195.71 29.2175 193.414 29.2175C191.187 29.2175 188.088 27.5579 188.088 23.0631C188.088 18.6605 191.164 16.9548 193.345 16.9548ZM194.08 26.4976C195.549 26.4976 196.743 25.3912 196.743 23.0631C196.743 20.7581 195.549 19.6747 194.08 19.6747C192.542 19.6747 191.325 20.6889 191.325 23.0631C191.325 25.4603 192.542 26.4976 194.08 26.4976Z" fill="#414141"/>
                            <path d="M186.262 23.6845C186.262 23.9076 186.262 24.0861 186.238 24.2869H177.706C177.965 26.0718 178.928 26.8081 180.597 26.8081C181.89 26.8081 182.595 26.4065 182.948 25.7372H185.933C185.227 28.0798 183.371 29.2177 180.409 29.2177C177.636 29.2177 174.392 27.589 174.392 23.3275C174.392 18.9992 177.612 17.3481 180.433 17.3481C183.465 17.3481 186.262 18.9992 186.262 23.6845ZM177.73 22.2789H182.995C182.948 20.7618 182.054 19.7578 180.433 19.7578C178.928 19.7578 177.988 20.5833 177.73 22.2789Z" fill="#414141"/>
                            <path d="M172.182 26.5438C172.542 26.5438 172.951 26.4965 173.479 26.3782V28.8626C172.951 29.0756 172.134 29.2175 171.197 29.2175C169.034 29.2175 167.328 28.626 167.328 25.6684V19.4691H165.262V16.7718H167.328V13.6958H170.836V16.7718H173.359V19.4691H170.836V25.2898C170.836 26.0469 171.172 26.5438 172.182 26.5438Z" fill="#414141"/>
                            <path d="M159.784 17.3481H163.436V29.2177H159.784V17.3481Z" fill="#414141"/>
                            <path d="M153.548 17.3481C156.098 17.3481 157.957 18.569 157.957 22.1412V29.2177H154.478V22.3221C154.478 20.6942 153.5 20.0838 152.261 20.0838C150.521 20.0838 149.687 21.5308 149.568 22.2768V29.2177H146.088V17.4612H149.568V19.7899C149.925 18.976 151.26 17.3481 153.548 17.3481Z" fill="#414141"/>
                            <path d="M143.349 22.727C143.349 26.8995 140.548 29.2175 136.513 29.2175C132.43 29.2175 129.653 26.8995 129.653 22.727V12.7827H133.285V22.588C133.285 24.9987 134.495 26.1577 136.513 26.1577C138.531 26.1577 139.717 24.9987 139.717 22.588V12.7827H143.349V22.727Z" fill="#414141"/>
                            <path d="M161.61 15.5218C162.618 15.5218 163.436 14.7042 163.436 13.6957C163.436 12.6872 162.618 11.8696 161.61 11.8696C160.601 11.8696 159.784 12.6872 159.784 13.6957C159.784 14.7042 160.601 15.5218 161.61 15.5218Z" fill="#E7AA2D"/>
                          </svg>
                    </div>
                    <div class="d-flex footer-socials">
                        <div class="footer-socials-logo">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M15.1199 5.32003H16.9999V2.14003C16.0896 2.04538 15.175 1.99865 14.2599 2.00003C11.5399 2.00003 9.67986 3.66003 9.67986 6.70003V9.32003H6.60986V12.88H9.67986V22H13.3599V12.88H16.4199L16.8799 9.32003H13.3599V7.05003C13.3599 6.00003 13.6399 5.32003 15.1199 5.32003Z" fill="#414141"/>
                            </svg>
                        </div>
                        <div class="footer-socials-logo">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M17.34 5.46C17.1027 5.46 16.8707 5.53038 16.6733 5.66224C16.476 5.79409 16.3222 5.98151 16.2313 6.20078C16.1405 6.42005 16.1168 6.66133 16.1631 6.89411C16.2094 7.12689 16.3236 7.34071 16.4915 7.50853C16.6593 7.67635 16.8731 7.79064 17.1059 7.83694C17.3387 7.88324 17.5799 7.85948 17.7992 7.76866C18.0185 7.67783 18.2059 7.52402 18.3378 7.32668C18.4696 7.12935 18.54 6.89734 18.54 6.66C18.54 6.34174 18.4136 6.03652 18.1885 5.81147C17.9635 5.58643 17.6583 5.46 17.34 5.46ZM21.94 7.88C21.9206 7.0503 21.7652 6.2294 21.48 5.45C21.2257 4.78313 20.83 4.17928 20.32 3.68C19.8248 3.16743 19.2196 2.77418 18.55 2.53C17.7727 2.23616 16.9508 2.07721 16.12 2.06C15.06 2 14.72 2 12 2C9.28 2 8.94 2 7.88 2.06C7.04915 2.07721 6.22734 2.23616 5.45 2.53C4.78168 2.77665 4.17693 3.16956 3.68 3.68C3.16743 4.17518 2.77418 4.78044 2.53 5.45C2.23616 6.22734 2.07721 7.04915 2.06 7.88C2 8.94 2 9.28 2 12C2 14.72 2 15.06 2.06 16.12C2.07721 16.9508 2.23616 17.7727 2.53 18.55C2.77418 19.2196 3.16743 19.8248 3.68 20.32C4.17693 20.8304 4.78168 21.2234 5.45 21.47C6.22734 21.7638 7.04915 21.9228 7.88 21.94C8.94 22 9.28 22 12 22C14.72 22 15.06 22 16.12 21.94C16.9508 21.9228 17.7727 21.7638 18.55 21.47C19.2196 21.2258 19.8248 20.8326 20.32 20.32C20.8322 19.8226 21.2283 19.2182 21.48 18.55C21.7652 17.7706 21.9206 16.9497 21.94 16.12C21.94 15.06 22 14.72 22 12C22 9.28 22 8.94 21.94 7.88ZM20.14 16C20.1327 16.6348 20.0178 17.2637 19.8 17.86C19.6403 18.2952 19.3839 18.6884 19.05 19.01C18.7256 19.3405 18.3332 19.5964 17.9 19.76C17.3037 19.9778 16.6748 20.0927 16.04 20.1C15.04 20.15 14.67 20.16 12.04 20.16C9.41 20.16 9.04 20.16 8.04 20.1C7.38089 20.1123 6.72459 20.0109 6.1 19.8C5.68578 19.6281 5.31136 19.3728 5 19.05C4.66809 18.7287 4.41484 18.3352 4.26 17.9C4.01586 17.2952 3.88044 16.6519 3.86 16C3.86 15 3.8 14.63 3.8 12C3.8 9.37 3.8 9 3.86 8C3.86448 7.35106 3.98295 6.70795 4.21 6.1C4.38605 5.67791 4.65627 5.30166 5 5C5.30381 4.65617 5.67929 4.3831 6.1 4.2C6.70955 3.98004 7.352 3.86508 8 3.86C9 3.86 9.37 3.8 12 3.8C14.63 3.8 15 3.8 16 3.86C16.6348 3.86728 17.2637 3.98225 17.86 4.2C18.3144 4.36865 18.7223 4.64285 19.05 5C19.3777 5.30718 19.6338 5.68273 19.8 6.1C20.0223 6.70893 20.1373 7.35178 20.14 8C20.19 9 20.2 9.37 20.2 12C20.2 14.63 20.19 15 20.14 16ZM12 6.87C10.9858 6.87198 9.99496 7.17453 9.15265 7.73942C8.31035 8.30431 7.65438 9.1062 7.26763 10.0438C6.88089 10.9813 6.78072 12.0125 6.97979 13.0069C7.17886 14.0014 7.66824 14.9145 8.38608 15.631C9.10392 16.3474 10.018 16.835 11.0129 17.0321C12.0077 17.2293 13.0387 17.1271 13.9755 16.7385C14.9123 16.35 15.7129 15.6924 16.2761 14.849C16.8394 14.0056 17.14 13.0142 17.14 12C17.1413 11.3251 17.0092 10.6566 16.7512 10.033C16.4933 9.40931 16.1146 8.84281 15.6369 8.36605C15.1592 7.88929 14.5919 7.51168 13.9678 7.25493C13.3436 6.99818 12.6749 6.86736 12 6.87ZM12 15.33C11.3414 15.33 10.6976 15.1347 10.15 14.7688C9.60234 14.4029 9.17552 13.8828 8.92348 13.2743C8.67144 12.6659 8.6055 11.9963 8.73398 11.3503C8.86247 10.7044 9.17963 10.111 9.64533 9.64533C10.111 9.17963 10.7044 8.86247 11.3503 8.73398C11.9963 8.6055 12.6659 8.67144 13.2743 8.92348C13.8828 9.17552 14.4029 9.60234 14.7688 10.15C15.1347 10.6976 15.33 11.3414 15.33 12C15.33 12.4373 15.2439 12.8703 15.0765 13.2743C14.9092 13.6784 14.6639 14.0454 14.3547 14.3547C14.0454 14.6639 13.6784 14.9092 13.2743 15.0765C12.8703 15.2439 12.4373 15.33 12 15.33Z" fill="#414141"/>
                            </svg>
                        </div>
                        <div class="footer-socials-logo">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M16.9287 4.76611H19.5601L13.8173 11.2975L20.5716 20.1947H15.283L11.1344 14.7947L6.39443 20.1947H3.77157L9.91728 13.2004L3.42871 4.76611H8.85442L12.6001 9.69468L16.9287 4.76611ZM15.8659 18.4804H17.323L8.17728 6.4804H6.60014L15.8573 18.4804H15.8659Z" fill="#414141"/>
                            </svg>
                        </div>
                        <div class="footer-socials-logo">   
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M20.4701 2.00014H3.53006C3.33964 1.99749 3.15056 2.03238 2.97362 2.10282C2.79669 2.17326 2.63536 2.27786 2.49886 2.41065C2.36235 2.54344 2.25334 2.70182 2.17805 2.87675C2.10276 3.05167 2.06267 3.23971 2.06006 3.43014V20.5701C2.06267 20.7605 2.10276 20.9486 2.17805 21.1235C2.25334 21.2984 2.36235 21.4568 2.49886 21.5896C2.63536 21.7224 2.79669 21.827 2.97362 21.8974C3.15056 21.9678 3.33964 22.0027 3.53006 22.0001H20.4701C20.6605 22.0027 20.8496 21.9678 21.0265 21.8974C21.2034 21.827 21.3648 21.7224 21.5013 21.5896C21.6378 21.4568 21.7468 21.2984 21.8221 21.1235C21.8974 20.9486 21.9375 20.7605 21.9401 20.5701V3.43014C21.9375 3.23971 21.8974 3.05167 21.8221 2.87675C21.7468 2.70182 21.6378 2.54344 21.5013 2.41065C21.3648 2.27786 21.2034 2.17326 21.0265 2.10282C20.8496 2.03238 20.6605 1.99749 20.4701 2.00014ZM8.09006 18.7401H5.09006V9.74014H8.09006V18.7401ZM6.59006 8.48014C6.17632 8.48014 5.77953 8.31578 5.48697 8.02322C5.19442 7.73067 5.03006 7.33387 5.03006 6.92014C5.03006 6.5064 5.19442 6.10961 5.48697 5.81705C5.77953 5.52449 6.17632 5.36014 6.59006 5.36014C6.80975 5.33522 7.03224 5.35699 7.24293 5.42402C7.45363 5.49105 7.6478 5.60183 7.81272 5.7491C7.97763 5.89637 8.10958 6.07681 8.19993 6.27862C8.29028 6.48042 8.33698 6.69903 8.33698 6.92014C8.33698 7.14124 8.29028 7.35985 8.19993 7.56165C8.10958 7.76346 7.97763 7.9439 7.81272 8.09117C7.6478 8.23845 7.45363 8.34922 7.24293 8.41625C7.03224 8.48328 6.80975 8.50505 6.59006 8.48014ZM18.9101 18.7401H15.9101V13.9101C15.9101 12.7001 15.4801 11.9101 14.3901 11.9101C14.0527 11.9126 13.7242 12.0184 13.4489 12.2133C13.1735 12.4082 12.9645 12.6828 12.8501 13.0001C12.7718 13.2351 12.7379 13.4827 12.7501 13.7301V18.7301H9.75006C9.75006 18.7301 9.75006 10.5501 9.75006 9.73014H12.7501V11.0001C13.0226 10.5272 13.419 10.1376 13.8965 9.87334C14.374 9.60902 14.9146 9.47999 15.4601 9.50014C17.4601 9.50014 18.9101 10.7901 18.9101 13.5601V18.7401Z" fill="#414141"/>
                            </svg>
                        </div>
                    </div>
                    <div class="footer-credits">
                        2023. TradersUnited. All rights reserved
                    </div>
                </div>
                <div class="col-6 col-xl-2">
                    <div class="footer-nav-title">Organization</div>
                    <a class="footer-nav-link">Our Goals</a>
                    <a class="footer-nav-link">ESG Initiatives</a>
                    <a class="footer-nav-link">Contact Us</a>
                    <a class="footer-nav-link">Partnerships</a>
                    <a class="footer-nav-link">Financial</a>
                    <a class="footer-nav-link">Reports</a>    
                </div>
                <div class="col-6 col-xl-2">
                    <div class="footer-nav-title">Resources</div>
                    <a class="footer-nav-link">Ratings</a>
                    <a class="footer-nav-link">CommuniTrade</a>
                    <a class="footer-nav-link">Education</a>
                    <a class="footer-nav-link">Marketplace</a>
                    <a class="footer-nav-link">Tools</a> 
                </div>
                <div class="col-6 col-xl-2">
                    <div class="footer-nav-title">Advantages</div>
                    <a class="footer-nav-link">UnityGains</a>
                    <a class="footer-nav-link">Risk Protection Plan</a>
                    <a class="footer-nav-link">Dispute Resolution</a>
                </div>
                <div class="col-6 col-xl-2">
                    <div class="footer-nav-title">Documentation</div>
                    <a class="footer-nav-link">Terms of Use</a>
                    <a class="footer-nav-link">Privacy Policy</a>
                </div>
            </div>
            <div class="row col-12 small-screen my-5">
                <div class="d-flex justify-content-center footer-socials-1 my-3">
                    <div class="footer-socials-logo">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M15.1199 5.32003H16.9999V2.14003C16.0896 2.04538 15.175 1.99865 14.2599 2.00003C11.5399 2.00003 9.67986 3.66003 9.67986 6.70003V9.32003H6.60986V12.88H9.67986V22H13.3599V12.88H16.4199L16.8799 9.32003H13.3599V7.05003C13.3599 6.00003 13.6399 5.32003 15.1199 5.32003Z" fill="#414141"/>
                        </svg>
                    </div>
                    <div class="footer-socials-logo">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M17.34 5.46C17.1027 5.46 16.8707 5.53038 16.6733 5.66224C16.476 5.79409 16.3222 5.98151 16.2313 6.20078C16.1405 6.42005 16.1168 6.66133 16.1631 6.89411C16.2094 7.12689 16.3236 7.34071 16.4915 7.50853C16.6593 7.67635 16.8731 7.79064 17.1059 7.83694C17.3387 7.88324 17.5799 7.85948 17.7992 7.76866C18.0185 7.67783 18.2059 7.52402 18.3378 7.32668C18.4696 7.12935 18.54 6.89734 18.54 6.66C18.54 6.34174 18.4136 6.03652 18.1885 5.81147C17.9635 5.58643 17.6583 5.46 17.34 5.46ZM21.94 7.88C21.9206 7.0503 21.7652 6.2294 21.48 5.45C21.2257 4.78313 20.83 4.17928 20.32 3.68C19.8248 3.16743 19.2196 2.77418 18.55 2.53C17.7727 2.23616 16.9508 2.07721 16.12 2.06C15.06 2 14.72 2 12 2C9.28 2 8.94 2 7.88 2.06C7.04915 2.07721 6.22734 2.23616 5.45 2.53C4.78168 2.77665 4.17693 3.16956 3.68 3.68C3.16743 4.17518 2.77418 4.78044 2.53 5.45C2.23616 6.22734 2.07721 7.04915 2.06 7.88C2 8.94 2 9.28 2 12C2 14.72 2 15.06 2.06 16.12C2.07721 16.9508 2.23616 17.7727 2.53 18.55C2.77418 19.2196 3.16743 19.8248 3.68 20.32C4.17693 20.8304 4.78168 21.2234 5.45 21.47C6.22734 21.7638 7.04915 21.9228 7.88 21.94C8.94 22 9.28 22 12 22C14.72 22 15.06 22 16.12 21.94C16.9508 21.9228 17.7727 21.7638 18.55 21.47C19.2196 21.2258 19.8248 20.8326 20.32 20.32C20.8322 19.8226 21.2283 19.2182 21.48 18.55C21.7652 17.7706 21.9206 16.9497 21.94 16.12C21.94 15.06 22 14.72 22 12C22 9.28 22 8.94 21.94 7.88ZM20.14 16C20.1327 16.6348 20.0178 17.2637 19.8 17.86C19.6403 18.2952 19.3839 18.6884 19.05 19.01C18.7256 19.3405 18.3332 19.5964 17.9 19.76C17.3037 19.9778 16.6748 20.0927 16.04 20.1C15.04 20.15 14.67 20.16 12.04 20.16C9.41 20.16 9.04 20.16 8.04 20.1C7.38089 20.1123 6.72459 20.0109 6.1 19.8C5.68578 19.6281 5.31136 19.3728 5 19.05C4.66809 18.7287 4.41484 18.3352 4.26 17.9C4.01586 17.2952 3.88044 16.6519 3.86 16C3.86 15 3.8 14.63 3.8 12C3.8 9.37 3.8 9 3.86 8C3.86448 7.35106 3.98295 6.70795 4.21 6.1C4.38605 5.67791 4.65627 5.30166 5 5C5.30381 4.65617 5.67929 4.3831 6.1 4.2C6.70955 3.98004 7.352 3.86508 8 3.86C9 3.86 9.37 3.8 12 3.8C14.63 3.8 15 3.8 16 3.86C16.6348 3.86728 17.2637 3.98225 17.86 4.2C18.3144 4.36865 18.7223 4.64285 19.05 5C19.3777 5.30718 19.6338 5.68273 19.8 6.1C20.0223 6.70893 20.1373 7.35178 20.14 8C20.19 9 20.2 9.37 20.2 12C20.2 14.63 20.19 15 20.14 16ZM12 6.87C10.9858 6.87198 9.99496 7.17453 9.15265 7.73942C8.31035 8.30431 7.65438 9.1062 7.26763 10.0438C6.88089 10.9813 6.78072 12.0125 6.97979 13.0069C7.17886 14.0014 7.66824 14.9145 8.38608 15.631C9.10392 16.3474 10.018 16.835 11.0129 17.0321C12.0077 17.2293 13.0387 17.1271 13.9755 16.7385C14.9123 16.35 15.7129 15.6924 16.2761 14.849C16.8394 14.0056 17.14 13.0142 17.14 12C17.1413 11.3251 17.0092 10.6566 16.7512 10.033C16.4933 9.40931 16.1146 8.84281 15.6369 8.36605C15.1592 7.88929 14.5919 7.51168 13.9678 7.25493C13.3436 6.99818 12.6749 6.86736 12 6.87ZM12 15.33C11.3414 15.33 10.6976 15.1347 10.15 14.7688C9.60234 14.4029 9.17552 13.8828 8.92348 13.2743C8.67144 12.6659 8.6055 11.9963 8.73398 11.3503C8.86247 10.7044 9.17963 10.111 9.64533 9.64533C10.111 9.17963 10.7044 8.86247 11.3503 8.73398C11.9963 8.6055 12.6659 8.67144 13.2743 8.92348C13.8828 9.17552 14.4029 9.60234 14.7688 10.15C15.1347 10.6976 15.33 11.3414 15.33 12C15.33 12.4373 15.2439 12.8703 15.0765 13.2743C14.9092 13.6784 14.6639 14.0454 14.3547 14.3547C14.0454 14.6639 13.6784 14.9092 13.2743 15.0765C12.8703 15.2439 12.4373 15.33 12 15.33Z" fill="#414141"/>
                        </svg>
                    </div>
                    <div class="footer-socials-logo">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M16.9287 4.76611H19.5601L13.8173 11.2975L20.5716 20.1947H15.283L11.1344 14.7947L6.39443 20.1947H3.77157L9.91728 13.2004L3.42871 4.76611H8.85442L12.6001 9.69468L16.9287 4.76611ZM15.8659 18.4804H17.323L8.17728 6.4804H6.60014L15.8573 18.4804H15.8659Z" fill="#414141"/>
                        </svg>
                    </div>
                    <div class="footer-socials-logo">   
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M20.4701 2.00014H3.53006C3.33964 1.99749 3.15056 2.03238 2.97362 2.10282C2.79669 2.17326 2.63536 2.27786 2.49886 2.41065C2.36235 2.54344 2.25334 2.70182 2.17805 2.87675C2.10276 3.05167 2.06267 3.23971 2.06006 3.43014V20.5701C2.06267 20.7605 2.10276 20.9486 2.17805 21.1235C2.25334 21.2984 2.36235 21.4568 2.49886 21.5896C2.63536 21.7224 2.79669 21.827 2.97362 21.8974C3.15056 21.9678 3.33964 22.0027 3.53006 22.0001H20.4701C20.6605 22.0027 20.8496 21.9678 21.0265 21.8974C21.2034 21.827 21.3648 21.7224 21.5013 21.5896C21.6378 21.4568 21.7468 21.2984 21.8221 21.1235C21.8974 20.9486 21.9375 20.7605 21.9401 20.5701V3.43014C21.9375 3.23971 21.8974 3.05167 21.8221 2.87675C21.7468 2.70182 21.6378 2.54344 21.5013 2.41065C21.3648 2.27786 21.2034 2.17326 21.0265 2.10282C20.8496 2.03238 20.6605 1.99749 20.4701 2.00014ZM8.09006 18.7401H5.09006V9.74014H8.09006V18.7401ZM6.59006 8.48014C6.17632 8.48014 5.77953 8.31578 5.48697 8.02322C5.19442 7.73067 5.03006 7.33387 5.03006 6.92014C5.03006 6.5064 5.19442 6.10961 5.48697 5.81705C5.77953 5.52449 6.17632 5.36014 6.59006 5.36014C6.80975 5.33522 7.03224 5.35699 7.24293 5.42402C7.45363 5.49105 7.6478 5.60183 7.81272 5.7491C7.97763 5.89637 8.10958 6.07681 8.19993 6.27862C8.29028 6.48042 8.33698 6.69903 8.33698 6.92014C8.33698 7.14124 8.29028 7.35985 8.19993 7.56165C8.10958 7.76346 7.97763 7.9439 7.81272 8.09117C7.6478 8.23845 7.45363 8.34922 7.24293 8.41625C7.03224 8.48328 6.80975 8.50505 6.59006 8.48014ZM18.9101 18.7401H15.9101V13.9101C15.9101 12.7001 15.4801 11.9101 14.3901 11.9101C14.0527 11.9126 13.7242 12.0184 13.4489 12.2133C13.1735 12.4082 12.9645 12.6828 12.8501 13.0001C12.7718 13.2351 12.7379 13.4827 12.7501 13.7301V18.7301H9.75006C9.75006 18.7301 9.75006 10.5501 9.75006 9.73014H12.7501V11.0001C13.0226 10.5272 13.419 10.1376 13.8965 9.87334C14.374 9.60902 14.9146 9.47999 15.4601 9.50014C17.4601 9.50014 18.9101 10.7901 18.9101 13.5601V18.7401Z" fill="#414141"/>
                        </svg>
                    </div>
                </div>
                <div class="footer-credits-1 text-center">
                    2023. TradersUnited. All rights reserved
                </div>
            </div>
            <div class="col-12 disclaimer">
                <div class="disclaimer-text">
                    Disclaimer: Trading financial instruments may not be suitable for all investors and always involve high risks, including, but not limited to, losing all or part of your investments. Some financial instruments and/or assets may also carry more risks than others. 70% to 90% of traders worldwide lose money annually when trading.
                    Users are advised by TRU that any trading information and data found on this website is not necessarily in real-time or accurate. The educational content on this website is not necessarily provided by market experts or should be taken as professional trading advice. Moreover, while said contents may be representative of current trends and/or sentiments at the time of writing, markets are subject to constant changes and fluctuations and can make some of these contents obsolete, misleading, or inaccurate. Users are advised always to verify the accuracy of the content they are reading.
                    All content on this website, including, but not limited to, articles, charts, tables, and images, are intellectual properties of TRU. The distribution, reproduction, and/or modification of these, in any way or form, without prior and express permission from TRU, is strictly prohibited.
                    TRU generates revenues through advertisements on its website, selling trading resources, membership subscriptions, and acting as a third-party intermediary between traders and other financial service providers. It may also receive commissions from external brokerage firms if users sign up for a brokerage firm’s platform using TRU’s portal.
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->


    
    <script src="<?php echo e(asset ('assets/js/bootstrap.js')); ?>"></script>


</body>

</html><?php /**PATH C:\Users\SysplexUser\Desktop\laravel\example-app\resources\views/header/header.blade.php ENDPATH**/ ?>