<?php
    // Load JSON data
    $artworks = json_decode(file_get_contents('artworks.json'), true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Olagoke Mubarak's Art Portfolio - Unique Art for Interior Design" />
    <title>Olagoke Mubarak Art Portfolio</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.min.css">
    <link rel="stylesheet" href="assets/css/rtl.css">
</head>

<body>
    <div class="nav-main">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand font-weight-bold" href="index.html">Ajirin Art</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="project.html">Project</a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li> -->
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <main role="main">
        <section class="pt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                    <div class="project-sidebar">
                        <?php foreach ($artworks as $artwork): ?>
                            <figure>
                                <a href="detail.php?title=<?php echo urlencode($artwork['title']); ?>">
                                    <img src="<?php echo htmlspecialchars($artwork['image']); ?>" 
                                        alt="<?php echo htmlspecialchars($artwork['alt_text']); ?>" 
                                        class="img-fluid">
                                </a>
                            </figure>
                        <?php endforeach; ?>
                    </div>
                    </div>
                    <div class="col-md-5 pl-lg-5 pl-md-5">
                        <div class="sticky-top pt-5">
                            <h1>
                                Ajirin Art Portfolio
                            </h1>
                            <p class="lead mt-4">
                                I’m Olagoke Mubarak, a fine artist and a computer programmer. I have always loved doing art since childhood and, as I grew up, developed a deeper interest in creating artworks that not only express my inner feelings but are also visually appealing, beautiful, and elegant.
                            </p>
                            <p class="lead mt-4">
                                My art is a reflection of my soul, capturing the essence of my thoughts and emotions. I believe in the value of traditional, handcrafted art. My philosophy is to create pieces that cannot be replicated by a computer, emphasizing the authenticity and uniqueness of real art.
                            </p>
                            <hr class="mt-5">
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <h3>Collaboration Benefits</h3>
                                    <p><strong>Enhancing Interior Designs:</strong> My art pieces are designed to transform spaces by adding a touch of elegance and depth. Each artwork is crafted to complement various interior styles, whether modern, contemporary, or classic. By incorporating my art into your designs, you can create a unique and personalized atmosphere that resonates with your clients.</p>
                                    <p><strong>Special Offers and Commissions:</strong> I offer exclusive commissions for interior decorators, allowing you to request custom pieces that perfectly fit your design vision. Whether you need a specific color palette, theme, or size, I am flexible in creating artworks that meet your exact requirements. Additionally, I provide special pricing for bulk orders or long-term collaboration agreements.</p>
                                    <p><strong>Ease of Collaboration and Customization:</strong> Collaboration with me is seamless and efficient. I value open communication and am committed to understanding your needs and preferences. From the initial consultation to the final delivery, I ensure that the process is smooth and tailored to your timeline. I also offer digital previews of the proposed artworks, so you can visualize how they will look in your space before finalizing the order.</p>
                                </div>
                            </div>
                            <hr class="mt-5">
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <h3>Contact Information</h3>
                                    <p>
                                        <strong>Olagoke Mubarak</strong><br>
                                        Email: <a href="mailto:mubarakolagoke@gmail.com">mubarakolagoke@gmail.com</a><br>
                                        Phone: +2347036998003<br>
                                        Instagram: <a href="https://instagram.com/ajirinibi">ajirinibi</a><br>
                                        Website: <a href="https://art.ajirinibi.com.ng">art.ajirinibi.com.ng</a>
                                    </p>
                                    <p>
                                        Thank you for taking the time to review my portfolio. I am excited about the possibility of collaborating with you to bring unique and soulful art into your interior designs. If you have any questions or would like to discuss potential projects, please do not hesitate to contact me. I look forward to the opportunity to work together and create beautiful, meaningful spaces.
                                    </p>
                                    <p>
                                        Let's connect and explore how my art can enhance your design projects. I am enthusiastic about the potential for collaboration and eager to bring your vision to life with my unique and authentic artworks.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="mt-5">
            </div>
        </section>
    </main>
    <footer class="position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-auto mt-4">
                    <p class="mb-4">Ajirin Art</p>
                </div>
                <div class="col-lg-3 mt-4 ml-auto">
                    <p>
                        Ajirin Art Studio<br>
                        Owode-Ede, Osun state<br>
                        Nigeria
                    </p>
                    <a href="hi@art.ajirinibi.com.ng"><span style="text-decoration: underline;">hi@art.ajirinibi.com.ng</span></a>
                </div>
                <div class="col-lg-3 mt-4 ml-auto">
                    <ul class="list-unstyled footer-link">
                        <li><a href="https://instagram.com/ajirinibi">Instagram</a></li>
                        <li><a href="https://facebook.com/holagok.mubarrakh">Facebook</a></li>
                        <!-- <li><a href="https://twitter.com/ajirinibi">Twitter</a></li> -->
                    </ul>
                </div>
                <div class="col-lg-auto ml-lg-auto mt-4">
                    <ul class="list-unstyled footer-link">
                        <li><a href="https://instagram.com/ajirinibi">Instagram</a></li>
                        <li><a href="https://facebook.com/holagok.mubarrakh">Facebook</a></li>
                        <!-- <li><a href="https://twitter.com/ajirinibi">Twitter</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/main.min.js"></script>
</body>

</html>
