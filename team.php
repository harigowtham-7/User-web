<?php
session_start();
include ("dbconfig.php");
//if (isset($_SESSION["user"])) { ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            overflow-x: hidden;
        }
        .info {
            <?php
            $user = $_SESSION['uname'];
            $sql = "SELECT * FROM entry Where user='$user'";
            $result = mysqli_query($con, $sql);
            $rows = $result->fetch_assoc();
            if ($rows['type'] == "DUO") {
                echo 'display:block;';
            }
            ?>
            width: 100%;
            height: 16rem;
            /* background: #35535;*/
            border: 1px solid;
            margin-top: 2rem;
            background: url(dashbg2.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;

        }

        li {
            list-style: none;
            text-align: center;
        }

        label {
            font-size: 1.5rem;
            font-weight: bold;
            font-family: monospace;
        }

        .dashimg {
            width: 8rem;
            border-radius: 4rem;
        }

        .teaminfo {
            position: relative;
            left: 15rem;
            top: 4rem
        }

        .th {
            font-weight: bold;
            font-size: 2.5rem;
        }

        .badge1 {
            <?php
            $user = $_SESSION['uname'];
            $sql = "SELECT * FROM entry Where user='$user'";
            $result = mysqli_query($con, $sql);
            $rows = $result->fetch_assoc();
            if ($rows['status'] == 1 ) {
                echo 'display:none;';
            }
            ?>
        }
        .dashsolo {
            <?php
            $user = $_SESSION['uname'];
            $sql = "SELECT * FROM entry Where user='$user'";
            $result = mysqli_query($con, $sql);
            $rows = $result->fetch_assoc();
            if ($rows['type'] == "SOLO") {
                echo 'display:block;';
            } else {
                echo 'display:none;';
            }
            ?>
        }

        .dashduo {
            <?php
            $user = $_SESSION['uname'];
            $sql = "SELECT * FROM entry Where user='$user'";
            $result = mysqli_query($con, $sql);
            $rows = $result->fetch_assoc();
            if ($rows['type'] == "DUO") {
                echo 'display:block;';
            } else {
                echo 'display:none;';
            }
            ?>
        }

        .dashtrio {
            <?php
            $user = $_SESSION['uname'];
            $sql = "SELECT * FROM entry Where user='$user'";
            $result = mysqli_query($con, $sql);
            $rows = $result->fetch_assoc();
            if ($rows['type'] == "TRIO") {
                echo 'display:block;';
            } else {
                echo 'display:none;';
            }
            ?>
        }
        .dashsquad {
            <?php
            $user = $_SESSION['uname'];
            $sql = "SELECT * FROM entry Where user='$user'";
            $result = mysqli_query($con, $sql);
            $rows = $result->fetch_assoc();
            if ($rows['type'] == "SQUAD") {
                echo 'display:block;';
            } else {
                echo 'display:none;';
            }
            ?>
        }
       .dashquintet {
            <?php
            $user = $_SESSION['uname'];
            $sql = "SELECT * FROM entry Where user='$user'";
            $result = mysqli_query($con, $sql);
            $rows = $result->fetch_assoc();
            if ($rows['type'] == "QUINTET") {
                echo 'display:block;';
            } else {
                echo 'display:none;';
            }
            ?>
        } 

        .box {
            display: flex;
            flex-wrap: wrap;
        }
    </style>



</head>

<body>
    <?Php include ("header.php"); ?>
    <section id="counts" class="counts">
        <div class="container" style="text-align:center;">

            <h1 style="font-weight: bold;
    font-size: 4rem;">DASHBOARD</h1>
        </div>
    </section>
    <div class="container dashsolo">
        <?php
        $user = $_SESSION['uname'];
        $sql = "SELECT * FROM entry Where user='$user'";
        $result = mysqli_query($con, $sql);
        $rows = $result->fetch_assoc();
        ?>
        <div class="info">
           
            <div style="    position: relative;
    left: 28rem;
    top: 2rem;">
                <h2 class="th"><?php echo $rows['player name']; ?><span class="badge1 badge-warning"
                        style="color:red;">Pending!</span></h2>
            </div>
           
            <div style="    position: relative;
    top: 5rem;
    left: 26rem;">
                <ul style="    flex-direction: row;
    display: flex;
    gap: 2rem;">
                    <li>Avg Rank<br>
                        -

                    </li>
                    <li>Avg Kill<br>
                        -</li>
                    <li>Avg Survival Time<br>
                        -
                    </li>
                </ul>

            </div>

        </div>
        
    </div>
    <!-- duo -->
    <div class="container dashduo">
        <?php
        $user = $_SESSION['uname'];
        $sql = "SELECT * FROM entry Where user='$user'";
        $result = mysqli_query($con, $sql);
        $rows = $result->fetch_assoc();
        ?>
        <div class="info">
            <div class="teaminfo">
                <img src="<?php echo $rows['logo d']; ?>" class="dashimg">

            </div>
            <div style="    position: relative;
    left: 28rem;
    top: -5rem;">
                <h2 class="th"><?php echo $rows['tname d']; ?><span class="badge1 badge-warning"
                        style="color:red;">Pending!</span></h2>
            </div>
            <div style="    position: relative;
    left: 28rem;
    top: -4rem;">
                <label>Leader: <span><?php echo $rows['lname d']; ?></span></label>
            </div>
            <div style="    position: relative;
    top: -2rem;
    left: 26rem;">
                <ul style="    flex-direction: row;
    display: flex;
    gap: 2rem;">
                    <li>Avg Rank<br>
                        -

                    </li>
                    <li>Avg Kill<br>
                        -</li>
                    <li>Avg Survival Time<br>
                        -
                    </li>
                </ul>

            </div>

        </div>
        <div class="container" style="margin-top: 3rem;">
            <h2 class="section-subtitle">Team Members</h2>
            <div class="box" style="margin-top: 1rem;">
                <div class="card" style="width: 18rem;box-shadow: 2px 3px 4px 1px green;">
                    <img class="card-img-top" src="shadow.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $rows['p2 d']; ?></h5>

                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Avg Rank <span>-</span> </li>
                        <li class="list-group-item">Avg Kill <span>-</span> </li>
                        <li class="list-group-item">Avg Survive Time <span>-</span> </li>
                    </ul>

                </div>


            </div>

        </div>
    </div>

    <!-- trio -->
    <div class="container dashtrio">
        <?php
        $user = $_SESSION['uname'];
        $sql = "SELECT * FROM entry Where user='$user'";
        $result = mysqli_query($con, $sql);
        $rows = $result->fetch_assoc();
        ?>
        <div class="info">
            <div class="teaminfo">
                <img src="<?php echo $rows['logo t']; ?>" class="dashimg">

            </div>
            <div style="    position: relative;
    left: 28rem;
    top: -5rem;">
                <h2 class="th"><?php echo $rows['tname t']; ?><span class="badge1 badge-warning"
                        style="color:red;">Pending!</span></h2>
            </div>
            <div style="    position: relative;
    left: 28rem;
    top: -4rem;">
                <label>Leader: <span><?php echo $rows['lname t']; ?></span></label>
            </div>
            <div style="    position: relative;
    top: -2rem;
    left: 26rem;">
                <ul style="    flex-direction: row;
    display: flex;
    gap: 2rem;">
                    <li>Avg Rank<br>
                        -

                    </li>
                    <li>Avg Kill<br>
                        -</li>
                    <li>Avg Survival Time<br>
                        -
                    </li>
                </ul>

            </div>

        </div>
        <div class="container" style="margin-top: 3rem;">
            <h2 class="section-subtitle">Team Members</h2>
            <div class="box" style="margin-top: 1rem;">
                <div class="card" style="width: 18rem;box-shadow: 2px 3px 4px 1px green;">
                    <img class="card-img-top" src="shadow.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $rows['p2 t']; ?></h5>

                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Avg Rank <span>-</span> </li>
                        <li class="list-group-item">Avg Kill <span>-</span> </li>
                        <li class="list-group-item">Avg Survive Time <span>-</span> </li>
                    </ul>

                </div>
                <div class="card" style="width: 18rem;box-shadow: 2px 3px 4px 1px green;">
                    <img class="card-img-top" src="shadow.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $rows['p3 t']; ?></h5>

                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Avg Rank <span>-</span> </li>
                        <li class="list-group-item">Avg Kill <span>-</span> </li>
                        <li class="list-group-item">Avg Survive Time <span>-</span> </li>
                    </ul>

                </div>




            </div>

        </div>
    </div>

     <!-- squad -->
     <div class="container dashsquad">
        <?php
        $user = $_SESSION['uname'];
        $sql = "SELECT * FROM entry Where user='$user'";
        $result = mysqli_query($con, $sql);
        $rows = $result->fetch_assoc();
        ?>
        <div class="info">
            <div class="teaminfo">
                <img src="<?php echo $rows['logo s']; ?>" class="dashimg">

            </div>
            <div style="    position: relative;
    left: 28rem;
    top: -5rem;">
                <h2 class="th"><?php echo $rows['tname s']; ?><span class="badge1 badge-warning"
                        style="color:red;">Pending!</span></h2>
            </div>
            <div style="    position: relative;
    left: 28rem;
    top: -4rem;">
                <label>Leader: <span><?php echo $rows['lname s']; ?></span></label>
            </div>
            <div style="    position: relative;
    top: -2rem;
    left: 26rem;">
                <ul style="    flex-direction: row;
    display: flex;
    gap: 2rem;">
                    <li>Avg Rank<br>
                        -

                    </li>
                    <li>Avg Kill<br>
                        -</li>
                    <li>Avg Survival Time<br>
                        -
                    </li>
                </ul>

            </div>

        </div>
        <div class="container" style="margin-top: 3rem;">
            <h2 class="section-subtitle">Team Members</h2>
            <div class="box" style="margin-top: 1rem;">
                <div class="card" style="width: 18rem;box-shadow: 2px 3px 4px 1px green;">
                    <img class="card-img-top" src="shadow.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $rows['p2 s']; ?></h5>

                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Avg Rank <span>-</span> </li>
                        <li class="list-group-item">Avg Kill <span>-</span> </li>
                        <li class="list-group-item">Avg Survive Time <span>-</span> </li>
                    </ul>

                </div>
                <div class="card" style="width: 18rem;box-shadow: 2px 3px 4px 1px green;">
                    <img class="card-img-top" src="shadow.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $rows['p3 s']; ?></h5>

                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Avg Rank <span>-</span> </li>
                        <li class="list-group-item">Avg Kill <span>-</span> </li>
                        <li class="list-group-item">Avg Survive Time <span>-</span> </li>
                    </ul>

                </div>
                <div class="card" style="width: 18rem;box-shadow: 2px 3px 4px 1px green;">
                    <img class="card-img-top" src="shadow.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $rows['p4 s']; ?></h5>

                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Avg Rank <span>-</span> </li>
                        <li class="list-group-item">Avg Kill <span>-</span> </li>
                        <li class="list-group-item">Avg Survive Time <span>-</span> </li>
                    </ul>

                </div>




            </div>

        </div>
    </div>
    <!-- quintet-->
    <div class="container dashquintet">
        <?php
        $user = $_SESSION['uname'];
        $sql = "SELECT * FROM entry Where user='$user'";
        $result = mysqli_query($con, $sql);
        $rows = $result->fetch_assoc();
        ?>
        <div class="info">
            <div class="teaminfo">
                <img src="<?php echo $rows['logo q']; ?>" class="dashimg">

            </div>
            <div style="    position: relative;
    left: 28rem;
    top: 1rem;">
                <h2 class="th"><?php echo $rows['tname q']; ?><span class="badge1 badge-warning"
                        style="color:red;">Pending!</span></h2>
            </div>
            <div style="    position: relative;
    left: 28rem;
    top: 2rem;">
                <label>Leader: <span><?php echo $rows['lname q']; ?></span></label>
            </div>
            <div style="    position: relative;
    
    left: 26rem;top:4rem;">
                <ul style="    flex-direction: row;
    display: flex;
    gap: 2rem;">
                    <li>Avg Rank<br>
                        -

                    </li>
                    <li>Avg Kill<br>
                        -</li>
                    <li>Avg Survival Time<br>
                        -
                    </li>
                </ul>

            </div>

        </div>
        <div class="container" style="margin-top: 3rem;">
            <h2 class="section-subtitle">Team Members</h2>
            <div class="box" style="margin-top: 1rem;flex-wrap:nowrap;">
                <div class="card" style="width: 18rem;box-shadow: 2px 3px 4px 1px green;">
                    <img class="card-img-top" src="shadow.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $rows['p2 q']; ?></h5>

                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Avg Rank <span>-</span> </li>
                        <li class="list-group-item">Avg Kill <span>-</span> </li>
                        <li class="list-group-item">Avg Survive Time <span>-</span> </li>
                    </ul>

                </div>
                <div class="card" style="width: 18rem;box-shadow: 2px 3px 4px 1px green;">
                    <img class="card-img-top" src="shadow.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $rows['p3 q']; ?></h5>

                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Avg Rank <span>-</span> </li>
                        <li class="list-group-item">Avg Kill <span>-</span> </li>
                        <li class="list-group-item">Avg Survive Time <span>-</span> </li>
                    </ul>

                </div>
                <div class="card" style="width: 18rem;box-shadow: 2px 3px 4px 1px green;">
                    <img class="card-img-top" src="shadow.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $rows['p4 q']; ?></h5>

                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Avg Rank <span>-</span> </li>
                        <li class="list-group-item">Avg Kill <span>-</span> </li>
                        <li class="list-group-item">Avg Survive Time <span>-</span> </li>
                    </ul>

                </div>
                <div class="card" style="width: 18rem;box-shadow: 2px 3px 4px 1px green;">
                    <img class="card-img-top" src="shadow.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $rows['p5 q']; ?></h5>

                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Avg Rank <span>-</span> </li>
                        <li class="list-group-item">Avg Kill <span>-</span> </li>
                        <li class="list-group-item">Avg Survive Time <span>-</span> </li>
                    </ul>

                </div>




            </div>

        </div>
    </div>

    <?php include ("footer.php"); ?>
    <?php //} ?>

</body>