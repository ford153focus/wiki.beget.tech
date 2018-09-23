---
layout: bootstrap-sticky-footer
categories: ['Сайты']
title:  "OpenCart: высокая нагрузка на БД"
description: ""
keywords: ["OpenCart", "нагрузка"]
---
{% question %}
При установке расширений вываливается ошибка, связанная с FTP и правами доступа - `ftp_nlist(): listen() faled: Operation not permitted`. Как чинить?
{% endquestion %}

{% answer %}
## Причина

OpenCart пытается открыть FTP-подключение в активном режиме, что запрещено на абсолютном большинстве shared-хостингов.

## Исправление

Проблема решается [данным расширением](https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=21817). 

На страничке расширения подробно описывается шаги установки
{% endanswer %}
