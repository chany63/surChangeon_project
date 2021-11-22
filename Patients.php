<?
include "config.php";
include "util.php";
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Patients</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Patients.css" media="screen">
<link rel="stylesheet" href="styles.css">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.30.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">


    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/1.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Patients">
    <meta property="og:type" content="website">
  </head>
  <form action="About-team.php" method="post">
    <input
      type="text"
      name="search_keyword"
      placeholder="직원 검색(이름)"
    />
  </form>

  <form action="Patients.php" method="post">
    <input
      type="text"
      name="search_keyword"
      placeholder="환자 검색(이름)"
    />
  </form>

  <form action="Hospitalization.php" method="post">
    <input
      type="text"
      name="search_keyword"
      placeholder="입원환자 검색(이름)"
    />
  </form>

  <form action="Medication-tasks.php" method="post">
    <input
      type="text"
      name="search_keyword"
      placeholder="치료업무 검색(직원번호)"
    />
  </form>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-d9f7"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="Home.php" data-page-id="25047863" class="u-image u-logo u-image-1" title="Home" data-image-width="1425" data-image-height="398">
          <img src="images/1.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="About-App.php" style="padding: 10px 20px;">About App</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="About-team.php" style="padding: 10px 20px;">About team</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Medication-tasks.php" style="padding: 10px 20px;">Medication tasks</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Patients.php" style="padding: 10px 20px;">Patients</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Hospitalization.php" style="padding: 10px 20px;">Hospitalization</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About-App.php" style="padding: 10px 20px;">About App</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About-team.php" style="padding: 10px 20px;">About team</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Medication-tasks.php" style="padding: 10px 20px;">Medication tasks</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Patients.php" style="padding: 10px 20px;">Patients</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Hospitalization.php" style="padding: 10px 20px;">Hospitalization</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
      <div class="container">
          <?
          $conn = dbconnect($host, $dbid, $dbpass, $dbname);
          $query = "select * from patient";
          if (array_key_exists("search_keyword", $_POST)) {  // array_key_exists() : Checks if the specified key exists in the array
              $search_keyword = $_POST["search_keyword"];
              $query =  $query . " where pat_name like '%$search_keyword%'";

          }
          $res = mysqli_query($conn, $query);
          if (!$res) {
               die('Query Error : ' . mysqli_error());
          }
          ?>

          <table class="table table-striped table-bordered">
              <thead>
              <tr>
                  <th>환자번호</th>
                  <th>환자이름</th>
                  <th>환자전화번호</th>
                  <th>기능</th>
              </tr>
              </thead>
              <tbody>
              <?
              $row_index = 1;
              while ($row = mysqli_fetch_array($res)) {
                  echo "<tr>";
                  echo "<td>{$row['pat_no']}</td>";
                  echo "<td>{$row['pat_name']}</td>";
                  echo "<td>{$row['pat_phone']}</td>";
                  echo "<td width='17%'>
                      <a href='patient_form.php?pat_no={$row['pat_no']}'><button class='button primary small'>수정</button></a>
                       <button onclick='javascript:deleteConfirm({$row['pat_no']})' class='button danger small'>삭제</button>
                      </td>";
                  echo "</tr>";
                  $row_index++;
              }
              ?>
              </tbody>
          </table>
          <center><div><h4><a href = 'patient_form.php'>환자 등록</a></h4></div></center>
          <script>
              function deleteConfirm(pat_no) {
                  if (confirm("정말 삭제하시겠습니까?") == true){    //확인
                      window.location = "patient_delete.php?pat_no=" + pat_no;
                  }else{   //취소
                      return;
                  }
              }
          </script>
      </div>


    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-7dd8"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Contact Phone: 01063109906 Email: chany63@korea.ac.kr<br>Address: Seoul Sungbukgu Anamdong 5&nbsp;
        </p>
      </div></footer>
  </body>
</html>
