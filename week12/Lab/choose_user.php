<?php
    include_once 'config.php';
    $connect = mysqli_connect($server, $user, $pass, $db);
    
    if(!$connect) {
        
        die("Can't connect to db!");
    }
    
    $sql = "Select * from users";
    
    $results = mysqli_query($connect, $sql);
    
    $users = [];
    
    if(mysqli_num_rows($results) > 0) {
        while($row = mysqli_fetch_assoc($results)) {
//            array_push($users, $row['UserName']);
            $user = [
                'id' => $row['id'],
                'name' => $row['UserName']
            ];
            
            array_push($users, $user);
        }
    }
?>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript">
            function showUser(str) {
                if(str=="") {
                    document.getElementById("txtHint").innerHTML="";
                    return;
                }
                if(window.XMLHttpRequest) {
                    // code for newer browser
                    xmlhttp = new XMLHttpRequest();
                } else {
                    // code for old IE
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                
                xmlhttp.onreadystatechange=function() {
                    if(xmlhttp.readyState==4 && xmlhttp.status==200) {
                        document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "users.php?q="+str, true);
                xmlhttp.send();
            }
            
            function showUserXML(str) {
                xmlDoc = xmlHttp.responseXML;
                document.getElementById();
                xmlDoc.getElementByTagName("firstname")[0].childNodes[0].nodeValue;
            }
        </script>
    </head>
    <body> 
        <div>
            <form>
                <select name="users" onchange="showUser(this.value)">
                    <option value="">Choose an user</option>
                    <?php
                        foreach($users as $user) {
                            $id = $user['id'];
                            $name = $user['name'];
                            echo "<option value=\"$id\">$name</option>";
                        }
                    ?>
                </select>
            </form>
            <br>
            <div id="txtHint">
                <b>Person info will be displayed here</b>
            </div>
        </div>
    </body>
</html>
