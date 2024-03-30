<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
      $(document).ready(() => {
        $('form').submit((event) => {
          event.preventDefault();
          let name = $('#mail-name').val();
          let email = $('#mail-email').val();
          let gender = $('#mail-gender').val();
          let message = $('#mail-message').val();
          let submit = $('#form-message').val();

          $(submit).load('mail.php', {
            name,
            email,
            gender,
            message,
            submit
          });
        });
      });
    </script>
    <title>Document</title>
  </head>
  <body> 

    <form action="mail.php" method="POST">
      <input id='mail-name' type="text" placeholder="Full name"><br>
      <input id='mail-email' type="email" placeholder="E-mail"><br>
      <select id='mail-gender' name="gender"><br>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select><br>
      <textarea id='mail-message' name="message" placeholder="message"></textarea><br>
      <button>Send e-mail</button>
      <p id="form-message"></p>
    </form>

  </body>
</html>