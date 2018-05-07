<?php

//
// Gianluca.Moro@unipd.it
//

$isDebug = false;

$ipAllowedToCopy = []; // empty list: all

$shotsDirectory = "/w7x/vault/";

$mainW7XTreeName = "w7x";

$statusDefinitions = [
// value in db, color, checkable, comment
  [ 0, 'red',    false, "Not ready" ],
  [ 1, 'red',    true,  "Ready to be checked" ],
  [ 2, 'orange', false, "Checked - processing" ],
  [ 3, 'green',  false, "Processed" ]
];


$dbFilename = "/w7x/vault/shotdb2.db";
$dbShots = new SQLite3($dbFilename);

$listOfTrees = [
 'w7x','qmb','qmc','qmf','qmrv1','qmrv2','qmrw','qoc','qoi','qrn',
 'qrp','qsh','qsk','qsl','qso','qsr10a','qsr10b','qsr11a','qsr11b','qsr20a',
 'qsr20b','qsr21a','qsr21b','qsr30a','qsr31a','qsr31b','qsr40a','qsr40b','qsr41a','qsr41b',
 'qsr51a','qsr02','qsw','qsx','qxt1','qxt2','qxt3','qxt4'
];

// logging/errors configuration
$logFileName = "logs/log1.txt";
$logLevel = 10;
