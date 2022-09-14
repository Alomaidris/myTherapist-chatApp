<?php

/**
 *
 */
class Query extends DB
{

  public function select($sql)
  {
    $stmt = $this->DBconnect->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function insert($table, $data)
  {
    $keys = implode(',', array_keys($data));
    $values = ":".implode(",:", array_keys($data));

    $sql = "INSERT INTO $table($keys) VALUES ($values)";
    $stmt = $this->DBconnect->prepare($sql);

    foreach ($data as $key => $value) {
      $stmt->bindValue(":$key",$value);
    }
    return $stmt->execute();
  }

  public function update($table, $data, $cond)
  {
    $keys = '';
    foreach ($data as $key => $value) {
      $keys .= "$key=:$key,";
    }
    $keys = rtrim($keys,",");

    $sql = "UPDATE $table SET $keys WHERE $cond ";
    $stmt = $this->DBconnect->prepare($sql);
    foreach ($data as $key => $value) {
      $stmt->bindValue(":$key",$value);
    }
    return $stmt->execute();
  }

  public function table_row_count($sql)
  {
    $stmt = $this->DBconnect->prepare($sql);
    $stmt->execute();
    return $stmt->rowCount();
  }
  
  public function delete($sql){
    $stmt = $this->DBconnect->prepare($sql);
    return $stmt->execute();
  }

  public function date_string ($time)
  {
    $now = new DateTime($time);
    $ymdNow = $now->format("M,d,Y h:i:s A");
    return $ymdNow;
  }


  public function title()
  {
      global $title;
      if(isset($title)){
          echo $title;
      }
      else{
          echo 'Default';
      }
  }

}



?>
