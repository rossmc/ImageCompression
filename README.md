# Magento Module to Remove Default Image Compression
#### Overview
This is a simple module to remove the default magento behaviour to compress images before putting them into the product cache.  As many Content Managers may wish to employ their own image compression work flow, which the default Magento behaviour may be in conflict with.

It works by simply rewriting the *Mage_Catalog_Model_Product_Image* class to remove the command to compress new images.
i.e. `$this->_processor->quality($this->_quality);`

The Module is built using the methods outlined this [Atwix blog post](http://www.atwix.com/magento/simple-products-report/) by building from Magento's native functionality without the use for rewrites.

#### Installation
* Download latest version [here](https://github.com/rossmc/Rossmc_ImageCompression/archive/master.zip). 
* Unzip to Magento root folder.
* Clear cache.
* Logout from admin then login again to access the Report.