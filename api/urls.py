from django.urls import path
from api import views

app_name = 'api'
urlpatterns = [
    path('COSMOS_table/', views.COSMOS_table, name='COSMOS_table'),
]