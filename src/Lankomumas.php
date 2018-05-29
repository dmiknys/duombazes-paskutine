<?php
/** @Entity */
class Lankomumas {

  /**
  *  @Id
  *  @Column(type="integer")
  *  @GeneratedValue
  */
  private $id;
  /**
     * @ManyToOne(targetEntity="Mokinys")
     * @JoinColumn(name="mokinys_id", referencedColumnName="id")
     */
  private $mokinys_id;
  /**
     * @ManyToOne(targetEntity="Uzsiemimas")
     * @JoinColumn(name="uzsiemimas_id", referencedColumnName="id")
     */
  private $uzsiemimas_id;
  /**
     * @Column(type="boolean")
     */
  private $lankomumas;



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
     * Set lankomumas.
     *
     * @param bool $lankomumas
     *
     * @return Lankomumas
     */
    public function setLankomumas($lankomumas)
    {
        $this->lankomumas = $lankomumas;

        return $this;
    }

    /**
     * Get lankomumas.
     *
     * @return bool
     */
    public function getLankomumas()
    {
        return $this->lankomumas;
    }

    /**
     * Set mokinysId.
     *
     * @param \Mokinys|null $mokinysId
     *
     * @return Lankomumas
     */
    public function setMokinysId(\Mokinys $mokinysId = null)
    {
        $this->mokinys_id = $mokinysId;

        return $this;
    }

    /**
     * Get mokinysId.
     *
     * @return \Mokinys|null
     */
    public function getMokinysId()
    {
        return $this->mokinys_id;
    }

    /**
     * Set uzsiemimasId.
     *
     * @param \Uzsiemimas|null $uzsiemimasId
     *
     * @return Lankomumas
     */
    public function setUzsiemimasId(\Uzsiemimas $uzsiemimasId = null)
    {
        $this->uzsiemimas_id = $uzsiemimasId;

        return $this;
    }

    /**
     * Get uzsiemimasId.
     *
     * @return \Uzsiemimas|null
     */
    public function getUzsiemimasId()
    {
        return $this->uzsiemimas_id;
    }
}
