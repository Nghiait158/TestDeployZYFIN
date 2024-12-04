@extends('Layout/header&footer')
@section('content')

<script>
        // -----------css-------
        var link = document.createElement('link');
        link.rel = 'stylesheet';
        link.type = 'text/css';
        link.href = '/Frontend/css/homepage.css'; 
        document.head.appendChild(link);

</script> 


{{-- Video Background --}}
<div class="intro-video">
        <video autoplay loop muted>
                <source src="{{ ('/Frontend/Video/intro-video.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
        </video>
        <div class="intro-video-text">
                <h1>We know technology and what great delivery looks like.</h1>
        </div>
</div>        

<div class="contentIntroduce">
        <div class="left-contentIntroduce">
                <div class="icon"></div>
                <h1>We bring </h1>

                        <span>modernisation</span>
                        <span>security</span>
                        <span>innovation</span>
                        <span>competitive advantage</span>
                        
                
        </div>
        <div class="right-contentIntroduce">
                <p>Extensive IT solutions delivered by highly capable augmented software teams around the world.</p>
                <p> Our teams know how to harness the power of data, artificial intelligence, modernising core, 
                optimising and automating operations to achieve your business goals.</p>
           
        </div>
</div>
<div class="number-section">
        <div class="image-content">
                <img src="{{ ('/Frontend/img/dev.png') }}" alt="Developer at work" style="position: relative; left: 359px; top: -72px;">
        </div>
        <div class="stats-content">
                <div class="stat-item">
                        <h2>24+</h2>
                        <p>years of experience</p>
                </div>
                <div class="stat-item">
                        <h2>14</h2>
                        <p>offices</p>
                </div>
                <div class="stat-item">
                        <h2>5</h2>
                        <p>delivery centres</p>
                </div>
                <div class="stat-item">
                        <h2>1,900+</h2>
                        <p>skilled engineers</p>
                </div>
        </div>
</div>
<h1 class="ourSolution">Our Solution</h1>

<div class="gridSolution">
        <div class="solution">
                <img src="https://www.nashtechglobal.com/wp-content/uploads/2023/09/AI-machine-learning-colored-icon-p2-1.svg" alt="Solution Icon">
                <h2>AI and machine learning</h2>
                <div class="contentSolution"> 
                        Leverage your data assets
                </div>
        </div>
        <div class="solution">
                <img src="https://www.nashtechglobal.com/wp-content/uploads/2023/09/Application-engineering-colored-icon-p2.svg" alt="Application Engineering" />
                <h2>Application Engineering</h2>
                <div class="contentSolution"> 
                        Leverage your data assets
                </div>
        </div>
        <div class="solution">
                <img src="https://www.nashtechglobal.com/wp-content/uploads/2023/12/Business-process-solutions-colored-icon-p2-1.svg" alt="Business Process Solutions" />
                <h2>Business Process Solutions</h2>
                <div class="contentSolution"> 
                        Leverage your data assets     
                </div>     
        </div>
        <div class="solution">
                <img src="https://www.nashtechglobal.com/wp-content/uploads/2024/05/Cloud-engineering-icon-colored-icon-p2-1.svg" alt="Cloud Engineering" />
                <h2>Cloud Engineering</h2>
                <div class="contentSolution"> 
                        Leverage your data assets
                </div>
        </div>
        <div class="solution">
                <img src="https://www.nashtechglobal.com/wp-content/uploads/2023/09/Data-solutions-colored-icon-p2.svg" alt="Data Solutions" />
                <h2>Data Solutions</h2>
                <div class="contentSolution"> 
                        Leverage your data assets
                </div>
        </div>
        <div class="solution">
                <img src="https://www.nashtechglobal.com/wp-content/uploads/2024/05/digital_experience.svg" alt="Digital Experience Platforms" />
                <h2>Digital Experience Platforms</h2>
                <div class="contentSolution"> 
                        Leverage your data assets
                </div>
        </div>
</div>

<div class="whatourcustomersay">
        <h2>What our customers say</h2>
        <div class="testimonial-content">
                <!-- Left: Video or Image Section -->
                <div class="testimonial-image">
                        <video autoplay loop muted>
                                <source src="{{ ('/Frontend/Video/hi5.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                        </video>
                </div>
                <!-- Right: Quote Section -->
                <div class="testimonial-quote">
                                <p>"Working with Vietnam has been a real pleasure and a real experience. Vietnam doesn’t feel like an offshore operation – the team works as one. It’s been comforting to know that when you have your back to the wall, as you do with a project this size, NashTech are standing there beside us not walking away... they are a true partner."</p>
                                <p class="quote-author">Jeff Mountford</p>
                                <p class="quote-position">Director of Systems Delivery, Atlanta</p>
                </div>
        </div>
        <div class="trusted-enterprises">
                <h3>Trusted by enterprises globally</h3>
                <div class="enterprise-logos">
                        <img src="path-to-logo1.png" alt="Hewlett Packard Enterprise">
                        <img src="path-to-logo2.png" alt="Philips Healthcare">
                        <img src="path-to-logo3.png" alt="Amway">
                        <img src="path-to-logo4.png" alt="Bank of America">
                        <img src="path-to-logo5.png" alt="Walmart Canada">
                        <img src="path-to-logo6.png" alt="Cisco">
                        <img src="path-to-logo7.png" alt="Loblaw Digital">
                        <img src="path-to-logo8.png" alt="Corporate Health">
                        <img src="path-to-logo9.png" alt="NSK">
                </div>
        </div>
</div>
<div class="insightResource"> 
        <div class="insightResource-header">
                <h1>Insights & resources</h1>
                <div class="explore">
                        <a href="" style="text-decoration: none; color:brown">Explore more</a>
                </div>
        </div>
        <div class="showIS">
                <div class="box-showIS">
                        <a href="">
                                <div class="imgIS">
                                        <img src="{{ ('/Frontend/img/ai.jpg') }}" alt="">
                                </div>
                                <h2>5 principles for data insight success</h2>
                        </a>
                </div>
                <div class="box-showIS">
                        <a href="">
                                <div class="imgIS">
                                        <img src="{{ ('/Frontend/img/ai2.jpeg') }}" alt="">
                                </div>
                                <h2>Learnings from NashTech’s AI ‘Stick or Twist’ event </h2>
                        </a>
                </div>
                <div class="box-showIS">
                        <a href="">
                                <div class="imgIS">
                                        <img src="{{ ('/Frontend/img/ai.jpg') }}" alt="">
                                </div>
                                <h2>Building supply chain resilience</h2>
                        </a>
                </div>
        </div>
</div>
<div class="ourPartnerships">
        <h1>Our partnerships</h1>
        <div class="showPartnership">
                <h2>Microsoft Solution Partner</h2>
                <h2>Databrick</h2>
                <h2>HashiCorp</h2>
                <h2>LightBend</h2>
                <h2>AWS Partner Network</h2>
                <h2>Confluent</h2>            
        </div>
</div>
<div class="getintouchADS">
        <img src="{{ ('/Frontend/img/get.jpeg') }}" alt="">
        <h1>Ready to gain competitive advantage by harnessing data and modernising your technology?</h1>
</div>

@endsection