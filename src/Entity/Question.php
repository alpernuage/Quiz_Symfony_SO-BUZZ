<?php

namespace App\Entity;

use App\Repository\QuestionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=QuestionRepository::class)
 */
class Question
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $content;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Choice1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Choice2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Choice3;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Choice4;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $answer;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getChoice1(): ?string
    {
        return $this->Choice1;
    }

    public function setChoice1(string $Choice1): self
    {
        $this->Choice1 = $Choice1;

        return $this;
    }

    public function getChoice2(): ?string
    {
        return $this->Choice2;
    }

    public function setChoice2(string $Choice2): self
    {
        $this->Choice2 = $Choice2;

        return $this;
    }

    public function getChoice3(): ?string
    {
        return $this->Choice3;
    }

    public function setChoice3(string $Choice3): self
    {
        $this->Choice3 = $Choice3;

        return $this;
    }

    public function getChoice4(): ?string
    {
        return $this->Choice4;
    }

    public function setChoice4(string $Choice4): self
    {
        $this->Choice4 = $Choice4;

        return $this;
    }

    public function getAnswer(): ?string
    {
        return $this->answer;
    }

    public function setAnswer(string $answer): self
    {
        $this->answer = $answer;

        return $this;
    }

}
