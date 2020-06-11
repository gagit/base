<?php
/**
 * Created by PhpStorm.
 * User: cgarcia
 * Date: 04/02/16
 * Time: 07:54
 */

namespace Model\Traits;


trait FileTrait 
{

    /**
     * 
     * @var File
     */
    protected $file;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    protected $file_name;
    
    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return $this
     */
    public function setFile(File $file = null)
    {
        $this->file = $file;

        if ($file) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            //$this->updatedAt = new \DateTime('now');
        }

        return $this;
    }
    
    /**
     * Return the File
     *
     * @return File
     */
    public function getFile()
    {
        return $this->file;
    }
    
    /**
     * Return the File Name
     *
     * @param string $file_name
     * @return $this
     */
    public function setFileName($file_name)
    {
        $this->file_name = $file_name;
        
        return $this;
    }
    
    /**
     * Return the File Name
     *
     * @return File
     */
    public function getFileName()
    {
        return $this->file_name;
    }
}
