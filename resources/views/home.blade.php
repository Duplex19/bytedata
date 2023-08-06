 @extends('layouts.main')

@section('home')
<section class="hero" id="home">
<main class="content">
  <div class="title">
  <h1>Layanan Jasa Di <span>Bidang IT</span></h1>
  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, modi.</p>
  <a href="#menu" class="cta">Coba Layanan</a>
</div>
<div class="flag">
  <img src="img/nobg.png" alt="">
</div>
</main>
</section>

     <!-- About Section start -->
     <section id="about" class="about">
        <h2><span>Tentang</span> Kami</h2>

        <div class="row ">
          <div class="about-img">
            <img src="img/tentang-kmi.png" alt="Tentang Kami" />
          </div>
          <div class="content">
            <h3>Kenapa memilih layanan kami?</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro obcaecati minus magnam, nisi quo enim commodi blanditiis iusto doloremque eaque deleniti cumque sequi debitis eveniet autem dolor nobis reprehenderit corporis?</p>
          </div>
        </div>
      </section>
      <!-- About Section end -->

      <!-- Menu Section start -->
    <section id="menu" class="menu">
        <h2><span>Layanan</span> Kami</h2>
        <p>Kami memberikan Solusi untuk memenuhi kebutuhan anda di bidang IT.</p>
  <div class="row">
  <a href="#">
      <div class="menu-card">
      <img src="img/menu/web-development.jpg" alt="Web Development" class="menu-card-img">
      <h3 class="menu-card-title">Web Development</h3>
    </div>
  </a>
  <a href="#">
  <div class="menu-card">
      <img src="img/menu/cloud-storage.png" alt="Cloud Storage" class="menu-card-img">
      <h3 class="menu-card-title">Cloud Storage</h3>
    </div>
  </a>
  <a href="#">
    <div class="menu-card">
      <img src="img/menu/virtualprivatenet.jpg" alt="Virtual Private Network" class="menu-card-img">
      <h3 class="menu-card-title">Virtual Private Network</h3>
    </div>
  </a>
  <a href="#">
    <div class="menu-card">
      <img src="img/menu/mikrotik.jpg" alt="Jasa Setting Mikrotik" class="menu-card-img">
      <h3 class="menu-card-title">Jasa Setting Mikrotik</h3>
    </div>
  </a>
  </div>
    </section>
      <!-- Menu Section end -->

       <!-- Contact Section start -->
    <section id="contact" class="contact">
      <h2><span>Kontak</span> Kami</h2>
      <p>
        Untuk Informasi Lebih lanjut isi form berikut, dan tim kami
        akan menghubungi anda.
      </p>

      <div class="row">
        {{-- <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31821.967652110754!2d105.24798530673439!3d-4.458274406593164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3f3a4b39cc027b%3A0x4833415753de9c14!2sMenggala%20Kota%2C%20Kec.%20Menggala%2C%20Kab.%20Tulang%20Bawang%2C%20Lampung!5e0!3m2!1sid!2sid!4v1676515177759!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe> --}}
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248.73544597075988!2d104.97458222046983!3d-4.0678123892408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e393262ddfdc957%3A0xc101ab7b65c701b8!2sSurya%20Karta%2C%20Mesuji%20Makmur%2C%20Ogan%20Komering%20Ilir%20Regency%2C%20South%20Sumatra!5e0!3m2!1sen!2sid!4v1691283555793!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <form action="">
          <div class="input-group">
            <i data-feather="user" ></i>
            <input type="text" placeholder="Nama" />
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="text" placeholder="Email" />
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" placeholder="No Hp" />
          </div>
          <button type="submit" class="btn">Kirim Pesan</button>
        </form>
      </div>
    </section>

    <!-- Contact Section end -->

   <!-- Footer start -->
    <footer>
      <div class="socials">
        <a href="https://instagram.com/bytedata_id"><i data-feather="instagram"></i></a>
        <a href="https://wa.me/6285174399112"><i class="fa fa-whatsapp" style="font-size:24px"></i></a>
        <a href="mailto:bytedata.id@gmail.com"><i data-feather="mail"></i></a>
      </div>

      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu">Layanan Kami</a>
        <a href="#contact">Kontak</a>
      </div>

      <div class="credit">
        <p>Created by <a href="/">bytedata.id</a> | &copy; 2023.</p>
      </div>
    </footer>
    <!-- Footer end -->

    @endsection

