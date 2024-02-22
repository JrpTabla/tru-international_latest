<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset ('assets/css/bootstrap.css') }}">

    <link rel="shortcut icon" href="{{ asset ('assets/images/favicon.ico') }}" type="image/x-icon"/>

    
    <link rel="stylesheet" href="{{ asset ('assets/css/user/user_header.css') }}">



    

</head>
<body>
    
<div class="side-navbar">
    <div class="side-navbar-img-div">
        <img src="{{ asset ('assets/images/user/user_nav/logo.png') }}" alt="" srcset="">
    </div>

    <div class="side-navbar-nav-link-div">
        
        <a class="side-navbar-nav-link" href="/dashboard">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18" fill="none" class="side-nav-svg my-auto">
                <path d="M0 18V6L8 0L16 6V18H10V11H6V18H0Z"/>
            </svg>
            <div class="side-navbar-nav-link-text-div d-flex">
                <div class="side-navbar-nav-link-text my-auto">
                    Dashboard
                </div>
            </div>
        </a>
        <a class="side-navbar-nav-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20" fill="none" class="side-nav-svg my-auto">
                <path d="M0 17V15H2V8C2 6.61667 2.41667 5.38767 3.25 4.313C4.08333 3.23833 5.16667 2.534 6.5 2.2V0H9.5V2.2C10.8333 2.53333 11.9167 3.23767 12.75 4.313C13.5833 5.38833 14 6.61733 14 8V15H16V17H0ZM8 20C7.45 20 6.97933 19.8043 6.588 19.413C6.19667 19.0217 6.00067 18.5507 6 18H10C10 18.55 9.80433 19.021 9.413 19.413C9.02167 19.805 8.55067 20.0007 8 20Z"/>
            </svg>
            <div class="side-navbar-nav-link-text-div d-flex">
                <div class="side-navbar-nav-link-text my-auto">
                    Notification
                </div>
            </div>
        </a>
        <a class="side-navbar-nav-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="side-nav-svg my-auto">
                <path d="M2.85714 2.85714C2.85714 2.09938 3.15816 1.37266 3.69398 0.836838C4.2298 0.30102 4.95652 0 5.71429 0C6.47205 0 7.19877 0.30102 7.73459 0.836838C8.27041 1.37266 8.57143 2.09938 8.57143 2.85714C8.57143 3.6149 8.27041 4.34163 7.73459 4.87745C7.19877 5.41327 6.47205 5.71429 5.71429 5.71429C4.95652 5.71429 4.2298 5.41327 3.69398 4.87745C3.15816 4.34163 2.85714 3.6149 2.85714 2.85714ZM12.5414 5.12L12.6014 5.16571C13.2076 5.61501 13.9668 5.80631 14.7135 5.69787C15.4601 5.58944 16.1336 5.19006 16.5869 4.58691C17.0402 3.98375 17.2365 3.22579 17.133 2.47843C17.0295 1.73107 16.6345 1.05499 16.0344 0.597731C15.4342 0.140475 14.6776 -0.0608335 13.9296 0.0377388C13.1815 0.136311 12.5029 0.526761 12.0416 1.12388C11.5804 1.721 11.3741 2.4763 11.4678 3.22496C11.5614 3.97363 11.9474 4.65486 12.5414 5.12ZM7.52571 7.14286C7.70515 6.80309 7.95127 6.50301 8.24935 6.26056C8.54744 6.01811 8.89136 5.83827 9.26055 5.73181C9.62975 5.62535 10.0166 5.59445 10.398 5.64096C10.7794 5.68747 11.1475 5.81043 11.4803 6.00249C11.8131 6.19455 12.1038 6.45177 12.3348 6.75874C12.5659 7.06572 12.7327 7.41616 12.8253 7.78909C12.9178 8.16201 12.9341 8.54977 12.8733 8.92917C12.8125 9.30856 12.6758 9.6718 12.4714 9.99714C12.0782 10.623 11.4576 11.0722 10.7402 11.2502C10.0228 11.4282 9.26426 11.3212 8.62404 10.9517C7.98382 10.5822 7.51172 9.97898 7.30691 9.26873C7.1021 8.55848 7.18053 7.7965 7.52571 7.14286ZM2.14286 7.14286H5.95714C5.70325 7.86794 5.64804 8.64776 5.79726 9.40138C5.94648 10.155 6.29468 10.8549 6.80571 11.4286H6.42857C5.69205 11.4285 4.9735 11.656 4.37126 12.08C3.76903 12.504 3.31254 13.1037 3.06429 13.7971C2.58476 13.6045 2.13578 13.3432 1.73143 13.0214C0.657143 12.1571 0 10.88 0 9.28571C0 8.71739 0.225765 8.17235 0.627628 7.77049C1.02949 7.36862 1.57454 7.14286 2.14286 7.14286ZM13.5714 11.4286C15.1214 11.4286 16.4414 12.4157 16.9357 13.7971C17.4214 13.5986 17.87 13.34 18.2686 13.0214C19.3429 12.1571 20 10.88 20 9.28571C20 8.71739 19.7742 8.17235 19.3724 7.77049C18.9705 7.36862 18.4255 7.14286 17.8571 7.14286H14.0429C14.2 7.59 14.2857 8.07143 14.2857 8.57143C14.287 9.62588 13.8983 10.6436 13.1943 11.4286H13.5714ZM15.5529 14.1829C15.6571 14.4343 15.7143 14.7114 15.7143 15C15.7143 16.5943 15.0586 17.8714 13.9829 18.7357C12.9243 19.5857 11.5043 20 10 20C8.49571 20 7.07571 19.5857 6.01714 18.7357C4.94286 17.8714 4.28571 16.5943 4.28571 15C4.28496 14.7184 4.33987 14.4394 4.44729 14.1791C4.55472 13.9187 4.71253 13.6822 4.91166 13.4831C5.11079 13.284 5.34732 13.1261 5.60764 13.0187C5.86797 12.9113 6.14696 12.8564 6.42857 12.8571H13.5714C13.9959 12.857 14.4108 12.983 14.7635 13.219C15.1163 13.455 15.391 13.7905 15.5529 14.1829Z"/>
            </svg>
            <div class="side-navbar-nav-link-text-div d-flex">
                <div class="side-navbar-nav-link-text my-auto">
                    CommuniTrade
                </div>
            </div>
        </a>
        <a class="side-navbar-nav-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="side-nav-svg my-auto">
                <path d="M3.33 8L10 12L20 6L10 0L0 6H10V8H3.33ZM0 8V16L2 13.78V9.2L0 8ZM10 20L5 17L3 15.8V9.8L10 14L17 9.8V15.8L10 20Z"/>
            </svg>
            <div class="side-navbar-nav-link-text-div d-flex">
                <div class="side-navbar-nav-link-text my-auto">
                    Trade Geek
                </div>
            </div>
        </a>
        <a class="side-navbar-nav-link" href="/techhub">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="side-nav-svg my-auto">
                <path d="M14.1667 15.0001C13.2417 15.0001 12.5 15.7417 12.5 16.6667C12.5 17.1088 12.6756 17.5327 12.9882 17.8453C13.3008 18.1578 13.7247 18.3334 14.1667 18.3334C14.6087 18.3334 15.0327 18.1578 15.3452 17.8453C15.6578 17.5327 15.8334 17.1088 15.8334 16.6667C15.8334 16.2247 15.6578 15.8008 15.3452 15.4882C15.0327 15.1757 14.6087 15.0001 14.1667 15.0001ZM0.833374 1.66675V3.33341H2.50004L5.50004 9.65841L4.36671 11.7001C4.24171 11.9334 4.16671 12.2084 4.16671 12.5001C4.16671 12.9421 4.3423 13.366 4.65486 13.6786C4.96742 13.9912 5.39135 14.1667 5.83337 14.1667H15.8334V12.5001H6.18337C6.12812 12.5001 6.07513 12.4781 6.03606 12.4391C5.99699 12.4 5.97504 12.347 5.97504 12.2917C5.97504 12.2501 5.98337 12.2167 6.00004 12.1917L6.75004 10.8334H12.9584C13.5834 10.8334 14.1334 10.4834 14.4167 9.97508L17.4 4.58341C17.4584 4.45008 17.5 4.30841 17.5 4.16675C17.5 3.94573 17.4122 3.73377 17.256 3.57749C17.0997 3.42121 16.8877 3.33341 16.6667 3.33341H4.34171L3.55837 1.66675M5.83337 15.0001C4.90837 15.0001 4.16671 15.7417 4.16671 16.6667C4.16671 17.1088 4.3423 17.5327 4.65486 17.8453C4.96742 18.1578 5.39135 18.3334 5.83337 18.3334C6.2754 18.3334 6.69932 18.1578 7.01188 17.8453C7.32444 17.5327 7.50004 17.1088 7.50004 16.6667C7.50004 16.2247 7.32444 15.8008 7.01188 15.4882C6.69932 15.1757 6.2754 15.0001 5.83337 15.0001Z"/>
            </svg>
            <div class="side-navbar-nav-link-text-div d-flex">
                <div class="side-navbar-nav-link-text my-auto">
                    TechHub
                </div>
            </div>
        </a>
        <a class="side-navbar-nav-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none" class="my-auto">
                <path d="M15.6667 1H2.33333C1.97971 1 1.64057 1.14048 1.39052 1.39052C1.14048 1.64057 1 1.97971 1 2.33333V15.6667C1 16.0203 1.14048 16.3594 1.39052 16.6095C1.64057 16.8595 1.97971 17 2.33333 17H15.6667C16.0203 17 16.3594 16.8595 16.6095 16.6095C16.8595 16.3594 17 16.0203 17 15.6667V2.33333C17 1.97971 16.8595 1.64057 16.6095 1.39052C16.3594 1.14048 16.0203 1 15.6667 1Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path class="stroke" d="M7.66677 12.1111L9.889 13.8889L13.4446 9.44444M4.55566 5H13.4446M4.55566 8.55556H8.11122" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>    
            </svg>
            <div class="side-navbar-nav-link-text-div d-flex">
                <div class="side-navbar-nav-link-text my-auto">
                    Transactions
                </div>
            </div>
        </a>
        <a class="side-navbar-nav-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16" fill="none" class="my-auto">
                <path d="M13.1765 2.82353H15.0588V16H3.76471V2.82353H5.64706V1.88235C5.64706 1.38312 5.84538 0.904338 6.19839 0.551328C6.5514 0.198319 7.03018 0 7.52941 0H11.2941C11.7933 0 12.2721 0.198319 12.6251 0.551328C12.9782 0.904338 13.1765 1.38312 13.1765 1.88235V2.82353ZM16 2.82353H16.9412C17.4404 2.82353 17.9192 3.02185 18.2722 3.37486C18.6252 3.72787 18.8235 4.20665 18.8235 4.70588V14.1176C18.8235 14.6169 18.6252 15.0957 18.2722 15.4487C17.9192 15.8017 17.4404 16 16.9412 16H16V2.82353ZM2.82353 2.82353V16H1.88235C1.38312 16 0.904338 15.8017 0.551328 15.4487C0.198319 15.0957 0 14.6169 0 14.1176V4.70588C0 3.67059 0.847059 2.82353 1.88235 2.82353H2.82353ZM7.52941 1.88235V2.82353H11.2941V1.88235H7.52941Z"/>
            </svg>
            <div class="side-navbar-nav-link-text-div d-flex">
                <div class="side-navbar-nav-link-text my-auto">
                    Disputes
                </div>
            </div>
        </a>
        <a class="side-navbar-nav-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" class="my-auto">
                <path d="M5.12894 5.93403L5.74994 8.57903L5.12894 11.2125L7.44044 12.6385L8.85494 14.95L11.4999 14.329L14.1449 14.95L15.5594 12.6385L17.8709 11.2125L17.2499 8.57903L17.8709 5.93403L15.5709 4.50803L14.1449 2.19653L11.4999 2.82903L8.86644 2.20803L7.42894 4.50803L5.12894 5.93403ZM11.5114 13.225C10.2914 13.225 9.12142 12.7404 8.25875 11.8777C7.39608 11.0151 6.91144 9.84503 6.91144 8.62503C6.91144 7.40504 7.39608 6.23501 8.25875 5.37234C9.12142 4.50967 10.2914 4.02503 11.5114 4.02503C14.0414 4.02503 16.0999 6.08353 16.0999 8.61353C16.0999 11.1665 14.0414 13.225 11.5114 13.225ZM11.4884 12.075C9.57944 12.075 8.04994 10.534 8.04994 8.62503C8.04994 6.72753 9.57944 5.17503 11.4884 5.17503C13.3974 5.17503 14.9499 6.72753 14.9499 8.62503C14.9499 10.534 13.3974 12.075 11.4884 12.075ZM15.9044 13.34L14.4324 15.916L12.0404 15.3755L14.9499 22.08L16.5599 19.55H19.4349L15.9044 13.34ZM7.04944 13.4205L8.48694 16.008L10.9364 15.4215L8.04994 22.08L6.43994 19.55H3.56494L7.04944 13.4205Z"/>
            </svg>
            <div class="side-navbar-nav-link-text-div d-flex">
                <div class="side-navbar-nav-link-text my-auto">
                    TRU Rewards
                </div>
            </div>
        </a>
    </div>

    <button class="btn btn-upgrade-membership mx-auto">Upgrade Membership</button>

    <div class="side-navbar-nav-link-div">
        
        <a class="side-navbar-nav-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" class="my-auto">
                <path d="M7.96 12.8C8.24 12.8 8.4768 12.7032 8.6704 12.5096C8.864 12.316 8.96053 12.0795 8.96 11.8C8.96 11.52 8.86347 11.2832 8.6704 11.0896C8.47733 10.896 8.24053 10.7995 7.96 10.8C7.68 10.8 7.44347 10.8968 7.2504 11.0904C7.05733 11.284 6.96053 11.5205 6.96 11.8C6.96 12.08 7.0568 12.3168 7.2504 12.5104C7.444 12.704 7.68053 12.8005 7.96 12.8ZM7.24 9.72H8.72C8.72 9.28 8.77013 8.93333 8.8704 8.68C8.97067 8.42667 9.25387 8.08 9.72 7.64C10.0667 7.29333 10.34 6.9632 10.54 6.6496C10.74 6.336 10.84 5.95947 10.84 5.52C10.84 4.77333 10.5667 4.2 10.02 3.8C9.47333 3.4 8.82667 3.2 8.08 3.2C7.32 3.2 6.70347 3.4 6.2304 3.8C5.75733 4.2 5.4272 4.68 5.24 5.24L6.56 5.76C6.62667 5.52 6.7768 5.26 7.0104 4.98C7.244 4.7 7.60053 4.56 8.08 4.56C8.50667 4.56 8.82667 4.6768 9.04 4.9104C9.25333 5.144 9.36 5.40053 9.36 5.68C9.36 5.94667 9.28 6.1968 9.12 6.4304C8.96 6.664 8.76 6.88053 8.52 7.08C7.93333 7.6 7.57333 7.99333 7.44 8.26C7.30667 8.52667 7.24 9.01333 7.24 9.72ZM8 16C6.89333 16 5.85333 15.7901 4.88 15.3704C3.90667 14.9507 3.06 14.3805 2.34 13.66C1.62 12.94 1.05013 12.0933 0.6304 11.12C0.210667 10.1467 0.000533333 9.10667 0 8C0 6.89333 0.210133 5.85333 0.6304 4.88C1.05067 3.90667 1.62053 3.06 2.34 2.34C3.06 1.62 3.90667 1.05013 4.88 0.6304C5.85333 0.210667 6.89333 0.000533333 8 0C9.10667 0 10.1467 0.210133 11.12 0.6304C12.0933 1.05067 12.94 1.62053 13.66 2.34C14.38 3.06 14.9501 3.90667 15.3704 4.88C15.7907 5.85333 16.0005 6.89333 16 8C16 9.10667 15.7899 10.1467 15.3696 11.12C14.9493 12.0933 14.3795 12.94 13.66 13.66C12.94 14.38 12.0933 14.9501 11.12 15.3704C10.1467 15.7907 9.10667 16.0005 8 16Z"/>
            </svg>
            <div class="side-navbar-nav-link-text-div d-flex">
                <div class="side-navbar-nav-link-text my-auto">
                    Help
                </div>
            </div>
        </a>
        <a class="side-navbar-nav-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="16" viewBox="0 0 13 16" fill="none" class="my-auto">
                <path d="M12.4286 6.85714H7.42857C6.97391 6.85714 6.53788 6.67653 6.21639 6.35504C5.8949 6.03355 5.71429 5.59751 5.71429 5.14286V0.142857C5.71429 0.104969 5.69923 0.0686328 5.67244 0.0418419C5.64565 0.015051 5.60932 0 5.57143 0H2.28571C1.6795 0 1.09812 0.240816 0.66947 0.66947C0.240816 1.09812 0 1.67951 0 2.28571V13.7143C0 14.3205 0.240816 14.9019 0.66947 15.3305C1.09812 15.7592 1.6795 16 2.28571 16H10.2857C10.8919 16 11.4733 15.7592 11.902 15.3305C12.3306 14.9019 12.5714 14.3205 12.5714 13.7143V7C12.5714 6.96211 12.5564 6.92578 12.5296 6.89898C12.5028 6.87219 12.4665 6.85714 12.4286 6.85714Z"/>
                <path d="M12.115 5.59239L6.97896 0.456318C6.96898 0.446389 6.95628 0.439634 6.94246 0.436903C6.92864 0.434172 6.91433 0.435586 6.90131 0.440967C6.8883 0.446349 6.87716 0.455458 6.86931 0.467149C6.86146 0.47884 6.85724 0.492592 6.85718 0.506676V5.14275C6.85718 5.2943 6.91738 5.43964 7.02454 5.54681C7.13171 5.65397 7.27705 5.71418 7.42861 5.71418H12.0647C12.0788 5.71412 12.0925 5.7099 12.1042 5.70204C12.1159 5.69419 12.125 5.68306 12.1304 5.67004C12.1358 5.65703 12.1372 5.64271 12.1345 5.62889C12.1317 5.61508 12.125 5.60238 12.115 5.59239Z"/>
            </svg>
            <div class="side-navbar-nav-link-text-div d-flex">
                <div class="side-navbar-nav-link-text my-auto">
                    Documentation
                </div>
            </div>
        </a>
        <a class="side-navbar-nav-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="my-auto">
                <path d="M5.81095 15.9204L5.49254 13.3731C5.32007 13.3068 5.15768 13.2272 5.00537 13.1343C4.85307 13.0415 4.70368 12.942 4.55721 12.8358L2.18905 13.8308L0 10.0498L2.04975 8.49751C2.03648 8.40464 2.02985 8.31522 2.02985 8.22925V7.69194C2.02985 7.60544 2.03648 7.51576 2.04975 7.42289L0 5.87065L2.18905 2.08955L4.55721 3.08458C4.70315 2.97844 4.85572 2.87894 5.01493 2.78607C5.17413 2.6932 5.33333 2.6136 5.49254 2.54726L5.81095 0H10.1891L10.5075 2.54726C10.6799 2.6136 10.8426 2.6932 10.9954 2.78607C11.1483 2.87894 11.2974 2.97844 11.4428 3.08458L13.8109 2.08955L16 5.87065L13.9502 7.42289C13.9635 7.51576 13.9701 7.60544 13.9701 7.69194V8.22846C13.9701 8.31496 13.9569 8.40464 13.9303 8.49751L15.9801 10.0498L13.791 13.8308L11.4428 12.8358C11.2969 12.942 11.1443 13.0415 10.9851 13.1343C10.8259 13.2272 10.6667 13.3068 10.5075 13.3731L10.1891 15.9204H5.81095ZM8.0398 10.7463C8.80929 10.7463 9.466 10.4743 10.01 9.93035C10.5539 9.3864 10.8259 8.72969 10.8259 7.9602C10.8259 7.19071 10.5539 6.534 10.01 5.99005C9.466 5.4461 8.80929 5.17413 8.0398 5.17413C7.25705 5.17413 6.59688 5.4461 6.0593 5.99005C5.52173 6.534 5.2532 7.19071 5.25373 7.9602C5.25373 8.72969 5.52252 9.3864 6.0601 9.93035C6.59768 10.4743 7.25758 10.7463 8.0398 10.7463Z"/>
            </svg>
            <div class="side-navbar-nav-link-text-div d-flex">
                <div class="side-navbar-nav-link-text my-auto">
                    Account Settings
                </div>
            </div>
        </a>
        <a class="side-navbar-nav-link" onclick="logout()">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="my-auto">
                <path d="M1.77778 16C1.28889 16 0.870519 15.8261 0.522667 15.4782C0.174815 15.1304 0.000592593 14.7117 0 14.2222V1.77778C0 1.28889 0.174222 0.870519 0.522667 0.522667C0.871111 0.174815 1.28948 0.000592593 1.77778 0H8V1.77778H1.77778V14.2222H8V16H1.77778ZM11.5556 12.4444L10.3333 11.1556L12.6 8.88889H5.33333V7.11111H12.6L10.3333 4.84444L11.5556 3.55556L16 8L11.5556 12.4444Z"/>
            </svg>
            <div class="side-navbar-nav-link-text-div d-flex">
                <div class="side-navbar-nav-link-text my-auto">
                    Logout
                </div>
            </div>
        </a>
    </div>

    <div class="user-details d-flex">
        <div class="user-details-img-div">
            <img src="" alt="" class="user-details-img">
        </div>
        <div class="user-details-info-div">
            <div class="user-name"><span class="placeholder col-12"></span></div>
            <div class="status">
                <div class="user-verification">
                    <span class="placeholder col-12 h-100"></span>
                </div>
                <div class="user-prime">
                    <span class="placeholder col-12 h-100"></span>
                </div>
                <div class="user-membership">
                    <span class="placeholder col-12 h-100"></span>
                </div>
            </div>
            <div class="user-id">
                <span class="placeholder col-6"></span>
            </div>
        </div>
    </div>
</div>


    
@yield('content')
    

<script>

get_user_info();

// Function to highlight the selected list item based on the current page
function highlightCurrentPage() {
    // Get the current page URL or identifier
    var currentPage = window.location.pathname; // You may need to customize this based on your routing logic

    // Remove any existing 'active-sidenav-link' class
    var sidenavLinks = document.querySelectorAll('.side-navbar-nav-link-div a');
    sidenavLinks.forEach(function(link) {
        link.classList.remove('active-side-nav-link');
    });

    // Add 'active-sidenav-link' class to the corresponding link based on the current page
    sidenavLinks.forEach(function(link) {
        if (link.getAttribute('href') === currentPage) {
            link.classList.add('active-side-nav-link');
        }
    });
}

// Call the function when the page loads
window.addEventListener('load', highlightCurrentPage);



function logout() {
    // Send an AJAX request to the server

    fetch('/logout', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    })
    .then(response => {
        // if (response.ok) {
        //     // Handle successful logout
        //     console.log('Logout successful');
        // } else {
        //     // Handle errors
        //     console.error('Logout failed');
        // }
    })
    .catch(error => {
        console.error('Error:', error);
    });
    
}

function get_user_info() {
    // Send an AJAX request to the server
    fetch('/get_user_info', {
        method: 'GET',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    })
    .then(response => {
        // Check if the response is successful
        if (response.ok) {
            return response.json(); // Extract the response body as JSON
        }
        throw new Error('Network response was not ok.');
    })
    .then(data => {

        // Update the content of the user-name div with the first name and last name
        document.querySelector('.user-name').innerText = data.firstName + ' ' + data.lastName;

        // Update the content of the user-name div with the first name and last name
        document.querySelector('.user-id').innerText = "Member ID:" + ' ' + data.userId;

        document.querySelector('.user-prime').classList.add('primed');
        document.querySelector('.user-prime').innerText = 'Prime';

        console.log(data.emailVerifiedAt);

        // Check if email is verified
        if (data.emailVerifiedAt == '-000001-11-30T00:00:00.000000Z') {
            // If email is not verified
            document.querySelector('.user-verification').classList.add('unverified');
            document.querySelector('.user-verification').innerText = 'Unverified';
        } else {
            // If email is verified
            document.querySelector('.user-verification').classList.add('verified');
            document.querySelector('.user-verification').innerText = 'Verified';
        }
         // Update the content of the user-name div with the first name and last name
         document.querySelector('.user-membership').innerText = "TRU Member";
    })

    .catch(error => {
        console.error('Error:', error);
    });


}

</script>

</body>

</html>