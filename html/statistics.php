<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Sales Analysis - 2022</title>
        <!-- CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" />
        <link rel="stylesheet" href="../css/style_stat.css"/>
        <link rel="shortcut icon" href="../img/free-bar-chart-icon-676-thumb.png">
        <!-- JavaScripts -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class="container-fluid text-light">
            <div class="row">
                <div class="col-md-2 bg-menu">
                    <div class="logo">
                        <img src="../img/logo2.png">
                        <h4>SalesAnalysis</h4>
                    </div>
                    <br><br><br><br><br>
                    <div class="menu">
                        <ul class="nav flex-column mb-0">
                            <li class="nav-item">
                                <a href="./index.html" class="nav-link section">
                                    <i class="fa fa-th-large mr-3 fa-fw"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link section">
                                    <i class='fa fa-calendar mr-3 fa-fw'></i>
                                    Calendar
                                </a>
                            </li>
                            <li class="nav-item">
                              <a href="#" class="nav-link section">
                                <i class='fas fa-chart-bar mr-3 fa-fw'></i>
                                        Statistic
                                    </a>
                            </li>
                            <li class="nav-item">
                              <a href="#" class="nav-link section">
                                <i class='fa fa-envelope mr-3 fa-fw'></i>
                                        Messages
                                    </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link section">
                                    <i class='fas fa-user-shield mr-3 fa-fw'></i>
                                          Help
                                      </a>
                            </li>
                            <li class="nav-item">
                                <a href="./settings.html" class="nav-link section">
                                    <i class='fa fa-user-circle mr-3 fa-fw'></i>
                                        Settings
                                      </a>
                            </li>
                          </ul>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="container">
                        <!--Partie Youness-->
                        <!--Dashboard Search Profile-->
                        <div class="row">
                            <!--Dashboard-->
                            <div class="col-md-4 pt-5 pb-5"> 
                                <h2>Statistics</h2>
                            </div>
                            <div class="col-md- pt-5 pb-5">
                            <!--SearchBar-->
                                <div class="input-group">
                                    <input class="form-control rounded-pill py-2 pr-5 mr-1 border-0" type="search" value="search" id="example-search-input1">
                                    <span class="input-group-append">
                                        <div class="input-group-text border-0 bg-transparent ml-n5"><i class="fa fa-search"></i></div>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-4 pt-5 profile pr-5 pb-5">
                            <!--Profile-->
                                <div class="icons">
                                    <img class="" src="../img/notif.png" style="width: 15%;">
                                    <a href="./signup.html">
                                        <img src="../img/memoji-iphone-ios-13-modified.png" style="width: 10%;"">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!--Map representation-->
                    <div class="container graph">
                        <?php
                        $user="root";
                        $pass="root";
                            try {
                                $dbh = new PDO('mysql:host=localhost;dbname=vente', $user, $pass);
                                foreach($dbh->query('SELECT * from client') as $row) {
                                    print_r($row);
                                    print("</br>");
                                }
                                $dbh = null;
                            } catch (PDOException $e) {
                                print "Erreur !: " . $e->getMessage() . "<br/>";
                                die();
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>