<!DOCTYPE html>
<html>
<head>
  <title>Surat Penolakan</title>
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
 
    thead th{
      text-align: center;
      font-size: 16px;
      padding: 10px;
    }
 
    tbody td{
      text-align: center;
      font-size: 16px;
      padding: 10px;
    }
 
    tbody tr:nth-child(even){
      background: #00000;
    }
 
    tbody tr:hover{
      background: #00000;
    }
  </style>
</head>

<body>
<table >
    <thead>
    <tr>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
        <th><h3>Penjadwalan Survei Program Kemitraan</h3></th>
        </tr>
    </thead>
</table>
<br/>
   
                <table border="1">
                    <thead>
                      <tr>
                        <th width="100px"><center>Nip</center></th>
                        <th width="200px"><center>Nama Lengkap</center></th>
                        <th width="170px"><center>Tanggal Penugasan</center></th>
                        <th width="175px"><center>Masa Berakhir Tugas</center></th>
                        <th><center>Lama Tugas</center></th>
                        <th><center>Penandatangan</center></th>
                      </tr>
                    </thead>
                    <tbody>

                  <?php
                    foreach ($query as $data) {
                        ?>
                        <tr>
                
                <td><center><?php echo $data->nip?></td>
                <td><center><?php echo $data->nama_surveyor?></center></td>
                <td><center><?php echo $data->tgl_tugas1?></center></td>
                <td><center><?php echo $data->tgl_tugas2?></center></td>
                <td><center><?php echo $data->jmlhari,' ','Hari'?></center></td>
                <td><center></center></td>
                                       
                                                   
                             </tr> 
                        

                    <?php } ?> 
            
            </tbody>
         
                  </table>
                  </body>
                  </html>
        