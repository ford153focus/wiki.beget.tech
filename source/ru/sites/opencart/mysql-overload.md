---
layout: bootstrap-sticky-footer
categories: ['Сайты']
title:  "OpenCart: высокая нагрузка на БД"
description: ""
keywords: ["OpenCart", "нагрузка"]
---
{% question %}
Размещаю на хостинге сайт на базе OpenCart и сегодня заметил, что он сильно грузит базу данных да и в целом он никогда не работал быстро на BeGet. 
Хостинг от BeGet не совместим с OpenCart?
{% endquestion %}

{% answer %}
В Opencart есть один архитектурный недостаток - подсчет количества товаров занимает очень большое время и создаёт очень большую нагрузку на базу данных.  
Следовательно его нужно выключать и сделать это можно в настройках OpenCart.

Проблема популярная и в интернете написано очень много статей на тему того, как с ней бороться. 
Вот одна из них - {% link http://www.unemployed.in.ua/kak-ubrat-kolichestvo-tovara-opencart/ %}
{% endanswer %}


<!---
## Opencart 2
Заходим в Система—>Настройки—>Изменить. В разделе «Опции» ищем пункт «Подсчет количества товаров» и выключаем его.
Заходим в раздел "Модули", находим "Категории", выключаем подсчет товаров.
-->
