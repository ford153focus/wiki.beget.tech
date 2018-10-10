---
categories: ['Free-хостинг']
layout: bootstrap-sticky-footer
title:  "Отличия платного и бесплатного хостингов"
description: ""
keywords: ['free','отличия']
---
{% question %}
В чём разница между платным и бесплатным хостингом?
{% endquestion %}

{% answer %}
Ограничения бесплатного хостинга подробно расписаны на {% link https://beget.com/ru/rulesfree %}, третий пункт.

Давайте коротко пройдёмся по основным ограничениям и сравним их с платным хостингом.

На бесплатном хостинге полностью отсутствуют:

- CRON
- SSH
- Возможность добавить на аккаунт домены зон .ga/.ml/.tk и прочих бесплатных
- Доменная почта
- Партнёрская программа
- Отправка писем с сайта (т.е. функция PHP `mail()`)
- Удалённый доступ к БД

Отличия: 

&nbsp;|Бесплатный хостинг|Платный хостинг
--- | --- | ---
**Дисковое пространство**   |1Gb|от 3gb и выше, в зависимости от тарифа
**Максимальное время выполнения скриптов**|30 секунд|60 секунд по-умолчанию, можно увеличить по запросу в тикет-систему
**Максимальное использование оперативной памяти**|96Mb/процесс|256Mb/процесс по-умолчанию, можно увеличить
**Максимальное количество баз данных**|1|Не ограничено
**Максимальное количество сайтов**|1|от 2 до бесконечности, в зависимости от тарифа
**Максимальное количество файлов**|25000|не ограничено
**Максимальное число одновременных процессов, обрабатывающих запросы для одного домена**|10|30
**Обращение к сторонним веб-сайтам или сервисам по протоколу TCP**|запрещено на любой порт, кроме 80|+
**Обращение к сторонним веб-сайтам или сервисам по протоколу UDP**|-|+ (включается по запросу в тикет-систему)
**При привышении лимитов нагрузки**|моментальное отключение POST и включение агрессивного кэширования до начала следующих суток|Допустимы небольшие превышения
**Разрешённая нагрузка (база данных)**|500CP|от 2500CP и выше
**Разрешённая нагрузка (скрипты сайта)**|10CP|от 65CP и выше
**Файл `xmlrpc.php`**|намертво заблокирован|блокировка снимается по запросу в тикет-систему
**Языки программирования**|php 5.6-7.1<br>python 2|php 4.4-7.2<br>python 2 и 3<br>ruby<br>node.js<br>perl<br>прочие, умеющие работать в режиме CGI

В целом, как и следует из описания, бесплатный хостинг не расчитан на какое-либо серьёзное коммерческое применение. Целевая аудитория бесплатного хостинга - начинающие разработчики только изучающие азы программирования.
{% endanswer %}

{% question %}
А зачем это всё BeGet'y?
{% endquestion %}

{% answer %}
Наверное в надежде, что будущий программист, выполняя и размещая свою первую оплачиваемую работу, выберет именно BeGet. Но это не точно :)
{% endanswer %}

{% question %}
На бесплатном хостинге иногда бывают периоды, когда сервер очень нестабильно работает. Это тоже такая *специальная разница*, чтобы люди охотнее переходили на платный хостинг?
{% endquestion %}

{% answer %}
Ну не то, чтобы специальная... Просто практически все обновления в системе тестируются сначала в неком закрытом тестовом окружении, потом на бесплатном хостинге, и только потом доходят до пользователей платного хостинга.
Так что да, некоторая разница в стабильности тоже присутствует.
{% endanswer %}