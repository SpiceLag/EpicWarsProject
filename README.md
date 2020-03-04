
#Epic Wars

Este juego planea ser el mejor MMORPG del mundo superando por mucho al **World of Warcraft**, para ello necesitamos iniciar con el pie derecho, ¿No es así?

Como maestr@ ingenier@, am@ de la mazmorra y señor/a de las fuentes arcanas, es su deber con el reino el diseño adecuado del software que soportará esta gran aventura.

### Razas

El juego se compone inicialmente de **razas** que podrá seleccionar el jugador, cada raza tiene sus habilidades especiales incluídas como se lista a continuación:

* Humanoides
	* **Humanos**: Los humanos tienen una ventaja racial que les permite un mejor desempeño en actividades de supervivencia, por esto los humanos tienen una bonificación de 2% en intelecto y 5% en agilidad.
	* **Enanos**: Los enanos, robustos y astutos cuentan con la ventaja de un incremento en intelecto del 2% y en sus puntos de vida de un 4%.
	* **Orcos**: Los orcos son una clase guerrera por excelencia, son capaces de luchar incluso heridos de muerte y por esto cuentan con bonificación de 8% en fuerza, 5% en sus puntos de vida y desafortunadamente -5% en intelecto (realmente no son tan astutos cuando de aplastar no se trata).
	* **Elfos**: Los elfos son nobles e inteligentes, realmente magestuosos en la manupilación de energías arcanas y en tecnicas de supervivencia, por esta razón los elfos tienen una bonificación de 10% en intelecto y 5% en agilidad, están tan acostumbrados a nunca ser alcanzados que han perdido destreza en la defensa física y por esto tienen un -5% de defensa física.

Todos los humanoides cuentan con los iguientes atributos:

* name
* sex
* bodyType [atletico, delgado, rellenito de amor]
* healpoints
* level
* str (strenght)
* intl (intelect)
* agi (agility)
* pDef (physical defense)
* mDef (magic defense)
* xp (experience points)

Todos los humanoides pueden ser afectados por las siguientes acciones:

* **learnSkill**: Recibe como parámetro el skill a aprender y el personaje que lo aprenderá sólo en el caso de que el skill pueda ser aprendido por su raza y clase.

* **forgetSkill**: Recibe como parámetro el skill a olvidar y el personaje que lo aprenderá, si el personaje conoce el skill, entonces podrá ser olvidado.
* **die**: Recibe como parámetro el personaje a ser asesinado.
* **revive**: Recibe como parámetro el personaje a ser revivido, al revivir el personaje regresa con 10% de su salud máxima a menos que se reviva con una skill de revivir, en ese caso aplican las normas del skill.
* **levelUp**: Recibe el personaje a subir de nivel y la cantidad de niveles a subir. El nivel máximo es 100.
* **levelDown**: Recibe el personaje a bajar de nivel y la cantidad de niveles a bajar. El nivel mínimo es 1.
* **takeDamage**: Recibe la cantidad de daño que afectará los healtpoints del personaje teniendo en cuenta que el daño recibido se reduce en 1% por cada 10 puntos de armadura del personaje, además la defensa aplicada en el cálculo debe corresponder al tipo de ataque recibido (mágico o físico). Si el daño recibido deja los healtpoints < 0, entonces el personaje debe morir.
* **attack**: Recibe el skill a utilizar y realiza el calculo de daño a causar teniendo encuenta que los atáques de tipo fisicos se benefician de la fuerza del personaje, así que por cada 10 puntos de fuerza, el daño a realizar se aumenta en un 2%, así mismo por cada 10 puntos de agilidad del personaje la probabilidad de un impacto crítico aumenta en un 1%, si el impacto es crítico entonces el daño causado se multiplica por 150%; para los ataques de tipo mágico funciona de la misma manera pero en este caso el intelecto es quien incrementa el daño un 2% por cada 10 puntos.

### Clases

Las clases permiten definir el camino del personaje en un conjunto de habilidades únicas, Epic Wars cuenta con las siguientes clases:

* **Mago**: Los magos tienen habilidades únicas en el control de las fuerzas arcanas, por esto son los únicos que pueden aprender skills de tipo mágicas, aunque también pueden aprender de tipo físicas, siempre que dichas habilidades sean ataques de tipo básicos. Los Magos pueden usar armas de dos manos como: bastones; también armas de una mano como: varitas, espadas y dagas.
* **Guerrero**: Los guerreros tienen habilidades prominentes en el uso de armas y la fuerza bruta, pero no logran manipular las fuerzas mágicas, por esta razón los guerreros no pueden aprender habilidades mágicas de ningún tipo, mientras que logran aprender habilidades de guerrero y físicas básicas y avanzadas. Los guerreros pueden usar armas de dos manos como: espadas, bastones y hachas; también armas de una mano como: dagas, espadas y hachas.
* **Picaro**: Los picaros siempre muy astutos pueden aprender habilidades físicas y mágicas básicas, además de las habilidades propias de pícaro. Los picaros pueden no pueden usar armas de dos manos,  pero son expertos en armas de una mano como: dagas, espadas y hachas.



### Habilidades

A continuación se listan las habilidades por categorías:

| Nombre              | Tipo              | Descripción                                                  |
| ------------------- | ----------------- | ------------------------------------------------------------ |
| Golpe con arma      | Físico / Básico   | El personaje ataca inflingiendo el 100% del daño de arma si esta es de mano derecha o dos manos, pero de ser de mano izquierda inflingirá 70% |
| Golpe trampero      | Físico / Picaro   | El personaje distrae a su oponente con un movimiento malintencionado asestando un golpe con arma que inflije 150% de daño con ambas armas |
| Tajo mortal         | Físico / Guerrero | El personaje salta con intenciones despiadadas y raja a su enemigo inflingiendo 200% de daño con armas. |
| Meditación          | Mágico / Básico   | El personaje medita un momento incrementando su agilidad e intelecto en 5%. |
| Calcinación         | Mágico / Mago     | El personaje invoca el poder arcano y el elemento del fuego para quemar a su enemigo inflingiendo 40% de su intelecto como daño mágico. |
| Tacticas de combate | Físico / Avanzado | El personaje repasa el campo de batalla preparando su siguiente golpe, esto incrementa su fuerza y agilidad en un 5%. |

Diseñe el software que permita traer a la vida este grandioso juego y recuerde utilizar todos sus conocimientos en POO y principios SOLID para ello. Al final cree 4 personajes y evalue que las condiciones del juego se cumplan correctamente. La definición de las armas las dejo a su libre creatividad pero le recomiendo al menos definir 1 arma de dos manos para el guerrero, un arma de dos manos para el mago y dos armas de una mano para el picaro.



