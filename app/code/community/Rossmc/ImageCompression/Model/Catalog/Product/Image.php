<?php
class Rossmc_ImageCompression_Model_Catalog_Product_Image extends Mage_Catalog_Model_Product_Image
{
    /**
     * @return Varien_Image
     */
    public function getImageProcessor()
    {
        if( !$this->_processor ) {
//            var_dump($this->_checkMemory());
//            if (!$this->_checkMemory()) {
//                $this->_baseFile = null;
//            }
            $this->_processor = new Varien_Image($this->getBaseFile());
        }
        $this->_processor->keepAspectRatio($this->_keepAspectRatio);
        $this->_processor->keepFrame($this->_keepFrame);
        $this->_processor->keepTransparency($this->_keepTransparency);
        $this->_processor->constrainOnly($this->_constrainOnly);
        $this->_processor->backgroundColor($this->_backgroundColor);
        /** Rossmc: Removed the command to compress the image from Magento as many content managers compress images to
         *  desired level prior to uploading it to backend of Magento */
        // $this->_processor->quality($this->_quality);
        return $this->_processor;
    }

}