<?php
include "../../inc/dbinfo.inc";

$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (mysqli_connect_errno()) {
    echo "MySQL에 연결 실패: " . mysqli_connect_error();
    exit();
}

$query = "SELECT PDFData, PDFName, PDFWeek FROM PDFs";
$result = mysqli_query($connection, $query);

echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<meta charset='utf-8'>";
echo "<title>PDF 파일 보기</title>";
echo "</head>";
echo "<body>";

echo "<h1>PDF 파일 보기</h1>";

while ($row = mysqli_fetch_assoc($result)) {
    $pdfData = $row['PDFData'];
    $pdfName = $row['PDFName'];
    $pdfWeek = $row['PDFWeek'];

    echo "<p><strong>파일명:</strong> $pdfName</p>";
    echo "<p><strong>주차:</strong> $pdfWeek</p>";

    // PDF 파일 미리보기
    echo '<embed src="data:application/pdf;base64,' . base64_encode($pdfData) . '" width="800" height="600" type="application/pdf">';

    echo "<hr>";
}

echo "</body>";
echo "</html>";

mysqli_close($connection);
?>

