<?php

function is_active_link($path) {
    return request()->path() == $path ? 'active_link' : '';
};

function moveFolderToAnotherDisk($file_disk = 'local', $file_path = '/', $move_location_disk = 'local', $move_location_path = '/') {
//    dd($file_disk, $file_path, $move_location_disk, $move_location_path);
    $files = Storage::disk($file_disk)->files($file_path);
//    dd($files);
    foreach ($files as $file) {
        dump($file, $move_location_path);
        Storage::disk($move_location_disk)->put($move_location_path . '/' . $file, Storage::disk($file_disk)->get($file));
    }
}
