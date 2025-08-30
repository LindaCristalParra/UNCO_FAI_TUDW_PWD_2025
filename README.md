## PHP Trabajo Práctico Nº 1 – Repaso
_Observación: Crear un nuevo proyecto php llamado Practico1. Dentro de este proyecto
cree un directorio para cada uno de los ejercicios del TP._

Ejercicio 1 – En un nuevo archivo con extensión php:
a) Cree una variable, asignarle un valor y muestre su contenido con una instrucción
echo.
b) Escriba el valor de la variable de forma que aparezca en un párrafo explicativo (por
ejemplo: “El valor de X es: …”)


Ejercicio 2 – Crear un script php que guarde en diferentes variables su nombre, apellido, edad
y dirección y luego muestre en pantalla estos datos con letra mayúscula.
Cuando ejecute la pagina dentro del navegador, observe el código fuente y analice las
diferencias entre el código escrito y el código que esta viendo.


Ejercicio 3 – Crear un script php en el que generen un array unidimensional asociativo que
contenga sus datos personales (apellido, nombre, documento, dirección) y luego mostrar los
datos almacenados por pantalla.


Ejercicio 4 – Realizar un programa que, a partir de tres variables enteras llamadas $a, $b y $c,
muestre por pantalla el valor de la mayor y la menor de ellas. Si por ejemplo asignamos los
valores 15, 94 y 73 a $a, $b y $c respectivamente, por pantalla debe mostrarse:
El mayor valor de 15, 94 y 73 es 73
El menor valor de 15, 94 y 73 es 15


Ejercicio 5 – Mostrar por pantalla la tabla de multiplicar del 2. Emplear el for, luego el while y
por último el do/while. La salida debe verse con el siguiente formato:
2 x 1 es 2
2 x 2 es 4……


Ejercicio 6 – Crear un programa en php en el que generen un array bidimensional asociativo
que contenga los para cada día de la semana la materia que cursan junto con la carga horaria
de la misma. Luego recorrer el array usando una estructura foreach que muestre por pantalla la
información contenida.


Ejercicio 7 – Dado un array de 20 elementos que consiste en números reales (con coma
decimal) y que cada elemento representa la venta del día de un comercio. Calcular el promedio
de ventas utilizando alguna estructura iterativa.


Ejercicio 8 – Dado el siguiente array:
$nombres = array(‘roberto’,’juan’,’marta’,’moria’,’martin’,’jorge’,’miriam’,’nahuel’,’mirta’). Realizar
un programa en PHP que lo recorra y genere un nuevo array con aquellos nombres que
comiencen con la letra m. Definir qué bucle conviene usar y luego mostrar el array resultado
por pantalla sin usar var_dump ni print_r. Los nombres deben aparecer uno debajo del otro.


Ejercicio 9 – Dado un array enumerativo de 10 elementos de números enteros (sin coma
decimal), encontrar el máximo de todos esos números usando una estructura iterativa y
mostrarlo por pantalla.


Ejercicio 10 – Crear una nueva pagina php y agregar el código <?php phpinfo(); ?>. Subir la pagina al servidor web y analizar cuáles de los datos que se están mostrando son conocidos para ustedes.


Ejercicio 11 – Completar los siguiente programa con la definición de las funciones requeridas

```
<?php
//Incluir aquí la definición de la function
divisores($parametro)
$num=20;
echo "Los divisores de $num son: ";
foreach(divisores($num) as $divisor)
echo "$divisor <br />";
?>
```

```
<?php
//Completar aquí con la definición de la function saludo()
$nombre=”SuNombre”;
echo "¡" . saludo() . " , $nombre!";
?>
```

_Obs: la función saludo() debe devolver el string que corresponda según la hora - “Buenos días”
(5:00 a 12:59hs), “Buenas tardes” (13:00 a 19:59hs), o “Buenas noches” (20:00 a 4:59hs)._
Ayuda: http://php.net/manual/es/function.date.php


Ejercicio 12 – Ejercitando con funciones varias
>a) Dentro del directorio EJ12 el cual va a contener un archivo funcionesVarias.php.

>b) En el archivo creado implementar las siguientes funciones:
>- Una función “darMes($numero)” que reciba como parámetro un numero y debe
retornar el mes en letras que representa el numero ingresado. Los meses estarán
almacenados en un array. (Ejemplo: para $numero=1 retorna “Enero”).
Una función que le de formato a un string con una fecha, ingresa a la función
“dd/mm/aaaa” y debe devolver “aaaa-mm-dd”
>- Una función que calcule el iva, ingresan a la función como dato, el monto y el
porcentaje a aplicar. Si no se envía ningún porcentaje se tomara el 21% por
defecto. La función deberá devolver el valor del iva calculado sobre el monto
ingresado.
>- Una función llamada PesosADolares que deberá recibir como parámetros un
importe y una cotización. En el supuesto caso que la cotización ingresada sea 0
(porque el usuario desconoce la cotización del día), tendrá que suponer que se
ingresó 6 (6$ = 1u$s). La función retornara el string “La cantidad de xxxx $
equivalen a xxxx u$s.”
>- Una función que reciba como parámetro un numero float y devuelva el numero
redondeado a dos decimales.
 Una función que reciba como parámetro un número float con coma y devuelva el
mismo número pero reemplazado la coma por un punto.
>- Una función para calcular la fecha de una persona. Recibe como parámetro la
fecha de nacimiento y devuelve la edad de la misma.
>- Una función para calcular el promedio de un conjunto de valores. Recibe como
parámetro un array con valores numéricos y devuelve el promedio de esos valores.


Ejercicio 13 – Crear un archivo pruebaFunciones.php que incluya el archivo
funcionesVarias.php creado en 1 agregue funcionalidad para invocar a las funciones definidas
con datos de prueba y muestre el resultado de cada operación por pantalla. 
