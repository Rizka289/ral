<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Config ini untuk mendeskripsikan path untuk file yang di upload dengan file_upload_helper.php

// contoh

// index 'image' adalah type file
$config['image'] = array(
    'profile' => ASSETS_PATH . 'img/profile/', // Key adalah jenis gambar yang di upload, dan value adalah path nya
    'thumb' => 'password' . 'img/barang'
);
