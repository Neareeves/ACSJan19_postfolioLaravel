@include('Head')
<div id="svgHome">
	
 <div class="container"           
  @mouseover="showImage = true"
             @mousemove="onMouseMove($event)"
             @mouseleave="showImage = false">
	

<svg id="homeSvg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width ="100%" height ="auto"
   viewBox="0 0 1200 720" 
   enable-background="new 0 0 1200 720" xml:space="preserve">
<g id="fond">
  <rect class="coucou" x="156.113" y="258.091" fill="#F9B85B" width="910.455" height="218.989" />
</g>
<g id="boule">
  <circle class="image" v-show="showImage" :style="{ left: page.left + 'px', top: page.top + 'px' }" fill="#1B273F" cx="690.836" cy="386.334" r="128.243"/>
</g>
<g id="imagee">
  <image  overflow="visible" width="1200" height="720" xlink:href="http://aletharrias.com/truc.png" >
  </image>
</g>
</div>
</svg>

</div>



<script type="text/javascript">
	let homeSvg = document.getElementById('homeSvg');
let boule = document.getElementById('boule');
let image = document.getElementById('imagee');
let fond = document.getElementById('fond');
fond.style.position= 'relative';
boule.style.position= 'absolute';

new Vue({
  el: '#svgHome',
  data: {
  	showImage: false,
    page: {
    	left : 0,
      top: 0
      },
     },
     methods: {
            onMouseMove(e) {

              let boule = document.querySelector("#boule circle");
                // console.log('page x: ' + this.page.left);
                // console.log(e);
                // this.page.left = e.pageX;
                // this.page.top = .e.pageY;
                // console.log('page x: ' + boule.page.left);
                boule.setAttribute('cx',e.pageX+"px");
                boule.setAttribute('cy',e.pageY+"px");
// if (e.pageX < 300) {
//   boule.style.backgroundColor= "red";
// }

                console.log(e.pageX);
            }
     }
  });
</script>
<footer></footer>

<!-- development version, includes helpful console warnings -->

  
  @include('Footer')