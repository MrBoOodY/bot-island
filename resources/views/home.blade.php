  @extends('layouts.app')
  @section('body')
  <!-- ======= Hero Section ======= -->
  <section id="hero">

      <div class="container">
          <div class="row justify-content-between">
              <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                  <div data-aos="zoom-out">
                      <h1>Build Your Projects With <span>BOTISLAND</span></h1>
                      <h2>We are team of talented developers developing Websites and Mobile Apps.</h2>
                      <div class="text-center text-lg-start">
                          <a href="#about" class="btn-get-started scrollto">Get Started</a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                  <img src="{{ asset('assets/assets/img/hero-img.png')}}" class="img-fluid animated" alt="">
              </div>
          </div>
      </div>

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
          <defs>
              <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
          </defs>
          <g class="wave1">
              <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
          </g>
          <g class="wave2">
              <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
          </g>
          <g class="wave3">
              <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
          </g>
      </svg>

  </section><!-- End Hero -->

  <main id="main">

      <!-- ======= About Section ======= -->
      <section id="about" class="about">
          <div class="container-fluid">
@foreach ($contacts as $contact )
              <div class="row">
                  <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
                      <a href="{{ $contact->link }}" class="glightbox play-btn mb-4"></a>
                  </div>
                  @endforeach
                  <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
                      <h3>We are an integral part of the modern technology and business landscape.</h3>
                      <p>We offer a wide range of products and services that help automate tasks, streamline operations, and
                          enhance productivity.</p>
@foreach ($categories as $category )


                      <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                          <div class="icon"><i class="{{ $category->icon }}"></i></div>
                          <h4 class="title"><a>{{ $category->word }}</a></h4>
                          <p class="description">{{ $category->desc }}</p>
                      </div>

                      @endforeach



                  </div>
              </div>

          </div>
      </section><!-- End About Section -->

      <!-- ======= Services Section ======= -->
      <section id="services" class="features">
          <div class="container">

              <div class="section-title" data-aos="fade-up">
                  <h2>Services</h2>
                  <p>Check The Services</p>
              </div>

              <div class="row" data-aos="fade-left">
                @foreach ($services as $service)


                  <div class="col-lg-3 col-md-4 mt-4">
                      <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                          <i class="{{$service->icon}}" style="color: #ffbb2c;"></i>
                          <h3><a href="#">{{ $service->word }}</a></h3>
                      </div>
                  </div>
                  @endforeach
              </div>

          </div>
      </section><!-- End Features Section -->

      <!-- ======= Counts Section ======= -->
      <section id="counts" class="counts">
          <div class="container">

              <div class="row" data-aos="fade-up">
@foreach($contacts as $contact)
                  <div class="col-lg-3 col-md-6">
                      <div class="count-box">
                          <i class="bi bi-emoji-smile"></i>
                          <span data-purecounter-start="0" data-purecounter-end="{{ $contact->num1 }}" data-purecounter-duration="1" class="purecounter"></span>
                          <p>Happy Clients</p>
                      </div>
                  </div>

                  <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                      <div class="count-box">
                          <i class="bi bi-journal-richtext"></i>
                          <span data-purecounter-start="0" data-purecounter-end="{{ $contact->num2 }}" data-purecounter-duration="1" class="purecounter"></span>
                          <p>Projects</p>
                      </div>
                  </div>

                  <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                      <div class="count-box">
                          <i class="bi bi-headset"></i>
                          <span data-purecounter-start="0" data-purecounter-end="{{ $contact->num3 }}" data-purecounter-duration="1" class="purecounter"></span>
                          <p>Hours Of Support</p>
                      </div>
                  </div>

                  <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                      <div class="count-box">
                          <i class="bi bi-people"></i>
                          <span data-purecounter-start="0" data-purecounter-end="{{ $contact->num4 }}" data-purecounter-duration="1" class="purecounter"></span>
                          <p>Hard Workers</p>
                      </div>
                  </div>
              </div>
          </div>
      </section><!-- End Counts Section -->
@endforeach
      <!-- ======= Details Section ======= -->
      <section id="details" class="details">
          <div class="container">

              <div class="row content">
                  <div class="col-md-4 order-md-2" data-aos="fade-left">
                      <img src="{{ asset('assets/assets/img/details-3.png')}}" class="img-fluid" alt="">
                  </div>
                  <div class="col-md-8 pt-5 order-md-1" data-aos="fade-up">
                      <h3>Explore Website and Mobile App Development</h3>
                      <p>Website and mobile app development are essential parts of creating digital products. It involves building
                          and designing applications for use on the internet or mobile devices such as smartphones and tablets.</p>
                      <ul>
                          <li><i class="bi bi-check"></i> Website and mobile app development can help businesses to reach a wider
                              audience and improve their online presence.</li>
                          <li><i class="bi bi-check"></i> Developing a website or mobile app requires a team of experts, including
                              designers, developers, and project managers.</li>
                          <li><i class="bi bi-check"></i> The process of development involves several steps such as planning,
                              designing, coding, testing, and launching the application.</li>
                      </ul>
                      <p>
                          With the rise of mobile devices and the internet, website and mobile app development have become more
                          important than ever. A well-designed and functional website or mobile app can help businesses to achieve
                          their goals, whether it's generating more revenue, increasing engagement, or improving customer
                          experience.
                      </p>
                      <p>
                          By exploring website and mobile app development, you can gain a better understanding of how digital
                          products are created and how they can benefit businesses and individuals alike.
                      </p>
                  </div>

              </div>



              <div class="row content">
                  <div class="col-md-4" data-aos="fade-right">
                      <img src="{{ asset('assets/assets/img/details-1.png')}}" class="img-fluid" alt="">
                  </div>
                  <div class="col-md-8 pt-4" data-aos="fade-up">
                      <h3>Measuring Success with Website Analytics: Key Metrics and Tools.</h3>
                      <p class="fst-italic">
                          Understanding user behavior is critical to improving website performance and achieving business goals.
                      </p>
                      <ul>
                          <li><i class="bi bi-check"></i> Track key metrics such as website traffic and user engagement.</li>
                          <li><i class="bi bi-check"></i> Use website analytics to optimize your website and drive business success.
                          </li>
                          <li><i class="bi bi-check"></i> Learn best practices for using website analytics tools such as Google
                              Analytics, Hotjar, and Crazy Egg.</li>
                          <li><i class="bi bi-check"></i> Identify common challenges and tips for setting up and using website
                              analytics effectively.</li>
                      </ul>
                      <p>
                          With website analytics, you can track key metrics such as website traffic, user engagement, and conversion
                          rates, and use these insights to optimize your website and drive success. Popular website analytics tools
                          such as Google Analytics, Hotjar, and Crazy Egg can help you gain a deeper understanding of your website's
                          performance and identify areas for improvement. In this section, we'll explore best practices for using
                          website analytics, common challenges to watch out for, and tips for setting up and using website analytics
                          tools effectively.
                      </p>
                  </div>
              </div>

              <div class="row content">
                  <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                      <img src="{{ asset('assets/assets/img/details-2.png')}}" class="img-fluid" alt="">
                  </div>
                  <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                      <h3>Delivering Quality Software Faster with CI/CD</h3>
                      <p class="fst-italic">
                          We all rely on software in our daily lives, from the websites we visit to the apps we use on our phones.
                          But have you ever wondered how these software applications are developed and deployed? Continuous
                          Integration and Continuous Delivery (CI/CD) is a software development practice that helps companies
                          deliver high-quality software faster and with fewer errors.
                      </p>
                      <p>
                          With CI/CD, developers can automate the testing, building, and deployment of their software code. This
                          means that any changes or new features can be quickly tested and deployed to production, reducing the time
                          it takes to bring new software to market. By using CI/CD, businesses can improve their software
                          development process, increase the reliability of their software, and ultimately deliver a better user
                          experience to their customers.
                      </p>
                      <p>
                          So the next time you use a website or mobile app, remember that behind the scenes, CI/CD is helping to
                          ensure that you have a seamless and reliable experience.
                      </p>
                  </div>
              </div>




              <div class="row content">
                  <div class="col-md-4" data-aos="fade-right">
                      <img src="{{ asset('assets/assets/img/details-4.png')}}" class="img-fluid" alt="">
                  </div>
                  <div class="col-md-8 pt-5" data-aos="fade-up">
                      <h3>Meet Our Team of Skilled Software Developers</h3>
                      <p class="fst-italic">
                          Our team of software developers consists of talented professionals who are dedicated to creating
                          innovative software solutions for businesses of all sizes.
                      </p>
                      <p>
                          We take pride in our ability to deliver high-quality software that is tailored to the unique needs of each
                          of our clients. Our developers use the latest technologies and best practices to ensure that our software
                          solutions are reliable, secure, and easy to use.
                      </p>
                      <ul>
                          <li><i class="bi bi-check"></i> Our developers are skilled in multiple programming languages, including
                              Java, Python, and C++.</li>
                          <li><i class="bi bi-check"></i> We work closely with our clients to understand their needs and develop
                              software that meets their business goals.</li>
                          <li><i class="bi bi-check"></i> Our team is committed to ongoing learning and staying up-to-date with the
                              latest trends and technologies in the software development industry.</li>
                      </ul>
                  </div>
              </div>


          </div>
      </section><!-- End Details Section -->

      <!-- ======= Gallery Section ======= -->
      <section id="gallery" class="gallery">
          <div class="container">

              <div class="section-title" data-aos="fade-up">
                  <h2>Gallery</h2>
                  <p>Check our Gallery</p>
              </div>
@foreach($banners as $banner)
              <div class="row g-0" data-aos="fade-left">

                  <div class="col-lg-3 col-md-4">
                      <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
                          <a href="/bannerFolder/{{$banner->image}}" class="gallery-lightbox">
                              <img src="/bannerFolder/{{$banner->image}}" alt="" class="img-fluid">
                          </a>
                      </div>
                  </div>

@endforeach










              </div>

          </div>
      </section><!-- End Gallery Section -->

      <!-- ======= Team Section ======= -->
      <section id="team" class="testimonials">
          <div class="container">

              <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                  <div class="swiper-wrapper">

                    @foreach($persons as $person)
                      <div class="swiper-slide">

                          <div class="testimonial-item">
                              <img src="/personFolder/{{$person->photo}}" class="testimonial-img" alt="">
                              <h3>{{ $person->word }}</h3>
                              <h4>CO &amp; {{ $person->word }}</h4>
                          </div>
                      </div><!-- End testimonial item -->
@endforeach
                  </div>
                  <div class="swiper-pagination"></div>
              </div>

          </div>
      </section><!-- End Testimonials Section -->

      <!-- ======= Team Section ======= -->
      <!--  <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Team</h2>
          <p>Our Great Team</p>
        </div>

        <div class="row" data-aos="fade-left">

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> -->
      <!-- End Team Section -->



      <!-- ======= F.A.Q Section ======= -->
      <!--    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section> -->
      <!-- End F.A.Q Section -->
      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
          <div class="container">
@foreach($contacts as $contact)
              <div class="row">
                  <div class="section-title col-md align-self-center" data-aos="fade-up">
                      <h2>Contact</h2>
                      <p>Contact Us</p>
                  </div>
                  <div class="col-md align-self-center" data-aos="fade-up" data-aos-delay="100">
                      <div class="info">
                          <div class="address">
                              <i class="bi bi-geo-alt"></i>
                              <h4>Location:</h4>
                              <p>{{ $contact->address }}</p>
                          </div>
                          <div class="email">
                              <i class="bi bi-envelope"></i>
                              <h4>Email:</h4>
                              <p>{{ $contact->email }}</p>
                          </div>
                          <div class="phone">
                              <i class="bi bi-phone"></i>
                              <h4>Call:</h4>
                              <p>{{ $contact->phone }}</p>
                          </div>
                      </div>
                  </div>
              </div>

@endforeach

          </div>
      </section><!-- End Contact Section -->

  </main><!-- End #main -->

  @endsection
  @section('script')

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ asset('assets/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('assets/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('assets/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/assets/js/main.js')}}"></script>

  @endsection
