	<!-- Footer -->
  <footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">

      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a target="_blank" class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="https://www.facebook.com/{{ $sosyal->facebook }}" role="button"><i class="fab fa-facebook-f"></i></a>

        <!-- Twitter -->
        <a target="_blank" class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="https://twitter.com/{{ $sosyal->twitter }}" role="button"><i class="fab fa-twitter"></i></a>

        <!-- Google -->
        <a target="_blank" class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="mailto:{{ $sosyal->mail }}" role="button"><i class="fab fa-google"></i></a>

        <!-- Instagram -->
        <a target="_blank" class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="https://www.instagram.com/{{ $sosyal->instagram }}" role="button"><i class="fab fa-instagram"></i></a>


      </section>
      <!-- Section: Social media -->




    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      © 2022 Copyright:
      <a class="text-white" href="{{ route("index") }}">HTAS - HABER</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="js/jquery.js"></script>
  <script src="js/islem.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
