<!-- Навигация по админке -->

<section class="side">
    <h3>Навигация</h3>
    <nav id="adminNav" class="sideNav">
        <ul>
            <li>
                <a href="" title="" class="adminLink">Профиль</a>
            </li>
            <li>
                <a href="" title="" class="adminLink">Заказы</a>
                <span class="conter">( 0 )</span>
            </li>
        </ul>
    </nav>
</section>

<!-- Центральная часть с функционалом и информацией + формы -->

<section class="content">
    <h1>{{ Имя }} {{ Фамилия }}: кабинет покупателя.</h1>
    <!-- Профиль (личная информация и контакты ) -->
    <section id="artisanProfile" class="adminTab">
        <h2>Профиль. Личная информация и контакты.</h2>
        <div class="adminBox">

        </div>

    </section>

    <!-- Список закзов мастера -->

    <section id="artisanOrders" class="adminTab">
        <h2>Список заказов:</h2>
        <div class="adminBox">
        </div>
    </section>

    <!-- Список опубликованных товаров мастера -->

    <section id="artisanProductsList" class="adminTab">
        <h2>Мои товары <span class="counter">(0)</span>:</h2>
        <div class="adminBox">
        </div>
    </section>
</section>
