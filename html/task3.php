<?php
$age = (int)$_GET['age'];
if($age >=18 && $age <=65){
    echo "Вам еще работать и рабоотать";
}
else if($age >65 ){
    echo "Вам пора на пенсию";
}
else if($age >=1 && $age <=17 ){
    echo "Вам еще рано работать";
}
else{
    echo "Неизвестный возраст";
}