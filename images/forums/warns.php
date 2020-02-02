<?php
    $servername = "elhs.co";
    $username = "primese1_user";
    $password = "km{JJ)a0cQo$";
    $dbname = "primese1_ttt";
    define('IN_MYBB', 1);
    require_once ("./global.php");
    echo $headerinclude;
    echo $header;

	$page = 1;
	
	if(isset($_GET['page']) && is_numeric($_GET['page']) && $_GET['page'] >= 1){
		$page = (int) $_GET['page'];
	}
 
?>
<title>Warns - Prime Servers</title>
<style>.thead{text-align:center;}</style>
    <?php
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8",$username, $password);
            $conn->exec("SET time_zone=EST");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
			$pagemin = ($page-1) * 25;
			
			$numpages = $conn->prepare("SELECT COUNT(reason) FROM awarn_warnings");
			$numpages->execute();
			if($numpages){
				$numpages = ceil((float)($numpages->fetchColumn()) / 25.0);
			}
			
			if(isset($_GET['search'])){
			    $st = $conn->prepare("SELECT * FROM awarn_warnings WHERE unique_id=? LIMIT $pagemin,25;");
			    $st->bindParam(1, $_GET['search']);
			}else{
			    $st = $conn->prepare("SELECT * FROM awarn_warnings ORDER BY date DESC LIMIT $pagemin,25;");
			}
            $st->execute();
            
            $st2 = $conn->prepare("SELECT playername FROM awarn_offlinedata WHERE unique_id=?");

            ?>
 
        <div id="content" style="margin-bottom:20px;">
            <table class="tborder" border="0" cellspacing="1">
                    <thead>
                        <tr>
                            <td class="thead" colspan="6">
                                <strong style="line-height:37px">Warns</strong>
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
                            <td class="thead">Staff</td>
                            <td class="thead">Server</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($st->fetchAll() as $row) {
                        $st2->execute(array($row['unique_id']));
                        $row2 = $st2->fetchAll();
                        
                        
                    ?>
                        <tr class="trow1">
                            <td align="center"><?php echo $row["date"] ?> EST</td>
                            <td align="center"><a target="_blank" href="https://steamcommunity.com/profiles/<?php echo $row["unique_id"] ?>"><?php echo $row2[0]['playername'];?></a> (<?php echo $row["unique_id"] ?>)</td>
                            <td align="center"><?php echo htmlspecialchars($row["reason"]) ?></td>
                            <td align="center"><?php echo htmlspecialchars($row['admin']); ?></td>
                            <td align="center"><?php echo $row['server'] ?></td>
                        </tr>
                    <?php } ?>
 
                    </tbody>
            </table>
			<div style="margin-top:15px;">
				<?php 
				if($numpages > 1){
					if($page > 1){ 
						echo "<a href=\"http://primeservers.co/forums/warns.php?page=", ($page-1), $_REQUEST["search"], "\">< </a>";
					}					
					echo "<span>Page $page/$numpages </span>";
					if($page < $numpages){
						echo "<a href=\"http://primeservers.co/forums/warns.php?page=", ($page+1), "\">></a>"; 
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