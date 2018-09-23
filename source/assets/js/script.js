function refHighlighter() {
    $("sup[id^='reflink'] a").click(function(){
        document.querySelectorAll("h6[id^='ref']").forEach(function (el) {
            let el_p = el.parentNode;
            el_p.style.transition = 'background-color 1000ms linear';
            el_p.className = el_p.className.replace(/alert-secondary/,'alert-light');
        });

        let id = this.attributes['href'].value;
        let el = jQuery(id).parent().get(0);
        el.className = el.className.replace('alert-light','alert-secondary');
    });
}

window.onload = function(){
    refHighlighter();
};