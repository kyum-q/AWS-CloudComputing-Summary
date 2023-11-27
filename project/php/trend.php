<?php
include "./getImage.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cloud Computing</title>
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/trend.css">
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
            <h1>Cloud Computing 동향</h1>

            <table class="main_trend">
                <tr>
                    <th rowspan="2">
                        <?php
                        $imageName = "trend1.jpg";
                        $imageSrc = getImageSrc($imageName);

                        if (!empty($imageSrc)) {
                            echo '<img src="' . $imageSrc . '" alt="' . $imageName . '">';
                        } else {
                            echo '<p>Image not found.</p>';
                        }
                        ?>
                    </th>
                    <td class="trend_title"><span>보안 강화</span></td>
                </tr>
                <tr>
                    <td colspan="2" class="trend_content"><span>클라우드 환경에서의 보안 문제는 여전히 중요한 이슈입니다. 2023년에는 클라우드 서비스 제공업체들이 보안 기능을 더욱 강화하고, 사용자들이 보다 안전하게 클라우드를 이용할 수 있도록 다양한 보안 솔루션을 제공할 것으로 예상.</span></td>
                </tr>
                <tr>
                    <td colspan="2" class="web_site"><a href="https://www.k-trendynews.com/news/articleView.html?idxno=159466">[클라우드 트렌드4] 클라우드 보안 자동화, 새로운 전략으로 기업 보안 강화</a></td>
                </tr> 
                <tr>
                    <td colspan="2" class="web_site"><a href="https://www.itworld.co.kr/news/290653">"생성형 AI로 보안 강화" 구글 클라우드, ‘구글 클라우드 시큐리티 AI 워크벤치’ 플랫폼 출시</a></td>
                </tr>
            </table>

            <table class="main_trend">
                <tr>
                    <th rowspan="2">
                        <?php
                        $imageName = "trend2.jpg";
                        $imageSrc = getImageSrc($imageName);

                        if (!empty($imageSrc)) {
                            echo '<img src="' . $imageSrc . '" alt="' . $imageName . '">';
                        } else {
                            echo '<p>Image not found.</p>';
                        }
                        ?>
                    </th>
                    <td class="trend_title"><span>AI 및 머신러닝의 통합 강화</span></td>
                </tr>
                <tr>
                    <td colspan="2" class="trend_content"><span>클라우드 플랫폼에서의 AI 및 머신러닝 서비스는 더욱 향상되고 다양화될 것으로 예상. 기업들은 클라우드를 통해 보다 강력한 AI 모델을 훈련하고 배포할 수 있는 환경을 찾을 것.</span></td>
                </tr>
                <tr>
                    <td colspan="2" class="web_site"><a href="https://m.ddaily.co.kr/page/view/2023070615433864786">스노우플레이크-MS, 데이터 클라우드 내 대규모 생성형 AI 기능 강화</a></td>
                </tr>
                <tr>
                    <td colspan="2" class="web_site"><a href="https://zdnet.co.kr/view/?no=20230905114541">구글클라우드 데이터 제품군, 더 똑똑해지고 긴밀해진다</a></td>
                </tr>
            </table>

            <table class="main_trend">
                <tr>
                    <th rowspan="2">
                        <?php
                        $imageName = "trend3.jpg";
                        $imageSrc = getImageSrc($imageName);

                        if (!empty($imageSrc)) {
                            echo '<img src="' . $imageSrc . '" alt="' . $imageName . '">';
                        } else {
                            echo '<p>Image not found.</p>';
                        }
                        ?>
                        </th>
                    <td class="trend_title"><span>엣지 컴퓨팅 확대</span></td>
                </tr>
                <tr>
                    <td colspan="2" class="trend_content"><span>엣지 컴퓨팅은 계속해서 중요성을 갖게 될 것으로 보입니다. 특히, 지역적으로 데이터를 처리하고 응답 시간을 최적화하는 것이 필요한 응용 분야에서 엣지 컴퓨팅이 더욱 적합한 솔루션으로 간주될 것이다.</span></td>
                </tr>
                <tr>
                    <td colspan="2" class="web_site"><a href="https://www.digitaltoday.co.kr/news/articleView.html?idxno=468069">엣지컴퓨팅, 클라우드와 동반 성장...클라우드와 상호 운용성 중요성 커져</a></td>
                </tr>
            </table>

            <table class="main_trend">
                <tr>
                    <th rowspan="2">
                        <?php
                        $imageName = "trend4.jpg";
                        $imageSrc = getImageSrc($imageName);

                        if (!empty($imageSrc)) {
                            echo '<img src="' . $imageSrc . '" alt="' . $imageName . '">';
                        } else {
                            echo '<p>Image not found.</p>';
                        }
                        ?>
                        </th>
                    <td class="trend_title"><span>클라우드 기반 협업 도구의 증가</span></td>
                </tr>
                <tr>
                    <td colspan="2" class="trend_content"><span>원격 근무 및 협업이 계속 확대되면서, 클라우드 기반 협업 도구의 수요가 늘어날 것으로 예상. 이는 문서 공유, 협업 플랫폼, 온라인 회의 도구 등을 포함.</span></td>
                </tr>
                <tr>
                    <td colspan="2" class="web_site"><a href="https://www.etnews.com/20220930000091">클라우드 협업의 시대, 업무의 유연성과 생산성을 위한 클라우드 보안은 필수</a></td>
                </tr>
            </table>

            <table class="main_trend">
                <tr>
                    <th rowspan="2">
                        <?php
                        $imageName = "trend5.jpg";
                        $imageSrc = getImageSrc($imageName);

                        if (!empty($imageSrc)) {
                            echo '<img src="' . $imageSrc . '" alt="' . $imageName . '">';
                        } else {
                            echo '<p>Image not found.</p>';
                        }
                        ?>
                        </th>
                    <td class="trend_title"><span>환경 지속 가능성과 관련된 노력</span></td>
                </tr>
                <tr>
                    <td colspan="2" class="trend_content"><span>라우드 컴퓨팅은 높은 전력 소비와 탄소 배출로 연결된 경우가 있습니다. 따라서, 클라우드 서비스 제공업체들은 더 친환경적이고 지속 가능한 솔루션을 개발하고, 기업들도 클라우드 사용의 환경적 영향을 고려할 것으로 예상.</span></td>
                </tr>
                <tr>
                    <td colspan="2" class="web_site"><a href="http://www.itdaily.kr/news/articleView.html?idxno=216814">AWS “클라우드로 비즈니스 뿐 아니라 지속가능성 혁신도 가능”</a></td>
                </tr>
            </table>

            <table class="main_trend">
                <tr>
                    <th rowspan="2">
                        <?php
                        $imageName = "trend6.jpg";
                        $imageSrc = getImageSrc($imageName);

                        if (!empty($imageSrc)) {
                            echo '<img src="' . $imageSrc . '" alt="' . $imageName . '">';
                        } else {
                            echo '<p>Image not found.</p>';
                        }
                        ?>
                        </th>
                    <td class="trend_title"><span>5G와의 통합</span></td>
                </tr>
                <tr>
                    <td colspan="2" class="trend_content"><span>5G 기술의 보급이 계속되면서 클라우드와 5G의 통합이 강조될 것으로 예상. 높은 대역폭과 낮은 지연 시간을 제공하는 5G는 클라우드 서비스의 성능을 향상.</span></td>
                </tr>
                <tr>
                    <td colspan="2" class="web_site"><a href="https://www.busan.com/view/busan/view.php?code=2023111308153676894">삼성전자-네이버클라우드, 미래형 오피스빌딩 MOU</a></td>
                </tr>
            </table>
        </section>
    </main>

    <footer>
        <div class="inner">
          <div class="footer-copyright">Copyrigh 2023. KyungMi All ⓒ rights reserved</div>
        </div>
      </footer>
</body>

</html>