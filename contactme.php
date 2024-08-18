<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Contact Me</title>
    <style>
        /* Navbar Styling */
        .navbar {
            padding: 1rem 2rem;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 700;
        }

        .nav-link {
            padding: 0.5rem 1rem;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: #ff7e5f;
        }

        /* Contact Me Section Styling */
        #contact {
            background: #f9f9f9;
            padding: 5rem 0;
        }

        #contact h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        #contact hr {
            border: 0;
            background-color: #333;
            height: 2px;
            margin-bottom: 2rem;
        }

        .form-group label {
            font-weight: bold;
            color: #333;
        }

        .form-control {
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Responsive Styling */
        @media (max-width: 768px) {
            #contact h1 {
                font-size: 2rem;
            }
        }

        @media (max-width: 576px) {
            #contact h1 {
                font-size: 1.75rem;
            }

            .navbar {
                padding: 0.5rem;
            }

            .navbar-brand {
                font-size: 1.25rem;
            }

            .nav-link {
                padding: 0.25rem 0.5rem;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">My Portfolio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="aboutme.html">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="projects.html">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="contactme.html">Contact Me</a>
                </li>
            </ul>
        </div>
    </nav>

    <section id="contact" class="text-center">
        <div class="container">
            <h1>Contact Me</h1>
            <hr>
            <form action="contactBack.php" method="POST">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="mb-3 form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="Name" id="Name" placeholder="Your Name">
                        </div>
                        <div class="mb-3 form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="Email" id="Email" placeholder="Your Email">
                        </div>
                        <div class="mb-3 form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" name="Subject" id="Subject" placeholder="Subject">
                        </div>
                        <div class="mb-3 form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" name="Message" id="Message" rows="5" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
<?php
echo "hello!"
?>
