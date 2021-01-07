$('#Sing-Up-form').submit(function (event){
    event.preventDefault();
    let rfid = document.getElementById('rfid_id').value;
    let name = document.getElementById('name').value;
    let result = confirm('RFID：' + rfid + "\n" + '名前：' + name + "\n" + 'これで大丈夫？');
    const html = new GethtmlAjax();
    const $form = $(this);

    if (result) {
        $.ajax({
            url: $form.attr('action'),
            type: $form.attr('method'),
            data: $form.serialize(),
            dataType: 'html',
        }).done(function(data) {
            alert(data);
            html.getHtml('Sing-Up.php');
        }).fail(function (XMLHttpRequest, textStatus, errorThrown) {
            alert('Error : ' + errorThrown);
        });
    }else {
        alert('登録やめた');
    }
})