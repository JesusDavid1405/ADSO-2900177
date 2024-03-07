numUno=0
numDos=0
numTres=0

msg="Se organizaron los numeros del menor a mayor "

while numUno== 0 and numDos== 0 and numTres == 0: 
    try: 
        numUno=float(input("Dijite el primer numero: "))
        numDos=float(input("Dijite el segundo numero: "))
        numTres=float(input("Dijite el tercer numero: "))
        if numUno<numDos<numTres:
            print(msg,numUno,"<",numDos,"<",numTres)
        else:
            if numDos<numTres<numUno:
                print(msg,numDos,"<",numTres,"<",numUno)
            else: 
                if numTres<numDos<numUno:
                    print(msg,numTres,"<",numDos,"<",numUno)
                else:
                    if numTres<numUno<numDos:
                        print(msg,numTres,"<",numUno,"<",numDos)
                    else:
                        if numUno<numTres<numDos:
                            print(msg,numTres,"<",numUno,"<",numDos)
                        else: 
                            if numUno<numTres<numDos:
                                print(msg,numDos,"<",numUno,"<",numTres)
                            else: 
                                print("No es valido")

    except:
        print("el valor ingresado no es valido, por favor volver a ingresar")
        numUno=0
        numDos=0
        numTres=0
