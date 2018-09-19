---
layout: beget_article
title:  "Как указать CNAME для домена?"
categories: ['Домены']
---

Говорим сразу: CNAME нельзя применить к домену - только к поддомену. Это не проблема хостера BeGet, это ограничение системы DNS в целом.

Данный вопрос часто обсуждается на технических форумах. Например:
 - https://serverfault.com/questions/430970/cname-for-top-of-domain
 - https://www.reddit.com/r/dns/comments/rjelh/why_cant_i_add_a_cname_to_my_second_level_domain/

Небольшой перевод того, что написано по ссылкам:
 - пункт 2.4 документа [RFC1912](https://tools.ietf.org/html/rfc1912) прямо запрещает смешивание CNAME-записи с какой-либо еще. Т.е. если у (под)домена есть CNAME, остальных записей быть не должно.
 - у домена (второго уровня) всегда есть как минимум 2 DNS-записи: NS и SOA
 - резюмируя 2 первых пункта, получаем, что установить CNAME для домена нельзя

## Так как же направить домен на другой ресурс? 
На самом деле в этом нет ничего сложного. Давайте для примера направим ford.gg на ghs.google.com
 - создаем сайт для домена на https://cp.beget.com/sites , если это еще не было сделано. Домен должен быть прилинкован.
![](https://raw.githubusercontent.com/ford153focus/beget/master/img/cname1.png)
 - через файл `.htaccess` делаем редирект* на поддомен www.ford.gg.
    - заходим в [файловый менеджер](https://cp.beget.com/fm)
    - переходим в директорию сайта
    - если файла `.htaccess` нет - создаём его
    - открываем файл `.htaccess` (просто дважды кликаем на него)
    - вносим следующий код
```
RewriteEngine On
RewriteCond %{HTTP_HOST} ^ford.gg$ [NC]
RewriteRule ^(.*)$ http://www.ford.gg/ [L,R=301] 
```
![](https://raw.githubusercontent.com/ford153focus/beget/52de7a1d/img/cname2.png)
 - на https://cp.beget.com/dns настраиваем CNAME-запись для поддомена, т.е. для **www**.ford.gg
![](https://cdn.rawgit.com/ford153focus/beget/52de7a1d/img/cname3.png)

**Всё!** Через 25-35 минут проверяем работу редиректа и записи

###### *Редирект можно сделать несколькими способами и все они будут работать. Но наиболее простым и популярным является редактирование файла `.htaccess`