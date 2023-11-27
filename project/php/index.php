<?php
include "./getImage.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cloud Computing</title>
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/index.css">
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
    <main>
        <section>
            <h1>Cloud Computing Summary</h1>
            <ul id="section_menu">
                <li><a href="./contentLearning.php">
                        <?php
                        $imageName = "contentLearning.jpg";
                        $imageSrc = getImageSrc($imageName);

                        if (!empty($imageSrc)) {
                            echo '<img src="' . $imageSrc . '" alt="' . $imageName . '">';
                        } else {
                            echo '<p>Image not found.</p>';
                        }
                        ?>
                        <span class="menu_title">학습 내용</span>
                        <span class="menu_content">Cloud computing 수업 주차에 따른 학습 내용 및 학습 자료</span>
                    </a></li>

                <li><a href="./skill.php">
                        <?php
                        $imageName = "skill.jpg";
                        $imageSrc = getImageSrc($imageName);

                        if (!empty($imageSrc)) {
                            echo '<img src="' . $imageSrc . '" alt="' . $imageName . '">';
                        } else {
                            echo '<p>Image not found.</p>';
                        }
                        ?>
                        <span class="menu_title">기술</span>
                        <span class="menu_content">Cloud computing 주요 개념 및 기술 정리</span>
                    </a></li>

                <li><a href="./trend.php">
                        <?php
                        $imageName = "trend.jpg";
                        $imageSrc = getImageSrc($imageName);

                        if (!empty($imageSrc)) {
                            echo '<img src="' . $imageSrc . '" alt="' . $imageName . '">';
                        } else {
                            echo '<p>Image not found.</p>';
                        }
                        ?>
                        <span class="menu_title">동향</span>
                        <span class="menu_content">Cloud computing 앞으로 동향</span>
                    </a></li>
            </ul>
        </section>
    </main>

    <section id="add_rds_section">
        <div class="add_rds">
            <span><a href="../addFile.html">Add a file to the RDS</a></span>
            <span><a href="../addImage.html">Add a image to the RDS</a></span>
        </div>
    </section>


    <footer>
        <div class="inner">
          <div class="footer-copyright">Copyrigh 2023. KyungMi All ⓒ rights reserved</div>
        </div>
      </footer>
</body>

</html>