---
categories: ['Прочее']
layout: bootstrap-sticky-footer
title:  "Spring и ASP.NET"
description: ""
keywords: ["java", "c#"]
--- 
{% question %}
Хочу разместить на вашем shared-хостинге большой проект на Java с Spring Framework. Есть ли инструкция как это сделать?
{% endquestion %}

{% answer %}
К сожалению, на shared-хостинге нет возможности развернуть проект, написанный на Spring Framework. Это можно сделать только на [VPS](https://beget.com/ru/vps) или на [выделенных серверах](https://beget.com/ru/dedicated-servers).

На shared-хостинге же вы можете использовать PHP/Python/Ruby/Javascript(Node.js) и прочие проекты, умеющие работать в режиме CGI.
{% endanswer %}

{% question %}
Т.е. проект на ASP.NET тоже не перенести?
{% endquestion %}

{% answer %}
Только если вы сможете заставить его работать в режиме CGI... но зачем?
{% endanswer %}
