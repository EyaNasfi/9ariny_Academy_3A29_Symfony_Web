<?php
class Reserve
{
    private ?int $Idreserve = null;
    private ?string $Nclient = null;
    private ?string $Tarife = null;
    private ?string $Stat = null;
    private ?DateTime $Datereserve = null;

    public function __construct($Idreserve = null, $Nclient, $Tarife, $Stat, $Datereserve)
    {
        $this->Idreserve = $Idreserve;
        $this->Nclient = $Nclient;
        $this->Tarife = $Tarife;
        $this->Stat = $Stat;
        $this->Datereserve = $Datereserve;
    }

    /**
     * Get the value of Idreserve
     */
    public function getIdreserve()
    {
        return $this->Idreserve;
    }

    /**
     * Get the value of Nclient
     */
    public function getNclient()
    {
        return $this->Nclient;
    }

    /**
     * Set the value of Nclient
     *
     * @return  self
     */
    public function setNclient($Nclient)
    {
        $this->Nclient = $Nclient;

        return $this;
    }

    /**
     * Get the value of Tarife
     */
    public function getTarife()
    {
        return $this->Tarife;
    }

    /**
     * Set the value of Tarife
     *
     * @return  self
     */
    public function setTarife($Tarife)
    {
        $this->Tarife = $Tarife;

        return $this;
    }

    /**
     * Get the value of Stat
     */
    public function getStat()
    {
        return $this->Stat;
    }

    /**
     * Set the value of Stat
     *
     * @return  self
     */
    public function setStat($Stat)
    {
        $this->Stat = $Stat;

        return $this;
    }

    /**
     * Get the value of Datereserve
     */
    public function getDatereserve()
    {
        return $this->Datereserve;
    }

    /**
     * Set the value of Datereserve
     *
     * @return  self
     */
    public function setDatereserve($Datereserve)
    {
        $this->Datereserve = $Datereserve;

        return $this;
    }
}
