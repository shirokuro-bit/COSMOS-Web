from django.contrib import admin
from cms.models import Username, Zaishitu

# Register your models here.


class UsernameAdmin(admin.ModelAdmin):
    list_display = ('rfid_id', 'name',)


admin.site.register(Username, UsernameAdmin)


class ZaishituAdmin(admin.ModelAdmin):
    list_display = ('time', 'rfid_id', 'zaishitu',)


admin.site.register(Zaishitu, ZaishituAdmin)