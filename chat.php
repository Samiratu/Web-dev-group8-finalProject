<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ubuntu - Chat</title>
    <link rel="icon" type="image/ico" href="images/u_logo.png"/>
    <link rel="stylesheet" href="css/chat.css">
    <link rel="stylesheet" href="css/main.css">

  </head>


  <body>
  <section class="msger">
  <header class="msger-header">
    <div class="msger-header-title">
      <i class="fas fa-comment-alt"></i> Ubuntu Chat
    </div>
    <div class="msger-header-options">
      <span><i class="fas fa-cog"></i></span>
    </div>
  </header>

  <main class="msger-chat">
    <div class="msg left-msg">
      
      <!-- seller avartar -->
      <div
       class="msg-img"
       style="background-image: url(images/female.jpg)"
      ></div>

      <!-- name and time stamp -->
      <div class="msg-bubble">
        <div class="msg-info">
          <div class="msg-info-name">Seller</div>
          <div class="msg-info-time">12:45</div>
        </div>

        <!-- first message -->
        <div class="msg-text">
          Hi, welcome to Ubuntu Buyer and seller Chat box, Go ahead and send me a message.
        </div>
      </div>
    </div>

    <!-- buyer's avartar -->
    <div class="msg right-msg">
      <div
       class="msg-img"
       style="background-image: url(images/male.png)"
      ></div>

      <div class="msg-bubble">
        <div class="msg-info">
          <div class="msg-info-name">Buyer</div>
          <div class="msg-info-time">12:46</div>
        </div>

        <!-- second message -->
        <div class="msg-text">
          I like some of your products!
        </div>
      </div>
    </div>
  </main>

  <form class="msger-inputarea">
    <input type="text" class="msger-input" placeholder="Enter your message...">
    <button type="submit" class="msger-send-btn">Send</button>
  </form>
</section>

<!-- leave chat area -->
<a href="shop.php"> Exit Chat</a>
<script src="js/main.js" charset="utf-8"></script>

  </body>
</html>
