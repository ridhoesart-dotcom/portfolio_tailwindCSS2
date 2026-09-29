<?php
// Hubungkan dan tarik data dari file data.php
include 'data.php'; 
?>

<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="src/output.css" rel="stylesheet" />
  </head>
  <body class="p-0 m-0">
    <!-- Start Navbar -->
    <nav
      class="bg-white fixed w-full z-200 top-0 start-0 border-b border-default shadow-2xl"
    >
      <div
        class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4"
      >
        <a
          href="https://flowbite.com/"
          class="flex items-center space-x-3 rtl:space-x-reverse"
          ><h1 class="text-2xl text-teal-500">RidhoesArt</h1></a
        >
        <button
          data-collapse-toggle="navbar-default"
          type="button"
          class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-body rounded-base md:hidden hover:bg-neutral-secondary-soft hover:text-heading focus:outline-none focus:ring-2 focus:ring-neutral-tertiary"
          aria-controls="navbar-default"
          aria-expanded="false"
        >
          <span class="sr-only">Open main menu</span>
          <svg
            class="w-6 h-6"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            fill="none"
            viewBox="0 0 24 24"
          >
            <path
              stroke="currentColor"
              stroke-linecap="round"
              stroke-width="2"
              d="M5 7h14M5 12h14M5 17h14"
            />
          </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
          <ul
            class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-default rounded-base bg-neutral-secondary-soft md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-neutral-primary"
          >
            <li>
              <a
                href="#beranda"
                class="block py-2 px-3 text-heading rounded md:bg-transparent hover:bg-neutral-tertiary md:hover:text-teal-500 md:p-0"
                aria-current="page"
                >Beranda</a
              >
            </li>
            <li>
              <a
                href="#beranda"
                class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-teal-500 md:p-0 md:dark:hover:bg-transparent"
                >Tentang Saya</a
              >
            </li>
            <li>
              <a
                href="#portfolio"
                class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-teal-500 md:p-0 md:dark:hover:bg-transparent"
                >Portfolio</a
              >
            </li>
            <li>
              <a
                href="#clients"
                class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-teal-500 md:p-0 md:dark:hover:bg-transparent"
                >Clients</a
              >
            </li>
            <li>
              <a
                href="#blog"
                class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-teal-500 md:p-0 md:dark:hover:bg-transparent"
                >Blog</a
              >
            </li>
            <li>
              <a
                href="#contact"
                class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-teal-500 md:p-0 md:dark:hover:bg-transparent"
                >Contact</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Start Hero Section -->
    <section id="beranda" class="pt-30">
      <div
        class="hero-section w-[80%] mx-auto grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2"
      >
        <div class="left-side">
          <h1 class="text-teal-500 md:text-2xl">
            Hallo semua, saya
            <span class="block text-3xl font-bold text-slate-900"
              >M. Ridho</span
            >
          </h1>
          <h2 class="mb-3 font-medium">Student & Programmer</h2>
          <p class="mb-5 leading-relaxed">
            Belajar Web Programming itu mudah dan menyenangkan bukan,
            <span class="text-dark font-bold">bukan!</span>
          </p>
          <a
            href=""
            class="text-base font-semibold bg-teal-500 hover:bg-teal-400 rounded-full py-1 px-4 hover:shadow-lg text-white hover:opacity-80 transition duration-300 ease-in-out"
            >Hubungi Saya</a
          >
        </div>
        <div class="right-side mt-15 lg:mt-0">
          <div class="relative lg:right-0">
            <img
              class="m-auto w-[60%] lg:w-[40%]"
              src="img/PasFoto_Biru.png"
              alt="M.Ridho"
            />
            <span
              class="absolute left-0 bottom-0 lg:-bottom-8 lg:left-20 -z-10 lg:scale-1.2"
            >
              <svg
                width="400"
                height="400"
                viewBox="0 0 200 200"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill="#14B8a6"
                  d="M28.9,-50.1C40.7,-43.1,55.8,-42.1,62.7,-34.7C69.6,-27.3,68.2,-13.7,64.4,-2.2C60.6,9.3,54.4,18.5,49,28.5C43.6,38.5,39.1,49.2,31.1,54.1C23.1,59,11.5,58.1,-2.3,62C-16.1,65.9,-32.2,74.7,-42.5,71.2C-52.9,67.7,-57.6,51.8,-58.5,37.9C-59.5,24,-56.6,12,-56.9,-0.1C-57.1,-12.3,-60.5,-24.6,-58.4,-36.6C-56.4,-48.5,-48.9,-60.2,-38.3,-67.9C-27.7,-75.5,-13.8,-79.2,-2.7,-74.6C8.5,-70,17,-57.1,28.9,-50.1Z"
                  transform="translate(100 100) scale(1)"
                />
              </svg>
            </span>
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero Section -->

    <!-- Start Tentang-Saya Section -->
    <section id="tentang-saya" class="py-2">
      <div
        class="w-[80%] mx-auto grid grid-cols-1 lg:grid-cols-2 md:gap-20 lg:gap-20"
      >
        <div class="left-side">
          <h1 class="text-teal-500">Tentang Saya</h1>
          <h2>
            <p class="font-medium">
              Yuk, Belajar Web programming <span class="block">di WPU!</span>
            </p>
            <p class="mt-5 text-justify text-base font-medium text-[#696666]">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Dignissimos eum iusto minima vero provident voluptate. Unde,
              voluptatibus. Sed praesentium quasi deserunt voluptas illo. Sint,
              architecto a eius ducimus natus corrupti?
            </p>
          </h2>
        </div>
        <div class="right-side">
          <h1 class="font-medium text-md mt-5">Mari Berteman</h1>
          <p class="text-justify text-base font-medium text-[#696666]">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum
            voluptates sunt sed nemo optio voluptate dolor praesentium velit,
            officiis modi magni. Inventore dicta veniam unde officia in ratione
            consequatur? Nemo.
          </p>
          <div class="social-media mt-2 w-[50%] flex justify-around opacity-40">
            <div class="youtube border rounded-full p-1">
              <svg
                class="w-6 h-6 text-gray-800 dark:text-white"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  fill-rule="evenodd"
                  d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z"
                  clip-rule="evenodd"
                />
              </svg>
            </div>
            <div class="instagram border rounded-full p-1">
              <svg
                class="w-6 h-6 text-gray-800 dark:text-white"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="none"
                viewBox="0 0 24 24"
              >
                <path
                  fill="currentColor"
                  fill-rule="evenodd"
                  d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                  clip-rule="evenodd"
                />
              </svg>
            </div>
            <div class="twitter border rounded-full p-1">
              <svg
                class="w-6 h-6 text-gray-800 dark:text-white"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  fill-rule="evenodd"
                  d="M22 5.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.343 8.343 0 0 1-2.605.981A4.13 4.13 0 0 0 15.85 4a4.068 4.068 0 0 0-4.1 4.038c0 .31.035.618.105.919A11.705 11.705 0 0 1 3.4 4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 6.1 13.635a4.192 4.192 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 2 18.184 11.732 11.732 0 0 0 8.291 20 11.502 11.502 0 0 0 19.964 8.5c0-.177 0-.349-.012-.523A8.143 8.143 0 0 0 22 5.892Z"
                  clip-rule="evenodd"
                />
              </svg>
            </div>
            <div class="link-ind border rounded-full p-1">
              <svg
                class="w-6 h-6 text-gray-800 dark:text-white"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  fill-rule="evenodd"
                  d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z"
                  clip-rule="evenodd"
                />
                <path d="M7.2 8.809H4V19.5h3.2V8.809Z" />
              </svg>
            </div>
            <div class="discord border rounded-full p-1">
              <svg
                class="w-6 h-6 text-gray-800 dark:text-white"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  d="M18.942 5.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.586 11.586 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3 17.392 17.392 0 0 0-2.868 11.662 15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.638 10.638 0 0 1-1.706-.83c.143-.106.283-.217.418-.331a11.664 11.664 0 0 0 10.118 0c.137.114.277.225.418.331-.544.328-1.116.606-1.71.832a12.58 12.58 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM8.678 14.813a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.929 1.929 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"
                />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Tentang-Saya Section -->

    <!-- Start Portfolio -->
    <section id="portfolio" class="py-25 bg-[#ddd]">
      <div class="w-[80%] mx-auto max-w-full">
        <div class="head text-center">
          <h1 class="text-teal-500 font-semibold">Portfolio</h1>
          <h2 class="text-5xl my-3">Project Terbaru</h2>
          <p class="text-[#716e6e]">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem
            quibusdam at mollitia optio explicabo! Delectus.
          </p>
        </div>
        <div class="projects mt-10 grid lg:grid-cols-2 gap-7">
          <div class="project-1">
            <img src="img/project.png" alt="project-1" />
            <h1 class="font-semibold text-base my-3">Ridhoes Landing Page</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet,
              porro!
            </p>
          </div>
          <div class="project-2">
            <img src="img/project.png" alt="project-1" />
            <h1 class="font-semibold text-base my-3">Ridhoes Cofee</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet,
              porro!
            </p>
          </div>
          <div class="project-1">
            <img src="img/project.png" alt="project-1" />
            <h1 class="font-semibold text-base my-3">Ridhoes Blogs Project</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet,
              porro!
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- End Portfolio -->

    <!-- Start Clients -->
    <section id="clients" class="py-20 bg-slate-800">
      <div class="w-[80%] mx-auto text-center">
        <h4 class="text-teal-500 font-semibold text-lg">Clients</h4>
        <h1 class="text-white text-2xl lg:text-3xl font-semibold mb-3">
          Yang Pernah Bekerjasama
        </h1>
        <p class="text-[#716e6e] mb-7 text-md lg:text-lg">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis,
          nostrum?
        </p>
        <div
          class="logo w-[50%] md:w-[40%] lg:w-[60%] grid grid-cols-2 lg:grid-cols-[repeat(auto-fit,minmax(100px,1fr))] m-auto gap-4"
        >
          <a
            class="google cursor-pointer grayscale opacity-10 hover:opacity-100 hover:grayscale-0 transition-opacity duration-500 ease-in-out"
          >
            <img src="img/clients/google.svg" alt="" />
          </a>
          <a
            class="twitter cursor-pointer grayscale opacity-10 hover:opacity-100 hover:grayscale-0 transition-opacity duration-500 ease-in-out"
          >
            <img src="img/clients/twitter.svg" alt="" />
          </a>
          <a
            class="microsoft cursor-pointer grayscale opacity-10 hover:opacity-100 hover:grayscale-0 transition-opacity duration-500 ease-in-out"
          >
            <img src="img/clients/microsoft.svg" alt="" />
          </a>
          <a
            class="photoshop cursor-pointer grayscale opacity-10 hover:opacity-100 hover:grayscale-0 transition-opacity duration-500 ease-in-out"
          >
            <img src="img/clients/photoshop.svg" alt="" />
          </a>
          <a
            class="linkedin cursor-pointer grayscale opacity-10 hover:opacity-100 hover:grayscale-0 transition-opacity duration-500 ease-in-out"
          >
            <img src="img/clients/linkedin.svg" alt="" />
          </a>
        </div>
      </div>
    </section>
    <!-- End Clients -->

    <!-- Start Blog -->
    <section id="blog" class="py-20 bg-[#ddd]">
      <div class="w-[80%] mx-auto text-center">
        <h4 class="text-teal-500 font-semibold text-lg">Blog</h4>
        <h1 class="text-3xl font-semibold">Tulisan Terkini</h1>
        <p class="text-[#716e6e] text-base lg:text-lg font-medium mb-3">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum,
          explicabo.
        </p>
        <div
          class="w-auto mx-auto grid lg:grid-cols-[repeat(auto-fit,minmax(100px,1fr))] gap-5"
        >
          <?php foreach($data as $d): ?>
          <div
            href="#"
            class="w-[90%] mx-auto bg-neutral-primary-soft block max-w-sm px-2 py-3 border border-default rounded-base shadow-xs hover:bg-neutral-secondary-medium text-left"
          >
            <img class="rounded-base" src="<?= $d['gambar']; ?>" alt="" />
            <h5
              class="mb-1 text-xl font-semibold tracking-tight text-heading leading-8 mt-4"
            >
              <?= $d['title']; ?>
            </h5>
            <p class="text-body mb-4"><?= $d['body']; ?></p>
            <a href="" class="bg-teal-500 text-white rounded-md py-1 px-3"
              >Baca Selengkapnya &raquo;</a
            >
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <!-- End Blog -->

    <!-- Start Contact -->
    <section id="contact" class="py-20">
      <div class="contact text-center w-[80%] mx-auto">
        <h4 class="text-teal-500 font-semibold text-lg">Contact</h4>
        <h1 class="text-2xl font-semibold">Hubungi Kami</h1>
        <p class="text-[#716e6e] text-base lg:text-lg font-medium mb-3">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore
          accusamus eligendi delectus, esse inventore porro!
        </p>

        <form action="" class="">
          <div class="mb-7 w-full flex flex-col">
            <label for="name" class="flex start text-teal-500">Name</label>
            <input
              type="text"
              name="name"
              id="name"
              class="w-full bg-slate-200 text-dark rounded-sm focus:outline-none focus:ring-teal-500 focus:ring-1 focus:border-teal-500"
            />
          </div>
          <div class="mb-7 w-full flex flex-col">
            <label for="name" class="flex start text-teal-500">Email</label>
            <input
              type="email"
              name="email"
              id="email"
              class="w-full bg-slate-200 text-dark rounded-sm focus:outline-none focus:ring-teal-500 focus:ring-1 focus:border-teal-500"
            />
          </div>
          <div class="mb-7 w-full flex flex-col">
            <label for="name" class="flex start text-teal-500">Pesan</label>
            <textarea
              name="pesan"
              id="pesan"
              class="w-full bg-slate-200 text-dark rounded-sm focus:outline-none focus:ring-teal-500 focus:ring-1 focus:border-teal-500 h-32"
            ></textarea>
            <button
              type="submit"
              name="submit"
              class="bg-teal-500 w-max text-white py-1 px-3 rounded-lg mt-2 hover:bg-teal-700 transition duration-100 cursor-pointer"
            >
              Kirim
            </button>
          </div>
        </form>
      </div>
    </section>
    <!-- End Contact -->

    <!-- Start Footer -->
    <footer class="bg-slate-800 py-10">
      <div class="w-[90%] mx-auto grid grid-cols-1 text-white">
        <div class="w-[90%] above grid grid-cols-1 md:grid-cols-3  md:justify-center lg:justify-beetwen gap-10 mx-auto"
        >
          <div class="left">
            <h1 class="text-3xl font-extrabold mb-3">RidhoesArt</h1>
            <h2 class="font-semibold text-md mb-1">Hubungi kami</h2>
            <p class="text-sm font-md">
              ridhoesart@gmail.com
              <span class="block">Jl.Pasar Lama No.2</span>
              <span class="block">Asahan, Sumatera Utara</span>
            </p>
          </div>
          <div class="center">
            <h1 class="text-xl font-bold mb-3">Kategori Tulisan</h1>
            <p class="text-sm font-md">
              Programming
              <span class="block">Gaya hidup</span>
              <span class="block">Teknologi</span>
            </p>
          </div>
          <div class="right">
            <h1 class="text-xl font-bold mb-3">Tautan</h1>
            <p class="text-sm font-md">
              Beranda
              <span class="block">Tentang Saya</span>
              <span class="block">Portfolio</span>
              <span class="block">Clients</span>
              <span class="block">Blog</span>
              <span class="block">Contact</span>
            </p>
          </div>
        </div>

        <hr class="my-10">

        <div class="bottom flex gap-4 w-min mx-auto">
          <div class="instgram">
            <svg
              class="w-6 h-6 text-white-800 dark:text-white"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              fill="none"
              viewBox="0 0 24 24"
            >
              <path
                fill="currentColor"
                fill-rule="evenodd"
                d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                clip-rule="evenodd"
              />
            </svg>
          </div>
          <div class="twitter">
            <svg
              class="w-6 h-6 text-white-800 dark:text-white"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              fill="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                fill-rule="evenodd"
                d="M22 5.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.343 8.343 0 0 1-2.605.981A4.13 4.13 0 0 0 15.85 4a4.068 4.068 0 0 0-4.1 4.038c0 .31.035.618.105.919A11.705 11.705 0 0 1 3.4 4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 6.1 13.635a4.192 4.192 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 2 18.184 11.732 11.732 0 0 0 8.291 20 11.502 11.502 0 0 0 19.964 8.5c0-.177 0-.349-.012-.523A8.143 8.143 0 0 0 22 5.892Z"
                clip-rule="evenodd"
              />
            </svg>
          </div>

          <div class="facebook">
            <svg
              class="w-6 h-6 text-white-800 dark:text-white"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              fill="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                fill-rule="evenodd"
                d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                clip-rule="evenodd"
              />
            </svg>
          </div>
          <div class="linkedin">
            <svg
              class="w-6 h-6 text-white-800 dark:text-white"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              fill="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                fill-rule="evenodd"
                d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z"
                clip-rule="evenodd"
              />
              <path d="M7.2 8.809H4V19.5h3.2V8.809Z" />
            </svg>
          </div>
        </div>

        <div class="mt-5 mx-auto">
          <p class="text-xs">Dibuat Oleh <span class="text-teal-500 font-semibold">M. Ridha Lubis</span>, dengan menggunakan <span class="text-blue-500 font-semibold">Tailwind CSS</span>.</p>
        </div>

      </div>
    </footer>
    <!-- End Footer -->

    <script src="node_modules/flowbite/dist/flowbite.min.js"></script>
  </body>
</html>
