<?php

$tmp_name = '/tmp/'.uniqid().'.image';
$json_file = '/tmp/'.uniqid().'.json';

exec  ( 'wget -O '.$json_file.' https://raw.githubusercontent.com/sivizius/otterapi/master/otters.json'  );
if  ( !file_exists  ( $json_file  ) )
{
  echo  ( 'cannot get json (.__.)'  );
}
else
{
  $file_content = file_get_contents ( $json_file            );
  $json         = json_decode       ( $file_content,  true  );
  if  (
        ( isset ( $json [ 'jpgs'  ] ) )
      &&
        ( isset ( $json [ 'pngs'  ] ) )
      )
  {
    $otters = array_merge ( $json [ 'jpgs'  ],  $json [ 'pngs'  ]       );
    $number = rand        ( 0,                  sizeof  ( $otters ) - 1 );
    exec  ( 'wget -O '.$tmp_name.' '.$otters  [ $number ]  );
    exec  ( 'feh '.$tmp_name );
  }
  else
  {
    echo  ( 'json is invalid (.__.)'  );
  }
}
?>