<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
      $(document).ready(() => {
/* 
        $('button').click(() => {
          $.get('test.txt', (data, status) => {
            $('#test').html(data);
            alert(status);
          });
        });
 */
        $('input').keyup(() => {
          let name = $('input').val();
          $.post('suggestions.php',{
            suggestion: name
          }, (data, status) => {
            $('#test').html(data);
          });
        });
      });
    </script>
  </head>
  <body>
    <!-- 
    <button>Click me to get data</button> -->
    <input type="text" name="name">
    <p id="test"></p>
  </body>
</html>