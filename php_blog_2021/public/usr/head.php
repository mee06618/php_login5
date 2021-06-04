<?php
//$isLogined = $GLOBALS['App__isLogined'];
//$loginedMemberId = $GLOBALS['App__loginedMemberId'];
//$loginedMember = $GLOBALS['App__loginedMember'];
$isLogined=NULL;
?>
<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>aa</title>
  <link rel="stylesheet" href="/common.css">

  <style>
    body,
    ul,
    li {

      margin: 0;
      padding: 0;
      list-style: none;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    /* 폰트 */
    @font-face {
      font-family: "LotteMartDream";
      font-style: normal;
      font-weight: 400;
      src: url("//cdn.jsdelivr.net/korean-webfonts/1/corps/lottemart/LotteMartDream/LotteMartDreamMedium.woff2") format("woff2"),
        url("//cdn.jsdelivr.net/korean-webfonts/1/corps/lottemart/LotteMartDream/LotteMartDreamMedium.woff") format("woff");
    }

    @font-face {
      font-family: "LotteMartDream";
      font-style: normal;
      font-weight: 700;
      src: url("//cdn.jsdelivr.net/korean-webfonts/1/corps/lottemart/LotteMartDream/LotteMartDreamBold.woff2") format("woff2"),
        url("//cdn.jsdelivr.net/korean-webfonts/1/corps/lottemart/LotteMartDream/LotteMartDreamBold.woff") format("woff");
    }

    @font-face {
      font-family: "LotteMartDream";
      font-style: normal;
      font-weight: 300;
      src: url("//cdn.jsdelivr.net/korean-webfonts/1/corps/lottemart/LotteMartDream/LotteMartDreamLight.woff2") format("woff2"),
        url("//cdn.jsdelivr.net/korean-webfonts/1/corps/lottemart/LotteMartDream/LotteMartDreamLight.woff") format("woff");
    }

    html {
      font-family: "LotteMartDream", sans-serif;
    }

    /* 노말 */
    body,
    ul,
    li {
      margin: 0;
      padding: 0;
      list-style: none;

    }

    a {
      color: black;
      text-decoration: none;
    }

    /* 라이브러리 */
    .inline-grid {
      font-size: 0;
    }

    .inline-grid>* {
      font-size: 1rem;
      display: inline-block;
      box-sizing: border-box;
      vertical-align: top;
    }

    .border-red {
      border: 10px solid red;
    }

    .border-blue {
      border: 10px solid blue;
    }

    .border-gold {
      border: 10px solid gold;
    }

    .text-center {
      text-align: center;
    }

    .text-right {
      text-align: right;
    }

    .block {
      display: block;
    }

    /* 커스텀 */
    .top-bar {}

    .top-bar>div:first-child {
      width: 240px;
    }

    .top-bar>div:nth-child(2) {
      width: calc(100% - 240px - 650px);
    }

    .top-bar>div:last-child {
      width: 650px;
    }

    .top-bar__logo {
      font-weight: bold;
      font-size: 2.5rem;
      padding: 20px;
    }

    .top-bar__menu-box-1>ul>li {
      font-size: 1.05rem;
      position: relative;
      z-index: 1;
    }

    /* 모든 메뉴 아이템 텍스트 */
    .top-bar__menu-box-1 ul>li>a {
      display: block;
      white-space: nowrap;
    }

    /* 1차 메뉴 아이템 텍스트 */
    .top-bar__menu-box-1>ul>li>a {
      padding: 22.5px 30px;
    }

    /* 서브 메뉴 아이템 텍스트 */
    .top-bar__menu-box-1>ul ul>li>a {
      padding: 22.5px 0;
      text-align: center;
    }

    .top-bar__menu-box-1 ul>li:hover>a {
      font: black;
    }

    .top-bar__menu-box-1>ul>li>ul {
      display: none;
      position: absolute;

      top: 100%;
      left: 0;
      width: 100%;
      box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.5);
    }

    .top-bar__menu-box-1>ul>li:hover>ul {
      display: block;
    }

    .site>a {

      font-size: 0.8rem;

    }

    .util-group {}

    .util-group>div:nth-child(1) {
      width: 300px;
    }

    .util-group>div:nth-child(2) {
      width: calc(100% - 300px - 300px);

    }

    .util-group>div:nth-child(3) {
      width: 300px;
    }
  </style>
</head>

<body>
  <header class="inline-grid util-group">
    <div>
      <a href="../member/doLogout.php">개인</a>
      |
      <a href="../member/doLogout.php">기업</a>
    </div>
    <div></div>
    <div>
      <?php if ( $isLogined ) { ?>
      <a href="../member/mypage.php"><?=$loginedMember['nickname']?> 마이페이지</a>
      |
      <a href="../member/doLogout.php">로그아웃</a>
      <!-- unset($_SESSION); -->
      <?php } else { ?>
      <a href="../member/login.php">로그인</a>
      |
      <a href="../member/join.php">회원가입</a>
      <?php } ?>
    </div>
  </header>
  <hr>
  <header class="top-bar inline-grid">

    <!-- 로고 공간 -->
    <div>
      <!-- 로고 -->
      <a href="index.php" class="top-bar__logo block">
        <span>
          <i class="far fa-lemon"></i>
        </span>
        <span>
          ㅈㅅ
        </span>
      </a>
    </div>

    <!-- 빈 공간 -->
    <div></div>

    <!-- 메뉴 공간 -->
    <div class="inline-grid text-right">

      <!-- 메뉴 -->
      <nav class="top-bar__menu-box-1">
        <ul class="inline-grid">
          <li>
            <a href="index.php">
              <span><i class="fas fa-home"></i></span>
              <span>HOME</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span><i class="fas fa-address-card"></i></span>
              <span>ABOUT ME</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span><i class="fas fa-newspaper"></i></span>
              <span>투자 정보</span>
            </a>
            <ul>
              <li>
                <a href="stock.php">
                  <span><i class="fas fa-code"></i></span>
                  <span>주식 크레온데이터크롤링</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span><i class="fas fa-mobile-alt"></i></span>
                  <span>코인 빗썸데이터크롤링</span>
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="list.php">
              <span><i class="fas fa-book"></i></span>
              <span>자유게시판</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <hr>
  </header>