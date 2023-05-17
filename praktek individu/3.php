<table border="1">
  <tr style="background-color: blue;">
    <th>Nomor</th>
    <th>Nama</th>
    <th>Kelas</th>
  </tr>
  <?php
    for ($i = 1; $i <= 10; $i++) {
      if ($i % 2 == 0) {
        echo "<tr>";
      } else {
        echo "<tr style='background-color: red;'>";
      }
      echo "<td>" . $i . "</td>";
      echo "<td>" . "Nama ke-" . $i . "</td>";
      echo "<td>" . "Kelas " . (10 - $i + 1) . "</td>";
      echo "</tr>";
    }
  ?>
<<<<<<< HEAD
</table
=======
</table>

>>>>>>> 96c7111a0bbbc01ca6b24deffcbed0c7775dadde
