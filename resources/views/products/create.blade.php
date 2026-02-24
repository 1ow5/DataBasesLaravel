<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание продукта</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
</head>
<body>
     <header class="flex justify-between">
        <h1>Интернет магазин</h1>
        <nav>
            <ul class="flex gap-4">
                <li>
                    <a href="{{route('products.index')}}">Главная</a>
                    <a href="{{route('products.create')}}">Создать продукт</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container mx-auto">
            <form action="{{route('products.store')}}" method="post">
                @csrf
                <input class="border-2" type="text" name="title" id="title" placeholder="Название продукта" required><br>
                <input class="border-2" type="number" step="any" name="price" id="price" placeholder="Цена" required><br>
                <textarea class="border-2" name="discription" id="discription" placeholder="Описание" required></textarea><br>
                <input type="submit" value="Создать">
            </form>
        </div>
    </main>
</body>
</html>