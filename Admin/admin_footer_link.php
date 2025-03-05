<script
      type="text/javascript"
      src="../Assets/js/code.jquery.com_jquery-3.7.0.min.js"
    ></script>
    <script
      type="text/javascript"
      src="../Assets/bootstrap/js/bootstrap.bundle.min.js"
    ></script>
    <!-- <script
      type="text/javascript"
      src="Assets/OwlCarousel2-2.3.4/dist/owl.carousel.js"
    ></script>
    <script
      type="text/javascript"
      src="Assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"
    ></script> -->

    <!-- <script type="text/javascript" src="../Assets/js/main.js">
    </script>
    <script type="text/javascript" src="../Assets/js/ionicons.js"></script>
    <script type="text/javascript" src="../Assets/js/ionicons.esm.js"></script> -->
    <script type="text/javascript">
      $(".owl-carousel").owlCarousel({
        stagePadding: 50,
        loop: true,
        margin: 20,
        nav: true,
        navText: [
          "<i class='fa fa-caret-left'></i>",
          "<i class='fa fa-caret-right'></i>",
        ],
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 3,
          },
          1000: {
            items: 5,
          },
        },
      });
    </script>
  </body>
</html>
