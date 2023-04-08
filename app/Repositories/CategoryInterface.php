<?php

namespace App\Repositories;
interface CategoryInterface{

	public function get_all_data();

	public function get_single_data($id);

	public function data_store(array $data);

	public function data_update($id, array $data);

	public function data_delete($id);


}