<?php
include '../config.php';
include '../Mode/Reserve.php';

class ReserveR
{
    public function listereserve()
    {
        $sql = "SELECT * FROM Reserve";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function Deletereserve($Idreserve)
    {
        $sql = "DELETE FROM Reserve WHERE Idreserve = :Idreserve";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':Idreserve', $Idreserve);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addreserve($Reserve)
    {
        $sql = "INSERT INTO Reserve  
        VALUES (NULL, :Nclient,:Tarife, :Stat,:Datereserve)";
        $db = config::getConnexion();
        try {
            print_r($Reserve->getDatereserve()->format('Y-m-d'));
            $query = $db->prepare($sql);
            $query->execute([
                'Nclient' => $Reserve->getNclient(),
                'Tarife' => $Reserve->getTarife(),
                'Stat' => $Reserve->getStat(),
                'Datereserve' => $Reserve->getDatereserve()->format('Y/m/d')
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function Updatereserve($Reserve, $Idreserve)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE Reserve SET 
                   Nclient = :Nclient, 
                   Tarife= :Tarife, 
                   Stat = :Stat, 
                   Datereserve = :Datereserve
                WHERE Idreserve= :Idreserve'
            );
            $query->execute([
                'Idreserve' => $Idreserve,
                'Nclient' => $Reserve->getNclient(),
                'Tarife' => $Reserve->getTarife(),
                'Stat' => $Reserve->getStat(),
                'Datereserve' => $Reserve->getDatereserve()->format('Y/m/d')
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showReserve($Idreserve)
    {
        $sql = "SELECT * from Reserve where Idreserve = $Idreserve";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $Resereve = $query->fetch();
            return $Resereve;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
