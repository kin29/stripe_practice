# stripe-php practice

## environment
- PHP 5.6.30
- Laravel 5.2
- stripe


## usage

`$ git clone git@github.com:kin29/stripe_practice.git`

`$ cd stripe_practice`

`$ composer install`

`$ cp .env.example .env`

`$ vi .env`  
stirpeのダッシュボードで生成されている  
STRIPE_PUBLIC_KEY / STRIPE_SECRET_KEY を各々設定する。
  
※ db使ってないので以下は任意    
`$ php artisan migrate`

## built-in server 
ビルドインサーバ[http://localhost:8000/](http://localhost:8000/)を立てる  
`$ cd stripe_practice`  
`$ php artisan serve`  

ポート番号・ IP指定して、  
ビルドインサーバ[http://127.0.0.1:9999/](http://127.0.0.1:9999/)を立てる  
`$ php artisan serve　--host=127.0.0.1 --port=9999`

## エラー対処
### No supported encrypter found. The cipher and / or key length are invalid.   
`$ php artisan key:generate`

→ `.env`の`APP_KEY`を更新する。

### TokenMismatchException in VerifyCsrfToken.php line 67:  
→ POST先のURL(thanksページ)をCSRF保護の対象外にする  
  
app/Http/Middleware/VerifyCsrfToken.php
```
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'thanks' //追記
    ];
```
