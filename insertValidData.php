<?php
if ($isValid) {

    if($address2 == ""){
        $address2 = null;
    }

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",
            $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = $conn->prepare("INSERT INTO registration (userName, password, firstName, lastName,
			address1, address2, city, state, zipCode, phone, email, gender, maritalStatus, 
			dateOfBirth)
			VALUES (:name, :password, :firstName, :lastName, :address1, :address2,
			:city, :state, :zipcode, :phone, :email, :gender,
			:maritalStatus, :birthday)");
        $sql->bindParam(':name', $name);
        $sql->bindParam(':password', $password1);
        $sql->bindParam(':firstName', $firstName);
        $sql->bindParam(':lastName', $lastName);
        $sql->bindParam(':address1', $address1);
        $sql->bindParam(':address2', $address2);
        $sql->bindParam(':city', $city);
        $sql->bindParam(':state', $state);
        $sql->bindParam(':zipcode', $zipcode);
        $sql->bindParam(':phone', $phone);
        $sql->bindParam(':email', $email);
        $sql->bindParam(':gender', $gender);
        $sql->bindParam(':maritalStatus', $marital);
        $sql->bindParam(':birthday', $birthday);

        $sql->execute();

        $last_id = $conn->lastInsertId();
        $_SESSION["last_id"] = "$last_id";

        header("Location: confirmation.php");
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    } finally {
        $conn = null;
    }
}
