<?php

class CategoryManagerServiceProviderTest extends BaseTest
{
	public function testCategoryManagerWhenUsing() {
		$this->assertInstanceOf(\MicroweberPackages\CategoryManager\CategoryManager::class, app('category_manager'));
	}
}