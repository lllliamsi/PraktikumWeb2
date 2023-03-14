<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Belanja Online</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-9">
                <h1>Belanja Online</h1>
                <form method="POST" action="form_belanja.php ">
                    <div class="form-group row">
                        <label for="customer" class="col-4 col-form-label font-weight-bold text-right">Customer</label>
                        <div class="col-8">
                            <input id="customer" name="customer" placeholder="Nama Customer" type="text"
                                class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 font-weight-bold text-right">Pilih Produk</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV">
                                <label for="produk_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" class="custom-control-input"
                                    value="Kulkas">
                                <label for="produk_1" class="custom-control-label">KULKAS</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" class="custom-control-input"
                                    value="Mesin Cuci">
                                <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label font-weight-bold text-right">Jumlah</label>
                        <div class="col-8">
                            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-3 col-8">
                            <button name="submit" type="submit" class="btn btn-success">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                        Daftar Harga
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">TV : 4.200.000</li>
                        <li class="list-group-item">Kulkas : 3.100.000</li>
                        <li class="list-group-item">MESIN CUCI : 3.800.000</li>
                    </ul>
                    <div class="card-footer bg-primary text-white">
                        Harga Dapat Berubah Setiap Saat
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <?php

        if (isset($_POST["submit"])) {
            // Nangkep inputan
            $nama = $_POST["customer"];
            $produk = $_POST["produk"];
            $jumlah = $_POST["jumlah"];

            // Logika total belanja
            $totalBelanja;
            if ($produk == "TV") {
                $totalBelanja = $jumlah * 4200000;
            } elseif ($produk == "Kulkas") {
                $totalBelanja = $jumlah * 3100000;
            } else {
                $totalBelanja = $jumlah * 3800000;
            }

            // Cetak variabel
            echo "Nama Customer : " . $nama . "<br>";
            echo "Produk Pilihan : " . $produk . "<br>";
            echo "Jumlah Beli : " . $jumlah . "<br>";
            echo "Total Belanja : Rp " . number_format($totalBelanja, 0, ",", ".");
        }

        ?>

    </div>

</body>

</html>