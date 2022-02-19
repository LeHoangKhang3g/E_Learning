<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
.tab button.active{
  background-color: #cccccc75;
}
.tabpage-text{
  font-weight: 600;
  font-size: 20px;
  color:rgb(94, 89, 89);
}
</style>
</head>
<body>


<div class="tab d-flex justify-content-center" style="background-color:white; border: 1px solid #ededed">
  <button class="tablinks tabpage-text" onclick="openCity(event, 'Posts')" >Bảng tin</button>
  <button class="tablinks tabpage-text" onclick="openCity(event, 'Posts-2')"  >Bảng tin 2</button>
  <button class="tablinks tabpage-text" onclick="openCity(event, 'Students')"  >Danh sách sinh viên</button>
  <button class="tablinks tabpage-text" onclick="openCity(event, 'Waits')"  >Phê duyệt</button>
  
</div>

<div id="Posts" class="tabcontent" style="display: block">
  @include('teacher.news-classroom')

</div>
<div id="Posts-2" class="tabcontent">
  @include('teacher.news-classroom')

</div>
<div id="Students" class="tabcontent">
  @include('teacher.student-list')
</div>

<div id="Waits" class="tabcontent">
  @include('teacher.student-wait')
</div>

<script>
function openCity(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
   
</body>
</html> 
