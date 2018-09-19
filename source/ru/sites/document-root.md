---
categories: ['Сайты']
layout: bootstrap-sticky-footer
title:  "Document Root"
description: ""
keywords: ["document root"]
---

{% question %}
Я хочу установить framework, у которого публично доступная часть находится в поддиректории, остальные не должны быть видны.

Как мне установить его, если ваши инструкции предписывают загружать всё в директорию `public_html`? Как мне изменить `DOCUMENT_ROOT`?
{% endquestion %}

{% answer %}
Изменить `DOCUMENT_ROOT` как настройку web-сервера нет никакой возможности.
Допустим, что публичная часть находится в папке `public`. Тогда это реализуется следующим образом (в скобках команды для SSH):

- Загружаем сайт не внутрь public_html, а рядом
- Удаляем директорию public_html (`rm -rf public_html`)
- Создаём символьную ссылку с именем public_html, указывающую на директорию public (`ln -s public public_html`)
{% endanswer %}
