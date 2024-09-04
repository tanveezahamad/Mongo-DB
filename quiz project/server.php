<?php
// Connect to your MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "local";

// Create a new database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user data and quiz results from POST parameters
$name = isset($_POST['name']) ? $_POST['name'] : '';
$age = isset($_POST['age']) ? $_POST['age'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$score = isset($_POST['score']) ? $_POST['score'] : 0;

// Use prepared statements to prevent SQL injection
$stmt = $conn->prepare("INSERT INTO results (name, age, email, score) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sisi", $name, $age, $email, $score);

if ($stmt->execute()) {
    echo "Results stored successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Close the prepared statement and the database connection
$stmt->close();
$conn->close();
?>
<?php
// Connect to your MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "local";

// Create a new database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to select data from the "results" table
$sql = "SELECT * FROM results";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Name</th><th>Age</th><th>Email</th><th>Score</th></tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"] . "</td><td>" . $row["age"] . "</td><td>" . $row["email"] . "</td><td>" . $row["score"] . "</td></tr>";
    }

    echo "</table>";
} else {
    echo "No results found";
}

// Close the database connection
$conn->close();
?>
