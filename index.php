<html>  
 <head>  
  <title>Tugas Cloud Computing</title>  
  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>  
  <link rel="stylesheet" href="css/content.css" type="text/css" media="screen"/>  
  <link href="jquery-ui.css" rel="stylesheet">       
 </head>  
 <body>     
  <div id="content">  
  <a class="back" href=""></a>  
  <table border="0" width="100%">  
   <tr>  
    <td width="24%">  
    <img src="images/stikomlogo.jpg" class="stikomlogo">  
    </td>  
    <td width="76%">  
    <p class="head">  
    TUGAS PERANCANGAN WEB  
    <br>BIODATA DIRI  
    <br>Kurniawan As  
    <br>217 280 064  
    </p>  
    </td>  
   </tr>  
  </table>  
  <h2>Data Mahasiswa</h2>  
  <table class="table1" width="100%">  
   <tbody>  
    <tr>  
    <th width="24%" scope="row">Nama Mahasiswa</th>  
    <td width="76%">Kurniawan As/td>  
    </tr>  
    <tr>  
    <th scope="row">NIM</th>  
    <td>217280064</td>  
    </tr>  
    <tr>  
    <th scope="row">Photo</th>  
    <td><img src="images/photo.jpg" class="photo"></td>  
    </tr>  
    <tr>  
    <th scope="row">Riwayat</th>  
    <td>                                
    <p><a href="#" id="dialog-link" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-newwin"></span>Lihat Detail</a></p>                                     
    <!-- ui-dialog -->  
    <div id="dialog" title="Biodata Detail (130030347)">  
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
     : I Made Pirman Dwiana  
     <br>: Laki-laki  
     <br>: Tabanan, 18 September 1990  
     <br>: Belum kawin  
     <br>: Tabanan  
     </td>       
     </tr>  
     <tr class="tbltitle">  
     <td colspan="2">  
     Pendidikan  
     </td>                                     
     </tr>  
     <tr class="tblcont">  
     <td>  
     Sekolah Menengah Pertama  
     <br>Sekolah Menengah Atas  
     <br>Diploma III  
     <br>Strata I  
     </td>  
     <td>  
     : SMP Negeri 2 Kerambitan  
     <br>: SMA Negeri 1 Tabanan  
     <br>: LP3I Bali  
     <br>: STIKOM Bali  
     </td>       
     </tr>  
     <tr class="tbltitle">  
     <td colspan="2">  
     Tentang Saya  
     </td>                                     
     </tr>  
     <tr class="tblcont">  
     <td colspan="2">  
     Saya ini lahir di Tabanan, besar di Tabanan, waktu kuliah Diploma III tinggal di Dalung.  
     Saat ini bekerja di Kuta jadi kuli/buruh bulanan. :D. Suka makan nasi, ngerokok kadang-kadang aja.  
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
     <br>Blogsite  
     <br>Twitter                                          
     </td>  
     <td>  
     : <a href="mailto:pirmandwiana@yahoo.com">pirmandwiana@yahoo.com</a>  
     <br>: <a href="https://wrongtabs.wordpress.com">www.wrongtabs.wordpress.com</a>  
     <br>: <a href=" http://twitter.com/pirmandwiana">@pirmandwiana</a>                      
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
  <script src="external/jquery/jquery.js"></script>  
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