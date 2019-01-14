---
layout: bootstrap-sticky-footer
categories: ['DNS']
title:  "Как изменить CNAME-запись поддомена?"
description: ""
keywords: ["CNAME"]
todo: "дописать про CNAME для домена второго уровня"
---
{% question %}
Как изменить CNAME-запись поддомена?
{% endquestion %}

{% answer %}
- {% link https://cp.beget.com/dns %}
- выбираем домен
- если нужный поддомен отсутствует в списке ниже, кликаем "Добавить подзону" и добавляем его
- кликаем ![alt text](https://cp.beget.com/i/icons/small/edit.png "dns edit") напротив нужного поддомена
- кликаем на CNAME
- вносим нужное значение
- "Сохранить"

{% Fancybox /assets/img/screenshots/dns/set_cname.png 640 440 %}
{% endanswer %}

{% question %}
Как изменить CNAME-запись для основного домена?
{% endquestion %}

{% answer %}
CNAME нельзя применить к домену - только к поддомену. Это не проблема хостера BeGet, это ограничение системы DNS в целом.

Данный вопрос часто обсуждается на технических форумах. Например:

- {% link https://serverfault.com/questions/430970/cname-for-top-of-domain %}
- {% link https://www.reddit.com/r/dns/comments/rjelh/why_cant_i_add_a_cname_to_my_second_level_domain/ %}

Небольшой перевод того, что написано по ссылкам:

- пункт 2.4 документа [RFC1912](https://tools.ietf.org/html/rfc1912) прямо запрещает смешивание CNAME-записи с какой-либо еще. Т.е. если у (под)домена есть CNAME, остальных записей быть не должно.
- у домена (второго уровня) всегда есть как минимум 2 DNS-записи: NS и SOA
- резюмируя 2 первых пункта, получаем, что установить CNAME для домена нельзя
{% endanswer %}

{% question %}
Как же тогда направить домен на другой ресурс? 
{% endquestion %}

{% answer %}
На самом деле в этом нет ничего сложного. Давайте для примера направим ford.gg на ghs.google.com

Для начала создаем сайт для домена на https://cp.beget.com/sites , если это еще не было сделано. Домен должен быть прилинкован. 

{% Fancybox /assets/img/screenshots/cname1.png %}
{% endanswer %}

{% answer %}
Через файл `.htaccess` делаем редирект* на поддомен www.ford.gg.

- заходим в [файловый менеджер](https://cp.beget.com/fm)
- переходим в директорию сайта
- если файла `.htaccess` нет - создаём его
- открываем файл `.htaccess` (просто дважды кликаем на него)
- вносим следующий код
- `RewriteEngine On`<br>`RewriteCond %{HTTP_HOST} ^ford.gg$ [NC]`<br>`RewriteRule ^(.*)$ http://www.ford.gg/ [L,R=301]` 

{% Fancybox /assets/img/screenshots/cname2.png %}

{% BootstrapWarningR10 %} Редирект можно сделать несколькими способами и все они будут работать. Но наиболее простым и популярным является редактирование файла `.htaccess` {% endBootstrapWarningR10 %}
{% endanswer %}

{% answer %}
На {% link https://cp.beget.com/dns %} настраиваем CNAME-запись для поддомена, т.е. для **www**.ford.gg

{% Fancybox /assets/img/screenshots/cname3.png %}
{% endanswer %}

{% answer %}
**Всё!** Через 25-35 минут проверяем работу редиректа и записи
{% endanswer %}
