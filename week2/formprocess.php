<!DOCTYPE html>
<html>
    <head>
        <title>User Infomation</title>
        <style>
            :root {
                box-sizing: border-box;
            }
            
            *,
            :before,
            :after {
                box-sizing: inherit;
            }
            
            body {
                font-family: Helvetica;
                font-size: 18px;
            }
            
            .container {
                max-width: 1080px;
                margin: auto;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <header>
                <h1>Hello<?php if(isset($_POST['name'])) echo ', ' . $_POST['name'];?></h1>
            </header>
            <main>
                <div class="content">
                    <div class="user-info">
                        <h2>Your full information</h2>
                        <p>Name: <?php if(isset($_POST['name'])) echo $_POST['name'];?></p>
                        <p>Age: <?php if(isset($_POST['age'])) echo $_POST['age'];?></p>
                        <p>Gender: <?php if(isset($_POST['gender'])) echo $_POST['gender'];?></p>
                        <p>Class: <?php if(isset($_POST['class'])) echo $_POST['class'];?></p>
                        <p>Class: <?php if(isset($_POST['hobby'])) echo $_POST['hobby'];?></p>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
