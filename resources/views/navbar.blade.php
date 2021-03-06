<div class="placeholder">
    <div class="parallax-window" data-parallax="scroll" data-image-src="img/simple-house-01.jpg">
        <div class="tm-header">
            <div class="row tm-header-inner">
                <div class="col-md-6 col-12">
                    <img src="img/simple-house-logo.png" alt="Logo" class="tm-site-logo" /> 
                    <div class="tm-site-text-box">
                        <h1 class="tm-site-title">Simple House</h1>
                        <h6 class="tm-site-description">new restaurant template</h6>	
                    </div>
                </div>
                <nav class="col-md-6 col-12 tm-nav">
                    <ul class="tm-nav-ul">
                        <li class="tm-nav-li "><a href="{{route('home')}}" class="tm-nav-link {{request()->is('/*')? 'active':''}}">Home</a></li>
                        <li class="tm-nav-li "><a href="{{route('about')}}" class="tm-nav-link {{request()->is('about*')? 'active':''}}">About</a></li>
                        <li class="tm-nav-li "><a href="{{route('contact')}}" class="tm-nav-link {{request()->is('contact*')? 'active':''}}">Contact</a></li>
                    </ul>
                </nav>	
            </div>
        </div>
    </div>
</div>