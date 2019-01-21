<?phpclass Animal { 
public function say() {
	echo '<br>[animales]<br>';}}
$animal= new animal();$animal->say();


class marine extends Animal{
public function say() {	
	echo'<br>[mamiferos]-----------------------[anfibios]';} }
$marine= new marine();$marine->say();

class Dog extends Animal{ 
public function say() { 
	echo '<br>[perro:ladra , amigo ,veloz]  '; } } 
$dog= new Dog(); $dog->say();

class lion extends Animal { 
public function say() { 
	echo '<br>[leon:macho,ruge, felino] '; }}
$lion= new lion();$lion->say(); 



class cow extends Animal { 
public function say() { 
	echo '<br>[vaca:muge,hembra, leche ] '; } }
$cow= new cow(); $cow->say();









