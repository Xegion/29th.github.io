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
    function toCommunityID($id) {
        if (preg_match('/^STEAM_/', $id)) {
            $parts = explode(':', $id);
            return bcadd(bcadd(bcmul($parts[2], '2'), '76561197960265728'), $parts[1]);
        } elseif (is_numeric($id) && strlen($id) < 16) {
            return bcadd($id, '76561197960265728');
        } else {
            return $id; // We have no idea what this is, so just return it.
        }
    }
?>

<html>
<title>Staff - Prime Servers</title>
<style>.thead{text-align:center;}</style>
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
                            <strong>Staff</strong>
                        </td>
                    </tr>
                    <tr>
                        <td class="thead">Name (SteamID)</td>
                        <td class="thead">Rank</td>
                        <td class="thead">Time Played</td>
                        <td class="thead">Last Played</td>
                        <td class="thead">Claims (Weekly)</td>
                        <td class="thead">Claims (Total)</td>

                    </tr>
                </thead>
                <tbody>
    <?php

            $st = $conn->prepare("SELECT name FROM sam_ranks WHERE immunity >= 10 ORDER BY immunity DESC");
            $st->execute();
            $ranks = $st->fetchAll();
                $st = $conn->prepare("SELECT name, steamid, play_time, FROM_UNIXTIME(last_join, '%c/%e/%y %l:%i %p') AS last_played, IFNULL(s.sits, 0) AS weekly_sits, IFNULL(p.sits, 0) AS total_sits
                                FROM sam_players
                                LEFT JOIN (
                                    SELECT admin AS admin_steamid, COUNT(unique_id) as sits
                                    FROM awarn_warnings
                                    WHERE date > DATE(DATE_SUB(NOW(), INTERVAL DAYOFWEEK(NOW())-1 DAY))
                                    GROUP BY admin
                                ) s ON s.admin_steamid = sam_players.steamid
                                LEFT JOIN (
                                    SELECT admin AS admin_steamid, COUNT(unique_id) as sits
                                    FROM awarn_warnings GROUP BY admin
                                ) p ON p.admin_steamid = sam_players.steamid
                                WHERE rank = ?;");
            foreach ($ranks as $rank) {
                $st->execute(array($rank["name"]));
                if (!($st->rowCount() > 0)) { continue; }

                foreach ($st->fetchAll() as $row) {
                    $time = $row['play_time'];

                    if(!$time){
                        $time = 0;
                    }
                ?>
                    <tr class="trow1">
                    <td align="center"><?php echo "<a target='_blank' href='https://steamcommunity.com/profiles/" . toCommunityID($row['steamid']) . "'>" . $row["name"] . "</a>"; ?> (<?php echo $row["steamid"]; ?>)</td>
                    <td align="center"><?php echo $rank["name"]; ?></td>
                    <td align="center"><?php echo secondsToTime($time); ?></td>
                    <td align="center"><?php echo $row["last_played"]; ?></td>
                    <td align="center"><?php echo $row["weekly_sits"]; ?></td>
                    <td align="center"><?php echo $row["total_sits"]; ?></td>

                    </tr>
                <?php
                    }
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
