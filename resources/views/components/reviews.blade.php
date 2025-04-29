@props([
    'name' => 'Jonathon Andrew',
    'date' => date("d/m/Y"),
    'time' => date_default_timezone_set("America/New_York"),
    'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.  ',
    'img'=> ''
])

<!-- Comment Item start-->
<li class="media">

    <a class="pull-left" href="#!">
        <img class="media-object comment-avatar" src="{{ asset('assets/web/images/blog/avater-1.jpg') }}" alt="" width="50" height="50">
    </a>

    <div class="media-body">
        <div class="comment-info">
            <h4 class="comment-author">
                <a href="#!">Jonathon Andrew</a>

            </h4>
            <time>July 02, 2015, at 11:34</time>
            <a class="comment-button" href="#!"><i class="tf-ion-chatbubbles"></i>Reply</a>
        </div>

        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.
        </p>

            <!--  second level Comment start-->
            <x-review-replies />
            <!-- second level Comment end -->

    </div>

</li>
<!-- End Comment Item -->
