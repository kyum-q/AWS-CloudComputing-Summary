<?php
include "../../inc/dbinfo.inc";
include "./getImage.php";

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
    <link rel="stylesheet" href="../css/contentLearning.css">
    <title>Cloud Computing 학습 내용</title>

    <script>
        function scrollToSection(sectionId) {
            var location = document.querySelector(sectionId).offsetTop;
            window.scrollTo({ top: location - 50, behavior: 'smooth' });
        }

    </script>
</head>

<body>
    <header id="menu">
        <ul id="menu_bar">
            <li><a href="./index.php">Cloud Computing</a></li>
            <li><a href="./contentLearning.php">학습 내용</a></li>
            <li><a href="./skill.php">기술</a></li>
            <li><a href="./trend.php">동향</a></li>
        </ul>
    </header>

    <article>
        <section id="nav_section">
            <h1 id="nav_title">CloudComputing 학습 내용</h1>
            <nav>
                <button><a onclick="scrollToSection('#week1')">Week 1</a></button>
                <button><a onclick="scrollToSection('#week2')">Week 2</a></button>
                <button><a onclick="scrollToSection('#week3')">Week 3</a></button>
                <button><a onclick="scrollToSection('#week4')">Week 4</a></button>
                <button><a onclick="scrollToSection('#week5')">Week 5</a></button>
                <button><a onclick="scrollToSection('#week6')">Week 6</a></button>
                <button><a onclick="scrollToSection('#week7')">Week 7</a></button>
                <button><a onclick="scrollToSection('#week8')">Week 8</a></button><br>
                <button><a onclick="scrollToSection('#week9')">Week 9</a></button>
                <button><a onclick="scrollToSection('#week10')">Week 10</a></button>
                <button><a onclick="scrollToSection('#week11')">Week 11</a></button>
                <button><a onclick="scrollToSection('#week12')">Week 12</a></button>
                <button><a onclick="scrollToSection('#week13')">Week 13</a></button>
            </nav>
        </section>
        <hr>

        <main>
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

            $imageName = "pdf_image.png";
            $imageSrc = getImageSrc($imageName);

            // 1주차부터 11주차까지 반복
            for ($week = 1; $week <= 13; $week++) {
                $pdfNames = getPdfNamesByWeek($week);
                echo "<section class='cource'>";
                echo "<div class='week_content'>";

                // 결과 출력
                echo "<h3 id='week$week' class='sectionname'>" . $textsByWeek[$week] . "</h3>";

                if (!empty($pdfNames)) {
                    foreach ($pdfNames as $pdfName) {
                        echo "<div class='content'>";
                        if (!empty($imageSrc)) {
                            echo '<img class="file_image" src="' . $imageSrc . '" alt="' . $imageName . '">';
                        }

                        $downloadLink = "./fileDownload.php?file=" . urlencode($pdfName); // 다운로드 링크 생성
                        echo "<span class='file_name'><a href='$downloadLink'>$pdfName</a></span>";
                        echo "</div>";
                    }
                    echo "</div>";
                } else {
                    echo "<p>해당 주차에 해당하는 PDF 파일이 없습니다.</p>";
                }
                echo '</section>';
            }
            ?>
        </main>
    </article>
    <footer>
        <div class="inner">
            <div class="footer-copyright">Copyrigh 2023. KyungMi All ⓒ rights reserved</div>
        </div>
    </footer>
</body>

</html>