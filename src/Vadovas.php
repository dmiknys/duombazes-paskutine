<?php
/** @Entity */
class Vadovas {

  /**
  *  @Id
  *  @Column(type="integer")
  *  @GeneratedValue
  */
  private $id;
  /** @Column(length=140) */
  private $vardas;


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
     * @return Vadovas
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
}
