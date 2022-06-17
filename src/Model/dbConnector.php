    <?php
/**
 * @file      Model/dbConnector.php
 * @brief     This file is to connect to the database and to create the queries
 * @author    Created by Ethann.SCHNEIDER
 * @version   03-JULY-2022
 */

/**
 * @brief This class is to connect to the database
 * @return PDO object
 */
function dbConnector(){
    if(!file_exists('Model/credential.csv')){
        die('credential.csv not found contact the administrator');
    }
    $f = fopen("Model/credential.csv", 'r');
    $row = fgetcsv($f);
    fclose($f);
    return new PDO($row[0].':host='.$row[1].';dbname='.$row[2].';port='.$row[3].';charset='.$row[4], $row[5], $row[6]);
}

/**
 * @brief This class is to make a select request
 * @param $query string The query to execute
 * @return array|string array of the result of the query or false if the query failed
 */
function querySelect($query){
    try {
        $db = dbConnector();

        $result = $db->prepare($query);
        $result->execute();
        $resultAll = $result->fetchAll();

        $db = null;

        return $resultAll;
    } catch (PDOException $e) {
        return false;
    }
}

/**
 * @brief This class is to make a insert request
 * @param $query string The query to execute
 * @return bool|string true if the query succeeded, false if the query failed
 */
function queryInsert($query){
    try {
        $db = dbConnector();

        $result = $db->prepare($query);
        $result->execute();

        $db = null;
        return true;
    }catch (PDOException $e) {
        return false;
    }
}