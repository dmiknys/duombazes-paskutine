<?php
/** @Entity */
class Mokinys {

  /**
  *  @Id
  *  @Column(type="integer")
  *  @GeneratedValue
  */
  private $id;
  /** @Column(length=140) */
  private $vardas;
  /** @Column(length=140) */
  private $pavarde;
  /**
     * @ManyToOne(targetEntity="Burelis")
     * @JoinColumn(name="burelis_id", referencedColumnName="id")
     */
  private $burelis_id;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set vardas.
     *
     * @param string $vardas
     *
     * @return Mokinys
     */
    public function setVardas($vardas)
    {
        $this->vardas = $vardas;

        return $this;
    }

    /**
     * Get vardas.
     *
     * @return string
     */
    public function getVardas()
    {
        return $this->vardas;
    }

    /**
     * Set pavarde.
     *
     * @param string $pavarde
     *
     * @return Mokinys
     */
    public function setPavarde($pavarde)
    {
        $this->pavarde = $pavarde;

        return $this;
    }

    /**
     * Get pavarde.
     *
     * @return string
     */
    public function getPavarde()
    {
        return $this->pavarde;
    }

    /**
     * Set burelisId.
     *
     * @param \Burelis|null $burelisId
     *
     * @return Mokinys
     */
    public function setBurelisId(\Burelis $burelisId = null)
    {
        $this->burelis_id = $burelisId;

        return $this;
    }

    /**
     * Get burelisId.
     *
     * @return \Burelis|null
     */
    public function getBurelisId()
    {
        return $this->burelis_id;
    }
}
