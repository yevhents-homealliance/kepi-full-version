<!doctype html>
<html lang="uk">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> — знайди свого майстра</title>
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    </head>




    <body>


        @include('part.header')



        <main>
            <section class="hero">
                <div class="container hero-grid">
                    <div>
                        <span class="eyebrow">Майстри поруч</span>
                        <h1>Знайди свого майстра на всі випадки життя</h1>
                        <p>Ремонт, побут, краса, техніка, авто та багато іншого. Швидко, зручно, надійно.</p>
                        <form class="searchbar" data-search>
                            <span>⌕</span>
                            <input placeholder="Що потрібно зробити?">
                            <span class="where">Фастів</span>
                            <button class="btn btn-orange">Знайти</button>
                        </form>
                    </div>
                    <div class="hero-art">
                        <div class="capy">
                            <img class="capy-img" src="{{ asset('img/hero.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="container">
                    <div class="section-head">
                        <h2>Популярні категорії</h2>
                        <a class="muted" href="categories.html">Всі категорії →</a>
                    </div>
                    <div class="grid-8">
                        <a class="category" href="search.html">
                            <div class="category-icon">🔧</div>
                            <span>Будівництво<br>та ремонт</span>
                        </a>
                        <a class="category" href="search.html">
                            <div class="category-icon">🔌</div>
                            <span>Електрика</span>
                        </a>
                        <a class="category" href="search.html">
                            <div class="category-icon">💧</div>
                            <span>Сантехніка</span>
                        </a>
                        <a class="category" href="search.html">
                            <div class="category-icon">🖌️</div>
                            <span>Оздоблення</span>
                        </a>
                        <a class="category" href="search.html">
                            <div class="category-icon">🚗</div>
                            <span>Авто</span>
                        </a>
                        <a class="category" href="search.html">
                            <div class="category-icon">💻</div>
                            <span>Комп'ютери</span>
                        </a>
                        <a class="category" href="search.html">
                            <div class="category-icon">💇</div>
                            <span>Краса</span>
                        </a>
                        <a class="category" href="categories.html">
                            <div class="category-icon">•••</div>
                            <span>Інше</span>
                        </a>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="container">
                    <div class="section-head">
                        <h2>Нещодавно додані майстри</h2>
                        <a class="muted" href="search.html">Дивитись усіх →</a>
                    </div>
                    <div class="cards">
                        <a class="card" href="profile.html">
                            <div class="photo" style=""></div>
                            <div class="card-body">
                                <h3>Олександр Петренко</h3>
                                <div class="role">Плиточник</div>
                                <div class="meta">
                                    <span class="rating">★ 4.9</span>
                                    <span class="price">Від 500 грн</span>
                                </div>
                                <div class="status">● Онлайн</div>
                            </div>
                        </a>
                        <a class="card" href="profile.html">
                            <div class="photo" >
                                <img src="{{ asset('img/logo-removebg-preview.png') }}" alt="" srcset="">
                            </div>
                            <div class="card-body">
                                <h3>Дмитро Коваленко</h3>
                                <div class="role">Електрик</div>
                                <div class="meta">
                                    <span class="rating">★ 4.8</span>
                                    <span class="price">Від 400 грн</span>
                                </div>
                                <div class="status">● Онлайн</div>
                            </div>
                        </a>
                        <a class="card" href="profile.html">
                            <div class="photo" style="background-image:url('https://images.unsplash.com/photo-1515377905703-c4788e51af15?w=700')"></div>
                            <div class="card-body">
                                <h3>Марія Соколовська</h3>
                                <div class="role">Косметолог</div>
                                <div class="meta">
                                    <span class="rating">★ 4.9</span>
                                    <span class="price">Від 600 грн</span>
                                </div>
                                <div class="status">● Онлайн</div>
                            </div>
                        </a>
                        <a class="card" href="profile.html">
                            <div class="photo" style="background-image:url('https://images.unsplash.com/photo-1621905252507-b35492cc74b4?w=700')"></div>
                            <div class="card-body">
                                <h3>Ігор Мельник</h3>
                                <div class="role">Монтаж кондиціонерів</div>
                                <div class="meta">
                                    <span class="rating">★ 4.7</span>
                                    <span class="price">Від 700 грн</span>
                                </div>
                                <div class="status">● Онлайн</div>
                            </div>
                        </a>
                    </div>
                </div>
            </section>

            <section class="section" id="how">
                <div class="container how">
                    <div class="section-head">
                        <h2>Як це працює?</h2>
                        <a class="muted" href="#">Детальніше →</a>
                    </div>
                    <div class="steps">
                        <div class="step">
                            <div class="num">1</div>
                            <div>
                                <h3>Знайди майстра</h3>
                                <p>Використай пошук або обери категорію. Переглядай профілі, відгуки та ціни.</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="num">2</div>
                            <div>
                                <h3>Напиши або подзвони</h3>
                                <p>Обговори деталі, постав питання та домовся про роботу.</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="num">3</div>
                            <div>
                                <h3>Замов роботу</h3>
                                <p>Зустрінься з майстром, виконай роботу та залиш відгук.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="container cta">
                    <div>
                        <h2>Хочеш бути майстром ?</h2>
                        <p class="cta-text">Долучайся до спільноти та знаходь нових клієнтів щодня.</p>
                        <a class="btn btn-dark" href="profile.html">Стати майстром</a>
                    </div>
                    <div class="phone">
                        <div class="mini-logo">
                            <img class="mini-logo-img" src="{{ asset('img/logo-removebg-preview.png') }}" alt="">
                            <h5 class="mini-title">
                                Kepi
                            </h5>
                        </div>
                        Майстри поруч.<br><b>Завжди.</b>
                        <div class="phone-search"></div>
                        <div class="phone-search" style="width:70%"></div>
                    </div>
                </div>
            </section>
        </main>

        @include('part.footer')

    </body>
</html>
