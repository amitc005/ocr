<?php

error_reporting(0);
session_start();

class MysqlConnection {

    static function connect() {
        $mysqlCon = mysql_connect("localhost:3306", "root", "");
        mysql_select_db("dn_phr", $mysqlCon);
    }

    /**
     * @param input $query
     * @return primary key for the table
     */
    static function executeQuery($query) {
        MysqlConnection::connect();
        return mysql_query($query);
    }

    /**
     * @param data
     * input the data for posted data
     * it automatically generate and insert the values
     * but name of the database colum must equal to name of the element field
     */
    static function insert($tbl = "", $data = array()) {
        try {
            $str = "";
            $keysset = "";
            $valuesset = "";
            foreach ($data as $key => $values) {
                $keysset.= "`" . $key . "`,";
                $valuesset.= "'" . trim($values) . "',";
            }
            echo $query = " INSERT INTO $tbl (" . substr($keysset, 0, strlen($keysset) - 1) . ") VALUES (" . substr($valuesset, 0, strlen($valuesset) - 1) . ");";
            MysqlConnection::executeQuery($query);
            return mysql_insert_id();
        } catch (Exception $exc) {
            echo "<span style='color:red'>SQL QUERY ERROR !!! INSERT !!!<span>";
        }
    }

    /**
     * @param string $tbl table name
     * @param string $data array of the table
     * @return string boolean values
     */
    static function edit($tbl = "", $data = array(), $pkcolumn) {
        $pkvalue = $data[$pkcolumn];
        unset($data[$pkcolumn]);
        try {
            $str = "";
            $update = "";
            foreach ($data as $key => $values) {
                $update.= "`" . $key . "` = " . "'" . trim($values) . "',";
            }
            $query = " UPDATE $tbl SET " . substr($update, 0, strlen($update) - 1) . " WHERE $pkcolumn = $pkvalue; ";
            return MysqlConnection::executeQuery($query);
        } catch (Exception $exc) {
            echo "<span style='color:red'>SQL QUERY ERROR !!! EDIT !!!<span>";
        }
    }

    /**
     *
     * @param String $tbl table name
     * @param int  $id primary key of the table
     */
    static function delete($tbl = "", $id = '', $pkcolumn) {
        try {
//            $query = "DELETE FROM $tbl WHERE $pkcolumn=  " . base64_decode($id);
            $query = "UPDATE $tbl SET txtIsDelete = '1'  WHERE $pkcolumn=  " . base64_decode($id);
            MysqlConnection::executeQuery($query);
        } catch (Exception $exc) {
            echo "<span style='color:red'>SQL QUERY ERROR !!! DELETE !!!<span>";
        }
    }

    /**
     * @param resource $resource
     * @return array
     */
    static function toArrays($resource) {
        $arrayList = array();
        while ($rows = mysql_fetch_assoc($resource)) {
            array_push($arrayList, $rows);
        }
        return $arrayList;
    }

    /**
     * @param String $tbl
     * @param Array $sql
     * @return Array
     */
    static function fetchAll($tbl, $sql = array()) {
        $query = "SELECT * FROM $tbl where  txtIsDelete = '0'  ";
        $resource = MysqlConnection::executeQuery($query);
        return MysqlConnection::toArrays($resource);
    }

    /**
     *
     * @param String $tbl
     * @param String $pkvalue
     * @return type
     */
    static function fetchByPrimary($tbl, $pkvalue, $pkcolumn) {
        $query = "SELECT * FROM $tbl WHERE $pkcolumn = $pkvalue AND  txtIsDelete = '0' ";
        $resource = MysqlConnection::executeQuery($query);
        $result = MysqlConnection::toArrays($resource);
        return $result[0];
    }

    /**
     *
     * @param String $tbl table name a
     * @param Array $data data posted from text field
     * @param Array $sql condition such as limit order by
     * @return Aray
     */
    static function fetchByFilter($tbl, $data = array(), $sql = array()) {
        $str = "";
        $srno = 1;
        foreach ($data as $kyes => $values) {
            if (trim($values) != "") {
                $str.= " `$kyes` LIKE '%$values%' AND ";
                $srno++;
            }
        }
        $search = "AND";
        if (( $pos = strrpos($str, $search) ) !== false) {
            $search_length = strlen($search);
            $str = " AND " . substr_replace($str, "", $pos, $search_length);
        }
        $query = "SELECT * FROM   $tbl   WHERE txtIsDelete = '0' " . $str . "" . $sql["order"] . "" . $sql["limit"] . "";
        $resource = MysqlConnection::executeQuery($query);
        return MysqlConnection::toArrays($resource);
    }

    static function fetchCustom($query) {
        $resource = MysqlConnection::executeQuery($query);
        return MysqlConnection::toArrays($resource);
    }

    static function exchangeArray($POST, $unset_array = array()) {
        foreach ($unset_array as $keys) {
            unset($POST[$keys]);
        }
        return $POST;
    }

    static function uploadFile($objfile, $destination) {
        $modifiedName = str_replace(" ", "_", $objfile["name"]);
        $fname = $destination . time() . "_" . $modifiedName;
        move_uploaded_file($objfile["tmp_name"], $fname);
        return empty($objfile["name"]) ? "" : $fname;
    }

}

?>
