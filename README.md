# check_test

## 環境構築

### dockerビルド
1. 教材のファイルをコピペ
2. docker-compose up -d --build
  
## laravel環境構築
1. docker-compose exec php bash
2. composer install
3. .envファイル編集
4. php artisan migrate
5. php artisan db:seed
  
## 使用技術
・php:8.3-fpm  
・Laravel Framework 8.83.29  
・nginx:1.21.1  
・mysql:8.0.26  
・phpmyadmin

## ER図

![ER-diagram drawio](https://github.com/user-attachments/assets/9a568180-78f7-4860-9366-05c6c90de1af)

## URL
・開発環境：http://localhost/  
・phpMyadmin：http://localhost:8080/
