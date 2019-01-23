
//SERVICE WORKER
if ('serviceWorker' in navigator){
    navigator.serviceWorker
        .register('./service-worker.js', { scope: './' })
        .then(function() {
            console.log("service worker registered");
        })
        .catch(function(err){
            console.log("sw failed", err);
        })
}


 // Mode anglais/français

 let languageSwitchInEnglish = document.getElementById('inEnglish');
 let languageSwitchInFrench = document.getElementById('inFrench');
 let anglais = document.getElementsByClassName('anglais');
 let francois = document.getElementsByClassName('francais');

 

 for (var i = 0; i < francois.length; i++) {
    francois[i].style.display= 'block';
}
for (var i = 0; i < anglais.length; i++) {
   anglais[i].style.display='none';
}

function switchIdiomaEN() {

        for (var i = 0; i < francois.length; i++) {
            francois[i].style.display="none";
        }
            for (var i = 0; i < anglais.length; i++) {
            anglais[i].style.display= 'block';}
       }
languageSwitchInEnglish.addEventListener('click', switchIdiomaEN);
function switchIdiomaFR() {
 
        for (var i = 0; i < francois.length; i++) {
            francois[i].style.display= 'block';
        }
         for (var i = 0; i < anglais.length; i++) {
            anglais[i].style.display="none";}
}
languageSwitchInFrench.addEventListener('click', switchIdiomaFR);





/**************vue.js pour les projaccueilets***/

Vue.directive('scroll', {
  inserted: function (el, binding) {
    
    let f = function (evt) {
      if (binding.value(evt, el)) {
        window.removeEventListener('scroll', f);
      }
    }
    window.addEventListener('scroll', f);
  }
});
let repere = document.getElementById('testscroll');
let bodoff=document.body.clientHeight;
let fenoff=document.documentElement.clientHeight;
// console.log(document.body.clientHeight);
// main app
new Vue({
  el: '#app',
  methods: {
    handleScroll: function (evt, el) {
      // console.log("scroll");


      if (window.scrollY > (document.body.clientHeight-document.documentElement.clientHeight-30)) {
        el.setAttribute(
          'style',
          'opacity: 1; transform: translate3d(0px, 30px, 10px)'
        )

      }
      
    }
  }
})

// document.documentElement.clientHeight : hauteur de la fenêtre
// document.body.clientHeight : semble être la hauteur du body
// app.offsetHeight: hauteur de la div#app