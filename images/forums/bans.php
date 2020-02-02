<?php

    $servername = "elhs.co";

    $username = "primese1_user";

    $password = "km{JJ)a0cQo$";

    $dbname = "primese1_ttt";

    define('IN_MYBB', 1);

    require_once ("./global.php");

    echo $headerinclude;

    echo $header;





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

    $time = time();

	$page = 1;



	if(isset($_GET['page']) && is_numeric($_GET['page']) && $_GET['page'] >= 1){

		$page = (int) $_GET['page'];

	}



?>

<title>Bans - Prime Servers</title>

<style>.thead{text-align:center;}</style>

    <?php

        try {

            $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8",$username, $password);

            $conn->exec("SET time_zone=EST");

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



            $searchterm = "%".$_REQUEST["search"]."%";

			$pagemin = ($page-1) * 25;



			$numpages = $conn->prepare("SELECT COUNT(unban_date) FROM sam_bans_archive WHERE steamid LIKE ? OR admin LIKE ?");

			$numpages->execute(array($searchterm, $searchterm));

			if($numpages){

				$numpages = ceil((float)($numpages->fetchColumn()) / 25.0);

			}



      $st = $conn->prepare("SELECT sam_bans_archive.id, p.name AS name, sam_bans_archive.steamid, reason, admin, s.name AS adminName, FROM_UNIXTIME(start_date, '%c/%e/%y %l:%i %p') AS startformat, start_date, unban_date
        FROM sam_bans_archive
        LEFT JOIN (
          SELECT name, steamid FROM sam_players
        ) p ON p.steamid = sam_bans_archive.steamid
        LEFT JOIN (
          SELECT name, steamid FROM sam_players
        ) s ON s.steamid = sam_bans_archive.admin
        WHERE p.name LIKE ? OR sam_bans_archive.steamid LIKE ? OR admin LIKE ?
        ORDER BY start_date
        DESC LIMIT ?,25;");

			$st->bindParam(1, $searchterm);

			$st->bindParam(2, $searchterm);

			$st->bindParam(3, $searchterm);

			$st->bindParam(4, $pagemin, PDO::PARAM_INT);

            $st->execute();

            $st2 = $conn->prepare("SELECT COUNT(*) AS `exists` FROM sam_bans WHERE id=?");

            ?>



        <div id="content" style="margin-bottom:20px;">

            <table class="tborder" border="0" cellspacing="1">

                    <thead>

                        <tr>

                            <td class="thead" colspan="6">

                                <strong style="line-height:37px">Bans</strong>

                                <form style="float:right;" method="GET">

                                    <input type="text" style="height:35px; background-color:#282828; color:white; border: solid 1px #000000;" name="search" placeholder="  Search by SteamID">

                                    <input type="submit" value="Go" class="button">

                                </form>

                            </td>

                        </tr>

                        <tr>

                            <td class="thead">Date</td>

                            <td class="thead">Player (SteamID)</td>

                            <td class="thead">Reason</td>

                            <td class="thead">Length</td>

                            <td class="thead">Staff</td>

			                      <td class="thead">Status</td>

                        </tr>

                    </thead>

                    <tbody>

                    <?php

                    foreach ($st->fetchAll() as $row) {

                        $st2->execute(array($row['id']));

                        $row2 = $st2->fetchAll()[0];

                        if($row2 && $row['unban_date'] > date("U") || $row['unban_date'] == 0){

                            $isbanned = $row2['exists'] != 0 ? "Banned" : "Unbanned";

                        }elseif($row['unban_date'] <= date("U")){

                            $isbanned = "Unbanned";

                        }else{

                            $isbanned = "error";

                        }





                    ?>

                        <tr class="trow1">

                            <td align="center"><?php echo $row["startformat"] ?> EST</td>

                            <td align="center"><a target="_blank" href="https://steamcommunity.com/profiles/<?php echo toCommunityID($row["steamid"]) ?>"><?php echo htmlspecialchars($row["name"])?></a> (<?php echo $row["steamid"] ?>)</td>

                            <td align="center"><?php echo htmlspecialchars($row["reason"]) ?></td>

                            <td align="center">



                            <?php

                            if ($row["unban_date"] == 0) {

                                echo "Permanent";

                            } else {

								echo secondsToTime($row["unban_date"]-$row["start_date"]);

                            }

                            ?>



                            </td>

                            <td align="center">

                              <?php if ($row["admin"] == "Console") {

                                echo "Console";

                              } else { ?>

                              <a target="_blank" href="https://steamcommunity.com/profiles/<?php echo toCommunityID($row["admin"]) ?>"><?php echo htmlspecialchars($row["adminName"])?></a> (<?php echo htmlspecialchars($row["admin"]) ?>)

                              <?php } ?>

                            </td>

                            <td align="center"><?php

                                echo $isbanned;

                            ?></td>

                        </tr>

                    <?php } ?>



                    </tbody>

            </table>

			<div style="margin-top:15px;">

				<?php

				if($numpages > 1){

					if($page > 1){

						echo "<a href=\"/bans.php?page=", ($page-1), "&search=", $_REQUEST["search"], "\">< </a>";

					}

					echo "<span>Page $page/$numpages </span>";

					if($page < $numpages){

						echo "<a href=\"/bans.php?page=", ($page+1),"&search=",$_REQUEST["search"], "\">></a>";

					}

				}

				?>

			</div>

        </div>



        <?php

        } catch (PDOException $e) {

            echo "Connection Failed: ".$e->getMessage();

        }

            echo $footer;

        ?>
