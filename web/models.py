# This is an auto-generated Django model module.
# You'll have to do the following manually to clean this up:
#   * Rearrange models' order
#   * Make sure each model has one field with primary_key=True
#   * Make sure each ForeignKey and OneToOneField has `on_delete` set to the desired behavior
#   * Remove `managed = False` lines if you wish to allow Django to create, modify, and delete the table
# Feel free to rename the models, but don't rename db_table values or field names.
from django.db import models


class HtmlOutput(models.Model):
    time = models.DateTimeField(blank=True, null=True, )
    name = models.CharField(max_length=10, blank=True, primary_key=True,)
    zaishitu = models.IntegerField(blank=True, null=True)

    class Meta:
        managed = False  # Created from a view. Don't remove.
        db_table = 'html_output'


class Username(models.Model):
    rfid_id = models.IntegerField(primary_key=True)
    name = models.CharField(max_length=10, blank=True, null=True)

    class Meta:
        managed = False
        db_table = 'username'


class Zaishitu(models.Model):
    time = models.DateTimeField(primary_key=True)
    rfid = models.ForeignKey(Username, models.DO_NOTHING)
    zaishitu = models.IntegerField(blank=True, null=True)

    class Meta:
        managed = False
        db_table = 'zaishitu'
        unique_together = (('time', 'rfid'),)
