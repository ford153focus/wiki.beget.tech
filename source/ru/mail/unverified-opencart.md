---
categories: ['Почта']
layout: bootstrap-sticky-footer
title:  "Сайт отправляет почту от unverified@beget.com - исправление для Opencart"
description: ""
keywords: ['unverified']
---

В случае OpenCart:

- авторизуйтесь в админке вашего OpenCart
- перейдите в __System (Система)__
- перейдите в __Settings (Настройки)__
- нажмите __Edit (Редактировать)__ справа от нужного магазина
- перейдите в __Mail (Почта)__
- в селекторе __Почтовый протокол__ выбирите `Mail`
- в поле __Mail Parameters (Параметры функции mail)__ впишите `-forder@domain.com`{%RefLink 1%}

{%Fancybox /assets/img/screenshots/unverified_opencart.jpg%}

---

{%Refer 1%}Вместо domain.com - домен сайта. `-f` в начале обязателен.{%endRefer%}
