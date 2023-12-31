<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg">
      <div class="container minimal-navbar">
        <a class="navbar-brand" href="#">Minimal</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Shop</a>
            </li>
          </ul>
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="btn btn-secondary" href="#">My Account</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="header mt-70">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 copywriting align-self-center">
            <!-- <div class="badge mb-20">
              <img class="icon" src="images/icon_secure.svg" alt="" />
              <p class="small-copy">
                warranty on every purchase of one unit of furniture
              </p>
            </div> -->
            <h1 class="big-header mb-10">
              Quality Craftsmanship<br />
              Timeless Appeal
            </h1>
            <p class="primary-copy mb-30">
              We make quality products and timeless designs
            </p>
            <a href="#" class="btn btn-primary mr-10">Get Started</a>
          </div>
          <div class="col-lg-7">
            <img src="images/banner_header.png" class="img-fluid" alt="" />
          </div>
        </div>
      </div>
    </section>

    <section class="companies mt-70">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-12">
            <h3 class="medium-header mb-10">Our Past Customers</h3>
            <p class="primary-copy mb-30">
              has been used in famous apartments and hotels and by many people.
            </p>
          </div>
        </div>
      </div>
      <div class="carousel">
        <div class="carousel-wrapper">
          <div class="card-brand mr-30">
            <img src="images/dunkin.png" class="logo" />
          </div>
          <div class="card-brand mr-30">
            <img src="images/kfc.png" class="logo" />
          </div>
          <div class="card-brand mr-30">
            <img src="images/Starbucks.png" class="logo" />
          </div>
          <div class="card-brand mr-30">
            <img src="images/google.png" class="logo" />
          </div>
          <div class="card-brand mr-30">
            <img src="images/subway.png" class="logo" />
          </div>
          <div class="card-brand mr-30">
            <img src="images/google.png" class="logo" />
          </div>
        </div>
        <div class="carousel-wrapper">
          <div class="card-brand mr-30">
            <img src="images/dunkin.png" class="logo" />
          </div>
          <div class="card-brand mr-30">
            <img src="images/kfc.png" class="logo" />
          </div>
          <div class="card-brand mr-30">
            <img src="images/Starbucks.png" class="logo" />
          </div>
          <div class="card-brand mr-30">
            <img src="images/google.png" class="logo" />
          </div>
          <div class="card-brand mr-30">
            <img src="images/subway.png" class="logo" />
          </div>
          <div class="card-brand mr-30">
            <img src="images/google.png" class="logo" />
          </div>
        </div>
      </div>
    </section>
    <section class="features mt-70">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h3 class="medium-header mb-10">Why Choose Us</h3>
            <p class="primary-copy mb-30">
              here are some reasons why you should buy our products
            </p>
          </div>
          <div class="col-lg-6 text-end">
            <a href="#" class="btn btn-secondary">View All</a>
          </div>
        </div>
        <div class="row features-wrapper">
          <div class="col-lg-7">
            <div class="col-lg-12 mb-30">
              <div class="big-feature-card">
                <div class="icon">
                  <img src="images/icon_price.svg" alt="" />
                </div>
                <div class="copy"></div>
                <h3 class="small-header mb-10">Affordable Price</h3>
                <p class="primary-copy mb-20">
                  At MINIMAL, we take pride in offering you a curated selection
                  of high-quality products at prices that won't break the bank.
                  Our commitment to affordability means you can indulge in
                  stylish and durable our product without compromising on your
                  budget.
                </p>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="big-feature-card">
                <div class="icon">
                  <img src="images/icon_safe.svg" alt="" />
                </div>
                <div class="copy"></div>
                <h3 class="small-header mb-10">Secure Transactions</h3>
                <p class="primary-copy mb-20">
                  In the fast-paced world of online transactions, security is
                  paramount. At MINIMAL, we prioritize your safety and peace of
                  mind. Our commitment to secure transactions ensures that your
                  sensitive information is safeguarded at every step of the
                  process
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="col-lg-12 mb-30">
                <div class="small-feature-card">
                    <div class="icon">
                        <img src="images/icon_bag.svg" alt="" />
                      </div>
                      <div class="copy"></div>
                      <h3 class="small-header mb-10">Easy Payment</h3>
                      <p class="primary-copy mb-20">
                        Experience seamless and hassle-free transactions with our easy payment solution.
                      </p>
                    </div>
                </div>
                <div class="col-lg-12 mb-30">
                    <div class="small-feature-card">
                        <div class="icon">
                            <img src="images/icon_static.svg" alt="" />
                          </div>
                          <div class="copy"></div>
                          <h3 class="small-header mb-10">100% Satisfied Customer</h3>
                          <p class="primary-copy">
                            we prioritize excellence in every aspect, ensuring that our customers.
                          </p>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-30">
                        <div class="small-feature-card">
                            <div class="icon">
                                <img src="images/icon_payment.svg" alt="" />
                              </div>
                              <div class="copy"></div>
                              <h3 class="small-header mb-10">Integrated By E-wallet</h3>
                              <p class="primary-copy">
                                Trust in the security of your funds while enjoying the freedom to transact digitally
                              </p>
                            </div>
                        </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="bg-light text-dark pt-5 pb-4">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-10 small-header ">About Us</h5>
                    <hr class="mb-4">
                    <p class="primary-copy">
                        we're not just a furniture store; we're your partner in creating a better everyday life at home
                    </p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-10 small-header">Shop</h5>
                    <hr class="mb-4">
                    <p>
                        <a href="#" class="primary-copy" style="text-decoration:none">Table</a>
                    </p>
                    <p>
                        <a href="#" class="primary-copy" style="text-decoration:none">Chair</a>
                    </p>
                    <p>
                        <a href="#" class="primary-copy" style="text-decoration:none">Sofa</a>
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-10 small-header">Get Connect</h5>
                    <hr class="mb-4">
                    
                    <p class="primary-copy">
                        Kota batam, Kepulauan Riau 
                    </p>
                    <p class="primary-copy">
                    0778-0987-2312
                    </p>
                    <p class="primary-copy">
                         support@minimal.com

                    </p>

                </div>
                <hr class="mb-4">
                <div class="row d-flex justify-content-center">
                    <div>
                        <p class="primary-copy">
                            Copyright 2023 All Right Reserved By Minimal
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
