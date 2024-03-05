# ejercicios Psuedocodigos con condicionales 
1. Tres personas deciden invertir su dinero para fundar una empresa. Cada una de ellas invierte una cantidad distinta.
   Obtener el porcentaje que cada quien invierte con respecto a la cantidad total invertida.
### Pseudocodigo
```
INICIO
    definir personaUno, personaDos, personaTres como Cadena
    Definir personaUnoIn, personaDosIn, personaTresIn como Real
    Definir personaUnoPor, personaDosPor, personaTresPor como Real
    Definir totalIn como Real
  
    personaUno= ""
    personaDos= ""
    personaTres= ""
    personaUnoIn= 0.0
    personaDosIn= 0.0
    personaTresIn= 0.0
    personaUnoPor= 0.0
    personaDosPor= 0.0
    personaTresPor= 0.0
    totalIn= 0.0
  
    Escribir "dijite el nombre de la primera Persona: "
    Leer personaUno
  
    Escribir "dijite el nombre de la segunda Persona: "
    Leer personaDos
  
    Escribir "dijite el nombre de la Tercera Persona: "
    Leer personaTres
  
    Escribir "dijite la inversion de la primera Persona: "
    Leer personaUnoIn
  
    Escribir "dijite la inversion de la segunda Persona: "
    Leer personaDosIn
  
    Escribir "dijite la inversion de la Tercera Persona: "
    Leer personaTresIn
  
    totalIn= personaUnoIn + personaDosIn + personaTresIn
  
    personaUnoPor= (personaUnoIn / totalIn) * 100
    personaDosPor= (personaDosIn / totalIn) * 100
    personaTresPor= (personaTresIn / totalIn) * 100

    Escribir "el porcentaje de",personaUno,"es",personaUnoPor
    Escribir "el porcentaje de",personaUno,"es",personaUnoPor
    Escribir "el porcentaje de",personaTres,"es",personaTresPor
FIN
```
### Python
```
  personaUno= ""
  personaDos= ""
  personaTres= ""
  personaUnoIn= 0.0
  personaDosIn= 0.0
  personaTresIn= 0.0
  personaUnoPor= 0.0
  personaDosPor= 0.0
  personaTresPor= 0.0
  totalIn= 0.0
  
  personaUno= input( "dijite el nombre de la primera Persona: ")
  personaDos= input( "dijite el nombre de la segunda Persona: ")
  personaTres= input( "dijite el nombre de la tercera Persona: ")
  personaUnoIn=float(input("dijite la inversion de "+personaUno+": "))
  personaDosIn=float(input("dijite la inversion de "+personaDos+": "))
  personaTresIn=float(input("dijite la inversion de "+personaTres+": "))
  
  totalIn= personaUnoIn + personaDosIn + personaTresIn
  
  personaUnoPor= (personaUnoIn / totalIn) * 100
  personaDosPor= (personaDosIn / totalIn) * 100
  personaTresPor= (personaTresIn / totalIn) * 100
  
  print("el porcentaje de la inversion ",personaUno," es",personaUnoPor )
  print("el porcentaje de la inversion ",personaDos," es",personaDosPor )
  print("el porcentaje de la inversion ",personaTres," es",personaTresPor )

```
2. Un alumno desea saber cuál será su promedio general en las tres materias más difíciles que cursa y cuál será el promedio que obtendrá en cada una de ellas. Estas materias se evalúan como se muestra a continuación:

   - La calificación de Matemáticas se obtiene de la siguiente manera:
   Examen 90% Promedio de tareas 10% En esta materia se pidió un total de tres tareas.

   - La calificación de Física se obtiene de la siguiente manera:
   Examen 80% Promedio de tareas 20% En esta materia se pidió un total de dos tareas.

   - La calificación de Química se obtiene de la siguiente manera:
   Examen 85% Promedio de tareas 15% En esta materia se pidió un promedio de tres tareas.

### Pseudocodigo
```
INICIO
    Definir matematicasPro, fisicaPro, quimicaPro como Real
    Definir matematicasTareas, fisicaTareas, quimicaTareas como Real
    Definir matematicasTareasUno, matematicasTareasDos, matematicasTareasTres como Real
    Definir fisicaTareasUno, fisicaTareasDos como Real
    Definir quimicaTareasUno, quimicaTareasDos, quimicaTareasTres como Real 
    Definir matematicasPorTareas, fisicaPorTareas, quimicaPorTareas como Real
    Definir matematicasExamen, fisicaExamen, quimicaExamen como Real}
    Definir matematicasExamenNota, fisicaExamenNota, quimicaExamenNota como Real
    Definir matematicasPorExamen, fisicaPorExamen, quimicaPorExamen como Real
    
    matematicasPro= 0.0
    fisicaPro= 0.0
    quimicaPro= 0.0
    matematicasTareasUno= 0.0
    matematicasTareasDos= 0.0
    matematicasTareasTres= 0.0
    fisicaTareasUno= 0.0
    fisicaTareasDos= 0.0
    quimicaTareasUno= 0.0
    quimicaTareasDos= 0.0
    quimicaTareasTres= 0.0
    matematicasPorTareas= 0.1
    fisicaPorTareas= 0.2
    quimicaPorTareas= 0.15
    matematicasExamen= 0.0
    fisicaExamen= 0.0
    quimicaExamen= 0.0
    matematicasExamenNota= 0.0
    fisicaExamenNota= 0.0
    quimicaExamenNota= 0.0
    MatematicasPorExamen= 0.9
    fisicaPorExamen= 0.8
    quimicaPorExamen= 0.85

    Escribir "dijite la notas de la primera tarea de matematicas: "
    Leer matematicasTareasUno

    Escribir "dijite la notas de la segunda tarea de matematicas: "
    Leer matematicasTareasDos

    Escribir "dijite la notas de la tercera tarea de matematicas: "
    Leer matematicasTareasTres

    Escribir "dijite la notas de la primera tarea de fisica: "
    Leer fisicaTareasUno

    Escribir "dijite la notas de la segunda tarea de fisica: "
    Leer fisicaTareasDos

    Escribir "dijite la notas de la primera tarea de quimica: "
    Leer quimicaTareasUno

    Escribir "dijite la notas de la segunda tarea de quimica: "
    Leer quimicaTareasDos

    Escribir "dijite la notas de la tercera tarea de quimica: "
    Leer quimicaTareasTres

    Escribir "dijite la notas del examen de matematicas: "
    Leer matematicasExamenNota

    Escribir "dijite la notas del examen de fisica: "
    Leer fisicaExamenNota

    Escribir "dijite la notas del examen de quimica: "
    Leer quimicaExamenNota

    matematicasTareas= ((matematicasTareasUno + matematicasTareasDos + matematicasTareasTres)/3) * matematicasPorTareas
    matematicasExamen= matematicasExamenNota * matematicasPorExamen
    matematicasPro = matematicasExamen + matematicasTareas

    fisicaTareas= ((fisicaTareasUno + fisicaTareasDos)/2) * fisicaPorTareas
    fisicaExamen= fisicaExamenNota * fisicaPorExamen
    fisicaPro= fisicaExamen + fisicaTareas

    quimicaTareas= ((quimicaTareasUno + quimicaTareasDos + quimicaTareasTreas)/3) * quimicaPorTareas
    quimicaExamen= quimicaExamenNota * quimicaPorExamen
    quimicaPro= quimicaExamen + quimicaTareas

    Escribir "el promedio de matematicas es de " matematicasPro
    Escribir "el promedio de fisica es de " fisicaPro
    Escribir "el promedio de quimica es de" quimicaPro

FIN
```
### Python
```
	matematicasPro= 0.0
	fisicaPro= 0.0
	quimicaPro= 0.0
	matematicasTareasUno= 0.0
	matematicasTareasDos= 0.0
	matematicasTareasTres= 0.0
	fisicaTareasUno= 0.0
	fisicaTareasDos= 0.0
	quimicaTareasUno= 0.0
	quimicaTareasDos= 0.0
	quimicaTareasTres= 0.0
	matematicasPorTareas= 0.1
	fisicaPorTareas= 0.2
	quimicaPorTareas= 0.15
	matematicasExamen= 0.0
	fisicaExamen= 0.0
	quimicaExamen= 0.0
	matematicasExamenNota= 0.0
	fisicaExamenNota= 0.0
	quimicaExamenNota= 0.0
	matematicasPorExamen= 0.9
	fisicaPorExamen= 0.8
	quimicaPorExamen= 0.85
	
	matematicasTareasUno= float(input("Dijite la notas de la primera tarea de matematicas: "))
	matematicasTareasDos= float(input("Dijite la notas de la segunda tarea de matematicas: "))
	matematicasTareasTres= float(input("Dijite la notas de la tercera tarea de matematicas: "))
	fisicaTareasUno= float(input("Dijite la notas de la primera tarea de fisica: "))
	fisicaTareasDos= float(input("Dijite la notas de la segunda tarea de fisica: "))
	quimicaTareasUno= float(input("Dijite la notas de la primera tarea de quimica: "))
	quimicaTareasDos= float(input("Dijite la notas de la segunda tarea de quimica: "))
	quimicaTareasUno= float(input("Dijite la notas de la tercera tarea de quimica: "))
	matematicasExamenNota= float(input("Dijite la nota del examen de matematicas: "))
	fisicaExamenNota= float(input("Dijite la nota del examen de fisica: "))
	quimicaExamenNota= float(input("Dijite la nota del examen de quimica: "))
	
	matematicasTareas= ((matematicasTareasUno + matematicasTareasDos + matematicasTareasTres)/3) * matematicasPorTareas
	matematicasExamen= matematicasExamenNota * matematicasPorExamen
	matematicasPro = matematicasExamen + matematicasTareas
	
	fisicaTareas= ((fisicaTareasUno + fisicaTareasDos)/2) * fisicaPorTareas
	fisicaExamen= fisicaExamenNota * fisicaPorExamen
	fisicaPro= fisicaExamen + fisicaTareas
	
	quimicaTareas= ((quimicaTareasUno + quimicaTareasDos + quimicaTareasTres)/3) * quimicaPorTareas
	quimicaExamen= quimicaExamenNota * quimicaPorExamen
	quimicaPro= quimicaExamen + quimicaTareas
	
	print("El Promedio de nota de Matematicas es: "+str(matematicasPro))
	print("El Promedio de nota de fisica es: "+str(fisicaPro))
	print("El Promedio de nota de quimica es: "+str(quimicaPro))

```
3. Leer un real e imprimir si el número es positivo o negativo.
   
### Pseudocodigo
```
INICIO
    Definir n Como Real

    n= 0.0

    Escribir "dijite un numero cualquiera: "
    Leer n 

    Si n<0 Entonces
          Escribir n," es negativo"
    SiNo
          Escribir n," es positiva"
    Fin Si
FIN
```
### Python
```
 	n=float(input("Dijite un numero cualquiera: "))
	
	if n<0:
	   print(str(n)+ " es negativo")
	else: 
	   print(str(n)+ "es positivo")
```
4. Leer un real e imprimir si el número es mayor a 200 o no.
   
### Pseudocodigo 

```
INICIO
    Definir n Como Real

    n= 0.0

    Escribir "dijite un numero cualquiera: "
    Leer n 

    Si n>200 Entonces
	Escribir n," es mayor a 200"
    SiNo
	Escribir n," es menor a 200"
    Fin Si

FIN
```
### Python
```
	n=float(input("Dijite un numero cualquiera"))
	
	if n>200 :
	  print(str(n)+" Es mayor a 200")
	else:
	  print(str(n)+" Es menor a 200")
```
5. Leer un real e imprimir si el número está en el rango de 50 y 100.
### Pseudocodigo
```
INICIO
    Definir n Como Real

    n= 0.0

    Escribir "dijite un numero cualquiera: "
    Leer n 

    Si 50<n<100 Entonces
	Escribir n," esta en el rango de 50 a 100"
     SiNo
	Escribir n," no esta en el rango de 50 a 100"
     Fin Si
FIN
```
### Python
```
	n=float(input("Dijite un numero cualquiera"))
	
	if 50<0<=100 : 
	  print(str(n)+" Esta en el ranago de 50 a 100")
	else:    
	  print(str(n)+" No esta en el ranago de 50 a 100")
```



