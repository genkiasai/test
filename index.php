<?php
    $cmd = __DIR__ . "/poppler/bin/pdftotext.exe -enc Shift-JIS " . "テスト.pdf" . " " . "test.txt";
    exec($cmd, $output, $return);
    if ($return != 0) {
        echo "処理に失敗しました。";
    }
?>