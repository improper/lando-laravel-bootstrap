# Lando/Laravel 5.8 Bootstrap

## Services

- Redis 5 for Cache & Sessions
- MySQL 5.7
- PHP 7.3
- NGINX (default) & Apache

## Up & Running

1. Clone repository
1. Copy `.env.sample` to `.env`
1. Execute: `lando artisan key:generate`
1. Execute: `lando composer install`
1. Lando start

> (Optional) Check that mailhog is receiving email @ https://mail.mylaravel.lndo.site: `lando artisan mailhog:test`

Enjoy!
