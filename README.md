確認テスト

Dockerビルド

1. git clone git@github.com:coachtech-material/laravel-docker-template.git
2. docker-compose up -d --build

Laravel環境構築

1. docker-compose exec php bash
2. composter install
3. .env.exampleファイルから.envを作成し、環境変数を変更
4. php artisan key:generate
5. php artisan migrate

使用技術
・PHP 8.3.10
・Laravel Framework 8.83.8
・MySQL 8.0.26

URL

・開発環境:http://localhost/
・phpMyAdmin:http://localhost:8080/
