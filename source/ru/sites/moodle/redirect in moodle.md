---
categories: ['Сайты']
layout: bootstrap-sticky-footer
title:  "Moodle: смена домена и переезд на HTTPS"
description: ""
keywords: ["moodle", "https"]
---

{% question %}
Перенёс сайт на CMS Moodle на другой домен. После переноса сайт сломался и не отображает часть информации. Как чинить?
{% endquestion %}

{% answer %}
В случае Moodle нужно внести изменения в файл `config.php` и изменить директиву `$CFG->wwwroot`
{% endanswer %}

{% BootstrapWarningR10 %}
Также актуально при переезде сайта на HTTPS
{% endBootstrapWarningR10 %}