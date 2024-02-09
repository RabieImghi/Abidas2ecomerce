<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="user/assets/img/favicon.png" rel="icon">
    <link href="user/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="user/assets/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  </head>
  <body>
    <header class="bg-white p-3 mb-3 border-bottom sticky-top">
        <div class="p-2">
            <div class="d-flex align-items-center justify-content-between ">
                <div class="d-flex gap-4 align-items-center ">
                    <div class="logo cursor-pointer ">
                        <img src="user/assets/img/logo.png" width="120px" alt="">
                    </div>
                    <div class="togl_menu cursor-pointer" id="togl_menu">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                        </svg>
                    </div>
                </div>
                <nav>
                    <ul class="nav">
                        <li><a href="index.html" class="nav-link ml-1 px-2 link-bleuFa active">Home</a></li>
                        <li><a href="allItems.html" class="nav-link ml-1 px-2 link-bleuFa">All Items</a></li>
                        <li><a href="#" class="nav-link ml-1 px-2 link-bleuFa">Services</a></li>
                        <li><a href="#" class="nav-link ml-1 px-2 link-bleuFa">FAQs</a></li>
                        <li><a href="#" class="nav-link ml-1 px-2 link-bleuFa">About</a></li>
                    </ul>
                </nav>
                <div class="profile ">
                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="user/assets/img/user.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="">
        <aside id="asideBar" class=" p-2">
            <div class="nav flex-column" >
                <a href="index.html"  class="nav-link rounded-1 fw-bold mt-2 p-3 " >
                    <img src="user/assets/img/logo.png" width="150px" alt="">
                </a><hr>
                <a href="index.html"  class="nav-link rounded-1 fw-bold mt-2 p-3 active" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5"/>
                    </svg>
                    <span class="ml-2">Dashboard</span>
                </a>
                <a href="item.html"  class="nav-link rounded-1 fw-bold mt-2 p-3"  >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-view-list" viewBox="0 0 16 16">
                        <path d="M3 4.5h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2m0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM1 2a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2m0 12a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 14"/>
                    </svg>
                    <span class="ml-2">Items List</span>
                </a>
                <a href="tags.html"  class="nav-link rounded-1 fw-bold mt-2 p-3"  >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tags" viewBox="0 0 16 16">
                        <path d="M3 2v4.586l7 7L14.586 9l-7-7zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586z"/>
                        <path d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1z"/>
                    </svg>
                    <span class="ml-2">Tag List</span>
                </a>
                <a href="category.html"  class="nav-link rounded-1 fw-bold mt-2 p-3"  >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-diagram-2-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H11a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 5 7h2.5V6A1.5 1.5 0 0 1 6 4.5zm-3 8A1.5 1.5 0 0 1 4.5 10h1A1.5 1.5 0 0 1 7 11.5v1A1.5 1.5 0 0 1 5.5 14h-1A1.5 1.5 0 0 1 3 12.5zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1A1.5 1.5 0 0 1 9 12.5z"/>
                    </svg>
                    <span class="ml-2">Category List</span>
                </a>
                <a href="itemAuthor.html"  class="nav-link rounded-1 fw-bold mt-2 p-3"  >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-view-list" viewBox="0 0 16 16">
                        <path d="M3 4.5h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2m0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM1 2a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2m0 12a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 14"/>
                    </svg>
                    <span class="ml-2">Items Authors</span>
                </a>
            </div>
        </aside>
        <section class="container">
            <section class="hero d-flex align-items-center justify-content-around">
                <div class="textHero ">
                    <h1 class="mb-3"><span>Wiki</span>World</h1>
                    <p class=" mb-3">make a place where everyone can work together, <br> create, find and share wikis in an easy and interesting way.</p>
                    <div class="inputNewUser">
                        <input type="email" placeholder="Subscribe With Your Email ..." class="form-control" >
                    </div>
                    <button type="button" class="btn butt btn-primary mt-2">Subscribe Now </button>
                </div>
                <div class="image ">
                    <img src="user/assets/img/WikiWorld.png" style="width: 100%;"  alt="">
                </div>
            </section>
            <h1 class="mb-3 mt-5 ml-2 fw-bold titleSection">Our services</h1><hr>
            <section class="services p-4 d-flex flex-wrap gap-4 justify-content-between align-items-center">
                <div class="card shadow" style="width: 18rem;">
                    <img src="user/assets/img/services.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column align-items-center">
                      <h5 class="fw-bold card-title"><span>Free</span> Wikis</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card shadow" style="width: 18rem;">
                    <img src="user/assets/img/services2.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column align-items-center">
                        <h5 class="fw-bold card-title"><span>Fast</span> Answor</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card shadow" style="width: 18rem;">
                    <img src="user/assets/img/services3.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column align-items-center">
                      <h5 class="fw-bold card-title"><span>Support</span> 24/24</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </section>
            <h1 class="mb-3 mt-5 ml-2 fw-bold titleSection">Last 3 Wiks</h1><hr>
            <section class="LasWikis">
                <div class="wikis row mb-3">
                    <div class="image col-6">
                        <img src="user/assets/img/WikiWorld.png" style="width: 50%;"  alt="">
                    </div>
                    <div class="textHero col-6 p-4">
                        <h1 class=""><span>Wiki</span>Title</h1>
                        <p class="fw-bold"> Category : <span class="blueColor">CategoryName</span></p>
                        <p class="fw-bold">Tages : <span class="blueColor">Tages1 Tags 2</span></p>
                        <p>make a place where everyone can work together, <br> create, find and share wikis in an easy and interesting way.</p>
                        <a href="#" class="btn butt btn-primary mt-2">More Details </a>
                    </div>
                </div>
                <div class="wikis row mb-3">
                    <div class="textHero col-6 p-4">
                        <h1 class=""><span>Wiki</span>Title</h1>
                        <p class="fw-bold"> Category : <span class="blueColor">CategoryName</span></p>
                        <p class="fw-bold">Tages : <span class="blueColor">Tages1 Tags 2</span></p>
                        <p>make a place where everyone can work together, <br> create, find and share wikis in an easy and interesting way.</p>
                        <a href="#" class="btn butt btn-primary mt-2">More Details </a>
                    </div>
                    <div class="image col-6">
                        <img src="user/assets/img/WikiWorld.png" style="width: 50%;"  alt="">
                    </div>
                </div>
                <div class="wikis row mb-3">
                    <div class="image col-6">
                        <img src="user/assets/img/WikiWorld.png" style="width: 50%;"  alt="">
                    </div>
                    <div class="textHero col-6 p-4">
                        <h1 class=""><span>Wiki</span>Title</h1>
                        <p class="fw-bold"> Category : <span class="blueColor">CategoryName</span></p>
                        <p class="fw-bold">Tages : <span class="blueColor">Tages1 Tags 2</span></p>
                        <p>make a place where everyone can work together, <br> create, find and share wikis in an easy and interesting way.</p>
                        <a href="#" class="btn butt btn-primary mt-2">More Details </a>
                    </div>
                </div>
            </section>
            <h1 class="mb-3 mt-5 ml-2 fw-bold titleSection">Last 4 Category</h1><hr>
            <section class="services p-4 d-flex flex-wrap gap-4 justify-content-between align-items-center">
                <div class="card shadow" style="width: 18rem;">
                    <img src="user/assets/img/category.png" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column align-items-center">
                      <h5 class="fw-bold card-title"><span>Cat : </span> Category 1</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card shadow" style="width: 18rem;">
                    <img src="user/assets/img/category.png" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column align-items-center">
                        <h5 class="fw-bold card-title"><span>Cat : </span> Category 2</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card shadow" style="width: 18rem;">
                    <img src="user/assets/img/category.png" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column align-items-center">
                      <h5 class="fw-bold card-title"><span>Cat : </span> Category 3</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card shadow" style="width: 18rem;">
                    <img src="user/assets/img/category.png" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column align-items-center">
                      <h5 class="fw-bold card-title"><span>Cat : </span> Category 4</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </section>
            <section class="Contact shadow mt-5 p-2 mb-3 d-flex  gap-5 p-4">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96714.68291250926!2d-74.05953969406828!3d40.75468158321536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2588f046ee661%3A0xa0b3281fcecc08c!2sManhattan%2C%20Nowy%20Jork%2C%20Stany%20Zjednoczone!5e0!3m2!1spl!2spl!4v1672242259543!5m2!1spl!2spl"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="contctForm container d-flex justify-content-center">
                    
                    <form action="">
                        <h5 class="h2 fw-bold card-title"><span>Contact Us </span> & Get In <span>Touch </span></h5>
                        <div class="mt-3">
                            <label>Your Name</label>
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="mt-3">
                            <label>Your Email</label>
                            <input type="email" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="mt-3">
                            <label>Your Subject</label>
                            <input type="text" class="form-control" placeholder="Your Subject">
                        </div>
                        <div class="mt-3">
                            <label>Your Message</label>
                            <textarea class="form-control" placeholder="Your Message"></textarea>
                        </div>
                        <button type="button" class="btn butt btn-primary mt-2">Send Message Now </button>
                    </form>
                </div>
            </section>
        </section>
        <hr class="mt-5">
        <footer class="text-center text-secondry mt-3">
            <p>Copyright © 2024 <span class="fw-bold"><span class="blueColor">Wiki</span>World</span>. All rights reserved. <br>
                Design: Rabie Ait Imghi</p>
        </footer>
    </main>
   <script src="user/assets/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>