<?php
$isipesan = $message = strtolower($isipesan);
$a = strtolower('Lupa Password');
$jawaba = 'Untuk proses reset password, mohon menunggu....

*Dimohon tidak menjawab pesan ini untuk agar dapat segera di proses*';

$b = strtolower('Data Diri Tidak Sesuai');
$jawabb = 'Mohon mengirimkan foto *KTP* saudara dan menjelaskan data diri yang tidak sesuai

*Mohon menunggu jawaban, agar dapat segera diproses*';

$c = strtolower('Tidak Dapat Upload File');
$jawabc = 'Mohon mengirimkan foto *KTP/KTM* saudara

*Mohon menunggu jawaban, agar dapat segera diproses*';

$d = strtolower('Dosen Pembimbing Belum Tercantum');
$jawabd = 'Untuk proses, mohon melengkapi data berikut:
1. *Foto Kendala di sistem*
2. *Nama Lengkap beserta Gelar Dosen Pembimbing 1*
3. *NIP Dosen Pembimbing 1*
4. Jika ada *Nama Lengkap beserta Gelar Dosen Pembimbing 2*
5. Jika ada *NIP Dosen Pembimbing 2*

*Mohon menunggu jawaban, agar dapat segera diproses*';

$e = strtolower('Prosedur Pengajuan Judul Skripsi');
$jawabe = '*Panduan pengajuan judul skripsi* dapat dilihat pada laman 

http://uinws.link/pengajuanjudulskripsi

Silahkan hubungi kami kembali jika mengalami kendala.';

$f = strtolower('Prosedur SIBITA');
$jawabf = 'Jadi prosedurnya adalah setelah mengajukan judul di akun Walisiadik, mahasiswa mendapatkan dosen pembimbing 1 dan 2. Kemudian melakukan Bimbingan Tugas Akhir di SIBITA.

Untuk mendapatkan dospem 1 dan 2 bagaimana?
Mengajukan judul di menu "Pengajuan Judul Skripsi" di akun Walisiadik, kemudian konfirmasi ke Dosen Wali dan Kepala Prodi (Jurusan).
Setelah sudah mendapatkan dospem 1 dan 2, maka mahasiswa dapat melakukan bimbingan secara online melalui SIBITA.

*Untuk login SIBITA bagaimana?*
Sama dengan username dan password yang mahasiswa gunakan untuk masuk ke akun Walisiadik.

Jika di akun walisiadik pada menu *Pengajuan Judul Skripsi* belum di approve oleh dosen wali dan Kaprodi, *mohon segera menghubungi dan minta konfirmasi validasi.*

Setelah itu baru bisa mendapatkan Dospem 1 dan 2 yang diketahui oleh Prodi.';

$g = strtolower('Daftar SIBITA');
$jawabg = '*SIBITA (Sistem Bimbingan Tugas Akhir)*
https://sibita.walisongo.ac.id/

Silahkan isi form dibawah ini untuk *permintaan input di SIBITA:*
http://uinws.link/sibitauinwalisongo

Mohon menunggu, permintaan anda akan diproses terlebih dahulu.
Jika dalam 7x24 jam belum ada perubahan, mohon menghubungi kembali. 
Terimakasih🙏🏻';

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

case $f;$jawabf;
$update = "UPDATE wa_data_answer SET p_last='layanan_mahasiswa', waiting='yes', position='$f' WHERE id='$id'"; //Save Answer to wa_data_answer became to Session
global_text($sender,$jawabf);mysqli_query($db, $update);break;

case $g;$jawabg;
$update = "UPDATE wa_data_answer SET p_last='layanan_mahasiswa', waiting='yes', position='$g' WHERE id='$id'"; //Save Answer to wa_data_answer became to Session
global_text($sender,$jawabg);mysqli_query($db, $update);break;

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
