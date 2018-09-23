---
categories: ['FTP']
layout: bootstrap-sticky-footer
title:  "Разрывы соединения и низкая скорость"
description: ""
keywords: ['ограниченный доступ', 'доступ к одному сайту']
---
{% question %}
Подключение по FTP постоянно разрывается, а скорость загрузки очень низкая. В чем проблема?
{% endquestion %}

{% answer %}
Рекомендуем воспользоваться протоколом SFTP вместо FTP, который имеет регулярные проблемы со стабильностью подключения, нередкo из-за антивирусного ПО или firewall, да и в целом проигрывает SFTP по скорости и защищённости.

Помогает не всегда, но довольно часто.

Доступ по SSH и SFTP нужно включить на главной страничке личного кабинета в левом столбце, кликнув по переключателю "SSH-доступ"

{% Fancybox /assets/img/screenshots/ssh_access_toggle.png %}

- Настройка FileZilla описана на {% link https://beget.com/ru/articles/filezilla_ftp %}, только протокол нужно изменить на SFTP, а порт на 22
- Инструкцию по настройке WinSCP можно найти на {% link https://beget.com/ru/articles/winscp %}
- Если вы используете Total Commander - вам понадобится установить плагин SFTP с {% link http://www.ghisler.com/plugins.htm %}
{% endanswer %}

