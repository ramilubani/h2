<?php

class Hond {

    public $gewicht = '5kg';
    public $kleur = 'wit';
    

    public function getGewicht() {
        echo 'this hond is :' . $this->gewicht . '<br>' ;
        echo 'and he is' . $this->kleur . 'colour';
    }

  
    }



                $hond_1 = new Hond();
                $hond_1->gewicht = '10kg';
                $hond_1->kleur = 'zwart';
                $hond_1->getGewicht();
               

       



                $hond_2 = new Hond();
                $hond_2->gewicht = '15kg';
                $hond_2->kleur = 'bruine';
                $hond_2->getGewicht();


       

                $hond_3 = new Hond();
                $hond_3->gewicht;
                $hond_3->kleur;
                $hond_3->getGewicht();

      

