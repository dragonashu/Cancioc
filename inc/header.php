<html>
<head>
	<title><?php echo $pageTitle; ?></title>
  <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
  <link rel="icon" href="./favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="javascript/calendar.js"></script>
</head>
<body>


  <svg style="display: none;">
    <defs>
      <svg id="logo_icon" viewBox="0 0 64 64" preserveAspectRatio="xMinYMin meet">
        <rect x="19.5" y="41.4" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -24.2442 27.4475)" width="3" height="3.3"/>
        <rect x="19.4" y="19.5" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -8.7041 21.0111)" width="3.3" height="3"/>
        <rect x="15" y="30.4" width="3" height="3.3"/>
        <rect x="30.4" y="46.1" width="3.3" height="3"/>
        <path d="M32,0C14.3,0,0,14.3,0,32c0,17.7,14.3,32,32,32s32-14.3,32-32C64,14.3,49.7,0,32,0z M32,55.6C19,55.6,8.4,45,8.4,32
          C8.4,19,19,8.4,32,8.4S55.6,19,55.6,32C55.6,45,45,55.6,32,55.6z"/>
        <path d="M48.9,30.4c0-0.2,0-0.4-0.1-0.6c0-0.2-0.1-0.4-0.1-0.6c-0.1-0.3-0.1-0.7-0.2-1c0-0.1-0.1-0.2-0.1-0.3
          c-0.4-1.6-1-3.2-1.9-4.6c-0.2-0.4-0.5-0.7-0.7-1.1c0,0-0.1-0.1-0.1-0.1c-0.3-0.4-0.6-0.8-1-1.2c0,0,0,0,0,0c0,0-0.1-0.1-0.1-0.1
          c-0.4-0.4-0.8-0.8-1.2-1.2c-0.1-0.1-0.3-0.3-0.5-0.4c-0.3-0.3-0.6-0.5-0.9-0.7c-0.2-0.2-0.4-0.3-0.7-0.5c-0.3-0.2-0.5-0.3-0.8-0.5
          c-0.3-0.2-0.5-0.3-0.8-0.5c-0.1-0.1-0.2-0.1-0.3-0.2c-0.1-0.1-0.3-0.1-0.4-0.2c-0.2-0.1-0.4-0.2-0.6-0.3c0,0,0,0,0,0
          C36.4,15.4,34.2,15,32,15c0,7,0,11.1,0,13.5c-0.6,0-1.2,0.2-1.8,0.5c0,0-0.1,0-0.1,0c-0.1,0.1-0.2,0.1-0.2,0.2
          c-0.1,0-0.1,0.1-0.2,0.1c0,0,0,0-0.1,0c0,0,0,0,0,0c-0.3,0.3-0.6,0.7-0.8,1.1c-0.9,1.8-0.1,3.9,1.6,4.7c1.1,0.5,2.3,0.5,3.3-0.1
          c0,0,0.1,0,0.1,0c0.1-0.1,0.2-0.1,0.2-0.2c0.1,0,0.1-0.1,0.2-0.1c0,0,0,0,0.1,0c0,0,0,0,0,0l0,0c0,0,0,0,0,0
          c3.8,4.3,7.2,8.2,8.9,10.1c1.7-1.5,3.1-3.3,4-5.2c0,0,0,0,0,0c0,0,0,0,0,0c0.2-0.5,0.4-0.9,0.6-1.4c0-0.1,0-0.1,0.1-0.2
          c0.1-0.4,0.3-0.8,0.4-1.2c0.5-1.7,0.7-3.3,0.7-5c0-0.1,0-0.2,0-0.3C49,31.1,49,30.7,48.9,30.4z"/>
      </svg>
      <svg id="task_icon" viewBox="0 0 64 64" preserveAspectRatio="xMinYMin meet">
        <path d="M64,53.3l-10,9.6c-0.7,0.7-1.8,1.1-2.5,1.1l0,0l0,0c-1.1,0-1.8-0.4-2.5-1.1l-10-9.6l0,0l0,0l0,0l0,0V3.6c0-2.1,1.4-3.6,3.6-3.6h17.8C62.6,0,64,1.4,64,3.6V53.3L64,53.3L64,53.3z M56.9,7.1H46.2v7.1h10.7V7.1z M56.9,49.1V17.8H46.2v31.3l5.3,4.3l0,0L56.9,49.1z M21.3,64H3.6C1.4,64,0,62.6,0,60.4V3.6C0,1.4,1.4,0,3.6,0h17.8c2.1,0,3.6,1.4,3.6,3.6v56.9C24.9,62.6,23.5,64,21.3,64z M17.8,7.1H7.1v7.1h5.3c1.1,0,1.8,0.7,1.8,1.8s-0.7,1.8-1.8,1.8H7.1v7.1h1.8c1.1,0,1.8,0.7,1.8,1.8s-0.7,1.8-1.8,1.8H7.1v7.1h5.3c1.1,0,1.8,0.7,1.8,1.8c0,1.1-0.7,1.8-1.8,1.8H7.1v7.1h1.8c1.1,0,1.8,0.7,1.8,1.8s-0.7,1.8-1.8,1.8H7.1v7.1h10.7V7.1z"/>
      </svg>
      <svg id="project_icon" viewBox="0 0 64 64" preserveAspectRatio="xMinYMin meet">
        <path d="M60.4,64H3.6C1.4,64,0,62.6,0,60.4V3.6C0,1.4,1.4,0,3.6,0h24.9c1.4,0,2.5,0.7,3.2,2.1l5.7,12.1h23.1c2.1,0,3.6,1.4,3.6,3.6v42.7C64,62.6,62.6,64,60.4,64z M7.1,56.9h49.8V21.3h-22c-1.4,0-2.5-0.7-3.2-2.1L26.3,7.1H7.1V56.9z"/>
        <path d="M60.4,7.1h-16c-2.1,0-3.6-1.4-3.6-3.6S42.3,0,44.4,0h16C62.6,0,64,1.4,64,3.6S62.6,7.1,60.4,7.1z"/>
      </svg>
      <svg id="report_icon" viewBox="0 0 64 64" preserveAspectRatio="xMinYMin meet">
        <path d="M60.4,0H3.6C1.4,0,0,1.4,0,3.6v56.9C0,62.6,1.4,64,3.6,64h56.9c2.1,0,3.6-1.4,3.6-3.6V3.6C64,1.4,62.6,0,60.4,0zM56.9,56.9H7.1V7.1h49.8V56.9z"/>
        <path d="M16.5,21.3h30.9c2.1,0,3.6-1.4,3.6-3.6c0-2.1-1.4-3.6-3.6-3.6H16.5c-2.1,0-3.6,1.4-3.6,3.6C13,19.9,14.4,21.3,16.5,21.3z" />
        <path d="M16.5,35.6h30.9c2.1,0,3.6-1.4,3.6-3.6s-1.4-3.6-3.6-3.6H16.5c-2.1,0-3.6,1.4-3.6,3.6S14.4,35.6,16.5,35.6z"/>
        <path d="M16.5,49.8h30.9c2.1,0,3.6-1.4,3.6-3.6s-1.4-3.6-3.6-3.6H16.5c-2.1,0-3.6,1.4-3.6,3.6S14.4,49.8,16.5,49.8z"/>
      </svg>
    </defs>
  </svg>

	<header class="header">
    <div class="col-container">
  		<h1>
        <a class="logo" href="./">
          <svg viewbox="0 0 64 64" class="logo-icon"><use xlink:href="#logo_icon"></use></svg>
          <span class="logo-name">Time Tracker</span>
        </a>
      </h1>

  		<ul class="nav">
        <li class="nav-item tasks<?php if ($page == "tasks") { echo " on"; } ?>"><a class="nav-link" href="task_list.php">Tasks</a></li>
        <li class="nav-item projects<?php if ($page == "projects") { echo " on"; } ?>"><a class="nav-link" href="project_list.php">Projects</a></li>
        <li class="nav-item reports<?php if ($page == "reports") { echo " on"; } ?>"><a class="nav-link" href="reports.php">Reports</a></li>
      </ul>
    </div>
  </header>
	<div id="content">
