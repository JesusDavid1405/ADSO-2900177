Algoritmo numeroMayorMenor
	Definir numeroUno, numeroDos, numeroTres Como Real
	numeroUno <- 0
	numeroDos <- 0
	numeroTres <- 0
	Mientras numeroUno=0 Y numeroDos=0 Y numeroTres=0 Hacer
		Si numeroUno>=0 Y numeroDos>=0 Y numeroTres>=0 Entonces
			Escribir 'ingrese el primer numero: '
			Leer numeroUno
			Escribir 'ingrese el segundo numero: '
			Leer numeroDos
			Escribir 'ingrese el tercer numero: '
			Leer numeroTres
			Si numeroUno=numeroDos O numeroTres=numeroDos O numeroUno=numeroTres Entonces
				Escribir 'alguno de los valores son iguales'
				numeroUno <- 0
				numeroDos <- 0
				numeroTres <- 0
			SiNo
				Si numeroUno>numeroDos Y numeroDos>numeroTres Entonces
					Escribir 'se organizaron los numeros de mayor a menor'
					Escribir numeroUno, ' > ', numeroDos, ' > ', numeroTres
				SiNo
					Si numeroUno>numeroTres Y numeroTres>numeroDos Entonces
						Escribir 'se organizaron los numeros de mayor a menor'
						Escribir numeroUno, ' > ', numeroTres, ' > ', numeroDos
					SiNo
						Si numeroTres>numeroDos Y numeroDos>numeroUno Entonces
							Escribir 'se organizaron los numeros de mayor a menor'
							Escribir numeroTres, ' > ', numeroDos, ' > ', numeroUno
						SiNo
							Si numeroTres>numeroUno Y numeroUno>numeroDos Entonces
								Escribir 'se organizaron los numeros de mayor a menor'
								Escribir numeroTres, ' > ', numeroDos, ' > ', numeroUno
							SiNo
								Si numeroDos>numeroTres Y numeroTres>numeroUno Entonces
									Escribir 'se organizaron los numeros de mayor a menor'
									Escribir numeroDos, ' > ', numeroTres, ' > ', numeroUno
								SiNo
									Si numeroDos>numeroUno Y numeroUno>numeroTres Entonces
										Escribir 'se organizaron los numeros de mayor a menor'
										Escribir numeroDos, ' > ', numeroUno, ' > ', numeroTres
									FinSi
								FinSi
							FinSi
						FinSi
					FinSi
				FinSi
			FinSi
		SiNo
			Escribir 'el valor ingresado no es valido'
			numeroUno <- 0
			numeroDos <- 0
			numeroTres <- 0
		FinSi
	FinMientras
FinAlgoritmo
