<?php
// date
echo date("l, d-M-Y");

// time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
echo time();
echo date("l", time() + 60 * 60 * 24 * 100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
echo mktime(0, 0, 0, 8, 25, 1985);
echo date("l", mktime(0, 0, 0, 2, 10, 2001));

// strtotime
echo strtotime("10 feb 2001");
echo date(";l", strtotime("10 feb 2001"));
?>