<?php
namespace Magenest\EavTest\Model\Api;

use Magenest\EavTest\Api\CustomInterface;
use Magenest\EavTest\Model\BlogFactory;

class Blog implements CustomInterface
{
    private $blogFactory;
    private $quote;
    protected $response = ['success' => false];

    public function __construct(BlogFactory $blogFactory, \Magento\Quote\Model\Quote $quote)
    {
        $this->quote = $quote;
        $this->blogFactory = $blogFactory;
    }


    public function insert($title, $description, $content, $url_rewrite, $status, $author_id)
    {
        $insertData = $this->blogFactory->create();
        try {
            $data = [
                "title" => $title,
                "description" => $description,
                "content" => $content,
                "url_rewrite" => $url_rewrite,
                "status" => $status,
                "author_id" => $author_id
            ];
            $insertData->setData($data);
            $insertData->save();
            $response = ['success' => true, 'message' => $data];
        } catch (\Exception $e) {
            $response = ['success' => false, 'message' => $e->getMessage()];
        }
        return $response;
    }

    /** * @return string */
    public function getData()
    {
        try {
            $data = $this->blogFactory->create()->getCollection()->getData();
            return $data;
        } catch (\Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    /** * @param int $id * @return bool true on success */
    public function deleteBlog($id)
    {
        try {
            if ($id) {
                $data = $this->blogFactory->create()->load($id);
                $data->delete();
                return "success";
            }
        } catch (\Exception $e) {
            $response = ['success' => false, 'message' => $e->getMessage()];
        }
        return "false";
    }

    /** * @param int $id * @return string */
    public function getById($id)
    {
        try {
            if ($id) {
                $data = $this->blogFactory->create()->load($id)->getData();
//                return ['success' => true, 'message' => json_encode($data)];
                return $data;
            }
        } catch (\Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function update($id, $title, $description, $content, $url_rewrite, $status, $author_id)
    {
        $insertData = $this->blogFactory->create();
        if ($id) {
            try {
                $data = [
                    "title" => $title,
                    "description" => $description,
                    "content" => $content,
                    "url_rewrite" => $url_rewrite,
                    "status" => $status,
                    "author_id" => $author_id
                ];

                $insertData->load($id);
                $insertData->setData($data);
                $insertData->save();
                return ['success' => true, 'message' => $data];
            } catch (\Exception $e) {
                return ['success' => false, 'message' => $e->getMessage()];
            }
        }
    }
}
