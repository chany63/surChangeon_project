<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>About team</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="About-team.css" media="screen">
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
    <meta property="og:title" content="About team">
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

      <?
      include "config.php";
      include "util.php";

      $conn = dbconnect($host, $dbid, $dbpass, $dbname);
      $mode = "입력";
      $action = "team_insert.php";

      if (array_key_exists("emp_no", $_GET)) {
          $emp_no = $_GET["emp_no"];
          $query =  "select * from employee where emp_no = $emp_no";
          $res = mysqli_query($conn, $query);
          $emp = mysqli_fetch_array($res);
          if(!$emp) {
              msg("직원이 존재하지 않습니다.");
          }
          $mode = "수정";
          $action = "team_modify.php";

          //echo json_encode($emp);
      }
      ?>
          <div class="container">
              <form name="team_form" action="<?=$action?>" method="post" class="fullwidth">
                  <input type="hidden" name="emp_no" value="<?=$emp['emp_no']?>"/>
                  <h3>직원 정보 <?php echo $mode; ?></h3>
                  <p>
                      <label for="emp_no">직원번호</label>
                      <input type="text" placeholder="직원번호 입력" name="emp_no" value="<?=$emp['emp_no']?>"/>
                  </p>
                  <p>
                      <label for="emp_name">직원이름</label>
                      <input type="text" placeholder="직원이름 입력" name="emp_name" value="<?=$emp['emp_name']?>"/>
                  </p>
                  <p>
                      <label for="emp_phone">직원전화번호</label>
                      <input type="text" placeholder="직원전화번호 입력" name="emp_phone" value="<?=$emp['emp_phone']?>"/>
                  </p>
                  <p>
                      <label for="emp_type">직원종류</label>
                      <input type="text" placeholder="직원종류 입력" name="emp_type" value="<?=$emp['emp_type']?>" />
                  </p>

                  <p align="center"><button class="button primary large" onclick="javascript:return validate();"><?=$mode?></button></p>

                  <script>
                      function validate() {
                          if(document.getElementById("emp_no").value == "-1") {
                              alert ("직원의 할당번호를 입력해 주십시오"); return false;
                          }
                          else if(document.getElementById("emp_name").value == "") {
                              alert ("직원의 이름을 입력해 주십시오"); return false;
                          }
                          else if(document.getElementById("emp_phone").value == "") {
                              alert ("직원의 전화번호를 입력해 주십시오"); return false;
                          }
                          else if(document.getElementById("emp_type").value == "") {
                              alert ("직원의 종류를 입력해 주십시오."); return false;
                          }
                          return true;
                      }
                  </script>

              </form>
          </div>

          <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-7dd8"><div class="u-clearfix u-sheet u-sheet-1">
              <p class="u-small-text u-text u-text-variant u-text-1">Contact Phone: 01063109906 Email: chany63@korea.ac.kr<br>Address: Seoul Sungbukgu Anamdong 5&nbsp;
              </p>
            </div></footer>
        </body>
      </html>
