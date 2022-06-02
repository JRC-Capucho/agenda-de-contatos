<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <meta name="author" content="JRC-Capucho">
    </head>
    
    <body>



        <?php 

        include "../form.html";

        class Person {

            private ?string $firstName;
            private ?string $lastName;
            private ?string $email;
            private ?string $nickName;
            private ?string $gender;
            private ?string $company;
            private ?string $phoneNumber;
            private ?string $address;
            private ?string $birthday;
            private ?string $relationShip;
            private ?string $note;

            function __construct(
            ?string $fName,
            ?string $lName, 
            ?string $email,
            ?string $nName, 
            ?string $gender,
            ?string $company, 
            ?string $pNumber, 
            ?string $birthday,
            ?string $address, 
            ?string $relationShip,
            ?string $nt
            )
            {
                $this->firstName = $fName;
                $this->lastName = $lName;
                $this->email = $email;
                $this->nickName = $nName;
                $this->gender = $gender;
                $this->company = $company;
                $this->phoneNumber = $pNumber;
                $this->address = $address;
                $this->relationShip = $relationShip;
                $this->note = $nt;
                $this->birthday = $birthday;
            }
            
            function setFirstName(?string $n) { $this->firstName = $n; }
            function getFirstName() { return $this->$firstName; }

            function setLastName(?string $n) { $this->lastName = $n; }
            function getLastName() { return $this->lastName; }

            function setEmail(?string $n) { $this->email = $n; }
            function getEmail() { return $this->email; }

            function setNickName(?string $n) { $this->nickName = $n; }
            function getNickName() { return $this->nickName; }

            function setGender(?string $n) { $this->gender = $n; }
            function getGender() { return $this->gender; }

            function setCompany(?string $n) { $this->company = $n; }
            function getCompany() { return $this->company; }

            function setPhone(?string $n) { $this->phoneNumber = $n; }
            function getPhone() { return $this->phoneNumber; }

            function setAddress(?string $n) { $this->address = $n; }
            function getAddress() { return $this->address; }

            function setBDay(?string $n) { $this->birthday= $n; }
            function getBDay() { return $this->birthday; }

            function setRelationShip(?string $n) { $this->relationShip = $n; }
            function getRelationShip() { return $this->relationShip; }

            function setNote(?string $n) { $this->note = $n; }
            function getNote() { return $this->note; }

            function mostraNome() 
            {
                echo $this->lastName;
                echo $this->email;
                echo $this->nickName;
                echo $this->gender;
                echo $this->company;
                echo $this->phoneNumber;
                echo $this->address;
                echo $this->relationShip;
                echo $this->firstName;
                echo $this->birthday;
            }
        }

        $p = new Person(
            $_POST["fname"],
            $_POST["lname"],
            $_POST["nickname"],
            $_POST["gender"],
            $_POST["company"],
            $_POST["pnumber"],
            $_POST["email"],
            $_POST["address"],
            $_POST["relationship"],
            $_POST["note"],
            $_POST["birthday"]
        );

            echo "<br><br>";
            echo $_POST["fname"];
            echo "<br>";
            echo $_POST["lname"];
            echo "<br>";
            echo $_POST["nickname"];
            echo "<br>";
            echo $_POST["gender"];
            echo "<br>";
            echo $_POST["company"];
            echo "<br>";
            echo $_POST["pnumber"];
            echo "<br>";
            echo $_POST["email"];
            echo "<br>";
            echo $_POST["address"];
            echo "<br>";
            echo $_POST["relationship"];
            echo "<br>";
            echo $_POST["note"];
            echo "<br>";
            echo $_POST["birthday"];
            echo "<br>";

        echo "<br>nice<br>";
        echo "<br><br>";
        $p->setNickName("Zeca Urubu");
        echo "Nick name is " . $p->getNickName();
        echo "<br><br>";
        echo "<br><br>";

        $p->mostraNome();
        ?>
    </body>

    </html>