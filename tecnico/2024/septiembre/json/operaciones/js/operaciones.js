function realizarTodasOperaciones(){

    fetch('libreria/calcular.php',{
        method: 'POST',
        headers:{
            'content-Type':'application/json'
        },
        body: JSON.stringify({
            numero1: 24,
            numero2: 12
        })
    })
    .then(response => response.json())
    .then(data =>{
        if(data.error){
            alert(data.error);
        }else{
            document.getElementById('resultado').textContent=`suma: ${data.suma}`;
            document.getElementById('resultado').textContent=`resta: ${data.resta}`;
            document.getElementById('resultado').textContent=`multiplicacion: ${data.multiplicacion}`;
            document.getElementById('resultado').textContent=`division: ${data.division}`;
        }
    })
    .catch(error => console.error('Error:',error));
}