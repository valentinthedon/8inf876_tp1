<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <h1>Calculateur d'IMC</h1>
    <form action="index.php" method="post"> 
        <p>
            <label for="pseudo">Pseudo: </label>
            <input type="text" name="pseudo" id="pseudo" required>
        </p>
        <p>
            <label for="taille">Taille: </label>
            <input type="number" name="taille" id="taille" required>
        </p>
        <p>
            <label for="poids">Poids: </label>
            <input type="number" name="poids" id="poids" required>
        </p>
        <input type="submit" value="Calculer">
        </form>

        <br>

        <table>
        <thead>
            <tr>
                <th colspan="5">Enregistrements</th>
            </tr>
            <tr>
                <th>Date</th>
                <th>Pseudo</th>
                <th>Taille</th>
                <th>Poids</th>
                <th>IMC</th>
            </tr>
        </thead>
        <tbody>
                <?php
                    $servername = "db";
                    $username = "php";
                    $password = "php_password";
                    $dbname = "8inf876";

                    $conn = new mysqli($servername,
                        $username, $password, $dbname);
                    
                    if ($conn->connect_error) {
                        die("Connection failed: "
                            . $conn->connect_error);
                    } else{
                        if($_POST){
                            $pseudo = $_REQUEST['pseudo'];
                            $taille =  $_REQUEST['taille'];
                            $poids =  $_REQUEST['poids'];
                            
                            $sql = "INSERT INTO imc VALUES (NOW(), '$pseudo', $poids, $taille)";
                            if(mysqli_query($conn, $sql)){
                                echo "<h3> Donnée inséré </h3>";
                            } else{
                                echo "ERROR: Hush! Sorry $sql. "
                                    . mysqli_error($conn);
                            }
                        }

                        $sql = "SELECT * FROM imc";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["recording_date"]. " </td>";
                                echo "<td>" . $row["pseudo"]. " </td>";
                                echo "<td>" . $row["taille"]. " cm</td>";
                                echo "<td>" . $row["poids"]. " </td>";
                                echo "<td>" . $row["poids"] / (($row["taille"] / 100) ** 2) . " </td>";
                                echo "</tr>";
                            }
                        }
                        mysqli_close($conn);
                    }
                ?>
        </tbody>
    </table>
</body>
</html>