<?php
include "../../inc/dbinfo.inc";

$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);

if (mysqli_connect_errno()) {
    echo "MySQL에 연결 실패: " . mysqli_connect_error();
    exit();
}

$database = mysqli_select_db($connection, DB_DATABASE);

if (!$database) {
    $createDatabaseQuery = "CREATE DATABASE IF NOT EXISTS " . DB_DATABASE;
    mysqli_query($connection, $createDatabaseQuery);
    mysqli_select_db($connection, DB_DATABASE);
}

$createTableQuery = "
CREATE TABLE IF NOT EXISTS PDFs (
    PDFID INT AUTO_INCREMENT PRIMARY KEY,
    PDFData LONGBLOB,
    PDFName VARCHAR(255),
    PDFWeek TEXT
);
";
mysqli_query($connection, $createTableQuery);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"]) && isset($_POST["description"])) {
    $file_name = $_FILES["file"]["name"];
    $file_tmp = $_FILES["file"]["tmp_name"];
    $file_size = $_FILES["file"]["size"];
    $file_week = $_POST["description"];

    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    $allowed_extensions = array("pdf", "ppt", "pptx");

    if (in_array($file_ext, $allowed_extensions)) {
        $file_data = file_get_contents($file_tmp);
        $file_data = mysqli_real_escape_string($connection, $file_data);

        // DELETE 쿼리 수정
        $query = "DELETE FROM PDFs WHERE PDFWeek = '$file_week'";
        $result = mysqli_query($connection, $query);

        if (!$result) {
            die('쿼리 실행 에러: ' . mysqli_error($connection));
        }

        // 필요에 따라 주석 해제하여 새로운 파일을 삽입하는 INSERT 쿼리
        // $query = "INSERT INTO PDFs (PDFData, PDFName, PDFWeek) VALUES ('$file_data', '$file_name', '$file_week')";
        // mysqli_query($connection, $query);

        echo "파일 및 설명이 성공적으로 업로드되었습니다.";
    } else {
        echo "잘못된 파일 유형입니다. 허용된 유형: pdf, ppt, pptx";
    }

    mysqli_close($connection);

    // 리디렉션
    header('Location: ../addFile.html');
    exit();
}
?>
