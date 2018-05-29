<?php
/** @Entity */
class Uzsiemimas {

  /**
  *  @Id
  *  @Column(type="integer")
  *  @GeneratedValue
  */
  private $id;
  /**  @Column(type="datetime")  */
  private $laikas;
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
     * Set laikas.
     *
     * @param \DateTime $laikas
     *
     * @return Uzsiemimas
     */
    public function setLaikas($laikas)
    {
        $this->laikas = $laikas;

        return $this;
    }

    /**
     * Get laikas.
     *
     * @return \DateTime
     */
    public function getLaikas()
    {
        return $this->laikas;
    }

    /**
     * Set burelisId.
     *
     * @param \Burelis|null $burelisId
     *
     * @return Uzsiemimas
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
