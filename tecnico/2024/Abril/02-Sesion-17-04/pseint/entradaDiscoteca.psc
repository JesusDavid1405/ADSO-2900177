
Algoritmo entradaDiscoteca
	
	Definir  nombre, apellido,msgEdad,entrar Como Caracter
	Definir  edad Como Entero
	
	Escribir "ingrese sus nombres: "
	Leer  nombre;
		
	Escribir "ingrese sus apellidos: "
	Leer  apellido

	edad <- 0
	
	Mientras edad<=0 Hacer
		Escribir "ingrese su edad"
		Leer  edad
		
		si edad<=0 Entonces
			Escribir "el valor ingresado es menor o igual a 0, no es valido, por favor ingresar nuevamente"
		FinSi
	Fin Mientras
	
	si edad<18 Entonces
		msgEdad<- " Es menor de edad, "
		entrar<- "no puede entrar a la discoteca "
	SiNo
		msgEdad<- " Es mayor de edad"
		entrar<- " puede entrar a la discoteca"
	FinSi
	
	Escribir nombre," ",apellido,msgEdad,entrar;
	
	
FinAlgoritmo
