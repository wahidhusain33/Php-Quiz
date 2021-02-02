<?php

$Ques = Array(
    0=>Array(
               "ques"=>"Which has block level scope ?",
"op1"=>"var",
"op2"=>"let",
"op3"=>"const",
"op4"=>"none",
"correct"=>"op1"
),
1=> Array(
"ques"=>"What is full form of PHP ?",
"op1"=>"Preprocessor HyperText",
"op2"=>"Personal home page",
"op3"=>"Pay house Payment",
"op4"=>"none",
"correct"=>"op1"
),
2=> Array(
    "ques"=>"What is used to print a varible in php?",
    "op1"=>"println",
    "op2"=>"show",
    "op3"=>"echo",
    "op4"=>"none",
    "correct"=>"op2"
    ),
    3=> Array(
        "ques"=>"Which among them is an assignment operator ?",
        "op1"=>"==",
        "op2"=>"===",
        "op3"=>"=",
        "op4"=>"none",
        "correct"=>"op3"
        ),
        4=> Array(
            "ques"=>"How to make a single line comment in php ?",
            "op1"=>"#",
            "op2"=>"/* */",
            "op3"=>"<>",
            "op4"=>"none",
            "correct"=>"op1"
            ),
            5=> Array(
                "ques"=>"Which of the following is correct about constants vs variables in PHP?",
                "op1"=>"There is no need to write a dollar sign ($) before a constant, where as in Variable one has to write a dollar sign.",
                "op2"=>"Constants cannot be defined by simple assignment, they may only be defined using the define() function.",
                "op3"=>"Both of the above",
                "op4"=>"none of the above",
                "correct"=>"op3"
                ),
                6=> Array(
                    "ques"=>"Which among them is an exit controlled loop ?",
                    "op1"=>"for loop",
                    "op2"=>"while loop",
                    "op3"=>"Do While loop",
                    "op4"=>"none",
                    "correct"=>"op3"
                    ),
                    7=> Array(
                        "ques"=>"How to conacatenate strings in php ?",
                        "op1"=>"Using +",
                        "op2"=>"Using .",
                        "op3"=>"Using *",
                        "op4"=>"Using ",
                        "correct"=>"op2"
                        ),
                        8=> Array(
                            "ques"=>"Which of the following function is used to get length of a string ?",
                            "op1"=>"size()",
                            "op2"=>"strlen()",
                            "op3"=>"length",
                            "op4"=>"none",
                            "correct"=>"op2"
                            ),
                            9=> Array(
                                "ques"=>"Which of the following variable is used to generate random numbers using PHP ?",
                                "op1"=>"srand()",
                                "op2"=>"rand()",
                                "op3"=>"random()",
                                "op4"=>"none",
                                "correct"=>"op2"
                                ),
                                10=> Array(
                                    "ques"=>"Which of the following function returns the sum of the values in an array?",
                                    "op1"=>"array_sum()",
                                    "op2"=>"array_splice()",
                                    "op3"=>" array_udiff()",
                                    "op4"=>"array_udiff_assoc()",
                                    "correct"=>"op1"
                                    ),
);
$marks=0;
foreach($Ques as $key1 => $val1){
    if(isset($_POST['op' . ($key1+1)])){
        // We can use isset method to check if the value is empty or not.

        if($_POST['op' .($key1+1)]==$val1['correct']){
            $marks++;
        }
    }
}
echo $marks . " marks out of 10";

echo '<button type="reset" style="background-color:blue, color:white;"><a href="onlineQuiz.php">Reset</a></button>';
?>