<?php

namespace App\Repositories;
use Modules\Category\Entities\Category;

class CategoryRepositories implements CategoryInterface {

	public function get_all_data(){
		return Category::get();

	}

	public function get_single_data($id){
		return "some";

	}

	public function data_store(array $data){
		return "some";

	}

	public function data_update($id, array $data){
		return "some";

	}

	public function data_delete($id){
		return "some";

	}

}