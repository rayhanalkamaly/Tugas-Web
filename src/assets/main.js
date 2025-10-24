// Delicia Cakes - Main JavaScript/jQuery functionality
$(document).ready(function() {
    // Smooth scroll for navigation
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top - 70
        }, 500);
    });

    // Image Gallery
    const $gallery = $('#imageGallery');
    const $images = $gallery.find('.gallery-main img');
    const totalImages = $images.length;
    let currentIndex = 0;

    // Create dots
    const $dotsContainer = $gallery.find('.gallery-dots');
    $images.each((i) => {
        $dotsContainer.append(`<span class="dot${i === 0 ? ' active' : ''}"></span>`);
    });

    function showImage(index) {
        $images.removeClass('active');
        $images.eq(index).addClass('active');
        $('.dot').removeClass('active').eq(index).addClass('active');
    }

    $('.gallery-nav .prev').click(() => {
        currentIndex = (currentIndex - 1 + totalImages) % totalImages;
        showImage(currentIndex);
    });

    $('.gallery-nav .next').click(() => {
        currentIndex = (currentIndex + 1) % totalImages;
        showImage(currentIndex);
    });

    $('.dot').click(function() {
        currentIndex = $(this).index();
        showImage(currentIndex);
    });

    // Auto rotate gallery
    setInterval(() => {
        currentIndex = (currentIndex + 1) % totalImages;
        showImage(currentIndex);
    }, 5000);

    // Testimonial Slider
    const $testimonials = $('.testimonial');
    let currentTestimonial = 0;
    const testimonialCount = $testimonials.length;

    function showTestimonial(index) {
        $testimonials.removeClass('active');
        $testimonials.eq(index).addClass('active');
    }

    setInterval(() => {
        currentTestimonial = (currentTestimonial + 1) % testimonialCount;
        showTestimonial(currentTestimonial);
    }, 6000);

    // Product Card Hover Animation
    $('.product-card').hover(
        function() {
            $(this).find('.product-info').slideDown(200);
        },
        function() {
            $(this).find('.product-info').slideUp(200);
        }
    );

    // Order Button Click Handler
    $('.order-btn').click(function() {
        const product = $(this).closest('.product-card');
        const name = product.find('h3').text();
        const price = product.data('price');
        
        // Animate button
        $(this).addClass('clicked');
        setTimeout(() => {
            $(this).removeClass('clicked');
        }, 200);

        // Redirect to contact form with product info
        window.location.href = `contact.php?product=${encodeURIComponent(name)}&price=${price}`;
    });

    // Scroll Animation
    $(window).scroll(function() {
        $('.fade-in').each(function() {
            const elementTop = $(this).offset().top;
            const viewportBottom = $(window).scrollTop() + $(window).height();
            
            if (elementTop < viewportBottom - 100) {
                $(this).addClass('visible');
            }
        });
    });

    // Mobile Menu Toggle
    $('.menu-toggle').click(function() {
        $('.nav').toggleClass('active');
    });

    // Form Validation Enhancement
    $('#orderForm').submit(function(e) {
        const name = $('#name').val().trim();
        const email = $('#email').val().trim();
        const phone = $('#phone').val().trim();
        const message = $('#message').val().trim();
        
        let isValid = true;
        
        // Reset previous errors
        $('.error-message').remove();
        
        if (name.length < 3) {
            $('#name').after('<span class="error-message">Nama minimal 3 karakter</span>');
            isValid = false;
        }
        
        if (!email.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
            $('#email').after('<span class="error-message">Email tidak valid</span>');
            isValid = false;
        }
        
        if (!phone.match(/^[\d\-+\s()]{10,}$/)) {
            $('#phone').after('<span class="error-message">Nomor telepon tidak valid</span>');
            isValid = false;
        }
        
        if (message.length < 10) {
            $('#message').after('<span class="error-message">Pesan terlalu pendek</span>');
            isValid = false;
        }
        
        if (!isValid) {
            e.preventDefault();
            // Shake invalid fields
            $('.error-message').prev().addClass('shake');
            setTimeout(() => {
                $('.shake').removeClass('shake');
            }, 500);
        }
    });
});