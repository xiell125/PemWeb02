<?php
                $nama_siswa = $_POST['name'];
                $mata_kuliah = $_POST['matkul'];
                $uts = $_POST['nilai_uts'];
                $uas = $_POST['nilai_uas'];
                $tugas = $_POST['nilai_tugas'];
                $grade = ($uts + $uas + $tugas) / 3;

                echo '<br>Nama : ' . $nama_siswa;
                echo '<br>Mata Kuliah : ' . $mata_kuliah;
                echo '<br>Nilai UTS : ' . $uts;
                echo '<br>Nilai UAS : ' . $uas;
                echo '<br>Nilai Tugas : ' . $tugas;
                echo "<br>Rata-rata : " . round(($uts + $uas + $tugas) / 3);
                echo("<br>");
                if ($grade>=85)
                echo("Grade : <b>A</b>");
                elseif ($grade>=70)
                echo("Grade : <b>B</b>");
                elseif ($grade>=56)
                echo("Grade : <b>C</b>");
                elseif ($grade>=36)
                echo("Grade : <b>D</b>");
                elseif ($grade>=0)
                echo("Grade : <b>E</b>");
                ?>