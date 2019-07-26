<?php
return [
  "driver" => "smtp",
  "host" => "smtp.mailtrap.io",
  "port" => 2525,
  "from" => array(
      "address" => "from@example.com",
      "name" => "Example"
  ),
  "username" => "ec2cffd02e7b25",
  "password" => "5d821c821a9626",
  "sendmail" => "/usr/sbin/sendmail -bs"
];