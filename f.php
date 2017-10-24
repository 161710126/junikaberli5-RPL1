<?php
require_once 'e.php';

$orang1 =new orang('Agung','jakarta','XI RPL 2','jomblo','brimob');

echo "Namanya :".$orang1->get_nama().'<br>';
echo "Tempat Lahir :".$orang1->get_tempatlahir().'<br>';
echo "Kelas :".$orang1->get_kelas().'<br>';
echo "Status :".$orang1->get_status().'<br>';
echo "Cita-cita :".$orang1->get_Cita_cita().'<br>';
?>