<?php
if (isset($_POST['user']) && ($_POST['user'] == 'michael')){
    echo "Hello, ".$_POST['user'].
        "<br/>your age is: ".$_POST['age'].
        "<br/>your sex is: ".$_POST['sex'].
        "<br/>your number is: ".$_POST['num'];
} else {
    echo "i dont care who you are";
}

