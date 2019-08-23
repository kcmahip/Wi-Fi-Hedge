<html>
<head>
<meta charset="UTF-8" />
</head>
<?php


//exec("sudo cd /var/www/html/");
//exec("sudo mkdir chalyo_haldai");
exec("sudo iptables -t mangle -I internet 1 -m mac --mac-source C0:EE:FB:3C:87:14  -j RETURN");
$file_url = 'http://192.168.43.97/satan_sunil.apk';
header('Location: '.$file_url);
echo "DONE!!"
?>
</html>



