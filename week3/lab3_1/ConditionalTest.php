<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <?php
            $first = $_GET["firstName"];
            $middle = $_GET["middleName"];
            $last = $_GET["lastName"];
            
            print("Hi $first! Your full name is $last $middle $first. <br>");
            
            if($first == $last) {
                print("$first and $last are equal");
            }
            
            if($first < $last) {
                print("$first is greater than $last");
            }
            
            print("<br></br>");
            
            $grade1 = $_GET["grade1"];
            $grade2 = $_GET["grade2"];
            
            $final = (2 * $grade1 + 3 * $grade2) / 5;
            printf("Your final grade is %.1f. ", $final);
            
            if($final > 8.9) {
                print("You got an A. Congratulation!");
                $rate = "A";
            }
            else if($final > 7.9) {
                print("You got a B. Congratulation!");
                $rate = "B";
            }
            else if($final > 6.9) {
                print("You got a C. Congratulation!");
                $rate = "C";
            }
            else if($final > 5.9) {
                print("You got a D. Congratulation!");
                $rate = "D";
            }
            else if($final > 3.9) {
                print("You got an E. Congratulation!");
                $rate = "E";
            }
            else if($final >= 0) {
                print("You got an F. Congratulation!");
                $rate = "F";
            } else {
                print("Illegal grade less than 0.");
                $rate = "Illegal";
            }
            
            print("<br>");
            switch($rate) {
                case "A": $message = "Excellent!"; break;
                case "B": $message = "Good!"; break;
                case "C": $message = "Not bad!"; break;
                case "D": $message = "Normal!"; break;
                case "E": $message = ""; break;
                case "F": $message = "You have to try again!"; break;
                default: $message = "Illegal grade!";
            }
            
            print("$message");
        ?>
    </body>
</html>
