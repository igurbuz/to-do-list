<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css" href="css/mtr-datepicker.min.css">
  <link rel="stylesheet" type="text/css" href="css/mtr-datepicker.default-theme.min.css">
  <title></title>
</head>

<body>

  <div class="contienTout">



    <div id="main" class="main">

      <div class="main-header">

        <div class="todobox">
          <h1>MY TO DO LIST</h1>
          <div>
            <input type="button" name=""  onclick="myFunction()" class="button" value="+" id="button">
          </div>

        </div>
      </div>

      <div class="main_container">

        <ul class="list-group">

          <li class="list-group-item"><strike>Take a Shower</strike></li>
          <li class="list-group-item"><strike>Make My Bag</strike></li>
          <li class="list-group-item"><strike>Take a Breakfast</strike></li>
          <li class="list-group-item">Go to Bus stop</li>
          <span class="spanlar">Delete</span>
          <span class="spanlar">Edit---</span>+
          <span class="spanlar">Done---</span>

        </ul>


        <h5>My bus arrive on 7:30 I"ll be on 7:45 at bus stop </h5>
        <h5>Started on 2/10/2017 - 12:00 Endtime 3/10/2017 - 15:00</h5>
        <hr />

        <ul class="list-group">

          <li class="list-group-item">Be at BeCode</li>
          <li class="list-group-item">Start Coding</li>
          <li class="list-group-item">I need a real BREAK</li>
          <li class="list-group-item"><strike>Go to Bus stop</strike></li>
          <span class="spanlar">Delete</span>
          <span class="spanlar">Edit---</span>


        </ul>

      </div>

      <!-- .......................@footer main....................................................;-->
      <div class="footer">

        <ul>
          <li><a href="#">Show:all task</a></li>
          <li><a href="#">Todo task</a></li>
          <li><a href="#">Done task</a></li>
        </ul>

      </div>

      </div>
      <hr />
    </div>


      <!--...................@Main2.................................................;;-->
      <div id="main2" class="main2 hide">

        <div class="main-header">

          <div class="todobox">
            <h1>MY TO DO LIST</h1>
            <div>
              <input type="button" name="" onclick="myFunction()"  value="X" id="button2" class="button">
            </div>

          </div>
        </div>



        <div class="main-header">

          <div class="todobox">
            <h1>TITLE</h1>
            <h4>My todo Title</h4>
            <div>
              <p class="clear"><u> Clear</u></p>
            </div>

          </div>
        </div>

        <h3>Description</h3>
        <form action="">
        <input type="text" name="Description" value="text">
        </form>

        <hr />
        <h3>Start At</h3>
        <form action="">
        <input type="text" name="starting time" value="text">
        </form>


        <div id="first-mtr-datepicker"></div>




        <footer>

            <ul>
              <li></li>
              <li></li>
              <li></li>
            </ul>

        </footer>


      





        <!-- .......................@footer main2....................................................;-->
        <div class="footer">

          <ul>
            <li><a href="#">Show:all task</a></li>
            <li><a href="#">Todo task</a></li>
            <li><a href="#">Done task</a></li>
          </ul>

        </div>

      </div>





<div class="bla" id="bla">

</div>


  </div>
  <script type="text/javascript" src="js/mtr-datepicker.min.js"></script>


<script>
  var config = {
    target: 'first-mtr-datepicker'
  };
  var myDatepicker = new MtrDatepicker(config);
</script>

<script src="script.js">

</script>




</body>
</html>
