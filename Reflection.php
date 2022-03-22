<!-- Sebuah institusi ingin melakukan pendataan identitas peserta yang ada dengan menggunakan suatu 
program bernama Identity, yang mana program ini menggunakan konsep Reflection dalam PHP. 
Program identity menerima input nama, umur, alamat/asal, dan hobi, kemudian mengeluarkan hasil inputan tersebut. -->

<?php

class Identity {
	private $Name;
	private $Age;
	private $Address;
    private $Hobbies;

	public function __construct($Name, $Age, $Address, $Hobbies) {
		$this->setName($Name);
        $this->setAge($Age);
        $this->setAddress($Address);
        $this->setHobbies($Hobbies);
	}

	public function setName($Name) {
		$this->Name = $Name;
	}
	public function getName() {
		return $this->Name;
	}
    public function setAge($Age) {
		$this->Age = $Age;
	}
	public function getAge() {
		return $this->Age;
	}
    public function setAddress($Address) {
		$this->Address = $Address;
	}
	public function getAddress() {
		return $this->Address;
	}
    public function setHobbies($Hobbies) {
		$this->Hobbies = $Hobbies;
	}
	public function getHobbies() {
		return $this->Hobbies;
	}
	
}


echo "Welcome Ladies & Gentlemen To Reflection Example 1!!!!";
echo "\n=====================================================\n";

// Mark I
$Name = readline("Enter your name : ");
$Age = readline("Enter your age : ");
$Address = readline("Enter your address : ");
$Hobbies = readline("Enter your hobby : ");
$ID = new Identity($Name, $Age, $Address, $Hobbies);

$IDRef= new ReflectionClass($ID);
$IDNM = $IDRef->getMethod("getName");
$IDAM = $IDRef->getMethod("getAge");
$IDADM = $IDRef->getMethod("getAddress");
$IDHM = $IDRef->getMethod("getHobbies");
echo "\nHello!!!\n";
echo "Name \t\t: ";
echo $IDNM->invoke($ID);
echo "\nAge \t\t: ";
echo $IDAM->invoke($ID);
echo "\nAddress \t: ";
echo $IDADM->invoke($ID);
echo "\nHobby \t\t: ";
echo $IDHM->invoke($ID);


// Mark II
// $Name = readline("Enter your name : ");
// $Age = readline("Enter your age : ");
// $Address = readline("Enter your address : ");
// $Hobbies = readline("Enter your hobby : ");
// $ID = new Identity($Name, $Age, $Address, $Hobbies);

// $IDRef= new ReflectionClass($ID);
// $IDNM = $IDRef->getMethod("getName");
// $IDAM = $IDRef->getMethod("getAge");
// $IDADM = $IDRef->getMethod("getAddress");
// $IDHM = $IDRef->getMethod("getHobbies");
// echo "\nHello!!!\n";
// try{
// echo "Name \t\t: ";
// echo $IDNM->invoke($ID);
// echo "\nAge \t\t: ";
// echo $IDAM->invoke($ID);
// echo "\nAddress \t: ";
// echo $IDADM->invoke($ID);
// echo "\nHobby \t\t: ";
// echo $IDHM->invoke($ID);
// }
// catch(ReflectionException $RE){
// 	echo"Error";

// }




?>
