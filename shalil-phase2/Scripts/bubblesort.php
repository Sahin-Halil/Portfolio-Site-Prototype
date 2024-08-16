<?php
// Bubble sort the posts array by date in descending order
$length = count($posts);
for ($i = 0; $i < $length - 1; $i++) {
    for ($j = 0; $j < $length - $i - 1; $j++) {
        if (strtotime($posts[$j]['datetime']) < strtotime($posts[$j + 1]['datetime'])) {
            // Swap the posts
            $temp = $posts[$j];
            $posts[$j] = $posts[$j + 1];
            $posts[$j + 1] = $temp;
        }
    }
}
?>