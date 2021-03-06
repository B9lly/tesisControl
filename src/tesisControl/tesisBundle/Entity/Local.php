<?php

namespace tesisControl\tesisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Local
 *
 * @ORM\Table(name="local", uniqueConstraints={@ORM\UniqueConstraint(name="local_pk", columns={"id_local"})})
 * @ORM\Entity
 */
class Local
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_local", type="string", length=8, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="local_id_local_seq", allocationSize=1, initialValue=1)
     */
    private $idLocal;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_local", type="string", length=50, nullable=true)
     */
    private $nombreLocal;



    /**
     * Get idLocal
     *
     * @return string 
     */
    public function getIdLocal()
    {
        return $this->idLocal;
    }

    /**
     * Set nombreLocal
     *
     * @param string $nombreLocal
     * @return Local
     */
    public function setNombreLocal($nombreLocal)
    {
        $this->nombreLocal = $nombreLocal;

        return $this;
    }

    /**
     * Get nombreLocal
     *
     * @return string 
     */
    public function getNombreLocal()
    {
        return $this->nombreLocal;
    }
    
    public function __toString()
    {
        try {
            return (string) $this->nombreLocal;
        } catch (Exception $exception) {
            return '';
            }
    }
}
