---
categories: ['MySQL']
layout: bootstrap-sticky-footer
title:  "Редактирование my.ini"
description: ""
keywords: ['mysql', 'my.ini']
---
{% question %}
Хочу изменить некоторые параметры сервера MySQL, отредактировав файл `my.ini`. Например, `sql_mode`. Как я могу до него добраться?
{% endquestion %}

{% answer %}
На shared-хостинге файл my.ini не изменяется под нужды определённого клиента, так как эти изменения затронут все аккаунты на сервере (коих может быть несколько сотен), и могут кому-нибудь сломать сайт, который уже настроен под текущие настройки.

Вы можете отредактировать скрипты вашего сайта, чтобы сразу после установки подключения к БД выполнялся запрос типа

{% highlight sql %}
SET SESSION sql_mode = '';
{% endhighlight %}

Ниже примеры для некоторых CMS
{% endanswer %}

{% answer %}
### Bitrix

Допишите в конец файла `bitrix/php_interface/after_connect.php` строку вида
{% highlight php %}
$DB->Query('SET SESSION variable = value');
{% endhighlight %}

Допишите в конец файла `bitrix/php_interface/after_connect_d7.php` (если такой присутствует) строку вида
{% highlight php %}
$connection->queryExecute('SET SESSION variable = value');
{% endhighlight %}
{% endanswer %}

{% answer %}
### Drupal

Файл `includes/database/database.inc`, строка 313 (предположительно)

Найдите констуктор класса и добавьте запрос в его конец

{% highlight php %}
function __construct($dsn, $username, $password, $driver_options = array())
{
    //...
    $this->query('SET SESSION variable = value');
}
{% endhighlight %}
{% endanswer %}

{% answer %}
### OpenCart 1.5

Найдите констуктор класса и добавьте запрос в его конец

Файл `system/database/mysql.php`, строка 18

{% highlight php %}
mysql_query("SET SESSION variable = value", $this->link);
{% endhighlight %}

Файл `system/database/mysqli.php`, строка 19

{% highlight php %}
mysql_query("SET SESSION variable = value", $this->link);
{% endhighlight %}
{% endanswer %}

{% answer %}
### OpenCart 2

Найдите констуктор класса и добавьте запрос в его конец

Файл `system/library/db/mysql.php`, строка 16

{% highlight php %}
mysql_query("SET SESSION variable = value", $this->link);
{% endhighlight %}

Файл `system/library/db/mysqli.php`, строка 13

{% highlight php %}
mysql_query("SET SESSION variable = value", $this->link);
{% endhighlight %}
{% endanswer %}

{% answer %}
Подобное место для редактирования есть в любой CMS, загвоздка лишь в том, что не все переменные можно изменить в области SESSION.

На {% link https://dev.mysql.com/doc/refman/5.7/en/server-option-variable-reference.html %} есть табличка со всеми переменными. Если в столбце **Var Scope** указано **Both** - наш метод подходит для данной переменной.
{% endanswer %}
