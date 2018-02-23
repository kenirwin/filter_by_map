<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/d3/3.5.3/d3.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/topojson/1.6.9/topojson.min.js"></script>
<script src="lib/datamaps.world.min.js"></script>
<div id="container" style="position: relative; width: 1000px; height: 400px;"></div>
<div id="bib">Placeholder</div>
<script>
   var map = new Datamap({
     element: document.getElementById('container'),
	 done: function(datamap) {
	 datamap.svg.selectAll('.datamaps-subunit').on('click', function(geography) {
	     //                           alert(geography.properties.name);
	     $('#bib').text('Load Bibliography for: ' + geography.properties.name);
	   });
       }
                   
     });
</script>