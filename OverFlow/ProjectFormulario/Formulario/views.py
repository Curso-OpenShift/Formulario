from django.shortcuts import render, redirect, render_to_response
from .models import Alumno
# Create your views here.
def principal(request):
	#Si se ha enviado un formulario entonces tomamos los datos
	if request.method == 'POST':
		
		name = request.POST.get('nombre')
		apellido = request.POST.get('apellido')
		edad = request.POST.get('edad')
		matricula = request.POST.get('matricula')
		carrera = request.POST.get('carrera')
		archivo = request.FILES['files']
		print "@@@@@@@@@@@@@@@@@@@@@@@@"
		print type(archivo)
		alumno = Alumno()
		alumno.nombre = name
		alumno.apellido = apellido
		alumno.edad = edad
		alumno.matricula = matricula
		alumno.carrera = carrera
		alumno.archivo = archivo
		#Falta campo de archivo
		#alumno.save()
		
	bd = Alumno.objects.order_by('nombre')
	contex = {'alumnos': bd}
	return render(request, "main/index.html", contex)