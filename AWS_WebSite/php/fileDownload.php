<?php
include "../../inc/dbinfo.inc";

if (isset($_GET['file'])) {
    $filename = $_GET['file'];

    $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    if (mysqli_connect_errno()) {
        echo "MySQL에 연결 실패: " . mysqli_connect_error();
        exit();
    }

    $query = "SELECT PDFData FROM PDFs WHERE PDFName = '$filename'";
    $result = mysqli_query($connection, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        $pdfData = $row['PDFData'];

        // 파일 다운로드 설정
        header('Content-type: application/pdf');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        echo $pdfData;
    } else {
        echo "파일을 찾을 수 없습니다.";
    }

    mysqli_close($connection);
} else {
    echo "파일 이름이 전달되지 않았습니다.";
}
?>