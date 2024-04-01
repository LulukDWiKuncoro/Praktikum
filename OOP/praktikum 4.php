<?php
class PersegiPanjang {
    public $panjang, $lebar;

    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function rumusKeliling() {
        // Rumus: 2 * (Panjang + Lebar)
        return 2 * ($this->panjang + $this->lebar);
    }

    public function rumusLuas() {
        // Rumus: Panjang * Lebar
        return $this->panjang * $this->lebar;
    }
}

// Contoh penggunaan:
$persegi_panjang1 = new PersegiPanjang(5, 3);
echo "Luas Persegi Panjang: " . $persegi_panjang1->rumusLuas() . "<br>";
echo "Keliling Persegi Panjang: " . $persegi_panjang1->rumusKeliling();
?>
