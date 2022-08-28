
<?php
include('function.php');
	class Classe{
		private $x;
		private $y;

		//Le constructeur

		public function __construct($x,$y){
			$this->x = $x;
			$this->y = $y;
		}

		//les accesseurs ou getters

		public function getX(){
			return $this->x;
		}

		public function getY(){
			return $this->y;
		}
		//les mutateurs ou setteurs

		public function setX($x){
			$this->x = $x;
		}

		public function setY($x){
			$this->y = $y;
		}
	}

	$objet1 = new Classe(12,15);

	$a = $objet1->getX();
	$b = $objet1->getY();

	$s = somme($a,$b);
	echo ":La somme de ".$a." et ".$b." est ".$s;

?>