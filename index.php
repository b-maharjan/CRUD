<?php include 'chart.php';
?>


<body>
<div class="topnav">
  <a class="active" href="#home">Dashboard</a>
  <a href="insert.php">Employees</a>
  <a href="#timesheet">Timesheet</a>
  <a href="#roles">Roles</a>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Submit</button>
    </form>
  </div>
</div>
<div class="col-6">
<div id="barchart_material" style="width: 99%; height: 450px;"></div>

</div>
<div class="col-6">
<div id="piechart" style="width: 99%; height: 450px;"></div>  
</div>
</body>
