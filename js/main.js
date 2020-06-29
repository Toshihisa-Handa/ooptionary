$(function () {
    // ヘッダースクロール
    var $win = $(window),
        $header = $("header"),
        scrollClass = "is-scroll";

    $win.on("load scroll", function () {
        var value = $(this).scrollTop();
        if (value > 100) {
            $header.addClass(scrollClass);
        } else {
            $header.removeClass(scrollClass);
        }
    });

    // ページ内リンク
    var headerHight = 86;
    $("a[href^='#']").click(function () {
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? "html" : href);
        var position = target.offset().top - headerHight;
        $("html, body").animate({ scrollTop: position }, 400, "swing");
        return false;
    });
});
