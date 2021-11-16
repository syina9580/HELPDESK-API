<?php
$isipesan = $message = strtolower($isipesan);
$a = strtolower('Lupa password');
$jawaba = 'Untuk proses reset password, mohon menunggu....

*Dimohon tidak menjawab pesan ini untuk agar dapat segera di proses*';

$b = strtolower('Data nama tidak sesuai');
$jawabb = 'Mohon mengirimkan foto *KTP* saudara

*Mohon menunggu jawaban, agar dapat segera diproses*';

$c = strtolower('Data Tanggal Lahir tidak sesuai');
$jawabc = 'Mohon mengirimkan foto *KTP* saudara

*Mohon menunggu jawaban, agar dapat segera diproses*';

$d = strtolower('Data Matakuliah tidak sesuai');
$jawabd = 'Mohon mengirimkan foto *KTP* saudara

*Mohon menunggu jawaban, agar dapat segera diproses*';

$e = strtolower('Presensi Mahasiswa');
$jawabe = 'Jika Mahasiswa tidak dapat melakukan presensi, mohon diakses dengan *Laptop*.
Mohon dipastikan saat presensi sesuai Jam, tanggal, dan hari yang ditetapkan.

Presensi yang lewat/kegagalan dalam presensi *hanya dapat disetting ulang oleh dosen pengampu matakuliah*';

// $f = strtolower('Putdown here');
// $jawabf = 'putdown here';

// $g = strtolower('putdown here');
// $jawabg = 'putdown here';

$h = strtolower('LIVE CHAT ADMIN');
$jawabh = 'Sebelum menggunakan Fitur LiveChat admin, 
Pastikan pertanyaan Anda tidak ada dalam daftar FAQ,
dan tidak ada di fitur Layanan.

Mari Budayakan membaca :-)

Jangan Balas Pesan Ini. Kami akan segera Terhubung';
$i = strtolower('MENU AWAL');
$jawabi = '';
$j = strtolower('');
$jawabj = '';

switch ($isipesan) {
case $a;$jawaba;
$update = "UPDATE wa_data_answer SET p_last='layanan_mahasiswa', waiting='yes', position='$a' WHERE id='$id'"; //Save Answer to wa_data_answer became to Session
global_text($sender,$jawaba);mysqli_query($db, $update);break;

case $b;$jawabb;
$update = "UPDATE wa_data_answer SET p_last='layanan_mahasiswa', waiting='yes', position='$b' WHERE id='$id'"; //Save Answer to wa_data_answer became to Session
global_text($sender,$jawabb);mysqli_query($db, $update);break;

case $c;$jawabc;
$update = "UPDATE wa_data_answer SET p_last='layanan_mahasiswa', waiting='yes', position='$c' WHERE id='$id'"; //Save Answer to wa_data_answer became to Session
global_text($sender,$jawabc);mysqli_query($db, $update);break;

case $d;$jawabd;
$update = "UPDATE wa_data_answer SET p_last='layanan_mahasiswa', waiting='yes', position='$d' WHERE id='$id'"; //Save Answer to wa_data_answer became to Session
global_text($sender,$jawabd);mysqli_query($db, $update);break;

case $e;$jawabe;
$update = "UPDATE wa_data_answer SET p_last='layanan_mahasiswa', waiting='yes', position='$e' WHERE id='$id'"; //Save Answer to wa_data_answer became to Session
global_text($sender,$jawabe);mysqli_query($db, $update);break;

// case $f;$jawabf;
// $update = "UPDATE wa_data_answer SET p_last='layanan_mahasiswa', waiting='yes', position='$f' WHERE id='$id'"; //Save Answer to wa_data_answer became to Session
// global_text($sender,$jawabf);mysqli_query($db, $update);break;

// case $g;$jawabg;
// $update = "UPDATE wa_data_answer SET p_last='layanan_mahasiswa', waiting='yes', position='$g' WHERE id='$id'"; //Save Answer to wa_data_answer became to Session
// global_text($sender,$jawabg);mysqli_query($db, $update);break;

case $h;$jawabh; //Live Chat Admin
$update = "UPDATE wa_data_answer SET p_last='layanan_mahasiswa', waiting='yes', position='$h' WHERE id='$id'"; //Save Answer to wa_data_answer became to Session
global_text($sender,$jawabh);
global_text($admin,'Ada Live Chat Menunggu dari '.$sender);
// global_forward($sender,$admin,'Ada Live Chat Menunggu dari '.$sender);
mysqli_query($db, $update);break;

case $i;$jawabi;
$update = "UPDATE wa_data_answer SET p_last='layanan_mahasiswa', waiting='yes', position='$i' WHERE id='$id'"; //Save Answer to wa_data_answer became to Session
global_text($sender,$jawabi);mysqli_query($db, $update);break;

case $j;$jawabj;
$update = "UPDATE wa_data_answer SET p_last='layanan_mahasiswa', waiting='yes', position='$j' WHERE id='$id'"; //Save Answer to wa_data_answer became to Session
global_text($sender,$jawabj);mysqli_query($db, $update);break;

    default;  // If not CD, all message reply with find book by Topic
    // $list = ',';
    // $jawab =  "Layanan Mahasiswa Akademik";
    // global_list($sender,$list,"Layanan Mahasiswa",$jawab);
    break;
}
?>
