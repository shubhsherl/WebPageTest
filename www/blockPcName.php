<?php

// Copyright 2020 Catchpoint Systems Inc.
// Use of this source code is governed by the Polyform Shield 1.0.0 license that can be
// found in the LICENSE.md file.

require_once __DIR__ . '/common.inc';

$key = array_key_exists('key', $_GET) ? $_GET['key'] : '';
$pc = array_key_exists('pc', $_GET) ? $_GET['pc'] : '';

$key_valid = false;

$locKey = GetSetting('location_key', '');

if (strcmp($key, $locKey) == 0) {
    $key_valid = true;
}

if (!$key_valid) {
    echo 'Invalid key, please provide a valid key';
    exit;
}

$list = SetBlockPcName($pc);

echo "List of blocked PC names: <br>";
foreach ($list as $name) {
    echo $name . "\n";
}

