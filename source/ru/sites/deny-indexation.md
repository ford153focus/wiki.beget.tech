---
categories: ['Сайты']
layout: bootstrap-sticky-footer
title:  "Закрыть сайт от индексирования"
description: ""
keywords: ["индексирование", "robots.txt"]
---

{% question %}
Сайт пока еще в разработке, нужно закрыть его от поисковиков. У вас такой функционал?
{% endquestion %}

{% answer %}
Для того, чтобы закрыть ваш сайт от индексирования поисковиками, внесите в начало файла `robots.txt` следующие строчки

{% highlight plaintext %}
User-Agent: *
Disallow: /
{% endhighlight %}

Данный файл находится в директории сайта (public_html). Если в директории нет такого файла - создайте его.

Подробнее о файле `robots.txt` и методах его применения вы можете прочитать на {% link https://yandex.ru/support/webmaster/controlling-robot/robots-txt.xml %}
{% endanswer %}
