<?php

class split_merge {

    function split_file($file_name, $fileName, $parts_num) {
        $handle = fopen($file_name, 'rb') or die("error opening file");
        $file_size = filesize($file_name);
        $parts_size = floor($file_size / $parts_num);
        $modulus = $file_size % $parts_num;

        for ($i = 0; $i < $parts_num; $i++) {
            if ($modulus != 0 & $i == $parts_num - 1)
                $parts[$i] = fread($handle, $parts_size + $modulus) or die("error reading file");
            else
                $parts[$i] = fread($handle, $parts_size) or die("error reading file");
        }
        fclose($handle) or die("error closing file handle");

        $splitfilename1 = "../filecloud1/" . time() . '_splited_1_' . $fileName;
        $handle1 = fopen($splitfilename1, 'wb') or die("error opening file for writing");
        fwrite($handle1, base64_encode($parts[0])) or die("error writing splited file");

        $splitfilename2 = "../filecloud2/" . time() . '_splited_2_' . $fileName;
        $handle2 = fopen($splitfilename2, 'wb') or die("error opening file for writing");
        fwrite($handle2, base64_encode($parts[1])) or die("error writing splited file");

        $_SESSION["filecloud1"] = $splitfilename1;
        $_SESSION["filecloud2"] = $splitfilename2;

        fclose($handle1) or die("error closing file handle");
        fclose($handle2) or die("error closing file handle");
        return 'OK';
    }

    function merge_file($merged_file_name, $part1, $part2) {
        $content = '';
        $file_size1 = filesize($part1);
        $handle1 = fopen($part1, 'rb') or die("error opening file");
        $content .= base64_decode(fread($handle1, $file_size1)) or die("error reading file");

        $file_size2 = filesize($part2);
        $handle2 = fopen($part2, 'rb') or die("error opening file");
        $content .= base64_decode(fread($handle2, $file_size2)) or die("error reading file");
        $handle = fopen($merged_file_name, 'wb') or die("error creating/opening merged file");
        fwrite($handle, $content) or die("error writing to merged file");
        return 'OK';
    }

}

?>
