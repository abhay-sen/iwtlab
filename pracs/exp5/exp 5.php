<?php

function display_books($filename) {
  $xml = simplexml_load_file($filename);

  echo "<table>";
  echo "<tr>";
  echo "<th>Title</th>";
  echo "<th>Author</th>";
  echo "<th>Edition</th>";
  echo "<th>Price</th>";
  echo "</tr>";

  foreach ($xml->book as $book) {
    echo "<tr>";
    echo "<td>" . $book->title . "</td>";
    echo "<td>" . $book->author . "</td>";
    echo "<td>" . $book->edition . "</td>";
    echo "<td>" . $book->price . "</td>";
    echo "</tr>";
  }

  echo "</table>";
}

// Example usage
display_books('D:\4thsem\iwt\pracs\exp5\books.xml');

?>
