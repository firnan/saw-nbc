<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "test";

class mydb {
  public $rs, $result, $sql, $table_prefix, $tstart,
      $executedQueries, $queryTime, $dumpSQL, $queryCode;

public function mydb() {
    global $dbhost, $dbuser, $dbpassword, $dbname;
    $this->dbconfig['dbhost'] = $dbhost;
    $this->dbconfig['dbname'] = $dbname;
    $this->dbconfig['dbuser'] = $dbuser;
    $this->dbconfig['dbpass'] = $dbpassword;
  }

// ...
private function dbConnect() {
  $tstart = $this->getMicroTime();
  if(@!$this->rs = mysqli_connect($this->dbconfig['dbhost'], $this->dbconfig['dbuser'], $this->dbconfig['dbpass'], $this->dbconfig['dbname'])) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
  }
  $tend = $this->getMicroTime();
  $totaltime = $tend-$tstart;
  if($this->dumpSQL) {
    $this->queryCode .= sprintf("Database connection was created in %2.4f s", $totaltime)."";
  }
  $this->queryTime = $this->queryTime+$totaltime;
}
// ...
  public function dbQuery( $query ) {
    if( empty( $this->rs ) ) {
      $this->dbConnect();
    }
    $tstart = $this->getMicroTime();
    if(@!$result = mysqli_query( $this->rs, $query ) ) {
      die( "Execution of a query to the database failed " .$query ." " .mysqli_error() );
    }
    else {
      $tend = $this->getMicroTime();
      $totaltime = $tend-$tstart;
      $this->queryTime = $this->queryTime+$totaltime;
      $this->executedQueries = $this->executedQueries+1;
      if(count( $result) > 0 ) {
        return $result;
      } else {
        return false;
      }
    }
  }
}

// ...

// ...
//$server = "localhost";
//$username = "root";
//$password = "";
//$database = "test";
//$konek = mysql_connect($server, $username, $password) or die("Gagal konek ke server MySQL" .mysql_error());
//$bukadb = mysql_select_db($database) or die("Gagal membuka database $database" .mysql_error());
?>