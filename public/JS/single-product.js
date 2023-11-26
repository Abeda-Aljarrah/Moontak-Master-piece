function increaseQuantity(quantityInputId) {
    var quantityInput = document.getElementById(quantityInputId);
    var currentQuantity = parseInt(quantityInput.value);
    quantityInput.value = currentQuantity + 1;
  }

  function decreaseQuantity(quantityInputId) {
    var quantityInput = document.getElementById(quantityInputId);
    var currentQuantity = parseInt(quantityInput.value);
    if (currentQuantity > 0) {
      quantityInput.value = currentQuantity - 1;
    }
  }


        // JavaScript for the testimonial slider
        const slider = document.querySelector('.slider');
        const testimonials = document.querySelector('.testimonials');
        const nextBtn = document.querySelector('.btn--next');
        const prevBtn = document.querySelector('.btn--prev');
        const testimonialBoxes = document.querySelectorAll('.testimonial-box');

        const testimonialWidth = testimonialBoxes[0].offsetWidth;
        const totalTestimonials = testimonialBoxes.length;
        const visibleTestimonials = 3; // Display 3 testimonials at a time

        let currentIndex = 0;

        function setTestimonialVisibility() {
            for (let i = 0; i < totalTestimonials; i++) {
                if (i >= currentIndex && i < currentIndex + visibleTestimonials) {
                    testimonialBoxes[i].style.display = 'block';
                } else {
                    testimonialBoxes[i].style.display = 'none';
                }
            }
        }

        setTestimonialVisibility();

        nextBtn.addEventListener('click', () => {
            if (currentIndex < totalTestimonials - visibleTestimonials) {
                currentIndex++;
                setTestimonialVisibility();
            }
        });

        prevBtn.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                setTestimonialVisibility();
            }
        });


