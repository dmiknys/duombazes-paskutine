<?php
/** @Entity */
class Administratorius {

  /**
  *  @Id
  *  @Column(type="integer")
  *  @GeneratedValue
  */
  private $id;
  /** @Column(length=140) */
  private $username;


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
     * Set username.
     *
     * @param string $username
     *
     * @return Administratorius
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username.
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }
}
