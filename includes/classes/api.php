<?

class BlogAPI extends MySQLDatabase
{

    public function createPost($title, $content)
    {
        $title = $this->escape($title);
        $content = $this->escape($content);

        $sql = "INSERT INTO tbl_blog_post (title, content) VALUES ('$title', '$content')";
        $this->query($sql);

        // Additional logic for creating a post
    }

    public function getPost($postId)
    {
        $postId = $this->escape($postId);

        $sql = "SELECT * FROM tbl_blog_post WHERE id = '$postId'";
        $result = $this->query($sql);

        // Additional logic for fetching a post
    }

    public function deletePost($postId)
    {
        $postId = $this->escape($postId);

        $sql = "DELETE FROM tbl_blog_post WHERE id = '$postId'";
        $this->query($sql);

        // Additional logic for deleting a post
    }

    public function createComment($postId, $content)
    {
        $postId = $this->escape($postId);
        $content = $this->escape($content);

        $sql = "INSERT INTO tbl_comments (post_id, content) VALUES ('$postId', '$content')";
        $this->query($sql);

        // Additional logic for creating a comment
    }

    public function getComment($commentId)
    {
        $commentId = $this->escape($commentId);

        $sql = "SELECT * FROM tbl_comments WHERE id = '$commentId'";
        $result = $this->query($sql);

        // Additional logic for fetching a comment
    }

    public function deleteComment($commentId)
    {
        $commentId = $this->escape($commentId);

        $sql = "DELETE FROM tbl_comments WHERE id = '$commentId'";
        $this->query($sql);

        // Additional logic for deleting a comment
    }
}
