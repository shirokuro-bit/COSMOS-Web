from django.shortcuts import render


# Create your views here.
def index(request):
    content = {
        'message': 'こんにちは！Djangoテンプレート！'
    }
    return render(request, 'main/index.html', content)


def COSMOS(request):
    return render(request, 'main/COSMOS.html')
