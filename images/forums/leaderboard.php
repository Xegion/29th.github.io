<?php
    $servername = "elhs.co";
    $username = "primese1_user";
    $password = "km{JJ)a0cQo$";
    $dbname = "primese1_ttt";
    $db2name = "primese1_ttt";
    define('IN_MYBB', 1);
    require_once ("./global.php");

    function secondsToTime($seconds) {
        $dtF = new \DateTime('@0');
        $dtT = new \DateTime("@$seconds");
        return $dtF->diff($dtT)->format('%ad %hh %im');
    }

    $sortby = "pointshop_data.points";
    $sortdir = "DESC";
    $limit = 15;
    if(isset($_GET['sort'])){
        switch(strtolower($_GET['sort'])){
            case "name":
                $sortby = "name";
                break;
            case "time":
                $sortby = "play_time";
                break;
        }
    }

    if(isset($_GET['sortdir']) && $_GET['sortdir'] == "ASC"){
        $sortdir = "ASC";
    }

    if(isset($_GET['limit']) && is_numeric($_GET['limit'])){
        $limit = $_GET['limit'];
        if($limit > 50){
            $limit = 50;
        }
        if($limit < 1){
            $limit = 1;
        }
    }
?>

<html>
<title>Leaderboard - Prime Servers</title>
    <?php
            echo $headerinclude;
            echo $header;
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8",$username, $password);
            $conn->exec("SET time_zone=EST");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



    ?>

            <table class="tborder" border="0" cellspacing="1">

                <thead>
                    <tr>
                        <td class="thead" colspan="6">
                            <strong>Leaderboard</strong>
                        </td>
                    </tr>
                    <tr>
                        <td class="thead"><a href="?sort=name&sortdir=ASC">Name</a></td>
                        <td class="thead"><a href="?">Points</a></td>
                        <td class="thead"><a href="?sort=time">Time Played</a></td>
                    </tr>
                </thead>
                <tbody>
        <?php
            $st = $conn->query("SELECT sam_players.name,sam_players.play_time,pointshop_data.points from sam_players LEFT JOIN pointshop_data on sam_players.steamid = pointshop_data.steamid GROUP BY sam_players.name,pointshop_data.points,sam_players.play_time ORDER BY $sortby $sortdir LIMIT $limit");
            $rows = $st->fetchAll();
            $i = 0;

            foreach ($rows as $row) {

                $time = $row['play_time'];
                if(!$time){
                    $time = 0;
                }
                $i++;
        ?>
                    <tr class="trow1">
                    <td align="left" style="text-indent:5px;"><?php echo "$i . " . $row['name']; ?></td>
                    <td align="left" style="text-indent:5px;"><?php echo number_format($row['points']); ?></td>
                    <td align="left" style="text-indent:5px;"><?php echo secondsToTime($time);?></td>
                    </tr>
            <?php
                }
            ?>


                </tbody>
            </table>

        <?php
        } catch (PDOException $e) {
            echo "Connection Failed: ".$e->getMessage();
        }
        echo $footer;
        ?>
