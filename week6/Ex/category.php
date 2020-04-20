<?php
    require_once 'config.php';
    
    $conn = mysqli_connect($server, $user, $pass, $mydb);
    if(!$conn) {
        die("Can't connect to db!");
    }
    
    if(isset($_POST['CatId'])) {
        $CatId = $_POST['CatId'];
        $Title = $_POST['Title'];
        $Description = $_POST['Description'];
        
        $sql = "INSERT INTO Categories(CatId, Title, Description) VALUES('$CatId', '$Title', '$Description')";
        if(mysqli_query($conn, $sql)) {
            echo "Successfully added a new Category!<br>";
        } else {
            echo "Failed to add a new Category!<br>";
        }
    }
    
    $sql = "Select * from Categories";
    
    $results = mysqli_query($conn, $sql);
    
    $categories = [];
    
    if(mysqli_num_rows($results) > 0) {
        while($row = mysqli_fetch_assoc($results)) {
            $categories[] = [
                'CatId' => $row['CatId'], 
                'Title' => $row['Title'], 
                'Description' => $row['Description']
            ];
        }
    }
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>Category Administration</h1>
        <div>
            <form action="admin.php" method="post">
                <table>
                    <tr>
                        <th>
                            Cat ID
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Description
                        </th>
                    </tr>

                    <?php
                        foreach($categories as $category) {
                            $CatId = $category['CatId'];
                            $Title = $category['Title'];
                            $Description = $category['Description'];

                            echo "<tr>";
                            echo "<td>$CatId</td>";
                            echo "<td>$Title</td>";
                            echo "<td>$Description</td>";
                            echo "</tr>";
                        }
                    ?>

                    <tr>
                        <td><input type="text" name="CatId"/></td>
                        <td><input type="text" name="Title"/></td>
                        <td><input type="text" name="Description"/></td>
                    </tr>
                </table>
                
                <input type="submit" value="Add Category"/>
            </form>         
            
        </div>
    </body>
</html>