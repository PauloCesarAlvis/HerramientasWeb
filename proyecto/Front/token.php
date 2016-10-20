<?php
// Step 6
$data = 'client_id=' . '68703385219c37125ce4' . '&' .
		'client_secret=' . '4f9d958b592c0e492bbed136cf0d62ba662175fd' . '&' .
		'code=' . urlencode($_GET['code']);

$ch = curl_init('https://github.com/login/oauth/access_token');
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

preg_match('/access_token=([0-9a-f]+)/', $response, $out);
echo $out[1];
curl_close($ch);
?>
