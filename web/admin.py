from django.contrib import admin
from web.models import Username, Zaishitu, HtmlOutput

# Register your models here.


class UsernameAdmin(admin.ModelAdmin):
    list_display = ('rfid_id', 'name',)


admin.site.register(Username, UsernameAdmin)


class ZaishituAdmin(admin.ModelAdmin):
    list_display = ('time', 'rfid_id', 'zaishitu',)


admin.site.register(Zaishitu, ZaishituAdmin)


class HtmloutputAdmin(admin.ModelAdmin):
    list_display = ('time', 'name', 'zaishitu',)


admin.site.register(HtmlOutput, HtmloutputAdmin)