<?php

declare(strict_types=1);

namespace Acme\Academic;

use Acme\Academic\ValueObject\AcademicRegistrationNumber;
use Acme\Academic\ValueObject\BirthDate;
use Acme\Academic\ValueObject\Email;
use Acme\Academic\ValueObject\FirstName;
use Acme\Academic\ValueObject\LastName;
use Acme\Academic\ValueObject\Major;
use Acme\Academic\ValueObject\Password;
use Acme\Article\Article;
use Acme\Article\ArticleCollection;

final class Academic
{
    /**
     * @var AcademicRegistrationNumber
     */
    private $registrationNumber;
    /**
     * @var ArticleCollection
     */
    private $articles;
    /**
     * @var FirstName
     */
    private $firstName;
    /**
     * @var LastName
     */
    private $lastName;
    /**
     * @var BirthDate
     */
    private $birthDate;
    /**
     * @var Major
     */
    private $major;
    /**
     * @var Email
     */
    private $email;
    /**
     * @var Password
     */
    private $password;

    public function __construct(
        AcademicRegistrationNumber $registrationNumber,
        FirstName $firstName,
        LastName $lastName,
        Email $email,
        Password $password,
        Major $major,
        BirthDate $birthDate,
        ArticleCollection $articles
    ) {
        $this->registrationNumber = $registrationNumber;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->birthDate = $birthDate;
        $this->articles = $articles;
        $this->major = $major;
    }

    public function registrationNumber(): AcademicRegistrationNumber
    {
        return $this->registrationNumber;
    }

    public function articles(): ArticleCollection
    {
        return $this->articles;
    }

    public function firstName(): FirstName
    {
        return $this->firstName;
    }

    public function lastName(): LastName
    {
        return $this->lastName;
    }

    public function email(): Email
    {
        return $this->email;
    }

    public function password(): Password
    {
        return $this->password;
    }

    public function major(): Major
    {
        return $this->major;
    }

    public function birthDate(): BirthDate
    {
        return $this->birthDate;
    }

    public function write(Article $article): void
    {
        $this->articles = $this->articles->withArticle($article);
    }
}
