<div id="menu-container">
   <div id="menu-wrapper">
      <div id="hamburger-menu"><span></span><span></span><span></span></div>
   </div>
   <ul class="menu-list accordion">
            <li id="nav1" class="toggle"> 
               <a class="menu-link" href="./index.php?click=account&id=1">ACCOUNT</a>
            </li>
            <li id="nav1" class="toggle"> 
               <a class="menu-link" href="./index.php?click=student&id=1">STUDENT</a>
            </li>
            <li id="nav1" class="toggle"> 
               <a class="menu-link" href="./index.php?click=teacher&id=3">TEACHER</a>
            </li>
            <li id="nav1" class="toggle"> 
               <a class="menu-link" href="./index.php?click=course&id=4">COURSE</a>
            </li>
            <li id="nav1" class="toggle"> 
               <a class="menu-link" href="#">CLASS</a>
            </li>
            <li id="nav1" class="toggle"> 
               <a class="menu-link" href="#">TEST</a>
            </li>    
   </ul>
</div>
<script>
$(function() {
    function slideMenu() {
         var activeState = $("#menu-container .menu-list").hasClass("active");
          $("#menu-container .menu-list").animate({left: activeState ? "0%" : "-100%"}, 500);
         }
     $("#menu-wrapper").click(function(event) {
            $("#hamburger-menu").toggleClass("open");
           $("#menu-container .menu-list").toggleClass("active");
           slideMenu();
      
  });
  
}); 
</script>