class persona{

  constructor(pnombre,pedad){
    let nombre= pnombre
    let edad=pedad

    this.getNombre= function(){
      return nombre
    }
    this.getEdad= function(){
      return edad
    }
  }
}

const persona1=new persona(this.nombre="juan",this.edad=20)
console.log("nombre: "+ this.nombre+)