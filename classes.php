<?php
class Question {
    function __construct($text, $answerOne, $answerX, $answerTwo, $correct){
        $this->text = $text;
        $this->answerOne = $answerOne;
        $this->answerX = $answerX;
        $this->answerTwo = $answerTwo;
        $this->correct = $correct;
    }
} 

$questionsArray = array(
$first = new Question("How many oscars did the Titanic movie got?", "Eleven", "two", "six", "Eleven"),
$second = new Question("How many Tomb Raider movies were made?", "Two_movies", "four_movies", "one movie", "Two_movies"),
$third = new Question("Which malformation did Marilyn Monroe have when she was born?", "Six_toes", "three_feet", "four_hands", "Six_toes"),
$fourth = new Question("What is the house number of the Simpsons?", "Number_742", "number_1", "number 666", "Number_742"),
$fifth = new Question("What is the name of the prison in the film The Rock?", "Alcatraz", "The Mountain", "The hill", "Alcatraz"),
$six = new Question("Who is the protagonist in the Last Action Hero film?", "Arnold_Schwarzenegger", "Sylvester_Stalone", "Peter_Stormare", "Arnold_Schwarzenegger"),
$seven = new Question("Who is the director of Reservoir Dogs?", "Quentin_Tarantino", "John Travolta", "Peter Malmsten", "Quentin_Tarantino"),
$eight = new Question("Who is the director of the X-files?", "Rob_Bowman", "Peter Forsberg", "Olof Palme", "Rob_Bowman"),
$ninth = new Question("What number is on Herbie the beatle?", "twenty-eight", "Fifty-three", "nine", "Fifty-three"),
$tenth = new Question("Which actor does play Sonny Crockett in Miami Vice 2006?", "Nicolas Cage", "Pamela Andersson", "Colin_Farell", "Colin_Farell")
);