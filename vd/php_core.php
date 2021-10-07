<?php

    $content = "hi PHP languuage";
    $var = 15;
    $_msg = "Hello T2010M";

    echo $content;

    echo"<br>".$var;
    echo"<br>".$_msg;

    $x = 5;
    $y = 10;

    echo $x + $y."\n";
    echo $x % $y."\n";

    $a = 10;
    $b = 20;
    $c = $a = $b;

    //Data type:
    //1.boolean, integer, float, string
    //2. arrry, object

    $s = "this is PHP data type page";
    echo $s."<br>";
    $f = 1.5;//float
    $i = 10;//integer

    $concat_i = $i."conver integer";//integer

    //Condition : cau lenh dieu kien
    //1. if...else : kiem soat cac dieu kien truc tiep, tuc thi quyet dinh re nhanh
    //2.switch...case : Nhieu lua chon mang tinh co dinh 

    $day = "Sunday";
        if($day = "Sunday"){
            echo "its Sunday";
        }else{
            echo"it's not Sunday";
        }
    
    //if...elseif...else
    $dayCheck = "Sunday";
        if($day == "Friday"){
            echo"it's Friday"
        }
        elseif($day == "Sunday"){
            echo "It's Sunday";
        }else{
            echo "It not weekend as well not Friday";
        }

    //switch...case
    



    //loops: khoi lenh lap di lap lai cho den khi mot dieu kien cua vong thoa man
    //1. for => for(kt;dk;bn){}
    //2.while(dk){}
    //3.do{...}while(dk); :thuc hien it nhat 1 lan


    //for
    for($j = 0; $j<=10; $j++){
        echo $j."\n";
    }


    //while
    $number = 1;
    while($number <= 5){
        echo"the munber is : $number \n";
        $number++;
    }





    //Function
    //khi trien ham
    function greeting($message){
        echo $message;
    }

    //goi ham
    greeting("hello world");
    function sum()


?>