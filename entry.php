<?php
include ("dbconfig.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

</head>


<body>
<?Php include ("header.php");

$id = $_GET['id'];
$sql = "SELECT * FROM tournament where ID='$id'";
$result = mysqli_query($con, $sql);
$rows = $result->fetch_assoc();
$arr = array();
$arr = explode(',', $rows['type']);
?>
 <section id="counts" class="counts">
        <div class="container" style="text-align:center;">

            <h1 style="font-weight: bold;
    font-size: 4rem;">APPLICATION</h1>
        </div>
    </section>

  <div class="container" style="padding:50px 50px">
    <form name="myform" action="entrydb.php" method="post" enctype="multipart/form-data">

      <div class="form-row">
      <div class="form-group">
          <label for="exampleFormControlSelect1" style="margin-bottom: 1.125rem;">Tournament: </label>

          <select class="form-control" name="tour" style="margin-bottom: 1.125rem;" id="exampleFormControlSelect1">

            <option value="<?php echo $rows['name']; ?>" name="tour" selected><?php echo $rows['name']; ?></option>


          </select></div>
        <div class="form-group">
          <label for="exampleFormControlSelect1" style="margin-bottom: 1.125rem;">Game Name: </label>

          <select class="form-control" name="game" style="margin-bottom: 1.125rem;" id="exampleFormControlSelect1"
            >

            <option value="<?php echo $rows['gamename']; ?>" name="game" selected><?php echo $rows['gamename']; ?></option>


          </select>

          <label for="gamename" style="margin-bottom: 1.125rem;">Player Type:</label>
          <?php
          for ($i = 0; $i < count($arr); $i++) {
            echo '  <div class="form-check" style="margin-bottom: 1.125rem;">
                    <input class="form-check-input" type="radio" name="player" required onchange="toggleInputBox(this)" id="gridRadios1" value="' . $arr[$i] . '">
                    <label class="form-check-label" for="gridRadios1">
                      ' . $arr[$i] . '
                    </label>
                  </div>';
          }
          ?>




        </div>
        
      </div>
      
     
      <div class="col em" style="margin-bottom: 1.125rem;display:none;">
        <label for="email" style="margin-bottom: 1.125rem;">Email:</label>

        <input type="email" class="form-control" placeholder="hari@gmail.com" name="email" required>
      </div>



      <!--  =======SOLO PLAYER========   -->

      <div class="form-row solo" style="margin-bottom: 1.125rem;display:none;">

        <div class="col" style="margin-bottom: 1.125rem;">
          <label for="player1" style="margin-bottom: 1.125rem;">Player Name:</label>

          <input type="text" class="form-control" placeholder="player1 name" name="player1" required>
        </div>

        <div class="col" style="margin-bottom: 1.125rem;">
          <label for="ingame1" style="margin-bottom: 1.125rem;">In-Game Name:</label>

          <input type="text" class="form-control" placeholder="" name="soloig">
        </div>
        <div class="col" style="margin-bottom: 1.125rem;">
          <label for="ingame id" style="margin-bottom: 1.125rem;">In-Game Id:</label>

          <input type="text" class="form-control" placeholder="" name="soloid">
        </div>
        <div class="row" style="margin-bottom: 1.125rem;">
          <!-- <div class="col">
            <label for="email" style="margin-bottom: 1.125rem;">Email:</label>

            <input type="email" class="form-control" placeholder="hari@gmail.com" name="email">
          </div>-->
          <div class="col">
            <label for="mobile" style="margin-bottom: 1.125rem;">Mobile:</label>

            <input type="number" pattern="[6789][0-9]{9}" class="form-control" placeholder="" name="mobile" required>
          </div>
        </div>
      </div>



      <!-- =====DUO====== -->

      <div class="row duo" style="margin-bottom: 1.125rem; display:none;">

        <div class="col" style="margin-bottom: 1.125rem;">
          <label for="team-name" style="margin-bottom: 1.125rem;">Team Name:</label>

          <input type="text" class="form-control" placeholder="Tamil Gaming" name="tnamed" required>
        </div>
        <div class="col" style="margin-bottom: 1.125rem;">
          <label for="exampleFormControlFile1" style="margin-bottom: 1.125rem;">Team Logo:</label>
          <input type="file" name="filed" class="form-control-file" id="exampleFormControlFile1" required>
        </div>

        <div class="col" style="margin-bottom: 1.125rem;">
          <label for="leader-name" style="margin-bottom: 1.125rem;">Leader Name:</label>

          <input type="text" class="form-control" placeholder="Hari" name="lnamed" required>
        </div>

        <div class="row" style="margin-bottom: 1.125rem;">
          <!-- <div class="col">
            <label for="email" style="margin-bottom: 1.125rem;">Email:</label>

            <input type="email" class="form-control" placeholder="hari@gmail.com" name="email2">
          </div>-->
          <div class="col">
            <label for="mobile" style="margin-bottom: 1.125rem;">Mobile:</label>

            <input type="number" class="form-control" placeholder="" name="mobile2" required>
          </div>
        </div>

        <div class="row" style="margin-bottom: 1.125rem;">

          <div class="col">
            <label for="ingame" style="margin-bottom: 1.125rem;">In Game Name:</label>

            <input type="text" class="form-control" placeholder="Tamil Gaming" name="ingamed">
          </div>

          <div class="col">
            <label for="gameid" style="margin-bottom: 1.125rem;">In-Game ID:</label>

            <input type="text" class="form-control" placeholder="exw123" name="inidd">
          </div>
        </div>

        <div class="row" style="margin-bottom: 1.125rem;">

          <div class="col">
            <label for="player2" style="margin-bottom: 1.125rem;">Player2 Name:</label>

            <input type="text" class="form-control" placeholder="player1 name" name="p2d" required>
          </div>

          <div class="col">
            <label for="ingame" style="margin-bottom: 1.125rem;">In-Game Name:</label>

            <input type="text" class="form-control" placeholder="" name="p2igd">
          </div>
          <div class="col" style="margin-bottom: 1.125rem;">
            <label for="ingame id" style="margin-bottom: 1.125rem;">In-Game Id:</label>

            <input type="text" class="form-control" placeholder="" name="p2idd">
          </div>
        </div>


      </div>



      <!--   =======Trio=========  -->

      <div class="row trio" style="margin-bottom: 1.125rem; display:none;">

        <div class="col" style="margin-bottom: 1.125rem;">
          <label for="team-name" style="margin-bottom: 1.125rem;">Team Name:</label>

          <input type="text" class="form-control" placeholder="Tamil Gaming" name="tnamet" required>
        </div>
        <div class="col" style="margin-bottom: 1.125rem;">
          <label for="exampleFormControlFile1" style="margin-bottom: 1.125rem;">Team Logo:</label>
          <input type="file" name="filet" class="form-control-file" id="exampleFormControlFile1" required>
        </div>

        <div class="col" style="margin-bottom: 1.125rem;">
          <label for="leader-name" style="margin-bottom: 1.125rem;">Leader Name:</label>

          <input type="text" class="form-control" placeholder="Hari" name="lnamet" required>
        </div>

        <div class="row" style="margin-bottom: 1.125rem;">
          <!-- <div class="col">
            <label for="email" style="margin-bottom: 1.125rem;">Email:</label>

            <input type="email" class="form-control" placeholder="hari@gmail.com" name="email3">
          </div>-->
          <div class="col">
            <label for="mobile" style="margin-bottom: 1.125rem;">Mobile:</label>

            <input type="number" class="form-control" placeholder="" name="mobile3" required>
          </div>
        </div>

        <div class="row" style="margin-bottom: 1.125rem;">

          <div class="col">
            <label for="ingame" style="margin-bottom: 1.125rem;">In Game Name:</label>

            <input type="text" class="form-control" placeholder="Tamil Gaming" name="ingamet">
          </div>

          <div class="col">
            <label for="gameid" style="margin-bottom: 1.125rem;">In-Game ID:</label>

            <input type="text" class="form-control" placeholder="exw123" name="inidt">
          </div>
        </div>

        <div class="row" style="margin-bottom: 1.125rem;">

          <div class="col">
            <label for="player2" style="margin-bottom: 1.125rem;">Player2 Name:</label>

            <input type="text" class="form-control" placeholder="player1 name" name="p2t" required>
          </div>

          <div class="col">
            <label for="ingame" style="margin-bottom: 1.125rem;">In-Game Name:</label>

            <input type="text" class="form-control" placeholder="" name="p2igt">
          </div>
          <div class="col" style="margin-bottom: 1.125rem;">
            <label for="ingame id" style="margin-bottom: 1.125rem;">In-Game Id:</label>

            <input type="text" class="form-control" placeholder="" name="p2idt">
          </div>
        </div>

        <div class="row" style="margin-bottom: 1.125rem;">

          <div class="col">
            <label for="player3" style="margin-bottom: 1.125rem;">Player3 Name:</label>

            <input type="text" class="form-control" placeholder="player1 name" name="p3t" required>
          </div>

          <div class="col">
            <label for="ingame" style="margin-bottom: 1.125rem;">In-Game Name:</label>

            <input type="text" class="form-control" placeholder="" name="p3igt">
          </div>
          <div class="col" style="margin-bottom: 1.125rem;">
            <label for="ingame id" style="margin-bottom: 1.125rem;">In-Game Id:</label>

            <input type="text" class="form-control" placeholder="" name="p3idt">
          </div>
        </div>

      </div>



      <!-- =======SQUAD ====--->

      <div class="row squad" style="margin-bottom: 1.125rem;display:none;">

        <div class="col" style="margin-bottom: 1.125rem;">
          <label for="team-name" style="margin-bottom: 1.125rem;">Team Name:</label>

          <input type="text" class="form-control" placeholder="Tamil Gaming" name="tnames" required>
        </div>
        <div class="col" style="margin-bottom: 1.125rem;">
          <label for="exampleFormControlFile1" style="margin-bottom: 1.125rem;">Team Logo:</label>
          <input type="file" name="files" class="form-control-file" id="exampleFormControlFile1" required>
        </div>

        <div class="col" style="margin-bottom: 1.125rem;">
          <label for="leader-name" style="margin-bottom: 1.125rem;">Leader Name:</label>

          <input type="text" class="form-control" placeholder="Hari" name="lnames" required>
        </div>

        <div class="row" style="margin-bottom: 1.125rem;">
          <!-- <div class="col">
            <label for="email" style="margin-bottom: 1.125rem;">Email:</label>

            <input type="email" class="form-control" placeholder="hari@gmail.com" name="email4">
          </div>-->
          <div class="col">
            <label for="mobile" style="margin-bottom: 1.125rem;">Mobile:</label>

            <input type="number" class="form-control" placeholder="" name="mobile4" required>
          </div>
        </div>

        <div class="row" style="margin-bottom: 1.125rem;">

          <div class="col">
            <label for="ingame" style="margin-bottom: 1.125rem;">In Game Name:</label>

            <input type="text" class="form-control" placeholder="Tamil Gaming" name="ingames">
          </div>

          <div class="col">
            <label for="gameid" style="margin-bottom: 1.125rem;">In-Game ID:</label>

            <input type="text" class="form-control" placeholder="exw123" name="inids">
          </div>
        </div>

        <div class="row" style="margin-bottom: 1.125rem;">

          <div class="col">
            <label for="player2" style="margin-bottom: 1.125rem;">Player2 Name:</label>

            <input type="text" class="form-control" placeholder="player1 name" name="p2s" required>
          </div>

          <div class="col">
            <label for="ingame" style="margin-bottom: 1.125rem;">In-Game Name:</label>

            <input type="text" class="form-control" placeholder="" name="p2igs">
          </div>
          <div class="col" style="margin-bottom: 1.125rem;">
            <label for="ingame id" style="margin-bottom: 1.125rem;">In-Game Id:</label>

            <input type="text" class="form-control" placeholder="" name="p2ids">
          </div>
        </div>

        <div class="row" style="margin-bottom: 1.125rem;">

          <div class="col">
            <label for="player3" style="margin-bottom: 1.125rem;">Player3 Name:</label>

            <input type="text" class="form-control" placeholder="player1 name" name="p3s" required>
          </div>

          <div class="col">
            <label for="ingame" style="margin-bottom: 1.125rem;">In-Game Name:</label>

            <input type="text" class="form-control" placeholder="" name="p3igs">
          </div>
          <div class="col" style="margin-bottom: 1.125rem;">
            <label for="ingame id" style="margin-bottom: 1.125rem;">In-Game Id:</label>

            <input type="text" class="form-control" placeholder="" name="p3ids">
          </div>
        </div>

        <div class="row" style="margin-bottom: 1.125rem;">

          <div class="col">
            <label for="player4" style="margin-bottom: 1.125rem;">Player4 Name:</label>

            <input type="text" class="form-control" placeholder="player1 name" name="p4s" required>
          </div>

          <div class="col">
            <label for="ingame" style="margin-bottom: 1.125rem;">In-Game Name:</label>

            <input type="text" class="form-control" placeholder="" name="p4igs">
          </div>
          <div class="col" style="margin-bottom: 1.125rem;">
            <label for="ingame id" style="margin-bottom: 1.125rem;">In-Game Id:</label>

            <input type="text" class="form-control" placeholder="" name="p4ids">
          </div>
        </div>
      </div>


      <!--- ====QUINTET ===== -->

      <div class="row quintet" style="margin-bottom: 1.125rem;display:none;">

        <div class="col" style="margin-bottom: 1.125rem;">
          <label for="team-name" style="margin-bottom: 1.125rem;">Team Name:</label>

          <input type="text" class="form-control" placeholder="Tamil Gaming" name="tnameq" required> 
        </div>
        <div class="col" style="margin-bottom: 1.125rem;">
          <label for="exampleFormControlFile1" style="margin-bottom: 1.125rem;">Team Logo:</label>
          <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1" required>
        </div>

        <div class="col" style="margin-bottom: 1.125rem;">
          <label for="leader-name" style="margin-bottom: 1.125rem;">Leader Name:</label>

          <input type="text" class="form-control" placeholder="Hari" name="lnameq" required>
        </div>

        <div class="row" style="margin-bottom: 1.125rem;">
          <!--  <div class="col">
            <label for="email" style="margin-bottom: 1.125rem;">Email:</label>

            <input type="email" class="form-control" placeholder="hari@gmail.com" name="email5">
          </div>-->
          <div class="col">
            <label for="mobile" style="margin-bottom: 1.125rem;">Mobile:</label>

            <input type="number" class="form-control" placeholder="" name="mobile5" required>
          </div>
        </div>

        <div class="row" style="margin-bottom: 1.125rem;">

          <div class="col">
            <label for="ingame" style="margin-bottom: 1.125rem;">In Game Name:</label>

            <input type="text" class="form-control" placeholder="Tamil Gaming" name="ingameq">
          </div>

          <div class="col">
            <label for="gameid" style="margin-bottom: 1.125rem;">In-Game ID:</label>

            <input type="text" class="form-control" placeholder="exw123" name="inidq">
          </div>
        </div>

        <div class="row" style="margin-bottom: 1.125rem;">

          <div class="col">
            <label for="player2" style="margin-bottom: 1.125rem;">Player2 Name:</label>

            <input type="text" class="form-control" placeholder="player1 name" name="p2q" required>
          </div>

          <div class="col">
            <label for="ingame" style="margin-bottom: 1.125rem;">In-Game Name:</label>

            <input type="text" class="form-control" placeholder="" name="p2igq">
          </div>
          <div class="col" style="margin-bottom: 1.125rem;">
            <label for="ingame id" style="margin-bottom: 1.125rem;">In-Game Id:</label>

            <input type="text" class="form-control" placeholder="" name="p2idq">
          </div>
        </div>

        <div class="row" style="margin-bottom: 1.125rem;">

          <div class="col">
            <label for="player3" style="margin-bottom: 1.125rem;">Player3 Name:</label>

            <input type="text" class="form-control" placeholder="player1 name" name="p3q" required>
          </div>

          <div class="col">
            <label for="ingame" style="margin-bottom: 1.125rem;">In-Game Name:</label>

            <input type="text" class="form-control" placeholder="" name="p3igq">
          </div>
          <div class="col" style="margin-bottom: 1.125rem;">
            <label for="ingame id" style="margin-bottom: 1.125rem;">In-Game Id:</label>

            <input type="text" class="form-control" placeholder="" name="p3idq">
          </div>
        </div>

        <div class="row" style="margin-bottom: 1.125rem;">

          <div class="col">
            <label for="player4" style="margin-bottom: 1.125rem;">Player4 Name:</label>

            <input type="text" class="form-control" placeholder="player1 name" name="p4q" required>
          </div>

          <div class="col">
            <label for="ingame" style="margin-bottom: 1.125rem;">In-Game Name:</label>

            <input type="text" class="form-control" placeholder="" name="p4igq">
          </div>
          <div class="col" style="margin-bottom: 1.125rem;">
            <label for="ingame id" style="margin-bottom: 1.125rem;">In-Game Id:</label>

            <input type="text" class="form-control" placeholder="" name="p4idq">
          </div>
        </div>

        <div class="row" style="margin-bottom: 1.125rem;">

          <div class="col">
            <label for="player5" style="margin-bottom: 1.125rem;">Player5 Name:</label>

            <input type="text" class="form-control" placeholder="player1" name="p5q" required>
          </div>

          <div class="col">
            <label for="ingame" style="margin-bottom: 1.125rem;">In-Game Name:</label>

            <input type="text" class="form-control" placeholder="" name="p5igq">
          </div>
          <div class="col" style="margin-bottom: 1.125rem;">
            <label for="ingame id" style="margin-bottom: 1.125rem;">In-Game Id:</label>

            <input type="text" class="form-control" placeholder="" name="p5idq">
          </div>
        </div>
      </div>

      <button type="submit" name="entry" class="btn btn-primary">Submit</button>

    </form>
  </div>
  <?php include ("footer.php"); ?>

  <script>
    /*$(document).ready(function () {
      $('#exampleFormControlSelect1').ready(function () {
        var selectedVal = $(this).val();
        $.ajax({
          url: 'fetch_data.php',
          type: 'post',
          data: { selected_value: selectedVal },

          success: function (data) {
            // Parse and display data

            $("#dataContainer").html(data);
          }

        });

      });

    });*/

    function toggleInputBox(radio) {
      var solo = $('.solo');
      var duo = $('.duo');
      var trio = $('.trio');
      var squad = $('.squad');
      var quintet = $('.quintet');
      var em = $('.em');
      //var gid1 = $('.gid1');
      // var p2 = $('.player2');
      // var inputBox = document.getElementById('inputBox');
      if (radio.value === 'SOLO') {
        // input.style.display = 'block'; // Show input box container
        duo.css("display", "none");
        trio.css("display", "none");
        squad.css("display", "none");
        quintet.css("display", "none");
        solo.css("display", "block");
        em.css("display", "block");

      }
      else if (radio.value === 'DUO') {
        solo.css("display", "none");
        trio.css("display", "none");
        squad.css("display", "none");
        quintet.css("display", "none");
        duo.css("display", "block");
        em.css("display", "block");

      }
      else if (radio.value === 'TRIO') {
        solo.css("display", "none");
        duo.css("display", "none");
        squad.css("display", "none");
        quintet.css("display", "none");
        trio.css("display", "block");
        em.css("display", "block");
      }
      else if (radio.value === 'SQUAD') {
        solo.css("display", "none");
        duo.css("display", "none");
        trio.css("display", "none");
        quintet.css("display", "none");
        squad.css("display", "block");
        em.css("display", "block");
      }
      else if (radio.value === 'QUINTET') {
        solo.css("display", "none");
        duo.css("display", "none");
        trio.css("display", "none");
        squad.css("display", "none");
        quintet.css("display", "block");
        em.css("display", "block");
      }

    }

  </script>
</body>

</html>