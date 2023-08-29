<?php

    class BiljeskaView
    {
        public function prikaziFormu()
        {
            echo '
                <form method="post" action="index.php">
                    <input type="text" name="naslov" placeholder="naslov"><br><br>
                    <textarea name="sadrzaj" placeholder="bilješka"></textarea><br><br>
                    <input type="submit" value="Dodaj bilješku">
                </form>
                <hr>
            ';
        }

        public function prikaziBiljeske($biljeske)
        {
            foreach($biljeske as $biljeska)
            {
                echo "<h2>{$biljeska['naslov']}</h2>";
                echo "<p>{$biljeska['sadrzaj']}</p>";
                echo "<hr>";
            }
        }

    }


?>