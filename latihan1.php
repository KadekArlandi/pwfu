<?php

    class Siswa{
        public $nama;
        public $umur;
        public $asal;
    }

    $aldi = new Siswa();
    $aldi->nama = 'Aldi';
    $aldi->umur = '19 tahun';
    $aldi->asal = 'Tabanan';

    echo 'Perkenalkan nama saya ' . $aldi->nama . ' berumur ' . $aldi->umur . ', asal dari ' . $aldi->asal;

    $anjas = new Siswa();
    $anjas->nama = 'Anjas';
    $anjas->umur = '20 tahun';
    $anjas->asal = 'Gianyar';

    echo '<br> Perkenalkan nama saya ' . $anjas->nama . ' berumur ' . $anjas->umur . ', asal dari ' . $anjas->asal;

    $riski = new Siswa();
    $riski->nama = 'Riski';
    $riski->umur = '19 tahun';
    $riski->asal = 'Badung';

    echo '<br> Perkenalkan nama saya ' . $riski->nama . ' berumur ' . $riski->umur . ', asal dari ' . $riski->asal;

?>