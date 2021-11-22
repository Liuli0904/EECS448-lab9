<?php
        $q1 = $_POST["q1"];
        $q2 = $_POST["q2"];
        $q3 = $_POST["q3"];
        $q4 = $_POST["q4"];
        $q5 = $_POST["q5"];
        $score = 0;

        echo "Question 1: What is the Capital of Portugal? <br>";
        echo "You answered: " . $q1 . "<br>";
        echo "Correct answer: Lisbon <br>";
        echo "<br>";
        {$score+=20;}

        echo "Question 2: What is the Professor of this course? <br>";
        echo "You answered: " . $q2 . "<br>";
        echo "Correct answer: David O. Johnson <br>";
        echo "<br>";
        {$score+=20;}

        echo "Question 3: What is the course number of this course? <br>";
        echo "You answered: " . $q3 . "<br>";
        echo "Correct answer: EECS 448 <br>";
        echo "<br>";
        {$score+=20;}

        echo "Question 4: How many exams does this course have? <br>";
        echo "You answered: " . $q4 . "<br>";
        echo "Correct answer: 0 <br>";
        echo "<br>";
        {$score+=20;}

        echo "Question 5: What was the capital of Spain? <br>";
        echo "You answered: " . $q5 . "<br>";
        echo "Correct answer: Madrid <br>";
        echo "<br>";
        {$score+=20;}

        echo "Your score is: ".$score. "%. <br>";
?>