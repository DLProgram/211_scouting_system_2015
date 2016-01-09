<?php
	include("connect.php");
	function getTeams($match_num, $team_color){
		global $conn;
		$q = "SELECT * FROM matches WHERE matchnum=$match_num;";
		$result = mysqli_query($conn, $q);
		$row = mysqli_fetch_assoc($result);
		if (!isset($row[$team_color])){
			return NULL;
		}
		return $row[$team_color];
	}
	function getField($match_num){
		global $conn;
		$q = "SELECT * FROM matches WHERE matchnum=$match_num;";
		$result = mysqli_query($conn, $q);
		$row = mysqli_fetch_assoc($result);
		if (!isset($row["field"])){
			return NULL;
		}
		return $row["field"];
	}
?>