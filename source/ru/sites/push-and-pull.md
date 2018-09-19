---
categories: ['Сайты']
layout: bootstrap-sticky-footer
title:  "nginx и модуль Push and Pull"
description: ""
keywords: ['nginx','Push and Pull']
---
{% question %}
Установили на хостинг корпоративный портал Bitrix. При проверке настроек хостинга Bitrix просит установить на NGINX модуль Push and Pull
{% endquestion %}

{% answer %}
К сожалению, модуль Push and Pull не установлен на хостинговых серверах по-умолчанию и его установка на shared-хостинге невозможна.
Если для вас критичен данных модуль, вам придётся мигрировать на [VPS](https://beget.com/ru/vps) или выделенный сервер.
{% endanswer %}
