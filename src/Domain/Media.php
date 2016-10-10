<?php

namespace MicroCMS\Domain;

use Media\Entity\Media AS BaseMedia;

/**
 * 
 * @Entity
 * @HasLifecycleCallbacks
 * @Table(name="media_attachments")
 */
class Media extends BaseMedia
{

    /**
     * @var integer
     *
     * @Column(name="id", type="integer")
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}