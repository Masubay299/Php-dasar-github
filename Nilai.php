<?php

$name=$_POST['nama'];

$nim=$_POST['nim'];



$jumlah=0;

$mk_array = array(

                        0 => $_POST['nilaial'] ,

                        1 => $_POST['nilaidis'] ,

                        2 => $_POST['nilaibd'] ,

                        3 => $_POST['nilaipbd'] ,

                        4 => $_POST['nilaipmw'] ,

                        5 => $_POST['nilaipa'] ,

                        6 => $_POST['nilaisd'] ,

                        7 => $_POST['nilaipsd'],

                        8 => $_POST['nilaioop'],

                        9 => $_POST['nilaipw'] ,

                        );

for ($x=0;$x<count($mk_array);[$x++]) {
    if ($mk_array[$x] >85 && $mk_array[$x]<=100) {
        $grade[$x]='A';
        $bobot[$x]=4;
    } elseif ($mk_array[$x] >70 && $mk_array[$x]<=85) {
        $grade[$x]='B';
        $bobot[$x]=3;
    } elseif ($mk_array[$x] >60 && $mk_array[$x]<=70) {
        $grade[$x]='C';
        $bobot[$x]=2;
    } elseif ($mk_array[$x] >40 && $mk_array[$x]<=60) {
        $grade[$x]='D';
        $bobot[$x]=1;
    } elseif ($mk_array[$x] <40) {
        $grade[$x]='E';
        $bobot[$x]=0;
    }

    $ipk=array_sum($bobot)/10;
}

for ($x=0;$x<count($grade);) {
    $grade0=$grade[$x++];

    $grade1=$grade[$x++];

    $grade2=$grade[$x++];

    $grade3=$grade[$x++];

    $grade4=$grade[$x++];

    $grade5=$grade[$x++];

    $grade6=$grade[$x++];

    $grade7=$grade[$x++];

    $grade8=$grade[$x++];

    $grade9=$grade[$x++];
}



$page_str = <<< eopage

<html>

<head>

<style type="texs/css">



        body.p.id

        {color: black; font-family: verdana; font-size: 80pt}

        H1

        {color: black; font-family:arial; font-size: 62pt}

        .kiri{text-align: center;}

        p{text-align: center;}

        input{border:none; font-size: 16px}

        tr,td{font-size:  16px ;text-align: center;}

        th{font-size: 18px}







</style>

</head>



<body>

<table border=6 cellpadding=10 width=100% style="background: silver">



<td bgcollor="#f0f8ff" align=center valign=top width=80%>

<h2>Hasil Cetak Nilai Siswa<br>SMK ASSALAAM BANDUNG<br>Tahun 2021/2022</h2>

<table border=4 width=50% style="background: orange">

                        <tr>

                            <td colspan="3">

                                <br><h3>

                                <div class="kiri" >&nbsp;Nama:

                                    $name

                                </div>

                                   <div class="kiri">&nbsp;Nis &nbsp;&nbsp;: 

                                      $nim

                                  </div>

                                  </h3>

                            </td>



                        </tr>

                        <br>

                        <tr>

                            <th>No</th>

                            <th>&nbsp;Mata Pelajaran&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>

                            <th >Grade</th>

                        </tr>

                        

                        <tr>

                             <td style="text-align:center">1</td>

                            <td style="size: 80 ;background: ">Pendidikan Agama Islam</td>

                            <td style="text-align:center">$grade0</td>

                           </tr>

                        <tr>

                             <td style="text-align:center">2</td>

                            <td style="size: 80 ">PPKN</td>

                            <td style="text-align:center">$grade1</td>

                           </tr>

                           <tr>

                             <td style="text-align:center">3</td>

                            <td style="size: 80 ">Bahasa Indonesia</td>

                            <td style="text-align:center">$grade2</td>

                           </tr>

                           <tr>

                             <td style="text-align:center">4</td>

                            <td style="size: 80 ">Matematika</td>

                            <td style="text-align:center">$grade3</td>

                           </tr>

                           <tr>

                             <td style="text-align:center">5</td>

                            <td style="size: 80 ">Bahasa Inggris</td>

                            <td style="text-align:center">$grade4</td>

                           </tr>

                           <tr>

                             <td style="text-align:center">6</td>

                            <td style="size: 80 ">Produk kreatif dan Kewirausahaan</td>

                            <td style="text-align:center">$grade5</td>

                           </tr>

                           <tr>

                             <td style="text-align:center">7</td>

                            <td style="size: 80 ">Al Quran</td>

                            <td style="text-align:center">$grade6</td>

                           </tr>

                           <tr>

                             <td style="text-align:center">8</td>

                            <td style="size: 80 "; name= >Bimbingan Konseling</td>

                            <td style="text-align:center">$grade7</td>

                           </tr>

                           <tr>

                             <td style="text-align:center">9</td>

                            <td style="size: 80 ">Produktif RPL</td>

                            <td style="text-align:center">$grade8</td>

                           </tr>

                           <tr>

                             <td style="text-align:center">10</td>

                            <td style="size: 80 ">Produktif TKJ</td>

                            <td style="text-align:center">$grade9</td>

                           </tr></h1>

                        <tr>

                            <td colspan="3" style="text-align:center">&nbsp;

                                <p >Nilai rata rata Anda Adalah: $ipk</p>

                                <p></p>

                            </td>     

                        </tr>

                    </table>



</td>

</tr>

</table>

</body>

</html>

eopage;

echo $page_str;
