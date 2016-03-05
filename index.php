<?php get_header(); ?>

	<div id="intro-video-container">
		<div id="intro-video">
			
		</div>
	</div>

    <script>
      var tag = document.createElement('script');
      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('intro-video', {
          height: '600',
          width: '100%',
          videoId: '3k4Z3XkEjag',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.playVideo();
      }

      function infiniteSeekToStart(ms) {
      	setTimeout(function() {
      		player.seekTo(0);
      		infiniteSeekToStart(ms);
      	}, ms);
      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING) {
        	infiniteSeekToStart(20000);
        }
      }
    </script>	

<?php get_footer(); ?>