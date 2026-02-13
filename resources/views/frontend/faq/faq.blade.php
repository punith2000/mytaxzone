<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- meta tags -->
    <meta charset="utf-8" />
    <meta
      name="keywords"
      content="bootstrap 5, premium, multipurpose, sass, scss, saas, rtl, business, consulting, accounting"
    />
    <meta
      name="description"
      content="MyTaxZone"
    />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="www.themeht.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Title -->
    <title>@yield('title', 'MyTaxZone')</title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-mtz.png') }}" />

    <!-- inject css start -->

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/fontawesome-all.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/lightslider.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/spacing.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/spacing.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/base.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/shortcodes.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <!--== color-customizer -->
    <link href="#" data-style="styles" rel="stylesheet" />
    <link href="{{ asset('assets/css/color-customize/color-customizer.css') }}" rel="stylesheet" type="text/css"/>

    <!-- Bootstrap icons link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- inject css end -->
  </head>

  <body>
    <!-- page wrapper start -->

    <div class="page-wrapper">
      <!-- preloader start -->

      <div id="ht-preloader">
        <div class="clear-loader">
          <div class="loader"></div>
        </div>
      </div>

      <!-- preloader end -->

      <!--header start-->

      @include('frontend.partials.header')

      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav me-auto">

            <!-- Home -->
            <li class="nav-item">
              <a class="nav-link" href="{{ route('cms') }}">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('about') }}">About Us</a>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                data-bs-toggle="dropdown"
                >Services</a
              >
              <div class="dropdown-menu">
                <ul class="list-unstyled">
                  <li>
                    <a href="{{ route('business_services') }}"
                      >Business Services</a
                    >
                  </li>
                  {{-- <li>
                    <a href="software-research.html"
                      >Software & Research</a
                    >
                  </li> --}}
                  <li>
                    <a href="{{ route('finance_services') }}"
                      >Finance and Restructuring</a
                    >
                  </li>
                  {{-- <li>
                    <a href="energy-environment.html"
                      >Energy & Environment</a
                    >
                  </li> --}}
                  <li>
                    <a href="{{ route('investment_services') }}"
                      >Investment Planning</a
                    >
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('blog') }}">Blogs</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="{{ route('faq') }}">FAQ?</a>
            </li>
          </ul>
        </div>
        <div  class="right-nav align-items-center d-flex justify-content-end">
          <div id="faqIcon" class="btn me-1 me-sm-2">
            <span onclick="openFaqPopup()">Have any queries?</span>
          </div>
          @include('frontend.faq.query_form')
          {{-- <div class="search-icon me-1 me-sm-2">
            <a id="search" href="javascript:void(0)">
              <i class="flaticon-search"></i>
            </a>
          </div> --}}
          {{-- <div class="profile">
            <a class="dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-fluid rounded-circle" src="{{ asset('assets/images/thumbnail/01.png') }}" alt=""/>
            </a>
            <div class="dropdown-menu">
              <ul class="list-unstyled">
                <li>
                  <a href="{{ route('frontend.user_login.login') }}" class="logout">Logout</a>
                </li>
              </ul>
            </div>
          </div> --}}
        </div>
      </nav>
    </div>
  </div>
</div>
</div>
</header>

<div class="search-input" id="search-input-box">
<div class="container">
<form class="d-flex justify-content-between search-inner">
  <input
    type="text"
    class="form-control"
    id="search-input"
    placeholder="Search Here"
  />
  <button type="submit" class="btn"></button>
  <span
    class="flaticon-close"
    id="close-search"
    title="Close Search"
  ></span>
</form>
</div>
</div>

      <!--header end-->

      <!--page title start-->

<section class="page-banner page-title parallaxie" data-bg-img="{{ asset('assets/images/bg/FaqBg.webp') }}">
  <div class="container">
    <div class="row">
      <div class="overlay"></div>
      <div class="col">
        <h1 class="banner-title">FAQ?</h1>
      </div>
    </div>
  </div>
</section>

<!--page title end-->


<!--body content start-->

<div class="page-content">

  <!-- FAQ SECTION -->
  <section class="faq-section" style="background-color: #f9f9f9; padding: 60px 20px;">
    <div class="container" style="max-width: 1200px; margin: auto; display: flex; flex-wrap: wrap; align-items: center;">
      
      <!-- LEFT: FAQ -->
      <div class="faq-left" style="flex: 1 1 50%; padding: 20px;">
        <h2 style="color: #003399; font-size: 36px; font-weight: bold; margin-bottom: 40px;">
          Quieries
          {{-- Q <span style="color: #fd5b03">&</span> A --}}
        </h2>
  
        <div class="faq-item active" style="margin-bottom: 20px;">
          <button class="faq-question">
            How Can I Get Started With MyTaxZone?
            <span class="faq-icon">&gt;</span>
          </button>
          <div class="faq-answer" class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            Just visit our Contact page, schedule a free consultation, and one of our experts will guide you through the setup process. It’s quick, secure, and personalized for your needs.
            Any other quieries, please fill the form below and we will get back to you as soon as possible.
          </div>
        </div>
  
        <div class="faq-item" style="margin-bottom: 20px;">
          <button class="faq-question">
            What Types Of Tax Services Do You Offer?
            <span class="faq-icon">&gt;</span>
          </button>
          <div class="faq-answer">
            We offer tax filing, audit support, small business tax planning, IRS communication, and GST/tax compliance services tailored to both individuals and businesses.
          </div>
        </div>
  
        <div class="faq-item" style="margin-bottom: 20px;">
          <button class="faq-question">
            Is My Financial Data Secure With MyTaxZone?
            <span class="faq-icon">&gt;</span>
          </button>
          <div class="faq-answer">
            Yes. We use bank-grade encryption and follow best practices in data privacy to keep your information 100% secure and confidential.
          </div>
        </div>
      </div>

      @include('frontend.faq.chatbot')

      <!-- Chatbot Icon -->
      {{-- <div id="chatIcon">
        <i class="far fa-comment-dots"></i>
      </div>

      <!-- Chatbot -->
      <div class="chatbot-container" id="chatbot">
        <div class="chatbox">
          <div id="chat-messages" class="chat-messages"></div>

          <!-- Chat Input -->
          <div class="chat-input" id="chat-input">
            <input type="text" id="user-input" placeholder="Ask me anything…" />
            <button id="send-btn">Send</button>
          </div>
        </div>
      </div> --}}

      {{-- @include('frontend.faq.query_form') --}}
  
    </div>
  </section>

<!--footer start-->

@include('frontend.partials.footer')

<!--footer end-->
</div>

<!-- page wrapper end -->

<!--color-customizer start-->

{{-- <div class="color-customizer closed">
<div class="color-button">
  <a class="opener" href="#"> <i class="fas fa-spinner fa-spin"></i> </a>
</div>
<div class="clearfix color-chooser text-center">
  <ul class="colorChange clearfix">
    <li
      class="theme-default selected"
      title="theme-default"
      data-style="color-1"
    ></li>
    <li class="theme-2" title="theme-2" data-style="color-2"></li>
    <li class="theme-3" title="theme-3" data-style="color-3"></li>
    <li class="theme-4" title="theme-4" data-style="color-4"></li>
  </ul>
</div>
</div> --}}

<!--color-customizer end-->

<!--back-to-top start-->

<div class="scroll-top">
<a class="smoothscroll" href="#top"><i class="flaticon-top"></i></a>
</div>

<!--back-to-top end-->

<!-- inject js start -->
{{-- ChatbotIcon --}}
{{-- <script>
  const chatIcon = document.getElementById("chatIcon");
  const chatbot = document.getElementById("chatbot");
  const chatMessages = document.getElementById("chat-messages");
  const sendBtn = document.getElementById("send-btn");
  const userInput = document.getElementById("user-input");

  // Toggle chatbot visibility
  chatIcon.addEventListener("click", () => {
    chatbot.style.display = "flex";
    chatIcon.style.display = "none";
    addBotMessage("Hello! How can I help you today?");
  });

  // Close button
  const closeBtn = document.createElement("div");
  closeBtn.innerHTML = "&times;";
  closeBtn.style.cssText = `
    position:absolute;
    top:5px;
    right:10px;
    font-size:20px;
    cursor:pointer;
    color:#333;
  `;
  chatbot.appendChild(closeBtn);

  closeBtn.addEventListener("click", () => {
    chatbot.style.display = "none";
    chatIcon.style.display = "flex";
  });

  // Add messages
  function addUserMessage(msg) {
    const div = document.createElement("div");
    div.classList.add("chat-message", "user");
    div.innerText = msg;
    chatMessages.appendChild(div);
    chatMessages.scrollTop = chatMessages.scrollHeight;
  }

  function addBotMessage(msg) {
    const div = document.createElement("div");
    div.classList.add("chat-message", "bot");
    div.innerHTML = msg; // allow links
    chatMessages.appendChild(div);
    chatMessages.scrollTop = chatMessages.scrollHeight;
  }

  // Send message
  sendBtn.addEventListener("click", sendMessage);
  userInput.addEventListener("keypress", (e) => {
    if (e.key === "Enter") sendMessage();
  });

  function sendMessage() {
    const msg = userInput.value.trim();
    if (msg === "") return;

    addUserMessage(msg);
    userInput.value = "";

    // Check login (this will come from Laravel)
    fetch("/api/check-auth")
      .then(res => res.json())
      .then(data => {
        if (!data.authenticated) {
          addBotMessage(
            "You must <a href='/register' target='_blank'>register here</a> before asking questions."
          );
        } else {
          setTimeout(() => {
            addBotMessage("You asked: " + msg);
          }, 500);
        }
      })
      .catch(() => {
        addBotMessage("Error checking authentication.");
      });
  }
</script> --}}

{{-- <script>
  const chatIcon = document.getElementById("chatIcon");
  const chatbot = document.getElementById("chatbot");
  const sendBtn = document.getElementById("send-btn");
  const userInput = document.getElementById("user-input");
  const chatMessages = document.getElementById("chat-messages");

  // Toggle chatbot visibility
  chatIcon.addEventListener("click", () => {
    chatbot.style.display = "flex";
    chatIcon.style.display = "none"; // hide icon
  });

  // Close chat when clicking outside OR add close button
  const closeBtn = document.createElement("div");
  closeBtn.innerHTML = "&times;";
  closeBtn.style.cssText = `
    position:absolute;
    top:5px;
    right:10px;
    font-size:20px;
    cursor:pointer;
    color:#333;
  `;
  chatbot.appendChild(closeBtn);

  closeBtn.addEventListener("click", () => {
    chatbot.style.display = "none";
    chatIcon.style.display = "block"; // show icon again
  });

  // Send message function
  function sendMessage() {
    const msg = userInput.value.trim();
    if (msg === "") return;

    // Add user message
    const userMsg = document.createElement("div");
    userMsg.classList.add("chat-message", "user");
    userMsg.innerText = msg;
    chatMessages.appendChild(userMsg);

    userInput.value = "";
    chatMessages.scrollTop = chatMessages.scrollHeight;

    // Simulate bot reply
    setTimeout(() => {
      const botMsg = document.createElement("div");
      botMsg.classList.add("chat-message", "bot");
      botMsg.innerText = "You said: " + msg;
      chatMessages.appendChild(botMsg);
      chatMessages.scrollTop = chatMessages.scrollHeight;
    }, 500);
  }

  sendBtn.addEventListener("click", sendMessage);

  userInput.addEventListener("keypress", (e) => {
    if (e.key === "Enter") sendMessage();
  });
</script> --}}

{{-- Chatbot --}}
{{-- <script>
  const chatbotUrl = "{{ route('chatbot.chat', [], false) }}"; // -> "/chatbot" (relative)
  const csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

  async function sendMessage() {
    const input = document.getElementById('user-input');
    const message = (input?.value || '').trim();
    if (!message) return;

    appendMessage('user', message);
    input.value = '';
    setSending(true);

    try {
      const res = await fetch(chatbotUrl, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'Accept': 'application/json',
          'X-CSRF-TOKEN': csrf
        },
        body: JSON.stringify({ message })
      });

      if (!res.ok) {
        // Show more helpful details in console; keep UI friendly
        console.error('Chatbot HTTP error', res.status, await res.text());
        appendMessage('bot', 'Sorry, the chatbot is temporarily unavailable. Try again.');
        return;
        }

      const data = await res.json();
      appendMessage('bot', data.reply || '…');
    } catch (err) {
      console.error('Chatbot fetch failed', err);
      appendMessage('bot', 'Network error. Check your server is running.');
    } finally {
      setSending(false);
    }
  }

  function setSending(isSending) {
    const btn = document.getElementById('send-btn');
    if (!btn) return;
    btn.disabled = isSending;
    btn.textContent = isSending ? 'Sending…' : 'Send';
  }

  function appendMessage(sender, text) {
    const wrap = document.getElementById('chat-messages');
    const el = document.createElement('div');
    el.className = 'chat-message ' + (sender === 'user' ? 'user-message' : 'bot-message');
    el.innerText = text;
    wrap.appendChild(el);
    wrap.scrollTop = wrap.scrollHeight;
  }

  // handlers
  document.getElementById('send-btn')?.addEventListener('click', sendMessage);
  document.getElementById('user-input')?.addEventListener('keypress', e => {
    if (e.key === 'Enter') sendMessage();
  });
</script> --}}


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

  // Close popup when clicking the close button
  document.getElementById('closeRegisterPopup').addEventListener('click', function() {
    document.getElementById('registerPopup').style.display = 'none';
  });

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
    const faqPopup = document.getElementById("faqPopup");
    const faqOverlay = document.getElementById("faqOverlay");
    const openBtn = document.getElementById("faqIcon"); // or any trigger button
    const closeBtn = document.getElementById("closeFaqForm");
  
    let scrollPosition = 0;

    // Open popup
    if (openBtn) {
      openBtn.addEventListener("click", function () {
        document.body.style.position = "fixed";
            document.body.style.top = `-${scrollPosition}px`;
            document.body.style.left = "0";
            document.body.style.right = "0";
        document.body.style.overflow = "hidden"; // disable background scroll
      });
    }
  
    // Close popup
    if (closeBtn) {
      closeBtn.addEventListener("click", function () {
        faqPopup.style.display = "none";
        faqOverlay.style.display = "none";
        document.body.style.position = "";
        document.body.style.top = "";
        document.body.style.left = "";
        document.body.style.right = "";
        document.body.style.overflow = "";

        window.scrollTo(0, scrollPosition); // restore scroll position
        document.body.style.overflow = "auto"; // re-enable scroll
      });
    }
  
    // Close when clicking outside modal
    faqOverlay.addEventListener("click", function () {
      faqPopup.style.display = "none";
      faqOverlay.style.display = "none";
      document.body.style.overflow = "auto";
    });
  });
</script> 

<!--== jquery -->
<script src="{{ asset('assets/js/theme.js') }}"></script>

<!--== theme-plugin -->
<script src="{{ asset('assets/js/theme-plugin.js') }}"></script>

<!--== color-customize -->
<script src="{{ asset('assets/js/color-customize/color-customizer.js') }}"></script>

<!--== theme-script -->
<script src="{{ asset('assets/js/theme-script.js') }}"></script>

<!-- inject js end -->
</body>
</html>