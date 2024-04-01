  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['proses'])) {
    
    $customer = $_POST["customer"];
    $selectedProduk = isset($_POST['produk']) ? $_POST['produk'] : '';
    $jumlah = $_POST["jumlah"];

    
    $productPrices = [
      'tv' => 4200000,
      'kulkas' => 3100000,
      'mesin_cuci' => 3800000
    ];

    $price = isset($productPrices[$selectedProduk]) ? $productPrices[$selectedProduk] : 0;

    
    $total = $jumlah * $price;

    
    // echo "<h4>Hasil Belanja:</h4>";
    echo "<p>Customer: $customer</p>";
    echo "<p>Produk Pilihan: $selectedProduk</p>";
    echo "<p>Jumlah Beli: $jumlah</p>";
    echo "<p>Total: " . number_format($total, 0, ',', '.') . "</p>";
  }
  ?>