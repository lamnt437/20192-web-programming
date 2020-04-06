<html>
    <head>
        <title> Distance and Time Calculations </title>
    </head>
    <body>
    <?php
        $cities = array (
            'Dallas' => 803, 
            'Toronto' => 435, 
            'Boston' => 848, 
            'Nashville' => 406,
            'Las Vegas' => 1526,
            'San Francisco' => 1835,
            'Washington, DC'=> 595,
            'Miami' => 1189, 
            'Pittsburgh' => 409
        );
        
        if(isset($_GET['destination'])) {
            $destination = $_GET['destination'];
            
            echo "<table>";
            echo "<tr>";
            
            echo "<th>";
            echo "No.";
            echo "</th>";
            
            echo "<th>";
            echo "Destination";
            echo "</th>";
            
            echo "<th>";
            echo "Distance";
            echo "</th>";
            
            echo "<th>";
            echo "Driving time";
            echo "</th>";
            
            echo "<th>";
            echo "Walking time";
            echo "</th>";
            
            echo "</tr>";
            
            $counter = 0;
            foreach($destination as $des) {
                if (isset($cities[$des])) {
                    $counter++;
                    $distance = $cities[$des];
                    $time = round(($distance / 60), 2);
                    $walktime = round(($distance / 5), 2);
                    
                    echo "<tr>";
                    
                    echo "<td>";
                    echo $counter;
                    echo "</td>";
                    
                    echo "<td>";
                    echo $des;
                    echo "</td>";
                    
                    echo "<td>";
                    echo $distance;
                    echo "</td>";
                    
                    echo "<td>";
                    echo $time;
                    echo "</td>";
                    
                    echo "<td>";
                    echo $walktime;
                    echo "</td>";
                    
                    echo "</tr>";
                } else {
//                    print "Sorry, do not have destination information for $destination.";
                    continue;
                }
            }
            
            echo "</table>";
        } else {
            print "Empty destination!";
        }
    ?>
    </body>
</html>