# stripe-php practice

## environment
- PHP 5.6.31
- Laravel 5.2


## usage

`$ composer install`

`$ cp .env.example .env`

//db使ってないので以下は任意  
`$ vi .env`    
`$ php artisan migrate`

## built-in server 
ビルドインサーバを立てる  
`$ php artisan serve`

ポート番号・ IP指定してビルドインサーバを立てる  
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
