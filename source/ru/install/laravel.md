---
categories: ['Установка и настройка']
layout: bootstrap-sticky-footer
title:  "Laravel"
description: ""
keywords: ['laravel']
---
## Создание отдельного пользователя и вход по SSH

- перейдите на {%link https://cp.beget.com/ftp%}
- кликните на ![](https://cp.beget.com/i/icons/small/add.png) напротив нужного сайта
- в поле __Путь к директории__ удалите в конце __/public_html__
- включите SSH
- добавьте пользователя

Через 5-15 минут подключитесь с новым пользователем. Можете воспользоваться {%link https://beget.com/ru/articles/ssh_windows%}, если вы не знаете как подключаться по SSH

## Установка

### Зачищаем директорию сайта

Всё что насыпает хостер в домашнюю папку сайта нам не нужно, удаляем

```
shopt -s dotglob
cd $HOME
rm -rf *
```

### Устнавливаем Laravel

Ставим в поддиректорию `tmp` и установленные файлы в домашнюю директорию.

```
composer-php7.2 create-project --prefer-dist laravel/laravel tmp
mv tmp/* .
rm -rf tmp/
```

### Финальная настройка

Laravel считает, что `Document Root` должен указывать на директорию с названием `public`, Beget - `public_html`.
Улаживаем разногласия символьную ссылкой.

```
ln -s public public_html
```

И, собственно, на этом всё - ваш фрэймворк готов к работе, начинате творить :)
