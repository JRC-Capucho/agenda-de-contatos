<!DOCTYPE html>
<html lang="en">
    <head>
    </head>

    <body>
        <?php
            $servername = "localhost";
            $username = "root";           
            $password = "";
            $database = "agenda";
            $port = 3306;
        
            try {
                //code...
                $conn = new PDO("myslq:host=$servername;dbname=$database", $username, $password);
    
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connect successfully!";
                
            } catch (PDOException $th) {
                echo "Connect failed: " .$th->getMessage();
            }
        ?>
    </body>

</html>