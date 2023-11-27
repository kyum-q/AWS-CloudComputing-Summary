<?php
include "../../inc/dbinfo.inc";

function getImageSrc($imageName)
{
    $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    $safeImageName = mysqli_real_escape_string($connection, $imageName);

    $query = "SELECT ImageData FROM Images WHERE ImageName = '$safeImageName'";
    $result = mysqli_query($connection, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        $imageData = base64_encode($row['ImageData']);
        $imageSrc = "data:image/jpg;base64," . $imageData;
    } else {
        $imageSrc = ""; // 이미지를 찾을 수 없는 경우 빈 문자열로 설정
    }

    mysqli_close($connection);

    return $imageSrc;
}

?>