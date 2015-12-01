<?php

namespace App\App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{


	/**
	 * @param $id
	 * @param array $columns
	 * @return mixed
	 */
	public function find($id, $columns = array('*'))
	{

		return $this->find($id, $columns);
	}

	/**
	 * @param $attribute
	 * @param $value
	 * @param array $columns
	 * @return mixed
	 */
	public function findBy($attribute, $value, $columns = array('*'))
	{

		return $this->where($attribute, '=', $value)->first($columns);
	}

	/**
	 * @param array $columns
	 * @return mixed
	 */
	public function findall($columns = array('*'))
	{
		return $this->get($columns);
	}

	/**
	 * @param int $perPage
	 * @param array $columns
	 * @return mixed
	 */
	public function paginate($perPage = 1, $columns = array('*'))
	{
		return $this->paginate($perPage, $columns);
	}

	/**
	 * @param array $data
	 * @return mixed
	 */
	public function create(array $data)
	{
		return $this->create($data);
	}

	/**
	 * @param array $data
	 * @param $id
	 * @param string $attribute
	 * @return mixed
	 */
	public function update(array $data, $id, $attribute = "id")
	{
		return $this->find($id)->update($data);
	}

	/**
	 * @param $id
	 * @return mixed
	 */
	public function remove($id)
	{
		return $this->destroy($id);
	}


	// // public function getIdBySlug($slug)
	// // {
	// // 	return $this->findBy('slug',$slug,['id'])->id;
	// // }

	// // public function getSlug($title)
	// // {
	// // 	 $slug = Str::slug($title);

	// //     	$slugCount = count( $this->model->whereRaw("slug REGEXP '^{$slug}(-[0-9]*)?$'")->get() );

	// //    	return ($slugCount > 0) ? "{$slug}-{$slugCount}" : $slug;

	// // }

    /**
     * Return list for select box.
     * @param  string $first
     * @param  string $second
     * @return array
     */
    public function lists($first,$second)
    {
        return $this->lists($first,$second);
    }
}
