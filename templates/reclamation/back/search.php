<?php
// Include database connection
require 'database_connection.php';

// Check if a search query was sent
if (isset($_POST['query'])) {
    $query = $_POST['query'];
    // Prepare the SQL statement with placeholders
    $stmt = $conn->prepare("SELECT * FROM reclamation WHERE titre LIKE ? OR description LIKE ?");
    // Add wildcards for partial matching
    $searchPattern = '%' . $query . '%';
    $stmt->bind_param('ss', $searchPattern, $searchPattern);
    $stmt->execute();
    $result = $stmt->get_result();
    
    // Fetch results and output them as HTML
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div>';
            echo '<h3>' . htmlspecialchars($row['titre']) . '</h3>';
            echo '<p>' . htmlspecialchars($row['description']) . '</p>';
            echo '</div>';
        }
    } else {
        echo 'No results found';
    }
    
    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
