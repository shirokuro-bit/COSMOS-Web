let html = new GethtmlAjax();
$(function () {
    html.getHtml('User.php');
    $('#button01').on('click', function () {
        html.getHtml('User.php')
    });
    $('#button02').on('click', function () {
        html.getHtml('Sing-Up.php')
    });

})