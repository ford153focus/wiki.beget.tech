---
layout: bootstrap-sticky-footer
categories: ['Файловый менеджер']
title:  "Удаление папки"
description: ""
keywords: []
---
{% question %}
Хочу удалить директорию старого и уже ненужного сайта, но при удалении получаю ошибку

{% Fancybox /assets/img/screenshots/fm/delete_error.png 300 190 %}
{% endquestion %}

{% answer %}
Перед удалением директории

- в неё не должны писаться логи доступа и/или ошибок - {% link https://cp.beget.com/log %}
- к ней не должны быть привязаны FTP-аккаунты - {% link https://cp.beget.com/ftp %}
- она не должна быть директорией сайта - {% link https://cp.beget.com/sites %}
{% endanswer %}
