
// ---auto change span-----
document.addEventListener("DOMContentLoaded", function () {
        const spans = document.querySelectorAll(".left-contentIntroduce span"); 
        let currentIndex = 0;

        function showNextSpan() {
                spans.forEach((span) => {
                        span.style.display = "none";
                });
                spans[currentIndex].style.display = "inline-block";
                currentIndex = (currentIndex + 1) % spans.length; 
        }

        showNextSpan();

        setInterval(showNextSpan, 2000);
});


// ----auto increment number--------
document.addEventListener("DOMContentLoaded", function () {
        const stats = document.querySelectorAll(".stat-item h2");

        const duration = 2000; 
        const interval = 20; 
        stats.forEach(stat => {
                const targetValue = parseInt(stat.textContent.replace(/[^\d]/g, "")); 
                const increment = Math.ceil(targetValue / (duration / interval)); 
                let currentValue = 0;
        
                function incrementNumber() {
                if (currentValue < targetValue) {
                        currentValue += increment; 
                        if (currentValue > targetValue) currentValue = targetValue; 
                                stat.textContent = currentValue.toLocaleString() + "+"; 
                        }
                }
                const timer = setInterval(() => {
                        incrementNumber();
                        if (currentValue >= targetValue) clearInterval(timer); 
                }, interval);
        });
});

// --------Partner Part----------- 
document.addEventListener('DOMContentLoaded', function() {
        const partnership = document.querySelector('.showPartnership');
        const titles = partnership.querySelectorAll('h2');
        let currentIndex = 0;
        titles[0].classList.add('active');
    
        function slideShow() {
                titles[currentIndex].classList.remove('active');
                titles[currentIndex].classList.add('prev');
                currentIndex = (currentIndex + 1) % titles.length;
                titles.forEach(title => title.classList.remove('prev'));
                titles[currentIndex].classList.add('active');
        }
        setInterval(slideShow, 3000);
});