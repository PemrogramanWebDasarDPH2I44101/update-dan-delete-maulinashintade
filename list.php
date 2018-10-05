<?php
require_once("db.php");
?>
<table border=1>
    <thead>
        <th>Nama</th>
        <th>NIM</th>
        <th>Tanggal Lahir</th>
    </thead>
    <tbody>
<?php
$sql    = "SELECT * FROM siswa";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["nama"]. "</td>"; 
        echo "<td>" . $row["nim"]. "</td>";
        echo "<td>" . $row["tgl_lahir"]. "</td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?> 
    </tbody>
</table>