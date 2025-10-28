@extends('main_layouts.master')

@section('title','VĂN PHÒNG CÔNG CHỨNG TÂM ĐỨC')

@section('content')

<div class="wrapper">

	<!-- Main Content Section Start -->
	<div class="main-content--section pbottom--30">
		<div class="container">
			<!-- Main Content Start -->
			<div class="main--content">
				<!-- Post Items Start -->
				<div class="post--items post--items-1 pd--30-0">
					<div class="row gutter--15">
						<div class="col-md-6">
							<div class="row gutter--15">

					@if(isset($posts_new) && is_array($posts_new))
						@for ( $i = 0; $i <= 1; $i++)
							@if(isset($posts_new[$i]) && isset($posts_new[$i][0]))
							<div class="col-xs-6 col-xss-12">
								<!-- Post Item Start -->
								<div class="post--item post--layout-1 post--title-large">
									<div class="post--img">
										<a href="{{ route('posts.show', $posts_new[$i][0]) }}"
											class="thumb">
											<img src="{{ asset($posts_new[$i][0]->image ? 'storage/' .$posts_new[$i][0]->image->path : 'storage/placeholders/placeholder-image.png'  )}}"
												alt="{{ $posts_new[$i][0]->title }}" style="width: 100%; height: 180px; object-fit: cover;">
										</a>
										<a href="{{ route('categories.show', $posts_new[$i][0]->category) }}" class="cat">{{ $posts_new[$i][0]->category->name }}</a>

										<a href="javascript:;" class="icon"><i class="fa fa-flash"></i></a>
										<div class="post--info">
											<ul class="meta">
												<li><a href="javascript:;">{{ $posts_new[$i][0]->author->name }}</a></li>
												<li><a href="javascript:;">{{ $posts_new[$i][0]->created_at->locale('vi')->diffForHumans() }}</a></li>
											</ul>
											<div class="title">
												<h2 class="h4" style="line-height: 1.3; margin-bottom: 10px;">
													<a href="{{ route('posts.show', $posts_new[$i][0]) }}" class="btn-link" 
													   style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
													   {{ $posts_new[$i][0]->title }}
													</a>
												</h2>
											</div>
										</div>
									</div>
								</div>
								<!-- Post Item End -->
							</div>
							@endif
						@endfor
					@endif
					@if(isset($posts_new[2]) && isset($posts_new[2][0]))
					<div class="col-sm-12 hidden-sm hidden-xs">
						<!-- Post Item Start -->
						<div class="post--item post--layout-1 post--title-larger">
							<div class="post--img">
								<a href="{{ route('posts.show', $posts_new[2][0]) }}"
									class="thumb">
									<img src="{{ asset($posts_new[2][0]->image ? 'storage/' .$posts_new[2][0]->image->path : 'storage/placeholders/placeholder-image.png'  )}}"
										alt="{{ $posts_new[2][0]->title }}" style="width: 100%; height: 200px; object-fit: cover;">
								</a>

								<a href="{{ route('categories.show', $posts_new[2][0]->category) }}" class="cat">{{ $posts_new[2][0]->category->name }}</a>

								<a href="javascript:;" class="icon"><i class="fa fa-fire"></i></a>

								<div class="post--info">
									<ul class="meta">
										<li><a href="javascript:;">{{ $posts_new[2][0]->author->name }}</a></li>
										<li><a href="javascript:;">{{ $posts_new[2][0]->created_at->locale('vi')->diffForHumans()  }}</a></li>
									</ul>

									<div class="title">
										<h2 class="h4" style="line-height: 1.3; margin-bottom: 10px;">
											<a href="{{ route('posts.show', $posts_new[2][0]) }}"
											   class="btn-link"
											   style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
											   {{ $posts_new[2][0]->title }}
											</a>
										</h2>
									</div>
								</div>
							</div>
						</div>
						<!-- Post Item End -->
					</div>
					@endif							</div>
						</div>

						@if(isset($posts_new[3]) && isset($posts_new[3][0]))
						<div class="col-md-6">
							<!-- Post Item Start -->
							<div class="post--item post--layout-1 post--title-larger">
								<div class="post--img">
									<a href="{{ route('posts.show', $posts_new[3][0]) }}"
										class="thumb">
										<img src="{{ asset($posts_new[3][0]->image ? 'storage/' .$posts_new[3][0]->image->path : 'storage/placeholders/placeholder-image.png'  )}}" 
											 alt="{{ $posts_new[3][0]->title }}" 
											 style="width: 100%; height: 250px; object-fit: cover;">
									</a>

									<a href="{{ route('categories.show', $posts_new[3][0]->category ) }}" class="cat">{{ $posts_new[3][0]->category->name }}</a>

									<a href="javascript:;" class="icon"><i class="fa fa-flash"></i></a>

									<div class="post--info">
										<ul class="meta">
											<li><a href="javascript:;">{{ $posts_new[3][0]->author->name }}</a></li>
											<li><a href="javascript:;">{{ $posts_new[3][0]->created_at->locale('vi')->diffForHumans()  }}</a></li>
										</ul>

										<div class="title">
											<h2 class="h4" style="line-height: 1.3; margin-bottom: 10px;">
												<a href="{{ route('posts.show', $posts_new[3][0]) }}"
												   class="btn-link"
												   style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
												   {{ $posts_new[3][0]->title }}
												</a>
											</h2>
										</div>
									</div>
								</div>
							</div>
							<!-- Post Item End -->
						</div>
						@endif

					</div>
				</div>
				<!-- Post Items End -->
			</div>
			<!-- Main Content End -->

			<div class="row">
				<!-- Main Content Start -->
				<div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
					<div class="sticky-content-inner">
						<div class="row">
							<!-- World News Start -->
							<div class="col-md-6 ptop--30 pbottom--30">
								<!-- Post Items Title Start -->
								<div class="post--items-title" data-ajax="tab">
									<h2 class="h4">{{ $category_home[0]->name }}</h2>
								</div>
								<!-- Post Items Title End -->

								<!-- Post Items Start -->
								<div class="post--items post--items-2" data-ajax-content="outer">
									<ul class="row gutter--15" data-ajax-content="inner">
								
									
										<li class="col-xs-12">
											<!-- Post Item Start -->
											<div class="post--item post--layout-1">
												<div class="post--img">
													<a href="{{ route('posts.show', $post_category_home0[0]) }}"
														class="thumb"><img src="{{ asset($post_category_home0[0]->image ? 'storage/' . $post_category_home0[0]->image->path : 'storage/placeholders/placeholder-image.png'  )}}"
															alt=""></a>

													<a href="javascript:;" class="icon"><i class="fa fa-flash"></i></a>

													<div class="post--info">
														<!-- <ul class="meta">
															<li><a href="javascript:;">{{ $post_category_home0[0]->author->name }}
																
															</a></li>
															<li><a href="javascript:;">{{ $post_category_home0[0]->created_at->locale('vi')->diffForHumans()  }}</a></li>
														</ul> -->

														<div class="title">
															<h3 class="h4"><a
																	href="{{ route('posts.show', $post_category_home0[0]) }}"
																	class="btn-link">{{ $post_category_home0[0]->title }}</a>
															</h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>

										@for ($i = 1; $i <= 4; $i++)
											@if($i==1 || $i == 3 )
											<li class="col-xs-12">
												<!-- Divider Start -->
												<hr class="divider">
												<!-- Divider End -->
											</li>
											@endif 
											<li class="col-xs-6">
												<!-- Post Item Start -->

												<div class="post--item post--layout-2">
													<div class="post--img">
														<a href="{{ route('posts.show', $post_category_home0[$i]) }}"
															class="thumb"><img
																src="{{ asset($post_category_home0[$i]->image ? 'storage/' . $post_category_home0[$i]->image->path : 'storage/placeholders/placeholder-image.png'  )}}"
																alt=""></a>

														<div class="post--info">
															<ul class="meta">
																<li><a href="javascript:;">{{ $post_category_home0[$i]->author->name }}</a></li>
																<li><a href="javascript:;">{{ $post_category_home0[$i]->created_at->locale('vi')->diffForHumans()  }}</a></li>
															</ul>

															<div class="title">
																<h3 class="h4"><a
																		href="{{ route('posts.show', $post_category_home0[$i]) }}"
																		class="btn-link">{{ $post_category_home0[$i]->title }}</a>
																</h3>
															</div>
														</div>
													</div>
												</div>
												<!-- Post Item End -->
											</li>
										@endfor
									</ul>

								</div>
								<!-- Post Items End -->
							</div>
							<!-- World News End -->

							<!-- Technology Start -->
							<div class="col-md-6 ptop--30 pbottom--30">
								<!-- Post Items Title Start -->
								<div class="post--items-title" data-ajax="tab">
									<h2 class="h4">{{ $category_home[1]->name }}</h2>

								</div>
								<!-- Post Items Title End -->

								<!-- Post Items Start -->
								<div class="post--items post--items-3" data-ajax-content="outer">
									<ul class="nav" data-ajax-content="inner">
								
										<li>
											<!-- Post Item Start -->
											<div class="post--item post--layout-1">
												<div class="post--img">
													<a href="{{ route('posts.show', $post_category_home1[0]) }}"
														class="thumb"><img
															src="{{ asset($post_category_home1[0]->image ? 'storage/' . $post_category_home1[0]->image->path : 'storage/placeholders/placeholder-image.png'  )}}"
															alt=""></a>
												
													<a href="javascript:;" class="icon"><i class="fa fa-flash"></i></a>

													<div class="post--info">
														<ul class="meta">
															<li><a href="javascript:;">{{ $post_category_home1[0]->author->name }}</a></li>
															<li><a href="javascript:;">{{ $post_category_home1[0]->created_at->locale('vi')->diffForHumans()  }}</a></li>
														</ul>

														<div class="title">
															<h3 class="h4"><a
																	href="{{ route('posts.show', $post_category_home1[0]) }}"
																	class="btn-link">{{ $post_category_home1[0]->title }}</a>
															</h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>
										@if(isset($post_category_home1) && count($post_category_home1) > 0)
											@foreach($post_category_home1 as $index => $post)
												@if($index >= 6) @break @endif
												<li>
													<!-- Post Item Start -->
													<div class="post--item post--layout-3">
														<div class="post--img">
															<a href="{{ route('posts.show', $post) }}"
																class="thumb"><img
																	src="{{ asset($post->image ? 'storage/' . $post->image->path : 'storage/placeholders/placeholder-image.png'  )}}"
																	alt=""></a>

															<div class="post--info">
																<ul class="meta">
																	<li><a href="javascript:;">{{ $post->author->name }}</a></li>
																	<li><a href="javascript:;">{{ $post->created_at->locale('vi')->diffForHumans()  }}</a></li>
																</ul>

																<div class="title">
																	<h3 class="h4"><a
																			href="{{ route('posts.show', $post) }}"
																			class="btn-link">{{ $post->title }}</a>
																	</h3>
																</div>
															</div>
														</div>
													</div>
													<!-- Post Item End -->
												</li>
											@endforeach
										@endif

									</ul>


								</div>
								<!-- Post Items End -->
							</div>
							<!-- Technology End -->

							<!-- Finance Start -->
							<div class="col-md-12 ptop--30 pbottom--30">
								<!-- Post Items Title Start -->
								<div class="post--items-title" data-ajax="tab">
									<h2 class="h4">{{ $category_home[2]->name }}</h2>

								</div>
								<!-- Post Items Title End -->

								<!-- Post Items Start -->
								<div class="post--items post--items-2" data-ajax-content="outer">
									<ul class="nav row" data-ajax-content="inner">
										<li class="col-md-6">
											<!-- Post Item Start -->
											<div class="post--item post--layout-2">
												<div class="post--img">
													<a href="{{ route('posts.show', $post_category_home2[0]) }}"
														class="thumb"><img
															src="{{ asset($post_category_home2[0]->image ? 'storage/' . $post_category_home2[0]->image->path : 'storage/placeholders/placeholder-image.png'  )}}"
															alt=""></a>
													<a href="{{ route('categories.show', $post_category_home2[0]->category) }}" class="cat">{{ $post_category_home2[0]->category->name }}</a>
													<a href="javascript:;" class="icon"><i class="fa fa-star-o"></i></a>

													<div class="post--info">
														<ul class="meta">
															<li><a href="javascript:;">{{ $post_category_home2[0]->author->name }}</a></li>
															<li><a href="javascript:;">{{ $post_category_home2[0]->created_at->locale('vi')->diffForHumans()  }}</a></li>
														</ul>

														<div class="title">
															<h3 class="h4"><a
																	href="{{ route('posts.show', $post_category_home2[0]) }}"
																	class="btn-link">{{ $post_category_home2[0]->title }}</a>
															</h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->

											<hr class="mar_bottom15 ">

											<ul class="list_news_show_home">
												@for ($i = 4; $i <= 6; $i++)
													@if($i!=6)
													<li class="boder_link_show_home">
														<h3 class="h3"><a href="{{ route('posts.show', $post_category_home2[$i]) }}">{{ $post_category_home2[$i]->title }}</a></h3>
													</li>
													@endif

													@if($i==6)
													<li>
														<h3 class="h3"><a href="{{ route('posts.show', $post_category_home2[$i]) }}">{{ $post_category_home2[$i]->title }}</a></h3>
													</li>
													@endif
												
												@endfor
											</ul>

										</li>

										<li class="col-md-6">
											<ul class="nav row">
												<li class="col-xs-12 hidden-md hidden-lg">
													<!-- Divider Start -->
													<hr class="divider">
													<!-- Divider End -->
												</li>
												@for ($i = 1; $i <= 4; $i++)

													@if($i == 3 )
															<li class="col-xs-12">
																<!-- Divider Start -->
																<hr class="divider">
																<!-- Divider End -->
															</li>
													@endif 
													
													<li class="col-xs-6">
														<!-- Post Item Start -->
														<div class="post--item post--layout-2">
															<div class="post--img">
																<a href="{{ route('posts.show', $post_category_home2[$i]) }}"
																	class="thumb"><img 
																		src="{{ asset($post_category_home2[$i]->image ? 'storage/' . $post_category_home2[$i]->image->path : 'storage/placeholders/placeholder-image.png'  )}}"
																		alt=""></a>

																<div class="post--info">
																	<ul class="meta">
																		
																		<li><a href="javascript:;">{{ $post_category_home2[$i]->author->name }}</a></li>
																		<li><a href="javascript:;">{{ $post_category_home2[$i]->created_at->locale('vi')->diffForHumans()  }}</a></li>
																	</ul>

																	<div class="title">
																		<h3 class="h4"><a
																				href="{{ route('posts.show', $post_category_home2[$i]) }}"
																				class="btn-link">{{ $post_category_home2[$i]->title }}</a></h3>
																	</div>
																</div>
															</div>
														</div>
														<!-- Post Item End -->
													</li>

												@endfor
											</ul>
										</li>
									</ul>


								</div>
								<!-- Post Items End -->
							</div>
							<!-- Finance End -->

							<!-- Politics Start -->
							<div class="col-md-6 ptop--30 pbottom--30">
								<!-- Post Items Title Start -->
								<div class="post--items-title" data-ajax="tab">
									<h2 class="h4">{{ $category_home[3]->name }}</h2>


								</div>
								<!-- Post Items Title End -->

								<!-- Post Items Start -->
								<div class="post--items post--items-2" data-ajax-content="outer">
									<ul class="nav row gutter--15" data-ajax-content="inner">
										<li class="col-xs-12">
											<!-- Post Item Start -->
											<div class="post--item post--layout-1">
												<div class="post--img">
													<a href="{{ route('posts.show', $post_category_home3[0]) }}"
														class="thumb"><img
															src="{{ asset($post_category_home3[0]->image ? 'storage/' . $post_category_home3[0]->image->path : 'storage/placeholders/placeholder-image.png'  )}}"
															alt=""></a>
													<a href="{{ route('categories.show', $post_category_home3[0]->category) }}"
														class="cat">{{ $post_category_home3[0]->category->name }}</a>
													<a href="{{ route('categories.show', $post_category_home3[0]->category) }}" class="icon"><i class="fa fa-fire"></i></a>

													<div class="post--info">
														<ul class="meta">
															<li><a href="javascript:;">{{ $post_category_home3[0]->author->name }}</a></li>
															<li><a href="javascript:;">{{ $post_category_home3[0]->created_at->locale('vi')->diffForHumans()  }}</a></li>
														</ul>

														<div class="title">
															<h3 class="h4"><a href="{{ route('posts.show', $post_category_home3[0]) }}"
																	class="btn-link">{{ $post_category_home3[0]->title }}</a>
															</h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>

										@for ($i = 1; $i <= 4; $i++)
										@if($i==1 || $i == 3 )
											<li class="col-xs-12">
												<!-- Divider Start -->
												<hr class="divider">
												<!-- Divider End -->
											</li>
											@endif
											<li class="col-xs-6">
												<!-- Post Item Start -->
												<div class="post--item post--layout-2">
													<div class="post--img">
														<a href="{{ route('posts.show', $post_category_home3[$i]) }}"
															class="thumb"><img
																src="{{ asset($post_category_home3[$i]->image ? 'storage/' . $post_category_home3[$i]->image->path : 'storage/placeholders/placeholder-image.png'  )}}"
																alt=""></a>

														<div class="post--info">
															<ul class="meta">
																<li><a href="javascript:;">{{ $post_category_home3[$i]->author->name }}</a></li>
																<li><a href="javascript:;">{{ $post_category_home3[$i]->created_at->locale('vi')->diffForHumans()  }}</a></li>
															</ul>

															<div class="title">
																<h3 class="h4"><a
																		href="{{ route('posts.show', $post_category_home3[$i]) }}"
																		class="btn-link">{{ $post_category_home3[$i]->title }}</a>
																</h3>
															</div>
														</div>
													</div>
												</div>
												<!-- Post Item End -->
											</li>
										@endfor
									</ul>


								</div>
								<!-- Post Items End -->
							</div>
							<!-- Politics End -->

							<!-- Sports Start -->
							<div class="col-md-6 ptop--30 pbottom--30">
								<!-- Post Items Title Start -->
								<div class="post--items-title" data-ajax="tab">
									<h2 class="h4">{{ $category_home[4]->name }}</h2>
								</div>
								<!-- Post Items Title End -->

								<!-- Post Items Start -->
								<div class="post--items post--items-3" data-ajax-content="outer">
									<ul class="nav" data-ajax-content="inner">
										<li>
											<!-- Post Item Start -->
											<div class="post--item post--layout-1">
												<div class="post--img">
													<a href="{{ route('posts.show', $post_category_home4[0]) }}"
														class="thumb"><img src="{{ asset($post_category_home4[0]->image ? 'storage/' . $post_category_home4[0]->image->path : 'storage/placeholders/placeholder-image.png'  )}}"
															alt=""></a>
													<a href="{{ route('categories.show', $post_category_home4[0]->category) }}"
														class="cat">{{ $post_category_home4[0]->category->name }}</a>
													<a href="{{ route('categories.show', $post_category_home4[0]->category) }}" class="icon"><i class="fa fa-eye"></i></a>

													<div class="post--info">
														<ul class="meta">
															<li><a href="javascript:;">{{ $post_category_home4[0]->author->name }}</a></li>
															<li><a href="javascript:;">{{ $post_category_home4[0]->created_at->locale('vi')->diffForHumans()  }}</a></li>
														</ul>

														<div class="title">
															<h3 class="h4"><a
																	href="{{ route('posts.show', $post_category_home4[0]) }}"
																	class="btn-link">{{ $post_category_home4[0]->title }}</a>
															</h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>

										@for ($i = 1; $i <= 5; $i++)
										<li>
											<!-- Post Item Start -->
											<div class="post--item post--layout-3">
												<div class="post--img">
													<a href="{{ route('posts.show', $post_category_home4[$i]) }}"
														class="thumb"><img
															src="{{ asset($post_category_home4[$i]->image ? 'storage/' . $post_category_home4[$i]->image->path : 'storage/placeholders/placeholder-image.png')}}"
															alt=""></a>

													<div class="post--info">
														<ul class="meta">
															<li><a href="javascript:;">{{ $post_category_home4[$i]->author->name }}</a></li>
															<li><a href="javascript:;">{{ $post_category_home4[$i]->created_at->locale('vi')->diffForHumans()  }}</a></li>
														</ul>

														<div class="title">
															<h3 class="h4"><a
																	href="{{ route('posts.show', $post_category_home4[$i]) }}"
																	class="btn-link">{{ $post_category_home4[$i]->title }}</a></h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>
										@endfor

									</ul>

								</div>
								<!-- Post Items End -->
							</div>
							<!-- Sports End -->
						</div>
					</div>
				</div>
				<!-- Main Content End -->

				<!-- Main Sidebar Start -->
				<div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
					<div class="sticky-content-inner">
						<!-- Widget Start -->
						<div class="widget">
							<div class="widget--title">
								<h2 class="h4">Tin tức nổi bật</h2>
								<i class="icon fa fa-newspaper-o"></i>
							</div>

							<!-- List Widgets Start -->
							<div class="list--widget list--widget-1">
								<!-- Post Items Start -->
								<div class="post--items post--items-3" data-ajax-content="outer">
									<ul class="nav" data-ajax-content="inner">
										
										@foreach($outstanding_posts as $outstanding_post)
										<li>
											<!-- Post Item Start -->
											<div class="post--item post--layout-3">
												<div class="post--img">
													<a href="{{ route('posts.show', $outstanding_post) }}"
														class="thumb"><img width = "120"
															src="{{ asset($outstanding_post->image ? 'storage/' .$outstanding_post->image->path : 'storage/placeholders/placeholder-image.png')}}"
															alt=""></a>

													<div class="post--info">
														<ul class="meta">
															<li><a href="javascript:;">{{ $outstanding_post->created_at->locale('vi')->diffForHumans() }}</a></li>
															<li><a  href="javascript:;"><i class="fa fm fa-comments"></i>{{ count($outstanding_post->comments) }}</a></li>
                                       						<li><span><i class="fa fm fa-eye"></i>{{ $outstanding_post->views }}</span></li>
														</ul>

														<div class="title">
															<h3  class="h4">
																<a href="{{ route('posts.show', $outstanding_post) }}" class="btn-link">{{ $outstanding_post->title }}</a>
															</h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>
										@endforeach
									
									</ul>


								</div>
								<!-- Post Items End -->
							</div>
							<!-- List Widgets End -->
						</div>
						<!-- Widget End -->

						<!-- Bắt đầu Từ khóa -->
						<div class="widget">
							<div class="widget--title  " data-ajax="tab">
								<h2 class="h4">Từ khóa</h2>
							</div>
							<div class="list--widget list--widget-1" data-ajax-content="outer">
								<!-- Post Items Start -->
								<div class="post--items post--items-3">
									<ul style="padding:20px" class="nav sidebar" data-ajax-content="inner">
										<x-blog.side-tags :tags="$tags"/>
									</ul>
								</div>
							</div>
						</div>
						<!-- Kết thúc từ khóa -->

						<!-- Widget Start -->
						<div class="widget">
							<!-- Ad Widget Start -->
							<div class="ad--widget--banner">
								<div class="row">
									<div class="col-sm-12">
										<a
											href="https://mwc.com.vn/products/giay-sandal-nu-mwc-nusd--2887?c=N%C3%82U">
											<img src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao1.png') }}" alt="">
										</a>
									</div>
								</div>
							</div>
							<!-- Ad Widget End -->
						</div>
						<!-- Widget End -->

						<!-- Widget Start -->
						<div class="widget">
							<div class="widget--title">
								<h2 class="h4">Kết nối với chúng tôi</h2>
								<i class="icon fa fa-share-alt"></i>
							</div>

							<!-- Social Widget Start -->
							<div class="social--widget style--2">
								<ul class="nav row gutter--20">
									<li class="col-md-12 facebook">
										<a href="https://www.facebook.com/people/Anh-Tuan/100007007238964">
											<span class="icon">
												<i class="fa fa-facebook"></i>
												<span>Share</span>
											</span>

											<span class="text">
												<span>Facebook</span>
												<span>3.12 k</span>
											</span>
										</a>
									</li>

									<li class="col-md-12 twitter">
										<a href="https://www.facebook.com/people/Anh-Tuan/100007007238964">
											<span class="icon">
												<i class="fa fa-twitter"></i>
												<span>Tweet</span>
											</span>

											<span class="text">
												<span>Twitter</span>
												<span>869</span>
											</span>
										</a>
									</li>

									<li class="col-md-12 google-plus">
										<a href="https://www.facebook.com/people/Anh-Tuan/100007007238964">
											<span class="icon">
												<i class="fa fa-google-plus"></i>
												<span>Share</span>
											</span>

											<span class="text">
												<span>Google+</span>
												<span>639</span>
											</span>
										</a>
									</li>


								</ul>
							</div>
							<!-- Social Widget End -->
						</div>
						<!-- Widget End -->

						<!-- Widget Start -->
						<div class="widget">
							<div class="widget--title">
								<h2 class="h4">Nhận tin tức mới</h2>
								<i class="icon fa fa-envelope-open-o"></i>
							</div>

							<!-- Subscribe Widget Start -->
							<div class="subscribe--widget">
								<div class="content">
									<p>Đăng ký bản tin của chúng tôi để nhận tin tức mới nhất, tin tức phổ biến và
										cập nhật độc quyền.
									</p>
								</div>

								<form
									action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&id=f4e0e93d1d"
									method="post" name="mc-embedded-subscribe-form" target="_blank"
									data-form="mailchimpAjax">
									<div class="input-group">
										<input type="email" name="EMAIL" placeholder="E-mail address"
											class="form-control" autocomplete="off" required>

										<div class="input-group-btn">
											<button type="submit" class="btn btn-lg btn-default active"><i
													class="fa fa-paper-plane-o"></i></button>
										</div>
									</div>

									<div class="status"></div>
								</form>
							</div>
							<!-- Subscribe Widget End -->
						</div>
						<!-- Widget End -->

						<!-- Widget Start -->
						<div class="widget">
							<div class="widget--title">
								<h2 class="h4">Quảng cáo</h2>
								<i class="icon fa fa-bullhorn"></i>
							</div>

							<!-- Ad Widget Start -->
							<div class="ad--widget--banner">
								<a href="https://mwc.com.vn/products/giay-sandal-nu-mwc-nusd--2887?c=N%C3%82U">
									<img src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}" alt="">
								</a>
							</div>
							<!-- Ad Widget End -->
						</div>
						<!-- Widget End -->
					</div>
				</div>
				<!-- Main Sidebar End -->
			</div>

			<!-- Main Content Start -->
			<div class="main--content pd--30-0">
				<!-- Post Items Title Start -->
				<div class="post--items-title" data-ajax="tab">
					<h2 class="h4">{{ $category_home[5]->name }}</h2>
				</div>
				<!-- Post Items Title End -->

				<!-- Post Items Start -->
				<div class="post--items post--items-4" data-ajax-content="outer">
					<ul class="nav row" data-ajax-content="inner">
						<li class="col-md-8">
							<!-- Post Item Start -->
							<div class="post--item post--layout-1 post--type-video post--title-large">
								<div class="post--img">
									<a href="{{ route('posts.show', $post_category_home5[0]) }}" class="thumb"><img
											src="{{ asset($post_category_home5[0]->image ? 'storage/' . $post_category_home5[0]->image->path : 'storage/placeholders/placeholder-image.png'  )}}" alt=""></a>
									<a href="{{ route('categories.show', $post_category_home5[0]->category) }}" class="cat">{{ $post_category_home5[0]->category->name }}</a>
									<a href="{{ route('categories.show', $post_category_home5[0]->category) }}" class="icon"><i class="fa fa-eye"></i></a>

									<div class="post--info">
										<ul class="meta">
											<li><a href="javascript:;">{{ $post_category_home5[0]->author->name }}</a></li>
											<li><a href="javascript:;">{{ $post_category_home5[0]->created_at->locale('vi')->diffForHumans()  }}</a></li>
										</ul>

										<div class="title">
											<h2 class="h4"><a
													href="{{ route('posts.show', $post_category_home5[0]) }}"
													class="btn-link">{{ $post_category_home5[0]->title }}</a></h2>
										</div>
									</div>
								</div>
							</div>
							<!-- Post Item End -->

							<!-- Divider Start -->
							<hr class="divider hidden-md hidden-lg">
							<!-- Divider End -->
						</li>
						<li class="col-md-4">
							<ul class="nav">

							@for ($i = 1; $i <= 4; $i++)
								<li>
									<!-- Post Item Start -->
									<div class="post--item post--type-audio post--layout-3">
										<div class="post--img">
											<a href="{{ route('posts.show', $post_category_home5[$i]) }}"
												class="thumb"><img
													src="{{ asset($post_category_home5[$i]->image ? 'storage/' . $post_category_home5[$i]->image->path : 'storage/placeholders/placeholder-image.png'  )}}"
													alt=""></a>

											<div class="post--info">
												<ul class="meta">
													<li><a href="javascript:;">{{ $post_category_home5[$i]->author->name }}</a></li>
													<li><a href="javascript:;">{{ $post_category_home5[$i]->created_at->locale('vi')->diffForHumans()  }}</a></li>
												</ul>

												<div class="title">
													<h3 class="h4"><a
															href="{{ route('posts.show', $post_category_home5[$i]) }}"
															class="btn-link">{{ $post_category_home5[$i]->title }}</a></h3>
												</div>
											</div>
										</div>
									</div>
									<!-- Post Item End -->
								</li>
							@endfor
							
							</ul>
						</li>
					</ul>


				</div>
				<!-- Post Items End -->
			</div>
			<!-- Main Content End -->

			<!-- Advertisement Start -->
			<div class="ad--space pd--30-0">
				<a href="https://burine.vn/">
					<img src="{{ asset('kcnew/frontend/img/ads-img/970x90_banner_burine.png') }}" alt="" class="center-block">
				</a>
			</div>
			<!-- Advertisement End -->

			<div class="row">
				<!-- Main Content Start -->
				<div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
					<div class="sticky-content-inner">
						<div class="row">
							<!-- Health and fitness Start -->
							<div class="col-md-6 ptop--30 pbottom--30">
								<!-- Post Items Title Start -->
								<div class="post--items-title" data-ajax="tab">
									<h2 class="h4">{{ $category_home[6]->name }}</h2>


								</div>
								<!-- Post Items Title End -->

								<!-- Post Items Start -->
								<div class="post--items post--items-3" data-ajax-content="outer">
									<ul class="nav" data-ajax-content="inner">
										<li>
											<!-- Post Item Start -->
											<div class="post--item post--layout-1">
												<div class="post--img">
													<a href="{{ route('posts.show', $post_category_home6[0]) }}"
														class="thumb"><img
															src="{{ asset($post_category_home6[0]->image ? 'storage/' . $post_category_home6[0]->image->path : 'storage/placeholders/placeholder-image.png') }}" alt=""></a>
													<a href="{{ route('categories.show', $post_category_home6[0]->category) }}"
														class="cat">{{ $post_category_home6[0]->category->name }}</a>
													<a href="{{ route('categories.show', $post_category_home6[0]->category) }}" class="icon"><i class="fa fa-star-o"></i></a>

													<div class="post--info">
														<ul class="meta">
															<li><a href="javascript:;">{{ $post_category_home6[0]->author->name }}</a></li>
															<li><a href="javascript:;">{{ $post_category_home6[0]->created_at->locale('vi')->diffForHumans()  }}</a></li>
														</ul>

														<div class="title">
															<h3 class="h4"><a
																	href="{{ route('posts.show', $post_category_home6[0]) }}"
																	class="btn-link">{{ $post_category_home6[0]->title }}</a></h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>

										@for ($i = 1; $i <= 4; $i++)
										<li>
											<!-- Post Item Start -->
											<div class="post--item post--layout-3">
												<div class="post--img">
													<a href="{{ route('posts.show', $post_category_home6[$i]) }}"
														class="thumb"><img
															src="{{ asset($post_category_home6[0]->image ? 'storage/' . $post_category_home6[$i]->image->path : 'storage/placeholders/placeholder-image.png') }}"
															alt=""></a>

													<div class="post--info">
														<ul class="meta">
															<li><a href="javascript:;">{{ $post_category_home6[$i]->author->name }}</a></li>
															<li><a href="javascript:;">{{ $post_category_home6[$i]->created_at->locale('vi')->diffForHumans()  }}</a></li>
														</ul>

														<div class="title">
															<h3 class="h4"><a
																	href="{{ route('posts.show', $post_category_home6[$i]) }}"
																	class="btn-link">{{ $post_category_home6[$i]->title }}</a></h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>
										@endfor
										
									</ul>


								</div>
								<!-- Post Items End -->
							</div>
							<!-- Health and fitness End -->

							<!-- Lifestyle Start -->
							<div class="col-md-6 ptop--30 pbottom--30">
								<!-- Post Items Title Start -->
								<div class="post--items-title" data-ajax="tab">
									<h2 class="h4">{{ $category_home[7]->name }}</h2>


								</div>
								<!-- Post Items Title End -->

								<!-- Post Items Start -->
								<div class="post--items post--items-2" data-ajax-content="outer">
									<ul class="nav row gutter--15" data-ajax-content="inner">

										<li class="col-xs-12">
											<!-- Post Item Start -->
											<div class="post--item post--layout-1">
												<div class="post--img">
													<a href="{{ route('posts.show', $post_category_home7[0]) }}"
														class="thumb"><img
															src="{{ asset($post_category_home7[0]->image ? 'storage/' . $post_category_home7[0]->image->path : 'storage/placeholders/placeholder-image.png'  )}}"
															alt=""></a>
													<a href="{{ route('categories.show', $post_category_home7[0]->category) }}"
														class="cat">{{ $post_category_home7[0]->category->name }}</a>
													<a href="{{ route('categories.show', $post_category_home7[0]->category) }}" class="icon"><i class="fa fa-heart-o"></i></a>

													<div class="post--info">
														<ul class="meta">
															<li><a href="javascript:;">{{ $post_category_home7[0]->author->name }}</a></li>
															<li><a href="javascript:;">{{ $post_category_home7[0]->created_at->locale('vi')->diffForHumans()  }}</a></li>
														</ul>

														<div class="title">
															<h3 class="h4"><a
																	href="{{ route('posts.show', $post_category_home7[0]) }}"
																	class="btn-link">{{ $post_category_home7[0]->title }}</a>
															</h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										
										</li>
										@for ($i = 1; $i <= 4; $i++)
											@if ($i === 1 || $i === 3)
											<li class="col-xs-12">
												<!-- Divider Start -->
												<hr class="divider">
												<!-- Divider End -->
											</li>
											@endif
										<li class="col-xs-6">
											<!-- Post Item Start -->
											<div class="post--item post--layout-2">
												<div class="post--img">
													<a href="{{ route('posts.show', $post_category_home7[$i]) }}"
														class="thumb"><img
															src="{{ asset($post_category_home7[$i]->image ? 'storage/' . $post_category_home7[$i]->image->path : 'storage/placeholders/placeholder-image.png'  )}}"
															alt=""></a>

													<div class="post--info">
														<ul class="meta">
															<li><a href="javascript:;">{{ $post_category_home7[$i]->author->name }}</a></li>
															<li><a href="javascript:;">{{ $post_category_home7[$i]->created_at->locale('vi')->diffForHumans()  }}</a></li>
														</ul>

														<div class="title">
															<h3 class="h4"><a
																	href="{{ route('posts.show', $post_category_home7[$i]) }}"
																	class="btn-link">{{ $post_category_home7[$i]->title }}</a></h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>
										@endfor
									</ul>

								</div>
								<!-- Post Items End -->
							</div>
							<!-- Lifestyle End -->

							<div class="col-md-12 ptop--30 pbottom--30">
								<!-- Post Items Title Start -->
								<div class="post--items-title" data-ajax="tab">
									<h2 class="h4">{{ $category_home[8]->name }}</h2>


								</div>
								<!-- Post Items Title End -->

								<!-- Post Items Start -->
								<div class="post--items post--items-2" data-ajax-content="outer">
									<ul class="nav row" data-ajax-content="inner">
										<li class="col-md-6">
											<!-- Post Item Start -->
											<div class="post--item post--layout-2">
												<div class="post--img">
													<a href="{{ route('posts.show', $post_category_home8[0]) }}"
														class="thumb"><img
															src="{{ asset($post_category_home8[0]->image ? 'storage/' . $post_category_home8[0]->image->path : 'storage/placeholders/placeholder-image.png'  )}}" alt="">
													</a>
													<a href="{{ route('categories.show', $post_category_home8[0]->category) }}" class="cat">{{ $post_category_home8[0]->category->name }}</a>
													<a href="{{ route('categories.show', $post_category_home8[0]->category) }}" class="icon"><i class="fa fa-star-o"></i></a>

													<div class="post--info">
														<ul class="meta">
															<li><a href="javascript:;">{{ $post_category_home8[0]->author->name }}</a></li>
															<li><a href="javascript:;">{{ $post_category_home8[0]->created_at->locale('vi')->diffForHumans()  }}</a></li>
														</ul>

														<div class="title">
															<h3 class="h4"><a
																	href="{{ route('posts.show', $post_category_home8[0]) }}"
																	class="btn-link">{{ $post_category_home8[0]->title }}</a>
															</h3>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->

											<hr class="mar_bottom15 ">

											<ul class="list_news_show_home">
												@for ($i = 3; $i <= 5; $i++)
													@if($i!=5)
													<li class="boder_link_show_home">
														<h3 class="h3"><a
																href="{{ route('posts.show', $post_category_home8[$i]) }}">{{ $post_category_home8[$i]->title }}</a></h3>
													</li>
													@endif

													@if($i==5)
													<li>
														<h3 class="h3"><a
																href="{{ route('posts.show', $post_category_home8[$i]) }}">{{ $post_category_home8[$i]->title }}</a></h3>
													</li>
													@endif
												@endfor
											</ul>
										</li>
										<li class="col-md-6">
											<ul class="nav row">
												<li class="col-xs-12 hidden-md hidden-lg">
													<!-- Divider Start -->
													<hr class="divider">
													<!-- Divider End -->
												</li>
												@for ($i = 1; $i <= 4; $i++)
													@if($i==3)
														<li class="col-xs-12">
															<!-- Divider Start -->
															<hr class="divider">
															<!-- Divider End -->
														</li>
													@endif
													<li class="col-xs-6">
														<!-- Post Item Start -->
														<div class="post--item post--layout-2">
															<div class="post--img">
																<a href="{{ route('posts.show', $post_category_home8[$i]) }}"
																	class="thumb"><img
																		src="{{ asset($post_category_home8[$i]->image ? 'storage/' . $post_category_home8[$i]->image->path : 'storage/placeholders/placeholder-image.png'  )}}"
																		alt=""></a>

																<div class="post--info">
																	<ul class="meta">
																		<li><a href="javascript:;">{{ $post_category_home8[$i]->author->name }}</a></li>
																		<li><a href="javascript:;">{{ $post_category_home8[$i]->created_at->locale('vi')->diffForHumans()  }}</a></li>
																	</ul>

																	<div class="title">
																		<h3 class="h4"><a
																				href="{{ route('posts.show', $post_category_home8[$i]) }}"
																				class="btn-link">{{ $post_category_home8[$i]->title }}</a></h3>
																	</div>
																</div>
															</div>
														</div>
														<!-- Post Item End -->
													</li>

												@endfor
											
											</ul>
										</li>
									</ul>


								</div>
								<!-- Post Items End -->
							</div>

							<!-- Photo Gallery Start -->
							<div class="col-md-12 ptop--30 pbottom--30">
								<!-- Post Items Title Start -->
								<div class="post--items-title" data-ajax="tab">
									<h2 class="h4">{{ $category_home[9]->name }}</h2>

								</div>
								<!-- Post Items Title End -->

								<!-- Post Items Start -->
								<div class="post--items post--items-1" data-ajax-content="outer">
									<ul class="nav row gutter--15" data-ajax-content="inner">
										<li class="col-md-12">
											<!-- Post Item Start -->
											<div class="post--item post--layout-1 post--title-large">
												<div class="post--img">
													<a href="{{ route('posts.show', $post_category_home9[0]) }}"
														class="thumb"><img
															src="{{ asset($post_category_home9[0]->image ? 'storage/' . $post_category_home9[0]->image->path : 'storage/placeholders/placeholder-image.png'  )}}"
															alt=""></a>
													<a href="{{ route('categories.show', $post_category_home9[0]->category) }}"
														class="cat">{{ $post_category_home9[0]->category->name }}</a>
													<a href="{{ route('categories.show', $post_category_home9[0]->category) }}" class="icon"><i class="fa fa-eye"></i></a>

													<div class="post--info">
														<ul class="meta">
															<li><a href="javascript:;">{{ $post_category_home9[0]->author->name }}</a></li>
															<li><a href="javascript:;">{{ $post_category_home9[0]->created_at->locale('vi')->diffForHumans()  }}</a></li>
														</ul>

														<div class="title text-xxs-ellipsis">
															<h2 class="h4"><a
																	href="{{ route('posts.show', $post_category_home9[0]) }}"
																	class="btn-link">{{ $post_category_home9[0]->title }}</a></h2>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>
										@for ($i = 1; $i <= 3; $i++)
										<li class="col-md-4 col-xs-6 col-xxs-12">
											<!-- Post Item Start -->
											<div class="post--item post--layout-1">
												<div class="post--img">
													<a href="{{ route('posts.show', $post_category_home9[$i]) }}"
														class="thumb"><img
															src="{{ asset($post_category_home9[$i]->image ? 'storage/' . $post_category_home9[$i]->image->path : 'storage/placeholders/placeholder-image.png'  )}}"
															alt=""></a>

													<div class="post--info">
														<ul class="meta">
															<li><a href="javascript:;">{{ $post_category_home9[$i]->author->name }}</a></li>
															<li><a href="javascript:;">{{ $post_category_home9[$i]->created_at->locale('vi')->diffForHumans()  }}</a></li>
														</ul>

														<div class="title">
															<h2 class="h4"><a
																	href="{{ route('posts.show', $post_category_home9[$i]) }}"
																	class="btn-link">{{ $post_category_home9[$i]->title }}</a></h2>
														</div>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>
										@endfor
									

									</ul>

								</div>
								<!-- Post Items End -->
							</div>
							<!-- Photo Gallery End -->
						</div>
					</div>
				</div>
				<!-- Main Content End -->

				<!-- Main Sidebar Start -->
				<div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
					<div class="sticky-content-inner">
						<!-- Widget Start -->
						<div class="widget">
							<div class="widget--title" data-ajax="tab">
								<h2 class="h4">Bình chọn</h2>

								<div class="nav">
									<a href="javascript:;" class="prev btn-link" data-ajax-action="load_prev_poll_widget">
										<i class="fa fa-long-arrow-left"></i>
									</a>

									<span class="divider">/</span>

									<a href="javascript:;" class="next btn-link" data-ajax-action="load_next_poll_widget">
										<i class="fa fa-long-arrow-right"></i>
									</a>
								</div>
							</div>

							<!-- Poll Widget Start -->
							<div class="poll--widget" data-ajax-content="outer">
								<ul class="nav" data-ajax-content="inner">
									<li class="title">
										<h3 class="h4">
											Theo bạn thì giải đội bóng nào sẽ vô địch WoldCup 2022 ?</h3>
									</li>

									<li class="options">
										<form action="javascript:;">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="option-1">
													<img src="{{ asset('kcnew/frontend/img/Flag_barzill.png') }}" alt="Brasil" srcset="">
													<span>Brasil</span>
												</label>

												<p>55%<span style="width: 55%;"></span></p>
											</div>

											<div class="checkbox">
												<label>
													<input type="checkbox" name="option-2">
													<img src="{{ asset('kcnew/frontend/img/Flag_Agrennal.png') }}" alt="Brasil" srcset="">
													<span>Argentina</span>
												</label>

												<p>28%<span style="width: 28%;"></span></p>
											</div>

											<div class="checkbox">
												<label>
													<input type="checkbox" name="option-2">
													<img src="{{ asset('kcnew/frontend/img/Flag_tay_ban_nha.png') }}" alt="Brasil" srcset="">
													<span>Tây Ban Nha</span>
												</label>

												<p>12%<span style="width: 12%;"></span></p>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox" name="option-2">
													<img src="{{ asset('kcnew/frontend/img/Flag_bo-dao-nha.png') }}" alt="Brasil" srcset="">
													<span>Bồ Đào Nha</span>
												</label>

												<p>05%<span style="width: 05%;"></span></p>
											</div>

											<button type="submit" class="btn btn-primary">Vote Ngay</button>
										</form>
									</li>
								</ul>

								<!-- Preloader Start -->
								<div class="preloader bg--color-0--b" data-preloader="1">
									<div class="preloader--inner"></div>
								</div>
								<!-- Preloader End -->
							</div>
							<!-- Poll Widget End -->
						</div>
						<!-- Widget End -->

						<!-- Widget Start -->
						<div class="widget">
							<!-- Ad Widget Start -->
							<div class="ad--widget">
								<div class="row">
									<div class="col-sm-6">
										<a href="javascript:;">
											<img src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
												alt="">
										</a>
									</div>

									<div class="col-sm-6">
										<a href="javascript:;">
											<img src="{{ asset('kcnew/frontend/img/ads-img/banner_quangcao.png') }}"
												alt="">
										</a>
									</div>
								</div>
							</div>
							<!-- Ad Widget End -->
						</div>
						<!-- Widget End -->

						<!-- Widget Start -->
						<div class="widget">
							<div class="widget--title" data-ajax="tab">
								<h2 class="h4">Ý KIẾN NGƯỜI ĐỌC</h2>
							</div>

							<!-- List Widgets Start -->
							<div class="list--widget list--widget-2" data-ajax-content="outer">
								<!-- Post Items Start -->
								<div class="post--items post--items-3">
									<ul class="nav" data-ajax-content="inner">
										@foreach ($top_commnents as $top_commnent) 
										<li>
											<!-- Post Item Start -->
											<div class="post--item post--layout-3">
												<div class="post--img">
													<span class="thumb"><img style="margin: auto; background-size: cover ;  width: 60px; height: 60px;   background-image: url({{ $top_commnent->user->image ?  asset('storage/' . $top_commnent->user->image->path) : asset('storage/placeholders/user_placeholder.jpg') }})"  alt=""></span>

													<div class="post--info">
														<div class="title">
															<h3 class="h4">
																@if($top_commnent->post)
																	<a href="{{ route('posts.show', $top_commnent->post) }}">{{ $top_commnent->the_comment }}</a>
																@else
																	<span>{{ $top_commnent->the_comment }}</span>
																@endif
															</h3>
														</div>

														<ul class="meta">
															<li><span> {{ $top_commnent->user->name }}
																</span></li>
															<li><span>{{ $top_commnent->created_at->format('d/m/Y') }}</span></li>
														</ul>
													</div>
												</div>
											</div>
											<!-- Post Item End -->
										</li>
										@endforeach
									
									</ul>


								</div>
								<!-- Post Items End -->
							</div>
							<!-- List Widgets End -->
						</div>
						<!-- Widget End -->

					</div>
				</div> <!-- Main Sidebar End -->
			</div>

		</div>
	</div>
	<!-- Main Content Section End -->

</div>

<div class="colorlib-blog" style="display: none !important">
	<div class="container">
		<div class="row">
			<div class="col-md-8 post_col">

			@if(! count($posts))
				<p class="lead">Không có bài tin tức nào.</p>
			@else

			@forelse($posts as $post)

			<div class="block-21 d-flex animate-box post">
				<a href="{{ route('posts.show', $post) }}" class="blog-img" style="background-image: url({{ asset($post->image ? 'storage/' . $post->image->path : 'storage/placeholders/placeholder-image.png')}});"></a>
				<div class="text">
					<h3 class="heading"><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h3>
					<p class="excerpt">{{ $post->excerpt }}</p></p>
					<div class="meta">
						<div><a class="date" href="javascript:;"><span class="icon-calendar"></span>{{ $post->created_at->locale('vi')->diffForHumans()  }}</a></div>
						<div><a href="javascript:;"><span class="icon-user2"></span>{{ $post->author->name }} </a></div>
						<div class="comments-count"><a href="{{ route('posts.show', $post) }}javascript:;post-comments"><span class="icon-chat"></span> {{$post->comments_count}}</a></div>
					</div>
				</div>
				</div>
				@endforeach
				@endif
				<!-- phân trang -->
				{{$posts->links() }} 
			</div>

			<!-- SIDEBAR: start -->
			<div class="col-md-4 animate-box">
				<div class="sidebar">

					<x-blog.side-categories :categories="$categories"/>
					<x-blog.side-recent_posts :recent_posts="$recent_posts"/>
					<x-blog.side-tags :tags="$tags"/>
			
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Custom CSS for layout fixes -->
<style>
	/* Prevent image overflow and maintain aspect ratio */
	.post--item .post--img .thumb img {
		transition: transform 0.3s ease;
	}
	
	.post--item .post--img .thumb:hover img {
		transform: scale(1.05);
	}
	
	/* Remove conflicting flexbox styles that cause overlapping */
	.post--item {
		position: relative;
		margin-bottom: 15px;
		/* Remove flexbox styles to prevent overlapping */
	}
	
	.post--item .post--img {
		position: relative;
		overflow: hidden;
		/* Remove flex-grow to prevent overlapping */
	}
	
	/* Fix spacing between post items */
	.post--items .row .col-xs-6,
	.post--items .row .col-md-6,
	.post--items .row .col-sm-12 {
		margin-bottom: 20px;
		padding-left: 7.5px;
		padding-right: 7.5px;
	}
	
	/* Ensure proper clearfix */
	.post--items .row:after {
		content: "";
		display: table;
		clear: both;
	}
	
	/* Fix responsive issues */
	@media (max-width: 768px) {
		.post--item .post--img .thumb img {
			height: 200px !important;
		}
		
		.col-xs-6.col-xss-12 {
			margin-bottom: 20px;
		}
		
		.post--items .row .col-xs-6 {
			float: left;
			width: 50%;
		}
	}
	
	@media (max-width: 480px) {
		.post--item .post--img .thumb img {
			height: 180px !important;
		}
		
		.post--item .post--info .title h2 {
			font-size: 16px !important;
			line-height: 1.2 !important;
		}
		
		.post--items .row .col-xs-6 {
			float: none;
			width: 100%;
		}
	}
	
	/* Text truncation for better layout */
	.post--item .post--info .title a {
		word-wrap: break-word;
		hyphens: auto;
	}
	
	/* Ensure meta items don't break layout */
	.post--item .post--info .meta {
		display: block;
	}
	
	.post--item .post--info .meta li {
		margin-right: 10px;
		margin-bottom: 5px;
		display: inline-block;
	}
	
	/* Container overflow fix */
	.container, .row {
		overflow-x: hidden;
	}
	
	.post--items {
		margin-bottom: 30px;
	}
	
	/* Prevent floating issues */
	.post--items .col-md-6:nth-child(odd) {
		clear: left;
	}
</style>
	
@endsection

	