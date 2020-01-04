<?php
    function getRequest($url) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $response = curl_exec($ch);
        return json_decode($response);

    }
?>
<?php wp_footer(); ?>
    <footer>
        <div class="container-fluid">
            <div class="row">
                <a target="" href="https://www.instagram.com/lauraine_dogcare/">
                    <div id="instagram">
                        <?php
                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_URL, "https://www.instagram.com/lauraine_dogcare/?__a=1");
                        // Set so curl_exec returns the result instead of outputting it.
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        // Get the response and close the channel.
                        $response = curl_exec($ch);

                        curl_close($ch);
                        var_dump($response);
                        foreach ($response->graphql->user->edge_owner_to_timeline_media->edges as $item) { ?>
                            <div class="insta-item">
                                <img src="<?php echo $item->node->thumbnail_src ?>" alt="">
                            </div>
                        <?php } ?>
                    </div>
                </a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item">
                            <a href="#">
                    <span class="fa-stack fa-lg">
                      <i class="fas fa-circle fa-stack-2x"></i>
                      <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                    </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                    <span class="fa-stack fa-lg">
                      <i class="fas fa-circle fa-stack-2x"></i>
                      <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                    </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                    <span class="fa-stack fa-lg">
                      <i class="fas fa-circle fa-stack-2x"></i>
                      <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                    </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; <?php bloginfo('name');?> 2019</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
