function getCookie(name) {
    let cookieValue = null;
    if (document.cookie && document.cookie != '') {
        const cookies = document.cookie.split(';');
        for (let i = 0; i < cookies.length; i++) {
            const cookie = jQuery.trim(cookies[i]);
            // Does this cookie string begin with the name we want?
            if (cookie.substring(0, name.length + 1) == (name + '=')) {
                cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                break;
            }
        }
    }
    return cookieValue;
}

const csrftoken = getCookie('csrftoken');

function csrfSafeMethod(method) {
    // these HTTP methods do not require CSRF protection
    return (/^(GET|HEAD|OPTIONS|TRACE)$/.test(method));
}

class getZaishitu {
    getHtml() {
        const csrf_token = getCookie("csrftoken");
        $.ajaxSetup({
            beforeSend: function (xhr, settings) {
                if (!csrfSafeMethod(settings.type) && !this.crossDomain) {
                    xhr.setRequestHeader("X-CSRFToken", csrf_token);
                }
            }
        });
        $.ajax({
            type: 'POST',
            url: './api/COSMOS_table/',
            dataType: 'json',
        }).done(function (data) {
            const test = document.getElementsByClassName('table_data')
            while (test.length) {
                test.item(0).remove()
            }
            for (let i = 0; i < data.length; i++) {
                $('#table').append(
                    "<ul class='table_data'>"+
                        "<li>" + data[i].time + "</li>"+
                        "<li>" + data[i].name + "</li>"+
                        "<li>" + data[i].zaishitu + "</li>"+
                    "</ul>")
            }
        })
    }
}

let html = new getZaishitu();

html.getHtml();
setInterval(() => html.getHtml(), 5000);
