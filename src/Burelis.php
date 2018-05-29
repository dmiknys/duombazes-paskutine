<?php
/** @Entity */
class Burelis {
  /**
  *  @Id
  *  @Column(type="integer")
  *  @GeneratedValue
  */
  private $id;
  /** @Column(length=140) */
  private $pavadinimas;


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
     * Set pavadinimas.
     *
     * @param string $pavadinimas
     *
     * @return Burelis
     */
    public function setPavadinimas($pavadinimas)
    {
        $this->pavadinimas = $pavadinimas;

        return $this;
    }

    /**
     * Get pavadinimas.
     *
     * @return string
     */
    public function getPavadinimas()
    {
        return $this->pavadinimas;
    }
}
