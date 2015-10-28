<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

         class Fruit{
         	public $name;
         	public $color;
         	public $taste;
         

         public function __construct($_name, $_color, $_taste){
				$this->name = $_name;
				$this->color = $_color;
				$this->taste = $_taste;

           }


         public function tasteFruit(){
				
					echo $this->name." tastes ".$this->taste;
					echo "<br>";

			}

        public function colorFruit(){
				
					echo $this->name." is ".$this->color;
					echo "<br>";

			}



       }

       $fruit1 = new Fruit("apple", red, sweet);
       $fruit2 = new Fruit("banana", yellow, bitter);

       $fruit1->tasteFruit();
       echo $fruit1->taste;
       echo "<br>";


       


       $fruit2->colorFruit();
       // echo $fruit2->color;





		// =========== DEFINE THE CLASS ==========
		class Cat{
			// object properties
			public $name;
			public $age;
			public $weight;
			private $breed;

			// the object's constructor
			public function __construct($_name, $_age, $_weight){
				$this->name   = $_name;
				$this->age    = $_age;
				$this->weight = $_weight;


				if ($this ->weight>25){
					$this->breed = "Mountain Lion";
				}
			}

			public function feedCat($_food){
				if ($_food < $this->weight/8){
					echo $this->name." needs more food than that!";
					echo "<br>";
				} else {
					echo $this->name." is fully fed!";
					echo "<br>";
				}
			}

			public function howOld(){
				echo $this->name." is ".$this->age." years old.";
				echo "<br>";
				echo $this->name." is ".$this->age." cat years old!";
				echo "<br>";
			}
		}







		$cat1 = new Cat("Little Buddy", 2, 8);
        $cat3 = new Cat("Tiny", 1, 5);
        $cat4 = new Cat("Sharik", 3, 6);
        $cat5 = new Cat("Tuzic", 4, 7);


		$cat2 = new Cat("Sneaky Pete", 0, 2);

		$cat1->howOld();
		$cat1->feedCat(6);



		$cat3->howOld();
		
		echo "<br>";




		echo $cat2->name;
		echo "<br>";
	?>

</body>
</html>





