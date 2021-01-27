<html>  
 <head>  
  <title>Tugas Cloud Computing</title>  
  <link rel="stylesheet" href="style.css" type="text/css" media="screen"/>  
  <link rel="stylesheet" href="content.css" type="text/css" media="screen"/>  
  <link href="jquery-ui.css" rel="stylesheet">       
 </head>  
 <body>     
  <div id="content">  
  <a class="back" href=""></a>  
  <table border="0" width="100%">  
   <tr>  
    <td width="24%">   
    </td>  
    <td width="76%">  
    <p class="head">   
BIODATA DIRI   
    </p>  
    </td>  
   </tr>  
  </table>  
  <h2>Data Mahasiswa</h2>  
  <table class="table1" width="100%">  
   <tbody>  
    <tr>  
    <th width="24%" scope="row">Nama Mahasiswa</th>  
    <td width="76%">Kurniawan As</td>  
    </tr>  
    <tr>  
    <th scope="row">NIM</th>  
    <td>217280064</td>  
    </tr>  
    <tr>  
    <th scope="row">Photo</th>  
    <td><img src="1.jpg" class="photo"></td>  
    </tr>  
    <tr>  
    <th scope="row">Riwayat</th>  
    <td>                                
    <p><a href="#" id="dialog-link" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-newwin"></span>Lihat Detail</a></p>                                     
    <!-- ui-dialog -->  
    <div id="dialog" title="Biodata Detail">  
    <p>  
    <table width="100%" border="0" class="dialogtbl">  
     <tr class="tbltitle">  
     <td colspan="2">  
     Data Pribadi  
     </td>                                     
     </tr>  
     <tr class="tblcont">  
     <td>  
     Nama Lengkap  
     <br>Jenis Kelamin  
     <br>Tempat/tgl lahir  
     <br>Status  
     <br>Alamat  
     </td>  
     <td>  
     : Kurniawan As  
     <br>: Laki-laki  
     <br>: Pinrang, 01 Juli 1999  
     <br>: Mahasiswa  
     <br>: Kaboe  
     </td>       
     </tr>  
     <tr class="tbltitle">  
     <td colspan="2">  
     Pendidikan  
     </td>                                     
     </tr>  
     <tr class="tblcont">  
     <td>  
     SD 
     <br>SMP  
     <br>SMA/SMK  
     <br>S1 
     </td>  
     <td>  
     : SDN 254 Tiroang  
     <br>: SMPN 3 Pinrang  
     <br>: SMKN 1 Pinrang
     <br>: UMPAR 
     </td>       
     </tr>  
     <tr class="tbltitle">  
     <td colspan="2">    
     Kontak  
     </td>                                     
     </tr>  
     <tr class="tblcont">  
     <td>  
     Email  
     <br>Instagram  
     <br>Facebook                                          
     </td>  
     <td>  
     : kaboecomunity@gmail.com 
     <br>: kurniiawanas  
     <br>: Kurniawan As                      
     </td>                                          
     </tr>                                                              
    </table>  
    </p>  
    </div>   
    </td>  
    </tr>  
   </tbody>  
  </table>  
  </div>  
  <script src="jquery.js"></script>  
  <script src="jquery-ui.js"></script>  
  <script>            
  $( "#dialog" ).dialog({  
  autoOpen: false,  
  width: 600,  
  height: 445,  
  modal: true,  
  buttons: [  
  {  
  text: "Close",  
  click: function() {  
  $( this ).dialog( "close" );  
  }  
  }  
  ]  
  });                      
  // Link untuk membuka dialog  
  $( "#dialog-link" ).click(function( event ) {  
  $( "#dialog" ).dialog( "open" );  
  event.preventDefault();  
  });                      
  // Hover untuk widget  
  $( "#dialog-link, #icons li" ).hover(  
  function() {  
  $( this ).addClass( "ui-state-hover" );  
  },  
  function() {  
  $( this ).removeClass( "ui-state-hover" );  
  }  
  );  
  </script>  
 </body>  
 </html>  
