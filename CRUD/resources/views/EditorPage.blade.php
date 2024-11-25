<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 d-md-block bg-dark sidebar vh-100">
                <div class="d-flex flex-column p-3 text-white">
                    <h4 class="text-center pb-3 border-bottom">Editor Panel</h4>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link active text-white bg-secondary" aria-current="page">
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">
                                Manage Articles
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">
                                Review Submissions
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">
                                Comments & Feedback
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">
                                Profile Settings
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-danger w-100">
                            Log Out
                        </button>
                    </form>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Editor Dashboard</h1>
                </div>

                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Welcome, Editor!
                    </div>
                    <div class="card-body">
                        <p>Here you can manage articles, review submissions, and interact with user feedback.</p>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
