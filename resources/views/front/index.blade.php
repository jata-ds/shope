@extends('front.master')
  @section('content')

<div class="container-fluid">

	<div class="home-content">
		<div class="row">
		    <div class="banner">
          <img src="images/banner1.gif" alt="" /></div>
	    </div>
	    <div class="container">
			<div class="row">
				<div class="home-text">
				    <h1 class="mb-10">Shop for Different Categories</h1>
					<p class="text-center">That could be a fashion blog or an online store selling apparel and jewelry. Footwear, too. If you already brainstormed it and forged a plan how you will execute your business plan, just a tad more work and effort and you have a website live. That is when a ready-to-use template comes exceptionally handy.</p>
					<button type="button" class="btn btn-warning">PURCHAS NOW</button>
				</div>
			</div>
	    </div>
	    <div class="row">
			<div class="yellowBg">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 text-center">
							<div class="col-icon"><img src="images/doshas.png" alt="" /></div>
							<h3>Ayurvedic Doshas</h3>
							<div class="col-text">In Ayurveda, there are 3 doshas that make up one’s constitution: Vata (gas), Pitta (bile) and Kapha (mucus). Maintaining balance between these doshas ensures perfect health.</div>
						</div>
						<div class="col-sm-4 text-center">
							<div class="col-icon"><img src="images/gluten-allergy.png" alt="" /></div>
							<h3>Gluten Allergy</h3>
							<div class="col-text">Found in wheat, rye and barley, gluten is a common allergen linked to 50+ diseases. If you too have gluten intolerance, allergy or sensitivity, don’t worry – we can help you cure it.</div>
						</div>
						<div class="col-sm-4 text-center">
							<div class="col-icon"><img src="images/diet.png" alt="" /></div>
							<h3>Ayurvedic Diet</h3>
							<div class="col-text">We are probably the only company that doesn’t want you to come back to us again and again. Made with love, our Ayurvedic diet can surely help you be in good health always.</div>
						</div>
					</div>
				</div>
			</div>
        </div>
        <div class="container hidden-xs">
            <div id="hdLine"><span><h1>Our Product Range</h1></span><hr></div>
       		<div class="row">
       			<div class="col-xs-6 col-sm-4">
	    			<div class="itemBox bdr">
	    				<div class="prod"><img src="{{url ('/images/1.jpg')}}" alt="" /></div>
	    				<label>Lorem ipsum1</label>
	    				<span class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
	    				<div class="addcart">
	    					<div class="price">Rs 900.00</div>
	    					<div class="cartIco hidden-xs"><a href="/"></a></div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="col-xs-6 col-sm-4">
	    			<div class="itemBox bdr">
	    				<div class="prod"><img src="{{url ('/images/2.jpg')}}" alt="" /></div>
	    				<label>Lorem ipsum2</label>
	    				<span class="hidden-xs"> Nunc pharetra nulla nec dolor sodales</span>
	    				<div class="addcart">
	    					<div class="price">Rs 900.00</div>
	    					<div class="cartIco hidden-xs"><a href="/"></a></div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="col-xs-6 col-sm-4">
	    			<div class="itemBox bdr">
	    				<div class="prod"><img src="{{url ('/images/3.jpg')}}" alt="" /></div>
	    				<label>Lorem ipsum3</label>
	    				<span class="hidden-xs">id congue mauris efficitur</span>
	    				<div class="addcart">
	    					<div class="price">Rs 900.00</div>
	    					<div class="cartIco hidden-xs"><a href="/"></a></div>
	    				</div>
	    			</div>
	    		</div>
       		</div>
       		<div class="row hidden-xs">
       			<div class="col-sm-12">
		   			<div class="topSell">
		   				<h3>DISCOVER OUR TOP SELLERS PRODUCTS FOR BODYCARE</h3>
		   				<span class="bttn"><a href="">SHOP NOW</a></span>
		   			</div>
       		    </div>
       		</div>
       		<div class="row">
       			<div class="col-sm-4 text-center">
       				<div class="helpIco">
       					<img src="/images/free-shipping.png" alt="" />
       				</div>

       				<h5>Free Shipping</h5>
       				<div class="helpText"><b>Where everyday shopping is always rewarded. Get 10% cash back, free shipping, free returns, and more at 1000+ top retailers.<b></div>
       			</div>
       			<div class="col-sm-4 text-center">
       				<div class="helpIco"><img src="/images/call-us.png" alt="" /></div>
       				<h5>Call : +1&shy; 1223 45566</h5>
       				<div class="helpText"><b>Where everyday shopping is always rewarded. Get 10% cash back, free shipping, free returns, and more at 1000+ top retailers.<b></div>
       			</div>
       			<div class="col-sm-4 text-center">
       				<div class="helpIco"><img src="/images/return-policy.png" alt="" /></div>
       				<h5>Return Policy</h5>
       				<div class="helpText"><b>If you ordered with us over past few days you may receive a parcel without a returns label included, for this we sincerely apologize.  If you need to return your product please print off a returns label on the website <b><a href="#">HERE.</a></div>
       			</div>
       		</div>
        </div>
    </div>
</div>
@endsection
