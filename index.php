<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TRUERP | Smart ERP for Manufacturing</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <header class="navbar-wrap">
    <nav class="navbar container">
      <a href="#home" class="logo" aria-label="TRUERP Home">
        <img src="img/logo.png" alt="TRUERP Logo" />
      </a>

      <button class="menu-toggle" id="menuToggle" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars"></i>
      </button>

      <div class="nav-links" id="navLinks">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#features">Features</a>
        <a href="#testimonials">Testimonials</a>
        <a href="#services">Services</a>
        <a href="#pricing">Pricing</a>
        <a href="#contact">Contact</a>
      </div>

      <a href="#contact" class="btn btn-sm">Try Demo</a>
    </nav>
  </header>

  <main>
    <section class="hero" id="home">
      <div class="container hero-grid">
        <div class="hero-copy">
          <div class="pill"><i class="fa-solid fa-circle-check"></i> Working For Your Success</div>
          <h1>Smart ERP for the Manufacturing &amp; Mechanical Industry!</h1>
          <p>The TRUERP team powering India&apos;s manufacturing ecosystem with smarter planning, faster operations, and better control.</p>
          <div class="hero-actions">
            <a href="img/truerp.pdf" class="btn" target="_blank" rel="noopener">
              <i class="fa-solid fa-download"></i> Download Brochure
            </a>
            <button class="btn-link" id="playVideoBtn">
              <i class="fa-regular fa-circle-play"></i> Play Video
            </button>
          </div>
        </div>
        <div class="hero-art">
          <img src="img/illustration-1.webp" alt="TRUERP software illustration" />
        </div>
      </div>
    </section>

    <section id="about" class="section about">
      <div class="container about-grid">
        <div>
          <p class="eyebrow">MORE ABOUT US</p>
          <h2>Powering Efficiency. Driving Growth. Simplifying Operations.</h2>
          <p class="section-intro">TRUERP is a next-generation ERP platform built for manufacturing and mechanical businesses. It connects every department from planning to dispatch into one secure, integrated workflow.</p>

          <div class="check-grid">
            <p><i class="fa-solid fa-circle-check"></i> Centralized Data Management</p>
            <p><i class="fa-solid fa-circle-check"></i> Automation of Processes</p>
            <p><i class="fa-solid fa-circle-check"></i> Accuracy &amp; Error Reduction</p>
            <p><i class="fa-solid fa-circle-check"></i> Enhanced Security</p>
            <p><i class="fa-solid fa-circle-check"></i> Real-Time Insights</p>
            <p><i class="fa-solid fa-circle-check"></i> Audit &amp; Traceability</p>
            <p><i class="fa-solid fa-circle-check"></i> Improved Collaboration</p>
            <p><i class="fa-solid fa-circle-check"></i> System Integrations</p>
            <p><i class="fa-solid fa-circle-check"></i> Scalable Architecture</p>
            <p><i class="fa-solid fa-circle-check"></i> Professional Reporting</p>
          </div>
        </div>

        <div class="about-visual">
          <img src="img/a1.jpg" alt="TRUERP user in factory environment" class="about-main" />
          <img src="img/a2.png" alt="Digital operations visualization" class="about-overlay" />
          <div class="years-card">
            <span>15+</span>
            <small>Years of experience in business solutions</small>
          </div>
        </div>
      </div>
    </section>

    <section id="features" class="section features">
      <div class="container">
        <h2 class="section-title">Features</h2>
        <p class="section-subtitle">Built modules for every process in your manufacturing lifecycle.</p>
        <img src="img/features.png" alt="TRUERP features map" class="features-map" />
      </div>
    </section>

    <section id="testimonials" class="section testimonials">
      <div class="container">
        <h2 class="section-title">Testimonials</h2>
        <p class="section-subtitle">Trusted by leading mechanical manufacturers across India.</p>

        <div class="cards-grid two-col">
          <article class="card testimonial-card">
            <div class="testimonial-head">
              <span class="avatar"><i class="fa-solid fa-user"></i></span>
              <div>
                <h3>Tanaji Tengale</h3>
                <p>CEO &amp; Founder</p>
                <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
              </div>
            </div>
            <p>TRUERP streamlined our entire workflow from quotation to dispatch. Our team works faster with fewer errors.</p>
          </article>

          <article class="card testimonial-card">
            <div class="testimonial-head">
              <span class="avatar"><i class="fa-solid fa-user"></i></span>
              <div>
                <h3>Ganesh Chandak</h3>
                <p>Industrialist</p>
                <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
              </div>
            </div>
            <p>Dashboards give us clear visibility on sales, purchase, and expenses. Decision making is now much more confident.</p>
          </article>

          <article class="card testimonial-card">
            <div class="testimonial-head">
              <span class="avatar"><i class="fa-solid fa-user"></i></span>
              <div>
                <h3>Sharad Dethe</h3>
                <p>Store Owner</p>
                <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
              </div>
            </div>
            <p>Production and BOM tracking was chaotic earlier. With TRUERP, everything is structured and easy to trace.</p>
          </article>

          <article class="card testimonial-card">
            <div class="testimonial-head">
              <span class="avatar"><i class="fa-solid fa-user"></i></span>
              <div>
                <h3>Nitin Rajwade</h3>
                <p>Purchase Head</p>
                <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
              </div>
            </div>
            <p>Excellent support and clean interface. It improved productivity and reduced operational mistakes significantly.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="section stats">
      <div class="container stats-grid">
        <div>
          <strong>50234</strong>
          <p>Total Leads</p>
        </div>
        <div>
          <strong>56</strong>
          <p>Team Members</p>
        </div>
        <div>
          <strong>1453</strong>
          <p>Projects Done</p>
        </div>
        <div>
          <strong>50</strong>
          <p>Branches Active</p>
        </div>
      </div>
    </section>

    <section id="services" class="section services">
      <div class="container">
        <h2 class="section-title">Services</h2>
        <p class="section-subtitle">Empowering your operations with smarter workflows.</p>

        <div class="cards-grid two-col">
          <article class="card service-card">
            <div class="icon-box"><i class="fa-solid fa-wave-square"></i></div>
            <div>
              <h3>Quotation &amp; Sales Management</h3>
              <p>Create, track, and convert quotations into sales orders quickly for better conversion and customer service.</p>
            </div>
          </article>

          <article class="card service-card">
            <div class="icon-box"><i class="fa-solid fa-sitemap"></i></div>
            <div>
              <h3>Purchase &amp; Inventory</h3>
              <p>Handle purchase orders, GRR, and bills in one place with accurate stock movement and vendor tracking.</p>
            </div>
          </article>

          <article class="card service-card">
            <div class="icon-box"><i class="fa-solid fa-users"></i></div>
            <div>
              <h3>Payroll &amp; HR Management</h3>
              <p>Simplify attendance, salary processing, and employee records with less manual effort.</p>
            </div>
          </article>

          <article class="card service-card">
            <div class="icon-box"><i class="fa-solid fa-chart-line"></i></div>
            <div>
              <h3>Dashboard &amp; Analytics</h3>
              <p>Real-time operational dashboards for sales, expenses, production, and performance insights.</p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section id="pricing" class="section pricing">
      <div class="container">
        <h2 class="section-title">Pricing</h2>
        <p class="section-subtitle">Flexible pricing plans for every stage of manufacturing growth.</p>

        <div class="pricing-grid">
          <article class="price-card">
            <h3>Small Scale Businesses &amp; Startups</h3>
            <ul>
              <li><i class="fa-solid fa-circle-check"></i> Dashboard &amp; Core Reports</li>
              <li><i class="fa-solid fa-circle-check"></i> Sales &amp; Quotation Module</li>
              <li><i class="fa-solid fa-circle-check"></i> Purchase Order Management</li>
              <li><i class="fa-solid fa-circle-check"></i> Basic Inventory Management</li>
              <li><i class="fa-solid fa-circle-check"></i> GST-enabled Invoicing</li>
              <li><i class="fa-solid fa-circle-check"></i> 3 Months Free Support</li>
            </ul>
            <button class="btn btn-full">Buy Now</button>
          </article>

          <article class="price-card featured">
            <span class="popular-badge">Most Popular</span>
            <h3>Growing Medium-Scale Companies</h3>
            <ul>
              <li><i class="fa-solid fa-circle-check"></i> Advanced Inventory &amp; Alerts</li>
              <li><i class="fa-solid fa-circle-check"></i> Manufacturing / MRP Module</li>
              <li><i class="fa-solid fa-circle-check"></i> Payroll &amp; HR Module</li>
              <li><i class="fa-solid fa-circle-check"></i> Job Costing Module</li>
              <li><i class="fa-solid fa-circle-check"></i> Multi-User Access (up to 20)</li>
              <li><i class="fa-solid fa-circle-check"></i> Free Setup &amp; Training</li>
            </ul>
            <button class="btn btn-full btn-light">Buy Now</button>
          </article>

          <article class="price-card">
            <h3>Large Manufacturing &amp; Multi-Branch</h3>
            <ul>
              <li><i class="fa-solid fa-circle-check"></i> Multi-Branch / Multi-Company Support</li>
              <li><i class="fa-solid fa-circle-check"></i> Advanced KPI Dashboards</li>
              <li><i class="fa-solid fa-circle-check"></i> CRM &amp; Sales Automation</li>
              <li><i class="fa-solid fa-circle-check"></i> Service Management Module</li>
              <li><i class="fa-solid fa-circle-check"></i> Unlimited Users</li>
              <li><i class="fa-solid fa-circle-check"></i> Priority Support (1 Year)</li>
            </ul>
            <button class="btn btn-full">Buy Now</button>
          </article>
        </div>
      </div>
    </section>

    <section class="section faq">
      <div class="container faq-grid">
        <div class="faq-copy">
          <h2>Have a question? Check out the FAQ</h2>
          <p>We covered the key points to help you understand how TRUERP fits your business.</p>
        </div>

        <div class="faq-list">
          <details open>
            <summary>What is TRUERP and who is it designed for?</summary>
            <p>TRUERP is a complete ERP suite designed specifically for manufacturing and fabrication industries.</p>
          </details>
          <details>
            <summary>Can TRUERP manage the end-to-end workflow?</summary>
            <p>Yes. It covers quotations, sales, purchase, BOM, inventory, production, and reporting in one platform.</p>
          </details>
          <details>
            <summary>Is TRUERP cloud-based or offline?</summary>
            <p>Both options are available depending on your setup: cloud deployment or local server installation.</p>
          </details>
          <details>
            <summary>Can modules be customized?</summary>
            <p>Yes. Modules can be configured to match your process and reporting needs.</p>
          </details>
        </div>
      </div>
    </section>

    <section class="cta">
      <div class="container cta-inner">
        <h2>Ready to streamline your operations? Let&apos;s get started today.</h2>
        <a href="#contact" class="btn btn-light-outline">Get Started</a>
      </div>
    </section>

    <section id="contact" class="section contact">
      <div class="container">
        <h2 class="section-title">Contact</h2>
        <p class="section-subtitle">Take the next step toward smarter, faster business management.</p>

        <div class="contact-grid">
          <aside class="contact-info">
            <h3>Contact Info</h3>
            <div class="info-item">
              <i class="fa-solid fa-location-dot"></i>
              <div>
                <h4>Our Location</h4>
                <p>Amanora Chambers, Office 527, Pune</p>
              </div>
            </div>
            <div class="info-item">
              <i class="fa-solid fa-phone"></i>
              <div>
                <h4>Phone Number</h4>
                <p>+91 80876 11678</p>
              </div>
            </div>
            <div class="info-item">
              <i class="fa-solid fa-envelope"></i>
              <div>
                <h4>Email Address</h4>
                <p>enquiry@truerp.in</p>
              </div>
            </div>
          </aside>

          <form class="contact-form" action="#" method="post">
            <h3>Get In Touch</h3>
            <p>Let&apos;s discuss your requirements and build the right ERP setup for your business.</p>
            <input type="text" name="name" placeholder="Your Name" required />
            <input type="email" name="email" placeholder="Your Email" required />
            <input type="text" name="subject" placeholder="Subject" required />
            <textarea name="message" rows="6" placeholder="Write your message..." required></textarea>
            <button type="submit" class="btn">Send Message</button>
          </form>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="container">
      <p>Copyright <strong>TRUERP</strong>. All Rights Reserved | Powered by <span>TRON Softech</span></p>
    </div>
  </footer>

  <div class="video-popup" id="videoPopup">
    <div class="video-container">
      <button class="close-btn" id="closeVideo" aria-label="Close video">
        <i class="fa-solid fa-xmark"></i>
      </button>
      <iframe id="ytVideo" src="" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
  </div>

  <script>
    const playBtn = document.getElementById("playVideoBtn");
    const popup = document.getElementById("videoPopup");
    const closePopup = document.getElementById("closeVideo");
    const ytVideo = document.getElementById("ytVideo");
    const menuToggle = document.getElementById("menuToggle");
    const navLinks = document.getElementById("navLinks");

    playBtn.addEventListener("click", () => {
      popup.style.display = "flex";
      ytVideo.src = "https://www.youtube.com/embed/9UMA-uGlg50?autoplay=1";
    });

    closePopup.addEventListener("click", () => {
      popup.style.display = "none";
      ytVideo.src = "";
    });

    popup.addEventListener("click", (event) => {
      if (event.target === popup) {
        popup.style.display = "none";
        ytVideo.src = "";
      }
    });

    menuToggle.addEventListener("click", () => {
      navLinks.classList.toggle("active");
    });
  </script>
</body>
</html>

