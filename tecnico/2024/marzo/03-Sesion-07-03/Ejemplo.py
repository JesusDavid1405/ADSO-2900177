msg=""
x =  0
while x == 0 :
  try:
    x= float(input("Igresa el valor de X: "))
    if x %2 == 0 :
      msg += "El numero es par"
    else: 
      msg += "El numero es impar"
    if x>0 :
      msg += " y es positivo"
    else: 
      msg += " y es negativo"
    print(msg)  
  except:
    print("El valor ingresado no es un numero, Ingreso nuevamente") 
    x= 0
