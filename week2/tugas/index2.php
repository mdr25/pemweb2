<?php

    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $tugas = $_POST['tugas'];

    $total = ($uts + $uas + $tugas);
    $rata = ($uts + $uas + $tugas) / 3;
    $rata_rata = number_format($rata, 2,',',',');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />

    <style>
      ul {
        list-style: none;
      }
    </style>

    <title>HPM</title>
  </head>
  <body>
    <h1 class="text-center my-4">Hasil Penilaian Mahasiswa</h1>

    <div class="container">
      <div class="row">
        <div class="col">
          <ul class="p-0">
            <li>
              Nama :
              <?php echo $nama; ?>
            </li>
          </ul>

          <table class="table table-bordered text-center">
            <tr>
              <th>Mata Pelajaran</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas/Praktikum</th>
              <th>Total Nilai</th>
              <th>Nilai Rata - Rata</th>
              <th>Grade</th>
            </tr>
            <tr>
              <td>
                <?php echo $matkul; ?>
              </td>
              <td>
                <?php echo $uts; ?>
              </td>
              <td>
                <?php echo $uas; ?>
              </td>
              <td>
                <?php echo $tugas; ?>
              </td>
              <td>
                <?php echo $total; ?>
              </td>
              <td>
                <?php echo $rata_rata; ?>
              </td>

              <!-- Menentukan aturan grade nilai siswa -->
              <td rowspan="2" style="vertical-align: middle" class="fw-bold">
                <?php
                if($rata >= 85 && $rata <= 100){
                  echo "A";
                }
                elseif($rata >= 70 && $rata <= 84){
                  echo "B";
                }
                elseif($rata >= 56 && $rata <= 69){
                  echo "C";
                }
                elseif($rata >= 36 && $rata <= 55){
                  echo "D";
                }
                else{
                  echo "E";
                }
                ?>
              </td>
            </tr>

            <!-- Menentukan keterangan nilai siswa menggunakan syntax SWITCH -->
            <tr>
              <td>Keterangan</td>
              <td colspan="5" class="fw-bold">
                <?php 
                switch(true){
                  case ($rata >= 85 && $rata <= 100):
                    echo "Sangat Memuaskan";
                    break;
                  case ($rata >= 70 && $rata <= 84):
                    echo "Memuaskan";
                    break;
                  case ($rata >= 56 && $rata <= 69):
                    echo "Cukup";
                    break;
                  case ($rata >= 36 && $rata <= 55):
                    echo "Kurang";
                    break;
                  case ($rata >= 0 && $rata <= 35):
                    echo "Sangat Kurang";
                    break;
                  default:
                    echo "Nilai tidak valid";
                } 
                ?>
              </td>
            </tr>
          </table>
            <?php
            if($rata > 55){
                echo '<div class="text-center mt-5 py-3 bg-success text-white fs-4 fw-bold">Selamat! Anda dinyatakan lulus</div>';
            }
            else{
                echo '<div class="text-center py-3 bg-danger text-white fs-4 fw-bold">Maaf, Anda tidak dinyatakan lulus</div>';
            }
            ?>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
