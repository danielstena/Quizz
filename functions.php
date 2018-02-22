<?php
        

function questions($answer, $correct){
    if($answer == $correct){
        echo "Rätt!";
        
        return 1;
    }
    else{
        echo "feeeel!"; 
        return 0;
    }
}
