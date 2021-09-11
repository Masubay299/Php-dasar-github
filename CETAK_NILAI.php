<HTML>
<HEAD>
    <style type="text/css">
        <!--
        body.p.id
        {color: black; font-family: verdana; font-size: 80pt}
        H1
        {color: black; font-family:arial; font-size: 62pt}
        .kiri{text-align: left;}
        p{text-align: center;}
        input{border:none; font-size: 16px background :yellow;}
        td{font-size:  16px}
        th{font-size: 18px}
        -->
    </style>
</HEAD>
<body>
    <table border=7 cellpadding=100 width=100%>
        <tr>
            
            <td bgcolor="yellow" align=center valign=top width=100%>
                <h2>Form Cetak Nilai Siswa <br>SMK ASSALAAM BANDUNG<br>Tahun 2021/2022</h2>
                
                <form method="post" action="NILAI.php">
                    <table border=4 width=50% bgcolor="silver" align=center valign=top >
                        <tr>
                            <td colspan="3" >
                                <br><h3 >
                                <div class="kiri" >&nbsp;&nbsp;Nama:
                                    <input type="text" name="nama" value="" size="55" maxlength="50" 
                                    style=" background: transparent;">
                                </div>
                                   <div class="kiri">&nbsp;&nbsp;Nis &nbsp;&nbsp;:
                                      <input type="text" name="nim" size="55" maxlength="14" value=""
                                      style=" background:transparent;"> 
                                  </div>
                                  </h3>
                            </td>

                        </tr>
                        <br>
                        <tr>
                            <th>No</th>
                            <th>&nbsp;Mata Pelajaran&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                            <th>Nilai</th>
                        </tr>
                        
                        <tr>
                             <td style="text-align:center">1</td>
                            <td style="size: 80 ;background: ">Pendidikan Agama Islam</td>
                            <td style="text-align:center"><input type="text" name="nilaial" size="2" maxlength="14" value="" style=" background: transparent;"></td>
                           </tr>
                          
                        <tr>
                             <td style="text-align:center">2</td>
                            <td style="size: 80 ">PPKN</td>
                            <td style="text-align:center"><input type="text" name="nilaidis" size="2" maxlength="14" value="" style=" background: transparent;"></td>
                           </tr>
                           <tr>
                             <td style="text-align:center">3</td>
                            <td style="size: 80 ">Bahasa Indonesia</td>
                            <td style="text-align:center"><input type="text" name="nilaibd" size="2" maxlength="14" value="" style=" background: transparent;"></td>
                           </tr>
                           <tr>
                             <td style="text-align:center">4</td>
                            <td style="size: 80 ">Matematika</td>
                            <td style="text-align:center"><input type="text" name="nilaipbd" size="2" maxlength="14" value="" style=" background: transparent;"></td>
                           </tr>
                           <tr>
                             <td style="text-align:center">5</td>
                            <td style="size: 80 ">Bahasa Inggris</td>
                            <td style="text-align:center"><input type="text" name="nilaipmw" size="2" maxlength="14" value="" style=" background: transparent;transparent;"></td>
                           </tr>
                           <tr>
                             <td style="text-align:center">6</td>
                            <td style="size: 80 ">Produk kreatif dan Kewirausahaan</td>
                            <td style="text-align:center"><input type="text" name="nilaipa" size="2" maxlength="14" value="" style=" background: transparent;"></td>
                           </tr>
                           <tr>
                             <td style="text-align:center">7</td>
                            <td style="size: 80 ">Al quran</td>
                            <td style="text-align:center"><input type="text" name="nilaisd" size="2" maxlength="14" value="" style=" background: transparent;"></td>
                           </tr>
                           <tr>
                             <td style="text-align:center">8</td>
                            <td style="size: 80 "; name= >Bimbingan Konseling</td>
                            <td style="text-align:center"><input type="text" name="nilaipsd" size="2" maxlength="14" value="" style=" background: transparent;"></td>
                           </tr>
                           <tr>
                             <td style="text-align:center">9</td>
                            <td style="size: 80 ">Produktif RPL</td>
                            <td style="text-align:center"><input type="text" name="nilaioop" size="2" maxlength="14" value="" style=" background: transparent;"></td>
                           </tr>
                           <tr>
                             <td style="text-align:center">10</td>
                            <td style="size: 80 ">Produktif TKJ</td>
                            <td style="text-align:center"><input type="text" name="nilaipw" size="2" maxlength="14" value="" style=" background: transparent;"transparent;></td>
                           </tr></h1>
                          
                        <tr>
                            <td colspan="3">&nbsp;
                                <p>
                                <input type="submit" name="submit" value="CETAK NILAI" size="10" maxlength="100" style="background: pink ;font-size:20px; color-border=3;">
                                </p>
                            </td>     
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>    
</body>
</HTML>