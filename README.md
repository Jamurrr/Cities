# Cities
 Сайт с городами России. Используется api https://api.hh.ru/areas
 # Инстуркция по установке
 1. Копируйте репозиторий
 2. Создайте .env файл и настройте базу данных и пропишите php artisan key:generate
 3. Запустите миграции php artisan migrate
 4. Запустите сервер.
    
 # Маршруты
 1. /news
 2. /about
 3. /{название_города}
 4. / (Главная)

# API
1. /api/cities - добавление
2. /api/cities/{id} - удаление
