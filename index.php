<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Exam</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Blog Exam</a>
        </div>
    </nav>


    <div class="container py-5">
        <div class="d-flex justify-content-end">
            <button class="btn btn-md btn-secondary " data-bs-toggle="modal" data-bs-target="#createBlogModal">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Create Blog Post
            </button>
        </div>

    </div>

    <!-- Blog Posts -->
    <section class="container" style="max-width: 1000px;">
        <article class="d-flex row">
            <h2>Blog Post Title</h2>
            <p>Blog post content goes here...</p>
            <p>Author: John Doe</p>
            <p>Date: July 12, 2023</p>

            <div class="">

                <button class="btn btn-secondary w-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                    </svg>
                    <span class="m-2">Comments</span>
                </button>


                <section class="comments">
                    <div class="d-flex gap-3 profile mt-4 align-items-center">
                        <div class="profile-anonymous d-flex justify-content-center align-items-center" style="border-radius:50%; width: 40px; height: 40px; background-color: rgb(69, 69, 69);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                            </svg>
                        </div>

                        <div class="comment-section">
                            <p class="m-0">My comment</p>

                            <div class="fs-6 comentator text-muted text-sm">
                                <small>John Smith</small>
                            </div>
                        </div>

                    </div>

                </section>

                <form id="submitComment" class="mt-5">
                    <textarea name="comment" class="form-control" id="comment" cols="20" rows="3" placeholder="Write a comment"></textarea>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="mt-2 btn btn-secondary btn-sm">
                            Submit
                        </button>
                    </div>
                </form>

            </div>
        </article>

        <!-- Add more blog posts as needed -->
    </section>


    <div class="modal fade" id="createBlogModal" tabindex="-1" aria-labelledby="createBlogModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Blog</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="createBlog">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" placeholder="Enter blog title">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" class="form-control" id="description" cols="20" rows="5" placeholder="Enter blog description"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary">Post</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>