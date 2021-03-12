<?php

   include_once('rezultat.php');

   class Broj extends Rezultat {
       
    protected $user_type;
    protected $tehnologija;
    protected $pottip;

    public function __construct(Rezultat $obj){

        $this->user_type = $obj->user_type;
        $this->tehnologija = $obj->tehnologija;
        $this->pottip = $obj->pottip;
  }
    //   broj na back-end ili front-end developeri
    public function brojTip(){

        $sql = "SELECT * FROM users WHERE  tip = ?";

        $stmt = $this->konekcija()->prepare($sql);
        $stmt->execute([$this->user_type]);
            
        $broj = $stmt->rowCount();
        echo  "<br/>" . $this->user_type . " (" . $broj . ") <br/><br>";
    }
      //   broj na developeri po tehnologija
    public function brojTehnologija(){

        $sql = "SELECT * FROM users WHERE  tehnologija = ?";

        $stmt = $this->konekcija()->prepare($sql);
        $stmt->execute([$this->tehnologija]);
           
        $broj = $stmt->rowCount();
        echo $this->tehnologija . " (" . $broj . ") <br/><br/>";
   }
     //    broj na developeri po pottip
    public function brojPottip(){

        $sql = "SELECT * FROM users WHERE pottip = ?";

        $stmt = $this->konekcija()->prepare($sql);
        $stmt->execute([$this->pottip]);
       
        $broj = $stmt->rowCount();
        echo $this->pottip . " (" . $broj . ") <br/>";
    }
}