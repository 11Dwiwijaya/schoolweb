<body>
    <script src="<?= base_url('assets/js/jquery-3.6.0.min.js'); ?>"></script>
    <script src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/datatables/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?= base_url('assets/datatables/js/dataTables.bootstrap5.js'); ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        // Add smooth scrolling to all links
        $("a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
            } // End if
        });
        });
    </script>
    <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
    </script>
</body>