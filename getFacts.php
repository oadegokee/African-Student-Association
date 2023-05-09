<?php

require_once('sql_conn.php');

$query = "SELECT title, firstfact, secondfact from facts";
$response = @mysqli_query($dbc, $query);

if(mysqli_num_rows($response) > 0) {
    while ($row = mysqli_fetch_assoc($response)) {
        $title = $row['title'];
        $firstfact = $row['firstfact'];
        $secondfact = $row['secondfact'];

        if(empty($secondfact)) {
            echo '<div class="facts one">';
            echo '<h3>' .$title . '</h3>';
            echo '<p>' .$firstfact . '</p>';
            echo '</div>';
        } else {
            echo '<div class="facts two">';
            echo '<h3>' .$title . '</h3>';
            echo '<div id=two-facts>';
            echo '<div>' .$firstfact . '</div>';
            echo '<div>' .$secondfact . '</div>';
            echo '</div>';
            echo '</div>';
        }
    }
} else {
  echo "Something went wrong";
  echo mysqli_error($dbc);
}
?>
