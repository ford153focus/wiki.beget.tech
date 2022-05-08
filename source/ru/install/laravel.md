---
categories: ['Установка и настройка']
layout: bootstrap-sticky-footer
title:  "Laravel"
description: ""
keywords: ['laravel']
---

Ниже перечисленные команды нужно выполнить через SSH-подключение. Подробнее о SSH вы можете найти в [официальной документации](https://beget.com/ru/kb/how-to/ssh).

## Переход в директорию сайта

```bash
cd ~/example.com/
```

Обратите внимание, что переходить в директорию `public_html` не нужно

## Выбор версии

Используем по-умолчанию самую свежую версию PHP (на момент написания статьи)

```bash
alias php='/usr/local/bin/php8.1'
echo '/usr/local/bin/php8.1 $@'  > ~/.local/bin/php
chmod +x ~/.local/bin/php
alias php='~/.local/bin/php'
```

## Установка Composer

Установим локально свежую версию composer

```bash
curl -Lk 'https://getcomposer.org/installer' > ~/composer-setup.php
php ~/composer-setup.php
rm ~/composer-setup.php
mv composer.phar ~/.local/bin/composer
chmod +x ~/.local/bin/composer
alias composer='~/.local/bin/composer'
```

## Создание проекта

Создадим проект, перенесем его в нужную директорию и создадим нужные символьные ссылки

```bash
composer create-project laravel/laravel example
shopt -s dotglob
mv example/* .
rm -rf example/

rm -rf public_html/
ln -s public public_html
```
