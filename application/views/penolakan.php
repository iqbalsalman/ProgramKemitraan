<!DOCTYPE html>
<html>
<head>
  <title>Report Table</title>
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
<div>

    <table  class="lebar">
      <thead>
        <tr>
        <th class="short"></th>
        <th class="normal"></th>
        <th class="normal"> </th>
          <th class="normal"><img width=97 height=78 src="<?php echo base_url(); ?>asset/img2/image001.png"></th>
        </tr>
      </thead>
      <tbody>
    
          <tr>
          <td></td>
          <td></td>
          <td></td>
                      <td><h4>Resi Proposal Program Kemitraan Dan Bina Lingkungan</h4></td>
                      
          </tr>
      </tbody>
    </table>
   </div>
  <div>
    <table border="1">
      <thead>
        <tr>
          <th class="short">ID Resi</th>
          <th class="normal">Tanggal Masuk Proposal</th>
          <th class="normal">Nama Lengkap</th> 
          <th class="normal">Nomer Telepon CMB</th>
          <th class="normal">Alamat CMB</th>
          <th class="normal">Nama Daerah</th>
          <th class="normal">Perihal Proposal</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; ?>
        <?php foreach($query as $data): ?>
          <tr>
                      <td><?php echo $data->resi_p ?></td>
                      <td><?php echo $data->tglmasuk?></td>
                      <td><?php echo $data->nama ?></td>
                      <td><?php echo $data->nlpcmb ?></td>
                      <td><?php echo $data->alamatcmb ?></td>
                      <td><?php echo $data->nama_dinas ?></td>
                      <td><?php echo $data->perihal ?></td>
          </tr>
        <?php $no++; ?>
        <?php endforeach; ?>
      </tbody>
    </table>
    <table>
     <thead>
      <tr>
      <th class="normal" ></th>
      <th class="normal"> </th>
      <th class="normal"></th>
      <th class="normal"></th>
      <th class="normal"></th>
      <th class="normal"></th>   
       
      </tr>
       </thead>
       <tbody>
         <tr>
           <td></td>
            <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td ></td>
         </tr>
       </tbody>
    </table>
     <table>
     <thead>
      <tr>
      <th class="normal" ></th>
      <th class="normal"> </th>
      <th class="normal"></th>
      <th class="normal"></th>
      <th class="normal"></th>
      <th class="normal"></th>   
       
      </tr>
       </thead>
       <tbody>
         <tr>
           <td></td>
            <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td ></td>
         </tr>
       </tbody>
    </table>
    <table>
     <thead>
      <tr>
      <th class="normal" ></th>
      <th class="normal"> </th>
      <th class="normal"></th>
      <th class="normal"></th>
      <th class="normal"></th>
      <th class="normal"></th>   
       
      </tr>
       </thead>
       <tbody>
         <tr>
           <td></td>
            <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td ></td>
         </tr>
       </tbody>
    </table>
     <table>
     <thead>
      <tr>
      <th class="normal" ></th>
      <th class="normal"> </th>
      <th class="normal"></th>
      <th class="normal"></th>
      <th class="normal"></th>
      <th class="normal"></th>   
       
      </tr>
       </thead>
       <tbody>
         <tr>
           <td></td>
            <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td ></td>
         </tr>
       </tbody>
    </table>
     <table>
     <thead>
      <tr>
      <th class="normal" ></th>
      <th class="normal"> </th>
      <th class="normal"></th>
      <th class="normal"></th>
      <th class="lebar">Sekertariat PKBL Perum Peruri</th>   
       
      </tr>
       </thead>
       <tbody>
         <tr>
           <td></td>
            <td></td>
             <td></td>
             <td></td>
             <td></td>
            
         </tr>
       </tbody>
    </table>
    <table>
     <thead>
      <tr>
      <th class="normal" ></th>
      <th class="normal"></th>
      <th class="normal"></th>
      <th class="normal"></th>
      <th class="normal"></th>
        
      </tr>
       </thead>
       <tbody>
         <tr>
           <td></td>
            <td></td>
             <td></td>
             <td></td>
             
             <td >(.................................................)</td>
         </tr>
       </tbody>
    </table>
   </div>
</body>
</html>