<?php

namespace App\Entity;

use App\Repository\TaskRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TaskRepository::class)
 */
class Task
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $task;

    /**
     * @ORM\Column(type="text")
     */
    private $dueDate;


    public function setTask(string $task): ?string
    {
        $this->task = $task;

        return $this;
    }
    public function getTask(): ?string
    {
        return $this->task;
    }
    public function setDueDate(string $task): ?string
    {
        $this->dueDate = $dueDate;

        return $this;
    }
    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }


}