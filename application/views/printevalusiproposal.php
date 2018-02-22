<!DOCTYPE html>
<html>
<head>
  <title>Evaluasi Proposal</title>
  <style type="text/css">
 
    .center  { 
     height: 100px;
    }
 
    .short{
      width: 50px;
    }
    .bawah{
      align-content: bottom;
    }
 
    .normal{
      width: 150px;
    }
    .lebar{
      width: 250px;
    }
     .tel{
      height: : 340px;
    }
   table{
      border-collapse: collapse;
      font-family: arial;
      border-collapse: 1px solid #00000;
      color:#00000;
    }
 
    tbody td{
      font-family: arial;
      font-size: 14px;
      padding: 2px;
    }
    thead td{
     font-family:arial;
      font-size: 14px;
      padding: 3px;
    }

  </style>
</head>

<body>
    <div>
      <p style="text-align:center; font-size:14pt">
        <strong><u><span style="font-family:Arial; ">EVALUASI PROPOSAL PROGRAM KEMITRAAN (PK)</span></u></strong>
      </p>
      <div>
      <?php
            $nomer=0;
            foreach ($query as $data) {
                $nomer++;
                ?>
      <table>
        <tbody>
          <tr>
            <td>Tahun Anggaran</td>
            <td>:</td>
            <td><?php echo $data->thn_anggaran?></td>
          </tr>
          <tr>
            <td>Kabupaten / kota</td>
            <td>:</td>
            <td><?php echo $data->ktkb?></td>
          </tr>
         
        </tbody>
      </table>
      </div>
      <div>
      <table>
        <tbody>
          <tr>
          <ol type="1">
          <td><li>Data Perusahaan</li></td>
          </ol>
          </tr>
          </tbody>
      </table>
      <table>
        <tbody>
          <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;-</td>
            <td>Nama usaha / Koperasi</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td><?php echo $data->nm_usaha?></td>
          </tr>
          <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;-</td>
            <td>Nama pemilik / ketua</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td><?php echo $data->nm_pemilik?></td>
          </tr>
          <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;-</td>
            <td>Jenis / bidang usaha</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td><?php echo $data->jenis_usaha?></td>
          </tr>
          <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;-</td>
            <td>Binaan lama</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td><?php echo $data->p_binaan_pk?>&nbsp;&nbsp;KB&nbsp; :&nbsp; <?php echo $data->kd_binaan?></td>
          </tr>
          <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;-</td>
            <td>Alamat tempat usaha</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td><?php echo $data->alamat_perusahaan?></td>
          </tr>
           <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;-</td>
            <td>Status tempat usaha</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td><?php echo $data->status_usaha?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>tahun/lainnya</td>
          </tr>
            <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;-</td>
            <td>Telepon dan fax</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td><?php echo "0",$data->notlp_perusahaan?></td>
          </tr>
            <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;-</td>
            <td>Berdiri</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td><?php echo $data->thn_berdiri?></td>
          </tr>
            <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;-</td>
            <td>Jumlah tenaga kerja</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td><?php echo $data->jml_karyawan?>&nbsp;orang</td>
          </tr>
            <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;-</td>
            <td>Jumlah anggota Koperasi</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td><?php echo $data->jml_pengurus?>&nbsp;orang</td>
          </tr>
            <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;-</td>
            <td>Neraca / Rugi Laba</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td><?php echo $data->neraca?></td>
          </tr>
            <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;-</td>
            <td>Nilai asset lancar</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td><?php echo "Rp " . number_format($data->nilai_asset,2,',','.')?></td>
          </tr>
            <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;-</td>
            <td>Nilai omset per tahun</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td><?php echo "Rp " . number_format($data->nilai_asset_tahun,2,',','.')?></td>
          </tr>
           <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;-</td>
            <td>Laba bersih/SHU per bln</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td><?php echo "Rp " . number_format($data->laba_bersih,2,',','.')?></td>
          </tr>
           <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;-</td>
            <td>NPWP</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td><?php echo $data->npwp?></td>
          </tr>
        </tbody>
      </table>
      <table>
        <tbody>
          <ol  start="2">
          <tr>
          <td><li>Kendala usaha / masalah yang dihadapi</li></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>:</td>
          <td><?php echo $data->kendala_usaha?></td>
          </tr>
          <tr>
          <td><li>Jumlah permohona</li></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>:</td>
          <td><?php echo $data->jml_permohonan?></td>
          </tr>
          <tr>
          <td><li>Akan digunakan untuk</li></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>:</td>
          <td><?php echo $data->penggunaan_modal?></td>
          </tr>
          <tr>
          <td><li>Surat Pengantar dari kantor / Dinas PK&M</li></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>:</td>
          <td><?php echo $data->srs_tansie?></td>
          </tr>
          </ol>
          </tbody>
      </table>
      <table>
        <tbody>
          <tr>
          <ol start="6">
          <td><li>Analisa proposal</li></td>
          </ol>
          </tr>
          </tbody>
      </table>
      <table>
        <tbody>
          <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;-</td>
            <td>Rasio likuiditas</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td><?php echo $data->rasio_likuiditas?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>X</td>
          </tr>
           <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;-</td>
            <td>Rasio aktivitas</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td><?php echo $data->rasio_aktifitas?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>X</td>
          </tr>
           <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;-</td>
            <td>Legalitas</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td><?php echo $data->legalitas?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Kredit point</td>
          </tr>
           <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;-</td>
            <td>Pemasaran</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td><?php echo $data->pemasaran?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Kredit point</td>
          </tr>
          </tbody>
          </table>
           <table>
        <tbody>
          <ol  start="7">
          <tr>
          <td><li>Hasil evaluasi proposal</li></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td><?php echo $data->status?></td>
          </tr>
          </ol>
          </tbody>
          </table>
          <table>
        <tbody>
          <ol  start="8">
          <tr>
          <td><li>Prakiraan dana yang dapat dibantu</li></td>
            <td>:</td>
            <td><?php echo "Rp " . number_format($data->perkiraan_dana,2,',','.')?></td>
          </tr>
          </ol>
          </tbody>
          </table>
           <table>
        <tbody>
          <ol  start="9">
          <tr>
          <td><li>Bukti foto copy anggunan/jaminan</li></td>
            <td></td>
            <td>:</td>
            <td>Ada</td>
          </tr>
          </ol>
          </tbody>
          </table>
          <table>
        <tbody>
          <tr>
          <td>Catatan Khusus</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td><?php echo $data->catatan?></td>
          </tr>
          <tr>
          <td>Dievaluasi tanggal</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td><?php echo $data->tgl_evaluasi?></td>
          </tr>
          </tbody>
          </table>
            <table>
        <tbody>
          <tr>
          <td>Paraf pengevaluasi/Litbang</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td>.....................................</td>
          </tr>
          </tbody>
      </table>
      <br/>
      <table>
        <tbody>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <td>Kepala PKBL,</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <td>Litbang,</td>
          </tr>
          </tbody>
      </table>
      <br/><br/><br/>
       <table>
        <tbody>
          <tr>
            <td>.......................................</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>...................................</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          </tbody>
      </table>
       <?php }?>
</body>
</html>