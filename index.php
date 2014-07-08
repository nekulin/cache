<?php

$objCache = new Cache('MemCache');
$objCache->set('key', 'val');
$objCache->get('key');