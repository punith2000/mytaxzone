<!-- Chatbot Icon -->
<div id="chatIcon">
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
</div>

<!-- inject js start -->
{{-- ChatbotIcon --}}
<script>
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
</script>

<script>
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
</script>

{{-- Chatbot --}}
<script>
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
</script>