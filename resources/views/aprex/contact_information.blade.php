@include("inc_aprex.header")

<body class="color-theme-orange mont-font">



    
    <div class="main-wrapper">


        <!-- navigation -->
                @include("inc_aprex.navbar")
        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include("inc_aprex.topbar")
            <div class="middle-sidebar-bottom bg-lightblue theme-dark-bg">
                <div class="middle-sidebar-left">
                    <div class="middle-wrap">
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                            <div class="card-body p-4 w-100 bg-current border-0 d-flex rounded-lg">
                                <a href="default_settings" class="d-inline-block mt-2"><i class="ti-arrow-left font-sm text-white"></i></a>
                                <h4 class="font-xs text-white fw-600 ml-4 mb-0 mt-2">Contact Information</h4>
                            </div>
                            <div class="card-body p-lg-5 p-4 w-100 border-0 mb-0">
                             

                            <form action="#">
                                 

                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss"  >Country</label>
                                            <input type="text" name="comment-name" class="form-control">
                                        </div>        
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss"  >City</label>
                                            <input type="text" name="comment-name" class="form-control">
                                        </div>        
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss"  >Address</label>
                                            <input type="text" name="comment-name" class="form-control">
                                        </div>        
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss"  >Pincode</label>
                                            <input type="text" name="comment-name" class="form-control">
                                        </div>        
                                    </div>

                                    <div class="col-lg-12 mb-3">
                                        <div id="map" class="rounded-lg overflow-hidden" style="height: 200px; position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"><div tabindex="0" aria-label="Map" aria-roledescription="map" role="group" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;"><div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 988; transform: matrix(1, 0, 0, 1, -58, -252);"><div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div style="position: absolute; z-index: 988; transform: matrix(1, 0, 0, 1, -58, -252);"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: 0px;"></div></div></div><div style="width: 50px; height: 50px; overflow: hidden; position: absolute; left: -25px; top: -50px; z-index: 0;"><img alt="" src="images/map-marker.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 50px; height: 50px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 988; transform: matrix(1, 0, 0, 1, -58, -252);"><div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i3767!3i2458!4i256!2m3!1e0!2sm!3i543269378!3m17!2sen-GB!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC52Om9uLHMudDoxfHMuZTpsLnQuZnxwLmM6I2ZmNDQ0NDQ0LHMudDoxOHxwLnY6b2ZmLHMudDoxOXxwLnY6b2ZmLHMudDoyMHxwLnY6b2ZmLHMudDoyMXxwLnY6b2ZmLHMudDoyMXxzLmU6bC50fHAudjpvZmYscy50OjV8cC5jOiNmZmYyZjJmMixzLnQ6ODF8cC52OnNpbXBsaWZpZWQscy50OjJ8cC52Om9mZnxwLmM6I2ZmY2VlOWRlfHAuczoyfHAudzowLjgwLHMudDozN3xzLmU6Zy5mfHAudjpvZmYscy50OjQwfHAudjpvbixzLnQ6M3xwLnM6LTEwMHxwLmw6NDUscy50OjQ5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6Zy5mfHAudjpvbnxwLmM6I2ZmZjVkNmQ2LHMudDo0OXxzLmU6bC50fHAudjpvZmYscy50OjQ5fHMuZTpsLml8cC5oOiNmZjAwMDB8cC52Om9uLHMudDo3ODV8cy5lOmwudHxwLnY6c2ltcGxpZmllZCxzLnQ6Nzg1fHMuZTpsLml8cC52Om9ufHAuaDojMDA2NGZmfHAuZzoxLjQ0fHAubDotM3xwLnc6MS42OSxzLnQ6NTB8cC52Om9uLHMudDo1MHxzLmU6bC50fHAudjpvZmYscy50OjUwfHMuZTpsLml8cC52Om9mZixzLnQ6NTF8cC52Om9uLHMudDo1MXxzLmU6bC50fHAudjpzaW1wbGlmaWVkfHAudzowLjMxfHAuZzoxLjQzfHAubDotNXxwLnM6LTIyLHMudDo0fHAudjpvZmYscy50OjY1fHAudjpvbnxwLmg6I2ZmMDAwMCxzLnQ6MTA1OXxwLnY6c2ltcGxpZmllZHxwLmg6I2ZmMDA0NSxzLnQ6MTA1OHxwLnY6b258cC5oOiMwMGQxZmYscy50OjEwNTh8cy5lOmwudHxwLnY6c2ltcGxpZmllZCxzLnQ6MTA1N3xwLnY6c2ltcGxpZmllZHxwLmg6IzAwY2JmZixzLnQ6MTA1N3xzLmU6bC50fHAudjpzaW1wbGlmaWVkLHMudDo2fHAuYzojZmY0NmJjZWN8cC52Om9uLHMudDo2fHMuZTpnLmZ8cC53OjEuNjF8cC5jOiNmZmNkZTJlNXxwLnY6b24!4e0&amp;key=AIzaSyCOdKtT5fapH3_OfhV3HFeZjqFs4OfNIew&amp;token=78529" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i3768!3i2457!4i256!2m3!1e0!2sm!3i543269378!3m17!2sen-GB!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC52Om9uLHMudDoxfHMuZTpsLnQuZnxwLmM6I2ZmNDQ0NDQ0LHMudDoxOHxwLnY6b2ZmLHMudDoxOXxwLnY6b2ZmLHMudDoyMHxwLnY6b2ZmLHMudDoyMXxwLnY6b2ZmLHMudDoyMXxzLmU6bC50fHAudjpvZmYscy50OjV8cC5jOiNmZmYyZjJmMixzLnQ6ODF8cC52OnNpbXBsaWZpZWQscy50OjJ8cC52Om9mZnxwLmM6I2ZmY2VlOWRlfHAuczoyfHAudzowLjgwLHMudDozN3xzLmU6Zy5mfHAudjpvZmYscy50OjQwfHAudjpvbixzLnQ6M3xwLnM6LTEwMHxwLmw6NDUscy50OjQ5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6Zy5mfHAudjpvbnxwLmM6I2ZmZjVkNmQ2LHMudDo0OXxzLmU6bC50fHAudjpvZmYscy50OjQ5fHMuZTpsLml8cC5oOiNmZjAwMDB8cC52Om9uLHMudDo3ODV8cy5lOmwudHxwLnY6c2ltcGxpZmllZCxzLnQ6Nzg1fHMuZTpsLml8cC52Om9ufHAuaDojMDA2NGZmfHAuZzoxLjQ0fHAubDotM3xwLnc6MS42OSxzLnQ6NTB8cC52Om9uLHMudDo1MHxzLmU6bC50fHAudjpvZmYscy50OjUwfHMuZTpsLml8cC52Om9mZixzLnQ6NTF8cC52Om9uLHMudDo1MXxzLmU6bC50fHAudjpzaW1wbGlmaWVkfHAudzowLjMxfHAuZzoxLjQzfHAubDotNXxwLnM6LTIyLHMudDo0fHAudjpvZmYscy50OjY1fHAudjpvbnxwLmg6I2ZmMDAwMCxzLnQ6MTA1OXxwLnY6c2ltcGxpZmllZHxwLmg6I2ZmMDA0NSxzLnQ6MTA1OHxwLnY6b258cC5oOiMwMGQxZmYscy50OjEwNTh8cy5lOmwudHxwLnY6c2ltcGxpZmllZCxzLnQ6MTA1N3xwLnY6c2ltcGxpZmllZHxwLmg6IzAwY2JmZixzLnQ6MTA1N3xzLmU6bC50fHAudjpzaW1wbGlmaWVkLHMudDo2fHAuYzojZmY0NmJjZWN8cC52Om9uLHMudDo2fHMuZTpnLmZ8cC53OjEuNjF8cC5jOiNmZmNkZTJlNXxwLnY6b24!4e0&amp;key=AIzaSyCOdKtT5fapH3_OfhV3HFeZjqFs4OfNIew&amp;token=79214" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i3766!3i2457!4i256!2m3!1e0!2sm!3i543269378!3m17!2sen-GB!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC52Om9uLHMudDoxfHMuZTpsLnQuZnxwLmM6I2ZmNDQ0NDQ0LHMudDoxOHxwLnY6b2ZmLHMudDoxOXxwLnY6b2ZmLHMudDoyMHxwLnY6b2ZmLHMudDoyMXxwLnY6b2ZmLHMudDoyMXxzLmU6bC50fHAudjpvZmYscy50OjV8cC5jOiNmZmYyZjJmMixzLnQ6ODF8cC52OnNpbXBsaWZpZWQscy50OjJ8cC52Om9mZnxwLmM6I2ZmY2VlOWRlfHAuczoyfHAudzowLjgwLHMudDozN3xzLmU6Zy5mfHAudjpvZmYscy50OjQwfHAudjpvbixzLnQ6M3xwLnM6LTEwMHxwLmw6NDUscy50OjQ5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6Zy5mfHAudjpvbnxwLmM6I2ZmZjVkNmQ2LHMudDo0OXxzLmU6bC50fHAudjpvZmYscy50OjQ5fHMuZTpsLml8cC5oOiNmZjAwMDB8cC52Om9uLHMudDo3ODV8cy5lOmwudHxwLnY6c2ltcGxpZmllZCxzLnQ6Nzg1fHMuZTpsLml8cC52Om9ufHAuaDojMDA2NGZmfHAuZzoxLjQ0fHAubDotM3xwLnc6MS42OSxzLnQ6NTB8cC52Om9uLHMudDo1MHxzLmU6bC50fHAudjpvZmYscy50OjUwfHMuZTpsLml8cC52Om9mZixzLnQ6NTF8cC52Om9uLHMudDo1MXxzLmU6bC50fHAudjpzaW1wbGlmaWVkfHAudzowLjMxfHAuZzoxLjQzfHAubDotNXxwLnM6LTIyLHMudDo0fHAudjpvZmYscy50OjY1fHAudjpvbnxwLmg6I2ZmMDAwMCxzLnQ6MTA1OXxwLnY6c2ltcGxpZmllZHxwLmg6I2ZmMDA0NSxzLnQ6MTA1OHxwLnY6b258cC5oOiMwMGQxZmYscy50OjEwNTh8cy5lOmwudHxwLnY6c2ltcGxpZmllZCxzLnQ6MTA1N3xwLnY6c2ltcGxpZmllZHxwLmg6IzAwY2JmZixzLnQ6MTA1N3xzLmU6bC50fHAudjpzaW1wbGlmaWVkLHMudDo2fHAuYzojZmY0NmJjZWN8cC52Om9uLHMudDo2fHMuZTpnLmZ8cC53OjEuNjF8cC5jOiNmZmNkZTJlNXxwLnY6b24!4e0&amp;key=AIzaSyCOdKtT5fapH3_OfhV3HFeZjqFs4OfNIew&amp;token=79235" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i3766!3i2458!4i256!2m3!1e0!2sm!3i543269378!3m17!2sen-GB!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC52Om9uLHMudDoxfHMuZTpsLnQuZnxwLmM6I2ZmNDQ0NDQ0LHMudDoxOHxwLnY6b2ZmLHMudDoxOXxwLnY6b2ZmLHMudDoyMHxwLnY6b2ZmLHMudDoyMXxwLnY6b2ZmLHMudDoyMXxzLmU6bC50fHAudjpvZmYscy50OjV8cC5jOiNmZmYyZjJmMixzLnQ6ODF8cC52OnNpbXBsaWZpZWQscy50OjJ8cC52Om9mZnxwLmM6I2ZmY2VlOWRlfHAuczoyfHAudzowLjgwLHMudDozN3xzLmU6Zy5mfHAudjpvZmYscy50OjQwfHAudjpvbixzLnQ6M3xwLnM6LTEwMHxwLmw6NDUscy50OjQ5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6Zy5mfHAudjpvbnxwLmM6I2ZmZjVkNmQ2LHMudDo0OXxzLmU6bC50fHAudjpvZmYscy50OjQ5fHMuZTpsLml8cC5oOiNmZjAwMDB8cC52Om9uLHMudDo3ODV8cy5lOmwudHxwLnY6c2ltcGxpZmllZCxzLnQ6Nzg1fHMuZTpsLml8cC52Om9ufHAuaDojMDA2NGZmfHAuZzoxLjQ0fHAubDotM3xwLnc6MS42OSxzLnQ6NTB8cC52Om9uLHMudDo1MHxzLmU6bC50fHAudjpvZmYscy50OjUwfHMuZTpsLml8cC52Om9mZixzLnQ6NTF8cC52Om9uLHMudDo1MXxzLmU6bC50fHAudjpzaW1wbGlmaWVkfHAudzowLjMxfHAuZzoxLjQzfHAubDotNXxwLnM6LTIyLHMudDo0fHAudjpvZmYscy50OjY1fHAudjpvbnxwLmg6I2ZmMDAwMCxzLnQ6MTA1OXxwLnY6c2ltcGxpZmllZHxwLmg6I2ZmMDA0NSxzLnQ6MTA1OHxwLnY6b258cC5oOiMwMGQxZmYscy50OjEwNTh8cy5lOmwudHxwLnY6c2ltcGxpZmllZCxzLnQ6MTA1N3xwLnY6c2ltcGxpZmllZHxwLmg6IzAwY2JmZixzLnQ6MTA1N3xzLmU6bC50fHAudjpzaW1wbGlmaWVkLHMudDo2fHAuYzojZmY0NmJjZWN8cC52Om9uLHMudDo2fHMuZTpnLmZ8cC53OjEuNjF8cC5jOiNmZmNkZTJlNXxwLnY6b24!4e0&amp;key=AIzaSyCOdKtT5fapH3_OfhV3HFeZjqFs4OfNIew&amp;token=13004" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i3767!3i2457!4i256!2m3!1e0!2sm!3i543269378!3m17!2sen-GB!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC52Om9uLHMudDoxfHMuZTpsLnQuZnxwLmM6I2ZmNDQ0NDQ0LHMudDoxOHxwLnY6b2ZmLHMudDoxOXxwLnY6b2ZmLHMudDoyMHxwLnY6b2ZmLHMudDoyMXxwLnY6b2ZmLHMudDoyMXxzLmU6bC50fHAudjpvZmYscy50OjV8cC5jOiNmZmYyZjJmMixzLnQ6ODF8cC52OnNpbXBsaWZpZWQscy50OjJ8cC52Om9mZnxwLmM6I2ZmY2VlOWRlfHAuczoyfHAudzowLjgwLHMudDozN3xzLmU6Zy5mfHAudjpvZmYscy50OjQwfHAudjpvbixzLnQ6M3xwLnM6LTEwMHxwLmw6NDUscy50OjQ5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6Zy5mfHAudjpvbnxwLmM6I2ZmZjVkNmQ2LHMudDo0OXxzLmU6bC50fHAudjpvZmYscy50OjQ5fHMuZTpsLml8cC5oOiNmZjAwMDB8cC52Om9uLHMudDo3ODV8cy5lOmwudHxwLnY6c2ltcGxpZmllZCxzLnQ6Nzg1fHMuZTpsLml8cC52Om9ufHAuaDojMDA2NGZmfHAuZzoxLjQ0fHAubDotM3xwLnc6MS42OSxzLnQ6NTB8cC52Om9uLHMudDo1MHxzLmU6bC50fHAudjpvZmYscy50OjUwfHMuZTpsLml8cC52Om9mZixzLnQ6NTF8cC52Om9uLHMudDo1MXxzLmU6bC50fHAudjpzaW1wbGlmaWVkfHAudzowLjMxfHAuZzoxLjQzfHAubDotNXxwLnM6LTIyLHMudDo0fHAudjpvZmYscy50OjY1fHAudjpvbnxwLmg6I2ZmMDAwMCxzLnQ6MTA1OXxwLnY6c2ltcGxpZmllZHxwLmg6I2ZmMDA0NSxzLnQ6MTA1OHxwLnY6b258cC5oOiMwMGQxZmYscy50OjEwNTh8cy5lOmwudHxwLnY6c2ltcGxpZmllZCxzLnQ6MTA1N3xwLnY6c2ltcGxpZmllZHxwLmg6IzAwY2JmZixzLnQ6MTA1N3xzLmU6bC50fHAudjpzaW1wbGlmaWVkLHMudDo2fHAuYzojZmY0NmJjZWN8cC52Om9uLHMudDo2fHMuZTpnLmZ8cC53OjEuNjF8cC5jOiNmZmNkZTJlNXxwLnY6b24!4e0&amp;key=AIzaSyCOdKtT5fapH3_OfhV3HFeZjqFs4OfNIew&amp;token=13689" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i3768!3i2458!4i256!2m3!1e0!2sm!3i543269378!3m17!2sen-GB!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC52Om9uLHMudDoxfHMuZTpsLnQuZnxwLmM6I2ZmNDQ0NDQ0LHMudDoxOHxwLnY6b2ZmLHMudDoxOXxwLnY6b2ZmLHMudDoyMHxwLnY6b2ZmLHMudDoyMXxwLnY6b2ZmLHMudDoyMXxzLmU6bC50fHAudjpvZmYscy50OjV8cC5jOiNmZmYyZjJmMixzLnQ6ODF8cC52OnNpbXBsaWZpZWQscy50OjJ8cC52Om9mZnxwLmM6I2ZmY2VlOWRlfHAuczoyfHAudzowLjgwLHMudDozN3xzLmU6Zy5mfHAudjpvZmYscy50OjQwfHAudjpvbixzLnQ6M3xwLnM6LTEwMHxwLmw6NDUscy50OjQ5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6Zy5mfHAudjpvbnxwLmM6I2ZmZjVkNmQ2LHMudDo0OXxzLmU6bC50fHAudjpvZmYscy50OjQ5fHMuZTpsLml8cC5oOiNmZjAwMDB8cC52Om9uLHMudDo3ODV8cy5lOmwudHxwLnY6c2ltcGxpZmllZCxzLnQ6Nzg1fHMuZTpsLml8cC52Om9ufHAuaDojMDA2NGZmfHAuZzoxLjQ0fHAubDotM3xwLnc6MS42OSxzLnQ6NTB8cC52Om9uLHMudDo1MHxzLmU6bC50fHAudjpvZmYscy50OjUwfHMuZTpsLml8cC52Om9mZixzLnQ6NTF8cC52Om9uLHMudDo1MXxzLmU6bC50fHAudjpzaW1wbGlmaWVkfHAudzowLjMxfHAuZzoxLjQzfHAubDotNXxwLnM6LTIyLHMudDo0fHAudjpvZmYscy50OjY1fHAudjpvbnxwLmg6I2ZmMDAwMCxzLnQ6MTA1OXxwLnY6c2ltcGxpZmllZHxwLmg6I2ZmMDA0NSxzLnQ6MTA1OHxwLnY6b258cC5oOiMwMGQxZmYscy50OjEwNTh8cy5lOmwudHxwLnY6c2ltcGxpZmllZCxzLnQ6MTA1N3xwLnY6c2ltcGxpZmllZHxwLmg6IzAwY2JmZixzLnQ6MTA1N3xzLmU6bC50fHAudjpzaW1wbGlmaWVkLHMudDo2fHAuYzojZmY0NmJjZWN8cC52Om9uLHMudDo2fHMuZTpnLmZ8cC53OjEuNjF8cC5jOiNmZmNkZTJlNXxwLnY6b24!4e0&amp;key=AIzaSyCOdKtT5fapH3_OfhV3HFeZjqFs4OfNIew&amp;token=12983" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i3765!3i2458!4i256!2m3!1e0!2sm!3i543269378!3m17!2sen-GB!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC52Om9uLHMudDoxfHMuZTpsLnQuZnxwLmM6I2ZmNDQ0NDQ0LHMudDoxOHxwLnY6b2ZmLHMudDoxOXxwLnY6b2ZmLHMudDoyMHxwLnY6b2ZmLHMudDoyMXxwLnY6b2ZmLHMudDoyMXxzLmU6bC50fHAudjpvZmYscy50OjV8cC5jOiNmZmYyZjJmMixzLnQ6ODF8cC52OnNpbXBsaWZpZWQscy50OjJ8cC52Om9mZnxwLmM6I2ZmY2VlOWRlfHAuczoyfHAudzowLjgwLHMudDozN3xzLmU6Zy5mfHAudjpvZmYscy50OjQwfHAudjpvbixzLnQ6M3xwLnM6LTEwMHxwLmw6NDUscy50OjQ5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6Zy5mfHAudjpvbnxwLmM6I2ZmZjVkNmQ2LHMudDo0OXxzLmU6bC50fHAudjpvZmYscy50OjQ5fHMuZTpsLml8cC5oOiNmZjAwMDB8cC52Om9uLHMudDo3ODV8cy5lOmwudHxwLnY6c2ltcGxpZmllZCxzLnQ6Nzg1fHMuZTpsLml8cC52Om9ufHAuaDojMDA2NGZmfHAuZzoxLjQ0fHAubDotM3xwLnc6MS42OSxzLnQ6NTB8cC52Om9uLHMudDo1MHxzLmU6bC50fHAudjpvZmYscy50OjUwfHMuZTpsLml8cC52Om9mZixzLnQ6NTF8cC52Om9uLHMudDo1MXxzLmU6bC50fHAudjpzaW1wbGlmaWVkfHAudzowLjMxfHAuZzoxLjQzfHAubDotNXxwLnM6LTIyLHMudDo0fHAudjpvZmYscy50OjY1fHAudjpvbnxwLmg6I2ZmMDAwMCxzLnQ6MTA1OXxwLnY6c2ltcGxpZmllZHxwLmg6I2ZmMDA0NSxzLnQ6MTA1OHxwLnY6b258cC5oOiMwMGQxZmYscy50OjEwNTh8cy5lOmwudHxwLnY6c2ltcGxpZmllZCxzLnQ6MTA1N3xwLnY6c2ltcGxpZmllZHxwLmg6IzAwY2JmZixzLnQ6MTA1N3xzLmU6bC50fHAudjpzaW1wbGlmaWVkLHMudDo2fHAuYzojZmY0NmJjZWN8cC52Om9uLHMudDo2fHMuZTpnLmZ8cC53OjEuNjF8cC5jOiNmZmNkZTJlNXxwLnY6b24!4e0&amp;key=AIzaSyCOdKtT5fapH3_OfhV3HFeZjqFs4OfNIew&amp;token=78550" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i3765!3i2457!4i256!2m3!1e0!2sm!3i543269378!3m17!2sen-GB!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC52Om9uLHMudDoxfHMuZTpsLnQuZnxwLmM6I2ZmNDQ0NDQ0LHMudDoxOHxwLnY6b2ZmLHMudDoxOXxwLnY6b2ZmLHMudDoyMHxwLnY6b2ZmLHMudDoyMXxwLnY6b2ZmLHMudDoyMXxzLmU6bC50fHAudjpvZmYscy50OjV8cC5jOiNmZmYyZjJmMixzLnQ6ODF8cC52OnNpbXBsaWZpZWQscy50OjJ8cC52Om9mZnxwLmM6I2ZmY2VlOWRlfHAuczoyfHAudzowLjgwLHMudDozN3xzLmU6Zy5mfHAudjpvZmYscy50OjQwfHAudjpvbixzLnQ6M3xwLnM6LTEwMHxwLmw6NDUscy50OjQ5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6Zy5mfHAudjpvbnxwLmM6I2ZmZjVkNmQ2LHMudDo0OXxzLmU6bC50fHAudjpvZmYscy50OjQ5fHMuZTpsLml8cC5oOiNmZjAwMDB8cC52Om9uLHMudDo3ODV8cy5lOmwudHxwLnY6c2ltcGxpZmllZCxzLnQ6Nzg1fHMuZTpsLml8cC52Om9ufHAuaDojMDA2NGZmfHAuZzoxLjQ0fHAubDotM3xwLnc6MS42OSxzLnQ6NTB8cC52Om9uLHMudDo1MHxzLmU6bC50fHAudjpvZmYscy50OjUwfHMuZTpsLml8cC52Om9mZixzLnQ6NTF8cC52Om9uLHMudDo1MXxzLmU6bC50fHAudjpzaW1wbGlmaWVkfHAudzowLjMxfHAuZzoxLjQzfHAubDotNXxwLnM6LTIyLHMudDo0fHAudjpvZmYscy50OjY1fHAudjpvbnxwLmg6I2ZmMDAwMCxzLnQ6MTA1OXxwLnY6c2ltcGxpZmllZHxwLmg6I2ZmMDA0NSxzLnQ6MTA1OHxwLnY6b258cC5oOiMwMGQxZmYscy50OjEwNTh8cy5lOmwudHxwLnY6c2ltcGxpZmllZCxzLnQ6MTA1N3xwLnY6c2ltcGxpZmllZHxwLmg6IzAwY2JmZixzLnQ6MTA1N3xzLmU6bC50fHAudjpzaW1wbGlmaWVkLHMudDo2fHAuYzojZmY0NmJjZWN8cC52Om9uLHMudDo2fHMuZTpnLmZ8cC53OjEuNjF8cC5jOiNmZmNkZTJlNXxwLnY6b24!4e0&amp;key=AIzaSyCOdKtT5fapH3_OfhV3HFeZjqFs4OfNIew&amp;token=13710" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;"><p class="gm-style-pbt"></p></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;"><div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"><div tabindex="0" aria-hidden="true"></div><div title="" role="button" tabindex="0" style="width: 50px; height: 50px; overflow: hidden; position: absolute; cursor: pointer; touch-action: none; left: -25px; top: -50px; z-index: 0;"><img alt="" src="http://maps.gstatic.com/mapfiles/transparent.png" draggable="false" style="width: 50px; height: 50px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div tabindex="0" aria-hidden="true"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div></div><iframe aria-hidden="true" frameborder="0" tabindex="-1" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe><div style="pointer-events: none; width: 100%; height: 100%; box-sizing: border-box; position: absolute; z-index: 1000002; opacity: 0; border: 2px solid rgb(26, 115, 232);"></div><div></div><div></div><div></div><div></div><div><button draggable="false" title="Toggle fullscreen view" aria-label="Toggle fullscreen view" type="button" class="gm-control-active gm-fullscreen-control" style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; display: none; top: 0px; right: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" alt="" style="height: 18px; width: 18px;"></button></div><div></div><div></div><div></div><div></div><div></div><div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" rel="noopener" href="https://maps.google.com/maps?ll=-33.86938,151.104&amp;z=12&amp;t=m&amp;hl=en-GB&amp;gl=US&amp;mapclient=apiv3" title="Open this area in Google Maps (opens a new window)" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img alt="" src="http://maps.gstatic.com/mapfiles/api-3/images/google_white5.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div></div><div></div><div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 166px; bottom: 0px; width: 121px;"><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="text-decoration: none; cursor: pointer; display: none;">Map Data</a><span>Map data ©2021 Google</span></div></div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 95px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/en-GB_US/help/terms_maps.html" target="_blank" rel="noopener" style="text-decoration: none; cursor: pointer; color: rgb(0, 0, 0);">Terms of Use</a></div></div><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_blank" rel="noopener" title="Report errors in the road map or imagery to Google" dir="ltr" href="https://www.google.com/maps/@-33.86938,151.104,12z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); text-decoration: none; position: relative;">Report a map error</a></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(0, 0, 0); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2021 Google</div></div></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-sizing: border-box; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 300px; height: 180px; position: absolute; left: 202px; top: 10px;"><div style="padding: 0px 0px 10px; font-size: 16px; box-sizing: border-box;">Map Data</div><div style="font-size: 13px;">Map data ©2021 Google</div><button draggable="false" title="Close" aria-label="Close" type="button" class="gm-ui-hover-effect" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; top: 0px; right: 0px; width: 37px; height: 37px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%206.41L17.59%205%2012%2010.59%206.41%205%205%206.41%2010.59%2012%205%2017.59%206.41%2019%2012%2013.41%2017.59%2019%2019%2017.59%2013.41%2012z%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="pointer-events: none; display: block; width: 13px; height: 13px; margin: 12px;"></button></div></div></div></div>
                                        <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyCOdKtT5fapH3_OfhV3HFeZjqFs4OfNIew&amp;callback=mapinitialize" type="text/javascript"></script>
                                        <script type="text/javascript">
                                            function mapinitialize() {
                                                var latlng = new google.maps.LatLng(-33.86938,151.104000);
                                                var myOptions = {
                                                    zoom: 12,
                                                    center: latlng,
                                                    scrollwheel: false,
                                                    scaleControl: false,
                                                    disableDefaultUI: true,
                                                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                                                    // Google Map Color Styles
                                                    styles: [{"featureType":"all","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.neighborhood","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"},{"color":"#cee9de"},{"saturation":"2"},{"weight":"0.80"}]},{"featureType":"poi.attraction","elementType":"geometry.fill","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#f5d6d6"}]},{"featureType":"road.highway","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"labels.icon","stylers":[{"hue":"#ff0000"},{"visibility":"on"}]},{"featureType":"road.highway.controlled_access","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway.controlled_access","elementType":"labels.icon","stylers":[{"visibility":"on"},{"hue":"#0064ff"},{"gamma":"1.44"},{"lightness":"-3"},{"weight":"1.69"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"road.local","elementType":"labels.text","stylers":[{"visibility":"simplified"},{"weight":"0.31"},{"gamma":"1.43"},{"lightness":"-5"},{"saturation":"-22"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"all","stylers":[{"visibility":"on"},{"hue":"#ff0000"}]},{"featureType":"transit.station.airport","elementType":"all","stylers":[{"visibility":"simplified"},{"hue":"#ff0045"}]},{"featureType":"transit.station.bus","elementType":"all","stylers":[{"visibility":"on"},{"hue":"#00d1ff"}]},{"featureType":"transit.station.bus","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"transit.station.rail","elementType":"all","stylers":[{"visibility":"simplified"},{"hue":"#00cbff"}]},{"featureType":"transit.station.rail","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"weight":"1.61"},{"color":"#cde2e5"},{"visibility":"on"}]}]
                                                };
                                                var map = new google.maps.Map(document.getElementById("map"),myOptions);
                                                
                                                var image = "images/map-marker.png";
                                                var image = new google.maps.MarkerImage("images/map-marker.png", null, null, null, new google.maps.Size(50,50));
                                                var marker = new google.maps.Marker({
                                                    map: map, 
                                                    icon: image,
                                                    position: map.getCenter()
                                                });
                                                
                                                var contentString = '<b>Office</b><br>Streetname 13<br>50001 Sydney';
                                                var infowindow = new google.maps.InfoWindow({
                                                    content: contentString
                                                });
                                                            
                                                google.maps.event.addListener(marker, 'click', function() {
                                                  infowindow.open(map,marker);
                                                });
                                                                
                                                    
                                            }
                                            mapinitialize();
                                        </script>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-0 mt-2 pl-0">
                                    <a href="#" class="bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-lg d-inline-block">Save</a>
                                </div>
                            </form>
                            </div>
                        </div>
                        <!-- <div class="card w-100 border-0 p-2"></div> -->
                    </div>
                </div>
                <div class="middle-sidebar-right scroll-bar">
                    <div class="middle-sidebar-right-content">

                        <div class="card overflow-hidden subscribe-widget p-3 mb-3 rounded-xxl border-0">
                            <div class="card-body p-2 d-block text-center bg-no-repeat bg-image-topcenter" style="background-image: url(images/user-pattern.png);">
                                <a href="#" class="position-absolute right-0 mr-4"><i class="feather-edit text-grey-500 font-xs"></i></a>
                                <figure class="avatar ml-auto mr-auto mb-0 mt-2 w90"><img src="https://via.placeholder.com/60x60.png" alt="image" class="float-right shadow-sm rounded-circle w-100"></figure>
                                <div class="clearfix"></div>
                                <h2 class="text-black font-xss lh-3 fw-700 mt-3 mb-1">Hendrix Stamp</h2>
                                <h4 class="text-grey-500 font-xssss mt-0"><span class="d-inline-block bg-success btn-round-xss m-0"></span> Available</h4>
                                <div class="clearfix"></div>
                                <div class="col-12 text-center mt-4 mb-2">
                                    <a href="#" class="p-0 ml-1 btn btn-round-md rounded-xl bg-lightblue"><i class="text-current ti-comment-alt font-sm"></i></a>
                                    <a href="#" class="p-0 ml-1 btn btn-round-md rounded-xl bg-lightblue"><i class="text-current ti-lock font-sm"></i></a>
                                    <a href="#" class="p-0 btn p-2 lh-24 w100 ml-1 ls-3 d-inline-block rounded-xl bg-current font-xsssss fw-700 ls-lg text-white">FOLLOW</a>
                                </div>
                                <ul class="list-inline border-0 mt-4">
                                    <li class="list-inline-item text-center mr-4"><h4 class="fw-700 font-md">500+ <span class="font-xsssss fw-500 mt-1 text-grey-500 d-block">Connections</span></h4></li>
                                    <li class="list-inline-item text-center mr-4"><h4 class="fw-700 font-md">88.7 k <span class="font-xsssss fw-500 mt-1 text-grey-500 d-block">Follower</span></h4></li>
                                    <li class="list-inline-item text-center"><h4 class="fw-700 font-md">1,334 <span class="font-xsssss fw-500 mt-1 text-grey-500 d-block">Followings</span></h4></li>
                                </ul>

                                <div class="col-12 pl-0 mt-4 text-left">
                                    <h4 class="text-grey-800 font-xsss fw-700 mb-3 d-block">My Skill <a href="#"><i class="ti-angle-right font-xsssss text-grey-700 float-right "></i></a></h4>
                                    <div class="carousel-card owl-carousel owl-theme overflow-visible nav-none">
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="https://via.placeholder.com/60x60.png" alt="icon" class="p-3"></a></div>
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="https://via.placeholder.com/60x60.png" alt="icon" class="p-3"></a></div>
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="https://via.placeholder.com/60x60.png" alt="icon" class="p-3"></a></div>
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="https://via.placeholder.com/60x60.png" alt="icon" class="p-3"></a></div>
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="https://via.placeholder.com/60x60.png" alt="icon" class="p-3"></a></div>
                                    </div>
                                </div>  

                            </div>
                        </div>

                        <div class="card theme-light-bg overflow-hidden rounded-xxl border-0 mb-3 shadow-none">
                            <div class="card-body d-flex justify-content-between align-items-end p-4">
                                <div>
                                    <h4 class="font-xsss text-grey-900 mb-2 d-flex align-items-center justify-content-between mt-2 fw-700">
                                        Dark Mode
                                    </h4>
                                </div>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input dark-mode-switch" id="darkmodeswitch">
                                    <label class="custom-control-label bg-success" for="darkmodeswitch"></label>
                                </div>

                            </div>
                        </div>

                        <div class="card overflow-hidden subscribe-widget p-3 mb-3 rounded-xxl border-0 shadow-none">
                            <div class="card-body d-block text-left">
                                <h1 class="text-grey-800 font-xl fw-900 mb-4 lh-3">Sign up for our newsletter</h1>
                                <form action="#" class="mt-3">
                                    <div class="form-group icon-input">
                                        <i class="ti-email text-grey-500 font-sm"></i>
                                        <input type="text" class="form-control mb-2 bg-greylight border-0 style1-input pl-5" placeholder="Enail address">
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="blankCheckbox" value="option1" aria-label="">
                                        <label class="text-grey-500 font-xssss" for="blankCheckbox">By checking this box, you confirm that you have read and are agreeing to our terms of use regarding.</label>
                                    </div>
                                </form>
                                <ul class="d-flex align-items-center justify-content-between mt-3">
                                    <li><a href="#" class="btn-round-md bg-facebook"><i class="font-xs ti-facebook text-white"></i></a></li>
                                    <li><a href="#" class="btn-round-md bg-twiiter"><i class="font-xs ti-twitter-alt text-white"></i></a></li>
                                    <li><a href="#" class="btn-round-md bg-linkedin"><i class="font-xs ti-linkedin text-white"></i></a></li>
                                    <li><a href="#" class="btn-round-md bg-instagram"><i class="font-xs ti-instagram text-white"></i></a></li>
                                    <li><a href="#" class="btn-round-md bg-pinterest"><i class="font-xs ti-pinterest text-white"></i></a></li>
                                </ul>
                            </div>
                        </div>



                    </div>
                </div>
                <button class="btn btn-circle text-white btn-neutral sidebar-right">
                    <i class="ti-angle-left"></i>  
                </button>
            </div>            
        </div>
        <!-- main content -->
        <div class="app-footer border-0 shadow-lg">
            <a href="default.html" class="nav-content-bttn nav-center"><i class="feather-home"></i></a>
            <a href="default-follower.html" class="nav-content-bttn"><i class="feather-package"></i></a>
            <a href="default-live-stream.html" class="nav-content-bttn" data-tab="chats"><i class="feather-layout"></i></a>            
            <a href="#" class="nav-content-bttn sidebar-layer"><i class="feather-layers"></i></a>
            <a href="default-settings.html" class="nav-content-bttn"><img src="https://via.placeholder.com/60x60.png" alt="user" class="w30 shadow-xss"></a>
        </div>

        <div class="app-header-search">
            <form class="search-form">
                <div class="form-group searchbox mb-0 border-0 p-1">
                    <input type="text" class="form-control border-0" placeholder="Search...">
                    <i class="input-icon">
                        <ion-icon name="search-outline" role="img" class="md hydrated" aria-label="search outline"></ion-icon>
                    </i>
                    <a href="#" class="ml-1 mt-1 d-inline-block close searchbox-close">
                        <i class="ti-close font-xs"></i>
                    </a>
                </div>
            </form>
        </div>

    </div> 


    

   
    @include("inc_aprex.footer")
    
</body>

</html>