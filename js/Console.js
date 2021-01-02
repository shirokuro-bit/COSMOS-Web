function GetContent(link) {
    $.ajax({
        type: 'GET',
        url: link,
        dataType: 'html'
    }).done(function(data) {
        $('#main').html(data);
    }).fail(function (XMLHttpRequest, textStatus, errorThrown) {
        // 通常はここでtextStatusやerrorThrownの値を見て処理を切り分けるか、単純に通信に失敗した際の処理を記述します。

        // this;
        // thisは他のコールバック関数同様にAJAX通信時のオプションを示します。

        // エラーメッセージの表示
        alert('Error : ' + errorThrown);
    });
}

$(function () {
    GetContent('User.php');
    $('#button01').on('click', function () {
        GetContent('User.php')
    });
    $('#button02').on('click', function () {
        GetContent('Sing-Up.php')
    });
});