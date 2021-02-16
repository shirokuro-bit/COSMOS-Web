# Create your views here.
import json
from collections import OrderedDict
from datetime import datetime, date
from django.http import HttpResponse
from django.views.decorators.csrf import csrf_exempt
from web.models import HtmlOutput


@csrf_exempt
def render_json_response(request, data, status=None):
    # date, datetimeの変換関数
    def json_serial(obj):
        # 日付型の場合には、文字列に変換します
        if isinstance(obj, (datetime, date)):
            return obj.isoformat()
        # 上記以外はサポート対象外.
        raise TypeError("Type %s not serializable" % type(obj))

    """response を JSON で返却"""
    json_str = json.dumps(data, default=json_serial, ensure_ascii=False, indent=2)
    callback = request.GET.get('callback')
    if not callback:
        callback = request.POST.get('callback')
    if callback:
        json_str = "%s(%s)" % (callback, json_str)
        response = HttpResponse(json_str, content_type='application/javascript; charset=UTF-8', status=status)
    else:
        response = HttpResponse(json_str, content_type='application/json; charset=UTF-8', status=status)
    return response


def COSMOS_table(request):
    """test2"""
    data = []
    for zaishitu in HtmlOutput.objects.all():
        zaishitu1 = OrderedDict([
            ('time', zaishitu.time),
            ('name', zaishitu.name),
            ('zaishitu', zaishitu.zaishitu),
        ])
        data.append(zaishitu1)

    data1 = OrderedDict([('data', data)])
    return render_json_response(request, data)
