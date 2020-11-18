<?php
include 'class.php';

$class = new SmsaClient;


$today = date('YmdHi');

        $startDate = date('YmdHi');
        $range = $today - $startDate;
        $rand = rand(0, $range);
        $uniqe = $startDate + $rand;
        $parameters = [
          'refNo'         => $uniqe,
          'idNo'          => '0',
          'cName'         => 'thaerr',
          'cntry'         => 'KSA',
          'cCity'         => 'Riyadh',
          'cMobile'       => '9665554546544',
          'cAddr1'        => 'Test',
          'cAddr2'        => 'Testing Address value',
          'PCs'           => '1',
          'cEmail'        => 'test@test.com',
          'weight'        => '1',
          'cZip'          => '11655',
          'cPOBox'        => '63529',
          'cTel1'         => '5634554',
          'cTel2'         => '456546',
          'carrValue'     => '0',
          'carrCurr'      => 'SAR',
          'codAmt'        => '160',
          'custVal'       => '0',
          'custCurr'      => 'SAR',
          'insrAmt'       => '0',
          'insrCurr'      => '',
          'itemDesc'      => '',
          'prefDelvDate'  => '',
          'gpsPoints'     => ''
        ];


print_r($class->Shipping($parameters));






