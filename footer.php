  <div id="footer-secondary" class="margin-top-20 content-section text-center container footer">

    <div class="row footer-secondary">
      <div class="col-xs-12 col-sm-4 col-lg-3">
        <h6>
          &copy; Copyright 2015, MomoMedia

        </h6>
      </div>
      <div class="col-xs-12 col-sm-4 col-lg-6" style="display: inline-block;margin-top: -5px">
       <div class="fb-like" style="margin:5px;vertical-align: top;display: inline-block;" data-href="https://www.facebook.com/momomedia.in" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
       <a href="https://twitter.com/momomediaindia" class="twitter-follow-button" style="margin: 5px;" data-show-count="false">Follow @momomediaindia</a>
       <div class="g-ytsubscribe" data-channelid="UCnt-d1Tu5utXzDU1K2I0S1w" style="margin:5px;" data-layout="default" data-count="default"></div>
     </div>
     <div class="col-xs-12 col-sm-4 col-lg-3 padding-0">
     <h6 class="pull-right">Built with <i class="fa fa-heart"></i> by <a href="http://twitter.com/skykog" class="referral-link" target="_blank">SkyKOG</a> / <a href="http://tailwebs.com/" class="referral-link" target="_blank">TailWebs</a></h6>
    </div>
  </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/html5lightbox.js"></script>
<script src="filterizr/jquery.filterizr.js"></script>

<!-- Core JavaScript Files -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/script.js"></script>


<script>
      (function() {
        // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
        if (!String.prototype.trim) {
          (function() {
            // Make sure we trim BOM and NBSP
            var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
            String.prototype.trim = function() {
              return this.replace(rtrim, '');
            };
          })();
        }
        
        [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
          // in case the input is already filled..
          if( inputEl.value.trim() !== '' ) {
            classie.add( inputEl.parentNode, 'input--filled' );
          }

          // events:
          inputEl.addEventListener( 'focus', onInputFocus );
          inputEl.addEventListener( 'blur', onInputBlur );
        } );

         [].slice.call( document.querySelectorAll( 'textarea.input__field' ) ).forEach( function( inputEl ) {
          // in case the input is already filled..
          if( inputEl.value.trim() !== '' ) {
            classie.add( inputEl.parentNode, 'input--filled' );
          }

          // events:
          inputEl.addEventListener( 'focus', onInputFocus );
          inputEl.addEventListener( 'blur', onInputBlur );
        } );


        function onInputFocus( ev ) {
          classie.add( ev.target.parentNode, 'input--filled' );
        }

        function onInputBlur( ev ) {
          if( ev.target.value.trim() === '' ) {
            classie.remove( ev.target.parentNode, 'input--filled' );
          }
        }
      })();
    </script>

<script src="js/validation.js"></script>
<script src="https://apis.google.com/js/platform.js"></script>
<script type="text/javascript" src="js/classie.js" ></script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<!-- google analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67526507-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- Kick off Filterizr -->
<script type="text/javascript">
  $(function() {
            //Initialize filterizr with default options
            $('.filtr-container').filterizr();
          });
        </script> 
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5768eba23e885b49"></script>

      </body>
      </html>