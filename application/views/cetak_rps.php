<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" href="index.css">
</head>
<!-- <?php var_dump($rps, "============", $dosen, "============", $matkul, "============", $unit, "============", $tugas, "============", $rpp, "============") ?> -->

<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col">
        <table class="table table-bordered text-center">
          <thead>
            <tr>
              <th scope="col" colspan="4" class="border border-dark border-end-0 border-start-0">
                RENCANA PEMBELAJARAN SEMESTER (RPS)
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row" colspan="4" class="border border-dark border-end-0 border-start-0">
                <img src="image 1.png" alt="" />
              </th>
            </tr>
            <tr>
              <th scope="row" colspan="4" class="border border-dark border-end-0 border-start-0">
                MATA KULIAH:
              </th>
            </tr>
            <tr>
              <th scope="row" colspan="4" class="border border-dark border-end-0 border-start-0">
                Program Studi:D3 TeknikInformatika
              </th>
            </tr>
            <tr>
              <th scope="col" class="border border-dark border-start-0">Nomor</td>
              <th scope="col" class="border border-dark ">Tgl.Berlaku</td>
              <th scope="col" class="border border-dark">Tgl.Disusun</td>
              <th scope="col" class="border border-dark border-end-0">Revisi</td>
            </tr>
            <tr>
              <td class="border border-dark border-start-0">RPS-DT-<?= $rps['nomor_rps'] ?></td>
              <td class="border border-dark "><?= $rps['tgl_berlaku'] ?></td>
              <td class="border border-dark "><?= $rps['tgl_disusun'] ?></td>
              <td class="border border-dark border-end-0">00</td>
            </tr>
            <tr>
              <td class="border-start-0" colspan="4"></td>
            </tr>
            <tr>
              <th scope="col" class="w-25 border border-dark border-start-0">Disetujui Oleh,DekanIlmuKomputer</th>
              <th scope="col" class="w-25 border border-dark">Diperiksa oleh,KaprodiDTeknikInformatika</th>
              <th scope="col" class="w-25 border border-dark">Disusunoleh,</th>
              <th scope="col" class="w-25 border border-dark border-end-0">Dikendalikan oleh,SekretarisProdi D3TeknikInformatika</th>
            </tr>
            <tr>
              <td scope="row" class="w-25 h-25 border border-dark border-start-0 "><br><br><br><u>Hanif Al Fatta, M.Kom</u><br>NIK. 190302096</td>
              <td class="w-25 h-25 border border-dark "><br><br><br><u>Barka Satya, M.Kom</u><br>NIK. 190302096</td>
              <td class="w-25 h-25 border border-dark "><br><br><br><u>???</u><br>???</td>
              <td class="w-25 h-25 border border-dark border-end-0 "><br><br><br><u>Lukman, M.Kom</u><br>NIK. 190302096</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <h3 class="text-center mb-5"><b>Universitas Amikom<br> Yogyakarta<br>2022</b></h3>
  <div class="container">
    <div class="row">
      <div class="col">
        <!-- table bagian atas -->
        <table class="table table-bordered">
          <thead>
            <tr>
              <th rowspan="2" class="w-25 border-dark border"><img src="image 1.png" alt="" width="80%"></th>
              <th rowspan="2" class="w-50 border-dark border">RENCANA PEMBELAJARAN SEMESTER<br>PROGRAM STUDI: D3 TEKNIK INFORMATIKA<br><br><br>MATAKULIAH PENDIDIKAN PANCASILA
                (DT001)
              </th>
              <th class="border-dark border w-auto pinggir text-end"><i>nomor</i><br><i>tgl.Disusun<br>Revisi</i></th>
              <td class=" border-dark border  w-auto text-start"><i>: RPS-DT-001</i><br><i>: 20 September 2022<br>: 00</i></td>
            </tr>
            <tr>
              <th class=" border-dark border w-auto">Halaman</th>
              <td class="w-auto border-dark border text-start">: Hal 2 Dari 9</td>
            </tr>

          </thead>
        </table>
        <!-- table bagian atas -->
        <h1 class="text-start  fw-bold fs-4" style="background: #B3B3B3;">1. Identitas</h1>
        <!-- table identitas -->
        <table class="table table-bordered text-start">
          <tbody>
            <tr>
              <th style="width: 15%;" scope="row" class=" border-dark border">Program Study</th>
              <td style="width: 15%;" class=" border-dark border">D3 Teknik Informatika</td>
              <th style="width: 8%;" class="w- border-dark border">Semester</th>
              <td class="w-25 border-dark border" colspan="5"><?= $matkul['semester'] ?></td>
            </tr>
            <tr>
              <th style="width: 15%;" scope="row" class=" border-dark border">Nama & Kode Mata Kuliah</th>
              <td style="width: 15%;" class=" border-dark border"><?= $matkul['nm_matkul'] ?> <<?= $matkul['kode'] ?>>
              </td>
              <th style="width: 8%;" class="border-dark border">SKS</th>
              <td class="w-25 border-dark border" colspan="5"><?= $matkul['sks'] ?></td>
            </tr>
            <tr>
              <th style="width: 15%;" scope="row" rowspan="3" class=" border-dark border">Detail Prosentasi Penilaian</th>
              <td style="width: 15%;" class=" border-dark border" rowspan="3">
                <ul>
                  <li>Keaktifan 10%</li>
                  <li>Ujian Mid Semester 30 %</li>
                  <li>Ujian Akhir Semester 30 %
                  </li>
                  <li>Tugas 30 %</li>
                </ul>
              </td>
              <th style="width: 8%;" class="w-auto border-dark border">Dosen Pengampu</th>
              <td class="w-auto border-dark border" colspan="5"><?= $dosen['nama'] ?></td>
            </tr>
            <tr>
              <th style="width: 8%;" scope="row" rowspan="2" class="w-auto border-dark border">Klarifikasi Nilai</th>
              <td class="w-auto border-dark border">> 80%</td>
              <th class="w-auto border-dark border"> 60 & < 80</th>
              <td class="w-auto border-dark border"> 40 & < 60</td>
              <td class="w-auto border-dark border"> 20 & < 40</td>
              <td class="w-auto border-dark border">
                < 20</td>
            </tr>
            <tr class="text-center">
              <td class="w-auto border-dark border">A</td>
              <th class="w-auto border-dark border">B</th>
              <td class="w-auto border-dark border">C</td>
              <td class="w-auto border-dark border">D</td>
              <td class="w-auto border-dark border">E</td>
            </tr>
          </tbody>
        </table>
        <!-- /table identitas -->
        <h1 class="text-start  fw-bold fs-4" style="background: #B3B3B3;">2. Gambaran Umum</h1>
        <p class="text-start"><?= $rps['gb_umum'] ?></p>
        <h1 class="text-start  fw-bold fs-4" style="background: #B3B3B3;">3. Capaian Pembelajaran</h1>
        <p><?= $rps['cp_pembelajaran'] ?></p>
        <h1 class="text-start  fw-bold fs-4" style="background: #B3B3B3;">4. Prasyarat dan Pengetahuan Awal (Prior Knowledge)</h1>
        <p><?= $rps['prasyarat'] ?></p>
        <h1 class="text-start  fw-bold fs-4" style="background: #B3B3B3;">5. Unit-Unit Pembelajaran secara Spesifik</h1>
        <!-- table no 5 -->
        <table class="table table-bordered border-dark">
          <thead>
            <tr>
              <th>Kemampuan Akhir yang Diharapkan</th>
              <th>Indikator</th>
              <th>Bahan Kajian</th>
              <th>Metode Pembelajaran</th>
              <th>Waktu</th>
              <th>Metode Penelitian</th>
              <th>Bahan Ajar</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($unit as $value) {
            ?>
              <tr>
                <td><?= $value['km_akhir_p'] ?></td>
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
          </tbody>
        </table>
        <!-- /table no 5 -->
        <h1 class="text-start  fw-bold fs-4" style="background: #B3B3B3;">6. Tugas/Aktivitas dan Penilaian</h1>
        <!-- table no 6 -->
        <table class="table table-bordered border-dark">
          <thead>
            <tr>
              <th>Tugas/Aktivitas</th>
              <th>Kemampuan akhir yang diharapkan atau dievaluasi</th>
              <th>Waktu</th>
              <th>Bobot</th>
              <th>Kriteria Penilaian</th>
              <th>Indikator Penelitian</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($tugas as $value) {
            ?>
              <tr>
                <td><?= $value['tugas'] ?></td>
                <td><?= $value['km_akhir'] ?></td>
                <td><?= $value['waktu'] ?></td>
                <td><?= $value['bobot'] ?></td>
                <td><?= $value['kriteria_nilai'] ?></td>
                <td><?= $value['indikator_nilai'] ?></td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
        <!-- /table no 6 -->
        <h1 class="text-start  fw-bold fs-4" style="background: #B3B3B3;">7. Referensi</h1>
        <p><?= $rps['referensi'] ?></p>
        <h1 class="text-start  fw-bold fs-4" style="background: #B3B3B3;">8. Rencana Pelaksanaan Pembelajaran</h1>
        <!-- table no 8 -->
        <table class="table table-bordered border-dark">
          <thead>
            <tr>
              <th>Minggu/Pertemuan</th>
              <th>Kemampuan Akhir Yang Diharapkan</th>
              <th>Indikator</th>
              <th>Topik & Sub Topik</th>
              <th>Aktivitas dan Strategi Pembelajaran </th>
              <th>Waktu</th>
              <th>Penilaian</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($rpp as $value) {
            ?>
              <tr>
                <td><?= $value['minggu'] ?></td>
                <td><?= $value['km_akhir'] ?></td>
                <td><?= $value['indikator'] ?></td>
                <td><?= $value['topik'] ?></td>
                <td><?= $value['strategi_pembelajaran'] ?></td>
                <td><?= $value['waktu'] ?></td>
                <td><?= $value['penilaian'] ?></td>
              </tr>
            <?php
            }
            ?>
            </tr>
          </tbody>
        </table>
        <!-- /table no 8 -->
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>