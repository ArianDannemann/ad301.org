<?php
include "php_connect.php";

// Fetch entries
$sql = "SELECT Name, Date, URL, Comment, Might_be_bot FROM guestbook ORDER BY Date DESC";
$result = $conn->query($sql);

// Display entries
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if (empty($row['Might_be_bot']) || $row['Might_be_bot'] == 0) {
            echo "<div class='entry'>";
            echo "<p><i>" . htmlspecialchars($row['Name']) . "</i> on " . htmlspecialchars($row['Date']);
            if (!empty($row['URL'])) {
                echo " (<a href='" . htmlspecialchars($row['URL']) . "'>" . htmlspecialchars($row['URL']) . "</a>)";
            }
            echo ":";
            echo "<p> " . htmlspecialchars($row['Comment']) . "</p>";
            echo "</div>";
        }
    }
} else {
    echo "<br>No comments yet";
}

$conn->close();
?>