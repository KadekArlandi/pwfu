<?php

class Tumbuhan{
    public $nama;
    public $jenis;
    public $berat;
}
class Umbiumbian extends Tumbuhan{
    public $kandungan;
    public $warna;
}

$singkong = new Umbiumbian();
$singkong->nama =  'Singkong';
$singkong->jenis =  'umbi-umbian';
$singkong->berat =  '5 kg';
$singkong->kandungan =  'vitamin c, kalsium, karbohidrat, dll';
$singkong->warna =  'putih';

echo $singkong->nama . ' adalah tumbuhan yang berjenis ' . $singkong->jenis . ', memiliki berat mencapai ' . $singkong->berat . '. ' . $singkong->nama . ' memiliki kandungan ' . $singkong->kandungan . '. Berwarna ' . $singkong->warna. '.'
?>
