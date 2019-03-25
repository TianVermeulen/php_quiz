<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>PHP Quiz</title>
</head>
<body>
<?php

$questions = array(
    '
    <h4>Question 1</h4>
    <h5> 3 + 4: </h5>
    <input type="radio" name="q1" value="A" />5<br>
    <input type="radio" name="q1" value="B" />3<br>
    <input type="radio" name="q1" value="C" />6<br>
    <input type="radio" name="q1" value="D" required="required" />7',

    '
    <h4>Question 2</h4>
    <h5> 8 + 2: </h5>
    <input type="radio" name="q2" value="A" />13<br>
    <input type="radio" name="q2" value="B" />9<br>
    <input type="radio" name="q2" value="C" />11<br>
    <input type="radio" name="q2" value="D" required="required" />10',

    '
    <h4>Question 3</h4>
    <h5> 13 + 4: </h5>
    <input type="radio" name="q3" value="A" />14<br>
    <input type="radio" name="q3" value="B" />15<br>
    <input type="radio" name="q3" value="C" />20<br>
    <input type="radio" name="q3" value="D" required="required" />17',

    '
    <h4>Question 4</h4>
    <h5> 5 + 4: </h5>
    <input type="radio" name="q4" value="A" />10<br>
    <input type="radio" name="q4" value="B" />16<br>
    <input type="radio" name="q4" value="C" />12<br>
    <input type="radio" name="q4" value="D" required="required" />9',

    '
    <h4>Question 5</h4>
    <h5> 14 + 15: </h5>
    <input type="radio" name="q5" value="A" />23<br>
    <input type="radio" name="q5" value="B" />26<br>
    <input type="radio" name="q5" value="C" />27<br>
    <input type="radio" name="q5" value="D" required="required" />29',

    '
    <h4>Question 6</h4>
    <h5> 5 + 10: </h5>
    <input type="radio" name="q6" value="A" />25<br>
    <input type="radio" name="q6" value="B" />16<br>
    <input type="radio" name="q6" value="C" />12<br>
    <input type="radio" name="q6" value="D" required="required" />15',

    '
    <h4>Question 7</h4>
    <h5> 42 + 9: </h5>
    <input type="radio" name="q7" value="A" />48<br>
    <input type="radio" name="q7" value="B" />50<br>
    <input type="radio" name="q7" value="C" />43<br>
    <input type="radio" name="q7" value="D" required="required" />51',

    '
    <h4>Question 8</h4>
    <h5> 23 + 12: </h5>
    <input type="radio" name="q8" value="A" />40<br>
    <input type="radio" name="q8" value="B" />32<br>
    <input type="radio" name="q8" value="C" />36<br>
    <input type="radio" name="q8" value="D" required="required" />35',

    '
    <h4>Question 9</h4>
    <h5> 5 + 6: </h5>
    <input type="radio" name="q9" value="A" />10<br>
    <input type="radio" name="q9" value="B" />12<br>
    <input type="radio" name="q9" value="C" />13<br>
    <input type="radio" name="q9" value="D" required="required" />11',

    '
    <h4>Question 10</h4>
    <h5> 6 + 9: </h5>
    <input type="radio" name="q10" value="A" />14<br>
    <input type="radio" name="q10" value="B" />12<br>
    <input type="radio" name="q10" value="C" />19<br>
    <input type="radio" name="q10" value="D" required="required" />15',

    '
    <h4>Question 11</h4>
    <h5> 11 + 13: </h5>
    <input type="radio" name="q11" value="A" />21<br>
    <input type="radio" name="q11" value="B" />25<br>
    <input type="radio" name="q11" value="C" />23<br>
    <input type="radio" name="q11" value="D" required="required" />24',

    '
    <h4>Question 12</h4>
    <h5> 12 + 14: </h5>
    <input type="radio" name="q12" value="A" />30<br>
    <input type="radio" name="q12" value="B" />27<br>
    <input type="radio" name="q12" value="C" />23<br>
    <input type="radio" name="q12" value="D" required="required" />26',

    '
    <h4>Question 13</h4>
    <h5> 15 + 9: </h5>
    <input type="radio" name="q13" value="A" />20<br>
    <input type="radio" name="q13" value="B" />13<br>
    <input type="radio" name="q13" value="C" />27<br>
    <input type="radio" name="q13" value="D" required="required" />24',

    '
    <h4>Question 14</h4>
    <h5> 6 + 1: </h5>
    <input type="radio" name="q14" value="A" />6<br>
    <input type="radio" name="q14" value="B" />4<br>
    <input type="radio" name="q14" value="C" />8<br>
    <input type="radio" name="q14" value="D" required="required" />7',

    '
    <h4>Question 15</h4>
    <h5> 8 + 8: </h5>
    <input type="radio" name="q15" value="A" />15<br>
    <input type="radio" name="q15" value="B" />17<br>
    <input type="radio" name="q15" value="C" />14<br>
    <input type="radio" name="q15" value="D" required="required" />16',

    '
    <h4>Question 16</h4>
    <h5> 9 + 2: </h5>
    <input type="radio" name="q16" value="A" />10<br>
    <input type="radio" name="q16" value="B" />13<br>
    <input type="radio" name="q16" value="C" />14<br>
    <input type="radio" name="q16" value="D" required="required" />11',

    '
    <h4>Question 17</h4>
    <h5> 2 + 3: </h5>
    <input type="radio" name="q17" value="A" />7<br>
    <input type="radio" name="q17" value="B" />4<br>
    <input type="radio" name="q17" value="C" />6<br>
    <input type="radio" name="q17" value="D" required="required" />5',

    '
    <h4>Question 18</h4>
    <h5> 18 + 2: </h5>
    <input type="radio" name="q18" value="A" />21<br>
    <input type="radio" name="q18" value="B" />19<br>
    <input type="radio" name="q18" value="C" />24<br>
    <input type="radio" name="q18" value="D" required="required" />20',

    '
    <h4>Question 19</h4>
    <h5> 5 + 5: </h5>
    <input type="radio" name="q19" value="A" />11<br>
    <input type="radio" name="q19" value="B" />9<br>
    <input type="radio" name="q19" value="C" />12<br>
    <input type="radio" name="q19" value="D" required="required" />10',

    '
    <h4>Question 20</h4>
    <h5> 6 + 12: </h5>
    <input type="radio" name="q20" value="A" />17<br>
    <input type="radio" name="q20" value="B" />19<br>
    <input type="radio" name="q20" value="C" />16<br>
    <input type="radio" name="q20" value="D" required="required" />18'

);


?>
    <h2>Welcome to my quiz</h2>
    <h3>Please select an answer for each question</h3>
<form action= <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method= "post">
<?php


 $correctans = 0;
 



    for($x = 0; $x < count($questions); $x++) {
        echo $questions[$x];
        echo "<br>";
    }; 

    if(!empty($_POST)){
        $ques1 = $_POST["q1"];
        $ques2 = $_POST["q2"];
        $ques3 = $_POST["q3"];
        $ques4 = $_POST["q4"];
        $ques5 = $_POST["q5"];
        $ques6 = $_POST["q6"];
        $ques7 = $_POST["q7"];
        $ques8 = $_POST["q8"];
        $ques9 = $_POST["q9"];
        $ques10 = $_POST["q10"];
        $ques11 = $_POST["q11"];
        $ques12 = $_POST["q12"];
        $ques13 = $_POST["q13"];
        $ques14 = $_POST["q14"];
        $ques15 = $_POST["q15"];
        $ques16 = $_POST["q16"];
        $ques17 = $_POST["q17"];
        $ques18 = $_POST["q18"];
        $ques19 = $_POST["q19"];
        $ques20 = $_POST["q20"];
        

        if($ques1 == "D"){
            $correctans++;
        };
    
        

        if($ques2 == "D"){
            $correctans++;
        };

        

        if($ques3 == "D"){
            $correctans++;
        };


        if($ques4 == "D"){
            $correctans++;
        };


        if($ques5 == "D"){
            $correctans++;
        };


        if($ques6 == "D"){
            $correctans++;
        };


        if($ques7 == "D"){
            $correctans++;
        };


        if($ques8 == "D"){
            $correctans++;
        };


        if($ques9 == "D"){
            $correctans++;
        };


        if($ques10 == "D"){
            $correctans++;
        };


        if($ques11 == "D"){
            $correctans++;
        };


        if($ques12 == "D"){
            $correctans++;
        };


        if($ques13 == "D"){
            $correctans++;
        };


        if($ques14 == "D"){
            $correctans++;
        };


        if($ques15 == "D"){
            $correctans++;
        };


        if($ques16 == "D"){
            $correctans++;
        };


        if($ques17 == "D"){
            $correctans++;
        };


        if($ques18 == "D"){
            $correctans++;
        };


        if($ques19 == "D"){
            $correctans++;
        };


        if($ques20 == "D"){
            $correctans++;
        };





            
            
    };
        
?>
<input type="submit" value="Submit">
</form>
<?php

    if($correctans != 0){
        echo "<br>";
        echo "<p>Congrats, you got ".$correctans." out of 20.</p>";
    

        if( 0 < $correctans && $correctans < 10){
            echo "<br>";
            echo " <p>you got less than 10, try again.</p>";
        }elseif(10<$correctans && $correctans<15){
            echo "<br>";
            echo "<p>not bad! more than 10</p>";
        }else{
            echo "<br>";
            "<p>You got more than 15!</p>";
        };
    };

?>



</body>
</html>