// $(document).ready(function() {
//     $('#demo2').owlCarousel({
//       loop: true,
//       margin: 10,
//       responsiveClass: true,
//       responsive: {
//         0: {
//           items: 1,
//           nav: true
//         },
//         600: {
//           items: 1,
//           nav: false
//         },
//         1000: {
//           items: 2,
//           nav: true,
//           loop: false,
//           margin: 20
//         }
//       }
//     })
//   })


// Make sure you are not declaring 'observer' variable again before this point

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    console.log(entry);
    if (entry.isIntersecting) {
      entry.target.classList.add('show');
    }else{
      entry.target.classList.remove('show');
    }
  });
});

const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((element) => observer.observe(element));


const category = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add('bounce-in-fwd-active');
    }else{
      entry.target.classList.remove('bounce-in-fwd-active');
    }
  });
});

const animatedElements = document.querySelectorAll('.bounce-in-fwd');
animatedElements.forEach((element) => category.observe(element));


		$(document).ready(function() {
			$('.btn-start').click(function() {
				$('.step-wrapper').toggleClass('move-line');
			});

		});


