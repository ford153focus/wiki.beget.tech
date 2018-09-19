---
layout: bootstrap-sticky-footer
categories: ['SSL']
title:  "Cloudflare и Let's Encrypt"
description: ""
keywords: ["let's encrypt", "cloudflare"]
---
{% question %} 
Перенёс сайт на DNS-сервера Cloudflare, теперь не получается перевыпустить сертификат Let's Encrypt на хостинге. Как быть?
{% endquestion %} 

{% answer %}
Если ваш домен делегирован на сервера Cloudflare, то и настраивать SSL нужно в личном кабинете на Cloudflare

Ссылка на инструкцию по настройке - {% link https://support.cloudflare.com/hc/en-us/articles/200170516-How-do-I-add-SSL-to-my-site- %}

Вам подойдёт настройка "Flexible SSL"  
{% endanswer %}

{% BsWarn %}
Заказать сертификат Let's Encrypt на хостинге без делегирования домена на DNS-сервера Beget'a не выйдет - Let's Encrypt проверяет сверяет IP заказывающего сервера с DNS-записями.
{% endBsWarn %}
