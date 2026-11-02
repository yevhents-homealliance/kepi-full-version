<!doctype html>
<html lang="uk">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Профіль майстра — kepi</title>

        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animation.css') }}">
        <link rel="stylesheet" href="{{ asset('css/popup.css') }}">


        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    </head>
    <body>



        @include('part.header')




        
        <main class="page">
            <div class="container">
                <div class="profile">
                    <section class="profile-main">
                        <div class="profile-top">
                            <div class="avatar" style="background-image:url('https://images.unsplash.com/photo-1621905251189-08b45d6a269e?w=500')"></div>
                            <div>
                                <h1>Дмитро Коваленко</h1>
                                <div class="role">Електрик · Київ</div>
                                <div class="rating" style="margin-top:8px">★ 4.8 <span class="muted">(42 відгуки)</span></div>
                                <div class="status">● Онлайн · відповідає швидко</div>
                            </div>
                        </div>

                        <div class="tags">
                            <span class="tag">⚡ Електрика</span>
                            <span class="tag">✓ Перевірений</span>
                            <span class="tag">🛡 Гарантія</span>
                        </div>

                        <div class="tabs">
                            <a class="active" href="#">Про майстра</a>
                            <a href="#">Послуги</a>
                            <a href="#">Відгуки (42)</a>
                        </div>

                        <div style="padding-top:24px">
                            <h3>Про майстра</h3>
                            <p class="muted" style="line-height:1.7">Професійний електрик з досвідом роботи понад 6 років. Виконую монтаж, ремонт та діагностику електромереж. Працюю акуратно та дотримуюсь техніки безпеки.</p>
                            
                            <h3 style="margin-top:28px">Послуги та ціни</h3>
                            <div class="price-row">
                                <span>Діагностика електромереж</span>
                                <b>від 400 грн</b>
                            </div>
                            <div class="price-row">
                                <span>Монтаж розеток і вимикачів</span>
                                <b>від 350 грн</b>
                            </div>
                            <div class="price-row">
                                <span>Заміна проводки</span>
                                <b>від 900 грн</b>
                            </div>
                        </div>
                    </section>





                    <aside class="profile-side">
                        <h3>Замовити роботу</h3>


                        <!---
                        <p class="muted">Опиши завдання — майстер зв’яжеться з тобою.</p>
                        <button class="btn btn-orange" style="width:100%;margin-top:10px">Написати майстру</button>
                        <button class="btn btn-outline" style="width:100%;margin-top:10px">☎ Подзвонити</button>
                        -->

                        <div class="profile-box">
                            <p class="muted">Постукай , і Кепі зв'яже тебе з майстром</p>
                            <button class="btn btn-orange openPopupBtn" style="width:100%;margin-top:10px">Тук-тук</button>
                        </div>


                        <hr style="border:0;border-top:1px solid var(--line);margin:25px 0">
                        <div class="muted">Місто</div>
                        <b>Київ та область</b>
                        <div class="muted" style="margin-top:18px">Досвід</div>
                        <b>6+ років</b>
                    </aside>
                </div>
            </div>
        </main>



        <!-- Поп-ап (додайте клас .is-open для демонстрації/показу вікна) -->
        <div class="popup-backdrop " id="myPopup">
            <div class="popup-window">
                
                <!-- Кнопка закриття -->
                <button class="popup-close-btn" aria-label="Закрити">
                <svg viewBox="0 0 24 24" fill="none">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
                </button>

                <!-- Шапка -->
                <div class="popup-header">
                <h3 class="popup-title">



                    <img class="popup-kepi" src="{{ asset('img/facekep.png') }}" alt="Avatar">
                    
                    <!-- Анімовані точки -->
                    <span class="typing-indicator" aria-label="Друкує повідомлення...">
                        <span class="typing-dot"></span>
                        <span class="typing-dot"></span>
                        <span class="typing-dot"></span>
                    </span>
                </h3>

                <div class="popup-body">
                    <p class="popup-dialog">
                        Короче, я дав майстру твій номер - <b>Чекай!</b>
                    </p>
                </div>

                <!-- Футер з кнопками -->
                <div class="popup-footer">
                <button class="btn-popup btn-popup-primary btn-popup-secondary ">всьо, чекаю</button>
                </div>

            </div>
        </div>



        
        
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/kepi_talk_popup.js') }}"></script>
    </body>
</html>