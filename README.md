# symfony-auth
Symfony authorization

1) В файле .env находящегося в корне проекта, в 32-й строке нужно отредактировать логин и пароль в соответствии
с тем какие логин и пароль установлены в базе данных MySQL. Если версия MySQL не 5.7, то тоже изменить.
DATABASE_URL="mysql://root:root@127.0.0.1:3306/symfony_auth?serverVersion=5.7&charset=utf8mb4"

2) Далее в терминале нужно ввести 2 команды
php bin/console doctrine:database:create
php bin/console doctrine:schema:update --force
название БД при создании будет взято из файла .env из 32-й строки

3) Запускаем php сервер
php bin/console server:run
и регистрируемся
