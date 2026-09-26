<?php

namespace Vich\UploaderBundle\Event;

/**
 * Contains all the events triggered by the bundle.
 *
 * @author Kévin Gomez <contact@kevingomez.fr>
 */
final class Events
{
    /**
     * Triggered before a file upload is handled.
     *
     * @note This event is the same for new and old entities.
     *
     * @Event("Vich\UploaderBundle\Event\Event")
     */
    public const PRE_UPLOAD = 'vich_uploader.pre_upload';

    /**
     * Triggered right after a file upload is handled.
     *
     * @note This event is the same for new and old entities.
     *
     * @Event("Vich\UploaderBundle\Event\Event")
     */
    public const POST_UPLOAD = 'vich_uploader.post_upload';

    /**
     * Triggered before a file is injected into an entity.
     *
     * @Event("Vich\UploaderBundle\Event\Event")
     */
    public const PRE_INJECT = 'vich_uploader.pre_inject';

    /**
     * Triggered after a file is injected into an entity.
     *
     * @Event("Vich\UploaderBundle\Event\Event")
     */
    public const POST_INJECT = 'vich_uploader.post_inject';

    /**
     * Triggered before a file is removed.
     *
     * @Event("Vich\UploaderBundle\Event\Event")
     */
    public const PRE_REMOVE = 'vich_uploader.pre_remove';

    /**
     * Triggered after a file is removed.
     *
     * @Event("Vich\UploaderBundle\Event\Event")
     */
    public const POST_REMOVE = 'vich_uploader.post_remove';
<<<<<<< HEAD
=======

    /**
     * Triggered if writing to storage fails.
     */
    public const UPLOAD_ERROR = 'vich_uploader.upload_error';

    /**
     * Triggered if removing the file from storage fails.
     */
    public const REMOVE_ERROR = 'vich_uploader.remove_error';
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
}
