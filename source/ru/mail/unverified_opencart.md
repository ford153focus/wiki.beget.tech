---
layout: beget_article
title:  "Opencart и отправка почты от имени unverified@beget.com"
categories: ['Почта']
---

В случае OpenCart:

- авторизуйтесь в админке вашего OpenCart
- перейдите в __System (Система)__
- перейдите в __Settings (Настройки)__
- нажмите __Edit (Редактировать)__ справа от нужного магазина
- перейдите в __Mail (Почта)__
- в селекторе __Почтовый протокол__ выбирите `Mail`
- в поле __Mail Parameters (Параметры функции mail)__ впишите `-forder@domain.com`<sup>1</sup>

![](http://wiki.beget.tech/assets/img/screenshots/unverified_opencart.jpg)

---

<sup>1</sup> Вместо domain.com - домен сайта. `-f` в начале обязателен.