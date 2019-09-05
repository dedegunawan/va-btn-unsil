<?php
/**
 * Created by PhpStorm.
 * User: tik_squad
 * Date: 8/7/19
 * Time: 10:54 PM
 */

require_once '../vendor/autoload.php';

$api = \DedeGunawan\VaBtnUnsil\Api::getInstance();
$api->setId('UNSILWS');
$api->setKey('LyaBszCiQclKTV90ss7M8HPcJK1gktGH');
$api->setSecret('7CS17vp2gf');
$api->setApiUrl('https://vabtn-dev.btn.co.id:9021/v1/unsil/');

// generaye VA Number
$va = \DedeGunawan\VaBtnUnsil\VANumberFormat::build(
    '9', '4572', '001', '1'
)->generate();

// create Api
$request = new \DedeGunawan\VaBtnUnsil\Request([
    'ref' => rand(11, 99).time(),
    'va' => $va,
    'nama' => 'Dede Gunawan',
    'layanan' => 'Pembayaran UKT',
    'kodelayanan' => '001',
    'jenisbayar' => 'UKT Tahun 2019-2020 Ganjil',
    'kodejenisbyr' => '20191',
    'noid' => '137006107',
    'tagihan' => 1000000,
    'flag' => 'F',
    'expired' => '1909082359',
    'reserve' => '',
    'description' => '',
    'angkatan' => '2013',
]);
$update_request = $request;
$response = $api->create($request);
var_dump($response->getAll());

//
//// inquiry Api
//$request = new \DedeGunawan\VaBtnUnsil\Request([
//    'ref' => rand(11, 99).time(),
//    'va' => $va
//]);
//$response = $api->inquiry($request);
//var_dump($response->getAll());
//
//
//// update Api
//$update_request['description'] = "Update Nominal";
//$update_request['tagihan'] = 50000;
//$response = $api->update($update_request);
//var_dump($response->getAll());
//
//// inquiry Api
//$request = new \DedeGunawan\VaBtnUnsil\Request([
//    'ref' => rand(11, 99).time(),
//    'va' => $va
//]);
//$response = $api->inquiry($request);
//var_dump($response->getAll());
//
//
//// delete Api
//$request = new \DedeGunawan\VaBtnUnsil\Request([
//    'ref' => rand(11, 99).time(),
//    'va' => $va
//]);
//$response = $api->delete($request);
//var_dump($response->getAll());
//
//
//// inquiry Api
//$request = new \DedeGunawan\VaBtnUnsil\Request([
//    'ref' => rand(11, 99).time(),
//    'va' => $va
//]);
//$response = $api->inquiry($request);
//var_dump($response->getAll());

