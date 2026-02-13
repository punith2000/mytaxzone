<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function() {
      let isSubmitting = false; 

      $('#faqForm').on('submit', function(e) {
          e.preventDefault(); 

          if (isSubmitting) return;
          isSubmitting = true;

          $.ajax({
              url: "{{ route('faq.submit') }}",
              type: "POST",
              data: $(this).serialize(),
              success: function(response) {
                  if (response.success) {
                      alert(response.message || "Your question has been submitted successfully.");
                      $('#faqForm')[0].reset();

                      // hide popup after success
                      $('#faqPopup').hide();
                  } else {
                      alert("Error: " + (response.message || "Something went wrong."));
                  }
              },
              error: function(xhr) {
                  let response = xhr.responseJSON;
                  if (xhr.status === 403) {
                      if (response.error === "not_registered") {
                          $('#faqPopup').hide();
                          $('#registerPopup').show();
                      } else if (response.error === "limit_exceeded") {
                          $('#faqPopup').hide();
                          $('#pricingPopup').show();
                      } else if (response.error === "name_mismatch") {
                          alert(response.message);
                      }
                  } else {
                      alert("Unexpected error: " + (response?.message || "Please try again."));
                  }
              },
              complete: function() {
                  isSubmitting = false; 
              }
          });
      });

      // Icon open
      $('#faqIcon').on('click', function() {
          $('#faqPopup').css("display","flex");
      });

      // Close button
      $('#closeFaqForm').on('click', function() {
          $('#faqPopup').hide();
      });

      // Click outside
      $(window).on('click', function(e) {
          if (e.target.id === 'faqPopup') {
              $('#faqPopup').hide();
          }
      });
  });
</script>

<script>
  function openPopup(userStatus, hasPlan) {
    // Hide both first
    document.getElementById('registerPopup').style.display = 'none';
    document.getElementById('pricingPopup').style.display = 'none';

    if (!userStatus) {
      document.getElementById('registerPopup').style.display = 'block';
    } else if (userStatus && !hasPlan) {
      document.getElementById('pricingPopup').style.display = 'block';
    } else {
      // Show actual FAQ form popup
      document.getElementById('faqFormPopup').style.display = 'block';
    }
  }

  function closePricingPopup() {
    document.getElementById('pricingPopup').style.display = 'none';
  }
</script>

<script>
  // Highlight selected plan
  document.querySelectorAll('.plan-card').forEach(card => {
    card.addEventListener('click', function () {
      document.querySelectorAll('.plan-card').forEach(c => c.classList.remove('active'));
      this.classList.add('active');
    });
  });

  // Handle Get It Now button click
  document.querySelectorAll('.get-plan-btn').forEach(btn => {
    btn.addEventListener('click', function (e) {
      e.stopPropagation(); // prevent double triggering
      const selectedPlan = this.closest('.plan-card').dataset.plan;

      // Call your payment API here
      startPayment(selectedPlan);
    });
  });

  function startPayment(plan) {
    console.log("Triggering payment for plan:", plan);
    // Example: Laravel route call or API fetch
    // fetch(`/subscribe/${plan}`, { method: 'POST' })
    //   .then(res => res.json())
    //   .then(data => console.log("Payment started", data));
    alert("Payment flow started for " + plan + " plan!");
  }
</script>

<!-- faq-icon -->
<script>
  document.querySelectorAll('.faq-question').forEach(button => {
    button.addEventListener('click', () => {
      const item = button.closest('.faq-item');
      const allItems = document.querySelectorAll('.faq-item');
  
      allItems.forEach(i => {
        if (i !== item) {
          i.classList.remove('active');
        }
      });
  
      item.classList.toggle('active');
    });
  });
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const faqIcon = document.getElementById("faqIcon");
    const faqForm = document.getElementById("faqForm");

    faqIcon.addEventListener("click", function () {
        faqForm.style.display = (faqForm.style.display === "none" || faqForm.style.display === "") 
            ? "block" 
            : "none";
    });
  });
</script>

<script>
  $(document).ready(function() {
      let isSubmitting = false; 

      // Toggle popup open
      $('#faqIcon').on('click', function() {
          $('#faqPopup').fadeIn();
      });

      // Close popup
      $('#closeFaqForm').on('click', function() {
          $('#faqPopup').fadeOut();
      });

      // Handle form submit
      $('#faqForm').on('submit', function(e) {
          e.preventDefault();

          if (isSubmitting) return;
          isSubmitting = true;

          $.ajax({
              url: "{{ route('faq.submit') }}",
              type: "POST",
              data: $(this).serialize(),
              success: function(response) {
                  if (response.success) {
                      alert(response.message || "Your question has been submitted successfully.");
                      $('#faqForm')[0].reset();
                      $('#faqPopup').fadeOut();
                  } else {
                      alert("Error: " + (response.message || "Something went wrong."));
                  }
              },
              error: function(xhr) {
                  let response = xhr.responseJSON;
                  alert("Error: " + (response?.message || "Something went wrong."));
              },
              complete: function() {
                  isSubmitting = false;
              }
          });
      });
  });
</script>