<div class="container mt-4">
  <h4>Chat Room #<?= $chat_id ?></h4>
  <div id="chat-box" style="height:300px; overflow-y:auto; border:1px solid #ccc; padding:10px;">
    <?php foreach ($messages as $msg): ?>
      <div><b><?= $msg->sender_id ?>:</b> <?= $msg->message ?></div>
    <?php endforeach; ?>
  </div>

  <div class="mt-3">
    <textarea id="msgInput" class="form-control" placeholder="Type a message..."></textarea>
    <button onclick="sendMessage()" class="btn btn-primary mt-2">Send</button>
  </div>
</div>

<script>
const ws = new WebSocket("ws://localhost:8080");

ws.onopen = () => {
  console.log("Connected to WebSocket");
  ws.send(JSON.stringify({
      chat_id: <?= $chat_id ?>,
      sender_id: <?= $user_id ?>,
      type: 'init',
      message: ''
  }));
};

ws.onmessage = (event) => {
  console.log({event});
  const data = JSON.parse(event.data);
  if (data.chat_id == <?= $chat_id ?>) {
      appendMessage(data.sender_id, data.message, data.created_at);
  }
};

function appendMessage(sender, message, created_at) {
    const chatBox = document.getElementById('chat-box');
    const msgDiv = document.createElement('div');
    msgDiv.innerHTML = `<b>${sender}:</b> ${message}`;
    chatBox.appendChild(msgDiv);
    chatBox.scrollTop = chatBox.scrollHeight; // auto-scroll to bottom
}

async function sendMessage() {
    const message = document.getElementById('msgInput').value;

    // Step 1: Save to API
    let response = await fetch("<?= base_url('messaging/send_message') ?>", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
            chat_id: <?= $chat_id ?>,
            sender_id: <?= $user_id ?>,
            message: message
        })
    });

    response = await response.json();

    if(!response.success) return;

    appendMessage(<?= $user_id ?>, message);
    console.log({response});
    // Step 2: Broadcast via WebSocket
    ws.send(JSON.stringify({
        chat_id: <?= $chat_id ?>,
        sender_id: <?= $user_id ?>,
        message: message
    }));

    document.getElementById('msgInput').value = '';
}
</script>
