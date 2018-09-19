---
categories: ['MySQL']
layout: bootstrap-sticky-footer
title:  "Изменение tmp_table_size и max_heap_table_size"
description: ""
keywords: ['mysql', 'tmp_table_size', 'max_heap_table_size']
---
{% question %}
Проверяю настройки хостинга через админку Bitrix. Bitrix просит увеличить настройки `tmp_table_size` и `max_heap_table_size`. Можете это сделать?
{% endquestion %}

{% answer %}
Переменные `tmp_table_size` и `max_heap_table_size` можно изменить, добавив в файл `bitrix/php_interface/after_connect.php` следующие строки

{% highlight php %}
$DB->Query('SET SESSION tmp_table_size = 9999999999');
$DB->Query('SET SESSION max_heap_table_size = 9999999999');
{% endhighlight %}

{% endanswer %}
