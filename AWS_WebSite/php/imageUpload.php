<?php
include "../../inc/dbinfo.inc";

function getPdfNamesByWeek($targetWeek)
{
    $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    if (mysqli_connect_errno()) {
        echo "MySQL에 연결 실패: " . mysqli_connect_error();
        exit();
    }

    $query = "SELECT PDFName FROM PDFs WHERE PDFWeek = '$targetWeek'";
    $result = mysqli_query($connection, $query);

    $pdfNames = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $pdfNames[] = $row['PDFName'];
    }

    mysqli_close($connection);

    return $pdfNames;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/menu.css">
    <title>KKM's Home</title>
</head>

<body>
    <header id="menu">
        <ul id="menu_bar">
            <li>Cloud Computing</li>
            <li><a href="./contentLearning.php">학습 내용</a></li>
            <li><a href="../skill.html">기술</a></li>
            <li><a href="../trend.html">동향</a></li>
        </ul>
    </header>
    <section>
        <h3 id="nav_title">CloudComputing 학습 내용</h3>
        <nav>
            <button><a href="#week1">Week 1</a></button>
            <button><a href="#week2">Week 2</a></button>
            <button><a href="#week3">Week 3</a></button>
            <button><a href="#week4">Week 4</a></button>
            <button><a href="#week5">Week 5</a></button>
            <button><a href="#week6">Week 6</a></button>
            <button><a href="#week7">Week 7</a></button>
            <button><a href="#week8">Week 8</a></button>
            <button><a href="#week9">Week 9</a></button>
            <button><a href="#week10">Week 10</a></button>
            <button><a href="#week11">Week 11</a></button>
            <button><a href="#week12">Week 12</a></button>
            <button><a href="#week13">Week 13</a></button>
        </nav>
    </section>
    <hr>

    <?php

    // 주차에 따른 텍스트 배열
    $textsByWeek = array(
        1 => "1주차 [8월28일 - 9월03일]",
        2 => "2주차 [9월04일 - 9월10일]",
        3 => "3주차 [9월11일 - 9월17일]",
        4 => "4주차 [9월18일 - 9월24일]",
        5 => "5주차 [9월25일 - 10월01일]",
        6 => "6주차 [10월02일 - 10월08일]",
        7 => "7주차 [10월09일 - 10월15일]",
        8 => "8주차 [10월16일 - 10월22일]",
        9 => "9주차 [10월23일 - 10월29일]",
        10 => "10주차 [10월30일 - 11월05일]",
        11 => "11주차 [11월06일 - 11월12일]",
        12 => "12주차 [11월13일 - 11월19일]",
        13 => "13주차 [11월20일 - 11월26일]",
    );

    // 1주차부터 11주차까지 반복
    for ($week = 1; $week <= 13; $week++) {
        $pdfNames = getPdfNamesByWeek($week);

        // 결과 출력
        echo "<h3 id='week$week' class='sectionname'>" . $textsByWeek[$week] . "</h3>";

        if (!empty($pdfNames)) {
            echo "<div class='content'>";
            foreach ($pdfNames as $pdfName) {
                $downloadLink = "./fileDownload.php?file=" . urlencode($pdfName); // 다운로드 링크 생성
                echo "<p class='file_name'><a href='$downloadLink'>$pdfName</a></p>";
            }
            echo "</div>";
        } else {
            echo "<p>해당 주차에 해당하는 PDF 파일이 없습니다.</p>";
        }
    }
    ?>

</body>

</html>