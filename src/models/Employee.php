<?php
namespace Models;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="employees")
 */
class Employee {
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /** 
     * @ORM\Column(type="string")
     */
    protected $firstname;

    /**
     * @ORM\ManyToOne(targetEntity="Project", inversedBy="employee")
     * @ORM\JoinColumn(name="project", referencedColumnName="id", onDelete="CASCADE")
     */
    private $project;

    public function getId() {
        return $this->id;
    }
    public function getFirstname() {
        return $this->firstname;
    }
    public function getProject() {
        return $this->project;
    }
    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }
    public function setProject($project) {
        $this->project = $project;
    }
}