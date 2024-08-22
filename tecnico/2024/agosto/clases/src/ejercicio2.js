class persona{

    constructor(nombre,edad){
      this.nombre=nombre;
      this.edad=edad;
    }
    saludar(){
      console.log("hola, mi nomre es "+this.nombre+" y tengo "+this.edad+" años")
    }
}

const persona1 = new persona(this.nombre="juan", this.edad=20);

persona1.saludar();