<div id="wrapper-content" class="clearfix ">
		<section class="page-title page-title-background" style="padding-top:120px;padding-bottom:120px">
		<div class="page-title-background page-title-parallax" style="background-image: url(../wp-content/plugins/beyot-framework/assets/images/theme-options/page-title.jpg)" data-stellar-background-ratio="0.5">
		</div>
		<div class="container">
			<div class="page-title-inner">
				<div class="page-title-main-info">
					<h1>Contact</h1>
				</div>
				<ul class="breadcrumbs">
					<li>
						<a href="home" class="home">Home</a>
					</li>
					<li>
						<span>Contact</span>
					</li>
				</ul>
			</div>
		</div>
		</section>
		<div id="primary-content" class="page-wrap">
			<div class="container clearfix">
				<div class="page-inner">
					<article id="post-177" class="pages post-177 page type-page status-publish hentry">
					<div class="entry-content clearfix">
						<div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id="map-5e4be8e63f009" class="g5plus-google-map" style="height: 545px"></div>
										<script>jQuery(document).ready(function() {
        var bounds = new google.maps.LatLngBounds();
        var mapStyle  = '';
                var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
        var isDraggable = w > 1024 ? true : false;
        var mapOptions = {
            mapTypeId: 'roadmap',
            styles: mapStyle,
            draggable: isDraggable,
            scrollwheel: false,
            fullscreenControl: true
        };
        var map = new google.maps.Map(document.getElementById("map-5e4be8e63f009"), mapOptions);
        var markers = [
            ["Hummasoft","", -7.900041,112.606886,"http://themes.g5plus.net/beyot/wp-content/uploads/2016/12/icon.png"]];
        var infoWindow = new google.maps.InfoWindow(), marker, i;
        for( i = 0; i < markers.length; i++ ) {
            var position = new google.maps.LatLng(markers[i][2], markers[i][3]);
            bounds.extend(position);
            marker = new google.maps.Marker({
                position: position,
                map: map,
                title: markers[i][0],
                icon: markers[i][4],
                animation: google.maps.Animation.DROP
            });
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infoWindow.setContent('<h6>'+ markers[i][0]+'</h6><div>'+ markers[i][1]+'</div>');
                    infoWindow.open(map, marker);
                    if (marker.getAnimation() !== null) {
                        marker.setAnimation(null);
                    } else {
                        marker.setAnimation(google.maps.Animation.BOUNCE);
                    }
                };
            })(marker, i));
            map.fitBounds(bounds);
        }
        var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
            this.setZoom(map.getZoom()-1);
            if (this.getZoom() > 19) {
                this.setZoom(19);
            }
            google.maps.event.removeListener(boundsListener);
        });
    });</script>
									</div>
								</div>
							</div>
						</div>
						<div class="vc_row-full-width vc_clearfix"></div>
						<div class="vc_row wpb_row vc_row-fluid">
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div class="g5plus-space space-5e4be8e63ff15" data-id="5e4be8e63ff15" data-tablet="80" data-tablet-portrait="60" data-mobile="40" data-mobile-landscape="50" style="clear: both; display: block; height: 100px"></div>
									</div>
								</div>
							</div>
							<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div class="g5plus-heading style2 text-left color-dark vc_custom_1487304345940"> <span></span>
											<h2>Informasi</h2>
										</div>
										<div class="g5plus-icon-box layout-left color-dark vc_custom_1487304380966">
											<div class="icon-wrap"> <i class="icon-location22"></i></div>
											<h6>Lokasi</h6>
											<p>Jika pengguna butuh sesuatu atau yang lain tentang website masjid kami bisa datang ke lokasi yang sudah ada.</p>
										</div>
										<div class="g5plus-icon-box layout-left color-dark vc_custom_1487304387221">
											<div class="icon-wrap"> <i class="fa fa-phone"></i></div>
											<h6>Telepon</h6>
											<p>jika pengguna ingin menanyakan sesuatu bisa menghubungi kami.</p>
										</div>
										<div class="g5plus-icon-box layout-left color-dark vc_custom_1487304406796">
											<div class="icon-wrap"> <i class="icon-mail-envelope-open2"></i></div>
											<h6> Alamat E-mail</h6>
											<p>Jika pengguna tidak bisa menghubungi telepon kami atau datang kelokasi bisa menghubungi kami lewat email.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div class="wpb_single_image wpb_content_element vc_align_center">
											<figure class="wpb_wrapper vc_figure">
											<div class="vc_single_image-wrapper vc_box_border_grey">
												<img width="468" height="567" src="http://localhost/beyot/themes.g5plus.net/beyot/wp-content/uploads/2016/12/background-image-04.png" class="vc_single_image-img attachment-full" alt="" srcset="http://localhost/beyot/themes.g5plus.net/beyot/wp-content/uploads/2016/12/background-image-04.png 468w, http://themes.g5plus.net/beyot/wp-content/uploads/2016/12/background-image-04-255x300.png 255w" sizes="(max-width: 468px) 100vw, 468px"/>
											</div>
											</figure>
										</div>
									</div>
								</div>
							</div>
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div class="g5plus-space space-5e4be8e6468d8" data-id="5e4be8e6468d8" data-tablet="60" data-tablet-portrait="40" data-mobile="40" data-mobile-landscape="40" style="clear: both; display: block; height: 80px"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="vc_row wpb_row vc_row-fluid vc_custom_1487304786882">
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div class="g5plus-heading style2 text-left color-dark vc_custom_1487304450755"> <span></span>
											<h2>Kirim Pesan</h2>
										</div>
										<div role="form" class="wpcf7" id="wpcf7-f29-p177-o1" lang="en-US" dir="ltr">
											<div class="screen-reader-response"></div>
											<form action="http://themes.g5plus.net/beyot/contact/#wpcf7-f29-p177-o1" method="post" class="wpcf7-form" novalidate="novalidate">
												<div style="display: none;"> <input type="hidden" name="_wpcf7" value="29" /> <input type="hidden" name="_wpcf7_version" value="5.1.6" /> <input type="hidden" name="_wpcf7_locale" value="en_US" /> <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f29-p177-o1" /> <input type="hidden" name="_wpcf7_container_post" value="177" /></div>
												<div class="g5plus-contact-form column-3 row text-center">
													<div class="col-md-4 col-sm-12 col-xs-12"> <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Nama Lengkap" /></span></div>
													<div class="col-md-4 col-sm-12 col-xs-12"> <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Alamat Email" /></span></div>
													<div class="col-md-4 col-sm-12 col-xs-12"> <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Judul" /></span></div>
													<div class="col-xs-12"> <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Pesan"></textarea></span></div>
													<div class="col-xs-12"> <button type="submit" class="btn btn-lg btn-dark btn-classic btn-icon"><i class="fa fa-paper-plane"></i><span>Kirim</span></button></div>
												</div>
												<div class="wpcf7-response-output wpcf7-display-none"></div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					</article>
				</div>
			</div>
		</div>
	</div>