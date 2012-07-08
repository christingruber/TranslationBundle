<?php
/**
 * User: matteo
 * Date: 07/07/12
 * Time: 9.31
 * 
 * Just for fun...
 */
 
namespace Cypress\TranslationBundle\Tests\Playground\Entity;

use Cypress\TranslationBundle\Entity\Base\TranslatableEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Book table for testing purpose
 *
 * @ORM\Entity
 * @ORM\Table(name="book")
 */
class Book extends TranslatableEntity
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column
     */
    private $title;

    /**
     * get the name of the TranslationEntity
     *
     * @return mixed
     */
    public function getTranslationEntity()
    {
        return 'Cypress\TranslationBundle\Tests\Playground\Entity\BookTranslations';
    }

    /**
     * get the default language
     *
     * @return string
     */
    public function getDefaultLanguage()
    {
        return 'en';
    }

    /**
     * get an array of supported languages
     *
     * @return array
     */
    public function getOtherLanguages()
    {
        return array('it', 'es');
    }

    /**
     * Id getter
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Title setter
     *
     * @param string $title the title property
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Title getter
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
}
