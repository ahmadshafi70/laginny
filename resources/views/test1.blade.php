<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<div class="line-content">1 I have some content</div>
<div class="line-content">2 I have some content</div>
<ul class="prev">prev</ul>
<ul id="pagin"></ul>
<ul class="next">next</ul>
<ul class="last">last</ul>
<style type="text/css">
  .current {
  color: green;
}

#pagin li {
  display: inline-block;
}
</style>
<script type="text/javascript">
  //Pagination
  pageSize = 4;

  var pageCount =  $(".line-content").length / pageSize;
    
     for(var i = 0 ; i<pageCount;i++){
        
       $("#pagin").append('<li><a href="#">'+(i+1)+'</a></li> ');
     }
        $("#pagin li").first().find("a").addClass("current")
    showPage = function(page) {
      $(".line-content").hide();
      $(".line-content").each(function(n) {
          if (n >= pageSize * (page - 1) && n < pageSize * page)
              $(this).show();
      });        
  }
    
  showPage(1);

  $("#pagin li a").click(function() {
      $("#pagin li a").removeClass("current");
      $(this).addClass("current");
      showPage(parseInt($(this).text())) 
  });
</script>