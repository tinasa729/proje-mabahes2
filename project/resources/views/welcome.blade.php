<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <!-- Styles -->

        <style>
        .link{
            width:7.3rem;
            text-align:center;
        }
        .link:hover{
                background-color:orange;
                
        }
        #color-white:hover{
            color:white;
        }
        #main-div{
            text-transform: uppercase;
            background-image: linear-gradient(to right, red, orange);
            -webkit-background-clip: text;
            color: transparent;
            transition: all .5s;
            margin-bottom:5rem;
            display: inline-block;
            letter-spacing: .15rem;
            font-weight: 750;
        }

        #main-div:hover{
            transform:scale(1.1);
            text-shadow: .5rem 1rem 2rem rgb(black, .4);
        }
        #aboutbook p{
            padding:3rem;
        }
        .composition{
            position: relative;
        }
        .composition__photo {
        width: 40%;
        border-radius: .2rem;
        position: absolute;
        z-index: 10;
        transition: all .4s;
        outline-offset: 1.5rem;
        }
        .composition__photo--p1{
            left: 5.5rem;
            top: .5rem;
        }
        .composition__photo--p2{
            right: 4.5rem;
            top: 2rem;
        }
        .composition__photo--p3{
            left: 10rem;
            top: 10rem;
            }

        .composition__photo:hover{
            outline: 1.5rem solid $color-primary-dark;
            transform: scale(1.08) translateY(-.2rem);
            box-shadow: 0 2.5rem 4rem rgb(black, .5);
            z-index: 20;
        }
        .img{
            width: 20rem;
            height:25rem;
            padding:2rem;
            border-radius:2.2rem; 
        }
        
        .btn-card{
            margin-top:2rem;
            margin-left:1rem;
            outline:none;
            border: none;
            border-radius:.5rem;
            width:10rem;
            background-color:orange;
            cursor: pointer;
            padding:.5rem;
            margin-bottom:3rem;
        }
        .btn-card:hover{
            color:white;
        }
        .off{
            background-color:red;
            width:70px;
            height:30px;
            clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);
            margin-top:2rem;
            margin-left:2rem;
            position: absolute;
            text-align:center;
            color:white;
        }
        .animate{
            transition: all .6s;
        }
        .animate:hover{
            transform: scale(1.08) translateY(-.2rem);
        }
        </style>
    </head>
    <body>
    <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="http://dl2.jsu.ac.ir/index.php/s/aVtPkLJmc3UWjn9/download" alt="" style="height: 70px;width:70px;">
                        {{-- {{ config('app.name', 'Laravel') }} --}}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item" >
                <a class="nav-link link rounded" id="color-white" aria-current="page" href="{{ route('login') }}">ورود</a>
                </li>
                <li class="nav-item">
                <a class="nav-link link rounded" id="color-white" href="{{ route('register') }}">ثبت نام</a>
                </li>
                <li class="nav-item">
                <a class="nav-link link rounded" id="color-white"  href="{{ url('products') }} ">محصولات</a>
                </li>
                <li class="nav-item">
                <a class="nav-link link rounded" id="color-white"  href="{{ url('RequestBook') }} "> درخواست کتاب</a>
                </li>
                <li class="nav-item">
                <a class="nav-link link rounded" id="color-white"  href="{{ url('cart') }} ">سبد خرید</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2 rounded-pill" type="search" aria-label="Search">
                <button class="btn btn-outline-success rounded-pill" type="submit">جستوجو</button>
            </form>
            </div>
        </div>
    </nav>
    
    

    <section class="section mt-5 p-5 border-bottom">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div id="main-div">
                    <h2>
                        بهترین دوست شما ، کتاب است
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
        <div class="col-lg-12 col-xl-6 col-md-12 shadow bg-light rounded" id="aboutbook">
        <p>به گزارش بازرگانی خبرگزاری مهر، تأثیر کتابخوانی بر ارتقای فرهنگ، علم و اقتصاد ملت‌ها بر کسی پوشیده نیست. چرا باید کتاب بخوانیم؟ سرانه مطالعه در کشورهای توسعه یافته همواره بیشتر از کشورهای فقیر و جهان سوم بوده و اگر بگوییم رونق و رشد خود را مدیون
            خواندن کتاب هستند بیراه نگفته ایم. منظور از خواندن کتاب، فقط کتاب دانشگاهی و درسی نیست. شما با مطالعه یک کتاب تحلیل تکنیکال و تحلیل بنیادی سهام می‌توانید فرصت ورود به بازار بورس ایران را به دست آورید و بدون داشتن تحصیلات دانشگاهی سرمایه خود
            را چندین برابر کنید. کتاب‌های تاریخی این امکان را به شما می‌دهند که در زمان سفر کنید و با درس گرفتن از گذشته، بینش عمیق‌تری نسبت به وقایع پیش رو داشته باشید. کتاب‌های داستانی عمیق‌ترین و بهترین درک نویسنده از زندگی را در خود جای داده است و
            به ما این امکان را می‌دهد از دید فرد دیگری به مسائل بنگریم و زندگی‌های دیگری را تجربه کنیم.
        </p>
        </div>
        <div class="col-lg-6 col-md-6 d-none d-xl-block">
            <div class="composition ">
                <img src="http://dl2.jsu.ac.ir/index.php/s/P9ctspFuAHJdWZH/download" alt="photo 1" class="composition__photo composition__photo--p1 shadow-lg">
                <img src="http://dl2.jsu.ac.ir/index.php/s/6GAQ1jqlRqjkLUI/download" alt="photo 2" class="composition__photo composition__photo--p2 shadow-lg">
                <img src="http://dl2.jsu.ac.ir/index.php/s/sVfcH29hqJtcJey/download" alt="photo 3" class="composition__photo composition__photo--p3 shadow">
            </div>
        </div>
        </div>
    </section>

    <section class=" border-bottom">
    <div  class="mt-3 p-5">
    <div class="row">
            <div class="col-lg-12 text-center">
                <div id="main-div">
                    <h2>
                   خرید آنلاین ، سریع تر و ارزان تر
                    </h2>
                </div>
            </div>
        </div>

        <div class="row text-center">

            <div class="col-sm col-md col-lg">
                <figure>
                <image src="https://dl2.jsu.ac.ir/index.php/s/Nq9jozVuCHpxzB1/download">
                </figure>
                <h5>در تهران تا دو روز بعد دریافت کنید</h5>
                <figcaption>
                سفارشات از طریق پیک مینو و با هزینه‌ای تقریبا برابر با نصف هزینه پیک آزاد ارسال می‌شود.
                </figcaption>
            </div>

            <div class="col-sm col-md col-lg mb-5">
                <figure>
                <image src="https://dl2.jsu.ac.ir/index.php/s/08RWHlNDtyq3Jj4/download">
                </figure>
                <h5>در سایر شهرها 72 ساعت بعد دریافت کنید</h5>
                <figcaption>
                سفارشات سایر شهرها از طریق پست پیشتاز ارسال شده و 72 ساعت کاری بعد از ثبت سفارش ارسال می‌شود.
                </figcaption>
            </div>
            <div class="col-sm col-md col-lg">
                <figure>
                <image src="https://dl2.jsu.ac.ir/index.php/s/Nt0X9TTSuhztkmB/download">
                </figure>
                <h5>کتاب ها را ورق زده و انتخاب کنید</h5>
                <figcaption>    
                خلاصه کتاب ها را به صورت رایگان دانلود کنید. صفحات مختلف آنرا مطالعه کرده و هوشمندانه انتخاب کنید.</figcaption>
                </figcaption>
            </div>
        </div>
    </div>
    </section>

    <section class=" border-bottom m-3">

    <div class="row">
            <div class="col-lg-12 text-center mt-5">
                <div id="main-div">
                    <h2>
                        بهترین تخفیفات
                    </h2>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-10 col-sm-7 col-md col-lg border shadow animate" style="margin-right:20px;">
                <figure>
                <div class="off">10%</div>
                <image src="https://dl2.jsu.ac.ir/index.php/s/M1gsbDKKRQdt7fS/download" class="img">
                </figure>
                <figcaption style="margin-left:4.5rem">    
                The Last Hours: Chain of Iron
                <br>
                </figcaption>
                
            </div>

        <div class="col-10 col-sm-7 col-md col-lg border shadow animate" style="margin-right:20px;">
                <figure>
                <div class="off">10%</div>
                <image src="https://dl2.jsu.ac.ir/index.php/s/6zbP5llh9FrwtFr/download" class="img">
                </figure>
                <figcaption style="margin-left:4.5rem">    
                The Last Hours: Chain of Iron
                <br>
                </figcaption>
        </div>
        <div class="col-10 col-sm-7 col-md col-lg border shadow animate" style="margin-right:20px;">
                <figure>
                <div class="off">15%</div>
                <image src="https://dl2.jsu.ac.ir/index.php/s/maYH6v8Bgbf14Tq/download" class="img">
                </figure>
                <figcaption style="margin-left:4.5rem">    
                The Last Hours: Chain of Iron
                <br>
                </figcaption>
        </div>
        <div class="col-10 col-sm-7 col-md col-lg border shadow animate" style="margin-right:20px;">
                <figure>
                <div class="off">20%</div>
                <image src="https://dl2.jsu.ac.ir/index.php/s/vRDoxPSa24bBxaQ/download" class="img">
                </figure>
                <figcaption style="margin-left:4.5rem">    
                The Last Hours: Chain of Iron
                <br>
                </figcaption>
        </div>

        </div>
    </section>

    </div>
    </body>
    <script src="{{asset('/js/app.js')}}"></script>
    @include('sweet::alert')
</html>
