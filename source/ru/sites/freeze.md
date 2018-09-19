---
categories: ['Сайты']
layout: bootstrap-sticky-footer
title:  "Заморозить сайт"
description: ""
keywords: ["заморозка"]
---

{% question %}
Как мне "заморозить" свой сайт? Я хочу чтобы никто, никогда и ни при каких условиях не смог изменить содержимое ни одного моего файла до тех пор, пока я явно это не разрешу. У вас есть такой функционал? 
{% endquestion %}

{% answer %}
Да, есть. Вот только через личный кабинет он пока не доступен - надо писать запрос к API

- {% link https://beget.com/ru/api/sites#freeze %}
- {% link https://beget.com/ru/api/sites#unfreeze %}
{% endanswer %}

{% question %}
А как оно работает? Это вообще надёжно?
{% endquestion %}

{% answer %}
Через системную команду `chattr +i`. О случаях обхода нам неизвестно. 
{% endanswer %}
