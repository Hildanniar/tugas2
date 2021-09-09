<?php

        Class induk

        {

            public $dataPublic="Ini data Public";

            private $dataPrivate="Ini data Private";

            protected $dataProtected="Ini data Protectted";

 

            public function PublicFunction(){

                echo "Ini Fungsi Public";

            }

 

            private function PrivateFunction(){

                echo "Ini Fungsi Private";

            }



            protected function ProtectedFunction(){
                echo "Ini Fungsi Protected";

            }

 

        }

        class anak extends induk

        {

 

            //property yang dapat diakses dari class turunan

            public function PropertyYgBisa(){

                echo "dataPublic = ".$this->dataPublic."<br/>";

                echo "dataProtected = ".$this->dataProtected."<br/>";

 

            }

 

            public function RemakeProtectedFunction(){

                //cara menggunakan method pada class induk

                $this->ProtectedFunction();

            }

 

        }

 

        $data=New anak();

 

        //menampilkan properti yang dapat 
        echo "<hr/>dataPublic = ".$data->dataPublic." <br><hr/>";

         

        //menampilkan properti yang dapat diakses dari class turunan

        $data->PropertyYgBisa();

         

        echo "<hr>";

        //menggunakan method yang dapat digunakan dari objek class turunan

        $data->PublicFunction();

 

        echo "<br/>";

        $data->RemakeProtectedFunction();

 

?>
