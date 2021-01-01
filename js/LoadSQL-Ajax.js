$(document).ready(function() {

    setInterval(function (){
        $.ajax({
            type: "POST",
            url: "./ConnectDB.php",
            dataType: "json",
            success: function (data) {
                // successのブロック内は、Ajax通信が成功した場合に呼び出される

                // 結果が0件の場合
                if (data == null) alert('データが0件でした');

                // 返ってきたデータの表示
                var $content = $('#content');
                let parent = document.getElementById('content');
                parent.innerHTML = ''; //子要素を全て
                for (var i = 0; i < data.length; i++) {
                    $content.append("<p>" + data[i].time + "：" + data[i].name + "：" + data[i].zaishitu + "</p>");
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                // 通常はここでtextStatusやerrorThrownの値を見て処理を切り分けるか、単純に通信に失敗した際の処理を記述します。

                // this;
                // thisは他のコールバック関数同様にAJAX通信時のオプションを示します。

                // エラーメッセージの表示
                alert('Error : ' + errorThrown);
            }
        });
    }, 5000);
});