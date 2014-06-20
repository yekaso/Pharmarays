function showMessage(type, statusMessage) {
    var $t = $('.' + type)
    $t
            .html(statusMessage)
            .css({top: -$t.height()})
            .animate({
        top: "0"
    }, 500, function() {
        $t.delay(2000).animate({top: -$(this).outerHeight()}, 500)
    });

}
$('#info_btn').on('click', function() {
    message = "This is the best info message I have ever seen.<br>Does anybod know ...";
    showMessage('info', message);
})
$('#error_btn').on('click', function() {
    message = 'The word error entails different meanings and usages relative to how it is conceptually applied. The concrete meaning of the Latin word "error" is "wandering" or "straying". Unlike an illusion, an error or a mistake can sometimes be dispelled through knowledge (knowing that one is looking at a mirage and not at real water does not make the mirage disappear).';
    showMessage('error', message);
})
$('#warn_btn').on('click', function() {
    message = 'The band released two demo tapes, Revelation Looms in Feb 1996 and Blessed By Sabbath in March 1997 which led them to gain underground metal press attention and label interest.';
    showMessage('warn', message);
})
$('#success_btn').on('click', function() {
    message = 'SUCCESS';
    showMessage('success', message);
})
