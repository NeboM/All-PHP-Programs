<?php


function guessTheNumber($from,$to){
    $number = rand($from,$to);
    echo "Guess my number, between $from and $to \n";
    echo "Take a guess: \n";
    $guessNum = (int)trim(fgets(STDIN,1024));
    for($i = 0; $i <= 2; $i++){
        if($number < $guessNum){

            if($i != 2){
                echo "My number is lower. Guess again: \n";
                $guessNum = (int)trim(fgets(STDIN,1024));
            }else{
                echo "Better luck next time.\n";
                return false;
            }

        }else if($number > $guessNum){

            if($i != 2){
                echo "My number is higher. Guess again: \n";
                $guessNum = (int)trim(fgets(STDIN,1024));
            }else{
                echo "Better luck next time.\n";
                return false;
            }

        }else{
            echo "Correct!!";
            return true;
        }
    }
}


guessTheNumber(1,10);
