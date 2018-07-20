$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

$("form").on("submit", function (e) {
    var $button = $(this).find('button[data-loading-text]');

    if ($button.length) {
        var loadingText = $button.data('loading-text');
        if ($(this).html() !== loadingText) {
            $button.data('original-text', $(this).html());
            $button.html(loadingText);
            $button.prop('disabled', true);
        }
    }
});
