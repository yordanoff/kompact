        <div class="cf"></div>

        <div class="wrap-fluid">
            <div class="h1">
                <?= $site->footer()->kirbytext() ?>
            </div>
        </div>

        <div class="cf"></div>

        <div class="footer" role="contentinfo">
            <div class="wrap-fluid">
                <?= $site->copyright()->kirbytext()?>
                <div class="cf"></div>
            </div>
        </div>

    </div><!-- #container -->
</div><!-- #canvas -->

<?= js('assets/scripts/main.js') ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-86926114-6', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
