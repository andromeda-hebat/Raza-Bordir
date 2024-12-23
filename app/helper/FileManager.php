<?php

namespace App\Helper;

class FileManager
{
    public static function moveFile(array $files, string $upload_dir): bool
    {
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0755, true);
        }

        $is_move_uploaded_file_success = true;
        foreach ($files as $key => $value) {
            $file_path = $upload_dir . $value['new_name'];

            if (!move_uploaded_file($value['tmp_name'], $file_path)) {
                $is_move_uploaded_file_success = false;
            }
        }

        if ($is_move_uploaded_file_success) {
            return true;
        } else {
            return false;
        }
    }
}
