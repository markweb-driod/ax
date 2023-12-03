document.addEventListener('DOMContentLoaded', function () {
    const testimonials = document.querySelectorAll('.testimonial');
    let currentTestimonial = 0;

    function showTestimonial(index) {
        testimonials.forEach(testimonial => {
            testimonial.style.display = 'none';
        });

        testimonials[index].style.display = 'block';
    }

    function changeTestimonial() {
        currentTestimonial = (currentTestimonial + 1) % testimonials.length;
        showTestimonial(currentTestimonial);
    }

    // Show the first testimonial on page load
    showTestimonial(currentTestimonial);

    // Change testimonial every 5 seconds
    setInterval(changeTestimonial, 5000);
});
