<x-app-layout>
    <div>
        @extends('posts.layout')
    </div>
    <link rel="stylesheet" type="text/css" href="{{asset('src/plugins/fullcalendar/fullcalendar.css')}}">
    {{-- <div class="main-container">
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					<div class="col-md-4">
						<img src="" alt="">
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							Selamat Datang Di Portal Desa Kabupaten Siak
						</h4>
						<p class="font-18 max-width-600">Website Portal Kabupaten Siak adalah penghubung antara tiap-tiap website di desa kabupaten Siak</p>
					</div>
				</div>
			</div>
			<div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark"></div>
								<div class="font-14 text-secondary weight-500">Desa Di kabupaten Siak</div>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#00eccf"><i class="icon-copy dw dw-calendar1"></i></div>
							</div>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark"></div>
								<div class="font-14 text-secondary weight-500">Pejabat Pemerintahan Kabupaten Siak</div>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#ff5b5b"><span class="icon-copy ti-user"></span></div>
							</div>
						</div>
					</div>
				</div> --}}

				{{-- <div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0"></div>
								<div class="weight-600 font-14">Desa Di kabupaten Siak</div>
							</div>
						</div>
					</div>
				</div> --}}
				{{-- <div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart2"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0"></div>
								<div class="weight-600 font-14">Admin</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart3"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0"></div>
								<div class="weight-600 font-14">Pejabat Pemerintahan</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart4"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">$6060</div>
								<div class="weight-600 font-14">Worth</div>
							</div>
						</div>
					</div>
				</div> --}}
			{{-- </div>

			<div class="row">
				<div class="col-xl-6 mb-30">
					<div class="card-box height-100-p pd-20">
						<h2 class="h4 mb-20">
                            Activity
                        </h2>
                            <div class="calendar-wrap">
                                <div id='calendar'></div>
                            </div>
                            <!-- calendar modal -->
                            <div id="modal-view-event" class="modal modal-top fade calendar-modal">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <h4 class="h4"><span class="event-icon weight-400 mr-3"></span><span class="event-title"></span></h4>
                                            <div class="event-body"></div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="modal-view-event-add" class="modal modal-top fade calendar-modal">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <form id="add-event">
                                            <div class="modal-body">
                                                <h4 class="text-blue h4 mb-10">Add Event Detail</h4>
                                                <div class="form-group">
                                                    <label>Event name</label>
                                                    <input type="text" class="form-control" name="ename">
                                                </div>
                                                <div class="form-group">
                                                    <label>Event Date</label>
                                                    <input type='text' class="datetimepicker form-control" name="edate">
                                                </div>
                                                <div class="form-group">
                                                    <label>Event Description</label>
                                                    <textarea class="form-control" name="edesc"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Event Color</label>
                                                    <select class="form-control" name="ecolor">
                                                        <option value="fc-bg-default">fc-bg-default</option>
                                                        <option value="fc-bg-blue">fc-bg-blue</option>
                                                        <option value="fc-bg-lightgreen">fc-bg-lightgreen</option>
                                                        <option value="fc-bg-pinkred">fc-bg-pinkred</option>
                                                        <option value="fc-bg-deepskyblue">fc-bg-deepskyblue</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Event Icon</label>
                                                    <select class="form-control" name="eicon">
                                                        <option value="circle">circle</option>
                                                        <option value="cog">cog</option>
                                                        <option value="group">group</option>
                                                        <option value="suitcase">suitcase</option>
                                                        <option value="calendar">calendar</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary" >Save</button>
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                    </div>


					</div>
				</div>
				<div class="col-xl-4 mb-30">
					<div class="card-box height-100-p pd-20">
						<h2 class="h4 mb-20">Lead Target</h2>
                        <div class="map-container-google-1">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7978.854633690932!2d102.02074410000004!3d0.8021488000000041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d427abd5af2fc5%3A0x2d34a1dff9c8cbe8!2sDINAS%20PEKERJAAN%20UMUM!5e0!3m2!1sid!2sid!4v1622084750323!5m2!1sid!2sid" frameborder="0"
                              style="border:0" allowfullscreen></iframe></div>
					</div>
				</div>
			</div> --}}

			{{-- <div class="card-box mb-30">
				<h2 class="h4 pd-20">Best Selling Products</h2>
            </div> --}}
			{{-- <div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
			</div>
		</div>
	</div> --}}
    {{-- <div class="main-container">

		<div class="xs-pd-20-10 pd-ltr-20">


			{{-- <div class="row pb-10">

				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark">5</div>
								<div class="font-14 text-secondary weight-500">Jumlah Desa</div>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#00eccf"><i class="icon-copy dw dw-calendar1"></i></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark">3</div>
								<div class="font-14 text-secondary weight-500">Total Admin</div>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#ff5b5b"><span class="icon-copy ti-heart"></span></div>
							</div>
						</div>
					</div>
				</div>


			</div>








		</div>
		<div class="row pb-10">
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 100px">
						<iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
						  style="border:0" allowfullscreen></iframe>
					  </div>
				</div>
			</div>
		</div>


	</div> --}}
    <div class="main-container">
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					<div class="col-md-4">
						<img src="{{asset('style/vendors/images/Siak.png')}}" alt="">
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							Selamat Datang<div class="weight-600 font-30 text-blue"></div>
						</h4>
						<p class="font-18 max-width-600">Website Portal Kabupaten Siak adalah penghubung antara tiap-tiap website di desa kabupaten Siak</p>
					</div>
				</div>
			</div>
			{{-- <div class="row">
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">2020</div>
								<div class="weight-600 font-14">Contact</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart2"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">400</div>
								<div class="weight-600 font-14">Deals</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart3"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">350</div>
								<div class="weight-600 font-14">Campaign</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart4"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">$6060</div>
								<div class="weight-600 font-14">Worth</div>
							</div>
						</div>
					</div>
				</div>
			</div> --}}
			{{-- <div class="row">
				<div class="col-xl-6 mb-30">
					<div class="card-box height-100-p pd-20 map-container-google-1">
						<h2 class="h4 mb-20">Kalender</h2>
                        <div class="calendar-wrap">
                            <div id='calendar'></div>
                        </div>
                        <!-- calendar modal -->
                        <div id="modal-view-event" class="modal modal-top fade calendar-modal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <h4 class="h4"><span class="event-icon weight-400 mr-3"></span><span class="event-title"></span></h4>
                                        <div class="event-body"></div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
					</div>
				</div>
				<div class="col-xl-6 mb-30">
					<div class="card-box height-100-p pd-30">
						<h2 class="h4 mb-20">MAP</h2>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31915.410987029263!2d102.020916!3d0.803116!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2d34a1dff9c8cbe8!2sDINAS%20PEKERJAAN%20UMUM!5e0!3m2!1sid!2sid!4v1622104681997!5m2!1sid!2sid" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>
			</div> --}}

			<div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
			</div>
		</div>
	</div>
    <script src=" vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/fullcalendar/fullcalendar.min.js"></script>
	<script src="vendors/scripts/calendar-setting.js"></script>
</x-app-layout>

