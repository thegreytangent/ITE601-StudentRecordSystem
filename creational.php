<?php
class Accounting {


    public function addOne($number) {


        // s get back to our stock 
        // market app. To solve
        //  the dilemma of
        //   incompatible formats, you can
        //    create XML-to-JSON adapters for every
        //     class of the analytics library that your
        //      code works with directly. Then you adjust your code to commun
        //      icate with the library only via these adapters. When an adap
        //      ter receives a call, it translates the incoming XML
        return $number + 2; 
    }

    public function multiply($number) {
        return $number / 2;
    }

}

class Accounting2 {

    public function solve(Accounting $accounting, $number) {
           return $accounting->addOne($number) - 1 ; 
    }

}


class AccountingFix {





}

$number = 5;

$accounting = new Accounting();
echo "old ->>> " . $accounting->addOne($number );
echo "<br/>";


$accounting2 = new Accounting2();
echo "new ->>> ".$accounting2->solve(new Accounting(), $number );



