<?php
include 'db/koneksi.php'
?>

<!-- coding by codinglab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- ... (kode head sebelumnya) ... -->
    </head>
    <body>
        <nav class="sidebar close">
            <!-- ... (kode sidebar sebelumnya) ... -->
        </nav>

        <section class="home">
            <div class="text">menu</div>

            <div class="container">
                <table>
                    <thead>
                        <tr>
                            <th>id menu</th>
                            <th>nama menu</th>
                            <th>kategori</th>
                            <th>harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM menu";

                        //Execute the query
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["id_menu"] . "</td>";
                                echo "<td>" . $row["nama_menu"] . "</td>";
                                echo "<td>" . $row["kategori"] . "</td>";
                                echo "<td>" . $row["harga"] . "</td>";
                            }
                        } else {
                            echo "<tr><td colspan='6>Tidak ada data menu</td></tr>";

                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>

        <script src="../uas/js/script.js"></script>
    </body>
</html>