<?php

namespace Modules\Category\Repositories;
use Modules\Category\Entities\Category;
class CategoryRepositories implements CategoryInterface {

	public function get_all_data(){
		return Category::get();

	}

	public function get_single_data($id){
		return Category::find($id);

	}

	public function data_store(array $data){
		return Category::create($data);

	}

	public function data_update($id, array $data){
		return Category::find($id)->update($data);

	}

	public function data_delete($id){
		return Category::destroy($id);

	}

}