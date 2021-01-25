  <!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
<style>
    #owl-demo .item{
  margin: 3px;
}
#owl-demo .item img{
  display: block;
  width: 100%;
  height: auto;
}
    
</style>

<div id="owl-demo" class="owl-carousel owl-theme">
          
<div class="item"><iframe width='350' height='200' src='https://www.youtube.com/embed/It0BPup3QKs' allowFullScreen='allowFullScreen'></iframe></div>
<div class="item"><iframe width='500' height='200' src='https://www.youtube.com/embed/It0BPup3QKs' allowFullScreen='allowFullScreen'></iframe></div>
<div class="item"><iframe width='500' height='200' src='https://www.youtube.com/embed/It0BPup3QKs' allowFullScreen='allowFullScreen'></iframe></div>
<div class="item"><iframe width='500' height='200' src='https://www.youtube.com/embed/It0BPup3QKs' allowFullScreen='allowFullScreen'></iframe></div>
<div class="item"><iframe width='500' height='200' src='https://www.youtube.com/embed/It0BPup3QKs' allowFullScreen='allowFullScreen'></iframe></div>
<div class="item"><iframe width='500' height='200' src='https://www.youtube.com/embed/It0BPup3QKs' allowFullScreen='allowFullScreen'></iframe></div>
<div class="item"><iframe width='500' height='200' src='https://www.youtube.com/embed/It0BPup3QKs' allowFullScreen='allowFullScreen'></iframe></div>
<div class="item"><iframe width='500' height='200' src='https://www.youtube.com/embed/It0BPup3QKs' allowFullScreen='allowFullScreen'></iframe></div>
<div class="item"><iframe width='500' height='200' src='https://www.youtube.com/embed/It0BPup3QKs' allowFullScreen='allowFullScreen'></iframe></div>
<div class="item"><iframe width='500' height='200' src='https://www.youtube.com/embed/It0BPup3QKs' allowFullScreen='allowFullScreen'></iframe></div>
 
</div>

 <script src="component/jquery/jquery-3.2.1.min.js"></script>
 <script src="owl-carousel/owl.carousel.min.js"></script>

<script>
    
    $(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds
 
      items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
 
  });
 
});
</script>