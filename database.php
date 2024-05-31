<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Arial', sans-serif;
        background-color: #121212;
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .container {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
        backdrop-filter: blur(10px);
        border-radius: 10px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        padding: 20px;
        text-align: center;
        margin: 20px;
        overflow-y: auto;
        animation: fadeIn 1s ease-in-out;
    }
    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: scale(0.9);
        }
        100% {
            opacity: 1;
            transform: scale(1);
        }
    }
    table {
    width: 100%;
    border-collapse: separate;
    margin-top: 20px;
    border-spacing: 0;
    border-radius: 10px;
    overflow: hidden;
    }

    th, td {
        padding: 10px;
        text-align: center;
        border-bottom: 1px solid rgba(255, 255, 255, 0.3);
    }

    th {
        background-color: rgba(255, 255, 255, 0.2);
        font-weight: bold;
    }

    td {
        background-color: rgba(255, 255, 255, 0.1);
    }

    tr:first-child th:first-child {
        border-top-left-radius: 10px;
    }

    tr:first-child th:last-child {
        border-top-right-radius: 10px;
    }

    tr:last-child td:first-child {
        border-bottom-left-radius: 10px;
    }

    tr:last-child td:last-child {
        border-bottom-right-radius: 10px;
    }

    tr:hover td {
        background-color: rgba(255, 255, 255, 0.2);
    }
    p {
        margin: 20px 0;
        font-size: 1.2em;
        color: #00FF00; 
        text-shadow: 0 0 5px rgba(0, 255, 0, 0.7); 
    }
    #failed{
        color: #FF0000; 
        text-shadow: 0 0 5px rgba(255, 0, 0, 0.7); 
    }


    nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #333;
    padding: 20px 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    z-index: 1000;
    border-radius: 0 0 10px 10px;
    }

    nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    nav ul li {
        margin: 0 10px;
    }

    nav ul li a {
        font-size: 1.2em;
        text-decoration: none;
        color: #fff;
        padding: 10px 15px;
        border-radius: 3px;
        transition: color 0.3s ease, background-color 0.3s ease;
    }

    nav ul li a:hover {
        color: #00FF00; 
        background-color: #444;
        text-shadow: 0 0 5px rgba(0, 255, 0, 0.7); 
    }

    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="database.php">Show records</a></li>
            <li><a href="index.html">Add client</a></li>
        </ul>
    </nav>
    <?php 
            $host = 'localhost';
            $username = 'root';
            $password = 'Boketto@2811'; 
            $dbname = 'hair_salon';

            try{
                $conn = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
                $query = $conn->query("SELECT * FROM clients");
                $clients = $query->fetchAll(PDO::FETCH_ASSOC);
                $conn = null;
            } catch(PDOException $e){
                $message = $e->getMessage();
                echo    "<div id='container'>
                            <p id= 'failed' > $message </p>
                        </div>";
            }    
    ?>

    <div class="container">
        <table>
            <tr>
                <th>Name</th>
                <th>Phone Number</th>
                <th>email</th>
                <th>registration_date</th>
            </tr>
            <?php foreach($clients as $client){ ?>
            <tr>
                <td><?= htmlspecialchars($client["name"]) ?></td>
                <td><?= htmlspecialchars($client["phone_number"]) ?></td>
                <td><?= htmlspecialchars($client["email"]) ?></td>
                <td><?= htmlspecialchars($client["registration_date"]) ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
