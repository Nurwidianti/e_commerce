<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<!--footer-->
  <footer class= "py-2 bg-dark">
  <div class="container">
    <div class="col-lg-3 col-sm-4">
    <div class="footer-width-25">
    <h3 class="footer-title">Layanan Pelanggan</h3>
    <ul class="footer-list">
    
      <li class="footer-li" ><a href="#" style="color: white">Pusat Bantuan</a></style></li>
    
      <li class="footer-li"><a href="cara_pembelian.php" style="color: white">Cara Pembelian</a></li>
    
      <li class="footer-li"><a href="#" style="color: white">Pengiriman</a></li>
    
      <li class="footer-li"><a href="#" style="color: white">Cara Pengembalian</a></li>
    
    </ul>
  </div>
 </div>
 <div class="col-lg-3 col-sm-4">
    <div class="footer-width-25">
    <h3 class="footer-title">Jelajah</h3>
    <ul class="footer-list">
    
      <li class="footer-li"><a href="#" style="color: white">Kebijakan dan Privasi</a></li>
    
      <li class="footer-li"><a href="Syarat_Ketentuan.php" style="color: white">Syarat & Ketentuan</a></li>
    
      <li class="footer-li"><a href="AboutUs.php" style="color: white">Tentang Kami</a></li>
    
    </ul>
  </div>
     </footer>
     <script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>
</body>
</html>