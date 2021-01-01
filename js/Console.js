$(function() {
    $.ajax({
        type: 'GET',
        url: 'User.php',
        dataType: 'html',
        success: function(data) {
            $('#sample01').html(data);
        },
        error: function() {
            alert('問題がありました。');
        }
    });
    $('#button01').click(function() {
        $.ajax({
            type: 'GET',
            url: 'User.php',
            dataType: 'html',
            success: function(data) {
                $('#sample01').html(data);
            },
            error: function() {
                alert('問題がありました。');
            }
        });
    });
    $('#button02').click(function () {
        $.ajax({
            type: 'GET' ,
            url: 'Sing-Up.php',
            dataType: 'html',
            success: function (data) {
                $('#sample01').html(data);
            },
            error: function () {
                alert('問題がありました。')
            }
        })
    })
});