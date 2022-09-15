<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 PBO</title>
</head>
<body>
    <?php
    // Pendefinisian Class Product dengan 3 property dari sebuah product yaitu : Jenis, Merek dan Stock
    class product{
        public $Jenis;
        public $Merek;
        public $Stock;

        // Kemudian mulai pembuatan Method / function Pesanan dengan cara mengurangi stock ($Stock - 1)
        function Pesanan($Stock) {
            $this-> Stock   = $Stock - 1;
            return $this-> Stock;
        }
        // Setelah memb7uat Method Pesanan, maka dibuaktakan juga method / function dari checker stock untuk mengetahui jumlah sisa barang setelah di beli dengan memanggil method dari stock 
        function Cek_Stock() {
            return $this-> Stock;
        }
    } 

    //  bagian ini di peruntukkan  untuk mensetting property dari class product
    $Product01 = new Product ();
    $Product01 -> Jenis = "Makanan";
    $Product01 -> Merek = "ChocoPie";
    $Product01 -> Stock = 100;

    // dibagian ini di peruntukkan memberikan tampilan dari program tugas ini 
    echo "Data Ketersediaan Makanan"."<br> Jenis : ".$Product01-> Jenis."<br>Merek : ".$Product01-> Merek."<br>Stok : ".$Product01-> Stock;
    echo"<br>";
    echo "Riwayat Penjualan";
    echo"<br>";
    echo "Penjualan Tanggal : "; echo date("l, d-m-y");
    $Product01 -> Pesanan($Product01 -> Stock);
    echo"<br>";
    echo "Penjualan Tanggal : "; echo date("l, d-m-y");
    $Product01 -> Pesanan($Product01 -> Stock);
    echo"<br>";
    echo "Penjualan Tanggal : "; echo date("l, d-m-y");
    $Product01 -> Pesanan($Product01 -> Stock);
    echo"<br>";
    echo"<br>";
    echo"<br>";
    echo "Sisa Stock yang Tersedia : ".$Product01 -> Cek_Stock();
    ?>
</body>
</html>