<?php

$db=new Database($config['database']);
$cards=$db->query("SELECT * FROM notes WHERE user_id=1")->fetchAll();