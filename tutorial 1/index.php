<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutorial 1</title>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(() => {
      $('#btn').click(() => {
        $('#test').load('data.txt', {
          name: 'Arvee', 
          lastName: 'Odon'
        }, () => {
          alert('Hello Arvee');
        });
      });
    });
  </script>
</head>
<body>
  <div id="test">
    <p>This is the first content</p>
  </div>

  <button id="btn">Click to change</button>
</body>
</html>