<?php
echo "SELAMAT DATANG :)";
$data_siswa=[];

while(true)
{
    //data siswa
    $siswa=&$data_siswa;

    tampil("Data Siawa Magang TOP");
    tampil("=======================");

    //user memilih input menu

    $input_siswa=readline("Masukan Data Siswa !");

    //validasi huruf

    if(!preg_match("/^[a-zA-Z]*$/",$input_siswa) || empty($input_siswa))
    {
        echo PHP_EOL;
        echo "Tolong Masukan Karakter Huruf\n";
        continue;


    }



    

    


    //munculkan data siswa

    $siswa[]=$input_siswa;

    //munculkan data  siswa magang

    $nomor=1;       

    foreach($siswa as $key)
    {
        tampil($nomor.$key);
        $nomor++;
    }

    $tanya=readline("Tambah Data (yes/no) ?");

    if($tanya=="no")
    {
        tampil("Terima Kasih");
         break;
    }
}


function tampil($pesan)
{
echo $pesan.PHP_EOL;
}

function tanyaUser()
{
    $tanya=readline("Tambah Data");
     
    if($tanya=="no"){
        tampil("Terima Kasih");
        exit;
    }
}

function tampil_data($data)
{
    $nomor=1;

    foreach($data as $key){
        tampil("$nomor.$key");
        $nomor++;
    }
}


function menuAplikasi()
{
    $data=["Input Data","Dellete Data","Lihat Data"];
}