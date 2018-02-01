
<!DOCTYPE html>
<html>
<head>
<title>Sistem Transaksi</title>
<meta name="description" content="Bisnis Agen Tiket Pesawat GRATIS Tanpa Modal - Tiket Pesawat, Tiket Kereta, Hotel, Bus, PELNI, Umroh & Haji, Tiket Bioskop, Paket Tour, PPOB Online, Isi Pulsa Online." />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#4679bd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="assets/css/hidep.css">
<link rel="stylesheet" href="assets/css/loginfreshv4.css" type="text/css" media="all">
<link rel="stylesheet" href="assets/css/font-awesome.css">
<script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/jquery/login-bg.js"></script>
</head>
<body>

<div class="topbg">
<div class="background">
<img src="assets/img/bg_01.jpg" style="width:100%;height:100%;" />
<img src="assets/img/bg_02.jpg" style="width:100%;height:100%;" />
</div>
</div>

        <h2><i class="fa fa-ravelry" style="margin-right:10px;"></i>Sistem Transaksi</h2>
        <div class="w3layoutscontaineragileits">
                <form action="<?= base_url() ?>LoginController/LoginAction" method="post">
                        <input type="text" name="username" class="username" id="username" placeholder="Username" required="" autocomplete="off">
      <input type="text" style="display:none">
                        <input type="password" style="display:none">
                        <input type="password" name="password" class="password" id="password" placeholder="Password" required="" autocomplete="off">
            <div class="login-footer">
      <input type="checkbox" id="show-password"> <label for="show-password">Show password</label>
      </div>
                        <div class="aitssendbuttonw3ls">
                                <input type="submit" value="Log In" id="buttonlogin">
                                <div class="clear"></div><br>
                                        <p>Lupa Password? <a href="//klikmbc.co.id/reset" target="_blank"><b>Klik disini</b></a> <span>
                                | Daftar Gratis! <a href="//klikmbc.co.id/register"><b>Klik disini</b></a>
                                </span></p>
                        </div>
                </form>
        </div>

        <div class="w3footeragile">
                <p> &copy; 2017 iT MMBC. All Rights Reserved <br> <i class="fa fa-phone-square"></i> Call center: 0858-13052706</p>
        </div>

<!-- including the jQuery dependency -->
<script src="assets/jquery/3.2.1/jquery.min.js"></script>
<!-- including the plugin -->
<script src="assets/jquery/hideShowPassword.js"></script>
<script>

$('#show-password').change(function(){
  $('#password').hideShowPassword($(this).prop('checked'));
});


</script>

</body>

</html>
