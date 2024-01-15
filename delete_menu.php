<?php
// Check if the menuId is set in the POST request
if (isset($_POST['menuId'])) {
    $menuId = $_POST['menuId'];

    // Perform the delete operation based on the menuId
    $deleteQuery = "DELETE FROM your_menu_table WHERE id_menu = $menuId"; // Replace with your actual table name
    $result = $conn->query($deleteQuery);

    if ($result === TRUE) {
        echo "Menu deleted successfully";
    } else {
        echo "Error deleting menu: " . $conn->error;
    }
}

$conn->close();
?>
