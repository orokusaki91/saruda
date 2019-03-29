<?php

function uploadFileInPublicFolder($file, $input_name, string $path, $counter = null)
{
	$name = $input_name . ($counter == null ? '' : $counter . '_') . time() .  '.' . $file->getClientOriginalExtension();
    $folder = $path;
    $saveFolder = public_path($folder);
    $file->move($saveFolder, $name);
	$dbPath = $folder . $name;
    return $dbPath;
}