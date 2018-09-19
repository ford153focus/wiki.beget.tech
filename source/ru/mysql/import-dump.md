---
categories: ['MySQL']
layout: bootstrap-sticky-footer
title:  "Ошибка при загрузке дампа через PhpMyAdmin"
description: ""
keywords: ['mysql', 'phpmyadmin']
---
{% question %}
Загружаю дамп базы данных, а он падает с ошибкой. Можете помочь?
{% endquestion %}

{% answer %}
- Загрузите дамп вашей базы на ваш аккаунт через FTP или файловый менеджер.
- Отпишите в [службу поддержки](https://cp.beget.com/support)
- Укажите в тикете имя и располежение файла, который вы загрузили
- Укажите в тикете имя базы данных, в которую нужно загрузить дамп, и её пароль (или укажите, что нужно создать новую базу данных).
{% endanswer %}

{% answer %}
Если PMA падает из-за размера дампа - вы можете решить проблему через SSH самостоятельно, от вас потребуется выполнить команду следующего характера:

{% highlight shell %}
cat ~/dump.sql | mysql --host='localhost' --user='USER_DATABASE' --database='USER_DATABASE' --password='PASSWORD'
{% endhighlight %}
{% endanswer %}
