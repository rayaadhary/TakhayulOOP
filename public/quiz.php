<?php
include_once "koneksi.php";
$db = new Koneksi();
$db = $db->__construct();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Kuis Sederhana</title>
</head>

<body>
    <form action="hasil.php" method="POST">
        <?php
        try {
            $query = $db->prepare("select * from pertanyaan order by rand() limit 50");
            $query->execute();
            echo '<ol>';
            while ($pertanyaan = $query->fetch()) {
                echo '<li>';
                echo htmlentities($pertanyaan['deskripsi']);
                $query2 = $db->prepare("select * from jawaban where id_pertanyaan = :id_pertanyaan order by rand()");
                $query2->execute(array("id_pertanyaan" => $pertanyaan['id']));
                echo '<ol type="A">';
                while ($jawaban = $query2->fetch()) {
                    echo '<li>';
                    echo '<input type="radio" name="jawaban[' . $pertanyaan['id'] . ']" value="' . $jawaban['id'] . '"/> ';
                    echo htmlentities($jawaban['deskripsi']);
                    echo '</li>';
                }
                echo '</ol>';
                echo '</li>';
            }
            echo '</ol>';
        } catch (Exception $e) {
            echo "Gagal menampilkan pertanyaan. ";
            echo "Error: " . $e->getMessage();
        }
        ?>
        <button type="submit">Kirim Jawaban</button>
    </form>
</body>

</html>