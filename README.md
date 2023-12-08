# AWS-CloudComputing-Summary
AWS를 활용한 Cloud Computing 웹사이트

## ✍🏻&nbsp; 작품 소개
AWS의 EC2 Instance를 통한 ApacheSever와 RDS 데이터베이스를 연동한 Cloud Computing 웹사이트

<br>
 
## 🖥&nbsp; 실행 화면
![실행화면](https://github.com/kyum-q/AWS-CloudComputing-Summary/assets/109158497/9067843f-02ee-4ed1-b66c-cb1e1aaace2c)

<br><br>

## 📍&nbsp; 시스템 구조

### 웹사이트 구조
![website_구조도](https://github.com/kyum-q/AWS-CloudComputing-Summary/assets/109158497/98d9533b-61c9-4ab9-8e71-8668eef1c4ae)

<details>
  <summary>
<h4>파일에 관한 설명</h4>
  </summary>
  
  -	Index.html: 첫 화면, 바로 index.php로 로드 실행
  -	addImage.html: RDS 데이터베이스에 이미지 추가 화면
  -	addFill.html: RDS 데이터베이스에 파일(PDF) 추가 화면
 
  <br>
  
  -	menu.css: 상단 메뉴바 Style file
  -	index.css: index.php Style file
  -	contentLeaning.css: contentLeaning.php Style file
  -	trend.css: trend.php Style file
  -	skill.css: skill.php Style file
  
  <br>
  
  -	index.php: 홈 화면
  -	contentLeaning.php: 간단한 주차면 학습 내용 및 학습 자료 화면
  -	trend.php: Cloud Computing 기술 동향 화면 (기사 링크 포함)
  -	skill.php: Cloud Computing 개념 및 기술 정리 화면
  -	imageUpload.php: RDS 이미지 업로드 구현 (Images 데이터베이스 생성 및 추가
  -	imageView.php: RDS에 저장된 이미지 가져와서 출력 (Images 데이터베이스 가져오기)
  -	getImage.php: 이미지 이름을 매개변수로 받고 이미지 원본을 제공하는 함수 포함
  -	fileUpload.php: RDS 파일 업로드 구현 (PDFs 데이터베이스 생성 및 추가)
  -	fileDelete.php: RDS 해당 주차인 파일 삭제 구현 (PDFs 데이터베이스에서 삭제)
  -	fileView.php: RDS에 저장된 파일 가져와서 출력 (PDFs 데이터베이스 가져오기)
  -	getFile.php: 파일 주차를 매개변수로 받고 해당 주차 파일들을 제공하는 함수 포함

</details>
<br>

### Amazon AWS 구조 (AWS 사용 요소)
![amazon_구조도](https://github.com/kyum-q/AWS-CloudComputing-Summary/assets/109158497/8fbec3f4-f8e4-4779-b68f-a4d6461fd473)
<br><br>

## 🛠&nbsp; 구축 과정
<details>
  <summary>①	VPC 1개 생성 (+ 서브넷, 라우팅 테이블, 네트워크 연결)</summary>
  <img alt="" src="https://github.com/kyum-q/AWS-CloudComputing-Summary/assets/109158497/3e166a71-6a15-433d-a6e4-155260f856b4">
</details>

<details>
  <summary>②	NAT 게이트웨이 2개 생성 (private subnet 2개의 게이트웨이)</summary>
  <img src="https://github.com/kyum-q/AWS-CloudComputing-Summary/assets/109158497/3ff4b941-c4c8-4098-884c-ed83b0cf0c1f">
</details>

<details>
  <summary>③	보안 그룹 2개 생성 (웹서버 보안 그룹, 데이터베이스 보안 그룹)</summary>
  <img src="https://github.com/kyum-q/AWS-CloudComputing-Summary/assets/109158497/507e7ded-ad7a-49c0-b755-56e7dd4cd9c1">
</details>

<details>
  <summary>④	서브넷 그룹 1개 생성</summary>
  <img src="https://github.com/kyum-q/AWS-CloudComputing-Summary/assets/109158497/649efcda-efaa-47e2-bb68-49c04f20c005">
</details>

<details>
  <summary>⑤	키페어 1개 생성</summary>
  <img src="https://github.com/kyum-q/AWS-CloudComputing-Summary/assets/109158497/33095408-0df7-4178-b2be-737b7c8df900">
</details>

<details>
  <summary>⑥	인스턴스 1개 제작</summary>
  <img src="https://github.com/kyum-q/AWS-CloudComputing-Summary/assets/109158497/64f67beb-ce0c-4f56-b660-c20be4702e33">
</details>

<details>
  <summary>⑦	RDS 데이터베이스 1개 생성</summary>
  <img src="https://github.com/kyum-q/AWS-CloudComputing-Summary/assets/109158497/4debc406-9cc2-4dce-adb9-1fec747064cf">
  <img src="https://github.com/kyum-q/AWS-CloudComputing-Summary/assets/109158497/f4e29853-78ac-459d-b450-32a6bb2756c5">
</details>

<details>
  <summary>⑧	터미널로 리눅스 접속</summary>

  ``` 
 cd Desktop/cloudComputing/aws/project // 키페어 위치로 이동
 chmod 400 A-kkm-ohio.pem // 키페어 권한 설정
 ssh -i "A-kkm-ohio.pem" ec2-user@18.190.239.196 // 리눅스 접속 (키페어와 리눅스 IP 필요)
```

</details>

<details>
  <summary>⑩	웹페이지 제작을 위한 리눅스 권한 설정</summary>
  
```
	cd /var/www
	sudo chown ec2-user html
	sudo mkdir inc
	sudo chown ec2-user inc
```

</details>

<details>
  <summary>⑪	DB 접근을 도와줄 inc 파일 생성</summary>
  
```
  cd /var/www/inc
	vi dbinfo.inc
	DB 연결 정보 작성 및 저장
```

<img src="https://github.com/kyum-q/AWS-CloudComputing-Summary/assets/109158497/7a749c31-313a-43a7-a90c-a20048293673">
</details>

## 🔍&nbsp; 개발 언어
<img src="https://img.shields.io/badge/HTML-E34F26?style=for-the-badge&logo=Html5&logoColor=white"> <img src="https://img.shields.io/badge/CSS-1572B6?style=for-the-badge&logo=Css3&logoColor=white"> <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=JavaScript&logoColor=white"> <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white"> <img src="https://img.shields.io/badge/Amazon RDS-527FFF?style=for-the-badge&logo=amazonrds&logoColor=white"> <img src="https://img.shields.io/badge/Amazon EC2-FF9900?style=for-the-badge&logo=amazonec2&logoColor=white">
