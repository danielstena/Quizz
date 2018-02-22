<?php
$r = 0;
require "classes.php";
require "functions.php";
require "head.php";
?>

<h1>QUIZ</h1>
<form action="index.php" method="POST">
    <?php
        for ($x = 0; $x < 10; $x++) {
            
            // $y = $x+1;
            
            echo '<div class="questiondiv">
            <div class="titlediv">
            Fråga '.$x.' 
            
            </div>
            '.$questionsArray[$x]->text.'
            <br/>   
            
            '.$questionsArray[$x]->answerOne.'
            <input type="radio" name='.$x.' value='.$questionsArray[$x]->answerOne.'>
            <br/>
            
            '.$questionsArray[$x]->answerX.'
            <input type="radio"   name='.$x.' value='.$questionsArray[$x]->answerX.'>
            <br/>
            
            '.$questionsArray[$x]->answerTwo.'
            <input type="radio" name='.$x.' value='.$questionsArray[$x]->answerTwo.'>
            <br/>
            ';
            if(!empty($_POST)){
                $r=$r+questions($_POST[$x], $questionsArray[$x]->correct);
            }         
            ;} 
            echo "<br><h1>Antal rätt:";
            echo $r;
            
    ?> 
    <input type="submit">
</form>
</body>
</html>

  