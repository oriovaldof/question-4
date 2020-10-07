<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=PostRepository::class)
 */
class Post
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
     * @Assert\NotBlank
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @Assert\NotBlank
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @Assert\NotBlank
     * @ORM\Column(type="string", length=255)
     */
    private $author;

    /**
     * @Assert\NotBlank
     * @Assert\Type("\DateTime")
     * @ORM\Column(type="datetime", name="posted_at")
     */
    private $postedAt;


    public function getId(): ?int
    {
        return $this->id;
    }



    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of author
     */ 
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */ 
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of postedAt
     */ 
    public function getPostedAt()
    {
        return $this->postedAt;
    }

    /**
     * Set the value of postedAt
     *
     * @return  self
     */ 
    public function setPostedAt($postedAt)
    {
        $this->postedAt = $postedAt;

        return $this;
    }
}
