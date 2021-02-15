from django.urls import path
from . import views

urlpatterns = [
    path('test', views.index, name='test'),
    path('', views.COSMOS, name=''),
    path('COSMOS_table', views.COSMOS_table, name='COSMOS_table'),
]