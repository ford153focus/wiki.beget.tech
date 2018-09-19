---
categories: ['Сайты']
layout: bootstrap-sticky-footer
title:  "PHP: сменить версию и параметры"
description: ""
keywords: ["php", "версия", "php.ini"]
---
{% question %}
Как сменить версию PHP?
{% endquestion %}

{% answer %}
Cменить версию РНР можно самостоятельно на {% link https://cp.beget.ru/sites %}, кликнув на иконку типа ![иконку РНР](https://cp.beget.com/i/icons/small/php71.png) напротив нужного домена.
{% endanswer %}

{% question %}
А как сменить параметры PHP
{% endquestion %}

{% answer %}
Изменять параметры PHP можно с помощью файла `.htaccess`, который расположен в директории вашего сайта (или же вы можете его создать)

В самое начало этого файла впишите строку с нужной настройкой в формате `php_value DIRECTIVE VALUE`. Например: `php_value memory_limit 512M`

Это рекомендуемый метод для смены настроек
{% endanswer %}

{% question %}
Но через `.htaccess` можно изменить далеко не все настройки!
{% endquestion %}

{% answer %}
Если нужно изменить значения, которые не изменяются в `.htaccess` - вы можете изменить настройки интерпретатора PHP также на {% link https://cp.beget.ru/sites %}, также кликнув на ![иконку РНР](https://cp.beget.com/i/icons/small/php71.png) напротив нужного домена. После этого кликните на ![](/assets/img/screenshots/php_settings.png)
{% endanswer %}

{% question %}
Мне нужен полный доступ к php.ini
{% endquestion %}

{% answer %}
Если же вам нужен полный доступ к php.ini - на той же страничке вы можете переключить нужный сайт в режим PHP-CGI, тогда файл php.ini будет считываться из `%директория сайта%/public_html/cgi-bin/php.ini`.
{% endanswer %}

{% BsWarn %}
Однако просим учесть, что php-cgi работает медленнее mod_php и лишён модулей кэширования OPCache/XCache. Тот же Bitrix, например, в режиме CGI не жилец.
{% endBsWarn %}
