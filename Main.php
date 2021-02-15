<?php
require_once 'Hewan.php';
require_once 'Fight.php';
require_once 'Harimau.php';
require_once 'Elang.php';

$Elang = new Elang();
$Elang->nama = "elang_3";
$Elang->jumlahKaki = 2;
$Elang->keahlian = "terbang tinggi";
$Elang->attackPower = 10;
$Elang->defencePower = 5;

$Harimau = new Harimau();
$Harimau->nama = "harimau_1";
$Harimau->jumlahKaki = 4;
$Harimau->keahlian = "lari cepat";
$Harimau->attackPower = 7;
$Harimau->defencePower = 8;

$Elang->atraksi();
echo ' atau ';
$Harimau->atraksi();
echo '<br>';
echo '<br>';
$Harimau->serang($Harimau, $Elang);
echo '<br>';
echo '<br>';
$Elang->diserang($Elang, $Harimau);
echo '<br>';
echo '<br>';
$Harimau->getInfoHewan();
echo '<br>';
echo '<br>';
$Elang->getInfoHewan();
