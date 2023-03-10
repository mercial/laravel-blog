@extends('frontend.main_master')
@section('main')

@section('title')
Обо мне | Блог Владислава Озоровского
@endsection
<main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb__wrap">
                <div class="container custom-container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-md-10">
                            <div class="breadcrumb__wrap__content">
                                <h2 class="title">Обо мне</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Главная</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Обо мне</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="breadcrumb__wrap__icon">
                    <ul>
                        <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon01.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon02.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon03.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon04.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon05.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon06.png') }}" alt=""></li>
                    </ul>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- about-area -->
<section class="about about__style__two">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6">
<div class="about__image">
    <img src="{{ $aboutpage->about_image }}" alt="">
</div>
</div>
<div class="col-lg-6">
<div class="about__content">
    <div class="section__title">
        <span class="sub-title">Обо мне</span>
        <h2 class="title">{{ $aboutpage->title }}</h2>
    </div>
    <div class="about__exp">
        <div class="about__exp__icon">
            <img src="{{ asset('frontend/assets/img/icons/about_icon.png') }} " alt="">
        </div>
        <div class="about__exp__content">
            <p><span>{{ $aboutpage->short_title }}</span> </p>
        </div>
    </div>
    <p class="desc">{{ $aboutpage->short_description }}</p>
    <a href="about.html" class="btn">Скачать моё резюме</a>
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="about__info__wrap">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button"
                role="tab" aria-controls="about" aria-selected="true">Обо мне</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="skills-tab" data-bs-toggle="tab" data-bs-target="#skills" type="button"
                role="tab" aria-controls="skills" aria-selected="false">Скилы</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="awards-tab" data-bs-toggle="tab" data-bs-target="#awards" type="button"
                role="tab" aria-controls="awards" aria-selected="false">Награды</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="education-tab" data-bs-toggle="tab" data-bs-target="#education" type="button"
                role="tab" aria-controls="education" aria-selected="false">Образование</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">
            <p class="desc">

{!! $aboutpage->long_description !!}

             </p>
                </li>
            </ul>
        </div>
        <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
            <div class="about__skill__wrap">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about__skill__item">
                            <h5 class="title">Скилл 1</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"><span class="percentage">70%</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about__skill__item">
                            <h5 class="title">Скилл 2</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"><span class="percentage">90%</span></div>
                            </div>
                                                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about__skill__item">
                            <h5 class="title">Скилл 3</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span class="percentage">50%</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about__skill__item">
                            <h5 class="title">Скилл 4</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"><span class="percentage">65%</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about__skill__item">
                            <h5 class="title">Скилл 5</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"><span class="percentage">80%</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about__skill__item">
                            <h5 class="title">Скилл 6</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"><span class="percentage">45%</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about__skill__item">
                            <h5 class="title">Скилл 7</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"><span class="percentage">55%</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about__skill__item">
                            <h5 class="title">Скилл 8</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percentage">85%</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="awards" role="tabpanel" aria-labelledby="awards-tab">
            <div class="about__award__wrap">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-sm-9">
                        <div class="about__award__item">
                            <div class="award__logo">
                                <img src="assets/img/images/awards_01.png" alt="">
                            </div>
                            <div class="award__content">
                                <h5 class="title">Заголовок 1</h5>
                                <p>Текст 1</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-9">
                        <div class="about__award__item">
                            <div class="award__logo">
                                <img src="assets/img/images/awards_02.png" alt="">
                            </div>
                            <div class="award__content">
                                <h5 class="title">Заголовок 2</h5>
                                <p>Текст 2</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-9">
                        <div class="about__award__item">
                            <div class="award__logo">
                                <img src="assets/img/images/awards_03.png" alt="">
                            </div>
                            <div class="award__content">
                                <h5 class="title">Заголовок 3</h5>
                                <p>Текст 3</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-9">
                        <div class="about__award__item">
                            <div class="award__logo">
                                <img src="assets/img/images/awards_04.png" alt="">
                            </div>
                            <div class="award__content">
                                <h5 class="title">Заголовок 4</h5>
                                <p>Текст 4</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab">
            <div class="about__education__wrap">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about__education__item">
                            <h3 class="title">Заголовок </h3>
                            <span class="date">123</span>
                            <p>Текст</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about__education__item">
                            <h3 class="title">Заголовок</h3>
                            <span class="date">123</span>
                            <p>Текст</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about__education__item">
                            <h3 class="title">Заголовок</h3>
                            <span class="date">123</span>
                            <p>Текст.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about__education__item">
                            <h3 class="title">Заголовок</h3>
                            <span class="date">123</span>
                            <p>Текст.</p>
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
</section>
<!-- about-area-end -->

        </main>


@endsection
