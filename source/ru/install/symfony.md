---
categories: ['Установка и настройка']
layout: bootstrap-sticky-footer
title:  "Symfony"
description: ""
keywords: ['symfony']
---
## Вход по SSH

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

Symfony считает, что `Document Root` должен указывать на директорию с названием `public`, `beget` - `public_html`.
Улаживаем разногласия символьную ссылкой.

```
ln -s public public_html
```

Доустанавливаем всякую "требуху", чтобы Symfony без проблем заработала с Apache.

```
composer-php7.2 require symfony/apache-pack
```

И, собственно, на этом всё - ваш фрэймворк готов к работе, начинате творить :)
