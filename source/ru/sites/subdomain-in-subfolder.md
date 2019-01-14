---
categories: ['Сайты']
layout: bootstrap-sticky-footer
title:  "Размещение сайта поддомена в поддиректории основного домена"
description: ""
keywords: ["поддомен", "поддиректория"]
---

{% question %}
Хочу создать сайт для поддомена, но у меня на тарифе уже закончился лимит на количество сайтов. Можно ли создать сайт для поддомена, не увеличивая количество сайтов на тарифе? 
{% endquestion %}

{% answer %}
Можно.

Вы можете создать поддомен на {% link https://cp.beget.com/domains %} и направить его на директорию домена

{% BootstrapWarningR10 %}
Если поддомен уже существует - его можно прекрепить к директории основного домена на {% link https://cp.beget.com/sites %}
{% endBootstrapWarningR10 %}

После этого вам нужно будет добавить в файл `.htaccess`, который находится в директории public_html нужного сайта, строки следующего вида

{% highlight apache %}
RewriteEngine On
RewriteCond %{HTTP_HOST} ^subdomain.example.com$ [NC]
RewriteCond %{REQUEST_URI} !^/subdomain/ [NC]
RewriteRule (.*) /subdomain/$1 [L]
{% endhighlight %}

/subdomain/ заменяем на имя поддиректории, в которую мы будем заливать файлы поддомена, subdomain.example.com меняем на адрес поддомена

{% BootstrapWarningR10 %}
Если файл `.htaccess` отсутствует - нужно его создать.
{% endBootstrapWarningR10 %}

{% endanswer %}
