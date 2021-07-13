var a = document.getElementById("adminOpen");
var b = document.getElementById("accountingOpen");
var c = document.getElementById("systemDevelopmentOpen");
var d = document.getElementById("eletronicOpen");
var e = document.getElementById("electrotechnicalOpen");
var f = document.getElementById("highSchoolOpen");
var g = document.getElementById("logisticsOpen");
var h = document.getElementById("mechanicOpen");
var i = document.getElementById("mechatronicOpen");
var j = document.getElementById("networkOpen");

function closeAll(idd){
  if(a != idd){
    a.style.display="none";
  }
  if(b != idd){
    b.style.display="none";
  }
  if(c != idd){
    c.style.display="none";
  }
  if(d != idd){
    d.style.display="none";
  }
  if(e != idd){
    e.style.display="none";
  }
  if(f != idd){
    f.style.display="none";
  }
  if(g != idd){
    g.style.display="none";
  }
  if(h != idd){
    h.style.display="none";
  }
  if(i != idd){
    i.style.display="none";
  }
  if(j != idd){
    j.style.display="none";
  }
}

function opening(id){
  var idd = document.getElementById(id);
  closeAll(idd);
  if(idd.style.display === "flex"){
    idd.style.display="none";
  } else{
    idd.style.display="flex";
  }
}

document.addEventListener( 'DOMContentLoaded', function () {
	new Splide( '#card-slider', {
		perPage    : 2,
		breakpoints: {
			250: {
				perPage: 1,
			}
		},
    pagination: false,
    padding: {
      left: 30,
    },
    'arrowPath': 'm15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z',
    classes: {
      prev  : 'splide__arrow--prev prev',
      next  : 'splide__arrow--next next',
      autoWidth: true,
      autoHeight: true,
    },
	} ).mount();
} );