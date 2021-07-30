<?php 
namespace Models;
use Doctrine\ORM\Mapping as ORM;
    
/**
 * @ORM\Entity
 * @ORM\Table(name="projects")
 */
class Project {
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /** 
     * @ORM\Column(type="string") 
     */
    protected $name;

    /** 
     * @ORM\OneToMany(targetEntity="Employee", mappedBy="project")
     */
    private $employee;

    public function getId() {
        return $this->id;
    }
    public function getName() {
        return $this->name;
    }
    public function getEmployee() {
        return $this->employee;
    }
    public function setName($name) {
        $this->name = $name;
    }
}
  