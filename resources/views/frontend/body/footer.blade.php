@php
$allfooter = App\Models\Footer::find(1);
@endphp
<footer class="footer">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-4">
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">Напишите мне</h5>
                        <h4 class="title"><a target="_blank" href="{{ url('https://wa.me/+79964117692') }}">{{ $allfooter->number }}</a></h4>
                    </div>
                    <div class="footer__widget__text">
                        <p>{{ $allfooter->short_description }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">Мой адрес</h5>
                        <h4 class="title">Россия</h4>
                    </div>
                    <div class="footer__widget__address">
                        <p>{{ $allfooter->adress }}</p>
                        <a href="mailto:{{ $allfooter->email }}" class="mail">{{ $allfooter->email }}</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">Мои соцсети</h5>
                        <h4 class="title">Мои соцсети</h4>
                    </div>
                    <div class="footer__widget__social">
                        <p>Лорем. <br> Лорем.</p>
                        <ul class="footer__social__list">
                            <li><a target="_blank" href="{{ $allfooter->facebook }}"><i class="fab fa-telegram"></i></a></li>
                            <li><a target="_blank" href="{{ $allfooter->twitter }}"><i class="fab fa-vk"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright__wrap">
            <div class="row">
                <div class="col-12">
                    <div class="copyright__text text-center">
                        <p>{{ $allfooter->copyright }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
