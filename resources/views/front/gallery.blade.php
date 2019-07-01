<section id="gallery" class="gallery-wrap topspace">	        
    <div class="container"> 
        <div class="row">
              <div class="col-12">
                  <div class="section-heading wow fadeInUp">
                      <h2>Our Gallery</h2>  
                  </div>
              </div>
        </div>       
      
        <div class="row">          
            <div class="col-md-12">
	            <div class="controls text-center">
	                <a class="filter active btn btn-common" data-filter="all">
	                  All 
	                </a>
	                @if(!empty($gallery_category))
		                @foreach($gallery_category as $cat)
			                <a class="filter btn btn-common" data-filter=".{{$cat['id']}}">
			                  {{$cat['name']}}
			                </a>
		                @endforeach
	                @endif
	            </div>
            </div>
	        <div id="portfolio" class="row wow fadeInDown" data-wow-delay="0.4s">
              @if(!empty($gallery_category))
	                @foreach($gallery_category as $cat)
		                @foreach($cat['gallery'] as $gal)
		                	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 mix {{$cat['id'] }} all" >
				                <div class="portfolio-item">
				                  <div class="shot-item">
				                  	<a class="fancybox" rel="fancybox-thumb" data-fancybox="images" href="{{url('assets/img/gallery/'.$gal['image'])}}">
				                    <img src="{{url('assets/img/gallery/'.$gal['image'])}}" alt="gallery" /> 
				                    <div class="overlay">
				                      <div class="icons">
				                        
				                          <i class="fa fa-eye"></i>
				                        
				                      </div>

				                    </div>
				                    </a>
				                  </div>               
				                </div>
				            </div>
	                	@endforeach
	                @endforeach
                @endif
            </div>
           
        </div>
    </div>		        
</section>