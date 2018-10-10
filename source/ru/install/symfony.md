---
categories: ['Установка и настройка']
layout: bootstrap-sticky-footer
title:  "Symfony"
description: ""
keywords: ['symfony']
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

### Устнавливаем Symfony

Ставим в поддиректорию `tmp` - установка в сразу в домашнюю директорию с ошибкой, что она должна быть пуста (хотя она пуста). Похоже на баг Composer'a.

Перемещаем Symfony в нужную директорию следующей же командой.

```
composer-php7.2 create-project symfony/website-skeleton tmp
mv tmp/* .
rm -rf tmp/
```

Доустанавливаем всякую "требуху", чтобы Symfony без проблем заработала с Apache.

```
composer-php7.2 require symfony/apache-pack
```

### Финальная настройка

Symfony считает, что `Document Root` должен указывать на директорию с названием `public`, `beget` - `public_html`.
Улаживаем разногласия символьную ссылкой.

```
ln -s public public_html
```

И, собственно, на этом всё - ваш фрэймворк готов к работе, начинате творить :)
