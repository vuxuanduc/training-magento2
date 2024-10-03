<?php

namespace Magenest\EavTest\Api;

interface CustomInterface
{
    /**
     * GET for Post api
     * @param  string $title
     * @param  string $description
     * @param  string $content
     * @param  string $url_rewrite
     * @param  string $status
     * @param  int $author_id

     * @return string
     */
    public function insert($title, $description, $content, $url_rewrite, $status, $author_id);

    /**
     * @return string
     */
    public function getData();

    /**
     * @param int $id
     * @return bool true on success
     */
    public function deleteBlog($id);

    /**
     * @param int $id
     * @return string
     */
    public function getById($id);

    /**
     * GET for Post api
     * @param  int $blog_id
     * @param  string $title
     * @param  string $description
     * @param  string $content
     * @param  string $url_rewrite
     * @param  string $status
     * @param  int $author_id
     * @return string
     */
    public function update($blog_id, $title, $description, $content, $url_rewrite, $status, $author_id);
}
