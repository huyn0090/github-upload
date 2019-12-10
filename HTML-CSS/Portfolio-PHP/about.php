<!doctype html>
<html>
   <head>
  <title>About Minimal Portfolio Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.iconmonstr.com/1.3.0/css/iconmonstr-iconic-font.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700|Playfair+Display&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/about.css">
  
<?php include("header.php");?>
</head>
       
<body>
      

        <div class="about-content">
            <div>
            <h1>About Hollie</h1>
            </div>
            <div class="about-sub">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                At imperdiet dui accumsan sit amet. Rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. 
                Convallis convallis tellus id interdum. Elementum facilisis leo vel fringilla est ullamcorper. Semper quis lectus nulla at. 
                Orci dapibus ultrices in iaculis. Lectus magna fringilla urna porttitor rhoncus dolor. Vel eros donec ac odio tempor orci dapibus ultrices in. 
                Nunc congue nisi vitae suscipit tellus mauris. Interdum velit euismod in pellentesque. Lacus laoreet non curabitur gravida arcu. 
                Adipiscing elit ut aliquam purus sit amet luctus.</p>
    
            <p>email@example.com</p>
            <p>(999) 999-9999</p>

            <div class="social-bar-2">
                    <a href="#" class="fb"><i class="im im-facebook"></i></a>
                    <a href="#" class="ist"><i class="im im-instagram"></i></a>
                    <a href="#" class="ws"><i class="im im-whatsapp"></i></a>
                    <a href="#" class="tw"><i class="im im-twitter"></i></a>
                    
                </div>
        </div>

<?php
$services = [
  'GOLD' => ['$1,200',
                '$2,500',
                '$1,800'
                ],
  'PREMIUM' => ['$2,200',
                '$3,500',
                '$2,500'],
  'COVERAGE' => ['$3,500',
                '$4,500',
                '$3,200']
];
?>
<div class="price">
<table>
  <thead>
    <tr>
      <th>Services</th>
      <th>Photography</th>
      <th>Videography</th>
      <th>Web Design</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($services as $service => $packages) {
      echo "<tr><td>$service</td>";
      foreach($packages as $package)   {
        echo "<td>$package</td>";
      }
      echo '</tr>';
      
    }
  
    ?>
  </tbody>
</table>

</div>
<form>
                First name:
                <br>
                <input type="text" name="firstname">
                <br>
                
                Last name:
                <br>
                <input type="text" name="lastname">
                <br>
               
                Email:
                <br>
                <input type="email" name="email">

                Message
                <br>
                <textarea>Your message here</textarea>

                <button type="button">Submit</button>
                
        </form>

            
        </div>

    <?php include("footer.php");?> 
        <script src="js/script.js"></script>
</body>   
</html>

