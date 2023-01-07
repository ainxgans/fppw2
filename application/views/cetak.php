<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            border-collapse: collapse;
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

        .border-none tr:last-child td {
            border-bottom: none;
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
            position: fixed;
            inset-block-start: 0;
        }

        @media print {
            .header {
                position: sticky !important;
                inset-block-start: 0 !important;
                page-break-before: always;
            }
        }
    </style>
</head>

<body>
    <table width="100%" class="border-none" style="margin-top: 50px;">
        <tr>
            <th colspan=" 4" style="font-size: 35px;border-bottom: 1px solid black;"><b>RENCANA PEMBELAJARAN SEMEESTER(RPS)</b></th>
            <hr>
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
        <tr style="text-align: center;">
            <td>Nomor</td>
            <td>Tgl. Berlaku Mulai</td>
            <td>Tgl.Disusun</td>
            <td>Revisi</td>
        </tr>
        <tr style="text-align: center;">
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
            <th style="border-right: 1px solid black;border-left: 1px solid black;">Diperiksa oleh,<br>Kaprodi D3 Teknik Infotmatika</th>
            <th style="border-left: 1px solid black;border-right: 1px solid black;">Disusun Oleh</th>
            <th>Dikenadlikan Oleh,<br> Sekertaris Prodi D3 Teknik Informatika</th>
        </tr>
        <tr style="border-bottom: 1px solid black; text-align:center;">
            <td><br><br><br><u></u>Hanif Al Fatta, M.Kom</u><br>NIK. 190302096</td>
            <td><br><br><br><u></u>Barka Satya, M.Kom</u><br>NIK. 190302096</td>
            <td><br><br><br><u></u><?= $dosen['nama'] ?></u><br>NIK. 190302096</td>
            <td><br><br><br><u></u>Lukman, M.Kom</u><br>NIK. 190302096</td>
        </tr>

    </table>
    <h1 style="text-align:center;">Universitas Amikom Yogyakarta<br>Yogyakarta<br>2023</h1>
    <table width="100%" border="1" class="header">
        <tr>
            <th rowspan="2" style="width: 25%;"><img src="<?= base_url('/assets/images/logoamikom.png') ?>" alt="" width="80%"></th>
            <th rowspan="2" style="width: 50%;">RENCANA PEMBELAJARAN SEMESTER<br>PROGRAM STUDI: D3 TEKNIK INFORMATIKA MATAKULIAH <?= $matkul['nm_matkul'] ?>
                (DT-<?= $matkul['kode'] ?>)
            </th>
            <th style="width: auto;"><i>nomor</i><br><i>tgl.Disusun<br>Revisi</i></th>
            <td style="width: auto;"><i>: RPS-DT-001</i><br><i>: 20 September 2022<br>: 00</i></td>
        </tr>
        <tr>
            <th style="width: auto;">Halaman</th>
            <td style="width: auto;">: Hal 2 Dari 9</td>
        </tr>
        <div class="page"></div>
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
            <td style="width: 35%; padding-left:10px;"><?= $matkul['nm_matkul'] ?> <<?= $matkul['kode'] ?>>
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
            <td style="width: auto;text-align:center;">> 80%</td>
            <th style="width: auto;text-align:center;"> 60 & < 80</th>
            <td style="width: auto;text-align:center;"> 40 & < 60</td>
            <td style="width: auto;text-align:center;"> 20 & < 40</td>
            <td style="width: auto;text-align:center;">
                < 20</td>
        </tr>
        <tr>
            <td style="width: auto;text-align:center;">A</td>
            <td style="width: auto;text-align:center;">B</td>
            <td style="width: auto;text-align:center;">C</td>
            <td style="width: auto;text-align:center;">D</td>
            <td style="width: auto;text-align:center;">E</td>
        </tr>
    </table>
    <h1 class="subjudul">2. Gambaran Umum</h1>
    <p><?= $rps['gb_umum'] ?></p>
    <h1 class="subjudul">3. Capaian Pembelajaran</h1>
    <p><?= $rps['cp_pembelajaran'] ?></p>
    <h1 class="subjudul">4. Persyaratan dan Pengetahuan Awal</h1>
    <p><?= $rps['prasyarat'] ?></p>

    <h1 class="subjudul">5. Unit-Unit Pembelajaran</h1>
    <table>
        <tr style="border-bottom:1px solid black;">
            <th style="border-right:1px solid black;">Kemampuan Akhir yang diharapkan</th>
            <th style="border-right:1px solid black;">Indikator</th>
            <th style="border-right:1px solid black;">Bahan Kajian</th>
            <th style="border-right:1px solid black;">Metode Pembelajaran</th>
            <th style="border-right:1px solid black;">Waktu</th>
            <th style="border-right:1px solid black;">Metode Penilaian</th>
            <th>Bahan Ajar</th>
        </tr>
        <?php foreach ($unit as $value) {
        ?>
            <tr>
                <td style="border-right:1px solid black;"><?= $value['km_akhir_p'] ?></td>
                <td><?= $value['indikator'] ?></td>
                <td><?= $value['bhn_kajian'] ?></td>
                <td><?= $value['mtd_belajar'] ?></td>
                <td><?= $value['waktu'] ?></td>
                <td><?= $value['mtd_nilai'] ?></td>
                <td><?= $value['bahan_ajar'] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <h1 style="background: #B3B3B3;">6. Tugas/Aktivitas dan Penilaian</h1>
    <table>
        <tr>
            <th>Tugas/Aktivitas</th>
            <th>Kemampuan Akhir yang diharapkan</th>
            <th>Waktu</th>
            <th>Bobot</th>
            <th>Kriteria Penilaian</th>
            <th>Indikator Penilaian</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <h1 style="background: #B3B3B3;">7. Referensi</h1>
    <h1 style="background: #B3B3B3;">7. Rencana Pelaksanaan Pembelajaran</h1>
    <table>
        <tr>
            <th>Minggu/Pertemuan</th>
            <th>Kemampuan Akhir yang diharapkan</th>
            <th>Indikator</th>
            <th>Topik&SubTopik</th>
            <th>Aktivitas dan Strategi Pembelajaran</th>
            <th>Waktu</th>
            <th>Penilaian</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</body>

</html>