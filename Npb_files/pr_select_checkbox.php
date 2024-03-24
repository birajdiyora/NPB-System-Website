<html>
<body>
    <head>
    <link rel="stylesheet" href="boostrap\bootstrap-5.0.2-dist\css\bootstrap.min.css">
    <script src="jquery-3.6.0.min.js"></script>
    <link rel="stylesheet"  href="fontaws\fontawesome-free-6.1.1-web\css\all.min.css">

    </head>
<select id="test">
  <option value="1"><input type="checkbox"  value="ch">hjh</input></option>
  <option value="2">Asiatic Black Bear</option>
  <option value="3">Brown Bear</option>
  <option value="4">Giant Panda</option>
  <option value="5">Sloth Bear</option>
  <option value="6">Sun Bear</option>
  <option value="7">Polar Bear</option>
  <option value="8">Spectacled Bear</option>
</select>
</body>
</html>

<script>
    $(document).ready(function () {
  $("#test").CreateMultiCheckBox({
        console.log("");
             width: '230px',
             defaultText : 'Select Below', height:'250px' });
});
</script>