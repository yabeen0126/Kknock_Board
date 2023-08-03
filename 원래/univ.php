<!DOCTYPE html>
<html>

<head>
    <title>University List</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        /* Style for the scrollable box */
        .scrollable-box {
            max-height: 300px;
            /* Set the desired height here */
            overflow-y: scroll;
            border: 1px solid #ccc;
            padding: 10px;
        }
    </style>
</head>

<body>
    <h1>University List</h1>

    <div class="board">
        <?php
        // Database connection details
        $host = "localhost";
        $username = "habin";
        $password = "qwert1234";
        $database = "database";

        // Create a connection
        $conn = new mysqli($host, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch the university list from the database
        $sql = "SELECT university_name FROM universities";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table>';
            echo '<tr><th>장부</th></tr>';

            while ($row = $result->fetch_assoc()) {
                $universityName = $row['university_name'];
                echo '<tr><td><a href="another_page.php?university=' . urlencode($universityName) . '">' . $universityName . '</a></td></tr>';
            }

            echo '</table>';
        } else {
            echo 'No universities found in the database.';
        }

        // Close the database connection
        $conn->close();
        ?>
    </div>
</body>

</html>