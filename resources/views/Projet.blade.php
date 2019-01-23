@include('Head')

<div class="francais">
<div id="projets">
  <div class="projets">
  <h1 class="titreprensentation">Aleth Arrias, webdesigner</h1>
    
    <div class="projetsin contre">
      <div class="projetgche">
        <h4>@{{ item4.titre }} </h4> <br>
        <p><strong>Consigne:</strong> @{{item4.principe}}.</p>
        <p><strong>Cahier des charges: </strong>
          <span v-for="value in item4.cahierCharges">@{{value}}</span>.

        </p>
        <p><strong>Langages à utiliser: </strong>
          <span v-for="value in item4.technologies">@{{value}}</span>.</p><br>
          <p>@{{item4.description}}</p>
          <div class="boutons">
            
          <a v-bind:href="item4.github"><button>GitHub du projet</button></a>
          <a v-bind:href="item4.link"><button>Site en ligne</button></a>
          </div>

      </div>
      <div class="projetdrte">
        <a v-bind:href="item4.link"><img v-bind:src="item4.illustration" v-bind:alt="altimg"></a>

      </div>
      
    </div>
  </div>
  <div class="projets">

  <div class="projetsin">
      <div class="projetgche">
        <a v-bind:href="item.link"><img v-bind:src="item5.illustration" v-bind:alt="altimg"></a>

      </div>
      <div class="projetdrte">

        <h4>@{{ item5.titre }} </h4> <br>
        <p><strong>Consigne:</strong> @{{item5.principe}}.</p>
        <p><strong>Cahier des charges: </strong>
          <span v-for="value in item5.cahierCharges">@{{value}}</span>.

        </p>
        <p><strong>Langages à utiliser: </strong>
          <span v-for="value in item5.technologies">@{{value}}</span>.</p><br>
          <p>@{{item5.description}}</p>
          <div class="boutons">
            
          <a v-bind:href="item5.github"><button>GitHub du projet</button></a>
          <a v-bind:href="item5.link"><button>Site en ligne</button></a>
          </div>
      </div>  
    </div>
  </div>
  <div class="projets">
    
    <div class="projetsin">
      <div class="projetgche">

        <h4>@{{ item.titre }} </h4> <br>
        <p><strong>Consigne:</strong> @{{item.principe}}.</p>
        <p><strong>Cahier des charges: </strong>
          <span v-for="value in item.cahierCharges">@{{value}}</span>.

        </p>
        <p><strong>Langages à utiliser: </strong>
          <span v-for="value in item.technologies">@@{{value}}</span>.</p><br>
          <p>@{{item.description}}</p>
          <div class="boutons">
            
          <a v-bind:href="item.github"><button>GitHub du projet</button></a>
          <a v-bind:href="item.link"><button>Site en ligne</button></a>
          </div>
      
      </div>
      <div class="projetdrte">

        <img v-bind:src="item.illustration" v-bind:alt="altimg">
      </div>  
    </div>
  </div>
  <div class="projets">
    
    <div class="projetsin contre">
      <div class="projetgche">

        <a v-bind:href="item2.link"><img v-bind:src="item2.illustration" v-bind:alt="altimg"></a>
      </div>
      <div class="projetdrte">

        <h4>@{{ item2.titre }} </h4> <br>
        <p><strong>Consigne:</strong> @{{item2.principe}}.</p>
        <p><strong>Cahier des charges: </strong>
          <span v-for="value in item2.cahierCharges">@{{value}}</span>.

        </p>
        <p><strong>Langages à utiliser: </strong>
          <span v-for="value in item2.technologies">@{{value}}</span>.</p><br>
          <p>@{{item2.description}}</p>
          <div class="boutons">
            
          <a v-bind:href="item2.github"><button>GitHub du projet</button></a>
          <a v-bind:href="item2.link"><button>Site en ligne</button></a>
          </div>
      </div>
      
    </div>
  </div>
  <div class="projets">
    
    <div class="projetsin">
      <div class="projetgche">

        <h4>@{{ item3.titre }} </h4> <br>
        <p><strong>Consigne:</strong> @{{item3.principe}}.</p>
        <p><strong>Cahier des charges: </strong>
          <span v-for="value in item3.cahierCharges">@{{value}}</span>.

        </p>
        <p><strong>Langages à utiliser: </strong>
          <span v-for="value in item3.technologies">@{{value}}</span>.</p><br>
          <p>@{{item3.description}}</p>
          <div class="boutons">
            
          <a v-bind:href="item3.github"><button>GitHub du projet</button></a>
          <a v-bind:href="item3.link"><button>Site en ligne</button></a>
          </div>
      </div>
      <div class="projetdrte">

        <a v-bind:href="item3.link"><img v-bind:src="item3.illustration" v-bind:alt="altimg"></a>
      </div>  
    </div>
  </div>

  
</div>
</div>







<div class="anglais">
<div id="projetsang">
  <div class="projets">
  <h1 class="titreprensentation">Aleth Arrias, webdesigner</h1>

  <div class="projetsin">
      <div class="projetgche">
        <a v-bind:href="item.link"><img v-bind:src="item5.illustration" v-bind:alt="altimg"></a>
      </div>
      <div class="projetdrte">


        <h4>@{{ item5.titre }} </h4> <br>
        <p><strong>Topic:</strong> @{{item5.principe}}.</p>
        <p><strong>Specifications: </strong>
          <span v-for="value in item5.cahierCharges">@{{value}}</span>.

        </p>
        <p><strong>Web languages: </strong>
          <span v-for="value in item5.technologies">@{{value}}</span>.</p><br>
          <p>@{{item5.description}}</p>
          <div class="boutons">
            
          <a v-bind:href="item5.github"><button>The project on GitHub</button></a>
          <a v-bind:href="item5.link"><button>Online website</button></a>
          </div>
      </div>  
    </div>
  </div>
  <div class="projets">
    
    <div class="projetsin">
      <div class="projetgche">

        <h4>@{{ item.titre }} </h4> <br>
        <p><strong>Topic:</strong> @{{item.principe}}.</p>
        <p><strong>Specifications: </strong>
          <span v-for="value in item.cahierCharges">@{{value}}</span>.

        </p>
        <p><strong>Web languages: </strong>
          <span v-for="value in item.technologies">@{{value}}</span>.</p><br>
          <p>@{{item.description}}</p>
          <div class="boutons">
            
          <a v-bind:href="item.github"><button>GitHub of the The project on GitHub</button></a>
          <a v-bind:href="item.link"><button>Site en Online website</button></a>
          </div>
      </div>
      <div class="projetdrte">

        <a v-bind:href="item.link"><img v-bind:src="item.illustration" v-bind:alt="altimg"></a>
      </div>  
    </div>
  </div>
  <div class="projets">
    
    <div class="projetsin contre">
      <div class="projetgche">

        <a v-bind:href="item2.link"><img v-bind:src="item2.illustration" v-bind:alt="altimg"></a>
      </div>
      <div class="projetdrte">

        <h4>@{{ item2.titre }} </h4> <br>
        <p><strong>Topic:</strong> @{{item2.principe}}.</p>
        <p><strong>Specifications: </strong>
          <span v-for="value in item2.cahierCharges">@{{value}}</span>.

        </p>
        <p><strong>Web languages: </strong>
          <span v-for="value in item2.technologies">@{{value}}</span>.</p><br>
          <p>@{{item2.description}}</p>
          <div class="boutons">
            
          <a v-bind:href="item2.github"><button>The project on GitHub</button></a>
          <a v-bind:href="item2.link"><button>Online website</button></a>
          </div>
      </div>
      
    </div>
  </div>
  <div class="projets">
    
    <div class="projetsin">
      <div class="projetgche">

        <h4>@{{ item3.titre }} </h4> <br>
        <p><strong>Topic:</strong> @{{item3.principe}}.</p>
        <p><strong>Specifications: </strong>
          <span v-for="value in item3.cahierCharges">@{{value}}</span>.

        </p>
        <p><strong>Web languages: </strong>
          <span v-for="value in item3.technologies">@{{value}}</span>.</p><br>
          <p>@{{item3.description}}</p>
          <div class="boutons">
            
          <a v-bind:href="item3.github"><button>The project on GitHub</button></a>
          <a v-bind:href="item3.link"><button>Online website</button></a>
          </div>
      </div>
      <div class="projetdrte">

        <a v-bind:href="item3.link"><img v-bind:src="item3.illustration" v-bind:alt="altimg"></a>
      </div>  
    </div>
  </div>
<div class="projets">
    
    <div class="projetsin contre">
      <div class="projetgche">

        <a v-bind:href="item4.link"><img v-bind:src="item4.illustration" v-bind:alt="altimg"></a>
      </div>
      <div class="projetdrte">

        <h4>@{{ item4.titre }} </h4> <br>
        <p><strong>Topic:</strong> @{{item4.principe}}.</p>
        <p><strong>Specifications: </strong>
          <span v-for="value in item4.cahierCharges">@{{value}}</span>.

        </p>
        <p><strong>Web languages: </strong>
          <span v-for="value in item4.technologies">@{{value}}</span>.</p><br>
          <p>@{{item4.description}}</p>
          <div class="boutons">
            
          <a v-bind:href="item4.github"><button>The project on GitHub</button></a>
          <a v-bind:href="item4.link"><button>Online website</button></a>
          </div>
      </div>
      
    </div>
  </div>
  
</div>
</div>


<script src="{{ asset(mix('/js/scriptprojets.js')) }}" type="text/javascript"></script>
<script type="text/javascript">
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


      if (window.scrollY > (document.body.clientHeight-document.documentElement.clientHeight-30)) {
        el.setAttribute(
          'style',
          'opacity: 1; transform: translate3d(0px, 30px, 10px)'
        )

      }
      
    }
  }
})
</script>
  @include('Contact')
  @include('Footer')