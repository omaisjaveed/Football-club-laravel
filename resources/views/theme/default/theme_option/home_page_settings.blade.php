@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-sm-3">
		<ul class="nav flex-column nav-tabs settings-tab" role="tablist">
			<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#about"><i class="ti-layout-slider-alt"></i> {{ _lang('About Us') }}</a></li>
			<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#media"><i class="ti-layout-cta-left"></i> {{ _lang('Media Video') }}</a></li>
			<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#academy"><i class="ti-layout-grid3"></i> {{ _lang('Academy') }}</a></li>
			<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#sponsors"><i class="ti-crown"></i> {{ _lang('Sponsors') }}</a></li>
			<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#social_links"><i class="ti-instagram"></i> {{ _lang('Social Links') }}</a></li>
		</ul>
	</div>


	<div class="col-sm-9">
		<div class="tab-content">

			<div id="about" class="tab-pane active">
				<div class="card">
					<div class="card-header">
						<span class="panel-title">{{ _lang('About Us') }}</span>
					</div>

					<div class="card-body">

						<form method="post" class="settings-submit params-panel" autocomplete="off" action="{{ route('theme_option.update',['home_page_settings','store']) }}" enctype="multipart/form-data">
							{{ csrf_field() }}
							<div class="row">

								<div class="col-md-12">
									<div class="form-group">
										<label class="control-label">{{ _lang('About Content') }}</label>
										<textarea class="form-control summernote" name="about_content">{{ get_trans_option('about_content') }}</textarea>
									</div>
								</div>

								<div class="col-md-12">
									<div class="form-group">
										<label class="control-label">{{ _lang('About Image') }}</label>
										<input type="file" class="dropify" name="about_image" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{ get_option('about_image') != '' ? asset('public/uploads/media/'.get_option('about_image')) : '' }}">
									</div>
								</div>

								<div class="col-md-12">
									<div class="form-group">
										<button type="submit" class="btn btn-primary">{{ _lang('Save Changes') }}</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>

			<div id="media" class="tab-pane fade">
				<div class="card">
					<div class="card-header">
						<span class="panel-title">{{ _lang('Media Video') }}</span>
					</div>

					<div class="card-body">
						<form method="post" class="settings-submit params-panel" autocomplete="off" action="{{ route('theme_option.update',['home_page_settings','store']) }}" enctype="multipart/form-data">
							{{ csrf_field() }}
							<div class="row">

								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label">{{ _lang('Media Video') }}</label>
										<input type="file" class="dropify" name="media_video" data-allowed-file-extensions="mp4 avi mov" data-default-file="{{ get_option('media_video') != '' ? asset('public/uploads/media/'.get_option('media_video')) : '' }}">
									</div>
								</div>

								<div class="col-md-12">
									<div class="form-group">
										<button type="submit" class="btn btn-primary">{{ _lang('Save Changes') }}</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>

			<div id="academy" class="tab-pane fade">
				<div class="card">
					<div class="card-header">
						<span class="panel-title">{{ _lang('Academy') }}</span>
					</div>

					<div class="card-body">
						<form method="post" class="settings-submit params-panel" autocomplete="off" action="{{ route('theme_option.update',['home_page_settings','store']) }}" enctype="multipart/form-data">
							{{ csrf_field() }}
							<div class="row">

								<div class="col-md-12">
									<div class="form-group">
										<label class="control-label">{{ _lang('Academy Content') }}</label>
										<textarea class="form-control summernote" name="academy_content">{{ get_trans_option('academy_content') }}</textarea>
									</div>
								</div>

								<div class="col-md-12">
									<div class="form-group">
										<label class="control-label">{{ _lang('Academy Image') }}</label>
										<input type="file" class="dropify" name="academy_image" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{ get_option('academy_image') != '' ? asset('public/uploads/media/'.get_option('academy_image')) : '' }}">
									</div>
								</div>

								<div class="col-md-12">
									<div class="form-group">
										<button type="submit" class="btn btn-primary">{{ _lang('Save Changes') }}</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>

			<div id="sponsors" class="tab-pane">
				<div class="card">

					<div class="card-header">
						<span class="panel-title">{{ _lang('Sponsors') }}</span>
					</div>

					<div class="card-body">
						<form method="post" class="settings-submit params-panel" autocomplete="off" action="{{ route('theme_option.update',['home_page_settings','store']) }}" enctype="multipart/form-data">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">{{ _lang('Sponsor One Name') }}</label>
										<input type="text" class="form-control" name="s_o_n" value="{{ get_trans_option('s_o_n') }}" />
									</div>

									<div class="form-group">
										<label class="control-label">{{ _lang('Sponsor One Content') }}</label>
										<textarea class="form-control" name="s_o_c">{{ get_trans_option('s_o_c') }}</textarea>
									</div>

									<div class="form-group">
										<label class="control-label">{{ _lang('Sponsor One Image') }}</label>
										<input type="file" class="dropify" name="s_o_i" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{ get_option('s_o_i') != '' ? asset('public/uploads/media/'.get_option('s_o_i')) : '' }}">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">{{ _lang('Sponsor Two Name') }}</label>
										<input type="text" class="form-control" name="s_t_n" value="{{ get_trans_option('s_t_n') }}" />
									</div>

									<div class="form-group">
										<label class="control-label">{{ _lang('Sponsor Two Content') }}</label>
										<textarea class="form-control" name="s_t_c">{{ get_trans_option('s_t_c') }}</textarea>
									</div>

									<div class="form-group">
										<label class="control-label">{{ _lang('Sponsor Two Image') }}</label>
										<input type="file" class="dropify" name="s_t_i" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{ get_option('s_t_i') != '' ? asset('public/uploads/media/'.get_option('s_t_i')) : '' }}">
									</div>
								</div>

								<div class="col-md-12">
									<div class="form-group">
										<button type="submit" class="btn btn-primary">{{ _lang('Save Changes') }}</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>

			<div id="social_links" class="tab-pane fade">
				<div class="card">
					<div class="card-header">
						<span class="panel-title">{{ _lang('Social Links') }}</span>
					</div>

					<div class="card-body">
						<form method="post" class="settings-submit params-panel" autocomplete="off" action="{{ route('theme_option.update',['general_settings','store']) }}">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-md-8">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="control-label">{{ _lang('Facebook') }}</label>
												<input type="text" class="form-control" name="facebook_link" value="{{ get_option('facebook_link') }}">
											</div>
										</div>

										<div class="col-md-12">
											<div class="form-group">
												<label class="control-label">{{ _lang('Twitter') }}</label>
												<input type="text" class="form-control" name="twitter_link" value="{{ get_option('twitter_link') }}">
											</div>
										</div>

										<div class="col-md-12">
											<div class="form-group">
												<label class="control-label">{{ _lang('Instagram') }}</label>
												<input type="text" class="form-control" name="instagram_link" value="{{ get_option('instagram_link') }}">
											</div>
										</div>

										<div class="col-md-12">
											<div class="form-group">
												<label class="control-label">{{ _lang('Youtube') }}</label>
												<input type="text" class="form-control" name="youtube_link" value="{{ get_option('youtube_link') }}">
											</div>
										</div>

										<div class="col-md-12">
											<div class="form-group">
												<button type="submit" class="btn btn-primary">{{ _lang('Save Settings') }}</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
</div>
@endsection