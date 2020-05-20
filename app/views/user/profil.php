<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
	<div class="container-fluid">
		<?php echo $this->session->flashdata('profile'); ?>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="profile-info-inner">
					<div class="profile-img">
						<img src="<?php echo base_url('public/assets/img/profile/') . $this->fungsi->chek_member()->foto; ?>" />
					</div>
					<div class="profile-details-hr">
						<div class="row">
							<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
								<div class="address-hr">
									<p><b>Nama</b><br /><?php echo $this->fungsi->chek_member()->nama; ?></p>
								</div>
							</div>
							<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
								<div class="address-hr tb-sm-res-d-n dps-tb-ntn">
									<p><b>No Telp/Hp</b><br /><?php echo $this->fungsi->chek_member()->notelp; ?></p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
								<div class="address-hr">
									<p><b>Alamat</b><br /><?php echo $this->fungsi->chek_member()->alamat; ?></p>
								</div>
							</div>
							<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
								<div class="address-hr tb-sm-res-d-n dps-tb-ntn">
									<p><b>Tanggal Daftar</b><br /><?php echo date('d-m-Y', strtotime($this->fungsi->chek_member()->tgl_daftar)); ?></p>
								</div>
							</div>
						</div>
						<!-- <div class="row text-center">
							<div class="col-md-12">
								<a href="" title="Join Member" class="btn btn-primary pull-center">Join Member</a>
							</div>
						</div> -->
					</div>
				</div>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
					<ul id="myTabedu1" class="tab-review-design">
						<li class="active"><a href="#editprofile">Edit Profile</a></li>
						<li><a href="#gantipassword">Ganti Password</a></li>
					</ul>
					<div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
						<div class="product-tab-list tab-pane fade active in" id="editprofile">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="review-content-section">
										<div class="row">
											<div class="col-lg-12">
												<div class="content-profile">
													<div class="sparkline12-graph">
														<div class="basic-login-form-ad">
															<div class="all-form-element-inner">
																<form action="" method="post" enctype="multipart/form-data">
																	<div class="form-group-inner">
																		<div class="row">
																			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
																				<label class="login2 pull-right pull-right-pro">ID</label>
																			</div>
																			<div class="col-lg-5 col-md-9 col-sm-12 col-xs-12">
																				<input type="text" name="nama" class="form-control" value="<?php echo $this->fungsi->chek_member()->id_member; ?>" placeholder="ID" readonly />
																				<?php echo form_error('nama', '<small class="form-text text-danger">', '</small>'); ?>
																			</div>
																		</div>
																	</div>
																	<div class="form-group-inner">
																		<div class="row">
																			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
																				<label class="login2 pull-right pull-right-pro">Nama</label>
																			</div>
																			<div class="col-lg-5 col-md-9 col-sm-9 col-xs-12">
																				<input type="text" name="nama" class="form-control" value="<?php echo $this->fungsi->chek_member()->nama; ?>" placeholder="Nama" />
																				<?php echo form_error('nama', '<small class="form-text text-danger">', '</small>'); ?>
																			</div>
																		</div>
																	</div>
																	<div class="form-group-inner">
																		<div class="row">
																			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
																				<label class="login2 pull-right pull-right-pro">No Telp/Hp</label>
																			</div>
																			<div class="col-lg-5 col-md-9 col-sm-9 col-xs-12">
																				<input type="text" name="notelp" class="form-control" value="<?php echo $this->fungsi->chek_member()->notelp; ?>" />
																			</div>
																		</div>
																	</div>
																	<div class="form-group-inner">
																		<div class="row">
																			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
																				<label class="login2 pull-right pull-right-pro">Alamat</label>
																			</div>
																			<div class="col-lg-5 col-md-9 col-sm-9 col-xs-12">
																				<textarea name="alamat" id="" class="form-control"><?php echo $this->fungsi->chek_member()->alamat; ?></textarea>
																			</div>
																		</div>
																	</div>
																	<div class="form-group-inner">
																		<div class="row">
																			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
																				<label class="login2 pull-right pull-right-pro">Foto</label>
																			</div>
																			<div class="col-lg-5 col-md-9 col-sm-9 col-xs-12">
																				<input type="file" class="form-control" name="file">
																			</div>
																		</div>
																	</div>
																	<div class="form-group-inner">
																		<div class="login-btn-inner">
																			<div class="row">
																				<div class="col-lg-3"></div>
																				<div class="col-lg-9">
																					<div class="login-horizental cancel-wp pull-left form-bc-ele">
																						<!-- <button class="btn btn-white" type="submit">Cancel</button> -->
																						<button class="btn btn-sm btn-success login-submit-cs" type="submit">Simpan</button>
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
								</div>
							</div>
						</div>
						<div class="product-tab-list tab-pane fade" id="gantipassword">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="review-content-section">
										<h5>Ganti Password</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
