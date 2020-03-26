<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<div class="line-content">1 I have some content</div>
<div class="line-content">2 I have some content</div>
<div class="line-content">5 I have some content</div>
<div class="line-content">6 I have some content</div>
<div class="line-content">7 I have some content</div>
<div class="line-content">8 I have some content</div>
<div class="line-content">9 I have some content</div>
<div class="line-content">10 I have some content</div>
<div class="line-content">11 I have some content</div>
<div class="line-content">12 I have some content</div>
<div class="line-content">13 I have some content</div>
<div class="line-content">14 I have some content</div>
<div class="line-content">15 I have some content</div>
<div class="line-content">16 I have some content</div>
<div class="line-content">17 I have some content</div>
<div class="line-content">18 I have some content</div>
<div class="line-content">19 I have some content</div>
<div class="line-content">20 I have some content</div>
<div class="line-content">21 I have some content</div>
<div class="line-content">22 I have some content</div>
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
  pageSize = 9;

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