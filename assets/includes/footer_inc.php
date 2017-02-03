
          </div><!--/.jumbotron-->
        </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
            <?= subnav_options($active, $subnav);?>
          </div>
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->

    </div><!--/.container-->

    <footer class="footer">
      <div class="container">
        <p class="text-muted">&copy;  2016 Polar Bear Technologies</p>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?= URL_JS; ?>jquery.min.js"></script>
    <script src="<?= URL_JS; ?>bootstrap.min.js"></script>
    <script src="<?= URL_JS; ?>offcanvas.js"></script>
    <script>
      $(document).ready(function () {
        $('.dropdown-toggle').dropdown();
      });
    </script>
    <!-- <?= $active == "hangman" ? "<script src='" . URL_JS . "hangman.js'></script>" : "";?> -->
    <!-- <?= $active == "match" ? "<script src='" . URL_JS . "matching.js'></script>" : "";?> -->
    <?= $active == "quiz" ? "<script src='" . URL_JS . "quiz.js'></script>" : "";?>

  

</body></html>