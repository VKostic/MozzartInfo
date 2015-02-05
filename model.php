<?php

class Model {
    var $pdo = null;
    var $tpl = null;
    var $dbname = 'problemb_vkostic';
    var $dbhost = 'localhost';
    var $dbpass = 'e}6)DQTpyGWK';
    var $dbuser = 'problemb_vkostic';
    var $dbtype = 'mysql';
    
    function __construct() {
        try {
            $dsn = "{$this->dbtype}:host={$this->dbhost};dbname={$this->dbname}";
            $this->pdo = new PDO($dsn, $this->dbuser, $this->dbpass,
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        } catch (PDOException $ex) {
            print "Greška!: " . $ex->getMessage();
            die();
        }
        
        $this->tpl = new Model_Smarty;
    }
    
    function display() {
        $this->tpl->display('index.tpl');
    }
    
    function getRecords() {
        try {
            foreach ($this->pdo->query("select * from mozzart") as $row) {
                $rows[] = $row;
            }
        } catch (PDOException $ex) {
            print "Greška!: " . $ex->getMessage();
            return false;
        }
        return $rows;
    }
    
    function displayList($data = array()) {
        $this->tpl->assign('data', $data);
        $this->tpl->display('list.tpl');
    }
    
    function displayInsert() {
        $this->tpl->display('insert.tpl');
    }
    
    function insertRecord($record) {
        try {
            $rh = $this->pdo->prepare("insert into mozzart values"
                    . "(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
            $rh->execute(array($record['rednibroj'], $record['id'],
                $record['naziv'], $record['grad'], $record['adresa'],
                $record['drzava'], $record['koordinate'], $record['menadzer'],
                $record['asistent'], $record['telefon'],
                $record['radnovreme'], $record['rulet'], $record['simfonija'],
                $record['galerija'], $record['mozzartkafic']));
            print "Uspešno ste uneli zapis.";
        } catch (PDOException $ex) {
            print "Greška!: " . $ex->getMessage();
            return false;
        }
        return true;
    }
    
    function deleteRecord($del) {
        try {
            $this->pdo->query("delete from mozzart where RedniBroj = $del");
            print "Uspešno ste izbrisali zapis.";
        } catch (PDOException $ex) {
            print "Greška!: " . $ex->getMessage();
            return false;
        }
        return true;
    }
    
    function displayRecord($edt) {
        try {
            $rh = $this->pdo->prepare("select * from mozzart where"
                    . " RedniBroj = $edt");
            $rh->execute();
            $result = $rh->fetch(PDO::FETCH_ASSOC);
            $this->tpl->assign('result', $result);
            $this->tpl->display('edit.tpl');
        } catch (PDOException $ex) {
            print "Greška!: " . $ex->getMessage();
            return false;
        }
        return true;
    }
    
    function editRecord($record) {
        try {
            $this->pdo->query("update mozzart set RedniBroj ="
                    . "'".$record['rednibroj']."',"
                    . "ID = '".$record['id']."',"
                    . "Naziv = '".$record['naziv']."',"
                    . "Grad = '".$record['grad']."',"
                    . "Adresa = '".$record['adresa']."',"
                    . "Drzava = '".$record['drzava']."',"
                    . "Koordinate = '".$record['koordinate']."',"
                    . "Menadzer = '".$record['menadzer']."',"
                    . "Asistent = '".$record['asistent']."',"
                    . "Telefon = '".$record['telefon']."',"
                    . "RadnoVreme = '".$record['radnovreme']."',"
                    . "Rulet = '".$record['rulet']."',"
                    . "Simfonija = '".$record['simfonija']."',"
                    . "Galerija = '".$record['galerija']."',"
                    . "MozzartKafic = '".$record['mozzartkafic']."'"
                    . "where RedniBroj = '".$record['rednibroj']."'");
            print "Uspešno ste promenili podatke.";
        } catch (PDOException $ex) {
            print "Greška!: " . $ex->getMessage();
            return false;
        }
        return true;
    }
    
    function search($search, $field) {
        try {
            foreach ($this->pdo->query("select ID, Naziv from mozzart where"
                    . "($field) like '%".$search."%'")as $row) {
                $rows[] = $row;
            }
            if (empty($rows)) {
                print "Nema podataka";
                $this->tpl->display('index.tpl');
            } else {
                $this->tpl->assign('search', $search);
                $this->tpl->assign('rows', $rows);
                $this->tpl->display('searchResult.tpl');
            }
        } catch (PDOException $ex) {
            print "Greška!: " . $ex->getMessage();
            return false;
        }
        return true;
    }
    
    function viewSearchRecord($id) {
        try {
            $rh = $this->pdo->query("select * from mozzart where"
                    . " ID = $id");
            $rh->execute();
            $result = $rh->fetch(PDO::FETCH_ASSOC);
            $this->tpl->assign('result', $result);
            $this->tpl->display('resultView.tpl');
        } catch (PDOException $ex) {
            print "Greška!: " . $ex->getMessage();
            return false;
        }
        return true;
    }
    
    function checkKey($record) {
        foreach ($this->pdo->query("select RedniBroj from mozzart") as $row) {
            if (in_array($record['rednibroj'], $row)) {
                print "Redni broj postoji!";
                $this->tpl->assign('record', $record);
                $this->tpl->display('returnInsert.tpl');
                return false;
            }
        }
        return true;
    }
    
    function checkSearch($search, $field) {
        if (preg_match_all("/^[a-zA-Z0-9ĐđŠšŽžČčĆć]+/", $_POST['search'])) {
            $this->search($search, $field);
        } else {
            print "Nedozvoljen unos!";
            $this->tpl->display('index.tpl');
        }
    }
}

