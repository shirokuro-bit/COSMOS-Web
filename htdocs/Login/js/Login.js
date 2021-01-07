$('#login').submit(function (event){
    event.preventDefault();
    const $form = $(this);

    $.ajax({
        url: $form.attr('action'),
        type: $form.attr('method'),
        data: $form.serialize(),
        dataType: 'text',
    }).done(function(data) {
        if (data === 'true') {
            window.location.href = '../Console/Console.html';
        }else if (data === 'false') {
            $('#miss').html('メールアドレス又はパスワードが間違っています。');
        }else {
            $('#miss').html(data);
        }
    }).fail(function (XMLHttpRequest, textStatus, errorThrown) {
        alert('Error : ' + errorThrown);
    });
})