from __future__ import unicode_literals

from django.db import models

# Create your models here.
class Alumno(models.Model):
	nombre = models.CharField(max_length=20)
	apellido = models.CharField(max_length=20)
	edad = models.IntegerField()
	matricula = models.IntegerField()
	carrera = models.CharField(max_length=25)
	archivo = models.FileField(upload_to='archivosform', null= True)
	def __str__(self):
		return self.nombre

		