<?php



//$access_token = "bearer sM-UF1n_0p1rbaKipgBN0MoiBwUdXwOn8C73fmvw05KHZTxKVaXdoynXLl3d0aZIJz_8zuGcZBVj5fNRguZ8-W1Pm6ue56OsAieSTeQlgI-sTW0LJCPNuciwAk9lODv9ubDs92SdCe4sSkdn-zdnwOg_S51gvzKd0JTaRrtmqhrss1yauoqTevKMvBnnxgWK";
$url = 'http://localhost:3000/get';
$header = array();	
$header[] = 'Content-type: application/json';
//$header[] = 'Authorization:'.$access_token;
$curl = curl_init();
curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 2);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
$response = curl_exec($curl);
curl_close($curl);
$data=json_decode($response,true);//array 

var_dump($data);