---
categories: ['Домены']
layout: bootstrap-sticky-footer
title:  "Перенос домена"
description: ""
keywords: ["домен", "перенос"]
---
<div class="alert alert-warning">
Данная статья рассматривает перенос только домена - без файлов и базы данных.
Если вам нужно перенести **сайт полностью** - перейдите на {% link /ru/sites/move.html %}
</div>

{% question %}
Как перенести домен?
{% endquestion %}

{% answer %}
Зависит от того откуда переносим и куда :)
{% endanswer %}

{% answer %}
### C одного аккаунта в BeGet на другой

- перейти в раздел [Домены и поддомены](https://cp.beget.com/domains)
- кликнуть на ![](https://cp.beget.com/i/icons/small/more.png) напротив нужного домена
- выбрать пункт __Передать домен__
{% endanswer %}

{% answer %}
### C другого хостинга на BeGet

- перейти в раздел [Домены и поддомены](https://cp.beget.com/domains)
- кликнуть на ![](https://cp.beget.com/i/icons/small/domain-transfer.png) напротив нужного домена
- выполнить предоставленные инструкции.
{% endanswer %}

{% answer %}
### C BeGet на другой хостинг

Сначала проверить, отображается ли домен на https://cp.beget.com/domains/administrator

Если отображается - значит регистратором является сам BeGet. Кликаем на ![](https://cp.beget.com/i/icons/small/epp.png) и получаем AUTH-код, который потом передаем другому регистратору.

Если не отображается - [добро пожаловать в тикет-систему](https://cp.beget.com/support) . В тикете укажите о каком домене идёт и к какому регистратору будет осуществлён перенос - в зависимости от этих двух параметров инструкция может сильно отличаться.
{% endanswer %}
