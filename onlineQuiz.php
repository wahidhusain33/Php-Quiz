<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Test</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<style>
.but{
    margin-left:10px;
}
</style>

</head>
<body>
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
                        "correct"=>"op3"
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

// echo "<pre>";
// print_r($Ques);
// echo "</pre>";

?>
<form action="quiz2.php" method="POST">


<?php

echo '<div id="form_div">';
foreach($Ques as $key1 => $val1){
    foreach($val1 as $key2 => $val2){
        if($key2=='ques'){
            echo "<h2>" . $val1['ques'] . "</h2>";
        }
        else if($key2 == 'correct'){
            continue;

        }
        else{
            echo '<div class="form-check">
            <input class="form-check-input" type="radio" name="op' . ($key1+1) .'" id="flexRadioDefault1" value="' . $key2 . '">
            <label class="form-check-label" for="flexRadioDefault1">';
            echo $val2;
            echo "</label>";
            echo "</div>";
        }
    }
}
echo '<button type="submit" class="btn btn-success but">Submit</button>';

echo "</div>";


?>

</form>
</body>
</html>