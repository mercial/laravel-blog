<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Меню</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>Админ панель</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Настройки слайдера</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('home.slide') }}">Слайдер главной</a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Обо мне</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('about.page') }}">Страница обо мне</a></li>
                        <li><a href="{{ route('about.multi.image') }}">Добавить изображения</a></li>
                        <li><a href="{{ route('all.multi.image') }}">Все изображения</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Портфолио</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                      <li><a href="{{ route('all.portfolio') }}">Все портфолио</a></li>
                      <li><a href="{{ route('add.portfolio') }}">Добавить портфолио</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-circle-line"></i>
                        <span>Категории блога</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all.blog.category') }}">Категории блога</a></li>
                        <li><a href="{{ route('add.blog.category') }}">Добавить категорию</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Страницы блога</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all.blog') }}">Все страницы</a></li>
                        <li><a href="{{ route('add.blog') }}">Добавить страницу</a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Футер</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('footer.setup') }}">Настройки</a></li>


                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Сообщения </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('contact.message') }}">Сообщения с сайта</a></li>


                    </ul>
                </li>

  </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
