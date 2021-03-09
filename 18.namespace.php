<?php

include 'namespace/app/App.php';
include 'namespace/models/Model.php';

use App\Table as AppTable;
use Model\Table as ModelTable;

AppTable::get();
ModelTable::get();