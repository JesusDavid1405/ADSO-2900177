#  si el segundo numero es negativo y primero es impar imprimir el mayor de lo contrario el menor 

x=0 
y=0 

while x == 0 and y == 0:
    try: 
        x=float(input("Ingrese el primer numero: "))
        y=float(input("Ingrese el segundo numero: "))
        if y <0 and x %2 != 0:
           if x>y:
               print(x,",",y)
           else:
               print(y,",",x)
        else: 
            if(x>y):
                print(y,",",x)
            else:
                print(x,",",y)
    except:
        print("el valor ingresado no es valido, Por favor vuelva a ingresar nuevamente")
        x= 0 
        y= 0