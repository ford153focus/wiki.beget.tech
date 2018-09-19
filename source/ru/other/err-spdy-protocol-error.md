---

categories: ['Прочее']

layout: bootstrap-sticky-footer

title:  "ERR_SPDY_PROTOCOL_ERROR"

description: ""

keywords: ["ERR_SPDY_PROTOCOL_ERROR"]

---

{% question %}

Перешёл на http/2, после это сайт перестал быть доступен - браузер отображает ошибку `ERR_SPDY_PROTOCOL_ERROR`

{% endquestion %}



{% answer %}

Обычно этим страдает только Google Chrome. Перейдите на {% link chrome://net-internals/#sockets %} и нажмите `Flush socket pools`

{% endanswer %}

