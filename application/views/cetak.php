<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            border-collapse: collapse !important;
            width: 100%;
            border: 0.5px solid black;
        }

        .border-none {
            border-collapse: collapse;
            border: none;
        }

        .border-none td {
            border: 1px solid black;
        }

        .border-none tr:first-child td {
            border-top: none;
        }


        .border-none tr td:first-child {
            border-left: none;
        }

        .border-none tr td:last-child {
            border-right: none;
        }

        .bold {
            font-size: 27px;
            font-weight: bold;
            text-align: center;
        }

        .capital {
            text-transform: uppercase;
        }

        .subjudul {
            font-size: 20px;
            font-weight: bold;
            background: #B3B3B3;
        }

        .header {
            border: 1px solid black;
        }

        .tengah {
            text-align: center;
        }

        .revisi {
            width: 10%;
            text-align: center;
        }

        .auto {
            width: auto;
        }

        .rata-kanan {
            text-align: right;
        }

        .kiri {
            border-left: 1px solid black;
        }

        .kanan {
            border-right: 1px solid black;
        }

        .header-table {
            border: 1px solid black;
            border-collapse: collapse;
            width: 100%;
        }

        .bawah {
            border-bottom: 1px solid black;
        }

        .page-break {
            page-break-after: always;
        }
    </style>
</head>

<body>
    <table width="100%" class="border-none" style="margin-top: 20px;">
        <tr>
            <th colspan=" 4" style="font-size: 35px;" class="bawah"><b>RENCANA PEMBELAJARAN SEMEESTER(RPS)</b></th>
        </tr>
        <tr>
            <th style="padding: 20px;" colspan="4"><img src="<?= base_url('/assets/images/logoamikom.png') ?>" alt="" width="30%"></th>
        </tr>
        <tr class="bold capital">
            <td colspan="4">
                Mata Kuliah : <?= $matkul['nm_matkul'] ?>
            </td>
        </tr>
        <tr class="bold">
            <td colspan="4">Program Studi : D3 Teknik Informatika</td>
        </tr>
        <tr class="tengah">
            <td>Nomor</td>
            <td>Tgl. Berlaku Mulai</td>
            <td>Tgl.Disusun</td>
            <td>Revisi</td>
        </tr>
        <tr class="tengah">
            <td>
                <?= $rps['nomor_rps'] ?>
            </td>
            <td>
                <?= $rps['tgl_berlaku'] ?>
            </td>
            <td>
                <?= $rps['tgl_disusun'] ?>
            </td>
            <td>00</td>
        </tr>
        <tr>
            <td colspan="4">&nbsp;</td>
        </tr>
        <tr>
            <th>Disetujui oleh <br>,Dekan Ilmu Komputer</th>
            <th class="border-kiri-kanan">Diperiksa oleh,<br>Kaprodi D3 Teknik Infotmatika</th>
            <th class="border-kiri-kanan">Disusun Oleh</th>
            <th>Dikenadlikan Oleh,<br> Sekertaris Prodi D3 Teknik Informatika</th>
        </tr>
        <tr class="tengah bawah">
            <td><br><br><br><u></u>Hanif Al Fatta, M.Kom</u><br>NIK. 190302096</td>
            <td><br><br><br><u></u>Barka Satya, M.Kom</u><br>NIK. 190302096</td>
            <td><br><br><br><u></u><?= $dosen['nama'] ?></u><br>NIK. 190302096</td>
            <td><br><br><br><u></u>Lukman, M.Kom</u><br>NIK. 190302096</td>
        </tr>

    </table>
    <h1 class="tengah">Universitas Amikom Yogyakarta<br>Yogyakarta<br>2023</h1>
    <p class="page-break"></p>
    <table width="100%" border="1" class="header">
        <tr>
            <td rowspan="2" class="tengah"><img src="<?= base_url('/assets/images/logoamikom.png') ?>" alt="" width="80%"></td>
            <td rowspan="2" style="width: 50%;" class="tengah">RENCANA PEMBELAJARAN SEMESTER<br>PROGRAM STUDI: D3 TEKNIK INFORMATIKA MATAKULIAH <?= $matkul['nm_matkul'] ?>
                (DT-<?= $matkul['kode'] ?>)
            </td>

            <td class="revisi rata-kanan"><i>nomor</i><br><i>tgl.Disusun<br>Revisi</i></td>
            <td style="width: auto;"><i>: RPS-DT-001</i><br><i>: 20 September 2022<br>: 00</i></td>
        </tr>
        <tr>
            <td class="auto rata-kanan"><i>Halaman</i></td>
            <td class="auto">: Hal 2 Dari 9</td>
        </tr>
    </table>
    <p class="subjudul">1. Identitas</p>
    <table border="1">
        <tr>
            <th style="width: 15%;text-align: left; padding-left:10px;" scope="row">Program Study</th>
            <td style="width: 35%; padding-left:10px;">D3 Teknik Informatika</td>
            <th style="width: 8%; padding-left:10px;text-align: left;">Semester</th>
            <td style="width: 25%; padding-left:10px;" colspan="5"><?= $matkul['semester'] ?></td>
        </tr>
        <tr>
            <th style="width: 15%;text-align: left; padding-left:10px;" scope="row">Nama & Kode Mata Kuliah</th>
            <td style="width: 35%; padding-left:10px;">&nbsp;<?= $matkul['nm_matkul'] ?>( <?= $matkul['kode'] ?> )&nbsp;

            </td>
            <th style="width: 8%; padding-left:10px;text-align: left;" class="border-dark border">SKS</th>
            <td style="width: 25%; padding-left:10px;" colspan="5"><?= $matkul['sks'] ?></td>
        </tr>
        <tr>
            <th style="width: 15%;text-align: left; padding-left:10px;" scope="row" rowspan="3">Detail Prosentasi Penilaian</th>
            <td style="width: 35%; padding-left:10px;" rowspan="3">
                <ul>
                    <li>Keaktifan 10%</li>
                    <li>Ujian Mid Semester 30 %</li>
                    <li>Ujian Akhir Semester 30 %
                    </li>
                    <li>Tugas 30 %</li>
                </ul>
            </td>
            <th style="width: 8%;text-align: left;padding-left:10px;">Dosen Pengampu</th>
            <td style="width: auto;padding-left:10px;" colspan="5"><?= $dosen['nama'] ?></td>
        </tr>
        <tr>
            <th style="width: 8%;text-align: left;padding-left:10px;" scope="row" rowspan="2">Klarifikasi Nilai</th>
            <td class="auto tengah">> 80%</td>
            <th class="auto tengah"> 60 & < 80</th>
            <td class="auto tengah"> 40 & < 60</td>
            <td class="auto tengah"> 20 & < 40</td>
            <td class="auto tengah">
                < 20</td>
        </tr>
        <tr>
            <td class="auto tengah">A</td>
            <td class="auto tengah">B</td>
            <td class="auto tengah">C</td>
            <td class="auto tengah">D</td>
            <td class="auto tengah">E</td>
        </tr>
    </table>
    <h1 class="subjudul">2. Gambaran Umum</h1>
    <p><?= $rps['gb_umum'] ?></p>
    <h1 class="subjudul">3. Capaian Pembelajaran</h1>
    <p><?= $rps['cp_pembelajaran'] ?></p>
    <h1 class="subjudul">4. Persyaratan dan Pengetahuan Awal</h1>
    <p><?= $rps['prasyarat'] ?></p>

    <p class="subjudul">5. Unit-Unit Pembelajaran</p>
    <table border="1px solid black">
        <thead>
            <th class="kanan">Kemampuan Akhir yang diharapkan</th>
            <th class="kanan">Indikator</th>
            <th class="kanan">Bahan Kajian</th>
            <th class="kanan">Metode Pembelajaran</th>
            <th class="kanan">Waktu</th>
            <th class="kanan">Metode Penilaian</th>
            <th>Bahan Ajar</th>
        </thead>
        <tbody>
            <?php foreach ($unit as $value) {
            ?>
                <tr>
                    <td class="kanan"><?= $value['km_akhir_p'] ?></td>
                    <td class="kanan"><?= $value['indikator'] ?></td>
                    <td class="kanan"><?= $value['bhn_kajian'] ?></td>
                    <td class="kanan"><?= $value['mtd_belajar'] ?></td>
                    <td class="kanan"><?= $value['waktu'] ?></td>
                    <td class="kanan"><?= $value['mtd_nilai'] ?></td>
                    <td class="kanan"><?= $value['bahan_ajar'] ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <p class="subjudul"> 6. Tugas dan Aktivitas</p>
    <table>
        <tr>
            <th class="kanan">Tugas/Aktivitas</th>
            <th class="kanan">Kemampuan Akhir yang diharapkan</th>
            <th class="kanan">Waktu</th>
            <th class="kanan">Bobot</th>
            <th class="kanan">Kriteria Penilaian</th>
            <th class="kanan">Indikator Penilaian</th>
        </tr>
        <?php foreach ($tugas as $value) {
        ?>
            <tr>
                <td class="kanan"><?= $value['tugas'] ?></td>
                <td class="kanan"><?= $value['km_akhir'] ?></td>
                <td class="kanan"><?= $value['waktu'] ?></td>
                <td class="kanan"><?= $value['bobot'] ?></td>
                <td class="kanan"><?= $value['kriteria_nilai'] ?></td>
                <td class="kanan"><?= $value['indikator_nilai'] ?></td>

            </tr>
        <?php
        }
        ?>
    </table>
    <h1 style="background: #B3B3B3;" class="subjudul">7. Referensi</h1>
    <p><?= $rps['referensi'] ?></p>
    <h1 style="background: #B3B3B3;" class="subjudul">8. Rencana Pelaksanaan Pembelajaran</h1>
    <table border="1px solid black">
        <tr>
            <th class="kanan">Minggu/Pertemuan</th>
            <th class="kanan">Kemampuan Akhir yang diharapkan</th>
            <th class="kanan">Indikator</th>
            <th class="kanan">Topik&SubTopik</th>
            <th class="kanan">Aktivitas dan Strategi Pembelajaran</th>
            <th class="kanan">Waktu</th>
            <th class="kanan">Penilaian</th>
        </tr>
        <?php
        foreach ($rpp as $value) {
        ?>
            <tr class="break">
                <td class="kanan"><?= $value['minggu'] ?></td>
                <td class="kanan"><?= $value['km_akhir'] ?></td>
                <td class="kanan"><?= $value['indikator'] ?></td>
                <td class="kanan"><?= $value['topik'] ?></td>
                <td class="kanan"><?= $value['strategi_pembelajaran'] ?></td>
                <td class="kanan"><?= $value['waktu'] ?></td>
                <td class="kanan"><?= $value['penilaian'] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>