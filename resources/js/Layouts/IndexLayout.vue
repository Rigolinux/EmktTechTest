<script setup>
import MdiIcon from '@/Components/MdiIcon.vue';
import { mdiFacebook,mdiTwitter, mdiInstagram,mdiLinkedin } from '@mdi/js';
</script>

<template>
     <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
        <img src="../assets/logo.png" alt="Logo" class="navbar-brand" />

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="#Home">Home <span class="sr-only">(current)</span></a>
                </li>

            </ul>
        </div>
    </nav>
  </header>
  <main>
      <slot />
  </main>

  <footer  class="bg-light text-center text-lg-start mt-auto">
    <div class="container p-4">
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Contact</h5>
          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-dark">123 Main St, City, Country</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Email: info@example.com</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Phone: +1 234 567 890</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Useful Links</h5>
          <ul class="list-unstyled">
            <li>
              <a href="#!" class="text-dark">Privacy Policy</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Terms of Service</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Support</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0 ">
          <h5 class="text-uppercase">Follow Us</h5>
            <ul class="list-unstyled flex flex-col justify-center">
                <li class="">
                    <a href="" class="text-dark d-flex align-items-center">
                    <MdiIcon :path="mdiFacebook" />
                    <span class="ml-2">Facebook</span>
                    </a>
                </li>
                <li>
                    <a href="" class="text-dark d-flex align-items-center">
                    <MdiIcon :path="mdiTwitter" />
                    <span class="ml-2">Twitter</span>
                    </a>
                </li>
                <li>
                    <a href="" class="text-dark d-flex align-items-center">
                    <MdiIcon :path="mdiInstagram" />
                    <span class="ml-2">Instagram</span>
                    </a>
                </li>
                <li>
                    <a href="" class="text-dark d-flex align-items-center">
                    <MdiIcon :path="mdiLinkedin" />
                    <span class="ml-2">Linkedin</span>
                    </a>
                </li>
            </ul>

        </div>
      </div>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2024 Company Name
    </div>
  </footer>

</template>
