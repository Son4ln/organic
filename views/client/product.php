<?php 
	include '../views/client/header.php'; 
?>

	<?php
		$objCate = new Categories();
		$objShowTitle = new ShowTitle();
		if($action == 'product'){
			
		}
		else if($action == 'viewAllProduct'){
			$objTitle = new Titles();
			$showTitle = $objTitle->getTitleById($client_title);
			?>
				<div class="crumbs" style="margin-left: 6.5%; line-height: 45px;">
					<a href="?action=home">Home</a> //
					<a href="?action=viewAllProduct&id=<?php echo $client_title; ?>"><?php echo $showTitle['title_name']; ?></a>
				</div>
			<?php
		}else{
			$showCate = $objCate->getCategoryById($client_id);
			if($showCate['parent_id'] == 0){
	?>
			<div class="crumbs" style="margin-left: 6.5%; line-height: 45px;">
				<a href="?action=home">Home</a> //
				<a href="?action=category&id=<?php echo $showCate['category_id']; ?>"><?php echo $showCate['category_name']; ?></a></div>
	<?php
			}else{
				$findChild = $objCate->getCategoryParent($showCate['parent_id']);
				if($findChild['parent_id'] == 0){
			?>
					<div class="crumbs" style="margin-left: 6.5%; line-height: 45px;">
						<a href="?action=home">Home</a> //
						<a href="?action=category&id=<?php echo $findChild['category_id']; ?>"><?php echo $findChild['category_name']; ?></a> // 
						<a href="?action=category&id=<?php echo $showCate['category_id']; ?>"><?php echo $showCate['category_name']; ?></a></div>
			<?php
				}
				else{
					$findParent = $objCate->getCategoryParent($findChild['parent_id']);
					?>
						<div class="crumbs" style="margin-left: 6.5%; line-height: 45px;">
							<a href="?action=home">Home</a> //
							<a href="?action=category&id=<?php echo $findParent['category_id']; ?>"><?php echo $findParent['category_name']; ?></a> //
							<a href="?action=category&id=<?php echo $findChild['category_id']; ?>"><?php echo $findChild['category_name']; ?></a> // 
							<a href="?action=category&id=<?php echo $showCate['category_id']; ?>"><?php echo $showCate['category_name']; ?></a></div>
	<?php
				}
			 }
		}
	?>
<!-- PRODUCT -->
<section class="section white" style="text-align: left;">
    <div class="container">
    <div class="inside-container">
        <div class="section-title">
            <h3 class="title1 fancy"><span>Product</span></h3>
        </div>
		
			<!--Phân trang sản phẩm-->
			<?php
				$objPro = new Products();
				$objOrder = new Order();
				if($action=='product'){
					if(isset($client_brand)){
						if(isset($client_line)){
							$countPro = $objPro->countProductBL($client_brand, $client_line);
						} else {
							$countPro = $objPro->countProductB($client_brand);
						}
					}
					else if(isset($client_feature)){
						if(isset($client_line)){
							$countPro = $objPro->countProductFL($client_feature, $client_line);
						} else {
							$countPro = $objPro->countProductF($client_feature);
						}
					}
					else if(isset($client_origin)){
						if(isset($client_line)){
							$countPro = $objPro->countProductOL($client_origin, $client_line);
						} else {
							$countPro = $objPro->countProductO($client_origin);
						}
					}else{
						if(isset($client_line)){
							$countPro = $objPro->countProductL($client_line);
						} else {
							$countPro = $objPro->countProduct();
						}
					}
				}else if($action=='viewAllProduct'){
					if($client_title == 1){
						if(isset($client_brand)){
							if(isset($client_line)){
								$countPro = $objOrder->getCountOrderProductBL($client_brand, $client_line);
							} else {
								$countPro = $objOrder->getCountOrderProductB($client_brand);
							}
						}
						else if(isset($client_feature)){
							if(isset($client_line)){
								$countPro = $objOrder->getCountOrderProductFL($client_feature, $client_line);
							} else {
								$countPro = $objOrder->getCountOrderProductF($client_feature);
							}
						}
						else if(isset($client_origin)){
							if(isset($client_line)){
								$countPro = $objOrder->getCountOrderProductOL($client_origin, $client_line);
							} else {
								$countPro = $objOrder->getCountOrderProductO($client_origin);
							}
						}else{
							if(isset($client_line)){
								$countPro = $objOrder->getCountOrderProductL($client_line);
							} else {
								$countPro = $objOrder->getCountOrderProduct();
							}
						}
					}else if($client_title == 2){
						if(isset($client_brand)){
							if(isset($client_line)){
								$countPro = $objPro->countProductBL($client_brand, $client_line);
							} else {
								$countPro = $objPro->countProductB($client_brand);
							}
						}
						else if(isset($client_feature)){
							if(isset($client_line)){
								$countPro = $objPro->countProductFL($client_feature, $client_line);
							} else {
								$countPro = $objPro->countProductF($client_feature);
							}
						}
						else if(isset($client_origin)){
							if(isset($client_line)){
								$countPro = $objPro->countProductOL($client_origin, $client_line);
							} else {
								$countPro = $objPro->countProductO($client_origin);
							}
						}else{
							if(isset($client_line)){
								$countPro = $objPro->countProductL($client_line);
							} else {
								$countPro = $objPro->countProduct();
							}
						}
					}else if($client_title == 3){
						if(isset($client_brand)){
							if(isset($client_line)){
								$countPro = $objPro->countProductDiscountBL($client_brand, $client_line);
							} else {
								$countPro = $objPro->countProductDiscountB($client_brand);
							}
						}
						else if(isset($client_feature)){
							if(isset($client_line)){
								$countPro = $objPro->countProductDiscountFL($client_feature, $client_line);
							} else {
								$countPro = $objPro->countProductDiscountF($client_feature);
							}
						}
						else if(isset($client_origin)){
							if(isset($client_line)){
								$countPro = $objPro->countProductDiscountOL($client_origin, $client_line);
							} else {
								$countPro = $objPro->countProductDiscountO($client_origin);
							}
						}else{
							if(isset($client_line)){
								$countPro = $objPro->countProductDiscountL($client_line);
							} else {
								$countPro = $objPro->countProductDiscount();
							}
						}
					}else{
						if(isset($client_brand)){
							if(isset($client_line)){
								$countPro = $objShowTitle->countShowTitleByIdBL($client_title, $client_brand, $client_line);
							} else {
								$countPro = $objShowTitle->countShowTitleByIdB($client_title, $client_brand);
							}
						}
						else if(isset($client_feature)){
							if(isset($client_line)){
								$countPro = $objShowTitle->countShowTitleByIdFL($client_title, $client_feature, $client_line);
							} else {
								$countPro = $objShowTitle->countShowTitleByIdF($client_title, $client_feature);
							}
						}
						else if(isset($client_origin)){
							if(isset($client_line)){
								$countPro = $objShowTitle->countShowTitleByIdOL($client_title, $client_origin, $client_line);
							} else {
								$countPro = $objShowTitle->countShowTitleByIdO($client_title, $client_origin);
							}
						}else{
							if(isset($client_line)){
								$countPro = $objShowTitle->countShowTitleByIdL($client_title, $client_line);
							} else {
								$countPro = $objShowTitle->countShowTitleById($client_title);
							}
						}
					}
				}else{
					$countPro[0]=0;
					if($showCate['parent_id'] == 0){
						$checkCate = $objCate->checkCategoryParentChild($client_id);
						if($checkCate){
							$reCate = $objCate->getCategoryByParentId($client_id);
								$checkCate1 = $objCate->checkCategoryParentChild($reCate['category_id']);
								if($checkCate1){
									if($action == 'detailBrandCate'){
										if(isset($client_line)){
											$countPro1 = $objPro->countProductCategoryArrayParentBL($client_id, $client_brand, $client_line);
										} else {
											$countPro1 = $objPro->countProductCategoryArrayParentB($client_id, $client_brand);
										}
										$countPro[0] += $countPro1[0];
									}
									else if($action == 'detailFeatureCate'){
										if(isset($client_line)){
											$countPro1 = $objPro->countProductCategoryArrayParentFL($client_id, $client_feature, $client_line);
										} else {
											$countPro1 = $objPro->countProductCategoryArrayParentF($client_id, $client_feature);
										}
										$countPro[0] += $countPro1[0];
									}
									else if($action == 'detailOriginCate'){
										if(isset($client_line)){
											$countPro1 = $objPro->countProductCategoryArrayParentOL($client_id, $client_origin, $client_line);
										} else {
											$countPro1 = $objPro->countProductCategoryArrayParentO($client_id, $client_origin);
										}
										$countPro[0] += $countPro1[0];
									}else{
										if(isset($client_line)){
											$countPro1 = $objPro->countProductCategoryArrayParentL($client_id, $client_line);
										} else {
											$countPro1 = $objPro->countProductCategoryArrayParent($client_id);
										}
										$countPro[0] += $countPro1[0];
									}
								}else{
									if($action == 'detailBrandCate'){
										if(isset($client_line)){
											$countPro1 = $objPro->countProductCategoryArrayBL($client_id, $client_brand, $client_line);
										} else {
											$countPro1 = $objPro->countProductCategoryArrayB($client_id, $client_brand);
										}
										$countPro[0] += $countPro1[0];
									}
									else if($action == 'detailFeatureCate'){
										if(isset($client_line)){
											$countPro1 = $objPro->countProductCategoryArrayFL($client_id, $client_feature, $client_line);
										} else {
											$countPro1 = $objPro->countProductCategoryArrayF($client_id, $client_feature);
										}
										$countPro[0] += $countPro1[0];
									}
									else if($action == 'detailOriginCate'){
										if(isset($client_line)){
											$countPro1 = $objPro->countProductCategoryArrayOL($client_id, $client_origin, $client_line);
										} else {
											$countPro1 = $objPro->countProductCategoryArrayO($client_id, $client_origin);
										}
										$countPro[0] += $countPro1[0];
									}else{
										if(isset($client_line)){
											$countPro1 = $objPro->countProductCategoryArrayL($client_id, $client_line);
										} else {
											$countPro1 = $objPro->countProductCategoryArray($client_id);
										}
										$countPro[0] += $countPro1[0];
									}
								}
						}else{
							if($action == 'detailBrandCate'){
								if(isset($client_line)){
									$countPro = $objPro->countProductCategoryBL($client_id, $client_brand, $client_line);
								} else {
									$countPro = $objPro->countProductCategoryB($client_id, $client_brand);
								}
							}
							else if($action == 'detailFeatureCate'){
								if(isset($client_line)){
									$countPro = $objPro->countProductCategoryFL($client_id, $client_feature, $client_line);
								} else {
									$countPro = $objPro->countProductCategoryF($client_id, $client_feature);
								}
							}
							else if($action == 'detailOriginCate'){
								if(isset($client_line)){
									$countPro = $objPro->countProductCategoryOL($client_id, $client_origin, $client_line);
								} else {
									$countPro = $objPro->countProductCategoryO($client_id, $client_origin);
								}
							}else{
								if(isset($client_line)){
									$countPro = $objPro->countProductCategoryL($client_id, $client_line);
								} else {
									$countPro = $objPro->countProductCategory($client_id);
								}
							}
						}
					}else{
						$checkCate = $objCate->checkCategoryParentChild($client_id);
						if($checkCate){
							if($action == 'detailBrandCate'){
								if(isset($client_line)){
									$countPro1 = $objPro->countProductCategoryArrayBL($client_id, $client_brand, $client_line);
								} else {
									$countPro1 = $objPro->countProductCategoryArrayB($client_id, $client_brand);
								}
								$countPro[0] += $countPro1[0];
							}
							else if($action == 'detailFeatureCate'){
								if(isset($client_line)){
									$countPro1 = $objPro->countProductCategoryArrayFL($client_id, $client_feature, $client_line);
								} else {
									$countPro1 = $objPro->countProductCategoryArrayF($client_id, $client_feature);
								}
								$countPro[0] += $countPro1[0];
							}
							else if($action == 'detailOriginCate'){
								if(isset($client_line)){
									$countPro1 = $objPro->countProductCategoryArrayOL($client_id, $client_origin, $client_line);
								} else {
									$countPro1 = $objPro->countProductCategoryArrayO($client_id, $client_origin);
								}
								$countPro[0] += $countPro1[0];
							}else{
								if(isset($client_line)){
									$countPro1 = $objPro->countProductCategoryArrayL($client_id, $client_line);
								} else {
									$countPro1 = $objPro->countProductCategoryArray($client_id);
								}
								$countPro[0] += $countPro1[0];
							}
						}else{
							if($action == 'detailBrandCate'){
								if(isset($client_line)){
									$countPro = $objPro->countProductCategoryBL($client_id, $client_brand, $client_line);
								} else {
									$countPro = $objPro->countProductCategoryB($client_id, $client_brand);
								}
							}
							else if($action == 'detailFeatureCate'){
								if(isset($client_line)){
									$countPro = $objPro->countProductCategoryFL($client_id, $client_feature, $client_line);
								} else {
									$countPro = $objPro->countProductCategoryF($client_id, $client_feature);
								}
							}
							else if($action == 'detailOriginCate'){
								if(isset($client_line)){
									$countPro = $objPro->countProductCategoryOL($client_id, $client_origin, $client_line);
								} else {
									$countPro = $objPro->countProductCategoryO($client_id, $client_origin);
								}
							}else{
								if(isset($client_line)){
									$countPro = $objPro->countProductCategoryL($client_id, $client_line);
								} else {
									$countPro = $objPro->countProductCategory($client_id);
								}
							}
						}
					}
				}
				$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
				$limit = 8;
				// tổng số trang
				$total_page = ceil($countPro[0]/ $limit);
				// Giới hạn current_page trong khoảng 1 đến total_page
				if ($current_page > $total_page){
					$current_page = $total_page;
				}
				else if ($current_page < 1){
					$current_page = 1;
				}
				// Tìm Start
				$start = ($current_page - 1) * $limit;
				
				$all[0] = 0;
				if($action == 'product'){
					$all =  $objPro->countProduct();
				}else if($action == 'viewAllProduct'){ 
					if($client_title == 1){
						$all = $objOrder->getCountOrderProduct();
					}else if($client_title == 2){
						$all = $objPro->countProduct();
					}else if($client_title == 3){
						$all = $objPro->countProductDiscount();
					}else{
						$all = $objShowTitle->countShowTitleById($client_title);
					}
				}else{ 
					if($showCate['parent_id'] == 0){
						$checkCate = $objCate->checkCategoryParentChild($client_id);
						if($checkCate){
							$reCate = $objCate->getCategoryByParentId($client_id);
							$checkCate1 = $objCate->checkCategoryParentChild($reCate['category_id']);
							if($checkCate1){
								$all1 = $objPro->countProductCategoryArrayParent($client_id);
								$all[0] += $all1[0];
							} else{
								$all1 = $objPro->countProductCategoryArray($client_id);
								$all[0] += $all1[0];
							}
						}else{
							$all = $objPro->countProductCategory($client_id);
						}
					}else{
						$checkCate = $objCate->checkCategoryParentChild($client_id);
						if($checkCate){
							$all1 = $objPro->countProductCategoryArray($client_id);
							$all[0] += $all1[0];
						}else{
							$countPro = $objPro->countProductCategory($client_id);
						}
					}
				}
			?>
			
        <div class="row">
            <div class="col-sm-4">
                <div id="categories">
                    <h4 class="lower">Brands</h4>
                        <ul class="underline">
							<li><a href="?action=<?php
									if($action == 'product'){
										echo $action;
									}else if($action == 'viewAllProduct'){ 
										echo 'viewAllProduct&id='.$client_title;
									}else{ 
										echo 'category&id='.$client_id;
									}?>">Show all Brands (<?php echo $all[0]; ?>)
							</a></li>
							<?php
								$objBrand = new Brands();
								if($action=='product'){
									if(isset($client_brand)) {
										$brand = $objBrand->getBrandById($client_brand);
										if(isset($client_line)){
												$countBrand = $objPro->countProductBrandByIdL($brand['brand_id'], $client_line);
											} else {
												$countBrand = $objPro->countProductBrandById($brand['brand_id']);
											}
									?>
										<li><a href="?action=product&brand=<?php echo $brand['brand_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
											<?php echo $brand['brand_name']." (".$countBrand[0].")";?></a>
										</li>
									<?php
									} else {
										if(isset($client_line) && !isset($client_feature) && !isset($client_origin)){
											$showBrand = $objPro->getProductBrandL($client_line);
										} else {
											$showBrand = $objPro->getProductBrand();
										}
										foreach($showBrand as $brand){
											if(isset($client_line) && !isset($client_feature) && !isset($client_origin)){
												$countBrand = $objPro->countProductBrandByIdL($brand['brand_id'], $client_line);
											} else {
												$countBrand = $objPro->countProductBrandById($brand['brand_id']);
											}
									?>
										<li><a href="?action=product&brand=<?php echo $brand['brand_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
											<?php if($countBrand[0] >0) {echo $brand['brand_name']." (".$countBrand[0].")";}?></a>
										</li>
									<?php
										}
									}
								}else if($action=='viewAllProduct'){
									if($client_title == 1){
										if(isset($client_brand)) {
											$brand = $objBrand->getBrandById($client_brand);
											if(isset($client_line)){
													$countBrand = $objOrder->countOrderBrandByIdL($brand['brand_id'], $client_line);
												} else {
													$countBrand = $objOrder->countOrderBrandById($brand['brand_id']);
												}
										?>
											<li><a href="?action=viewAllProduct&id=<?php echo $client_title;?>&brand=<?php echo $brand['brand_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
												<?php echo $brand['brand_name']." (".$countBrand[0].")";?></a>
											</li>
										<?php
										} else {
											if(isset($client_line) && !isset($client_feature) && !isset($client_origin)){
												$showBrand = $objOrder->getOrderBrandL($client_line);
											} else {
												$showBrand = $objOrder->getOrderBrand();
											}
											foreach($showBrand as $brand){
												if(isset($client_line) && !isset($client_feature) && !isset($client_origin)){
													$countBrand = $objOrder->countOrderBrandByIdL($brand['brand_id'], $client_line);
												} else {
													$countBrand = $objOrder->countOrderBrandById($brand['brand_id']);
												}
										?>
											<li><a href="?action=viewAllProduct&id=<?php echo $client_title;?>&brand=<?php echo $brand['brand_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
												<?php if($countBrand[0] >0) {echo $brand['brand_name']." (".$countBrand[0].")";}?></a>
											</li>
										<?php
											}
										}
									}else if($client_title == 2){
										if(isset($client_brand)) {
											$brand = $objBrand->getBrandById($client_brand);
											if(isset($client_line)){
													$countBrand = $objPro->countProductBrandByIdL($brand['brand_id'], $client_line);
												} else {
													$countBrand = $objPro->countProductBrandById($brand['brand_id']);
												}
										?>
											<li><a href="?action=viewAllProduct&id=<?php echo $client_title;?>&brand=<?php echo $brand['brand_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
												<?php echo $brand['brand_name']." (".$countBrand[0].")";?></a>
											</li>
										<?php
										} else {
											if(isset($client_line) && !isset($client_feature) && !isset($client_origin)){
												$showBrand = $objPro->getProductBrandL($client_line);
											} else {
												$showBrand = $objPro->getProductBrand();
											}
											foreach($showBrand as $brand){
												if(isset($client_line) && !isset($client_feature) && !isset($client_origin)){
													$countBrand = $objPro->countProductBrandByIdL($brand['brand_id'], $client_line);
												} else {
													$countBrand = $objPro->countProductBrandById($brand['brand_id']);
												}
										?>
											<li><a href="?action=viewAllProduct&id=<?php echo $client_title;?>&brand=<?php echo $brand['brand_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
												<?php if($countBrand[0] >0) {echo $brand['brand_name']." (".$countBrand[0].")";}?></a>
											</li>
										<?php
											}
										}
									}else if($client_title == 3){
										if(isset($client_brand)) {
											$brand = $objBrand->getBrandById($client_brand);
											if(isset($client_line)){
													$countBrand = $objPro->countProductDiscountBL($brand['brand_id'], $client_line);
												} else {
													$countBrand = $objPro->countProductDiscountB($brand['brand_id']);
												}
										?>
											<li><a href="?action=viewAllProduct&id=<?php echo $client_title;?>&brand=<?php echo $brand['brand_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
												<?php echo $brand['brand_name']." (".$countBrand[0].")";?></a>
											</li>
										<?php
										} else {
											if(isset($client_line) && !isset($client_feature) && !isset($client_origin)){
												$showBrand = $objPro->getProductDiscountBrandL($client_line);
											} else {
												$showBrand = $objPro->getProductDiscountBrand();
											}
											foreach($showBrand as $brand){
												if(isset($client_line) && !isset($client_feature) && !isset($client_origin)){
													$countBrand = $objPro->countProductDiscountBL($brand['brand_id'], $client_line);
												} else {
													$countBrand = $objPro->countProductDiscountB($brand['brand_id']);
												}
										?>
											<li><a href="?action=viewAllProduct&id=<?php echo $client_title;?>&brand=<?php echo $brand['brand_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
												<?php if($countBrand[0] >0) {echo $brand['brand_name']." (".$countBrand[0].")";}?></a>
											</li>
										<?php
											}
										}
									}else{
										if(isset($client_brand)) {
											$brand = $objBrand->getBrandById($client_brand);
											if(isset($client_line)){
													$countBrand = $objShowTitle->countProductShowTitleBrandByIdL($client_title, $brand['brand_id'], $client_line);
												} else {
													$countBrand = $objShowTitle->countProductShowTitleBrandById($client_title, $brand['brand_id']);
												}
										?>
											<li><a href="?action=viewAllProduct&id=<?php echo $client_title;?>&brand=<?php echo $brand['brand_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
												<?php echo $brand['brand_name']." (".$countBrand[0].")";?></a>
											</li>
										<?php
										} else {
											if(isset($client_line) && !isset($client_feature) && !isset($client_origin)){
												$showBrand = $objShowTitle->getProductShowTitleBrandL($client_title, $client_line);
											} else {
												$showBrand = $objShowTitle->getProductShowTitleBrand($client_title);
											}
											foreach($showBrand as $brand){
												if(isset($client_line) && !isset($client_feature) && !isset($client_origin)){
													$countBrand = $objShowTitle->countProductShowTitleBrandByIdL($client_title, $brand['brand_id'], $client_line);
												} else {
													$countBrand = $objShowTitle->countProductShowTitleBrandById($client_title, $brand['brand_id']);
												}
										?>
											<li><a href="?action=viewAllProduct&id=<?php echo $client_title;?>&brand=<?php echo $brand['brand_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
												<?php if($countBrand[0] >0) {echo $brand['brand_name']." (".$countBrand[0].")";}?></a>
											</li>
										<?php
											}
										}
									}
								}else{
									if($showCate['parent_id'] == 0){
										$checkCate = $objCate->checkCategoryParentChild($client_id);
										if($checkCate){
											$reCate = $objCate->getCategoryByParentId($client_id);
											$checkCate1 = $objCate->checkCategoryParentChild($reCate['category_id']);
											if($checkCate1){
												if(isset($client_brand)) {
													$brand = $objBrand->getBrandById($client_brand);
													if(isset($client_line)){
															$countBrand = $objPro->countProductCategoryBrandByIdArrayParentL($client_id,$brand['brand_id'], $client_line);
														} else {
															$countBrand = $objPro->countProductCategoryBrandByIdArrayParent($client_id,$brand['brand_id']);
														}
												?>
													<li><a href="?action=detailBrandCate&id=<?php echo $client_id;?>&brand=<?php echo $brand['brand_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
														<?php echo $brand['brand_name']." (".$countBrand[0].")";?></a>
													</li>
												<?php
												} else {
													if(isset($client_line) && !isset($client_feature) && !isset($client_origin)){
														$showBrand = $objPro->getProductCategoryBrandArrayParentL($client_id, $client_line);
													} else {
														$showBrand = $objPro->getProductCategoryBrandArrayParent($client_id);
													}
													foreach($showBrand as $brand){
														if(isset($client_line) && !isset($client_feature) && !isset($client_origin)){
															$countBrand = $objPro->countProductCategoryBrandByIdArrayParentL($client_id,$brand['brand_id'], $client_line);
														} else {
															$countBrand = $objPro->countProductCategoryBrandByIdArrayParent($client_id,$brand['brand_id']);
														}
												?>
													<li><a href="?action=detailBrandCate&id=<?php echo $client_id;?>&brand=<?php echo $brand['brand_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
														<?php if($countBrand[0] >0) {echo $brand['brand_name']." (".$countBrand[0].")";}?></a>
													</li>
												<?php
													}
												}
											}else{
												if(isset($client_brand)) {
													$brand = $objBrand->getBrandById($client_brand);
													if(isset($client_line)){
															$countBrand = $objPro->countProductCategoryBrandByIdArrayL($client_id,$brand['brand_id'], $client_line);
														} else {
															$countBrand = $objPro->countProductCategoryBrandByIdArray($client_id,$brand['brand_id']);
														}
												?>
													<li><a href="?action=detailBrandCate&id=<?php echo $client_id;?>&brand=<?php echo $brand['brand_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
														<?php echo $brand['brand_name']." (".$countBrand[0].")";?></a>
													</li>
												<?php
												} else {
													if(isset($client_line) && !isset($client_feature) && !isset($client_origin)){
														$showBrand = $objPro->getProductCategoryBrandArrayL($client_id, $client_line);
													} else {
														$showBrand = $objPro->getProductCategoryBrandArray($client_id);
													}
													foreach($showBrand as $brand){
														if(isset($client_line) && !isset($client_feature) && !isset($client_origin)){
															$countBrand = $objPro->countProductCategoryBrandByIdArrayL($client_id,$brand['brand_id'], $client_line);
														} else {
															$countBrand = $objPro->countProductCategoryBrandByIdArray($client_id,$brand['brand_id']);
														}
												?>
													<li><a href="?action=detailBrandCate&id=<?php echo $client_id;?>&brand=<?php echo $brand['brand_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
														<?php echo $brand['brand_name']." (".$countBrand[0].")";?></a>
													</li>
												<?php
													}
												}
											}
											
										}else{
											if(isset($client_brand)) {
												$brand = $objBrand->getBrandById($client_brand);
												if(isset($client_line)){
														$countBrand = $objPro->countProductCategoryBrandByIdL($client_id,$brand['brand_id'], $client_line);
													} else {
														$countBrand = $objPro->countProductCategoryBrandById($client_id,$brand['brand_id']);
													}
											?>
												<li><a href="?action=detailBrandCate&id=<?php echo $client_id;?>&brand=<?php echo $brand['brand_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
													<?php echo $brand['brand_name']." (".$countBrand[0].")";?></a>
												</li>
											<?php
											} else {
												if(isset($client_line) && !isset($client_feature) && !isset($client_origin)){
													$showBrand = $objPro->getProductCategoryBrandL($client_id, $client_line);
												} else {
													$showBrand = $objPro->getProductCategoryBrand($client_id);
												}
												foreach($showBrand as $brand){
													if(isset($client_line) && !isset($client_feature) && !isset($client_origin)){
														$countBrand = $objPro->countProductCategoryBrandByIdL($client_id, $brand['brand_id'], $client_line);
													} else {
														$countBrand = $objPro->countProductCategoryBrandById($client_id, $brand['brand_id']);
													}
											?>
												<li><a href="?action=detailBrandCate&id=<?php echo $client_id;?>&brand=<?php echo $brand['brand_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
													<?php if($countBrand[0] >0) {echo $brand['brand_name']." (".$countBrand[0].")";}?></a>
												</li>
											<?php
												}
											}
										}
									}else{
										$checkCate = $objCate->checkCategoryParentChild($client_id);
										if($checkCate){
											if(isset($client_brand)) {
												$brand = $objBrand->getBrandById($client_brand);
												if(isset($client_line)){
														$countBrand = $objPro->countProductCategoryBrandByIdArrayL($client_id,$brand['brand_id'], $client_line);
													} else {
														$countBrand = $objPro->countProductCategoryBrandByIdArray($client_id,$brand['brand_id']);
													}
											?>
												<li><a href="?action=detailBrandCate&id=<?php echo $client_id;?>&brand=<?php echo $brand['brand_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
													<?php echo $brand['brand_name']." (".$countBrand[0].")";?></a>
												</li>
											<?php
											} else {
												if(isset($client_line) && !isset($client_feature) && !isset($client_origin)){
													$showBrand = $objPro->getProductCategoryBrandArrayL($client_id, $client_line);
												} else {
													$showBrand = $objPro->getProductCategoryBrandArray($client_id);
												}
												foreach($showBrand as $brand){
													if(isset($client_line) && !isset($client_feature) && !isset($client_origin)){
														$countBrand = $objPro->countProductCategoryBrandByIdArrayL($client_id,$brand['brand_id'], $client_line);
													} else {
														$countBrand = $objPro->countProductCategoryBrandByIdArray($client_id,$brand['brand_id']);
													}
											?>
												<li><a href="?action=detailBrandCate&id=<?php echo $client_id;?>&brand=<?php echo $brand['brand_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
													<?php if($countBrand[0] >0) {echo $brand['brand_name']." (".$countBrand[0].")";}?></a>
												</li>
											<?php
												}
											}
										}else{
											if(isset($client_brand)) {
												$brand = $objBrand->getBrandById($client_brand);
												if(isset($client_line)){
														$countBrand = $objPro->countProductCategoryBrandByIdL($client_id,$brand['brand_id'], $client_line);
													} else {
														$countBrand = $objPro->countProductCategoryBrandById($client_id,$brand['brand_id']);
													}
											?>
												<li><a href="?action=detailBrandCate&id=<?php echo $client_id;?>&brand=<?php echo $brand['brand_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
													<?php echo $brand['brand_name']." (".$countBrand[0].")";?></a>
												</li>
											<?php
											} else {
												if(isset($client_line) && !isset($client_feature) && !isset($client_origin)){
													$showBrand = $objPro->getProductCategoryBrandL($client_id, $client_line);
												} else {
													$showBrand = $objPro->getProductCategoryBrand($client_id);
												}
												foreach($showBrand as $brand){
													if(isset($client_line) && !isset($client_feature) && !isset($client_origin)){
														$countBrand = $objPro->countProductCategoryBrandByIdL($client_id,$brand['brand_id'], $client_line);
													} else {
														$countBrand = $objPro->countProductCategoryBrandById($client_id,$brand['brand_id']);
													}
											?>
												<li><a href="?action=detailBrandCate&id=<?php echo $client_id;?>&brand=<?php echo $brand['brand_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
													<?php if($countBrand[0] >0) {echo $brand['brand_name']." (".$countBrand[0].")";}?></a>
												</li>
											<?php
												}
											}
										}
									}
								}?>
						</ul>
                    <h4 class="lower">Feature</h4>
                        <ul class="underline">
							<li><a href="?action=<?php
								if($action == 'product'){
										echo $action;
									}else if($action == 'viewAllProduct'){ 
										echo 'viewAllProduct&id='.$client_title;
									}else{ 
										echo 'category&id='.$client_id;
									}?>">Show all Features (<?php echo $all[0]; ?>)
							</a></li>
							<?php
							$objFeature = new Features();
								if($action=='product'){
									if(isset($client_feature)) {
										$feature = $objFeature->getFeatureById($client_feature);
										if(isset($client_line)){
												$countFeature = $objPro->countProductFeatureByIdL($feature['feature_id'], $client_line);
											} else {
												$countFeature = $objPro->countProductFeatureById($feature['feature_id']);
											}
									?>
										<li><a href="?action=product&feature=<?php echo $feature['feature_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
											<?php echo $feature['feature_name']." (".$countFeature[0].")";?></a>
										</li>
									<?php
									} else {
										if(isset($client_line) && !isset($client_brand) && !isset($client_origin)){
											$showFeature = $objPro->getProductFeatureL($client_line);
										} else {
											$showFeature = $objPro->getProductFeature();
										}
										foreach($showFeature as $feature){
											if(isset($client_line) && !isset($client_brand) && !isset($client_origin)){
												$countFeature = $objPro->countProductFeatureByIdL($feature['feature_id'], $client_line);
											} else {
												$countFeature = $objPro->countProductFeatureById($feature['feature_id']);
											}
									?>
										<li><a href="?action=product&feature=<?php echo $feature['feature_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
											<?php if($countFeature[0] >0) {echo $feature['feature_name']." (".$countFeature[0].")";}?></a>
										</li>
									<?php
										}
									}
								}else if($action=='viewAllProduct'){
									if($client_title == 1){
										if(isset($client_feature)) {
											$feature = $objFeature->getFeatureById($client_feature);
											if(isset($client_line)){
													$countFeature = $objOrder->countOrderFeatureByIdL($feature['feature_id'], $client_line);
												} else {
													$countFeature = $objOrder->countOrderFeatureById($feature['feature_id']);
												}
										?>
											<li><a href="?action=viewAllProduct&id=<?php echo $client_title;?>&feature=<?php echo $feature['feature_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
													<?php echo $feature['feature_name']." (".$countFeature[0].")";?></a>
											</li>
										<?php
										} else {
											if(isset($client_line) && !isset($client_brand) && !isset($client_origin)){
												$showFeature = $objOrder->getOrderFeatureL($client_line);
											} else {
												$showFeature = $objOrder->getOrderFeature();
											}
											foreach($showFeature as $feature){
												if(isset($client_line) && !isset($client_brand) && !isset($client_origin)){
													$countFeature = $objOrder->countOrderFeatureByIdL($feature['feature_id'], $client_line);
												} else {
													$countFeature = $objOrder->countOrderFeatureById($feature['feature_id']);
												}
										?>
											<li><a href="?action=viewAllProduct&id=<?php echo $client_title;?>&feature=<?php echo $feature['feature_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
													<?php if($countFeature[0] >0) {echo $feature['feature_name']." (".$countFeature[0].")";}?></a>
											</li>
										<?php
											}
										}
									}else if($client_title == 2){
										if(isset($client_feature)) {
											$feature = $objFeature->getFeatureById($client_feature);
											if(isset($client_line)){
													$countFeature = $objPro->countProductFeatureByIdL($feature['feature_id'], $client_line);
												} else {
													$countFeature = $objPro->countProductFeatureById($feature['feature_id']);
												}
										?>
											<li><a href="?action=viewAllProduct&id=<?php echo $client_title;?>&feature=<?php echo $feature['feature_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
												<?php echo $feature['feature_name']." (".$countFeature[0].")";?></a>
											</li>
										<?php
										} else {
											if(isset($client_line) && !isset($client_brand) && !isset($client_origin)){
												$showFeature = $objPro->getProductFeatureL($client_line);
											} else {
												$showFeature = $objPro->getProductFeature();
											}
											foreach($showFeature as $feature){
												if(isset($client_line) && !isset($client_brand) && !isset($client_origin)){
													$countFeature = $objPro->countProductFeatureByIdL($feature['feature_id'], $client_line);
												} else {
													$countFeature = $objPro->countProductFeatureById($feature['feature_id']);
												}
										?>
											<li><a href="?action=viewAllProduct&id=<?php echo $client_title;?>&feature=<?php echo $feature['feature_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
												<?php if($countFeature[0] >0) {echo $feature['feature_name']." (".$countFeature[0].")";}?></a>
											</li>
										<?php
											}
										}
									}else if($client_title == 3){
										if(isset($client_feature)) {
											$feature = $objFeature->getFeatureById($client_feature);
											if(isset($client_line)){
													$countFeature = $objPro->countProductDiscountFL($feature['feature_id'], $client_line);
												} else {
													$countFeature = $objPro->countProductDiscountF($feature['feature_id']);
												}
										?>
											<li><a href="?action=viewAllProduct&id=<?php echo $client_title;?>&feature=<?php echo $feature['feature_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
												<?php echo $feature['feature_name']." (".$countFeature[0].")";?></a>
											</li>
										<?php
										} else {
											if(isset($client_line) && !isset($client_brand) && !isset($client_origin)){
												$showFeature = $objPro->getProductDiscountFeatureL($client_line);
											} else {
												$showFeature = $objPro->getProductFeature();
											}
											foreach($showFeature as $feature){
												if(isset($client_line) && !isset($client_brand) && !isset($client_origin)){
													$countFeature = $objPro->countProductDiscountFL($feature['feature_id'], $client_line);
												} else {
													$countFeature = $objPro->countProductDiscountF($feature['feature_id']);
												}
										?>
											<li><a href="?action=viewAllProduct&id=<?php echo $client_title;?>&feature=<?php echo $feature['feature_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
												<?php if($countFeature[0] >0) {echo $feature['feature_name']." (".$countFeature[0].")";}?></a>
											</li>
										<?php
											}
										}
									}else{
										if(isset($client_feature)) {
											$feature = $objFeature->getFeatureById($client_feature);
											if(isset($client_line)){
												$countFeature = $objShowTitle->countProductShowTitleFeatureByIdL($client_title, $feature['feature_id'], $client_line);
											} else {
												$countFeature = $objShowTitle->countProductShowTitleFeatureById($client_title, $feature['feature_id']);
											}
										?>
											<li><a href="?action=viewAllProduct&id=<?php echo $client_title;?>&feature=<?php echo $feature['feature_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
												<?php echo $feature['feature_name']." (".$countFeature[0].")";?></a>
											</li>
										<?php
										} else {
											if(isset($client_line) && !isset($client_brand) && !isset($client_origin)){
												$showFeature = $objShowTitle->getProductShowTitleFeatureL($client_title, $client_line);
											} else {
												$showFeature = $objShowTitle->getProductShowTitleFeature($client_title);
											}
											foreach($showFeature as $feature){
												if(isset($client_line) && !isset($client_brand) && !isset($client_origin)){
													$countFeature = $objShowTitle->countProductShowTitleFeatureByIdL($client_title, $feature['feature_id'], $client_line);
												} else {
													$countFeature = $objShowTitle->countProductShowTitleFeatureById($client_title, $feature['feature_id']);
												}
										?>
											<li><a href="?action=viewAllProduct&id=<?php echo $client_title;?>&feature=<?php echo $feature['feature_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
												<?php if($countFeature[0] >0) {echo $feature['feature_name']." (".$countFeature[0].")";}?></a>
											</li>
										<?php
											}
										}
									}
								}else{
									if($showCate['parent_id'] == 0){
										$checkCate = $objCate->checkCategoryParentChild($client_id);
										if($checkCate){
											$reCate = $objCate->getCategoryByParentId($client_id);
											$checkCate1 = $objCate->checkCategoryParentChild($reCate['category_id']);
											if($checkCate1){
												if(isset($client_feature)) {
													$feature = $objFeature->getFeatureById($client_feature);
														if(isset($client_line)){
															$countFeature = $objPro->countProductCategoryFeatureByIdArrayParentL($client_id, $feature['feature_id'], $client_line);
														} else {
															$countFeature = $objPro->countProductCategoryFeatureByIdArrayParent($client_id, $feature['feature_id']);
														}
												?>
													<li><a href="?action=detailFeatureCate&id=<?php echo $client_id;?>&feature=<?php echo $feature['feature_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
														<?php echo $feature['feature_name']." (".$countFeature[0].")";?></a>
													</li>
												<?php
												} else {
													if(isset($client_line) && !isset($client_brand) && !isset($client_origin)){
														$showFeature = $objPro->getProductCategoryFeatureArrayParentL($client_id, $client_line);
													} else {
														$showFeature = $objPro->getProductCategoryFeatureArrayParent($client_id);
													}
													foreach($showFeature as $feature){
														if(isset($client_line) && !isset($client_brand) && !isset($client_origin)){
															$countFeature = $objPro->countProductCategoryFeatureByIdArrayParentL($client_id, $feature['feature_id'], $client_line);
														} else {
															$countFeature = $objPro->countProductCategoryFeatureByIdArrayParent($client_id, $feature['feature_id']);
														}
												?>
													<li><a href="?action=detailFeatureCate&id=<?php echo $client_id;?>&feature=<?php echo $feature['feature_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
														<?php if($countFeature[0] >0) {echo $feature['feature_name']." (".$countFeature[0].")";}?></a>
													</li>
												<?php
													}
												}
											}else{
												if(isset($client_feature)) {
													$feature = $objFeature->getFeatureById($client_feature);
														if(isset($client_line)){
															$countFeature = $objPro->countProductCategoryFeatureByIdArrayL($client_id, $feature['feature_id'], $client_line);
														} else {
															$countFeature = $objPro->countProductCategoryFeatureByIdArray($client_id, $feature['feature_id']);
														}
												?>
													<li><a href="?action=detailFeatureCate&id=<?php echo $client_id;?>&feature=<?php echo $feature['feature_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
														<?php echo $feature['feature_name']." (".$countFeature[0].")";?></a>
													</li>
												<?php
												} else {
													if(isset($client_line) && !isset($client_brand) && !isset($client_origin)){
														$showFeature = $objPro->getProductCategoryFeatureArrayL($client_id, $client_line);
													} else {
														$showFeature = $objPro->getProductCategoryFeatureArray($client_id);
													}
													foreach($showFeature as $feature){
														if(isset($client_line) && !isset($client_brand) && !isset($client_origin)){
															$countFeature = $objPro->countProductCategoryFeatureByIdArrayL($client_id, $feature['feature_id'], $client_line);
														} else {
															$countFeature = $objPro->countProductCategoryFeatureByIdArray($client_id, $feature['feature_id']);
														}
												?>
													<li><a href="?action=detailFeatureCate&id=<?php echo $client_id;?>&feature=<?php echo $feature['feature_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
														<?php if($countFeature[0] >0) {echo $feature['feature_name']." (".$countFeature[0].")";}?></a>
													</li>
												<?php
													}
												}
											}
										}else{
											if(isset($client_feature)) {
												$feature = $objFeature->getFeatureById($client_feature);
													if(isset($client_line)){
														$countFeature = $objPro->countProductCategoryFeatureByIdL($client_id, $feature['feature_id'], $client_line);
													} else {
														$countFeature = $objPro->countProductCategoryFeatureById($client_id, $feature['feature_id']);
													}
											?>
												<li><a href="?action=detailFeatureCate&id=<?php echo $client_id;?>&feature=<?php echo $feature['feature_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
													<?php echo $feature['feature_name']." (".$countFeature[0].")";?></a>
												</li>
											<?php
											} else {
												if(isset($client_line) && !isset($client_brand) && !isset($client_origin)){
													$showFeature = $objPro->getProductCategoryFeatureL($client_id, $client_line);
												} else {
													$showFeature = $objPro->getProductCategoryFeature($client_id);
												}
												foreach($showFeature as $feature){
													if(isset($client_line) && !isset($client_brand) && !isset($client_origin)){
														$countFeature = $objPro->countProductCategoryFeatureByIdL($client_id, $feature['feature_id'], $client_line);
													} else {
														$countFeature = $objPro->countProductCategoryFeatureById($client_id, $feature['feature_id']);
													}
											?>
												<li><a href="?action=detailFeatureCate&id=<?php echo $client_id;?>&feature=<?php echo $feature['feature_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
													<?php if($countFeature[0] >0) {echo $feature['feature_name']." (".$countFeature[0].")";}?></a>
												</li>
											<?php
												}
											}
										}
									}else{
										$checkCate = $objCate->checkCategoryParentChild($client_id);
										if($checkCate){
											if(isset($client_feature)) {
												$feature = $objFeature->getFeatureById($client_feature);
													if(isset($client_line)){
														$countFeature = $objPro->countProductCategoryFeatureByIdArrayL($client_id, $feature['feature_id'], $client_line);
													} else {
														$countFeature = $objPro->countProductCategoryFeatureByIdArray($client_id, $feature['feature_id']);
													}
											?>
												<li><a href="?action=detailFeatureCate&id=<?php echo $client_id;?>&feature=<?php echo $feature['feature_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
													<?php echo $feature['feature_name']." (".$countFeature[0].")";?></a>
												</li>
											<?php
											} else {
												if(isset($client_line) && !isset($client_brand) && !isset($client_origin)){
													$showFeature = $objPro->getProductCategoryFeatureArrayL($client_id, $client_line);
												} else {
													$showFeature = $objPro->getProductCategoryFeatureArray($client_id);
												}
												foreach($showFeature as $feature){
													if(isset($client_line) && !isset($client_brand) && !isset($client_origin)){
														$countFeature = $objPro->countProductCategoryFeatureByIdArrayL($client_id, $feature['feature_id'], $client_line);
													} else {
														$countFeature = $objPro->countProductCategoryFeatureByIdArray($client_id, $feature['feature_id']);
													}
											?>
												<li><a href="?action=detailFeatureCate&id=<?php echo $client_id;?>&feature=<?php echo $feature['feature_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
													<?php if($countFeature[0] >0) {echo $feature['feature_name']." (".$countFeature[0].")";}?></a>
												</li>
											<?php
												}
											}
										}else{
											if(isset($client_feature)) {
												$feature = $objFeature->getFeatureById($client_feature);
													if(isset($client_line)){
														$countFeature = $objPro->countProductCategoryFeatureByIdL($client_id, $feature['feature_id'], $client_line);
													} else {
														$countFeature = $objPro->countProductCategoryFeatureById($client_id, $feature['feature_id']);
													}
											?>
												<li><a href="?action=detailFeatureCate&id=<?php echo $client_id;?>&feature=<?php echo $feature['feature_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
													<?php echo $feature['feature_name']." (".$countFeature[0].")";?></a>
												</li>
											<?php
											} else {
												if(isset($client_line) && !isset($client_brand) && !isset($client_origin)){
													$showFeature = $objPro->getProductCategoryFeatureL($client_id, $client_line);
												} else {
													$showFeature = $objPro->getProductCategoryFeature($client_id);
												}
												foreach($showFeature as $feature){
													if(isset($client_line) && !isset($client_brand) && !isset($client_origin)){
														$countFeature = $objPro->countProductCategoryFeatureByIdL($client_id, $feature['feature_id'], $client_line);
													} else {
														$countFeature = $objPro->countProductCategoryFeatureById($client_id, $feature['feature_id']);
													}
											?>
												<li><a href="?action=detailFeatureCate&id=<?php echo $client_id;?>&feature=<?php echo $feature['feature_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
													<?php if($countFeature[0] >0) {echo $feature['feature_name']." (".$countFeature[0].")";}?></a>
												</li>
											<?php
												}
											}
										}
									}
								}?>
                        </ul>
                        <h4>In Origin</h4>
                        <ul>                          
                            <li><a href="?action=<?php
								if($action == 'product'){
										echo $action;
									}else if($action == 'viewAllProduct'){ 
										echo 'viewAllProduct&id='.$client_title;
									}else{ 
										echo 'category&id='.$client_id;
									}?>">Show all In Origin (<?php echo $all[0]; ?>)
							</a></li>
                            <?php
							$objOrigin = new Origin();
								if($action=='product'){
									if(isset($client_origin)) {
										$origin = $objOrigin->getOriginShowById($client_origin);
											if(isset($client_line)){
												$countOrigin = $objPro->countProductOriginByIdL($origin['origin_id'], $client_line);
											} else {
												$countOrigin = $objPro->countProductOriginById($origin['origin_id']);
											}
									?>
										<li><a href="?action=product&origin=<?php echo $origin['origin_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
											<?php echo $origin['name_of_origin']." (".$countOrigin[0].")"; ?></a>
										</li>
									<?php
									} else {
										if(isset($client_line) && !isset($client_brand) && !isset($client_feature)){
											$showOrigin = $objPro->getProductOriginL($client_line);
										} else {
											$showOrigin = $objPro->getProductOrigin();
										}
										foreach($showOrigin as $origin){
											if(isset($client_line) && !isset($client_brand) && !isset($client_feature)){
												$countOrigin = $objPro->countProductOriginByIdL($origin['origin_id'], $client_line);
											} else {
												$countOrigin = $objPro->countProductOriginById($origin['origin_id']);
											}
									?>
										<li><a href="?action=product&origin=<?php echo $origin['origin_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
											<?php if($countOrigin[0] >0) { echo $origin['name_of_origin']." (".$countOrigin[0].")";} ?></a>
										</li>
									<?php
										}
									}
								}else if($action=='viewAllProduct'){
									if($client_title == 1){
										if(isset($client_origin)) {
											$origin = $objOrigin->getOriginShowById($client_origin);
												if(isset($client_line)){
													$countOrigin = $objOrder->countOrderOriginByIdL($origin['origin_id'], $client_line);
												} else {
													$countOrigin = $objOrder->countOrderOriginById($origin['origin_id']);
												}
										?>
											<li><a href="?action=viewAllProduct&id=<?php echo $client_title;?>&origin=<?php echo $origin['origin_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
												<?php echo $origin['name_of_origin']." (".$countOrigin[0].")"; ?></a>
											</li>
										<?php
										} else {
											if(isset($client_line) && !isset($client_brand) && !isset($client_feature)){
												$showOrigin = $objOrder->getOrderOriginL($client_line);
											} else {
												$showOrigin = $objOrder->getOrderOrigin();
											}
											foreach($showOrigin as $origin){
												if(isset($client_line) && !isset($client_brand) && !isset($client_feature)){
													$countOrigin = $objOrder->countOrderOriginByIdL($origin['origin_id'], $client_line);
												} else {
													$countOrigin = $objOrder->countOrderOriginById($origin['origin_id']);
												}
										?>
											<li><a href="?action=viewAllProduct&id=<?php echo $client_title;?>&origin=<?php echo $origin['origin_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
												<?php if($countOrigin[0] >0) { echo $origin['name_of_origin']." (".$countOrigin[0].")";} ?></a>
											</li>
										<?php
											}
										}
									}else if($client_title == 2){
										if(isset($client_origin)) {
											$origin = $objOrigin->getOriginShowById($client_origin);
												if(isset($client_line)){
													$countOrigin = $objPro->countProductOriginByIdL($origin['origin_id'], $client_line);
												} else {
													$countOrigin = $objPro->countProductOriginById($origin['origin_id']);
												}
										?>
											<li><a href="?action=viewAllProduct&id=<?php echo $client_title;?>&origin=<?php echo $origin['origin_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
												<?php echo $origin['name_of_origin']." (".$countOrigin[0].")"; ?></a>
											</li>
										<?php
										} else {
											if(isset($client_line) && !isset($client_brand) && !isset($client_feature)){
												$showOrigin = $objPro->getProductOriginL($client_line);
											} else {
												$showOrigin = $objPro->getProductOrigin();
											}
											foreach($showOrigin as $origin){
												if(isset($client_line) && !isset($client_brand) && !isset($client_feature)){
													$countOrigin = $objPro->countProductOriginByIdL($origin['origin_id'], $client_line);
												} else {
													$countOrigin = $objPro->countProductOriginById($origin['origin_id']);
												}
										?>
											<li><a href="?action=viewAllProduct&id=<?php echo $client_title;?>&origin=<?php echo $origin['origin_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
												<?php if($countOrigin[0] >0) { echo $origin['name_of_origin']." (".$countOrigin[0].")";} ?></a>
											</li>
										<?php
											}
										}
									}else if($client_title == 3){
										if(isset($client_origin)) {
											$origin = $objOrigin->getOriginShowById($client_origin);
												if(isset($client_line)){
													$countOrigin = $objPro->countProductDiscountOL($origin['origin_id'], $client_line);
												} else {
													$countOrigin = $objPro->countProductDiscountO($origin['origin_id']);
												}
										?>
											<li><a href="?action=viewAllProduct&id=<?php echo $client_title;?>&origin=<?php echo $origin['origin_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
												<?php echo $origin['name_of_origin']." (".$countOrigin[0].")"; ?></a>
											</li>
										<?php
										} else {
											if(isset($client_line) && !isset($client_brand) && !isset($client_feature)){
												$showOrigin = $objPro->getProductDiscountOriginL($client_line);
											} else {
												$showOrigin = $objPro->getProductDiscountOrigin();
											}
											foreach($showOrigin as $origin){
												if(isset($client_line) && !isset($client_brand) && !isset($client_feature)){
													$countOrigin = $objPro->countProductDiscountOL($origin['origin_id'], $client_line);
												} else {
													$countOrigin = $objPro->countProductDiscountO($origin['origin_id']);
												}
										?>
											<li><a href="?action=viewAllProduct&id=<?php echo $client_title;?>&origin=<?php echo $origin['origin_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
												<?php if($countOrigin[0] >0) { echo $origin['name_of_origin']." (".$countOrigin[0].")";} ?></a>
											</li>
										<?php
											}
										}
									}else{
										if(isset($client_origin)) {
											$origin = $objOrigin->getOriginShowById($client_origin);
												if(isset($client_line)){
													$countOrigin = $objShowTitle->countProductShowTitleOriginByIdL($client_title, $origin['origin_id'], $client_line);
												} else {
													$countOrigin = $objShowTitle->countProductShowTitleOriginById($client_title, $origin['origin_id']);
												}
										?>
											<li><a href="?action=viewAllProduct&id=<?php echo $client_title;?>&origin=<?php echo $origin['origin_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
												<?php echo $origin['name_of_origin']." (".$countOrigin[0].")"; ?></a>
											</li>
										<?php
										} else {
											if(isset($client_line) && !isset($client_brand) && !isset($client_feature)){
												$showOrigin = $objShowTitle->getProductShowTitleOriginL($client_title, $client_line);
											} else {
												$showOrigin = $objShowTitle->getProductShowTitleOrigin($client_title);
											}
											foreach($showOrigin as $origin){
												if(isset($client_line) && !isset($client_brand) && !isset($client_feature)){
													$countOrigin = $objShowTitle->countProductShowTitleOriginByIdL($client_title, $origin['origin_id'], $client_line);
												} else {
													$countOrigin = $objShowTitle->countProductShowTitleOriginById($client_title, $origin['origin_id']);
												}
										?>
											<li><a href="?action=viewAllProduct&id=<?php echo $client_title;?>&origin=<?php echo $origin['origin_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
												<?php if($countOrigin[0] >0) { echo $origin['name_of_origin']." (".$countOrigin[0].")";} ?></a>
											</li>
										<?php
											}
										}
									}
								}else{
									if($showCate['parent_id'] == 0){
										$checkCate = $objCate->checkCategoryParentChild($client_id);
										$checkCate = $objCate->checkCategoryParentChild($client_id);
										if($checkCate){
											$reCate = $objCate->getCategoryByParentId($client_id);
											$checkCate1 = $objCate->checkCategoryParentChild($reCate['category_id']);
											if($checkCate1){
												if(isset($client_origin)) {
													$origin = $objOrigin->getOriginShowById($client_origin);
														if(isset($client_line)){
															$countOrigin = $objPro->countProductCategoryOriginByIdArrayParentL($client_id, $origin['origin_id'], $client_line);
														} else {
															$countOrigin = $objPro->countProductCategoryOriginByIdArrayParent($client_id, $origin['origin_id']);
														}
												?>
													<li><a href="?action=detailOriginCate&id=<?php echo $client_id;?>&origin=<?php echo $origin['origin_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
														<?php echo $origin['name_of_origin']." (".$countOrigin[0].")"; ?></a>
													</li>
												<?php
												} else {
													if(isset($client_line) && !isset($client_brand) && !isset($client_feature)){
														$showOrigin = $objPro->getProductCategoryOriginArrayParentL($client_id, $client_line);
													} else {
														$showOrigin = $objPro->getProductCategoryOriginArrayParent($client_id);
													}
													foreach($showOrigin as $origin){
														if(isset($client_line) && !isset($client_brand) && !isset($client_feature)){
															$countOrigin = $objPro->countProductCategoryOriginByIdArrayParentL($client_id, $origin['origin_id'], $client_line);
														} else {
															$countOrigin = $objPro->countProductCategoryOriginByIdArrayParent($client_id, $origin['origin_id']);
														}
												?>
													<li><a href="?action=detailOriginCate&id=<?php echo $client_id;?>&origin=<?php echo $origin['origin_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
														<?php if($countOrigin[0] >0) { echo $origin['name_of_origin']." (".$countOrigin[0].")";} ?></a>
													</li>
												<?php
													}
												}
											}else{
												if(isset($client_origin)) {
													$origin = $objOrigin->getOriginShowById($client_origin);
														if(isset($client_line)){
															$countOrigin = $objPro->countProductCategoryOriginByIdArrayL($client_id, $origin['origin_id'], $client_line);
														} else {
															$countOrigin = $objPro->countProductCategoryOriginByIdArray($client_id, $origin['origin_id']);
														}
												?>
													<li><a href="?action=detailOriginCate&id=<?php echo $client_id;?>&origin=<?php echo $origin['origin_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
														<?php echo $origin['name_of_origin']." (".$countOrigin[0].")"; ?></a>
													</li>
												<?php
												} else {
													if(isset($client_line) && !isset($client_brand) && !isset($client_feature)){
														$showOrigin = $objPro->getProductCategoryOriginArrayL($client_id, $client_line);
													} else {
														$showOrigin = $objPro->getProductCategoryOriginArray($client_id);
													}
													foreach($showOrigin as $origin){
														if(isset($client_line) && !isset($client_brand) && !isset($client_feature)){
															$countOrigin = $objPro->countProductCategoryOriginByIdArrayL($client_id, $origin['origin_id'], $client_line);
														} else {
															$countOrigin = $objPro->countProductCategoryOriginByIdArray($client_id, $origin['origin_id']);
														}
												?>
													<li><a href="?action=detailOriginCate&id=<?php echo $client_id;?>&origin=<?php echo $origin['origin_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
														<?php if($countOrigin[0] >0) { echo $origin['name_of_origin']." (".$countOrigin[0].")";} ?></a>
													</li>
												<?php
													}
												}
											}
										}else{
											if(isset($client_origin)) {
												$origin = $objOrigin->getOriginShowById($client_origin);
													if(isset($client_line)){
														$countOrigin = $objPro->countProductCategoryOriginByIdL($client_id, $origin['origin_id'], $client_line);
													} else {
														$countOrigin = $objPro->countProductCategoryOriginById($client_id, $origin['origin_id']);
													}
											?>
												<li><a href="?action=detailOriginCate&id=<?php echo $client_id;?>&origin=<?php echo $origin['origin_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
													<?php echo $origin['name_of_origin']." (".$countOrigin[0].")"; ?></a>
												</li>
											<?php
											} else {
												if(isset($client_line) && !isset($client_brand) && !isset($client_feature)){
													$showOrigin = $objPro->getProductCategoryOriginL($client_id, $client_line);
												} else {
													$showOrigin = $objPro->getProductCategoryOrigin($client_id);
												}
												foreach($showOrigin as $origin){
													if(isset($client_line) && !isset($client_brand) && !isset($client_feature)){
														$countOrigin = $objPro->countProductCategoryOriginByIdL($client_id, $origin['origin_id'], $client_line);
													} else {
														$countOrigin = $objPro->countProductCategoryOriginById($client_id, $origin['origin_id']);
													}
											?>
												<li><a href="?action=detailOriginCate&id=<?php echo $client_id;?>&origin=<?php echo $origin['origin_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
													<?php if($countOrigin[0] >0) { echo $origin['name_of_origin']." (".$countOrigin[0].")";} ?></a>
												</li>
											<?php
												}
											}
										}
									}else{
										$checkCate = $objCate->checkCategoryParentChild($client_id);
										if($checkCate){
											if(isset($client_origin)) {
												$origin = $objOrigin->getOriginShowById($client_origin);
													if(isset($client_line)){
														$countOrigin = $objPro->countProductCategoryOriginByIdArrayL($client_id, $origin['origin_id'], $client_line);
													} else {
														$countOrigin = $objPro->countProductCategoryOriginByIdArray($client_id, $origin['origin_id']);
													}
											?>
												<li><a href="?action=detailOriginCate&id=<?php echo $client_id;?>&origin=<?php echo $origin['origin_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
													<?php echo $origin['name_of_origin']." (".$countOrigin[0].")"; ?></a>
												</li>
											<?php
											} else {
												if(isset($client_line) && !isset($client_brand) && !isset($client_feature)){
													$showOrigin = $objPro->getProductCategoryOriginArrayL($client_id, $client_line);
												} else {
													$showOrigin = $objPro->getProductCategoryOriginArray($client_id);
												}
												foreach($showOrigin as $origin){
													if(isset($client_line) && !isset($client_brand) && !isset($client_feature)){
														$countOrigin = $objPro->countProductCategoryOriginByIdArrayL($client_id, $origin['origin_id'], $client_line);
													} else {
														$countOrigin = $objPro->countProductCategoryOriginByIdArray($client_id, $origin['origin_id']);
													}
											?>
												<li><a href="?action=detailOriginCate&id=<?php echo $client_id;?>&origin=<?php echo $origin['origin_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
													<?php if($countOrigin[0] >0) { echo $origin['name_of_origin']." (".$countOrigin[0].")";} ?></a>
												</li>
											<?php
												}
											}
										}else{
											if(isset($client_origin)) {
												$origin = $objOrigin->getOriginShowById($client_origin);
													if(isset($client_line)){
														$countOrigin = $objPro->countProductCategoryOriginByIdL($client_id, $origin['origin_id'], $client_line);
													} else {
														$countOrigin = $objPro->countProductCategoryOriginById($client_id, $origin['origin_id']);
													}
											?>
												<li><a href="?action=detailOriginCate&id=<?php echo $client_id;?>&origin=<?php echo $origin['origin_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
												<?php echo $origin['name_of_origin']." (".$countOrigin[0].")"; ?></a>
												</li>
											<?php
											} else {
												if(isset($client_line) && !isset($client_brand) && !isset($client_feature)){
													$showOrigin = $objPro->getProductCategoryOriginL($client_id, $client_line);
												} else {
													$showOrigin = $objPro->getProductCategoryOrigin($client_id);
												}
												foreach($showOrigin as $origin){
													if(isset($client_line) && !isset($client_brand) && !isset($client_feature)){
														$countOrigin = $objPro->countProductCategoryOriginByIdL($client_id, $origin['origin_id'], $client_line);
													} else {
														$countOrigin = $objPro->countProductCategoryOriginById($client_id, $origin['origin_id']);
													}
											?>
												<li><a href="?action=detailOriginCate&id=<?php echo $client_id;?>&origin=<?php echo $origin['origin_id'];if(isset($client_line)){ echo '&line='.$client_line;}?>">
												<?php if($countOrigin[0] >0) { echo $origin['name_of_origin']." (".$countOrigin[0].")";} ?></a>
												</li>
											<?php
												}
											}
										}
									}
								}?>
						</ul>
                    </div>
            </div>
            <div class="col-sm-8">
                <div id="right" style="margin-top: 70px">
                    <div id="content">
                        <div id="show-title">
							<span class="left"><span>
								<?php
									$objBrand = new Brands();
									$objFeature = new Features();
									$objOrigin = new Origin();
									$objProductLine = new ProductLine();
									
									if($action=='product'){
										echo 'Tất cả sản phẩm';
									}else if($action=='viewAllProduct'){
										echo $showTitle['title_name'];
									}else{
										echo $showCate['category_name'];
									}
										if(isset($client_brand)){
											$nameBrand = $objBrand->getBrandById($client_brand);
											echo ' - Thương hiệu: '.$nameBrand['brand_name'];
										}
										if(isset($client_feature)){
											$nameFeature = $objFeature->getFeatureById($client_feature);
											echo ' - Tính năng: '.$nameFeature['feature_name'];
										}
										if(isset($client_origin)){
											$nameOrigin = $objOrigin->getOriginShowById($client_origin);
											echo ' - Nguồn gốc: '.$nameOrigin['name_of_origin'];
										}
										if(isset($client_line)){
											$nameLine = $objProductLine->getLinesProductsById($client_line);
											echo ' - Thuộc loại: '.$nameLine['line_name'];
										}
								?></span></span> 
							<span class="right"><span>Showing </span>
							<?php if($countPro[0]>=8){ echo ($start+1).' - '.($start+$limit)?> <span>of </span><?php echo $countPro[0]; ?></span>
							<?php } else if($countPro[0]==0) {?>  0  
							<?php } else {?>  1 - <?php echo $countPro[0]; ?> <span>of </span><?php echo $countPro[0]; ?></span>  <?php } ?>
						</div>
						<div id="prod-list">
							<div class="prod-row">
								<div class="row">
									<?php
									$objProductLine = new ProductLine();
									?>
									<div class="col-md-4 col-sm-6 col-xs-12">
										<label><a href="?action=<?php echo $action; if(isset($client_id)){ echo '&id='.$client_id;}
												if(isset($client_title)){
												?>&id=<?php echo $client_title;	
												} if(isset($client_brand)){
												?>&brand=<?php echo $client_brand;
												} else if(isset($client_feature)){
												?>&feature=<?php echo $client_feature;
												} else if(isset($client_origin)){
												?>&origin=<?php echo $client_origin;
												}
												?>"><input type="checkbox"<?php if(!isset($client_line) || $client_line == 0){ echo 'checked';}?>> 
												<div class="bg-icon">VA</div> View All
											</a>
										</label>
									</div>
									<?php
									$showLinePro = $objProductLine->getLinesProducts();
									foreach($showLinePro as $line_pro){
									?>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<label>
												<a href="?action=<?php echo $action; if(isset($client_id)){ echo '&id='.$client_id;}
													if(isset($client_brand)){
													?>&brand=<?php echo $client_brand;
													} else if(isset($client_feature)){
													?>&feature=<?php echo $client_feature;
													} else if(isset($client_origin)){
													?>&origin=<?php echo $client_origin;
													} if(isset($client_title)){
													?>&id=<?php echo $client_title;	
													}
													?>&line=<?php echo $line_pro['line_id']?>">
													<input type="checkbox" value="<?php echo $line_pro['line_name'];?>" 
													<?php if(isset($client_line) && $client_line == $line_pro['line_id']){ echo 'checked';}?>> 
													<div class="bg-icon"><?php echo $line_pro['compact'];?></div> <?php echo $line_pro['line_name'];?>
												</a>
											</label>
										</div>
									<?php
									}
									?>
								</div>
								<?php
									if( $countPro[0]==0){
										echo 'Chưa có loại sản phẩm này!';
									} else{
										if($action=='product'){
											if(isset($client_brand)){
												if(isset($client_line)){
													$showPro = $objPro->getProductLimitBL($client_brand, $client_line, $start, $limit);
												} else {
													$showPro = $objPro->getProductLimitB($client_brand, $start, $limit);
												}
											}
											else if(isset($client_feature)){
												if(isset($client_line)){
													$showPro = $objPro->getProductLimitFL($client_feature, $client_line, $start, $limit);
												} else {
													$showPro = $objPro->getProductLimitF($client_feature, $start, $limit);
												}
											}
											else if(isset($client_origin)){
												if(isset($client_line)){
													$showPro = $objPro->getProductLimitOL($client_origin, $client_line, $start, $limit);
												} else {
													$showPro = $objPro->getProductLimitO($client_origin, $start, $limit);
												}
											}else{
												if(isset($client_line)){
													$showPro = $objPro->getProductLimitL($client_line, $start, $limit);
												} else {
													$showPro = $objPro->getProductLimit($start, $limit);
												}
											}
										}else if($action == 'viewAllProduct'){
											if($client_title == 1){
												if(isset($client_brand)){
													if(isset($client_line)){
														$showPro = $objOrder->getProductOrderLimitBL($client_brand, $client_line, $start, $limit);
													} else {
														$showPro = $objOrder->getProductOrderLimitB($client_brand, $start, $limit);
													}
												}
												else if(isset($client_feature)){
													if(isset($client_line)){
														$showPro = $objOrder->getProductOrderLimitFL($client_feature, $client_line, $start, $limit);
													} else {
														$showPro = $objOrder->getProductOrderLimitF($client_feature, $start, $limit);
													}
												}
												else if(isset($client_origin)){
													if(isset($client_line)){
														$showPro = $objOrder->getProductOrderLimitOL($client_origin, $client_line, $start, $limit);
													} else {
														$showPro = $objOrder->getProductOrderLimitO($client_origin, $start, $limit);
													}
												}else{
													if(isset($client_line)){
														$showPro = $objOrder->getProductOrderLimitL($client_line, $start, $limit);
													} else {
														$showPro = $objOrder->getProductOrderLimit($start, $limit);
													}
												}
											}else if($client_title == 2){
												if(isset($client_brand)){
													if(isset($client_line)){
														$showPro = $objPro->getProductNewBL($client_brand, $client_line, $start, $limit);
													} else {
														$showPro = $objPro->getProductNewB($client_brand, $start, $limit);
													}
												}
												else if(isset($client_feature)){
													if(isset($client_line)){
														$showPro = $objPro->getProductNewFL($client_feature, $client_line, $start, $limit);
													} else {
														$showPro = $objPro->getProductNewF($client_feature, $start, $limit);
													}
												}
												else if(isset($client_origin)){
													if(isset($client_line)){
														$showPro = $objPro->getProductNewOL($client_origin, $client_line, $start, $limit);
													} else {
														$showPro = $objPro->getProductNewO($client_origin, $start, $limit);
													}
												}else{
													if(isset($client_line)){
														$showPro = $objPro->getProductNewL($client_line, $start, $limit);
													} else {
														$showPro = $objPro->getProductNew($start, $limit);
													}
												}
											}else if($client_title == 3){
												if(isset($client_brand)){
													if(isset($client_line)){
														$showPro = $objPro->getProductDiscountBL($client_brand, $client_line, $start, $limit);
													} else {
														$showPro = $objPro->getProductDiscountB($client_brand, $start, $limit);
													}
												}
												else if(isset($client_feature)){
													if(isset($client_line)){
														$showPro = $objPro->getProductDiscountFL($client_feature, $client_line, $start, $limit);
													} else {
														$showPro = $objPro->getProductDiscountF($client_feature, $start, $limit);
													}
												}
												else if(isset($client_origin)){
													if(isset($client_line)){
														$showPro = $objPro->getProductDiscountOL($client_origin, $client_line, $start, $limit);
													} else {
														$showPro = $objPro->getProductDiscountO($client_origin, $start, $limit);
													}
												}else{
													if(isset($client_line)){
														$showPro = $objPro->getProductDiscountL($client_line, $start, $limit);
													} else {
														$showPro = $objPro->getProductDiscount($start, $limit);
													}
												}
											}else{
												if(isset($client_brand)){
													if(isset($client_line)){
														$showPro = $objShowTitle->getProductShowTitleLimitBL($client_title, $client_brand, $client_line, $start, $limit);
													} else {
														$showPro = $objShowTitle->getProductShowTitleLimitB($client_title, $client_brand, $start, $limit);
													}
												}
												else if(isset($client_feature)){
													if(isset($client_line)){
														$showPro = $objShowTitle->getProductShowTitleLimitFL($client_title, $client_feature, $client_line, $start, $limit);
													} else {
														$showPro = $objShowTitle->getProductShowTitleLimitF($client_title, $client_feature, $start, $limit);
													}
												}
												else if(isset($client_origin)){
													if(isset($client_line)){
														$showPro = $objShowTitle->getProductShowTitleLimitOL($client_title, $client_origin, $client_line, $start, $limit);
													} else {
														$showPro = $objShowTitle->getProductShowTitleLimitO($client_title, $client_origin, $start, $limit);
													}
												}else{
													if(isset($client_line)){
														$showPro = $objShowTitle->getProductShowTitleLimitL($client_title, $client_line, $start, $limit);
													} else {
														$showPro = $objShowTitle->getProductShowTitleLimit($client_title, $start, $limit);
													}
												}
											}
										}else{
											if($showCate['parent_id'] == 0){
												$checkCate = $objCate->checkCategoryParentChild($client_id);
												if($checkCate){
													$reCate = $objCate->getCategoryByParentId($client_id);
													$checkCate1 = $objCate->checkCategoryParentChild($reCate['category_id']);
													if($checkCate1){
														if($action == 'detailBrandCate'){
															if(isset($client_line)){
																$showPro = $objPro->getProductCategoryLimitArrayParentBL($client_id, $client_brand, $client_line, $start, $limit);
															} else {
																$showPro = $objPro->getProductCategoryLimitArrayParentB($client_id, $client_brand, $start, $limit);
															}
														}else if($action == 'detailFeatureCate'){
															if(isset($client_line)){
																$showPro = $objPro->getProductCategoryLimitArrayParentFL($client_id, $client_feature, $client_line, $start, $limit);
															} else {
																$showPro = $objPro->getProductCategoryLimitArrayParentF($client_id, $client_feature, $start, $limit);
															}
														}else if($action == 'detailOriginCate'){
															if(isset($client_line)){
																$showPro = $objPro->getProductCategoryLimitArrayParentOL($client_id, $client_origin, $client_line, $start, $limit);
															} else {
																$showPro = $objPro->getProductCategoryLimitArrayParentO($client_id, $client_origin, $client_line, $start, $limit);
															}
														}else{
															if(isset($client_line)){
																$showPro = $objPro->getProductCategoryLimitArrayParentL($client_id, $client_line, $start, $limit);
															} else {
																$showPro = $objPro->getProductCategoryLimitArrayParent($client_id, $start, $limit);
															}
														}
													}else{
														if($action == 'detailBrandCate'){
															if(isset($client_line)){
																$showPro = $objPro->getProductCategoryLimitArrayBL($client_id, $client_brand, $client_line, $start, $limit);
															} else {
																$showPro = $objPro->getProductCategoryLimitArrayB($client_id, $client_brand, $start, $limit);
															}
														}else if($action == 'detailFeatureCate'){
															if(isset($client_line)){
																$showPro = $objPro->getProductCategoryLimitArrayFL($client_id, $client_feature, $client_line, $start, $limit);
															} else {
																$showPro = $objPro->getProductCategoryLimitArrayF($client_id, $client_feature, $start, $limit);
															}
														}else if($action == 'detailOriginCate'){
															if(isset($client_line)){
																$showPro = $objPro->getProductCategoryLimitArrayOL($client_id, $client_origin, $client_line, $start, $limit);
															} else {
																$showPro = $objPro->getProductCategoryLimitArrayO($client_id, $client_origin, $client_line, $start, $limit);
															}
														}else{
															if(isset($client_line)){
																$showPro = $objPro->getProductCategoryLimitArrayL($client_id, $client_line, $start, $limit);
															} else {
																$showPro = $objPro->getProductCategoryLimitArray($client_id, $start, $limit);
															}
														}
													}
												}else{
													if($action == 'detailBrandCate'){
														if(isset($client_line)){
															$showPro = $objPro->getProductCategoryLimitBL($client_id, $client_brand, $client_line, $start, $limit);
														} else {
															$showPro = $objPro->getProductCategoryLimitB($client_id, $client_brand, $start, $limit);
														}
													}
													else if($action == 'detailFeatureCate'){
														if(isset($client_line)){
															$showPro = $objPro->getProductCategoryLimitFL($client_id, $client_feature, $client_line, $start, $limit);
														} else {
															$showPro = $objPro->getProductCategoryLimitF($client_id, $client_feature, $start, $limit);
														}
													}
													else if($action == 'detailOriginCate'){
														if(isset($client_line)){
															$showPro = $objPro->getProductCategoryLimitOL($client_id, $client_origin, $client_line, $start, $limit);
														} else {
															$showPro = $objPro->getProductCategoryLimitO($client_id, $client_origin, $start, $limit);
														}
													}else{
														if(isset($client_line)){
															$showPro = $objPro->getProductCategoryLimitL($client_id, $client_line, $start, $limit);
														} else {
															$showPro = $objPro->getProductCategoryLimit($client_id, $start, $limit);
														}
													}
												}
											}else{
												$checkCate = $objCate->checkCategoryParentChild($client_id);
												if($checkCate){
													if($action == 'detailBrandCate'){
														if(isset($client_line)){
															$showPro = $objPro->getProductCategoryLimitArrayBL($client_id, $client_brand, $client_line, $start, $limit);
														} else {
															$showPro = $objPro->getProductCategoryLimitArrayB($client_id, $client_brand, $start, $limit);
														}
													}else if($action == 'detailFeatureCate'){
														if(isset($client_line)){
															$showPro = $objPro->getProductCategoryLimitArrayFL($client_id, $client_feature, $client_line, $start, $limit);
														} else {
															$showPro = $objPro->getProductCategoryLimitArrayF($client_id, $client_feature, $start, $limit);
														}
													}else if($action == 'detailOriginCate'){
														if(isset($client_line)){
															$showPro = $objPro->getProductCategoryLimitArrayOL($client_id, $client_origin, $client_line, $start, $limit);
														} else {
															$showPro = $objPro->getProductCategoryLimitArrayO($client_id, $client_origin, $client_line, $start, $limit);
														}
													}else{
														if(isset($client_line)){
															$showPro = $objPro->getProductCategoryLimitArrayL($client_id, $client_line, $start, $limit);
														} else {
															$showPro = $objPro->getProductCategoryLimitArray($client_id, $start, $limit);
														}
													}
												}else{
													if($action == 'detailBrandCate'){
														if(isset($client_line)){
															$showPro = $objPro->getProductCategoryLimitBL($client_id, $client_brand, $client_line, $start, $limit);
														} else {
															$showPro = $objPro->getProductCategoryLimitB($client_id, $client_brand, $start, $limit);
														}
													}
													else if($action == 'detailFeatureCate'){
														if(isset($client_line)){
															$showPro = $objPro->getProductCategoryLimitFL($client_id, $client_feature, $client_line, $start, $limit);
														} else {
															$showPro = $objPro->getProductCategoryLimitF($client_id, $client_feature, $start, $limit);
														}
													}
													else if($action == 'detailOriginCate'){
														if(isset($client_line)){
															$showPro = $objPro->getProductCategoryLimitOL($client_id, $client_origin, $client_line, $start, $limit);
														} else {
															$showPro = $objPro->getProductCategoryLimitO($client_id, $client_origin, $start, $limit);
														}
													}else{
														if(isset($client_line)){
															$showPro = $objPro->getProductCategoryLimitL($client_id, $client_line, $start, $limit);
														} else {
															$showPro = $objPro->getProductCategoryLimit($client_id, $start, $limit);
														}
													}
												}
											}
										}
										?>
										
											<div class="row">
										<?php
										foreach ($showPro as $list){
											?>
												<div class="col-sm-6 col-xs-12">
													<div class="prod" style="margin-bottom: 40px;margin-top: 40px;">
														<div class="row">
															<div class="col-md-5 col-xs-10 col-xs-offset-1">
																<div class="prod-img">
																	<a href="?action=viewProduct&id=<?php echo $list['product_id']; ?>">
																		<img src="<?php echo '../controller/public/client/images/product/'.$list['product_image']; ?>" alt="<?php echo $list['product_name']; ?>" title="<?php echo $list['product_name']; ?>"></a>
																</div>
															</div>
															<div class="col-md-6 col-xs-12">
																<div class="prod-text">
																	<h2>
																		<a href="?action=viewProduct&id=<?php echo $list['product_id']; ?>"><?php echo $list['product_name']; ?></a>
																	</h2>
																	<?php
																	$objProductLine = new ProductLine();
																	$showCompact = $objProductLine->getProductLineByIdPL($list['product_id']);
																	if($showCompact != ""){
																		foreach($showCompact as $compact){
																	?>
																			<div class="bg-icon"><?php echo $compact[0] ?></div>
																	<?php
																		} 
																	}
																	?>
																	<br/>
																	<p class="desc"><?php echo nl2br($list['product_description']); ?></p>
																		<?php 
																			if($list['product_in_stock'] == 0){
																				echo '<p><span class="price">Sold out   </span>';
																			}else{
																		?>
																	<?php
																		if($list['product_discount']!=0){
																	?>
																	<span class="rrp">Old Price:
																		<?php
																			if($list['product_currency']== 'vnđ' || $list['product_currency']== 'đ' || $list['product_currency']== 'vnd' || $list['product_currency']== 'đồng'){
																		?>
																		<span class="rrp-price"><?php  echo '<span>'.number_format($list['product_price'],2).'</span><span> '.$list['product_currency'].'<span>'; ?>
																		<?php
																			} else{
																		?>
																		<span class="rrp-price"><?php  echo '<span>'.$list['product_currency'].number_format($list['product_price'],2).'</span><span> '.'<span>'; ?>
																		<?php
																		} }else{
																			echo '<br />';
																		}
																		?>
																	<div class="add-box">
																				<form action="?action=add_cart" method="post" name="add_cart">
																					<input type="hidden" name="productkey" value="<?php echo $list['product_id'];?>"/>
																						<input class="add-qty" id="quantity" name="itemqty" type="hidden" value="1">
																						<input type="submit" class="add-btn btn" value="Add to Cart" >
																				</form>
																		<?php
																			if($list['product_discount']==0){
																		?>
																		<?php
																			if($list['product_currency']== 'vnđ' || $list['product_currency']== 'đ' || $list['product_currency']== 'vnd' || $list['product_currency']== 'đồng'){
																		?>
																		<span class="price"><?php  echo '<span>'.number_format($list['product_price'],2).'</span><span> '.$list['product_currency'].'<span>'; ?>
																		<?php
																			} else{
																		?>
																		<span class="price"><?php  echo '<span>'.$list['product_currency'].number_format($list['product_price'],2).'</span><span> '.'<span>'; ?>
																		<?php
																			}
																		?>
																		<?php
																			}else {
																			if($list['product_currency']== 'vnđ' || $list['product_currency']== 'đ' || $list['product_currency']== 'vnd' || $list['product_currency']== 'đồng'){
																		?>
																		<span class="price"><?php  echo '<span>'.number_format($list['product_discount'],2).'</span><span> '.$list['product_currency'].'<span>'; ?>
																		<?php
																			} else{
																		?>
																		<span class="price"><?php  echo '<span>'.$list['product_currency'].number_format($list['product_discount'],2).'</span><span> '.'<span>'; ?>
																		<?php
																			}}
																		?>
																	</div>
																	<?php
																		}
																	?>
																</div>
															</div>
														</div>
													</div>
												</div>
										<?php
											}
										?>
											</div>
										<?php
										}
										?>
								<!-- -->
							</div>
						</div>
					</div>                              
				</div>

				<div id="pages"><p>
					<?php
					if($action == 'product'){
						// nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
						if ($current_page > 1 && $total_page > 1){
							echo '<a href="?action=product&page='.($current_page-1).'">Prev</a> | ';
						}
						 
						// Lặp khoảng giữa
						for ($i = 1; $i <= $total_page; $i++){
							// Nếu là trang hiện tại thì hiển thị thẻ span
							// ngược lại hiển thị thẻ a
							if ($i == $current_page){
								echo '<span>page '.$i.'</span> | ';
							}
							else{
								echo '<a href="?action=product&page='.$i.'">page '.$i.'</a> | ';
							}
						}
						 
						// nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
						if ($current_page < $total_page && $total_page > 1){
							echo '<a href="?action=product&page='.($current_page+1).'">Next</a>';
						}
					}else if($action == 'viewAllProduct'){
						// nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
						if ($current_page > 1 && $total_page > 1){
							echo '<a href="?action=viewAllProduct&id='.$client_title.'&page='.($current_page-1).'">Prev</a> | ';
						}
						 
						// Lặp khoảng giữa
						for ($i = 1; $i <= $total_page; $i++){
							// Nếu là trang hiện tại thì hiển thị thẻ span
							// ngược lại hiển thị thẻ a
							if ($i == $current_page){
								echo '<span>page '.$i.'</span> | ';
							}
							else{
								echo '<a href="?action=viewAllProduct&id='.$client_title.'&page='.$i.'">page '.$i.'</a> | ';
							}
						}
						 
						// nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
						if ($current_page < $total_page && $total_page > 1){
							echo '<a href="?action=viewAllProduct&id='.$client_title.'&page='.($current_page+1).'">Next</a>';
						}
					}else{
						// nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
						if ($current_page > 1 && $total_page > 1){
							echo '<a href="?action=category&id='.$client_id.'&page='.($current_page-1).'">Prev</a> | ';
						}
						 
						// Lặp khoảng giữa
						for ($i = 1; $i <= $total_page; $i++){
							// Nếu là trang hiện tại thì hiển thị thẻ span
							// ngược lại hiển thị thẻ a
							if ($i == $current_page){
								echo '<span>page '.$i.'</span> | ';
							}
							else{
								echo '<a href="?action=category&id='.$client_id.'&page='.$i.'">page '.$i.'</a> | ';
							}
						}
						 
						// nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
						if ($current_page < $total_page && $total_page > 1){
							echo '<a href="?action=category&id='.$client_id.'&page='.($current_page+1).'">Next</a>';
						}
					}
					?>
                </div>
			</div>
        </div>
    </div></div>
</section>
<!-- END PRODUCT -->
<?php include '../views/client/footer.php'; ?>