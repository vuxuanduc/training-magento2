<?php

namespace Magenest\Movie\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Filesystem;
use Magento\MediaStorage\Model\File\UploaderFactory;
use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magenest\Movie\Model\Docs;
use Magenest\Movie\Model\ResourceModel\Docs as DocsRS;

class ProductSaveBefore implements ObserverInterface
{
    protected $uploaderFactory;
    protected $filesystem;
    protected $mediaDirectory;
    protected $productRepository;
    protected $docs;
    protected $docsRS;
    public function __construct(
        UploaderFactory $uploaderFactory,
        Filesystem $filesystem,
        ProductRepositoryInterface $productRepository,
        Docs $docs,
        DocsRS $docsRS
    ) {
        $this->uploaderFactory = $uploaderFactory;
        $this->filesystem = $filesystem;
        $this->productRepository = $productRepository;
        $this->docs = $docs;
        $this->docsRS = $docsRS;
    }

    public function execute(Observer $observer)
    {
        /** @var \Magento\Catalog\Model\Product $product */
        $product = $observer->getEvent()->getProduct();

            if (isset($_FILES['product']['name']['dynamic_rows']) && is_array($_FILES['product']['name']['dynamic_rows'])) {
                foreach ($_FILES['product']['name']['dynamic_rows'] as $index => $docFileName) {
                    if ($docFileName != '') {
                        try {
                            $uploader = $this->uploaderFactory->create(['fileId' => 'product[dynamic_rows][' . $index . '][docs]']);
                            $uploader->setAllowRenameFiles(true);
                            $uploader->setFilesDispersion(false);

                            $path = $this->filesystem->getDirectoryRead(DirectoryList::MEDIA)
                                ->getAbsolutePath('catalog/docs/');

                            $result = $uploader->save($path);

                            $productDocs[$index] = 'catalog/docs/' . $result['file'];
                            $docsObject = $this->docs;
                            $docsObject->setProductId($product->getId());
                            $docsObject->setUrl($productDocs[$index]);
                            $this->docsRS->save($docsObject);

                        } catch (\Exception $e) {
                            throw new LocalizedException(__('Error uploading file: %1', $e->getMessage()));
                        }
                    }
                }
            }
        }
}
