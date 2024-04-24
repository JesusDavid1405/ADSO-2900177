# manual de enseñanza readme 
### para que sirve?
Un archivo README suele ser el primer elemento que verá un visitante cuando entre a tu repositorio. Los archivos README habitualmente incluyen información sobre:
> 1. Qué hace el proyecto.
> 2. Por qué el proyecto es útil.
> 3. Cómo pueden comenzar los usuarios con el proyecto.
> 4. Dónde pueden recibir ayuda los usuarios con tu proyecto
> 5. Quién mantiene y contribuye con el proyecto.

### Markdown (md)
Markdown convierte el texto a HTML con ayuda de caracteres de formateo. Un archivo readme correctamente formado y estructurado ofrece a los usuarios un resumen completo del proyecto.
# sistaxis de estricturas README.md
### encabezados
Para crear un encabezado, agrega entre uno y seis símbolos (#) antes del encabezado del texto.
El número de (#) que utilices determinará el nivel jerárquico y el tamaño tipográfico del encabezado.
### Bold
**Esto es texto en negrita.** para utiizar la negrilla se utiliza estas sintesis (** **) o (__ __)
### cursiva 
_Este texto está en cursiva_ para utilizar la cursiva se usa estas sintesis (_ _) o (* *)
### Todo en negrita y cursiva
***Todo este texto es importante*** para dar a entender que un mensaje es importante se usa la sintesis (*** ***)
### Código de cita
Puedes indicar un código o un comando dentro de un enunciado con comillas simples. El texto dentro de las comillas simples no será formateado. 
También puedes presionar el método abreviado de teclado `Comando+E (Mac)` o `Ctrl+E (Windows o Linux)` para insertar las comillas simples de bloque de código en una línea de Markdown.
> hola `mundo`*(``)*
### insertar imagenes

![gato azul](gumballGit.png)

Puede mostrar una imagen ***agregando !*** y ajustar el ***texto alternativo en [ ]***.
El texto alternativo es un texto corto equivalente a la información de la imagen. Luego, escribe el vínculo de la imagen entre ***paréntesis ()***.
GitHub admite la inserción de imágenes en incidencias, solicitudes de incorporación de cambios, debates, comentarios y archivos (.md).
### lista de tareas
Para crear una lista de tareas, debe añadir como prefijo un guion y espacio, seguido de ***[ ]*** a los elementos de la lista. Para marcar una tarea como completada, use ***[x]***.
> - [x] dormir en clase
> - [x] no entender nada 
> - [x] tengo hambre
> - [ ] voy a trabajar en clases
### usar emojis
Puedes agregar emoji a la escritura escribiendo :EMOJICODE:, dos puntos seguidos del nombre del emoji.
 :skull:
> **ejemplo de emojis**
> + :smiling_imp:
> + :clown_face:
> + :sob:
> + :fearful:
### alertas 
Las alertas son una extensión Markdown basada en la sintaxis blockquote que puede utilizar para resaltar la información crítica. En GitHub, 
se muestran con colores e iconos distintivos para indicar la importancia del contenido.
Deben usarse las alertas solo cuando sean cruciales para el éxito del usuario y limitarlas a una o dos por artículo para evitar sobrecargar al lector.
Además, debe evitarse colocar alertas consecutivamente. Las alertas no se pueden anidar dentro de otros elementos.
Para agregar una alerta, debe usarse una línea blockquote especial que especifique el tipo de alerta, seguida de la información de alerta en un blockquote estándar. 
Existen cinco tipos de alertas.

> [!NOTE]
> Soy muy bueno madre mia.

> [!TIP]
> Poner cuidado al profesor.

> [!IMPORTANT]
> No dormir en clases.

> [!WARNING]
> Nunca falle un ejercicio porque si no le toca hacer 10 ejercicios mas.

> [!CAUTION]
> la 3 y la 4.
# organizacion de la informacion
Puede crear tablas con canalizaciones | y guiones -. Los guiones se usan para crear cada encabezado de columna, 
mientras que las barras verticales separan cada columna. Debes incluir una línea en blanco antes de tu tabla para que se representen correctamente.

| comida hoy  | dormir hoy |
| ------------- | ------------- |
| agua   | hace 10 minutos  |
| nada  | en 10 minutos  |



