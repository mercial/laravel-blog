@extends('frontend.main_master')
@section('main')

@section('title')
Напишите мне | Блог Владислава Озоровского
@endsection

 <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb__wrap">
                <div class="container custom-container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-md-10">
                            <div class="breadcrumb__wrap__content">
                                <h2 class="title">Напишите мне</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Главная</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Контакты</li>
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

            <!-- contact-map -->

<br>
            <!-- contact-area -->
            <div class="contact-area">
                <div class="container">
                    <form method="post" action="{{ route('store.message') }}" class="contact__form">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <input  name="name" type="text" placeholder="Ваше имя*">
                            </div>
                            <div class="col-md-6">
                                <input name="email" type="email" placeholder="Введите Ваш email*">
                            </div>
                            <div class="col-md-6">
                                <input  name="subject" type="text" placeholder="Тема*">
                            </div>
                            <div class="col-md-6">
                                <input  name="phone" type="text" placeholder="Ваш номер телефона*">
                            </div>
                        </div>
                        <textarea name="message" id="message" placeholder="Введите Ваше сообщение*"></textarea>
                        <button type="submit" class="btn">Отправить</button>
                    </form>
                </div>
            </div>
            <!-- contact-area-end -->





        </main>









@endsection
