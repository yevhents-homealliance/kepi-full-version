<!doctype html>
<html lang="uk">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Чати — kepi</title>
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    </head>
    <body>
        @include('part.header')

        <main class="page">
            <div class="container">
                <h1 class="page-title">Чати</h1>
                
                <div class="chat">
                    <aside class="chat-list">
                        <div class="chat-head">Повідомлення</div>
                        
                        <div class="chat-item">
                            <div class="chat-avatar" style="background-image:url('https://images.unsplash.com/photo-1621905251189-08b45d6a269e?w=200')"></div>
                            <div>
                                <b>Дмитро Коваленко</b>
                                <div class="muted">Так, звичайно...</div>
                            </div>
                        </div>

                        <div class="chat-item">
                            <div class="chat-avatar" style="background-image:url('https://images.unsplash.com/photo-1515377905703-c4788e51af15?w=200')"></div>
                            <div>
                                <b>Марія Соколовська</b>
                                <div class="muted">Дякую за деталі</div>
                            </div>
                        </div>
                    </aside>

                    <section class="chat-window">
                        <div class="chat-head">
                            Дмитро Коваленко <span class="status">● Онлайн</span>
                        </div>

                        <div class="messages">
                            <div class="bubble">Доброго дня! Зможете приїхати сьогодні на заміну розетки?</div>
                            <div class="bubble me">Так, зможу. Буду через 30 хвилин.</div>
                            <div class="bubble">Чудово, дякую!</div>
                            <div class="bubble me">Добре, без проблем.</div>
                        </div>

                        <form class="composer">
                            <input placeholder="Напишіть повідомлення...">
                            <button class="btn btn-orange">➤</button>
                        </form>
                    </section>
                </div>
            </div>
        </main>
    </body>
</html>