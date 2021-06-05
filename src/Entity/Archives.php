<?php

namespace App\Entity;

use App\Repository\ArchivesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArchivesRepository::class)
 */
class Archives
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
    private $Type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $urlYoutube;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $urlDownload;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $urlGit;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="text")
     */
    private $utilisation;

    /**
     * @ORM\Column(type="text")
     */
    private $installation;

    /**
     * @ORM\Column(type="text")
     */
    private $website_description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(string $Type): self
    {
        $this->Type = $Type;

        return $this;
    }

    public function getUrlYoutube(): ?string
    {
        return $this->urlYoutube;
    }

    public function setUrlYoutube(string $urlYoutube): self
    {
        $this->urlYoutube = $urlYoutube;

        return $this;
    }

    public function getUrlDownload(): ?string
    {
        return $this->urlDownload;
    }

    public function setUrlDownload(string $urlDownload): self
    {
        $this->urlDownload = $urlDownload;

        return $this;
    }

    public function getUrlGit(): ?string
    {
        return $this->urlGit;
    }

    public function setUrlGit(string $urlGit): self
    {
        $this->urlGit = $urlGit;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getUtilisation(): ?string
    {
        return $this->utilisation;
    }

    public function setUtilisation(string $utilisation): self
    {
        $this->utilisation = $utilisation;

        return $this;
    }

    public function getInstallation(): ?string
    {
        return $this->installation;
    }

    public function setInstallation(string $installation): self
    {
        $this->installation = $installation;

        return $this;
    }

    public function getWebsiteDescription(): ?string
    {
        return $this->website_description;
    }

    public function setWebsiteDescription(string $website_description): self
    {
        $this->website_description = $website_description;

        return $this;
    }
}
